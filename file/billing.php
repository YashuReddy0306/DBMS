<?php

$db=mysqli_connect('localhost','root','rashmikeshari123','onlinecourier') or die('could not connect to database');

$t=$_GET['d'];
$u=$_GET['c'];
$query=mysqli_query($db,"select * from ship where trackID='$t'");
$result= mysqli_fetch_array($query,MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Billing</title>
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
	.container{
		padding-top: 10em;
		text-align: center;
	}
	button{
		float: right;
		margin-top:1.3em;
		margin-right: 2em;
		background-color: black;
	    }
	    button a{
		float: right;
		color: black;
		font-family: "times new roman",serif;
		font-weight: bold;
		font-size: 1.5em;
		color: white;
	    }
	    button a:hover{
		background-color: white;
		color: black;
		text-decoration: none;}
	 p a{
		color: red;
	}
	p a:hover{
		color: white;
	}
</style>
<body>
	<button ><a href="customer.php"><i class="fa fa-sign-out"></i>LOGOUT</a></button>
		<button ><a href="ship.php?a=<?php echo $u;?>">BACK</a></button>
	<div class="heading"><h1><img src="../img/logo.png" height="80px" width="100px">XPress Delivery...</h1></div>
	<div class="container">
	<p style="color: yellow; font-weight: bold;font-size: 2.7em; font-family: 'times new roman';">Booking Successfull!!!</p>
	
				<p style="font-weight: bold; font-size: 1.5em; font-family: 'times new roman';  border: 1.5px solid white; border-spacing: 0.4em; background-color: #d3d3d3; border-spacing: 3em; "> Total Bill: <?php echo $result['price']; ?><br>Tracking ID :  <?php echo $t; ?></p>


	<p style="color: yellow; font-weight: bold;font-size: 2.2em; font-family: 'times new roman'; "><a href="status.php?trackid=<?php echo $t; ?>">Track Your Order</a></p>
			

</div>

</body>
</html>