<?php 
	class Database {
		private static $instance;
		private $pdo;
		private $host;
		private $user;
		private $pass;

		private function __construct($host,$user,$pass){
			echo $this -> host = $host;

			$this -> user = $user;
			$this -> pass = $pass;
			$this -> connection();
		}

 	 	public static function getInstance($host,$user,$pass){

        	if (!self::$instance instanceof self) {
            	self::$instance = new self($host,$user,$pass);
        	}
        	return self::$instance;
    	}

    	private function connection(){
    		echo $this -> host = $host;
    		//$this -> pdo = new PDO("mysql:host=".$this-> localhost.";dbname=Kahoot", $this-> user, $this->pass);
    	}	


    	public function getPDO(){
    		return $this -> pdo;
    	}


	}
	

 ?>