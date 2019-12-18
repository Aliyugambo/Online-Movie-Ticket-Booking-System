
<?php 

   include_once "connection/conn.php";
 ?>


<?php include_once "file/header.php"; ?>
  <section class="contentsection clear">
     <?php include_once "file/sidebar.php"; ?>
    <article class="maincontent clear">
      <div class="content">
            <h2>Seat Types Catagory List</h2>

            <?php 
                if (isset($_GET["seat_id"])) {
                  $seat_id=$_GET["seat_id"];
                  $sql="DELETE from seat where seat_id='$seat_id'";
                  $query=mysqli_query($connection,$sql);
                  if ($query !=false) {
                    echo "<span class='success'>Delete successfully<span>";
                  }
                }
             ?>
            
            <form action="" method="post">
              <table class="mytable">
              <tr>
                <th width="15%">Serial NO.</th>
                <th width="40%">Seat Catagory Name</th>
                 <th width="30%">Price</th>
                <th width="30%">Action</th>
              </tr>

              <?php 
                  $sql="SELECT * FROM seat";
                  $query=mysqli_query($connection,$sql);
                  if ($query !=false) {
                    $i=1;
                    while ($value=mysqli_fetch_array($query)) {
                      $i++;
                  
               ?>
              
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $value["types"] ?></td>
                <td><?php echo $value["price"] ?></td>
                <td>
                  <a href="editseatcatagory.php?seat_id=<?php echo $value['seat_id'] ?>">Edit</a> ||
                  <a href="?seat_id=<?php echo $value['seat_id'] ?>" onclick="return confirm('Do you wnat to delete this ?')">Delete</a>
                </td>

            </tr>
             <?php }} ?>
            </table>
            </form>
    </div>
    </article>
  </section>
   <?php include_once "file/footer.php"; ?>
</div>
</body>
</html>





