<?php
error_reporting(E_ALL ^ E_NOTICE);
$db=mysqli_connect("localhost","root","rashmikeshari123","onlinecourier") or die("could not connect to database");
$tid=$_GET['trackid'];

$sql="select * from track where trackID='$tid'";
$query=mysqli_query($db,$sql);
$result=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Status</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js">
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
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
		width: 40%;
		margin-top: 6px;
		font-weight: bold;
		font-size: 1.7em;
		text-align: right;
		padding-right: 3em;
		font-family: "times new roman",serif;
		color: white;
	}
	.col-75{
		float: left;
		width: 30%;
		margin-top: 19px;
	}
	label{
		padding: 0.55em 0.55em 0.55em 0;
		display: inline-block;
	}
	.row p{
		padding-left: 45%;
	}
	.container{
		border-radius: 5px;
		padding: 1.8em;
	}
	input[type=text],input[type=datetime] {
		width: 100%;
		padding: 0.55em;
		border: 1px solid #ccc;
		border-radius: 4px;
		resize:vertical;
		border-style: outset;
	}
</style>
<body>
	<?php include "header.html" ?>
	<div class="container">
	<form>
		    <div class="row">
			<div class="col-25"><label  style="font-size: ">Tracking ID : </label></div>
			<div class="col-75"><input type="text" name="id"  value="        <?php echo $result['trackID'];?>" readonly=""></div></div>
		    <div class="row">
			<div class="col-25"><label  style="font-size: ">Date and Time: </label></div>
			<div class="col-75"><input type="datetime" name="datetime"  value="          <?php echo $result['datetime'];?>" readonly=""></div></div>
			<div class="row">
			<div class="col-25"><label  style="font-size: ">Status : </label></div>
			<div class="col-75"><input type="text" name="status"  value="          <?php echo $result['status'];?>" readonly=""></div></div>
			<div class="row">
			<div class="col-25"><label  style="font-size: ">Approx Arrival Time : </label></div>
			<div class="col-75"><input type="text" name="time"  value="            <?php echo $result['time'];?>" readonly=""></div></div>
			<div class="row">
			<div class="col-25"><label  style="font-size: ">Payment : </label></div>
			<div class="col-75"><input type="text" name="pay"  value="          <?php echo $result['payment'];?>" readonly=""></div></div>

	
	</form>
</div>
<?php
if($result['status']== "Delivered"){
	?>
	<h2 style="color: yellow; font-weight: bold;font-size: 2.7em; font-family: 'times new roman'; text-align: center;">Delivered  Successfully!!</h2>

	<p style="font-family: 'times new roman'; font-weight: bold; color: yellow; text-align: center; font-size: 1.2em;"><a href="feedback.php?b=<?php echo $result['trackID'];?>">Give feedback</a></p>


	<?php

	
}
?>

</body>
</html>
