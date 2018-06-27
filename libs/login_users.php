<?php

if($_SERVER["REQUEST_METHOD"] == "POST") 
{

	include_once ('../classes/classMngUser.php');

	$users = new MngUser();


	$username = $_POST['usermane'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$repassword = $_POST['repassword'];
//	$ip_address = $_SERVER['REMOTE_ADDS'];
	$date = date ("Y-m-d");
	$time = date("H:i:s");


	if (empty($username)  || empty($email)  || empty($password) || empty($repassword))
		 {
			$error = 'All fields are required';
        echo $error;
		 }
	elseif ($password !== $repassword) 
		{
		 	$error = 'Password does not match';
        echo $error;
	 	 }	 



	 else
	{

		$check_avaliabity = $users->GetUserInfo($username);

			if ($check_avaliabity >= 1)
				{
					$register_user = registerUsers($username, $email, $password, $ip_address, $time, $date);
					if ($register_user == 1) 
						{
							$make_sessions = $users->GetUserInfo($username);
							print_r($make_sessions);
						}
				}
			else
				{
					$error ='Username already exists';
                echo $error;
				}

	}


}

?>