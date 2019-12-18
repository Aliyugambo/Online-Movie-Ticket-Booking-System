<?php  session_start(); 

  


?>

<?php 
   
   include 'connection/conn.php';

 ?>

<!DOCTYPE html>
<html>
<head>
<title>User Profile</title>
<link rel="stylesheet" href="common/css/bootstrap.css" type="text/css" />
<script src="js/bootstrap.js"></script>
<style type="text/css">
	.sign {
    float: right;
    margin-right: 100px;
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
                     <li style="float: left; margin-left: 10px;"><a href="../project/registrar.php"><i class="fas fa-arrow-left"></i>Back</a></li>
             				<li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
             				
                            <?php 
                            $usesesion=false;
                            if (isset($_SESSION["usesesion"])) {
                                    $usesesion=$_SESSION["usesesion"];
                                }


                                if ($usesesion!=true) {
                             ?>
                             <li><a href="massuser.php"><i class="fas fa-user"></i>Profile</a></li>
                            <li><a href="?action=logout"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                           <?php } ?>
                            <?php 

                                if (isset($_GET["action"]) and $_GET["action"]=="logout") {
                                    session_destroy();
                                    header("location:userlogin.php");
                                }

                             ?>
             				
             			</ul>
             		</div>
    </nav>