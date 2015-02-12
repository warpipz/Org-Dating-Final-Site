<?php
class ReportMeta extends AppModel{
	var $useTable = 'report_metas';

	public $belongsTo = array(
		'Report' => array(
			'className' => 'Report',
			'foreignKey' => 'report_id'			
			
			)		
		);	
}
?>