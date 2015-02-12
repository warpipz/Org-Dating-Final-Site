<?php
class Report extends AppModel{
	var $useTable = 'reports';
	 public $hasMany = array(
		'ReportMeta' => array(
			'className' => 'ReportMeta',
			'foreignKey' => 'report_id',			
			'dependent' => true
			)		
		);
		
}
?>