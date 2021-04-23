<?php
error_reporting(E_ALL ^ E_NOTICE);
 $db=mysqli_connect('localhost','root','rashmikeshari123','onlinecourier');
 if($db === false){
         die("ERROR: Could not connect. " . mysqli_connect_error());
     }

$min=50;
$UID=$_GET['a'];
$b=$_GET['b'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Shipping</title>
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
		background-color: #97c1ea;
	    background-size:  100% 130%;
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
	.col-25{
		float: left;
		width: 25%;
		font-weight: bold;
		font-size: 1.2em;
		text-align: right;
		padding-right: 3em;
		font-family: "times new roman",serif;
	}
	.col-75{
		float: left;
		width: 70%;
	}
	.col-25{
		float: left;
		width: 25%;
		font-weight: bold;
		font-size: 1.2em;
		text-align: right;
		padding-right: 3em;
		font-family: "times new roman",serif;
	}
	.col-75{
		float: left;
		width: 50%;
	}

	*{
		box-sizing: border-box;
	}
	input[type=text],input[type=number],input[type=tel],input[type=email] {
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
	<button ><a href="clogin.php?a=<?php echo $b; ?>&b=<?php echo $UID; ?>">BACK</a></button>
	 
	 	<div class="heading"><h1><img src="../img/logo.png" height="80px" width="100px">XPress Delivery...</h1></div>


	<div class="container">

	 	<form action="submit1234.php?b=<?php echo $UID; ?>" method="post">

			<div class="sender" style="margin-top: 6em; padding-top: 4em;">

		    	<h2 style="font-weight: bold; font-size: 1.5em; font-family: 'times new roman',serif; text-align: center; font-variant: small-caps;text-decoration: underline overline ; color: red;">Sender Details:</h2>
	
				<div class="row">

					<div class="col-25"><label for="name">Name </label><span style="color: red;">*</span>

					</div>

					<div class="col-75"><input type="text" name="name1" required="">

					</div>

				</div>

				<div class="row">

					<div class="col-25"><label for="from">Address</label><span style="color: red;">*</span>

					</div>


					<div class="col-75"> <input class="form-control" id="from" type="text" name="address1" placeholder="Enter a location"> 

					</div>

				</div>

				<div class="row">

				   	<div class="col-25"><label for="phone">Phone</label><span style="color: red;">*</span></div>
					<div class="col-75"><input type="tel" name="phone_11" required="" pattern="[0-9]{10}"></div>

				</div>
			
				<hr style="border: 1px solid black;">
		
			</div>


			<div class="receiver">

				<h2 style="font-weight: bold; font-size: 1.5em; font-family: 'times new roman',serif; text-align: center; font-variant: small-caps;text-decoration: underline overline ; color: red;">Receiver Details:</h2>

				<div class="row">
					<div class="col-25"><label for="name">Name</label><span style="color: red;">*</span></div>
					<div class="col-75"><input type="text" name="name2" required=""></div>
				</div>

				<div class="row">
					<div class="col-25"><label for="to">Address</label><span style="color: red;">*</span></div>
					<div class="col-75" ><input class="form-control" id="to" type="text" name="address2" placeholder="Enter a location"> </div>
				</div>

				<div class="row">
					<div class="col-25"><label for="phone_1">Phone</label><span style="color: red;">*</span></div>
					<div class="col-75"><input type="tel" name="phone_12" required="" pattern="[0-9]{10}"></div>
				</div>
			
				<hr style="border: 1px solid black;">

		
			</div>
			<div class="row">
				<div class="col-25"><label for="email">Confirmation email</label><span style="color: red;">*</span></div>
					<div class="col-75"><input type="email" name="email" required="" ></div>
			</div>
			
			<div class="Parcel" style="margin-top: 10px;">

				<h2 style="font-weight: bold; font-size: 1.5em; font-family: 'times new roman',serif; text-align: center; font-variant: small-caps;text-decoration: underline overline ; color: red;">Parcel Details:</h2>

		

				<div class="input_field" >
					
					<table class="table table-bordered" id="table_field" >
					

						<tr>
							<th>Item quanity <span style="color: red;">*</span></th>
							<th>Total Weight(kg) <span style="color: red;">*</span></th>
							<th>Min Price</th>
						</tr>
				
						<tr name="item">
							<td><input class="form-control" type="number" name="no" required="" ></td>
							<td><input class="form-control"  type="number" name="weight" id="wei" required="" ></td>
							<td><input class="form-control" type="text" name="min" value="<?php echo $min; ?>" readonly="" ></td>
						</tr>
					
					</table>

				</div>
		

			

		

			</div>

			<input class="btn btn-danger" type="submit" value="Confirm booking" style="font-size: 0.8em;margin-right: 45%; margin-bottom: 5em;" >


		</form>

	</div>

    


	
				


</body>
</html>