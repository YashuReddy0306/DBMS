<?php error_reporting(E_ALL ^ E_NOTICE);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Track edit</title>
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
	select{
		background-color: transparent;
		padding: 0 1em 0 0;
		width: 50%;
		font-family: inherit;
		cursor: inherit;
		line-height: inherit;

	}

</style>
<body>
	<h1>Update Tracking Status</h1>



<?php

$con=mysqli_connect("localhost","root","rashmikeshari123") or die("could not connect to database");

mysqli_select_db($con,'onlinecourier');

$UID=$_GET['a'];
$query=mysqli_query($con,"select * from track where trackID='$UID'");
$sql=mysqli_query($con,"select * from ship where trackID='$UID'");
$res=mysqli_fetch_array($sql);

?>





<form action="trackedit.php" method="post" style="align-content: center; width: 100%">
<table border="1">



<?php
			
			while($row=mysqli_fetch_array($query)){
	?>

            
            <h2 style="text-align: center; font-size: 3em; color: yellow; font-weight: bold;"><?php echo $row['status']; ?></h2>
				<tr>
					<td><input type="hidden" name="id" value="<?php echo $row['trackID'];?>">
						<label>Status: </label>
						<select name="status">
							<option value="Pending">Pending</option>
							<option value="Confirmed">Confirmed</option>
							<option value="Out for delivery">Out for delivery</option>
							<option value="Delivered">Delivered</option>
						</select>
					</td>
				</tr>
				<tr>
	                <td>
	                	<label>Payment : </label><br><input type="text" name="payment" value="<?php echo $row['payment'];?>" ></td>
	            </tr>
	            <tr>
	                <td><label>Arrival Time:</label><br><input type="text" name="time" value="<?php echo $row['time'];?>"></td>
	            	<td><input type="hidden" name="email" value="<?php echo $res['email'];?>"  ></td>
	            	<td><input type="hidden" name="rname" value="<?php echo $res['rname'];?>"></td>
	            	<td><input type="hidden" name="sname" value="<?php echo $res['sname'];?>"></td>
	            	
	            </tr>
	       
	               <tr> <td ><input type="submit" name="s" value="UPDATE" style="padding-left: 4em; background-color: white; color: black; text-align: center; font-size: 1.3em;"></td></tr>

	   
	<?php

	
            }
  
 
 	if(isset($_POST['s'])){

 	
 	$s=$_POST['status'];
 	$p=$_POST['payment'];
 	$a=$_POST['time'];
 	$id=$_POST['id'];



    $result=mysqli_query($con,"update track set status='$s', payment='$p',time='$a' where trackID='$id'");


    if($result){
    	
    	if($s=='Confirmed'){


                    require 'PHPMailer-5.2-stable/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'xpressdelivery65@gmail.com';                 // SMTP username
$mail->Password = 'xpressd65';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('xpressdelivery65@gmail.com', 'Xpress Delivery');
$mail->addAddress($_POST['email']);     // Add a recipient

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Booking Confirmed';
$mail->Body    = 'Your booking has been confirmed\n Visit the website to track your Parcel.';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
}
if($s=='Delivered'){


                    require 'PHPMailer-5.2-stable/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'xpressdelivery65@gmail.com';                 // SMTP username
$mail->Password = 'xpressd65';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('xpressdelivery65@gmail.com', 'Xpress Delivery');
$mail->addAddress($_POST['email']);     // Add a recipient

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Parcel Delivered';
$mail->Body    = 'Your Order has been delivered.Hope You liked our services, Thanks for choosing us...Please provide us feedback by visiting our page';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
}
header("location:orderview.php");
}else{
	die(mysqli_error($con));
	echo "updation failed";
}
}
 ?>



 	

 </table>
</form>
</body>
</html>



