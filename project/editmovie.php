
<?php 

   include_once "connection/conn.php";
 ?>


<?php include_once "file/header.php"; ?>
  <section class="contentsection clear">
     <?php include_once "file/sidebar.php"; ?>
    <article class="maincontent clear">
      <div class="content">
            <h2>Update movie & Image</h2>

              <?php 
                if (isset($_GET["movie_id"]) and $_GET["movie_id"] !=NULL) {
                  $movie_id=preg_replace("/[^a-zA-Z0-9]/", "", $_GET["movie_id"]);
                 
                }else{
                  header("location:movielist.php");
                }

             ?>

               <?php 
                if ($_SERVER["REQUEST_METHOD"]=="POST") {
                
                   $mname=$_POST["mname"];
                   $image =$_FILES['image']['name'];
                   $image_temp=$_FILES["image"]["tmp_name"];
                   $uploadimage="common/images/".$image;
                 
                  
                   if ($mname=="" || $image=="" ){
                     echo "<span style='color:red'>no empty</span>";
                  }else{
                    move_uploaded_file($image_temp, $uploadimage);
                     $sql="UPDATE tbl_movie set movie_name='$mname', image='$uploadimage' where movie_id='$movie_id'";
                     $query=mysqli_query($connection,$sql);
                     if ($query !=false) {
                       echo "<span style='color:green'>update successfully</span>";
                     }else{
                       echo "<span style='color:green'>Error</span>";
                     }
                  }
                 
                }
              ?>

            <form action="" method="post" enctype="multipart/form-data">
              <table>

                <?php 
                    $sql="SELECT * FROM tbl_movie where movie_id='$movie_id'";
                    $query=mysqli_query($connection,$sql);
                    if ($query !=false) {
                      while ($value=mysqli_fetch_array($query)) {
                 ?>

                
                <tr>
                    <td>Movie Name</td>
                    <td><input type="text" name="mname" value="<?php echo $value['movie_name'] ?>"/></td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td><input type="file" name="image" ></td>
                </tr>
                <tr>
                    <td>Movie Category Id</td>
                    <td><input type="text" name="mcategory" value="<?php echo $value['category_id'] ?>"/></td>
                </tr>
                <tr>
                  <td></td>
                  <td><input type="submit" name="submit" value="Update"/></td>
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





