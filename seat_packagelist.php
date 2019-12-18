
<?php 

   include_once "connection/conn.php";
 ?>


<?php include_once "file/header.php"; ?>
  <section class="contentsection clear">
    <?php include_once "file/sidebar.php"; ?>
    <article class="maincontent clear">
      <div class="content">
        <div class="catagoryoption">
            <h2>Seat Package List</h2>

            <?php 
                if (isset($_GET["package_id"])) {
                  $package_id=$_GET["package_id"];
                  $sql="DELETE from tbl_package where package_id='$package_id'";
                  $query=mysqli_query($connection,$sql);
                  if ($query !=false) {
                    echo "<span class='success'>Delete successfully<span>";
                  }
                }
             ?>
            
            <table class="mytable">
              <tr>
                <th width="10%">Serial No.</th>
                <th width="10%">Package id</th>
                <th width="10%">Package Name</th>
                <th width="10%">Price</th>
                <th width="10%">Seat Package</th>
                <th width="10%">Discount</th>
                <th width="80%">Action</th>
              </tr>

              <?php 
                  $sql="SELECT * FROM tbl_package";
                  $query=mysqli_query($connection,$sql);
                  if ($query !=false) {
                    $i=1;
                    while ($value=mysqli_fetch_array($query)) {
                      $i++;
                  
               ?>
              
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $value["package_id"] ?></td>
                <td><?php echo $value["package_name"] ?></td>
                <td><?php echo $value["price"] ?></td>
                <td><?php echo $value["seat_package"] ?></td>
                <td><?php echo $value["discount"] ?></td>
                <td>
                  <a href="editseat_package.php?package_id=<?php echo $value['package_id'] ?>">Edit</a> ||
                  <a href="?package_id=<?php echo $value['package_id'] ?>" onclick="return confirm('Do you wnat to delete this ?')">Delete</a>
                </td>

            </tr>
              <?php }} ?>
            </table>
    </div>
    </div>
    </article>
  </section>
   <?php include_once "file/footer.php"; ?>
</div>
</body>
</html>





