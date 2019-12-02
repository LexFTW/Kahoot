<?php
	class Database {

		private static $instance;
		private $pdo;
		private $host;
		private $table;
		private $user;
		private $pass;

		private function __construct($host, $table, $user, $pass){
			$this -> host = $host;
			$this -> table = $table;
			$this -> user = $user;
			$this -> pass = $pass;
    		$this -> pdo =  $this->connection();
		}

 	 	public static function getInstance($host, $table, $user, $pass){

        	if (!self::$instance instanceof self) {
            	self::$instance = new self($host, $table, $user, $pass);
        	}

        	return self::$instance;
    	}
    	private function connection(){
    		return  new PDO("mysql:host=".$this -> host.";dbname=".$this -> table.";", $this-> user, $this->pass);
    	}

    	public function getPDO(){
    		return $this -> pdo;
    	}


    	public function select($consulta){
    		$query = $this -> pdo -> prepare($consulta);
    		$query -> execute();
    		$registre = $query->fetch();

    		return $registre;
    	}

	}


 ?>
