<?php
	
	class UserMeta extends AppModel{
		
		private function genderName($gender){
			return ($gender==1) ? 'Male' : 'Female';
		}
		
		private function convertUserMeta( $rows = array() , $new = array() ){
			foreach($rows as $key => $value){
				if($value['UserMeta']['key']=='gender'){
					$new['genderName'] = $this->genderName($value['UserMeta']['value']);
				}
				$new[$value['UserMeta']['key']] = $value['UserMeta']['value'];
			}
			return $new;
		}
		
		public function getMetaOf($user_id){
			$params = array(
				'conditions' => array(
					'user_id' => $user_id
				)
			);
			$met = $this->find('all',$params);
			return $this->convertUserMeta($met);
			
		}
			
	}
	
?>