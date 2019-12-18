
<?php 

   include_once "connection/conn.php";
 ?>


<?php include_once "file/header.php"; ?>
  <section class="contentsection clear">
    <?php include_once "file/sidebar.php"; ?>
    <article class="maincontent clear">
      <div class="content">
        <div class="catagoryoption">
            <h2>movie category list</h2>
            <?php 
                if (isset($_GET["category_id"])) {
                  $category_id=$_GET["category_id"];
                  $sql="DELETE from category where category_id='$category_id'";
                  $query=mysqli_query($connection,$sql);
                  if ($query !=false) {
                    echo "<span class='success'>Delete successfully<span>";
                  }
                }
             ?>
            <table class="mytable">
              <tr>
                <th width="20%">Serial NO.</th>
                <th width="50%">Name</th>
                <th width="20%">Action</th>
              </tr>
              <?php 
                  $sql="SELECT * FROM category";
                  $query=mysqli_query($connection,$sql);
                  if ($query !=false) {
                    $i=1;
                    while ($value=mysqli_fetch_array($query)) {
                      $i++;
                  
               ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $value["name"] ?></td>
                <td>
                  <a href="editcategor.php?category_id=<?php echo $value['category_id'] ?>">Edit</a> ||
                  <a href="?category_id=<?php echo $value['category_id'] ?>" onclick="return confirm('Do you wnat to delete this ?')">Delete</a>
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





