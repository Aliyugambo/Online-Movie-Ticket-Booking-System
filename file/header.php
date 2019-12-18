
<?php session_start(); ?>

<!DOCTYPE html>
<html>
<title>admin</title>
<link rel="stylesheet" type="text/css" href="common/css/style.css">
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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
  <div class="container" style="margin-top:40px;">
             
  </div>   
 
 
<div class="teamplate">
    <header class="headersection clear">
           <h2>Admin panel</h2>
      <nav class="mainmanu clear">
        
  <?php 

      if (isset($_GET["logout"])) {
        echo session_destroy();
        header("location:login.php");
      }
   ?>
               <ul>
                  <li><a href="admin.php"><i class="fas fa-home"></i>Home</a></li>
                  <li><a href="adminprofilelist.php"><i class="fas fa-user"></i>Admin Profile</a></li>
                  <li><a href="changepass.php"><i class="fas fa-key"></i>Change Password</a></li>
                  <li><a href="book.php"><i class="fas fa-list-alt"></i>Book list</a></li>
                  <li><a href="?logout=actiom"><i class="fas fa-sign-out-alt"></i>LogOut</a></li>
              </ul>
      </nav>
  </header>