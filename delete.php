<title>Deletion</title>
<?php

$con=mysqli_connect("localhost","root","rashmikeshari123") or die("could not connect to database");

mysqli_select_db($con,'onlinecourier');

$uid=$_GET['a'];
mysqli_query($con,"delete from clogin where userID='$uid'");
$sql=mysqli_query($con,"select * from ship where userID='$uid'");
$row=mysqli_fetch_array($sql);
$a=$row['trackID'];
mysqli_query($con,"delete from ship where userID='$uid'");
mysqli_query($con,"delete from track where trackID='$a'");
mysqli_query($con,"delete from suggest where userID='$u'");
header("location:crecord.php");


?>