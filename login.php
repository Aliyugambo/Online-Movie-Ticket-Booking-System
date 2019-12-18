<?php session_start(); ?>
<?php 

   include_once "connection/conn.php";
 ?>



<!DOCTYPE html>
<html>
<title>admin</title>
<link rel="stylesheet" type="text/css" href="common/css/login.css">
<style type="text/css">
.bs-example {
  margin:10px;
}
body { 
  background: url("common/images/"); 
  background-position: center 0;
  backface-visibility: visible;
  background-color: #ffff!important;
  background-repeat: no-repeat;
}

</style>
</head>
<body>
  <div class="container" style="margin-top:40px; color: red;">
             
  </div>    
 <div style="width: 200px;height: 50px;margin:0 auto;color: red;">
   
  <?php 
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            $email=$_POST["email"];
            $pass=$_POST["pass"];
  
              if (empty($email) || empty($pass)) {
                echo "Field must not be empty";
              }else{
                $pass=md5($pass);
                $sql="SELECT * FROM admin where email='$email' and password='$pass'";
                $query=mysqli_query($connection,$sql);
                    if ($query !=false) {
                        $row=mysqli_num_rows($query);
                        if ($row==1) {
                         
                          $value=mysqli_fetch_array($query,MYSQLI_ASSOC);
                          $_SESSION["login"]=true;
                          $_SESSION["admin_id"]=$value["admin_id"];
                          $_SESSION["email"]=$value["email"];
                           header("location:admin.php");
                        }else{
                          echo "The password did not match";
                        }
                    }
                        }
              }
  ?>
 </div>
<section class="loginpage clear">
     <form action="" method="post">
       <h2>Login Page</h2>
       <div>
          <label>E-mail</label>
          <input type="email" name="email" placeholder="E-mail"/>
       </div>
       <div>
         <label>Password</label>
         <input type="password" name="pass" placeholder="Password"/>
       </div>
       <div>
         <input type="submit" name="submit" value="Login" />
       </div>
       <div class="abcd">
             <p class="ab">Not Registred? 
             <a class="dd" href="registrar.php" value="Login">Signup</a></p>
      </div>
     </form>
</section>
</body>
</html>





