<?php error_reporting(E_ALL ^ E_WARNING);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Track edit</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js">
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

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
	button a:hover{
		background-color: white;
		color: black;
		text-decoration: none;
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

	    body h1{
		margin-top: 1em;
		text-align: center;
		font-weight: bolder;
		font-family: "times new roman",times,serif;
		font-variant: small-caps;
		color: #580000;
		text-decoration: overline;
		text-shadow: 4px 2px white;
	}
	table{
		margin-top: 5em;
		margin-left: 27em;
		width: 30%;
		background-color: white;


	}
	td{
		height: 3em;
		font-size: 1em;
	}
	td input{
		text-align: center;
		margin-left: 3em;
		font-size: 1em;
		padding: 1.1em;
		border: none;
		font-family: "times new roman",serif;
		font-weight: bold;
		background-color: #d3d3d3;
		padding-left: 3em;
		padding-right: 2em;

	}
	input:hover{
		border: none;

	}
	button:hover{
		font-size: 2em;
	}
	label{
		font-size: 1.4em;
		font-weight: bolder;
		font-family: "times new roman";
	}

</style>
<body>
	<h1>Update Tracking Status</h1>

</body>
</html>
<?php

$con=mysqli_connect("localhost","root","") or die("could not connect to database");

mysqli_select_db($con,'onlinecourier');

$UID=$_GET['a'];
$e=$_GET['b'];
$query=mysqli_query($con,"select * from track where trackID='$UID'");


?>
<form action="trackedit.php" method="post">
<table border="1">
<?php
			
			while($row=mysqli_fetch_array($query)){
				?>
				<tr>
					<td><input type="hidden" name="id" value="<?php echo $row['trackID'];?>">
						<label>Status: </label><input type="text" name="status" value="<?php echo $row['status'];?>">
					</td>
				</tr>
				<tr>
	                <td>
	                	<label>Payment : </label><input type="text" name="payment" value="<?php echo $row['payment'];?>" style="margin-left: 3.1em;"></td>
	            </tr>
	            <tr>
	                <td><label>Arrival Time:</label><input type="text" name="time" value="<?php echo $row['time'];?>"></td>
	            </tr>
	               <tr> <td ><input type="submit" name="s" value="UPDATE" style="padding-left: 4em; background-color: white; color: black; text-align: center; font-size: 1.3em;"></td></tr>

	   
	<?php
            }
     ?>
 </table>
</form>
 <?php
 
 if(isset($_POST['s'])){

 	
 	$s=$_POST['status'];
 	$p=$_POST['payment'];
 	$a=$_POST['time'];
 	$id=$_POST['id'];
 	$dt=date('y-d-m h:ia');



 	$con=mysqli_connect("localhost","root","") or die("could not connect to database");

    mysqli_select_db($con,'onlinecourier');

    $result=mysqli_query($con,"update track set datetime='$dt',status='$s', payment='$p',time='$a' where trackID='$id'");

    if($result){
    	if($s=="Delivered"){
 		$to=$e;
 		$subject="DELIVERED";
 		$message="Parcel has been Delivered Sucessfully.We hope You are happy with our services.";
 		$from="From: xpressdelivery65@gmail.com";
 		if(mail($to,$subject,$message,$from)){
 		?><script >
 			alert("email sent!!.");
 		</script>
<?php
}else{
	echo "emailnot sent.";
}
 	}
    	header("location:orderview.php");

    }
    else{
    	echo "updation failed";
    }

 }
 
 

 ?>