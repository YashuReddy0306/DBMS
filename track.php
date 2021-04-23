<?php 
error_reporting(E_ALL ^ E_NOTICE);
$db=mysqli_connect('localhost','root','rashmikeshari123') or die("could not connect to database");

if(isset($_POST['s'])){
	header('location:status.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tracking</title>
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
	.xyz{
		margin-top: 5em;
		margin-bottom: 3.5em;
	}
	.col-25{
		float: left;
		width: 25%;
		margin-top: 6px;
		font-weight: bolder;
		font-size: 1.4em;
		text-align: right;
		padding-right: 3em;
		font-family: "times new roman",serif;
		color: black;
	}
	.col-75{
		float: left;
		width: 50%;
		margin-top: 6px;
	}
	input[type=text] {
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
	

</style>
<body>
	<?php include "header.html" ?>
	<div class="xyz">
	<h2 style="text-align: center; font-family: 'times new roman',serif; font-weight: bolder; font-variant: small-caps;  color: #580000; text-shadow: 4px 2px white; text-decoration: overline; font-size: 2.5em;">Track Your Parcel</h2>
</div>
<form action="status.php?a=<?php echo $id;?>" method="get">
	        <div class="row">
			<div class="col-25"><label for="trackid">Tracking ID:</label></div>
			<div class="col-75"><input type="text" name="trackid" required="" placeholder="Tracking ID.."></div></div>
			<div class="row">
			<button class="btn btn-danger" name="s" style="font-size: 1.3em;margin-left: 45%;">Track</button>
	
</form>

</body>

</html>