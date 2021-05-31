<?php

	session_start();
	

		include("classes/connect.php");
		include("classes/login.php");
		include("classes.user.php");

		//check if user is logged in
		if(isset($_SESSION['mybook_userid']) && is_numeric($_SESSION['mybook_userid']))
		{
			$id = $_SESSION['mybook_userid'];
			$login = new Login();

			$result = $login->check_login($id);
			
			if($result)
			{
				
				//retrieve user data;
				$user = new User();

				$user_data = user->get_data($id);

				if(!$user_data)
				{
					header("Location: login.php");
					die;

				}
			}
			else{
				header("Location: login.php");
				die;
			}
		}else
		{
			header("Location: login.php");
			die;
		}
print_r($user_data);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<style type="text/css">

	</style>

<body>
this is the profile page yurr
</body>
</html>