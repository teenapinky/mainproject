<?php
session_start();
$con=mysqli_connect("localhost","root","","tour") or die("could'nt connect");
$b=$_SESSION['username'];
$abc="select login_id from login_tbl where username='$b'";
$query=mysqli_query($con,$abc);
$result=mysqli_fetch_array($query);
$c=$result['login_id'];
$city=$_POST['city'];
$name=$_POST['fname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$add=$_POST['add'];
$date=$_POST['date'];
$status=1;
$sq="insert into book_tbl(login_id,city,date,fname,email,phoneno,address,status) values('$c','$city','$date','$name','$email','$phone','$add','$status')";
mysqli_query($con,$sq);

header('location:payment.html');

mysqli_close($con);
?>