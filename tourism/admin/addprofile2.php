<?php
session_start();

if(!isset($_SESSION['username'])  or $_SESSION['type']!='user')
{
	header('location:../login.html');
}

if(isset($_SESSION['username']))
{
	$temp=$_SESSION['username'];
}	
	?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Travelo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/animate.css">
  
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">

  
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
  span{
  font-size:15px;}
  </style>
  
  <script>
        
		
        function validate6()
        {
        var name=document.getElementById("name2").value;
        var letters=/^[a-zA-Z\s]*$/;
        if(!name.match(letters))
        {
        alert("Please enter valid name");
        document.getElementById("name2").value="";
        }
		else if(name=="")
		{
		alert ("last name can't be blank");
		}
        }
        function validate9()
        {
        var name=document.getElementById("name1").value;
        var letters=/^[a-zA-Z\s]*$/;
        if(!name.match(letters))
        {
        alert("Please enter valid name");
        document.getElementById("name1").value="";
        }
		else if(name=="")
		{
		alert ("first name can't be blank");
		}
        }
        function validate2()
        {
        var phone = document.getElementById("phno").value;
        var ph=/^(9|8|7|6)[0-9]{9}$/;
         if(!phone.match(ph))
        {
        alert("enter valid phone number");
        document.getElementById("phno").value="";
        }
		else if(phone=="")
		{
		alert ("phone number can't be blank");
		}
        }
		
		function validate7()
          {
          var name=document.getElementById("address1").value;
          var letters=/^[a-zA-Z\s]*$/;
          if(!name.match(letters))
          {
          alert("Please enter address correctly");
          document.getElementById("address1").value="";
          }
      }
         function validatepin()
        {
        var phone = document.getElementById("pincode1").value;
        var ph=/^(6)[0-9]{5}$/;
         if(!phone.match(ph))
        {
        alert("enter valid pincode");
        document.getElementById("pincode1").value="";
        }
		else if(pincode1=="")
		{
		alert ("pincode can't be blank");
		}
        }
        function validate1()
        {
        var email=document.getElementById("em").value;
        var pat=/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+?\.[a-zA-Z]{2,4}$/;
         if(!email.match(pat))
        {
        alert("Please enter valid email");
        document.getElementById("em").value="";
        }		
        }
		
		function che() {
		var email = document.getElementById('em').value;
        if (!email) return;
        console.log("WORKING EMAIL TILL HERE");
        var ajax = new XMLHttpRequest();
        ajax.onreadystatechange = function(){
          if (this.readyState == 4 && this.status == 200 ){
            console.log(this.response); //helps SEE WHATS GOING ON in the php file;
            if(this.response=='TRUE'){
                document.getElementById('maile').innerHTML="Email is taken once";
                document.getElementById('em').value="";
                document.forms["regform"]["email"].focus();
            }
            else {
              document.regform.phno.focus();
            }

          }
        }
        ajax.open("GET", "checke.php?email="+email, true);
        ajax.send();

}

function check() {
      var username = document.getElementById('uname1').value;
            if (!username) return;
            console.log("WORKING user TILL HERE");
            var ajax = new XMLHttpRequest();
            ajax.onreadystatechange = function(){
              if (this.readyState == 4 && this.status == 200 ){
                console.log(this.response); //helps SEE WHATS GOING ON in the php file;
                if(this.response=='TRUE'){
                    document.getElementById('user').innerHTML="Username taken";
                    document.getElementById('uname1').value="";
                    document.forms["regform"]["uname"].focus();
                }
              }
            }
            ajax.open("GET", "check.php?username="+username, true);
            ajax.send();

}

        function validate3()
        {
        var name=document.getElementById("uname1").value;
        var letters=/^[0-9a-zA-Z]+$/;
        if(!name.match(letters))
        {
        alert("Please enter valid username");
        document.getElementById("uname1").value="";
        }
		else if(name=="")
		{
		alert ("username can't be blank");
		}
        }
        function validate4()
        {
        var password = document.getElementById("pass").value;
        var pass=/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W]).{6,}/;
         if(!password.match(pass))
        {
         alert("Please enter valid password");
         document.getElementById("pass").value="";
        }
		else if(password=="")
		{
		alert ("password can't be blank");
		}
        }
        function validcpass()
          {
          var password=document.getElementById("pass").value;
          var cpass=document.getElementById("cpawd").value;
          if(!(password==cpass))
          {
           alert("Password not matching");
           document.getElementById("cpawd").value="";
          }
           }

        </script>
</head>

<body>
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   
 </nav>
 <!-- END nav -->
 
 <section  style="background-image: url('images/Travel.jpg'); height: 300px;">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
       <h1 class="mb-0 bread"></h1>
     </div>
   </div>
 </div>
</section>

<br> <br> <br> <br>
<section class="ftco-section contact-section ftco-no-pt">
  <div class="container">
    <div class="row block-9">
      <div class="col-md-6 order-md-last d-flex">
        <form method="POST" name="regform" action="addprofile1.php" class="bg-light p-5 contact-form>
		 <h2 class "title">EDIT<h2><br>
		 
		 <form method="POST" action="addprofile1.php">
<?php
include("Dbconnection.php");
$sq="select * from login_tbl where username='$temp'";
$res=mysqli_query($con,$sq);
$a=mysqli_fetch_array($res);
$b=$a['login_id'];
$sql="select * from reg_table where login_id='$b'";
$c=mysqli_query($con,$sql);
$result=mysqli_fetch_array($c);
?>
          <div class="form-group">
		  <input type="text" class="form-control" placeholder="First Name" name="fname" id ="name1" onblur="validate9()" value="<?php echo $result['fname']; ?>" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Last Name" name="lname" id ="name2" onblur="validate6()" value="<?php echo $result['lname']; ?>" required>
          </div>
		  <div class="form-group">
		  <input type="textarea" class="form-control" placeholder="Address" name="address" id ="address1" onblur="validate7()" value="<?php echo $result['address']; ?>" required>
          </div>
		  <div class="form-group">
		  <input type="text" class="form-control" placeholder="District" name="district" id ="name3" onblur="validate5()" value="<?php echo $result['district']; ?>" required>
          </div>
		  <div class="form-group">
		  <input type="text" class="form-control" placeholder="Pincode" name="pincode" id ="pincode1" onblur="validatepin()" value="<?php echo $result['pincode']; ?>" required>
          </div>
		  <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" name="email" id ="em" onblur="validate1(); che()" value="<?php echo $result['email']; ?>" required>
				<span id="maile"></span>
              </div>
		  <div class="form-group">
		  <input type="tel" class="form-control" placeholder="Phone" name="phone" id ="phno" onblur="validate2()" value="<?php echo $result['phoneno']; ?>" required>
          </div>
		  <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" name="uname" id ="uname1" onBlur="validate3(); check()" value="<?php echo $a['username']; ?>" required>
              </div>  <span id="user"></span>
		  
         
          <div class="form-group">
            <button type="submit"  class="btn btn-primary py-3 px-5">UPDATE</button>
			<button type="submit"  class="btn btn-primary py-3 px-5">CLOSE</button>
          </div>
        </form>
        
      </div>

      <div class="col-md-6 d-flex">
       <div class="hero-wrap hero-bread" style="background-image: url('images/Hy.jpg');"></div>
     </div>
   </div>
 </div>
</section>








<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>