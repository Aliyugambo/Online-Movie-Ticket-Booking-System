
<?php 

   include_once "connection/conn.php";
    $path=realpath(dirname(__FILE__));
  
 ?>


<?php include_once "file/header.php"; ?>
  <section class="contentsection clear">
     <?php include_once "file/sidebar.php"; ?>
    <article class="maincontent clear">
      <div class="content">
            <h2>Update Movie Times</h2>
           <?php 
                if (isset($_GET["movie_time_id"]) and $_GET["movie_time_id"] !=NULL) {
                  $movie_time_id=preg_replace("/[^a-zA-Z0-9]/", "", $_GET["movie_time_id"]);
                 
                }else{
                  header("location:movie_timelist.php");
                }

            ?>

            <?php 
                if ($_SERVER["REQUEST_METHOD"]=="POST") {
                  $movieid=$_POST["movieid"];
                  $time=$_POST["time"];
                  
                   if ($movieid=="" || $time==""){
                     echo "<span style='color:red'>no empty</span>";
                  }else{
                     $sql="UPDATE movie_time set movie_id='$movieid', timemovie='$time' where movie_time_id='$movie_time_id'";
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
                    $sql="SELECT * FROM movie_time where movie_time_id='$movie_time_id'";
                    $query=mysqli_query($connection,$sql);
                    if ($query !=false) {
                      while ($value=mysqli_fetch_array($query)) {
                 ?>


                <tr>
                    <td>Movie Id</td>
                    <td><input type="text" name="movieid" placeholder="Movie id" value="<?php echo $value['movie_id'] ?>"/></td>
                </tr>
                <tr>
                    <td>Movie Times</td>
                    <td><input type="text" name="time" placeholder="Movie Times" value="<?php echo $value['timemovie'] ?>"/></td>
                </tr>
                <tr>
                  <td></td>
                  <td><input type="submit" name="submit" value="Update"/></td>
                </tr>
              </table>
               <?php }} ?>
            </form>
    </div>
    </article>
  </section>
   <?php include_once "file/footer.php"; ?>
</div>
</body>
</html>





