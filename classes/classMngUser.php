<?php

include_once ('ClassDBConn.php');

class MngUser{

	public $link;

		function __construct(){

			$db_connection = new dbConnection();

			$this->link = $db_connection->connect();

			return $this->link;
				
		}


	function registerUsers($username, $password, $ip_address, $time, $date){

		$query = $this->link->prepare("INSERT INTO users (username, password, ip_address, time, date) VALUES (?,?,?,?,?)");
		$values = array($username, $password, $ip_address, $time, $date);
		$query->execute($values);
		$counts = $query-> rowCount();
        print("Effacement de $counts lignes.\n");
//		return $counts;
        $counts="Mario mario";
//        var_dump("Hello");
//        return $counts;

	}	


	function LoginUsers($username, $password){

		$query = $this->link->query("SELECT * FROM users WHERE username ='$username' AND password = '$password'");
		$rowcount= $query->rowCount();
		return $rowcount;
	}

	function GetUserInfo($username){

		$query= $this->link->query("SELECT * FROM users WHERE username='$username'");
		$rowcount= $query->fetchAll();
        $nameuser = count($rowcount);
        
        
        // Utilisation des tuples :
        foreach( $rowcount as $user )
        {
            echo $user['username']. "user real"; // ...
        }
        
//		if($rowcount >0){
//
//			$result =$query->fetchAll();
//			return $result;
//		}
//
//		else {
//
//			return $rowcount;
//		}

	}

}

$users = new MngUser();
echo $users->registerUsers('bob','bob','127.0.0.1', '12:56', '25-06-2018');


?>