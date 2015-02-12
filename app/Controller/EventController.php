<?php

class EventController extends AppController{

	public $uses = array(
		'Event',
		'User',
		'Notification'
		);

	public function index(){
		$this->checkLogged();
		$this->loadModel('User');
		$user_id = $this->Session->read('LOGGED.User.id');
		$users =$this->User->findById($user_id);
		//pr($users);
		if(isset($users['User']['type']) && $users['User']['type']== '3'){ // 3=admin,2=organizer
			$params = array('order' => array('date'=>'desc')); 
		}else{
			$params = array(
				'conditions'=> array('user_id' => $user_id),
				'order' => array('date'=>'desc')
				);
		}

		$events = $this->Event->find('all',$params);
		
		$this->set('events',$events);
		//print_r($users);
	}

	public function event_view($id=null) {
		$this->checkLogged();
		$this->loadModel('EventUser');
		$event = $this->Event->findById($id);
		
		/*
		if(date('Y-m-d',strtotime($event['Event']['date']))<date('Y-m-d') || $event['Event']['status']==1){
			$this->render('event_rating');
		}
		 */
		if($this->request->is('post')){
			$user_id = $this->Session->read('LOGGED.User.id');
			$data = $this->data;
			$date = $data['date_yr'].'-'.$data['date_month'].'-'.$data['date_day'];
			//$event = $this->hasEvent($date);
			$event = $this->getEvent();
			pr($event);
			if(!$event || $event['Event']['id']==$data['id']){
				$params = array(
					'id' => $data['id'],
					'title' => $data['title'],
					'description' => $data['description'],
					'participants' => $data['participants'],
					'date' => $date
					);	
				$this->Event->save($params);
				if(isset($event['Event']['id'])){
				$params = array(
						'user_id' => $user_id,
						'target_id' => 0,
						'event_id' => $event['Event']['id'],
						'type' => 2
					); 
				}
				$this->Notification->save($params);
				$this->redirect('/event/event_view/'.$id);
			}else{
				$this->Session->write('UPD_EVT_FAIL');	
			}
			$event = $this->Event->findById($id);
		}
		$this->set('event',$event);
	}
	
	public function addevent(){

		$this->layout = null;
		$this->autoRender = false;

		$json['status'] = 0;

		if($this->data && $this->Session->check('LOGGED')){
			$user_id = $this->Session->read('LOGGED.User.id');
			$params = array(
				'conditions' => array(
					'user_id' => $user_id,
					'title' => $this->data['name'],
					'status' => 0
					)
				);

			$event = $this->Event->find('first',$params);

			$params2 = array(
				'conditions' => array(
					'date' => $this->data['date_yr']."-".$this->data['date_month']."-".$this->data['date_day'],
					'status' => 0
					)
				);

			$exist_date = $this->Event->find('first',$params2);

			if(count($exist_date)>0){
				$json['status'] = 3; // naa nay parehas ug date_event ang maong event.
			}
			else{
				if(!$event){
					$params = array(
						'title' => $this->data['name'],
						'description' => $this->data['description'],
						'participants' => $this->data['participants'],
						'user_id' => $user_id,
						'status' => 0,
						'date' => $this->data['date_yr'].'-'.$this->data['date_month'].'-'.$this->data['date_day'].' 00:00:00'
						);
					$this->Event->save($params);
					$event_id = $this->Event->getLastInsertId();
					$params = array(
						'user_id' => $user_id,
						'target_id' => 0,
						'event_id' => $event_id,
						'type' => 1
						);
					$this->Notification->save($params);
					$json['status'] = 1;
				}
				
				else{
					$json['status']	= 2;
				}
			}

		}

		echo json_encode($json);

	}

	public function removeEvent(){

		$this->layout = null;
		$this->autoRender = false;

		$this->loadModel('Event');
		$id = $this->data['id'];
		$this->Event->delete($id);

	}

	public function checkdateEvent(){
		$this->layout = null;
		$this->autoRender = false;
		$this->loadModel('Event');
		$json['status'] = 0;
	}

	public function updateStatus(){
		$this->layout = null;
		$this->autoRender = false;
		$this->loadModel('Event');
		$id = $this->data['id'];
		
		$data = array(
			'id' => $id,
			'status' => 1
			);

		$this->Event->save($data);
	}
	public function event_user($id=null){
		$test = $this->loadModel('EventUser');
		$this->loadModel('UserMeta');
		$this->loadModel('User');
		$this->loadModel('Rating');
	
		$this->checkLogged();
		/*$this->EventUser->event_id = $id;
	 	if (!$this->EventUser->exists()) {
	 		throw new NotFoundException(__('Invalid Events'));
		}*/
		//echo date('Y-m-d H:m:');
		$this->EventUser->hasMany = array(
					'Rating' => array(
						'className' => 'Rating',
						'foreignKey' => 'event_user_id',
						'dependent' => true
				)
		);
		$params = array(
			'joins' => array( 
				array(
					'table' => 'user_metas', 
					'alias' => 'UserMeta', 
					'type' => 'LEFT',
					'conditions' => array('UserMeta.user_id = EventUser.user_id')
					)
			),
			'conditions' => array(
				'EventUser.event_id' => $id,
				'UserMeta.key' => 'gender'
				),
			/* 'group' => array('Rating.event_user_id'), */
			'order' => array('UserMeta.value'=> 'asc','EventUser.number')
			);

			//echo $this->Encryption->decode('P6BOyGdbF03rOYixwsutRkqPjKQ60R0huwehWbQoutE');
		$orgs = $this->EventUser->find('all',$params);
		//pr($orgs);

		$this->set('event',$orgs);
	}

	public function rating($id=null){	
		$this->checkLogged();
		$this->loadModel('Rating');
		$this->Rating->hasMany = array(
				'RatingMeta' => array(
				'className' => 'RatingMeta',
				'foreignKey' => 'rating_id',
				'dependent' => true
			)
		);
		//pr($this->Rating->findById($id));

		$this->set('ratings',$this->Rating->findById($id));
	}

	public function report($id = null)
	{
		$this->checkLogged();
		$this->set('title_for_layout','Reports');
		$this->loadModel('Report');
		$this->loadModel('ReportMeta');

		$this->set('reports',$this->Report->findById($id));
		
	}

	public function preview($report_id = null)
	{
		$this->set('title_for_layout','Preview-Reports');
		//print_r($this->data['average_arr']);
		//pr($this->data['you_choose']);
		/* $list = array(
				'you_choose' => $this->data['you_choose'],
				'average' => $this->data['average_arr']
			);
		*/
		//pr($this->data['comment_first']);
		/*
		$list2 = array(
				'thesame_numchoose' => $this->data['thesame_numchoose'],
				'total_numbers' => $this->data['total_numbers'],
				'comment_first' => $this->data['comment_first']
			);


		$this->set('lists', $list);
		$this->set('lists2', $list2);
			*/
		//$this->set('num_who_choose_u', $this->data['num_who_choose_u']);
	}

	
}

?>