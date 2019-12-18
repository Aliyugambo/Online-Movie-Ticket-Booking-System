<?php  
     include 'connection/conn.php';
 ?>

<script type="text/javascript">
  
  function validFormInfo(){

        var fname = document.getElementById('fname').value;
        var lname = document.getElementById('lname').value;
        var email = document.getElementById('email').value;
        var pass = document.getElementById('pass').value;
        var cpass = document.getElementById('cpass').value;
        var pnumber = document.getElementById('pnumber').value;
        var gender = document.getElementById('gender').value;
        var alpha = /^[a-zA-Z]+$/;
        var alphanum = /^(?=.*\d)(?=.*[A-Za-z])(?=.*[!@#$%])[0-9A-Za-z!@#$%]{6,15}$/;
         
        // User Name validation //
        if (fname.length == 0) {
          var errors = document.getElementById('errors');
          errors.style.color = "red";
          errors.innerHTML = "You must enter a user name";
          fname2 = document.getElementById('fname');
          fname2.style.backgroundColor="LIGHTCORAL";
          return false;
        }else{
          if (fname.length < 6) {
          var errors = document.getElementById('errors');
          errors.style.color = "red";
          errors.innerHTML = "User name must contain 6 character";
          fname2 = document.getElementById('fname');
          fname2.style.backgroundColor="LIGHTCORAL";
          return false;
          }
        }

        // User Name validation //
        if (lname.length == 0) {
          var errors = document.getElementById('errors');
          errors.style.color = "red";
          errors.innerHTML = "You must enter a last user name";
          lname2 = document.getElementById('lname');
          lname2.style.backgroundColor="LIGHTCORAL";
          return false;
        }else{
          if (lname.length < 6) {
          var errors = document.getElementById('errors');
          errors.style.color = "red";
          errors.innerHTML = "User name must contain 6 character";
          lname2 = document.getElementById('lname');
          lname2.style.backgroundColor="LIGHTCORAL";
          return false;
          }
        }

        // Email address validation //
        if (email.length == 0) {
          var errors = document.getElementById('errors');
          errors.style.color = "red";
          errors.innerHTML = "Input your email address";
          email2 = document.getElementById('email');
          email2.style.backgroundColor="LIGHTCORAL";
          return false;
        }else{
          var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          if (!re.test(email)) {
          var errors = document.getElementById('errors');
          errors.style.color = "red";
          errors.innerHTML = "You must input your valid email address";
          email2 = document.getElementById('email');
          email2.style.backgroundColor="LIGHTCORAL";
          return false;
          }
        }

        // Password validation //
          if (pass.length == 0) {
          var errors = document.getElementById('errors');
          errors.style.color = "red";
          errors.innerHTML = "You must input a Password";
          pass2 = document.getElementById('pass');
          pass2.style.backgroundColor="LIGHTCORAL";
          return false;
        }else{
          if (pass.length < 6) {
          var errors = document.getElementById('errors');
          errors.style.color = "red";
          errors.innerHTML = "Password must contain 6 character";
          pass2 = document.getElementById('pass');
          pass2.style.backgroundColor="LIGHTCORAL";
          return false;
          }
        }
         if(!alphanum.test(pass)){
           var errors = document.getElementById('errors');
           errors.style.color = "red";
          errors.innerHTML = "Password must 6 characters of letters, numbers at least one special character";
           pass2 = document.getElementById('pass');
           pass2.style.backgroundColor="LIGHTCORAL";
           return false;
         }

        // Confirm Password validation //
        if (cpass.length == 0) {
          var errors = document.getElementById('errors');
          errors.style.color = "red";
          errors.innerHTML = "You must input a Confirm Password";
          cpass2 = document.getElementById('cpass');
          cpass2.style.backgroundColor="LIGHTCORAL";
          return false;
        }else{
          if (cpass.length < 6) {
          var errors = document.getElementById('errors');
          errors.style.color = "red";
          errors.innerHTML = "Confirm Password must contain 6 character";
          cpass2 = document.getElementById('cpass');
          cpass2.style.backgroundColor="LIGHTCORAL";
          return false;
          }
        }
        if(!alphanum.test(cpass)){
          var errors = document.getElementById('errors');
          errors.style.color = "red";
          errors.innerHTML = "Confirm password must 6 characters letters, numbers least one special character";
          cpass2 = document.getElementById('cpass');
          cpass2.style.backgroundColor="LIGHTCORAL";
          return false;
        }
        //Password Matched checked//
        if(pass.length != cpass.length){
          var errors = document.getElementById('errors');
          errors.style.color = "red";
          errors.innerHTML = "Passwords mismatched, Please enter same password";
          pass2 = document.getElementById('pass');
          pass2.style.backgroundColor="LIGHTCORAL";
          return false;
        }

        //Post Code validation//
        if (pnumber.length == 0) {
          var errors = document.getElementById('errors');
          errors.style.color = "red";
          errors.innerHTML = "Input your post code address";
          pnumber2 = document.getElementById('pnumber');
          pnumber2.style.backgroundColor="LIGHTCORAL";
          return false;
        }else{
          if (alpha.test(pnumber)) {
          var errors = document.getElementById('errors');
          errors.style.color = "red";
          errors.innerHTML = "Invalid post code Only number is allowed";
          pnumber2 = document.getElementById('pnumber');
          pnumber2.style.backgroundColor="LIGHTCORAL";
          return false;
          }
        }

         }

</script>



<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
<link rel="stylesheet" href="common/css/bootstrap.css" type="text/css" />
<script src="js/bootstrap.js"></script>
<style type="text/css">
	.abcd{
		float: right;
		margin-right: 250px;
		margin-bottom: -5px;
		font-size: 14px;
	}
	.b{
		float: right;
		margin-right: 50px;
		margin-bottom: 5px;
	}
	.dd {
    float: right;
    padding: 14px;
}
</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">



</head>
<body>
<div class="container">
	<br>
	<nav class="navbar navbar-default">
             		<div class="container-fluid">
             			<div class="navbar-header">
             				<a classs="nav navbar-nav pull-right abc" href="#"><img src="common/images/right.png"></a>
             			</div>
             			<ul class="nav navbar-nav pull-right">
                    <li style="float: left; margin-left: 10px;"><a href="index.php"><i class="fas fa-arrow-left"></i>Back</a></li>
             				<li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
             				<li><a href="#"><i class="fas fa-user"></i>Profile</a></li>
             				<li><a href="login.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
             			</ul>
             		</div>
    </nav>

<div class="error-msg">
    <div id="errors">
    
    </div>

<?php 
   
   // $fname=$lname=$email=$email=$pass=$cpass=$pnumber=$gender="";
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass= $_POST['cpass'];
    $pnumber = $_POST['pnumber'];
    $gender = $_POST['gender'];
     if ($pass == $cpass) {
         
           $query = "INSERT INTO reg values('','$fname','$lname','$email','$pass','$cpass','$pnumber','$gender')";
           $result = mysqli_query($connection, $query); 
           if ($result) {
             echo $errors = "<span style=color:green;>Registration Done Successfully</span>";
                echo "<script>window.location='confirmticket.php'</script>";
           }else{
             echo $errors = "<span style=color:red;>Error, Password is mismatched, Please try later again</span>" .mysqli_error($connection);
           }
     }

    
   }

 ?>


  </div>

<form method="post" action="" name="myform" onSubmit="return validFormInfo()">
          <div class="form-row">
	            <div class="form-group col-md-6">
	              <label for="fname">First Name</label>
	              <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter First Name">
	            </div>
	            <div class="form-group col-md-6">
	              <label for="lname">Last Name</label>
	              <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter Last Last Name">
	            </div>
          </div>
          <div class="form-row">
	              <div class="form-group col-md-6">
	                <label for="email">Email Address</label>
	                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
	              </div>
          </div>
          <div class="form-row">
              <div class="form-group col-md-6">
                <label for="pass">Password</label>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Enter Password">
              </div>
              <div class="form-group col-md-6">
                <label for="cpass">Confirm Password</label>
                <input type="password" class="form-control" name="cpass" id="cpass" placeholder="Enter Confirm Password">
              </div>
          </div>
          <div class="form-row">
              <div class="form-group col-md-6">
                <label for="pnumber">Phone Number</label>
                <input type="text" class="form-control" name="pnumber" id="pnumber" placeholder="Enter Phone Number">
              </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="gender">Gender</label>
              <select class="form-control" name="gender" id="gender">
                <option selected>Choose...</option>
                <option>Male</option>
                <option>Female</option>
              </select>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Sign in</button>
          <br> 
          <div class="abcd">
             <p class="ab">Already registred? <a class="dd" href="userlogin.php" value="Login">Login</a></p>
		  </div>
			
</form>
</div>
<div class="container">
	<div class="navbar navbar-default">
		<p> &copy; All Rights Reserved. | Develop by <a href="http://www.baseltd.com/" target="_blank">Arif Hossain</a></p>
	</div>
</div>
</body>
</html>