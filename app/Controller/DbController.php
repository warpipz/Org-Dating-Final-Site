<?php
	
	class DbController extends AppController{
		
		public $uses = array(
			'Db'
		);
		
		private function getTables( $table = array() ){
			$tables = $this->Db->query('show tables');
			foreach($tables as $lamesa){
				$table[] = $lamesa['TABLE_NAMES']['Tables_in_dating'];
			}
			return $table;
		}
		
		private function getColumnNames($table = NULL , $c = array() ){
			$columns = $this->Db->query("SHOW COLUMNS FROM {$table}");
			foreach($columns as $column){
				$c[] = $column['COLUMNS']['Field'];
			}
			return $c;
		}
		
		private function getHead($datas = array() , $head=array() ){
			foreach($datas as $data){
				foreach($data as $key => $value){
					$table = $key;
					foreach($value as $ind => $val){
						$head[] = $ind;
					}								
				}
				break;
			}	
			return $head;
		}
		
		public function index($table = NULL){
			
			$datas = array();		
			$post = "";
			$head = array();
			$sql = "";
			if($this->request->is('post') && $this->data['query']){
				$sql = $this->data['query'];
				$datas = $this->Db->query($sql);	
				$post = $this->data['query'];
				$head = $this->getHead($datas);
			}elseif($table){
				$sql = "Select * from {$table}";
				$datas = $this->Db->query($sql);
				$head = $this->getHead($datas);
			}
			
			if(!count($datas) && $table){
				$head = $this->getColumnNames($table);	
			}			
			
			$this->set('sql',$sql);
			$this->set('head',$head);
			$this->set('table',$table);
			$this->set('post',$post);
			$this->set('tables',$this->getTables());
			$this->set('datas',$datas);
			
		}
			
	}
	
	
?>