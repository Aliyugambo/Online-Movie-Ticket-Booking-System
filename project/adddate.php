
<?php 

   include_once "connection/conn.php";
 ?>


<?php include_once "file/header.php"; ?>
  <section class="contentsection clear">
     <?php include_once "file/sidebar.php"; ?>
    <article class="maincontent clear">
      <div class="content">
            <h2>Add Date</h2>
            <?php 
                if ($_SERVER["REQUEST_METHOD"]=="POST") {
                  $dname=$_POST["dname"];
                  if (empty($dname)) {
                    echo "Date Is Empty";
                  }else{
                    $sql="SELECT * FROM tbl_date where date_name='$dname'";
                    $query=mysqli_query($connection,$sql);
                  
                     $row=mysqli_num_rows($query);
                       if ($row<1) {
                         $sql="INSERT INTO tbl_date (date_name) VALUES('$dname');";
                         $query=mysqli_query($connection,$sql);
                            if ($query) {
                               echo "Date Is Inserted";
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
                    <td>Date Name</td>
                    <td><input type="date" name="dname" placeholder="Date"/></td>
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





