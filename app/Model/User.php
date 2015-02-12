<?php
	
	class User extends AppModel{
		
		public $hasMany = array(
			'UserMeta' => array(
				'className' => 'UserMeta',
				'foreignKey' => 'user_id',
				'dependent' => true
			),
			'EventUser' => array(
				'className' => 'EventUser',
				'foreignKey' => 'user_id',
				'dependent' => true
			),
			'Event' => array(
				'className' => 'Event',
				'foreignKey' => 'user_id',
				'dependent' => true
			)		
			
		);
		
		private function convertUserMeta( $rows = array() , $new = array() ){
			foreach($rows as $key => $value){
				if($value['key']=='gender'){
					$new['genderName'] = $this->genderName($value['value']);
				}
				$new[$value['key']] = $value['value'];
			}
			return $new;
		}
		
		public function afterFind( $rows = array() ){				
			foreach($rows as $key => $row){
				if(isset($row['UserMeta'])){
					$rows[$key]['UserMeta'] = $this->convertUserMeta($row['UserMeta']);
				}
			}
			return $rows;
		}
		
		private function genderName($gender){
			return ($gender==1) ? 'Male' : 'Female';
		}
		
		public function afterSave( $row = array() ){
			/*$notifM = ClassRegistry::init('Notification');
			$eventM = ClassRegistry::init('Event');
			$params = array(
				'conditions' => array(
					'date(date)' => date('Y-m-d')
				),
				'recursive' => -1
			);
			
			$event = $eventM->find('first',$params);
			$params = array(
				'user_id' => $this->id,
				'target_id' => 0,
				'event_id' => $event['Event']['id'],
				'type' => 0,
				'status' => 0
			);
			$notifM->save($params);*/
		}
		
		public function MetaOnly(){
			$this->hasMany = array(
				'UserMeta' => array(
					'className' => 'UserMeta',
					'foreignKey' => 'user_id',
					'dependent' => true
				)
			);	
		}
			
	}
	
?>