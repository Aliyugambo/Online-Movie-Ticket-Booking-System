
<?php 

   include_once "connection/conn.php";
 ?>


<?php include_once "file/header.php"; ?>
  <section class="contentsection clear">
     <?php include_once "file/sidebar.php"; ?>
    <article class="maincontent clear">
      <div class="content">
            <h2>Add Movie Times</h2>
            <?php 
                if ($_SERVER["REQUEST_METHOD"]=="POST") {
                  $movieid=$_POST["movieid"];
                  $time=$_POST["time"];
                    
                    if ($movieid=="" || $time=="" ) {
                      echo "not empty";
                    }else{
                    
                         $sql="SELECT * FROM movie_time where movie_id='$movieid'";
                         $query=mysqli_query($connection,$sql);
                         if ($query !=false) {
                           $total=mysqli_num_rows($query);
                          if ($total==0) {
                              $sql="INSERT INTO movie_time (movie_id,timemovie) VALUES('$movieid','$time')";
                          $query=mysqli_query($connection,$sql);
                          if ($query !=false) {
                            echo "INSERTED";
                          }else{
                            echo "dfdf",mysqli_error($connection);
                          }
                          }else{
                            echo "exit";
                          }
                         }
                       
                    }
                }

             ?>
            <form action="" method="post">
              <table>
                <tr>
                    <td>Movie Id</td>
                    <td>
                     
                     <select name="movieid">
                       <option value="">Selecy movie</option>
                       <?php 
                            $sql="SELECT * FROM tbl_movie";
                            $query=mysqli_query($connection,$sql);
                            if ($query !=false) {
                              while ($value=mysqli_fetch_array($query)) {
                        ?>
                       <option value="<?php echo $value['movie_id'] ?>"><?php echo $value["movie_name"] ?></option>
                       <?php }} ?>
                     </select>
                    </td>
                </tr>
                <tr>
                    <td>Movie Times</td>
                    <td><input type="time" name="time"/></td>
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





