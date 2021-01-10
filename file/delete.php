<title>Deletion</title>
<?php

$con=mysqli_connect("localhost","root","") or die("could not connect to database");

mysqli_select_db($con,'onlinecourier');

$uid=$_GET['a'];
mysqli_query($con,"delete from clogin where userID='$uid'");
header("location:crecord.php");


?>