<?php

//error_reporting(E_ALL ^ E_WARNING);

//$errors=array();

$min=50;

//if(isset($_POST['submit']))

//{

  $db=mysqli_connect('localhost','root','rashmikeshari123','onlinecourier'); 

  //or die("could not connect to database");  

   // Check connection
     if($db === false){
         die("ERROR: Could not connect. " . mysqli_connect_error());
     }

 	


	$UID=$_GET['b'];


	$name1=mysqli_real_escape_string($db,$_REQUEST['name1']);
	$address1=mysqli_real_escape_string($db,$_REQUEST['address1']);
	$phone1=$_REQUEST['phone_11'];
	$name2=mysqli_real_escape_string($db,$_REQUEST['name2']);
	$address2=mysqli_real_escape_string($db,$_REQUEST['address2']);
	$email=mysqli_real_escape_string($db,$_REQUEST['email']);
	$phone2=$_REQUEST['phone_12'];
	$weight=$_REQUEST['weight'];
	$qty=$_REQUEST['no'];
	$price=$weight*$min+$min;
	$tid=uniqid("id");




	//if(empty($name1)) { array_push($errors,"sname required"); }
	//if(empty($name2)) { array_push($errors,"rname required"); }
	//if(empty($address1)) { array_push($errors,"saddress required"); }
	//if(empty($address2)) { array_push($errors,"raddress required"); }
	//if(empty($phone_11)) { array_push($errors,"sphone required"); }
	//if(empty($phone_12)) { array_push($errors,"rphone required"); }


	//if(count($errors)==0)
	//{

	$query="INSERT INTO ship(userID,trackID,sname,saddress,sphone,rname,raddress,rphone,email,qty,weight,price) values('$UID','$tid','$name1','$address1','$phone1','$name2','$address2','$phone2','$email','$qty','$weight','$price')";

	$sqli="INSERT INTO track(trackID,status,payment) values('$tid','Pending','0')";


	if (mysqli_query($db, $query) && mysqli_query($db,$sqli)) {

		  header("location:billing.php?c=$UID & d=$tid");
   		
		}

		else 
		{
 		 echo "Error: " . $query . "<br>" . mysqli_error($db);
		}
//}


?>