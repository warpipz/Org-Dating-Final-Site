<?php
	
	class Notification extends AppModel{
		
		public $loggedtype = 3;
		
		public function afterFind( $rows = array() ){
			$userM = ClassRegistry::init('User');
			$userMt = ClassRegistry::init('UserMeta');
			$eventM = ClassRegistry::init('Event');
			$userM->MetaOnly();
			foreach($rows as $key => $row){		
				if(isset($row['Notification']['user_id']) && $row['Notification']['user_id']){
					$user = $userM->findById($row['Notification']['user_id']);
					$rows[$key]['User'] = $user['User'];
					$rows[$key]['UserMeta'] = $userMt->getMetaOf($row['Notification']['user_id']);
					$event = $eventM->findById($row['Notification']['event_id']);
					if($event){
						$rows[$key]['Event'] = $event['Event'];					
						if(isset($rows[$key]['Notification']['target_id']) && $rows[$key]['Notification']['target_id']){
							//echo "target_id ".$row['Notification']['target_id'];
							$user = $userM->findById($row['Notification']['target_id']);
							$rows[$key]['Target']['User'] = $user['User'];
							$rows[$key]['Target']['UserMeta'] = $userMt->getMetaOf($row['Notification']['target_id']);
						}else{
							$rows[$key]['Target']['User'] = array();
							$rows[$key]['Target']['UserMeta'] = array();	
						}
					}else{
						$rows[$key]['Event']['title'] = "Event Removed";	
					}
					$rows[$key]['Notification']['message'] = $this->createMessage($rows[$key]);
				}
			}
			return $rows;			
		}
		
		private function createMessage($data,$text=''){
			
			if($data['Notification']['type']==0){
				$text = ($this->loggedtype==1) ? "You" : "{$data['UserMeta']['name']} has";
				$text .= " joined \"{$data['Event']['title']}\"";	
			}
			if($data['Notification']['type']==1){
				$text = ($this->loggedtype==2) ? "You" : "{$data['UserMeta']['name']} has";
				$text .= " added Event \"{$data['Event']['title']}\"";	
			}
			if($data['Notification']['type']==2){
				$text = ($this->loggedtype==2) ? "You" : "{$data['UserMeta']['name']} has";
				$text .= " updated Event \"{$data['Event']['title']}\"";	
			}
			if($data['Notification']['type']==3){
				$text = ($this->loggedtype==1) ? "You" : "{$data['UserMeta']['name']}";
				$text .= " rated {$data['Target']['UserMeta']['name']} in \"{$data['Event']['title']}\"";	
			}
			
			return $text;
		}
		
			
	}
	
?>