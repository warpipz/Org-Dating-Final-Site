<?php

class Users_Event extends AppModel{

	public $userTable = false;

	public $event_urlid;


	public function paginate($conditions, $fields, $order, $limit, $page = 1,$recursive = null, $extra = array()) {

		$recursive = -1;
		$this->useTable = false;
		$sql = "";

		$sql .= "SELECT event_users.*,users.*,user_metas.* 
		from event_users
		left join users on users.id = event_users.user_id
		left join user_metas on user_metas.user_id = users.id
		where event_users.event_id = '$this->event_urlid'
		limit ";

		
		$sql .=(($page -1) * $limit) . ',' .$limit;

		$results = $this->query($sql);

		$metas = array(
			'User' => $results[0]['users'],
			'Event_User'=>$results[0]['event_users']
		);
		foreach ($results as $key => $value) {
			$metas['UserMeta'][$value['user_metas']['key']] = $value['user_metas']['value'];
		}
		print_r($metas);
		//print_r($results);
		return $results;

	}

	public function paginateCount($conditions, $recursive, $extra){


		$sql ="";

		$sql = "SELECT event_users.*,users.*,user_metas.* 
		from event_users
		left join users on users.id = event_users.user_id
		left join user_metas on user_metas.user_id = users.id
		where event_users.event_id = '$this->event_urlid'
		and user_metas.key = 'email'
		";
		$this->recursive = $recursive;
		$results = $this->query($sql);
		return count($results);
	}

}

?>