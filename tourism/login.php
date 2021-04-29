<?php
   session_start();

$con=mysqli_connect("localhost","root","","tour") or die("couldn't connect");

  $Username=$_POST["username"];
  $Password=$_POST["password"];
  $pass=md5($Password);
 $sql="select * from login_tbl where username='$Username' and password='$pass'";
$result=mysqli_query($con,$sql)or die($sql);
$n=mysqli_num_rows($result);
$_SESSION['username']=$Username;
  if($n>0)

{
  while($fin=mysqli_fetch_array($result))
  {
	if($fin['usertype']=="admin")
	{
		$_SESSION['type']="admin";
       header("location:admin/table.php");
       exit;
    }

	if($fin['usertype']=="user")
{
	$_SESSION['type']="user";
	header("location:user/index.php");
	exit;
}

}}
else

{
  ?>
<script>alert("Invalid Username or Password");
location.href="login.html";
 exit;
</script>
<?php
}

mysqli_close($con);

   ?>
