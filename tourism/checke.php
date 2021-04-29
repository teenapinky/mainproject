<?php
if (isset($_GET['email'])){
	$email = $_GET['email'];
	$con=mysqli_connect("localhost","root","","tour") or die("connection moonchi");
	$sql="select * from reg_table where email = '$email'";
	$result=mysqli_query($con,$sql)or die($sql);
$n=mysqli_num_rows($result);
	if ($n>0)
		die("TRUE");
	else die("user row illaathe moonchi");
} else die('user moonchal');
?>
