<?php
session_start();
include("Dbconnection.php");
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$address=$_POST["address"];
$district=$_POST["district"];
$pincode=$_POST["pincode"];
$email=$_POST["email"];
$phoneno=$_POST["phone"];
$username=$_POST["uname"];
$user_type="user";
$status=1;
$temp=$_SESSION['username'];
$h="select login_id from login_tbl where username='$temp'";
$res=mysqli_query($con,$h);
$a=mysqli_fetch_array($res);
$b=$a['login_id'];
$sq="update reg_table set fname='$fname',lname='$lname',address='$address',district='$district',pincode='$pincode',email='$email',phoneno='$phoneno' where login_id='$b'";
mysqli_query($con,$sq);
$a="update login_tbl set username='$username' where username='$temp'";
if(mysqli_query($con,$a))
{
	$_SESSION['username']=$username;
  ?>
  <script>alert("Profile Updated Successfully");
  location.href="index.php";
   exit;
  </script>
  <?php
}
mysqli_close($con);
?>