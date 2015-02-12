<?php
	
	class NotificationController extends AppController{
		
		public $uses = array(
			'Notification'
		);
		
		public function index(){
			$logged = $this->Session->read('LOGGED');
			$paramsN = array();
			$params = array(
				'order' => array(
					'Notification.created' => 'desc'
				),
				
			);
			if($logged['User']['type']==1){
				$paramsN = array(
					'OR' => array(
						//array('target_id' => $logged['User']['id']),
						array(
							'user_id' => $logged['User']['id'],
							'type' => array(0,3)
						)
					)
				);
				$params['conditions'] = $paramsN;
				$this->Notification->loggedtype = $logged['User']['type'];
			}
			if($logged['User']['type']==2){
				$paramsN = array(
					'OR' => array(
						array('target_id' => $logged['User']['id']),
						array(
							'user_id' => $logged['User']['id'],
							'type' => array(1,2)
						)
					)
				);
				$params['conditions'] = $paramsN;
				$this->Notification->loggedtype = $logged['User']['type'];
			}
			
			$notifs = $this->Notification->find('all',$params);	
			$this->set('all',$notifs);
		}
		
		public function notifications(){
			
			$this->layout = null;
			$this->autoRender = false;
			
			$logged = $this->Session->read('LOGGED');
			$column = "aStatus";
			
			if($logged['User']['type']==1){
				$paramsN = array(
					'id >' => $this->data['id'],
					'uStatus' => 0,
					'OR' => array(
						//array('target_id' => $logged['User']['id']),
						array(
							'user_id' => $logged['User']['id'],
							'type' => array(0,3)
						)
					)
				);
				$params['conditions'] = $paramsN;
				$this->Notification->loggedtype = $logged['User']['type'];
			}
			if($logged['User']['type']==2){
				$paramsN = array(
					'id >' => $this->data['id'],
					'oStatus' => 0,
					'OR' => array(
						array('target_id' => $logged['User']['id']),
						array(
							'user_id' => $logged['User']['id'],
							'type' => array(1,2)
						)
					)
				);
				$params['conditions'] = $paramsN;
				$this->Notification->loggedtype = $logged['User']['type'];
			}
			if($logged['User']['type']==3){
				$paramsN = array(
					'id >' => $this->data['id'],
					'aStatus' => 0
				);
				$params['conditions'] = $paramsN;
				$this->Notification->loggedtype = $logged['User']['type'];
			}
			
			$notifs = $this->Notification->find('all',$params);
			
			echo json_encode($notifs);
				
		}
		
		public function view($id = NULL){
			if(!$id || !$this->Session->check('LOGGED')){
				$this->redirect('/');	
			}
			$notif = $this->Notification->findById($id);
			$params = array(
				'id' => $id,
				$this->columnstatus() => 1
			);
			$this->Notification->save($params);
			$this->notifs();
			$this->set('notif',$notif);
		}
		
		private function columnstatus(){
			$logged = $this->Session->read('LOGGED');	
			switch($logged['User']['type']){
				case 1 :
					$col = 'uStatus';
					break;
				case 2 :
					$col = 'oStatus';
					break;
				default:
					$col = 'aStatus';
					break;
			}
			return $col;
		}
			
	}
	
?>