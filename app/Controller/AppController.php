<?php
	App::uses('Controller', 'Controller');
	App::import('Vendor', 'Encryption/Encryption');
	class AppController extends Controller {
		public $helpers = array('RatingCategory');
		protected $Encryption;
		
		public function beforeFilter(){
			parent::beforeFilter();
			$this->Encryption = new Encryption();
			$this->notifs();
		}
		
	public function getNumber($from_id,$event_id){		
		
		$this->loadModel('EventUser');		
		return $this->EventUser->findByUserIdAndEventId($from_id,$event_id);		
	}
	public function getReport($user_id, $event_id)
	{
		$this->loadModel('Report');
	 	return $this->Report->findByUserIdAndEventId($user_id,$event_id);
	}

	public function getMemberInfo($id){ 
		$this->loadModel('User');
		return $this->User->findById($id);		
	}
	public function getRatingScore($id,$user_id){
		$this->loadModel('Rating');	
		$this->loadModel('EventUser');
		//$event_user = $this->EventUser->findById($id);
		$this->Rating->hasMany = array(
				'RatingMeta' => array(
				'className' => 'RatingMeta',
				'foreignKey' => 'rating_id',
				'dependent' => true
			)
		);
		return $this->Rating->findByEventUserIdAndFromIdAndIsSecond($id,$user_id,0);	
	}
	public function getScore($id){	
		$this->layout = null;
		$this->autoRender = false;		
		$this->loadModel('RatingMeta');		
		//return $this->RatingMeta->findByRatingId($id);		
		return $this->RatingMeta->find('all',array('conditions'=> array('rating_id' => $id)));		
	}
	
	public function getTheSameNum($meta_key,$meta_value, $report_id){ // pagkuha sa mga number na parehas niya ug gipilian
		$this->layout = null;
		$this->autoRender = false;
		$this->loadModel('ReportMeta');
		$this->loadModel('EventUser');		
		$params = array(
				'conditions' => array(
						'meta_key' => $meta_key,
						'meta_value' => $meta_value,
						'report_id !=' => $report_id
					)
			);
		$result = $this->ReportMeta->find('all',$params);

		foreach ($result as $key => $results) {
			    $event_usernum = $this->EventUser->findByEventIdAndUserId($results['Report']['event_id'],$results['Report']['user_id']); 
				$result[$key]['UserNum'] = $event_usernum;
		}
		return $result;
	}

	public function getNumberWhoChoseYou($event_user_id,$index){
		$this->layout = null;
		$this->autoRender = false;
		$this->loadModel('Report');
		$this->loadModel('ReportMeta');
		$list_options = array('','one','two','three','four','five','six');
		$params = array(
				'conditions' => array(
						'meta_key' => 'event_user_id_'.$list_options[$index],
						'meta_value' => $event_user_id
					)
			);		
		$list_results = $this->ReportMeta->find('all',$params);
		$num_arr = array();
		foreach ($list_results as $key => $list_result) {
			$number_niya = $this->getNumber($list_result['Report']['user_id'],$list_result['Report']['event_id']);
			$num_arr[$key] = $number_niya['EventUser']['number'].'番';
			//pr($number_niya);
		}

		return $num_arr;
		unset($list_results);
	}


	public function notifs(){
			if($this->Session->check('LOGGED')){
				$this->loadModel('Notification');
				$logged = $this->Session->read('LOGGED');
				$paramsN = array();
				$params = array(
					'order' => array(
						'Notification.created' => 'desc'
					),
					'limit' => 5
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
				
				if($notifs){
					switch($logged['User']['type']){
						case 1 :
							$column = 'uStatus';		
							break;
						case 2 :
							$column = 'oStatus';	
							break;
						case 3 :
							$column = 'aStatus';		
							break;
					}
					$params = array(
						'conditions'=>array(
							$column => 0,
							$paramsN
						),
						'order'=>array('Notification.created'=>'desc')
					);
					$count = $this->Notification->find('all',$params);
					$this->set('status',count($count));
					$this->set('all',$count);
					$this->set('statusC',$column);
				}else{
					$this->set('status',0);	
					$this->set('all',array());
					$this->set('statusC','');
				}
				$this->set('notifs',$notifs);
			}else{
				$this->set('notifs',array());	
				$this->set('status',0);	
				$this->set('all',array());
				$this->set('statusC','');
			}	
		}
		
		public function hasEvent( $date = NULL ){
			$date = (!$date) ? date('Y-m-d') : $date ;
			$this->loadModel('Event');
			$params = array(
				'conditions' => array(
					'date(date)' => $date,
					'status' => 0 
				)
			);
			
			$event = $this->Event->find('first',$params);
			
			//pr($event);
			if($event &&  count($event['EventUser']) != $event['Event']['participants']){
				return $event;
			}else{
				return false;
			}
		}

		public function getEvent(){
			$this->loadModel('Event');
			$params = array(
				'conditions' => array(
					'date(date)' =>  date('Y-m-d'),
					'status' => 0 
				)
			);
			
			$event = $this->Event->find('first',$params);
			return $event;
		}

		public function isJoined($user_id){
			$this->loadModel('Event');
			$this->loadModel('EventUser');
			$params = array(
				'conditions' => array(
					'date(date)' => date('Y-m-d'),
					'status' => 0 
				)
			);
			
			$event = $this->Event->find('first',$params);
			$exist = false;
				foreach ($event['EventUser'] as $key => $events) {
					if($user_id==$events['user_id']){
						$exist = true;
						break;
					}
				}
			if( $exist || ( $event  && count($event['EventUser']) < $event['Event']['participants']))
			{
				return $event;
			}else{
				return (count($event['EventUser'])== $event['Event']['participants'])? 1 : 2;				
			}
		}

		public function checkLogged(){
				$logged = $this->Session->read('LOGGED');
				//pr($logged);
				if(!$logged){
				   $this->redirect('/organizer/login');
				}
				else if($logged['User']['type']!=3 && $logged['User']['type']!=2){
					$this->redirect('/');
				}
		}
		
		protected function EventUserNumber(){
			//$this->loadModel('Event');
			$event = $this->getEvent();
			//pr($event);
			$logged = $this->Session->read('LOGGED');
			//pr($logged);
			$gender = $logged['UserMeta']['gender'];
			//pr($gender);
			$BF = 0;
			$GF = 0;
			$num = 1;
			if(isset($event['EventUser'])){
			foreach($event['EventUser'] as $key => $euser){
				//pr($euser);
				if($euser['UserMeta']['gender']==2){
					$GF++;
				}else{
					$BF++;
				}
				if($logged['User']['id']!=$euser['User']['id']){
					continue;
				}
				if($euser['UserMeta']['gender']==$gender){
					if($euser['UserMeta']['gender']==2){
						$num=$GF;
					}else{
						$num=$BF;
					}
				}
				break;
			}
			}
			return $num;
		}
		
	}
?>