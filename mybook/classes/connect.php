<?php

class Database{

	#all variables
	#make private so only functions in this class can see what the value is
	private $host = "localhost";
	private $username = "root";
	private $password = "";
	private $db = "mybook_db";

	#connects to db
	function connect(){
        #this-> accesses private
		$connection = mysqli_connect($this->host,$this->username,$this->password,$this->db); 
        return $connection;
	}

	function read($query){
		$conn = $this->connect();
		$result = mysqli_query($conn,$query);

		if(!$result)
		{
			return false;
		}
		else
		{
			$data = false;
			while($row = mysqli_fetch_assoc($result))
			{
				$data[] = $row;
				

			}
			return $data; 
	
		}
	}

	function save($query){
		$conn = $this->connect();
		$result = mysqli_query($conn,$query);

		if(!$result){
			return false;
		}
		else{
			return true;
	
		}
	}
}
$DB = new Database();