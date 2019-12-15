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

 	 	public static function getInstance(){
        	if (!self::$instance instanceof self) {
            	self::$instance = new self('localhost', 'kahoot', 'root', '');
        	}
        	return self::$instance;
    	}

		private function connection(){
			try{
			    return new PDO("mysql:host=".$this -> host.";dbname=".$this -> table.";", $this-> user, $this->pass);
			 }catch(PDOException $e){
			    echo '[ERROR] - ' . $e->getMessage();
			 }
    }

		private function getPDO(){
    	return $this -> pdo;
    }

		public function select($query, $data){
			$stm = $this -> pdo->prepare($query);
			if($data === NULL){
				$stm->execute();
			}else{
				$stm->execute($data);
			}
			$data = $stm->fetchAll();
			return $data;
		}

		public function insert($query, $data){
			try {
				$stm = $this -> pdo->prepare($query);
				$insert = $stm->execute($data);
				return $insert;
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}

		public function update($query, $data){
			try {
				$stm = $this -> pdo->prepare($query);
				$update = $stm->execute($data);
				return $update;
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}

		public function getLastId(){
			return $this->pdo->lastInsertId();
		}

}
 ?>
