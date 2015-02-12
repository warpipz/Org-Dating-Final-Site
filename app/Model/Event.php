<?php

class Event extends AppModel{

	public $hasMany = array(
		'EventUser' => array(
			'className' => 'EventUser',
			'foreignKey' => 'event_id',
			'dependent' => true,
			'order' => array('EventUser.created'=>'asc')
			),
		'Rating' => array(
			'className' => 'Rating',
			'foreignKey' => 'event_id',
			'dependent' => true
			),
		'Report' => array(
			'className' => 'Report',
			'foreignKey' => 'event_id',
			'dependent' => true
			)
		);	

	public function afterFind( $rows = array() ){
		//print_r($rows);
		if(isset($rows[0]['EventUser'])){
		$user = ClassRegistry::init('User');
		$user->hasMany = array(
			'UserMeta' => array(
				'className' => 'UserMeta',
				'foreignKey' => 'user_id'
				)
			);
		foreach($rows[0]['EventUser'] as $key => $row){
			//echo "test";

			$u = $user->findById($row['user_id']);
			$rows[0]['EventUser'][$key]['User'] = $u['User'];
			$rows[0]['EventUser'][$key]['UserMeta'] = $u['UserMeta'];
		}
		}
		return $rows;
		
	}

}

?>