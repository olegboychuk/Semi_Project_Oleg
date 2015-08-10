<?php
class User{
	private $_db;
	public function  __construct(){
		$this->_db=DB::getInstance();
		var_dump($this->_db);
	}
	
}