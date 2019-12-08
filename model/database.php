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
				try{
				    return new PDO("mysql:host=".$this -> host.";dbname=".$this -> table.";", $this-> user, $this->pass);
				 }catch(PDOException $e){
				    echo '[ERROR] - ' . $e->getMessage();
				 }
    	}

    	public function getPDO(){
    		return $this -> pdo;
    	}

    	public function select($query, $columns){
				$array = array();
    		$query = $this->pdo->prepare($query);
    		$query->execute();

				$register = $query->fetch();
				$i = 0;
				while($register){
					$sub_array = array();
					for ($j=0; $j < count($columns); $j++) {
						$sub_array[$columns[$j]] = $register[$columns[$j]];
					}
					array_push($array, $sub_array);
					$register = $query->fetch();
				}

				return $array;

    	}

    public function insert($table, $data = []){
        try {

            $columnsArray = array_keys($data);
            $columnsString = implode(',', $columnsArray);

            $valuesArray = array_values($data);
            $valuesCount = count($valuesArray);

            $valuesPlaceholder = '';
            for ($i=0; $i < $valuesCount; $i++) { 
                $valuesPlaceholder .= '?,';
            }
            $valuesPlaceholder = rtrim($valuesPlaceholder, ',');


            $query = "INSERT INTO $table ($columnsString) VALUES ($valuesPlaceholder)";

            $statement = $this -> pdo -> prepare($query);

            if($statement->execute($valuesArray)){
            	return True;
            }else{
            	return False;
            }

        } catch (\PDOException $e) {
            die("Insert failed: " . $e->getMessage());
        }
	 }
}
 ?>
