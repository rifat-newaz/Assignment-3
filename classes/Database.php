<?php
namespace Classes;
class Database {
	
	
	private $host = "localhost" ;
	private $username = "root" ;
	private $password = "";
	private $database = "oop_test_db";
	
	
		public function connect(){
		
		
		//return new mysqli($this->host, $this->username, $this->password, $this->database);
		return new \mysqli($this->host, $this->username, $this->password, $this->database);

		
		
	}
	
	
	
}









?>