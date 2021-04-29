<!DOCTYPE html>
<html>
<head>
<style>
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
#t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
}
#t01 th {
  background-color: black;
  color: white;
}
</style>
</head>
<body>

<h2>Registration Table</h2>


<br>

<table id="t01">
  <?php
$con=mysqli_connect("localhost","root","","tour") or die("couldn't connect");
                            $query = " select * from reg_table";
                            $results = mysqli_query($con,$query);
							$n=mysqli_num_rows($results);
                     
                            echo "<tr><th>First Name</th><th>Last Name</th><th>address</th><th>District</th><th>PIN Code</th><th>email id</th><th>phno</th></tr>";
while($a=mysqli_fetch_array($results))
{

                            echo "<tr>";
                            echo "<td>".$a['fname']."</td><td>"
									.$a['lname']."</td><td>"
                                   .$a['address']."</td><td>"
                                   .$a['district']."</td><td>"
                                 .$a['pincode']."</td><td>"
                                 .$a['email']."</td><td>"
                               .$a['phoneno']."</td>";
                                  
                          echo "</tr>";
}
                             ?>
</table>

</body>
</html>


