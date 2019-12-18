
<?php 

   include_once "connection/conn.php";

   $path=realpath(dirname(__FILE__));
  
 ?>


<?php include_once "file/header.php"; ?>
  <section class="contentsection clear">
     <?php include_once "file/sidebar.php"; ?>
    <article class="maincontent clear">
      <div class="content">
            <h2>Update Date</h2>

            <?php 
                if (isset($_GET["date_id"]) and $_GET["date_id"] !=NULL) {
                  $date_id=preg_replace("/[^a-zA-Z0-9]/", "", $_GET["date_id"]);
                 
                }else{
                  header("location:moviedatelist.php");
                }

             ?>

             <?php 

                if ($_SERVER["REQUEST_METHOD"]=="POST") {
                  $dname=$_POST["dname"];
                  if ($dname=="") {
                     echo "<span style='color:red'>no empty</span>";
                  }else{
                     $sql="UPDATE tbl_date set date_name='$dname' where date_id='$date_id'";
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
                    $sql="SELECT * FROM tbl_date where date_id='$date_id'";
                    $query=mysqli_query($connection,$sql);
                    if ($query !=false) {
                      while ($value=mysqli_fetch_array($query)) {
                 ?>
                <tr>
                    <td>Date Name</td>
                    <td><input type="date" name="dname" value="<?php echo $value['dname'] ?>"></td>
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





