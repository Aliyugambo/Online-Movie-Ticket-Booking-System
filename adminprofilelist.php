
<?php 

   include_once "connection/conn.php";
 ?>


<?php include_once "file/header.php"; ?>
  <section class="contentsection clear">
    <?php include_once "file/sidebar.php"; ?>
    <article class="maincontent clear">
      <div class="content">
        <div class="catagoryoption">
            <h2>Admin Profile List</h2>

            <?php 
                if (isset($_GET["admin_id"])) {
                  $admin_id=$_GET["admin_id"];
                  $sql="DELETE from admin where admin_id='$admin_id'";
                  $query=mysqli_query($connection,$sql);
                  if ($query !=false) {
                    echo "<span class='success'>Delete successfully<span>";
                  }
                }
             ?>
            
            <table class="mytable">
              <tr>
                <th width="20%">Serial No.</th>
                <th width="20%">Name</th>
                <th width="20%">Email</th>
                <th width="20%">Password</th>
                <th width="20%">Action</th>
              </tr>

              <?php 
                  $sql="SELECT * FROM admin";
                  $query=mysqli_query($connection,$sql);
                  if ($query !=false) {
                    $i=1;
                    while ($value=mysqli_fetch_array($query)) {
                      $i++;
                  
               ?>
              
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $value["name"] ?></td>
                <td><?php echo $value["email"] ?></td>
                <td></td>
                <td>
                  <a href="editadminprofilecatagory.php?admin_id=<?php echo $value['admin_id'] ?>">Edit</a> ||
                  <a href="?admin_id=<?php echo $value['admin_id'] ?>" onclick="return confirm('Do you wnat to delete this ?')">Delete</a>
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





