<?php
error_reporting(E_ALL ^ E_NOTICE);
$db=mysqli_connect("localhost","root","rashmikeshari123","onlinecourier") or die("could not connect to database");

$sql="select * from ship";
$query=mysqli_query($db,$sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title>order details</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
	    .container{
			padding-top: 10em;
		}
		th h2{
			font-size: 2.5em;
			color: black; text-shadow: 4px 2px white;
			font-variant: small-caps;
			font-family: "times new roman",serif;
			font-weight: bold;
			
			text-align: center;

		}
		tr th,td{
			padding: 0.2em;
			height: 50px;
		}
		tr td{
			font-size: 1em;
			font-weight: 600;
		}
		table tr,th,td{
		padding:0.3em;
	}
</style>
<body>
	<button ><a href="manager.php"><i class="fa fa-sign-out"></i>LOGOUT</a></button>
	<button ><a href="mlogin.php">BACK</a></button>
	  <div class="heading"><h1><img src="../img/logo.png" height="80px" width="100px">XPress Delivery...</h1></div>
	  <div class="container">
		<table class="table table-striped table-responsive-xl" align="center" border="1px" style="width: 1000px; line-height: 30px;  background-color: #d3d3d3; ">
			<tr>
				<th colspan="11" style="height: 70px;" ><h2>Customers Order</h2></th>
			</tr>
			<tr>
				<th style="font-size: 1.7em; color: black; text-shadow: 4px 2px white; text-align: center;">UserID</th>
				<th style="font-size: 1.7em; color: black; text-shadow: 4px 2px white; text-align: center;">Sender Name</th>
				<th style="font-size: 1.7em; color: black; text-shadow: 4px 2px white; text-align: center;">Sender Phone</th>
                <th style="font-size: 1.7em; color: black; text-shadow: 4px 2px white; text-align: center;">From</th>
                <th style="font-size: 1.7em; color: black; text-shadow: 4px 2px white; text-align: center;">Rec. Name</th>
				<th style="font-size: 1.7em; color: black; text-shadow: 4px 2px white; text-align: center;">Rec. Phone</th>
                <th style="font-size: 1.7em; color: black; text-shadow: 4px 2px white; text-align: center;">To</th>
             
                 <th style="font-size: 1.7em; color: black; text-shadow: 4px 2px white; text-align: center;">Qty</th>
                  <th style="font-size: 1.7em; color:black ; text-shadow: 4px 2px white; text-align: center;">Weight(kg)</th>
                   <th style="font-size: 1.7em; colorblack:; text-shadow: 4px 2px white; text-align: center;">Bill</th>
                <th  style="font-size: 1.7em; color: black; text-shadow: 4px 2px white; text-align: center;">Tracking Status</th>

			</tr>
			<?php
			while($row=mysqli_fetch_array($query)){
				$a=$row['trackID'];
				?>

				<tr>
					<td><?php echo $row['userID'];?></td>
	                <td><?php echo $row['sname'];?></td>
	                <td><?php echo $row['sphone'];?></td>
	                <td><?php echo $row['saddress'];?></td>
	                <td><?php echo $row['rname'];?></td>
	                <td><?php echo $row['rphone'];?></td>
	                <td><?php echo $row['raddress'];?></td>
	                <td><?php echo $row['qty'];?></td>
	                <td><?php echo $row['weight'];?></td>
	                <td><?php echo $row['price'];?></td>
	             
	                <td style="font-weight: bold;font-size: 1.3em; font-style: italic; text-align: center;"><a href="trackedit.php?a=<?php echo $row['trackID']; ?>&b=<?php echo $row['email'];?>">Update</a></td>
	         

	            </tr>	<?php
	
            }
     ?>

		</table>

</div>

</body>
</html>