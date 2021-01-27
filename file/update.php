<!DOCTYPE html>
<html>
<head>
	<title>Updation</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<style type="text/css">
	body{
		background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.5)), url(../img/ppp.jpg);
	    background-size:  100% 100%;
	    background-attachment: fixed;
		background-repeat: no-repeat;
	}
	table{
		margin-top: 7em;
		margin-left: 27em;
		width: 40%;
		background-color: white;


	}
	td{
		height: 3em;
		font-size: 1em;
	}
	td input{
		text-align: center;
		margin-left: 8em;
		font-size: 1em;
		padding: 1.1em;
		border: none;
		font-family: "times new roman",serif;
		font-weight: bold;
		background-color: #d3d3d3;
		padding-left: 3em;
		padding-right: 2em;

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
	<h1>Update Customer Details</h1>

</body>
</html>
<?php

$con=mysqli_connect("localhost","root","rashmikeshari123") or die("could not connect to database");

mysqli_select_db($con,'onlinecourier');

$UID=$_GET['a'];
$query=mysqli_query($con,"select * from clogin where userID='$UID'");


?>
<form action="update.php" method="post">
<table border="1">
<?php
			
			while($row=mysqli_fetch_array($query)){
				?>
				<tr>
					<td><input type="hidden" name="id" value="<?php echo $row['userID'];?>">
						<label>Name: </label><br><input type="text" name="name" value="<?php echo $row['name'];?>">
					</td>
				</tr>
				<tr>
	                <td>
	                	<label>Email: </label><br><input type="text" name="email" value="<?php echo $row['email'];?>" ></td>
	            </tr>
	            <tr>
	                <td><label>Phone:</label><br><input type="tel" name="phone" pattern="[0-9]{10}" value="<?php echo $row['phone'];?>"></td>
	            </tr>
	               <tr> <td ><input type="submit" name="s" value="UPDATE" style="padding-left: 4em; background-color: white; color: black; text-align: center; font-size: 1.3em;"></td></tr>

	   
	<?php
            }
     ?>
 </table>
</form>
 <?php
 
 if(isset($_POST['s'])){

 	
 	$email=$_POST['email'];
 	$phone=$_POST['phone'];
 	$n=$_POST['name'];
 	$id=$_POST['id'];

 	$con=mysqli_connect("localhost","root","rashmikeshari123") or die("could not connect to database");

    mysqli_select_db($con,'onlinecourier');
    $result=mysqli_query($con,"update clogin set name='$n',email='$email',phone='$phone' where  userID='$id' ");

    if($result){
    	header("location:crecord.php");

    }
    else{
    	echo "updation failed";
    }

 }

 ?>
