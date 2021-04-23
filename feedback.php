<?php
error_reporting(E_ALL ^ E_NOTICE);
$db=mysqli_connect("localhost","root","rashmikeshari123","onlinecourier") or die("could not connect to database");

$u=$_GET['b'];

$text=mysqli_real_escape_string($db,$_POST['s']);

if(isset($_POST['submit'])){
	
	$sql=mysqli_query($db,"UPDATE track set feedback='$text' where trackID='$u'");
	 header("location:thanks.php?c=$u");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
	.container{
			padding-top: 10em;
		}
		button a{
		float: right;
		color: black;
		font-family: "times new roman",serif;
		font-weight: bold;
		font-size: 1.5em;
		color: white;
	}
    button{
		float: right;
		margin-top:1.3em;
		margin-right: 2em;
		background-color: black;
	}
	button a:hover{
		background-color: white;
		color: black;
		text-decoration: none;
	}
</style>
<body>
	<?php include "header.html" ?>
	<div class="container">
	<form method="post">
		<label style="font-weight: bold; color: white; font-family: 'lucida handwriting'; font-size: 1.5em;">Please provide your feedback </label>
		<textarea class="form-control" id="suggest" name="s" rows="8" placeholder="please type here..." required=""></textarea>
		<button name="submit" style=" color: black; font-weight: bold; padding: 0.3em 1em 0.3em 1em; background-color: white; float: left;">SEND</button>
	</form>
</div>

</body>
</html>