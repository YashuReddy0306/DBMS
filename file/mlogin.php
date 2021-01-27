

<!DOCTYPE html>
<html>
<head>
	<title>Manager Homepage</title>
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
		background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.5)), url(../img/ppp.jpg);
	    background-size:  100% 100%;
	    background-attachment: fixed;
		background-repeat: no-repeat;
	}
	@media only screen and (min-width: 700px){
	 .heading h1{
		font-family: "lucida handwriting";
		font-weight: 900;
		font-size: 3em;
		color:white;
		padding: 0.2% 0.4% 0.2% 3%;
		float: left;
		margin: 0;
		display: inline-block;
		background-image: linear-gradient(to right,rgba(112,128,144,1),rgba(112,128,144,0));
		text-align: left;
    }

	}
	.heading h1{

		font-family: "lucida handwriting";
		font-weight: 900;
		text-shadow: 4px 2px #000000;
		font-size: 3em;
		display: inline-block;
		color:#002A53;
		padding: 0.2% 0.4% 0.2% 3%;
	    margin: 0;
		background-image: linear-gradient(to right,rgba(112,128,144,1),rgba(112,128,144,0));
		float: left;
		
	}
	.container p{
		margin-left: 45%;
		font-size: 3.5em;
		text-shadow: 6px 4px white;
		font-variant: small-caps;
	}
	.navbar {
		margin-top: 1.5em;
		text-align: center;
		font-size: 1.8em;

	}
	ul li{
		margin: 0.5em;
		font-family: "times new roman",serif;
		font-weight: bold;
		background:linear-gradient(grey,20%,white);
		width: 86vw;

	}
	li a{
		color: black;
	}
	li a:hover{
		background-color: black;
		color: white;
		text-decoration: none;

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
	<button ><a href="manager.php"><i class="fa fa-sign-out"></i>LOGOUT</a></button>
	 <div class="heading"><h1><img src="../img/logo.png" height="80px" width="100px">XPress Delivery...</h1></div>
	<div class="container" style="float: left; margin-top: 2em;">
		<p style="font-weight: bolder; font-family:'times new roman'; font-size: 3.7em;">Welcome!!!</p>
		<div class="head" style=" font-variant: small-caps; font-family: 'times new roman'; font-weight: bold; font-size: 2.5em; text-shadow: 4px 2px white; margin-left: 47%; text-decoration: underline overline; color: #580000;">

	<?php
	error_reporting(E_ALL ^ E_NOTICE);

        session_start();
        echo  $_SESSION['n'];

    ?>
</div>
		<div class="navbar">
			<ul  style="list-style: none;">
			<li><a href="crecord.php"> Customer Record</a></li>
			<li><a href="orderview.php">Order View</a></li>
			<li><a href="suggestview.php">Suggestions View</a></li>
		</ul>
			
		</div>
	</div>

</body>
</html>