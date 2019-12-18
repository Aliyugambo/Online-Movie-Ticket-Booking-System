
<?php 

   include_once "connection/conn.php";

   $path=realpath(dirname(__FILE__));
  
 ?>


<?php include_once "file/header.php"; ?>
  <section class="contentsection clear">
  <?php include_once "file/sidebar.php"; ?>
    <article class="maincontent clear">
      <div class="content">
            <h2>Update Package Category</h2>
            <?php 
                if (isset($_GET["package_id"]) and $_GET["package_id"] !=NULL) {
                  $package_id=preg_replace("/[^a-zA-Z0-9]/", "", $_GET["package_id"]);
                 
                }else{
                  header("location:seatpackagelist.php");
                }

             ?>

             <?php 

                if ($_SERVER["REQUEST_METHOD"]=="POST") {
                  $pname=$_POST["pname"];
                  $price=$_POST["price"];
                  $seat_package=$_POST["seat_package"];
                  $discount=$_POST["discount"];

                  if ($pname=="") {
                     echo "<span style='color:red'>no empty</span>";
                  }else{
                     $sql="UPDATE tbl_package set package_name='$pname', price='$price', seat_package='$seat_package', discount='$discount' where package_id='$package_id'";
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
                    $sql="SELECT * FROM tbl_package where package_id='$package_id'";
                    $query=mysqli_query($connection,$sql);
                    if ($query !=false) {
                      while ($value=mysqli_fetch_array($query)) {
                 ?>
                <tr>
                    <td>Package Name</td>
                    <td><input type="text" name="pname" placeholder="Package Name" value="<?php echo $value['package_name'] ?>" /></td>
                </tr>

                <tr>
                    <td>Seat Price</td>
                    <td><select name="price">
                       <option value="">Select Price</option>
                       <option value="700">700 TK</option>
                       <option value="650">650 TK</option>
                       <option value="600">600 TK</option>
                       <option value="650">650 TK</option>
                       <option value="500">500 TK</option>
                     </select>
                      <?php echo $value['price'] ?>
                </tr>
                 <tr>
                    <td>Seat Package</td>
                    <td><select name="seat_package">
                       <option value="">Select Seat Category</option>
                        <option value="Regular">Regular</option>
                        <option value="Gold">Gold</option>
                        <option value="Silver">Silver</option>
                        <option value="Premium">Premium</option>
                        <option value="Platinum">Platinum</option>
                      </select>
                       <?php echo $value['seat_package'] ?>
                    </td>
                  </tr>
                
                  <tr>
                    <td>Seat Package Disccount</td>
                    <td><select name="discount">
                       <option value="">Select Discount</option>
                        <option value="5">5 %</option>
                        <option value="4">4 %</option>
                        <option value="3">3 %</option>
                        <option value="2">2 %</option>
                        <option value="0">0 %</option>
                      </select>
                       <?php echo $value['discount'] ?>
                    </td>
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





