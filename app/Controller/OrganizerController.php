<?php
	
	class OrganizerController extends AppController{
		
		public $uses = array(
			'Event',
			'EventUser',
			'User',
			'UserMeta'
		);
		
		public function login(){
			
			if($this->request->is('post')){
				
				$user = $this->User->find('first',array('conditions'=>$this->data['User']));
				if($user){
					$this->Session->write('LOGGED',$user);	
				}else{
					$this->Session->setFlash('Wrong Credentials','default',array('class'=>'alert alert-danger'));
				}
				
				$this->redirect('/event');
			}
			
		}
		
		
		public function logout(){
			$this->Session->destroy();
			$this->redirect('/');
		}
		
		public function index(){
			
			if(!$this->Session->check('LOGGED')){
				$this->redirect('login');
			}
			
		}

		public function users(){
			$logged = $this->Session->read('LOGGED');
			if(!$logged){
				$this->redirect('/organizer/login');
			}

			$this->loadModel('User');
			$params = array('order by' => array('id' => 'desc'),
				'conditions' => array(
					'type'=> 1
					)
				);
			$this->User->hasMany = array(
			'UserMeta' => array(
				'className' => 'UserMeta',
				'foreignKey' => 'user_id',
				'dependent' => true
			));
			$users = $this->User->find('all',$params);
			$this->set('users',$users);
			//print_r($users);
		}

		public function userview($id=null){
			$logged = $this->Session->read('LOGGED');
			if(!$logged){
				$this->redirect('/organizer/login');
			}
			
			$this->loadModel('User');
			$params = array('order by' => array('id' => 'desc'),
				'conditions' => array(
					'type'=> 1
					)
				);
			$this->User->hasMany = array(
			'UserMeta' => array(
				'className' => 'UserMeta',
				'foreignKey' => 'user_id',
				'dependent' => true
			));
			
			$users = $this->User->findById($id);

			//pr($users);
			$this->set('users',$users);

		}

		public function activeorinactive(){
 			$this->layout = null;
  			$this->autoRender = false;
  			$this->loadModel('User');

  			$userID = $this->data['userID'];
  			$userAction = $this->data['userAction'];

  			if($userAction == 'inactive'){
  				$this->User->save(array('id' => $userID, 'status' => 0));
  			}else{
  				$this->User->save(array('id' => $userID, 'status' => 1));
  			}	
		}

		}
	
?>