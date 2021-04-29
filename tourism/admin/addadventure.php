<?php
 session_start();
 $con=mysqli_connect("localhost","root","","tour") or die("couldn't connect");
$name=$_POST['bname'];
$price=$_POST['price'];

$file=$_FILES['photo']['name']; 
$fileloc = "upload/";

move_uploaded_file($_FILES["photo"]["tmp_name"],$fileloc.$file);
$sqli="insert into addadventure(Adventurename,price,image) values ('$name','$price','$file')";

if(mysqli_query($con,$sqli))
{
header("location:form1.php");
}
mysqli_close($con);
?>