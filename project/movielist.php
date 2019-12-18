
<?php 

   include_once "connection/conn.php";
 ?>


<?php include_once "file/header.php"; ?>
  <section class="contentsection clear">
    <?php include_once "file/sidebar.php"; ?>
    <article class="maincontent clear">
      <div class="content">
        <div class="catagoryoption">
            <h2>Movie List</h2>

            <?php 
                if (isset($_GET["movie_id"])) {
                  $movie_id=$_GET["movie_id"];
                  $sql="DELETE from movie where movie_id='$movie_id'";
                  $query=mysqli_query($connection,$sql);
                  if ($query !=false) {
                    echo "<span class='success'>Delete successfully<span>";
                  }
                }
             ?>
            
            <table class="mytable">
              <tr>
                <th width="10%">Serial No.</th>
                <th width="10%">Movie_id</th>
                <th width="10%">Movie Name</th>
                <th width="60%">Image</th>
                <th width="10%">Category_id</th>
                <th width="50%">Action</th>
              </tr>

              <?php 
                  $sql="SELECT * FROM tbl_movie";
                  $query=mysqli_query($connection,$sql);
                  if ($query !=false) {
                    $i=1;
                    while ($value=mysqli_fetch_array($query)) {
                      $i++;
                  
               ?>
              
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $value["movie_id"] ?></td>
                <td><?php echo $value["movie_name"] ?></td>
                <td><img src="<?php echo $value["image"] ?>" width="50px"></td>
                <td><?php echo $value["category_id"] ?></td>
                <td>
                  <a href="editmovie.php?movie_id=<?php echo $value['movie_id'] ?>">Edit</a> ||
                  <a href="?movie_id=<?php echo $value['movie_id'] ?>" onclick="return confirm('Do you wnat to delete this ?')">Delete</a>
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





