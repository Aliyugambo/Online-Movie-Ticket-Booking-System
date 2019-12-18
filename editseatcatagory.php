
<?php 

   include_once "connection/conn.php";
    $path=realpath(dirname(__FILE__));
 ?>


<?php include_once "file/header.php"; ?>
  <section class="contentsection clear">
     <?php include_once "file/sidebar.php"; ?>
    <article class="maincontent clear">
      <div class="content">
            <h2>Update Seat Types Catagory</h2>

            <?php 
                if (isset($_GET["seat_id"]) and $_GET["seat_id"] !=NULL) {
                  $seat_id=preg_replace("/[^a-zA-Z0-9]/", "", $_GET["seat_id"]);
                 
                }else{
                  header("location:seatcatagorylist.php");
                }

             ?>

             <?php 

                if ($_SERVER["REQUEST_METHOD"]=="POST") {
                   $types=$_POST["types"];
                   $price=$_POST["price"];
                  if ($types=="" || $price=="" ){
                     echo "<span style='color:red'>no empty</span>";
                  }else{
                     $sql="UPDATE seat set types='$types', price='$price' where seat_id='$seat_id'";
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
                    $sql="SELECT * FROM seat where seat_id='$seat_id'";
                    $query=mysqli_query($connection,$sql);
                    if ($query !=false) {
                      while ($value=mysqli_fetch_array($query)) {
                 ?>

                <tr>
                    <td>Seat type</td>
                    <td><select name="types">
                        <option value="">Select Seat type</option>
                        <option value="Gold">Gold</option>
                        <option value="Regular">Regular</option>
                        <option value="Silver">Silver</option>
                        <option value="Platinum">Platinum</option>
                        <option value="Vip">Vip</option>
                      </select>
                        <?php echo $value['types'] ?>
                    </td>

                    <td>Seat Price</td>
                    <td><select name="price">
                        <option value="">Select Amount</option>
                        <option value="400">400 TK</option>
                        <option value="450">450 TK</option>
                        <option value="500">500 TK</option>
                        <option value="600">600 TK</option>
                      </select>
                      <?php echo $value['price'] ?>
                    </td>
                     <br>
                </tr>
                 <br>
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





