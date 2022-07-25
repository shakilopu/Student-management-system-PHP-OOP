<?php 

/**
 * Datbase Control
 */
class Database
{
	// connect with Database

	private function connect()
	{
		// code...
		$db = DB_DRIVER. ":host=" .DB_HOST. ";dbname=" .DB_NAME;
		$con = new PDO($db, DB_USER, DB_PASSWORD);

		if(!$con)
		{
			die("Could not connect to database");
		}
		return $con;
	}


	public function query($query, $data= array(), $data_type = "object")
	{
		$con = $this->connect();
		$statement = $con->prepare($query);

		if($statement){
			$check = $statement->execute($data);
			if($check){
				if($data_type == "object"){
					$data = $statement->fetchAll(PDO::FETCH_OBJ);
				}else{
					$data = $statement->fetchAll(PDO::FETCH_ASSOC);
				}

				if(is_array($data) && count($data) > 0) {
					return $data;
				}
			}
		}

		return false;
	}

}


 ?>