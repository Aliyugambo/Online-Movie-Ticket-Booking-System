<?php session_start(); ?>
<?php 

   include_once "connection/conn.php";
 ?>



<!DOCTYPE html>
<html>
<title>User Login</title>
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
   
 </div>
<section class="loginpage clear">
  <?php 
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
            $phone=$_POST["phone"];
            $sql="SELECT * FROM book where phone='$phone'";
            $query=mysqli_query($connection,$sql);
            if ($query !=false) {
              $num=mysqli_num_rows($query);
              if ($num>0) {
                 $value=mysqli_fetch_array($query);
               
             
                  $_SESSION["usession"]=true;
                  $_SESSION["book_id"]=$value["book_id"];
                  header("Location:massuser.php");
              }
             
            }
        }

   ?>
     <form action="" method="post">
       <h2>Login Page</h2>
       <div>
          <label>Phone</label>
          <input type="text" name="phone" placeholder="Phone"/>
       </div>
       
         <input type="submit" name="submit" value="Login"/>
       </div>
       
     </form>
</section>
</body>
</html>





