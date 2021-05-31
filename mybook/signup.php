<?php

    include("classes/connect.php");
    include("classes/signup.php");

    $first_name = "";
	$last_name = "";
	$gender = "";
	$email = ""; 

	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		$signup = new Signup();
		$result = $signup->evaluate($_POST);

        if($result != ""){


            echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey'>"; 

            echo "<br>The following errors occured<br><br>";
        	echo $result;
        	echo "</div>";
        }else{
        	header("Location: login.php");
        	die;
        }

	    $first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$gender = $_POST['gender'];
		$email = $_POST['email']; 

	}



?>
<!DOCTYPE html>
<HTML>
<head>
	<title>MyBook | Sign up</title>
</head>
<style>
#bar{
	height: 100px;
	background-color: rgb(59,89,152);
	color:  #d9dfeb;
	padding:  4px;
}
#signup_button{
	background-color: #42b72a;
	width:  70px;
	text-align: center;
	padding: 4px;
	border-radius: 4px;
	float: right;
}
#login_bar{
	background-color: white;
	width: 800px;
	margin:auto;
	margin-top: 50px;
	padding: 10px;
	padding-top: 50px;
	text-align: center;
	font-weight: bold;
}
#text{
	height: 40px;
	width: 300px;
	border-radius: 4px;
	border: solid 1px #ccc;
	padding: 4px;
	font-size: 14px;
}
#button{
	width: 300px;
	height: 40px;
	border-radius: 4px;
	font-weight: bold;
	border: none;
	background-color: rgb(50,89,152);
	color: white;
}

</style>

<BODY style="font-family: tahoma;background-color: #e9ebee;">
	<div id="bar">

	<div style="font-size: 40px;">Mybook</div> 
	<div id="signup_button">Log in</div>

	</div>

	<div id="login_bar">

		Sign up to Mybook<br><br>

        <form method="post" action="">
			<input value="<?php echo $first_name ?>" name="first_name" type="text" id="text" placeholder="First Name"><br><br>
			<input value="<?php echo $last_name ?>" name="last_name" type="text" id="text" placeholder="Last Name"><br><br>

			<span style="font-weight: normal">Gender:</span><br>
			<select id="text" name="gender">

				<option><?php echo $gender ?></option>
				<option>he/him</option>
				<option>she/her</option>
				<option>they/them</option>
				<option>I prefer not to say</option>
				
			</select><br><br>

			<input value="<?php echo $email ?>" name="email" type="text" id="text" placeholder="Email Address"><br><br>
			
			<input name="password" type="password" id="text" placeholder="Password"><br><br>
			<input name="password2" type="password" id="text" placeholder="Retype Password"><br><br>
		
			<input type="submit" id="button" value="Sign up"><br><br>
			<br><br>
	    </form>	
	</div>
</BODY>
</HTML>