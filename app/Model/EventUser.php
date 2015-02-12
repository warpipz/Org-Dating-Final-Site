<?php

class EventUser extends AppModel{

	public $userTable = false;

	public $event_urlid;
	
	public function afterFind( $rows = array() ){
		
		$user = ClassRegistry::init('User');
		$user->hasMany = array(
			'UserMeta' => array(
				'className' => 'UserMeta',
				'foreignKey' => 'user_id'
			)
		);
		foreach($rows as $key => $row){
			$u = $user->findById($row[$this->alias]['user_id']);
			$rows[$key]['User'] = $u['User'];
			$rows[$key]['UserMeta'] = $u['UserMeta'];
		}
		
		return $rows;
		
	}
	
}

?>