<?php

class PartyController extends AppController{

	public $uses = array(
		'Event',
		'User',
		'Notification'
		);

	public function index(){
		$this->loadModel('Event');
		$curEvent = $this->Event->find('first', array(
	        'conditions' => array('id' => 4)
			));
			
		$this->set('curEvent',$curEvent);
		
		//pr($curEvent);
		$this->Session->write('Event.ID', 4);

		$params = array(
			'conditions' => array(
				'date(date)' => date('Y-m-d')
			)
		);
		$event = $this->Event->find('first',$params);
		$this->set('event',$event);
		//pr($event);
	}
	public function number(){

	}
	public function flow(){

	}

	public function check_profile(){
		$logged = $this->Session->read('LOGGED');
		if(!$logged){
		   $this->redirect('/');
		}

		$this->loadModel('Event');
		$this->loadModel('EventUser');
		$this->loadModel('User');
		$this->loadModel('Rating');

		
		$logged = $this->Session->read('LOGGED');
		$gender = $logged['UserMeta']['genderName'];
		$gender_int = $logged['UserMeta']['gender'];
		$event = $this->isJoined($logged['User']['id']);
		$eventID = $event['Event']['id'];
		//pr($logged);
		$event1 =  $this->EventUser->find('all', array(
			'joins' => array( 
					array(
						'table' => 'users', 
						'alias' => 'User', 
						'type' => 'LEFT',
						'conditions' => array('User.id = EventUser.user_id')
						),
					array(
						'table' => 'user_metas', 
						'alias' => 'UserMeta', 
						'type' => 'LEFT',
						'conditions' => array('User.id = UserMeta.user_id')
						)
					),
			'conditions' => array(				
				'EventUser.event_id' => $eventID,
				'UserMeta.key' => 'gender',
				'UserMeta.value !=' => $gender_int,
			),
			'order' => array('EventUser.number' => 'ASC')
		));		
		
		//pr($event1);
		$this->set('event_user',$event1);		
		$this->set('eventID', $eventID);
	}
	public function rating($id=""){
		$this->LoadModel('Rating');
		$this->LoadModel('RatingMeta');
		$logged = $this->Session->read('LOGGED');
		$loggedID = $logged['User']['id'];
		$event = $this->hasEvent();
		$eventID = $event['Event']['id'];
		if($this->request->is('post')){	
			//$this->Rating->save($this->request->data);
			//$this->redirect('time_sheet');
			//pr($this->data);
			$data = $this->data;
			$params = array(
					'event_id' => $data['Rating']['event_id'],
					'user_id' => $data['Rating']['user_id'],
					'from_id' => $data['Rating']['from_id'],
					'event_user_id' => $data['Rating']['event_user_id'],
					'is_second' => $data['Rating']['is_second']
				);
			$this->Rating->save($params);
			$last = $this->Rating->getLastInsertId();
			$params = array(
					'event_id' => $data['Rating']['event_id'],
					'target_id' => $data['Rating']['user_id'],
					'user_id' => $data['Rating']['from_id'],
					'event_user_id' => $data['Rating']['event_user_id'],
					'type' => 3
				);
			$this->Notification->save($params);
			unset($data['Rating']['user_id']);
			unset($data['Rating']['event_id']);
			unset($data['Rating']['from_id']);
			unset($data['Rating']['event_user_id']);
			unset($data['Rating']['is_second']);
			foreach ($data['Rating'] as $key => $value) {
				$this->RatingMeta->create();
				$params = array(
						'key' => $key,
						'value' => $value,
						'rating_id' => $last
					);

				//pr($params);
				$this->RatingMeta->save($params);
				//echo $this->RatingMeta->save($params);
				//$this->redirect('/party/time_sheet');
			}
			$this->redirect('/party/check_profile');

		}

	}
	public function result($id = null){

	}
	public function user_profile($id=""){
		$this->loadModel('RatingMeta');
		$this->loadModel('Rating');
		$this->loadModel('Report');
		$logged = $this->Session->read('LOGGED');
		$loggedID = $logged['User']['id'];
		$gender = $logged['UserMeta']['genderName'];
		$gender_int = $logged['UserMeta']['gender'];
		$event = $this->isJoined($logged['User']['id']);
		$eventID = $event['Event']['id'];
		$this->loadModel('EventUser');
		$data = $this->EventUser->findById($id);
		$this->Rating->hasMany = array(
				'RatingMeta' => array(
				'className' => 'RatingMeta',
				'foreignKey' => 'rating_id',
				'dependent' => true
			)
		);
		//pr($data);
		$is_rate = $this->Rating->findAllByFromIdAndEventUserId($loggedID,$id);
		$is_report = $this->Report->findByUserIdAndEventId($loggedID,$eventID);

		if(count($is_rate)==2) {
			$this->redirect('/party/check_profile');
		}
		$count_rate = $this->Rating->find('all', array(
				'conditions' => array(
						'from_id' => $loggedID,
						'event_id' => $eventID
					)
			));
		

		$event1 =  $this->EventUser->find('all', array(
			'joins' => array( 
					array(
						'table' => 'users', 
						'alias' => 'User', 
						'type' => 'LEFT',
						'conditions' => array('User.id = EventUser.user_id')
						),
					array(
						'table' => 'user_metas', 
						'alias' => 'UserMeta', 
						'type' => 'LEFT',
						'conditions' => array('User.id = UserMeta.user_id')
						)
					),
			'conditions' => array(				
				'EventUser.event_id' => $eventID,
				'UserMeta.key' => 'gender',
				'UserMeta.value !=' => $gender_int,
			),
			'order' => array('EventUser.number' => 'ASC')
		));
		$numPar = count($event1);
		$lessPar = $numPar-1;
		$numRate = count($count_rate);

		echo "Number of Participants:".$numPar."</br>";
		echo "Number of Participants minus one:".$lessPar."</br>";
		echo "Number of voted participants:".$numRate."<hr>";
		if($numRate !=$numPar){
			echo "wala pa navote tanan";
		}else{
			echo "navote na tanan";
		}
		$this->set('is_report',$is_report);
		$this->set('is_rate',$is_rate);
		$this->set('id_user',$data['User']['id']);
		$this->set('data', $data);
		$this->set('loggedID', $loggedID);
		$this->set('eventID', $eventID);
		$this->set('numPar', $numPar);
		$this->set('numRate', $numRate);
	}

	public function time_sheet(){
		$this->loadModel('Member');
		$this->LoadModel('Rating');
		$this->LoadModel('RatingMeta');
		$this->LoadModel('EventUser');
		$logged = $this->Session->read('LOGGED');
		$event = $this->isJoined($logged['User']['id']);
		$eventID = $event['Event']['id'];
		
		$loggedID = $logged['User']['id'];

		$this->Rating->hasMany = array(
				'RatingMeta' => array(
					'className' => 'RatingMeta',
					'foreignKey' => 'rating_id',
					'dependent' => true
				)
		);
		$rate=$this->Rating->find('all', 
				array('conditions' => 
						array('from_id' => $loggedID,'event_id' => $eventID,'is_second'=>0)
					)
			);
	
		$this->set('rate', $rate);

	}

	public function phasetwo(){

		$this->loadModel('Report');
		$this->loadModel('ReportMeta');

		$logged = $this->Session->read('LOGGED');
		$loggedID = $logged['User']['id'];
		$event = $this->isJoined($logged['User']['id']);
		$eventID = $event['Event']['id'];

		$list_options = array('','one','two','three','four','five','six');
		if($this->request->is('post')){
			
			$this->Report->create();
			$params = array( 
					'user_id' => $loggedID,
					'event_id' => $eventID,
					'date_created' => date('Y-m-d H:i:s')
				);

			$this->Report->save($params);

			$report_id = $this->Report->getLastInsertId();

			foreach($this->data['user_options'] as $key => $options){
			
				$this->ReportMeta->create();
				$option_arr = explode(',', $options);
				$params2 = array(
						'meta_key' => 'event_user_id_'.$list_options[$key+1],
						'meta_value' => $option_arr[0],
						'meta_num' => $option_arr[1],
						'report_id' => $report_id,
						'date_created' => date('Y-m-d H:i:s')
					);

				//pr($params2);
				$this->ReportMeta->save($params2);
				
			}
			$this->redirect('/party/check_profile');
		}


	}
}
?>