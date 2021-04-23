<?php
error_reporting(E_ALL ^ E_NOTICE);
$db=mysqli_connect("localhost","root","rashmikeshari123","onlinecourier") or die("could not connect to database");

$u=$_GET['a'];
$b=$_GET['b'];

$text=mysqli_real_escape_string($db,$_POST['s']);

if(isset($_POST['submit'])){
	if(empty($text)) {

}
	$sql=mysqli_query($db,"INSERT INTO suggest(userID,text) values('$u','$text')");
	$query=mysqli_query($db,"select * from clogin where userID='$u'");
	$row=mysqli_fetch_array($query);
	$n=$row['name'];
	 header("location:clogin.php?a=$n&b=$u");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>suggest</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
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
	h2{
			font-size: 2.5em;
			color: #580000; text-shadow: 4px 2px white;
			font-variant: small-caps;
			font-family: "times new roman",serif;
			font-weight: bold;
			text-decoration: underline;
			text-align: center;

		}
		.container{
			padding-top: 10em;
		}
	.send button:hover{
		background-color: rgb(231, 235, 240);
	}
	</style>
<body>
	<button ><a href="customer.php"><i class="fa fa-sign-out"></i>LOGOUT</a></button>
	<button ><a href="clogin.php?a=<?php echo $b; ?>&b=<?php echo $u; ?>">BACK</a></button>
	 <div class="heading"><h1><img src="../img/logo.png" height="80px" width="100px">XPress Delivery...</h1></div>
	 <div class="container">
	 	<h2>Suggestions For Us</h2>
	 	<form style="margin-top: 3em;" method="post" >
	 		<label style="font-weight: bold; color: white; font-family: 'lucida handwriting';
	 		font-size: 1.2em;">We are happy to know what you Feel.......</label>
	 		<textarea class="form-control" id="suggest" name="s" rows="10" placeholder="please type here..." required=""></textarea>
	 		<button  class="send" name="submit" style=" color: black; font-weight: bold; padding: 0.3em 1em 0.3em 1em; background-color: #d3d3d3; float: left;">SEND</button>
	 	</form>
	 </div>



</body>
</html>
