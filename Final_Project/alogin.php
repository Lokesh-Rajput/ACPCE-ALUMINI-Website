<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from alogin where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: addAlumni.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
<link rel="stylesheet" type="text/css" href="css/stylelo.css">
</head>
<body style="background-image: url(images/loginbg.jpg);background-repeat: no-repeat;background-size: cover;">
	<div id="box">
		
		<form method="post" style="background-image: url(images/loginbox.jpg);background-size: cover;background-repeat: no-repeat;">
			<div style="font-size: 20px;margin: 10px;color: white;">Admin Login</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a id="lslink" href="login.php">User login</a><br><br>
		</form>
	</div>
</body>
</html>