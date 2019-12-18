
<?php 

   include_once "connection/conn.php";
 ?>


<?php include_once "file/header.php"; ?>
  <section class="contentsection clear">
    <?php include_once "file/sidebar.php"; ?>
    <article class="maincontent clear">
      <div class="content">
        <div class="catagoryoption">
            <h2>Food List</h2>

            <?php 
                if (isset($_GET["food_id"])) {
                  $food_id=$_GET["food_id"];
                  $sql="DELETE from tbl_food where food_id='$food_id'";
                  $query=mysqli_query($connection,$sql);
                  if ($query !=false) {
                    echo "<span class='success'>Delete successfully<span>";
                  }
                }
             ?>
            
            <table class="mytable">
              <tr>
                <th width="10%">Serial No.</th>
                <th width="10%">Food Id</th>
                <th width="10%">Food Name</th>
                <th width="60%">Image</th>
                <th width="10%">Food Category</th>
                <th width="50%">Action</th>
              </tr>

              <?php 
                  $sql="SELECT * FROM tbl_food";
                  $query=mysqli_query($connection,$sql);
                  if ($query !=false) {
                    $i=1;
                    while ($value=mysqli_fetch_array($query)) {
                      $i++;
                  
               ?>
              
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $value["food_id"] ?></td>
                <td><?php echo $value["food_name"] ?></td>
                <td><img src="<?php echo $value["image"] ?>"></td>
                <td><?php echo $value["price"] ?></td>
                <td><?php echo $value["food_category"] ?></td>
                <td>
                  <a href="editfood.php?food_id=<?php echo $value['food_id'] ?>">Edit</a> ||
                  <a href="?food_id=<?php echo $value['food_id'] ?>" onclick="return confirm('Do you wnat to delete this ?')">Delete</a>
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





