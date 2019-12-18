<?php session_start(); ?>

<?php 
   $login=$_SESSION["login"];
   if ($login !=true) {
     header("location:login.php");
   }

 ?>

<?php include_once "file/header.php"; ?>
  <section class="contentsection clear">
    <?php include_once "file/sidebar.php"; ?>
    <article class="maincontent clear">
      <div class="content">
         Bangladesh is one of the biggest popular country Bangladesh is one of the biggest popular country Bangladesh is one of the biggest popular country Bangladesh is one of the biggest popular country Bangladesh is one of the biggest popular country Bangladesh is one of the biggest popular country one of the biggest popular country Bangladesh is one of the biggest
      </div> 
    </article>
  </section>
  <?php include_once "file/footer.php"; ?>
</div>
</body>
</html>





