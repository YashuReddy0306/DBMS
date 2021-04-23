<?php

error_reporting(E_ALL ^ E_NOTICE);
$errors2=array();
$error="";

$db=mysqli_connect('localhost','root','rashmikeshari123','onlinecourier') or die("could not connect to database");
$UserID=mysqli_real_escape_string($db,$_POST['userid']);
$name=mysqli_real_escape_string($db,$_POST['name']);
$email=mysqli_real_escape_string($db,$_POST['email']);
$phone=mysqli_real_escape_string($db,$_POST['phone']);
$password_1=mysqli_real_escape_string($db,$_POST['password_1']);
$password_2=mysqli_real_escape_string($db,$_POST['password_2']);

if(empty($UserID)) { array_push($errors2,"UserID is required"); }

if(empty($name)) { array_push($errors2,"Name is required"); }

if(empty($email)) { array_push($errors2,"email is required");}

if(empty($phone)) { array_push($errors2,"phone no. is required"); }

if(empty($password_1)) { array_push($errors2,"password is required"); }

if($password_1!=$password_2) {
 array_push($errors2,"Password do not match");
 $error="Confirm password do not match";
 }

$query1="select * from clogin where email='$email' limit 1";
$results1=mysqli_query($db,$query1);
$check1=mysqli_fetch_assoc($results1);
if($check1){
	if($check1['userID']===$UserID) {
		array_push($errors2,"UserID already exists.");
		$error="UserID already exists";
	}
}

$query="select * from clogin where email='$email' limit 1";
$results=mysqli_query($db,$query);
$check=mysqli_fetch_assoc($results);

if($check){
	if($check['email']===$email) {
		array_push($errors2,"Email already exists.");
		$error="Email already exists";
	}
}

if(count($errors2)==0){
	$password=($password_1);
	$query_run="insert into clogin(userID,name,email,phone,password) values('$UserID','$name','$email',$phone,'$password')";

	mysqli_query($db,$query_run);
	
	header("location:clogin.php?a=$name&b=$UserID");
}

?>




<!DOCTYPE html>
<html>
<head>
	<title>Customer Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<style type="text/css">
	body{
		background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.5)), url(../img/ppp.jpg);
	    background-size:  100% 100%;
	    background-attachment: fixed;
		background-repeat: no-repeat;
	}
	.col-25{
		float: left;
		width: 27%;
		margin-top: 6px;
		font-weight: bold;
		font-size: 1.5em;
		text-align: right;
		padding-right: 3em;
		font-family: "times new roman",serif;
	}
	.col-75{
		float: left;
		width: 60%;
		margin-top: 6px;
	}
	*{
		box-sizing: border-box;
	}
	input[type=text],input[type=email],input[type=tel],input[type=password] {
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
	button[type=signup] {
		background-color: black;
		color: white;
		padding: 0.4em;
		border: none;
		cursor: pointer;
		float: right;
		font-weight: bold;
		border-style: outset;
	}
	button[type=signup]:hover{
		background-color: #d3d3d3;
		color: black;

	}
	.row button{
		margin-left: 50%;
		margin-top: 2em;
		margin-bottom: 2em;
		font-size: 1.1em;
	}
	.container{
		border-radius: 5px;
		padding: 1.8em;
	}
	@media screen and (max-width: 600px) {
		.col-25,.col-75,input[type=signup]{
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
		<h2 style="text-align: center; font-family: 'times new roman',serif; font-weight: bolder; ">NEW CUSTOMER</h2>
	    <h3 style="text-align: center; font-family: 'times new roman',serif; font-weight: bold;">Sign Up</h3>
	    <div class="container">
	    	<p class="error" style="text-align: center; color: red; font-weight: bold;"><?php echo $error; ?></p>
		<form action="Newaccount.php" method="post">
			<div class="row">
			<div class="col-25">
				<label for="userid" style="padding-bottom: 0;margin-bottom: -30px">Create UserID</label>
				<em>
				<span style="color: red;font-size: 19px">*(atleast 4 character)</span>
				</em>
			</div>
			<div class="col-75"><input type="text" name="userid" required=""></div></div>
			<div class="row">
			<div class="col-25"><label for="name">Name</label><span style="color: red;">*</span></div>
			<div class="col-75"><input type="text" name="name" required=""></div></div>
			<div class="row">
			<div class="col-25"><label for="email">Email</label><span style="color: red;">*</span></div>
			<div class="col-75"><input type="email" name="email" required=""></div></div>
			<div class="row">
			<div class="col-25"><label for="phone">Phone</label><span style="color: red;">*</span></div>
			<div class="col-75"><input type="tel" name="phone" pattern="[0-9]{10}" required=""></div></div>
			<div class="row">
			<div class="col-25"><label for="password">Password</label><span style="color: red;">*</span></div>
			<div class="col-75"><input type="password" name="password_1" required=""></div></div>
			<div class="row">
			<div class="col-25"><label for="password" >Confirm Password</label><span style="color: red;">*</span></div>
			<div class="col-75"><input  type="password" name="password_2" required=""></div>
			</div>
		
			<div class="row">
			<button type="signup" name="signup" >Sign Up</button>
			</div>
		</form>
	</div>
	</div>

</body>
</html>