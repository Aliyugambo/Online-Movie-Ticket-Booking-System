<?php include_once "uploads/header.php" ?>

<?php 
    if ($_SESSION["usession"]!=true) {
      header("location:userlogin.php");
    }

 ?>
<?php 

   $book_id=$_SESSION["book_id"];
   

 ?>
 <div class="mass_user">
<table class="table table-bordered">
  <tr>
    <th>Phone</th>
    <th>Movie</th>
    <th>Date</th>
    <th>status</th>
  </tr>
  <?php 

      $sql="SELECT * FROM book where book_id='$book_id'";
      $query=mysqli_query($connection,$sql);
      if ($query !=false) {
        while ($value=mysqli_fetch_array($query)) {
         
      
   ?>
  <tr>
    <td><?php echo $value["phone"]; ?></td>
    <td><?php echo $value["mname"]; ?></td>
    <td><?php echo $value["showdate"]; ?></td>
    <td>
      <?php 

          if ($value["status"]==0) {
       ?>
       <span style="color: red">Not confirmed</span>
       <?php }else{ ?>
         <span style="color:green"> confirmed</span>
       <?php } ?>


    </td>
  </tr>
  <?php }} ?>

</table>
</div>
    
</div>
<div class="container">
	<div class="navbar navbar-default">
		<p> &copy; All Rights Reserved. | Develop by <a href="http://www.baseltd.com/" target="_blank">Arif Hossain</a></p>
	</div>
</div>
</body>
</html>