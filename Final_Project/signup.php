<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$Email_id = $_POST['Email_id'];
		$Mobile_no = $_POST['Mobile_no'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name) && !empty($Email_id) && !empty($Mobile_no))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into login (user_id,user_name,password,Email_id,Mobile_no) values ('$user_id','$user_name','$password','$Email_id','$Mobile_no')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/stylelo.css">
	<title>Signup</title>
	<link rel = "icon" href = 
"images/vp_logo.jfif" 
        type = "image/x-icon">
</head>
<body style="background-image: url(images/loginbg.jpg);background-repeat: no-repeat;background-size: cover;">
	<div id="box">
		
		<form method="post" style="background-image: url(images/loginbox.jpg);background-size: cover;background-repeat: no-repeat;">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" name="user_name" placeholder="Enter a Unique Username"><br><br>
			<input id="text" type="password" name="password" placeholder="Enter a Unique password"><br><br>
			<input id="text" type="text" name="Email_id" placeholder="Enter a valid Email"><br><br>
			<input id="text" type="text" name="Mobile_no" placeholder="Enter valid Mobile Number"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a id="lslink" href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>