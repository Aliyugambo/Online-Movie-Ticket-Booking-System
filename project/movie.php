
<?php 

   include_once "connection/conn.php";
 ?>


<?php include_once "file/header.php"; ?>
  <section class="contentsection clear">
     <?php include_once "file/sidebar.php"; ?>
    <article class="maincontent clear">
      <div class="content">
            <h2>Add Movie & Image</h2>
            <?php 
                if ($_SERVER["REQUEST_METHOD"]=="POST") {
                  $mid=$_POST["mid"];
                  $mname=$_POST["mname"];
              
                  $mcategory=$_POST["mcategory"];

                   $image =$_FILES['image']['name'];
                   $image_temp=$_FILES["image"]["tmp_name"];
                   $uploadimage="common/images/".$image;

                  if (empty($mname) || empty($image)) {
                  echo "Nothing empty";
                  }else{
                    $sql="SELECT * FROM tbl_movie where movie_name='$mname'";
                    $query=mysqli_query($connection,$sql);
                     $row=mysqli_num_rows($query);

                       if ($row<1) {
                          move_uploaded_file($image_temp, $uploadimage);
                         $sql="INSERT INTO tbl_movie (movie_name,image) VALUES('$mname','$uploadimage');";
                         $query=mysqli_query($connection,$sql);
                            if ($query) {
                               echo "Info is inserted";
                           }
                         }else{
                          echo "exist";
                       }
                    }
                }

             ?>
            <form action="" method="post" enctype="multipart/form-data">
              <table>
                <tr>
                    <td>Movie Id</td>
                    <td><input type="text" name="mid" placeholder="Movie id"/></td>
                </tr>
                <tr>
                    <td>Movie Name</td>
                    <td><input type="text" name="mname" placeholder="Movie Name"/></td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td><input type="file" name="image"/></td>
                </tr>
                <tr>
                    <td>Movie Category Id</td>
                    <td><input type="text" name="mcategory" placeholder="Movie Catagory"/></td>
                </tr>
                <tr>
                  <td></td>
                  <td><input type="submit" name="submit" value="Add"/></td>
                </tr>
              </table>
            </form>
    </div>
    </article>
  </section>
   <?php include_once "file/footer.php"; ?>
</div>
</body>
</html>





