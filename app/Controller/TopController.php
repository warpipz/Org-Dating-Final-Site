<?php
	
	class TopController extends AppController{
		
		public $uses = array(
			'Event',
			'EventUser',
			'User',
			'Notification'
		);
		
		public function index(){		
			

			//$event2 = $this->hasEvent();
			//pr($event2)
			if($this->request->is('post')){
				$params = array(
					'conditions' => array(
						$this->data,
						'type' => 1
					)
				);	
				$this->User->hasMany = array(
				'UserMeta' => array(
					'className' => 'UserMeta',
					'foreignKey' => 'user_id',
					'dependent' => true
				));
				$user = $this->User->find('first',$params);
				$num = $this->EventUserNumber();
				//pr($user);
				if(count($user)>0){
					$event = $this->isJoined($user['User']['id']);
					if(isset($event['Event']['id'])){
						//pr($event);

						$params = array(
							'event_id' => $event['Event']['id'],
							'user_id' => $user['User']['id']
							
						);
						$this->EventUser->recursive = -1;
						$eu = $this->EventUser->find('all',array('conditions'=>$params));
						
						if(!$eu){
							$params['number'] = $num;
							$this->EventUser->save($params);
							$params = array(
								'user_id' => $user['User']['id'],
								'target_id' => 0,
								'event_id' => $event['Event']['id'],
								'type' => 0,
							); 

							$this->Notification->save($params);
						} 
						$this->Session->write('LOGGED',$user);	
					}
					else{
						//echo "HOi";
						 ($event==1)? $this->Session->write('LOG_ERR_USR','Event has full of participants.'):$this->Session->write('LOG_ERR_USR','No Events as of Now.');
					}

				}else{
					$this->Session->write('LOG_ERR_USR','Wrong Credentials.');	
				}
			}
			
			if($this->Session->check('LOGGED')){
				$logged = $this->Session->read('LOGGED');
				
				switch($logged['User']['type']){
					
					case 2 :
					case 3 :
						$this->redirect('/organizer');
						break;
					default :
						$this->redirect('/user');
						break;
					
				}
			}
			
			$params = array(
				'conditions' => array(
					'date(date)' => date('Y-m-d'),
					'status' => 0
				)
			);
			$event = $this->Event->find('first',$params);

			//pr($event);
			/*
			if($event &&  count($event['EventUser']) != $event['Event']['participants']){
				echo 'pwde pa total:'. count($event['EventUser']) .' maximum:'.$event['Event']['participants'];
			}else{
				echo 'dli na pwde';
			}*/
		
			$this->set('event',$event);
		}
		
		public function clear(){
			$this->Session->destroy();
			$this->redirect('index');	
		}
		
	}
	
?>