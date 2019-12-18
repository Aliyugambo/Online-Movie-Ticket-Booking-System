
<?php 

   include_once "connection/conn.php";
 ?>


<?php include_once "file/header.php"; ?>
  <section class="contentsection clear">
     <?php include_once "file/sidebar.php"; ?>
    <article class="maincontent clear">
      <div class="content">
            <h2>Add Movie</h2>
            <?php 
                if ($_SERVER["REQUEST_METHOD"]=="POST") {
                  $name=$_POST["name"];
                  if (empty($name)) {
                    echo "Movie Name Is Empty";
                  }else{
                    $sql="SELECT * FROM category where name='$name'";
                    $query=mysqli_query($connection,$sql);
                  
                     $row=mysqli_num_rows($query);
                       if ($row<1) {
                         $sql="INSERT INTO category (name) VALUES('$name');";
                         $query=mysqli_query($connection,$sql);
                            if ($query) {
                               echo "Movie Name Is Inserted";
                           }
                         }else{
                          echo "Not Inserted Yet";
                       }
                    
                  }
                }

             ?>
            <form action="" method="post">
              <table>
                <tr>
                    <td>Movie Name</td>
                    <td><input type="text" name="name" placeholder="Catagory"/></td>
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





