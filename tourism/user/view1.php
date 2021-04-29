<?php
session_start();
$con=mysqli_connect("localhost","root","","tour") or die("couldn't connect");
$query = " select * from addwinter";
$results = mysqli_query($con,$query);
	?>
<!DOCTYPE html>
<html lang="en">
<head>


	<title>Table V02</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/style.css">
	
	<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column1 {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row1 {margin: 0 -5px;}

/* Clear floats after the columns */
.row1:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column1 {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card1 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
  margin-bottom:16px;
}
</style>
	<script>
function myFunction() {
alert("Item has been ordered");
}

</script>
</head>
<body>
	
		<br/>
		<div class="row1">	
 	<?php
	while($row=mysqli_fetch_array($results))
	{?>


  <div class="column1">
    <div class="card1">
      
		

			<h3><img  style=" padding:5px;"src="../admin/upload/<?php echo $row['image'] ?>" width="150px" height="150px" ></a></h3>
			<p><h3><strong><?php echo $row['Wintername'] ?></strong></h3></p>
			<p><h5 style="color:red;" class="text-danger" ><strong>₹<strong> <?php echo $row['price'] ?></h5></p>
			<?php
			echo "<a href='book1.php?x=".$row['awid']."' class='btn btn-primary py-3 px-5' style='width:300px;'>BOOK NOW </a>"; 
			?>
			 </div>
  </div>


 
	<?php
}?>
 </div>


</body>
</html>
