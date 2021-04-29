<?php
session_start();
include("Dbconnection.php");

$email=$_POST["email"];
$password=$_POST["pass"];
$pass=md5($password);

$r="select login_id from reg_table where email='$email'";
$result=mysqli_query($con,$r);
$n=mysqli_num_rows($result);
if($n>0)
{
  $a=mysqli_fetch_array($result);
  $login_id=$a['login_id'];
}

$sq="update login_tbl set password='$pass' where login_id='$login_id'";
if(mysqli_query($con,$sq))
{
  ?>
  <script>alert("password successfully changed");
  location.href="login.html";
   exit;
  </script>
  <?php
}
mysqli_close($con);
   ?>
