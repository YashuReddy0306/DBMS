
<?php
error_reporting(E_ALL ^ E_NOTICE);
$errors=array();
$incorrect="";
$con=mysqli_connect("localhost","root","rashmikeshari123") or die("could not connect to database");

mysqli_select_db($con,'onlinecourier');

$username=mysqli_real_escape_string($con,$_POST['username']);
$password=mysqli_real_escape_string($con,$_POST['password']);

session_start();

if(empty($username)){
 array_push($errors,"Username is required");
}


if(empty($password)){
	array_push($errors,"Password is required");
}


$query="select * from mlogin where username='$username' and password='$password' ";

$result=mysqli_query($con,$query);
if(count($errors)==0){
if(mysqli_num_rows($result)) {
	$_SESSION['n']=$username;
	header("location:mlogin.php");
}
else {
	$incorrect="Incorrect username/password.";
}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Manager Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	body{
		background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.8)), url(../img/ppp.jpg);
	    background-size:  100% 100%;
	    background-attachment: fixed;
		background-repeat: no-repeat;
	}
	.col-25{
		float: left;
		width: 25%;
		margin-top: 6px;
		font-weight: bold;
		font-size: 1.5em;
		text-align: right;
		padding-right: 3em;
		font-family: "times new roman",serif;
		color: black;
	}
	.col-75{
		float: left;
		width: 60%;
		margin-top: 6px;
	}
	*{
		box-sizing: border-box;
	}
	input[type=text],input[type=password] {
		width: 100%;
		padding: 0.55em;
		border: 1px solid #ccc;
		border-radius: 4px;
		resize:vertical;
		border-style: outset;
	}
	label{
		padding: 0.55em 0.55em 0.55em 0;
		display: inline-block;
	}
	button[type=login] {
		background-color: black;
		color: white;
		padding: 0.3em;
		border: none;
		cursor: pointer;
		float: right;
		font-weight: bold;
		border-style: outset;
	}
	button[type=login]:hover{
		background-color: #d3d3d3;
		color: black;

	}
	.row button{
		margin-left: 50%;
		margin-top: 2em;
		margin-bottom: 2em;
		font-size: 1.2em;
	}
	.container{
		border-radius: 5px;
		padding: 1.8em;
	}
	@media screen and (max-width: 600px) {
		.col-25,.col-75,input[type=login]{
			width: 100%;
			margin-top: 0;
		}

	}
	.xyz{
		margin-top: 5em;
	}

</style>

<body>
	<?php include "header.html" ?>
	<div class="xyz">
	<h2 style="text-align: center; font-family: 'times new roman',serif; font-weight: bolder; color: black; ">MANAGER</h2>
	<h3 style="text-align: center; font-family: 'times new roman',serif; font-weight: bold; color: black; ">Login</h3>
	<div class="container">
		<p class="incorrect" style="text-align: center; color: red; font-weight: bold;"><?php echo $incorrect; ?></p>
		<form action="manager.php" method="post">
			<div class="row">
			<div class="col-25"><label for="username">Username</label></div>
			<div class="col-75"><input type="text" name="username" required=""></div></div>
			<div class="row">
				<div class="col-25"><label for="password">Password</label></div>
				<div class="col-75"><input id="pass_log_id" type="password" name="password" required="" ></div>
			</div>

			<div class="row">
				<button type="login" name="login" > Login</button>
			</div>
		</form>
	</div>
</div>
</body>

<footer>
	<?php include "footer.html" ?>
</footer>
</html>


