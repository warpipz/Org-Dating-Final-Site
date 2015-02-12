<?php

	class AdminController extends AppController{
		
		public $uses = array(
			'User',
			'UserMeta'
		);
		
		public function index(){
				
		}
		
		public function organizer(){
			
			$logged = $this->Session->read('LOGGED');
			if(!$logged){
				$this->redirect('/organizer/login');
			}
			$loggedID = $logged['User']['id'];
			$params = array(
				'conditions' => array(
					'type' => 2,
					'status' => 0
				)
			);
			
			$orgs = $this->User->find('all',$params);
			$this->set('organizers',$orgs);
			
		}
		
		public function addOrganizer(){
			$this->layout = null;
			$this->autoRender = false;
			$json['status'] = 0;
			
			if($this->data){
				
				$this->User->recursive = -1;
				$user = $this->User->findByLoginId($this->data['username']);
				if($user){
					$json['status']	= 2;
				}else{
					$params = array(
						'login_id' => $this->data['username'],
						'login_pw' => $this->data['password'],
						'type' => 2,
						'status' => 0
					);
					$this->User->save($params);	
					$user_id = $this->User->getLastInsertId();
					$params = array(
						'name' => $this->data['name'],
						'phonetic' => $this->data['phonetic'],
						'gender' => $this->data['gender']
					);
					foreach($params as $key => $value){
						$this->UserMeta->create();
						$args = array(
							'key' => $key,
							'value' => $value,
							'user_id' => $user_id
						);
						$this->UserMeta->save($args);
					}
					$json['status'] = 1;
				}
					
				echo json_encode($json);
				
			}
				
		}

		public function organizerview($id=null){

			$logged = $this->Session->read('LOGGED');
			if(!$logged){
				$this->redirect('/organizer/login');
			}
			
			$this->loadModel('User');
			$params = array('order by' => array('id' => 'desc'),
				'conditions' => array(
					'type'=> 2
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