
<?php 

   include_once "connection/conn.php";

   $path=realpath(dirname(__FILE__));
  
 ?>


<?php include_once "file/header.php"; ?>
  <section class="contentsection clear">
  <?php include_once "file/sidebar.php"; ?>
    <article class="maincontent clear">
      <div class="content">
            <h2>Update category</h2>
            <?php 
                if (isset($_GET["category_id"]) and $_GET["category_id"] !=NULL) {
                  $category_id=preg_replace("/[^a-zA-Z0-9]/", "", $_GET["category_id"]);
                 
                }else{
                  header("location:moviecategorylist.php");
                }

             ?>

             <?php 

                if ($_SERVER["REQUEST_METHOD"]=="POST") {
                  $name=$_POST["name"];
                  if ($name=="") {
                     echo "<span style='color:red'>no empty</span>";
                  }else{
                     $sql="UPDATE category set name='$name' where category_id='$category_id'";
                     $query=mysqli_query($connection,$sql);
                     if ($query !=false) {
                       echo "<span style='color:green'>update successfully</span>";
                     }
                  }
                 
                }
              ?>

            <form action="" method="post">
              <table>

                <?php 
                    $sql="SELECT * FROM category where category_id='$category_id'";
                    $query=mysqli_query($connection,$sql);
                    if ($query !=false) {
                      while ($value=mysqli_fetch_array($query)) {
                 ?>
                <tr>
                    <td>Category Name</td>
                    <td><input type="text" name="name" value="<?php echo $value['name'] ?>"></td>
                </tr>
                <tr>
                  <td></td>
                  <td><input type="submit" name="submit" value="Udate"/></td>
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





