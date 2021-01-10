<?php
error_reporting(E_ALL ^ E_WARNING);
$errors3=array();

$db=mysqli_connect('localhost','root','','onlinecourier') or die("could not connect to database");

$UID=$_GET['a'];
$name1=mysqli_real_escape_string($db,$_POST['name1']);
$address1=mysqli_real_escape_string($db,$_POST['address1']);
$phone_11=mysqli_real_escape_string($db,$_POST['phone_11']);
$phone_21=mysqli_real_escape_string($db,$_POST['phone_21']);
$name2=mysqli_real_escape_string($db,$_POST['name2']);
$address2=mysqli_real_escape_string($db,$_POST['address2']);
$phone_12=mysqli_real_escape_string($db,$_POST['phone_12']);
$phone_22=mysqli_real_escape_string($db,$_POST['phone_22']);

if(empty($name1)) { array_push($errors3,"sname required"); }
if(empty($name2)) { array_push($errors3,"rname required"); }
if(empty($address1)) { array_push($errors3,"saddress required"); }
if(empty($address2)) { array_push($errors3,"raddress required"); }
if(empty($phone_11)) { array_push($errors3,"sphone required"); }
if(empty($phone_12)) { array_push($errors3,"rphone required"); }

if(count($errors3)==0){
	$query_run1="insert into shipping(userID,sname,saddress,sphone1,sphone2,rname,raddress,rphone1,rphone2) values('$UID','$name1','$address1',$phone_11,$phone_21,'$name2','$address2',$phone_21,$phone_22)";

	mysqli_query($db,$query_run1);
	
	header("location:billing.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Shipping</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js">
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
    <script type="text/javascript">
    	$(document).ready(function(){

    		var html= '<tr><td><input class="form-control" type="text" name="desc" required=""></td><td><input class="form-control"  type="text" name="weight" required=""></td><td><input class="form-control"  type="text" name="Instruction"></td><td><input class="btn btn-warning"  type="button" name="remove" id="remove" value="Remove"></td></tr>';

    		var x=1;

    		$("#add").click(function(){
    			$("#table_field").append(html);
    		});

    		$("#table_field").on('click','#remove',function(){
    			$(this).closest('tr').remove();
    		});

    	});
    </script>
</head>
<style type="text/css">
	body{
		background-color: #97c1ea;
	    background-size:  100% 130%;
	    background-attachment: fixed;
		background-repeat: no-repeat;
	}
	@media only screen and (min-width: 700px){
	 a h1{
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
	a h1{

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
	    .back a{
		float: right;
		margin-top:1.1em;
		margin-right: 2em;
		float: right;
		color: black;
		font-family: "times new roman",serif;
		font-weight: bold;
		font-size: 1.5em;

	    }
	    button a:hover{
		background-color: white;
		color: black;
		text-decoration: none;
	}
	.sender{
		background-color: #d3d3d3;
		padding-top: 7em;
	}
	.receiver{
		background-color: #d3d3d3;
		padding-top: 1em;

	}
	.sender .col-25{
		float: left;
		width: 25%;
		font-weight: bold;
		font-size: 1.2em;
		text-align: right;
		padding-right: 3em;
		font-family: "times new roman",serif;
	}
	.sender .col-75{
		float: left;
		width: 50%;
	}
	.receiver .col-25{
		float: left;
		width: 25%;
		font-weight: bold;
		font-size: 1.2em;
		text-align: right;
		padding-right: 3em;
		font-family: "times new roman",serif;
	}
	.receiver .col-75{
		float: left;
		width: 50%;
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
	
</style>

<body>
	<button ><a href="customer.php"><i class="fa fa-sign-out"></i>LOGOUT</a></button>
	 
	 <a href="X.php" target="_blank"><h1><img src="../img/logo.png" height="80px" width="100px">XPress Delivery...</h1></a>
	 <div class="container">
	 	<form action="billing.php" method="post">
	<div class="sender">
		<h2 style="font-weight: bold; font-size: 1.5em; font-family: 'times new roman',serif; text-align: center; font-variant: small-caps;text-decoration: underline overline ; color: red;">Sender Details:</h2>
	
			<div class="row">
			<div class="col-25"><label for="name">Name </label><span style="color: red;">*</span></div>
			<div class="col-75"><input type="text" name="name1" required=""></div></div>
			<div class="row">
				<div class="col-25"><label for="address">Address</label><span style="color: red;">*</span></div>
				<div class="col-75"><input type="text" name="address1" required=""></div>
			</div>
			<div class="row">
				<div class="col-25"><label for="phone">Phone</label><span style="color: red;">*</span></div>
				<div class="col-75"><input type="tel" name="phone_11" required="" pattern="[0-9]{10}"></div>
			</div>
			<div class="row">
				<div class="col-25"><label for="phone">Alternate Phone</label></div>
				<div class="col-75"><input type="tel" name="phone_21" pattern="[0-9]{10}"></div>
			</div>
		<hr style="border: 1px solid black;">
		
	</div>
	<div class="receiver">
		<h2 style="font-weight: bold; font-size: 1.5em; font-family: 'times new roman',serif; text-align: center; font-variant: small-caps;text-decoration: underline overline ; color: red;">Receiver Details:</h2>

			<div class="row">
			<div class="col-25"><label for="name">Name</label><span style="color: red;">*</span></div>
			<div class="col-75"><input type="text" name="name2" required=""></div></div>
			<div class="row">
				<div class="col-25"><label for="address">Address</label><span style="color: red;">*</span></div>
				<div class="col-75"><input type="text" name="address2" required=""></div>
			</div>
			<div class="row">
				<div class="col-25"><label for="phone_1">Phone</label><span style="color: red;">*</span></div>
				<div class="col-75"><input type="tel" name="phone_12" required="" pattern="[0-9]{10}"></div>
			</div>
			<div class="row">
				<div class="col-25"><label for="phone">Alternate Phone</label></div>
				<div class="col-75"><input type="tel" name="phone_22" pattern="[0-9]{10}"></div>
			</div>
		<hr style="border: 1px solid black;">

		
	</div>
	<div class="Parcel">
		<h2 style="font-weight: bold; font-size: 1.5em; font-family: 'times new roman',serif; text-align: center; font-variant: small-caps;text-decoration: underline overline ; color: red;">Parcel Details:</h2>
			<div class="input_field">
				<table class="table table-bordered" id="table_field">
					<tr>
						<th>Parcel Description <span style="color: red;">*</span></th>
						<th>Parcel Weight <span style="color: red;">*</span></th>
						<th>Special Instruction</th>
						<th>Add/Remove</th>
					</tr>
					<tr>
						<td><input class="form-control" type="text" name="desc" required=""></td>
						<td><input class="form-control"  type="text" name="weight" required=""></td>
						<td><input class="form-control"  type="text" name="Instruction"></td>
						<td><input class="btn btn-warning"  type="button" name="add" id="add" value="Add"></td>
					</tr>
					
				</table>
			</div>
		</div>
			<button class="btn btn-danger" style="font-size: 1.1em;margin-right: 45%; margin-bottom: 5em;"><a href="billing.php?a=<?php echo $UID;?>">Billing</a></button>
		</form>	
	</div>

</body>
</html>