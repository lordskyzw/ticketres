<?php
include("include/config.php");

if(isset($_POST['signup']))
{
$log=mysqli_query($con,"insert into doctors(doctorName,password) values('".$_POST['username']."','".$_POST['password']."')");
exit();
}

else
{
echo "failed to sign up";
exit();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f7f7f7;
		}
		form {
			margin: 50px auto;
			padding: 20px;
			border: 1px solid #ddd;
			background-color: #fff;
			width: 300px;
		}
		h1 {
			text-align: center;
			margin-top: 0;
		}
		input[type="text"], input[type="password"], input[type="email"], input[type="submit"] {
			display: block;
			margin: 10px auto;
			padding: 10px;
			border: 1px solid #ddd;
			border-radius: 5px;
			width: 100%;
			box-sizing: border-box;
			font-size: 16px;
			color: #444;
		}
		input[type="submit"] {
			background-color: #1e90ff;
			color: #fff;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: #0077ff;
		}
		p.error {
			color: red;
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<?php
		
	?>

	<h1>Sign Up</h1>
	<form method="post" >
		<input type="text" name="username" placeholder="Username" >
		<input type="password" name="password" placeholder="Password" >
		<input type="email" name="email" placeholder="Email" >
		<input type="submit" name="signup" value="Sign Up">
     
?>
</form>
</body>
</html>




