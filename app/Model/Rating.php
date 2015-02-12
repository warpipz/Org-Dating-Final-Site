<?php
class Rating extends AppModel{
	var $useTable = 'ratings';
		public $belongsTo = array(
		'Event' => array(
			'className' => 'Event',
			'foreignKey' => 'event_id'			
			
			)		
		);	
}
?>