
<?php 

   include_once "connection/conn.php";
    $path=realpath(dirname(__FILE__));
 ?>


<?php include_once "file/header.php"; ?>
  <section class="contentsection clear">
    <?php include_once "file/sidebar.php"; ?>
    <article class="maincontent clear">
      <div class="content">
        <div class="catagoryoption">
            <h2>Movie Time List</h2>

            <?php 
                if (isset($_GET["movie_time_id"])) {
                  $movie_time_id=$_GET["movie_time_id"];
                  $sql="DELETE from movie_time where movie_time_id='$movie_time_id'";
                  $query=mysqli_query($connection,$sql);
                  if ($query !=false) {
                    echo "<span class='success'>Delete successfully<span>";
                  }
                }
             ?>
            
            <table class="mytable">
              <tr>
                <th width="15%">Serial No.</th>
                <th width="20%">Movie Id</th>
                <th width="20%">Movie Name</th>
                <th width="20%">Movie_Time Id</th>
                <th width="50%">Action</th>
              </tr>

              <?php 
                  $sql="SELECT * FROM movie_time";
                  $query=mysqli_query($connection,$sql);
                  if ($query !=false) {
                    $i=1;
                    while ($value=mysqli_fetch_array($query)) {
                      $i++;
                  
               ?>
              
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $value["movie_id"] ?></td>
                <td><?php echo $value["timemovie"] ?></td>
                <td><?php echo $value["movie_time_id"] ?></td>
            
                <td>
                  <a href="editmovie_time.php?movie_time_id=<?php echo $value['movie_time_id'] ?>">Edit</a> ||
                  <a href="?movie_time_id=<?php echo $value['movie_time_id'] ?>" onclick="return confirm('Do you wnat to delete this ?')">Delete</a>
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





