<?php

class UserController extends AppController{

	public $uses = array(
		'Event',
		'EventUser',
		'User',
		'UserMeta',
		'Notification'
		);		

	public function index(){

		if($this->Session->check('LOGGED') && $this->Session->read('LOGGED.User.type')==1){

			if($this->request->is('post')){

				foreach($this->data as $key => $value){
					$params = array(
						'value' => "'".$value."'"
						);
					$cond = array(
						'key' => $key,
						'user_id' => $this->Session->read('LOGGED.User.id')
						);
					$this->UserMeta->updateAll($params,$cond);
				}

				$this->Session->write('SCC_USR_UPD','Successful');

			}			
			$this->User->hasMany = array(
				'UserMeta' => array(
					'className' => 'UserMeta',
					'foreignKey' => 'user_id',
					'dependent' => true
					));
			$user = $this->User->findById($this->Session->read('LOGGED.User.id'));
			$this->set('user',$user);
				//$this->redirect('/user/number');	
		}else{

			$this->Session->destroy();
			$this->redirect('/');	

		}

	}

	public function regcheck(){
		$this->loadModel('User');
		$this->layout = null;
		$this->autoRender = false;
		$json['status'] = 0;
		if($this->data){

			$data = $this->data;

			$params = array(
				'conditions' => array(
					'login_id' => $data['login_id'],
					'type' => 1
					)
				);
			$this->User->recursive = -1;
			$user = $this->User->find('first',$params);
			//print_r($user);
			if($user){
				$json['status']	= 2;
			}else{
				$json['status']	= 1;
			}

		}

		echo json_encode($json);

	}

	public function registration(){

		if($this->request->is('post')){

			$this->set('post',$this->data);

		}else{

			$this->redirect('index');	

		}			
	}

	public function registered(){
		$this->layout = null;
		$this->autoRender = false;
		$num = $this->EventUserNumber();
		if($this->request->is('post')){
			$event = $this->hasEvent();
			if($event){
				$data = $this->data;
				$params = array(
					'login_id' => $data['login_id'],
					'login_pw' => $data['login_pw'],
					'type' => 1,
					'status' => 0
					);
				$this->User->save($params);
				$user_id = $this->User->getLastInsertId();
				foreach($data as $key => $value){
					if($key=='login_id' || $key=='login_pw'){continue;}
					$this->UserMeta->create();
					$params = array(
						'key' => $key,
						'value' => $value,
						'user_id' => $user_id
						);
					$this->UserMeta->save($params);
				}
				$params = array(
					'event_id' => $event['Event']['id'],
					'user_id' => $user_id
					/*'number' => $num*/
					);
				$this->EventUser->save($params);
				$params = array(
					'user_id' => $user_id,
					'target_id' => 0,
					'event_id' => $event['Event']['id'],
					'type' => 0,
					'oStatus' => 0
				);
				$this->Notification->save($params);
				$id = $this->EventUser->getLastInsertId();
				$params = array(
					'conditions' => array(
						'login_id' => $data['login_id'],
						'login_pw' => $data['login_pw']
						)
					);
				$user = $this->User->find('first',$params);
				$this->Session->write('LOGGED',$user);
				$this->redirect('/');
			}else{
				$this->Session->write('EVT_NLL_ERR','No Event or Event is Full.');	
				$this->redirect('/');
			}
		}
	}

	public function number(){
		$event = $this->getEvent();
		$data=$this->EventUserNumber();
		$this->loadModel('EventUser');
		$params = array(
					'event_id' => $event['Event']['id'],
					'user_id' => $this->Session->read('LOGGED.User.id'),
					/* 'number' => $data */
					);
		$this->EventUser->updateAll(array('number' => $data),$params);
		/*
		$params = array(
					'event_id' => $event['Event']['id'],
					'user_id' => $this->Session->read('LOGGED.User.id'),
					'number' => $data
					);
		$this->EventUser->updateAll(array('number' => $data),$params);
		*/
		$this->set('data', $data);

	}
	public function description(){
		$event = $this->getEvent();
		$this->set('event',$event);
	}

}
?>