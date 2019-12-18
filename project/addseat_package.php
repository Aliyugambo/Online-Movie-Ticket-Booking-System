
<?php 

   include_once "connection/conn.php";
 ?>


<?php include_once "file/header.php"; ?>
  <section class="contentsection clear">
     <?php include_once "file/sidebar.php"; ?>
    <article class="maincontent clear">
      <div class="content">
            <h2>Add package name & price & seat category and discount</h2>
            <?php 
                if ($_SERVER["REQUEST_METHOD"]=="POST") {
                  $pname=$_POST["pname"];
                  $seat_package=$_POST["seat_package"];
                  $price=$_POST["price"];
                  $discount=$_POST["discount"];


                  if ( empty($pname) || empty($seat_package) || empty($price) || empty($discount)) {
                  echo "Nothing empty";
                  }else{
                    $sql="SELECT * FROM tbl_package where package_name='$pname'";
                    $query=mysqli_query($connection,$sql);
                     $row=mysqli_num_rows($query);

                       if ($row<1) {
                         $sql="INSERT INTO tbl_package (package_name,price,seat_package,discount) VALUES('$pname','$price','$seat_package','$discount');";
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
            <form action="" method="post">
              <table>
                <tr>
                    <td>Package Name</td>
                    <td><input type="text" name="pname" placeholder="Package Name"/></td>
                </tr>
                 <tr>
                    <td>Seat Category</td>
                    <td><select name="seat_package">
                       <option value="">Select Seat Category</option>
                        <option value="Regular">Regular</option>
                        <option value="Gold">Gold</option>
                        <option value="Silver">Silver</option>
                        <option value="Premium">Premium</option>
                        <option value="Platinum">Platinum</option>
                      </select>
                    </td>
                  </tr>
                <tr>
                    <td>Seat Category Price</td>
                    <td><select name="price">
                       <option value="">Select Price</option>
                       <option value="700">700 TK</option>
                       <option value="650">650 TK</option>
                       <option value="600">600 TK</option>
                       <option value="650">650 TK</option>
                       <option value="500">500 TK</option>
                <tr>
                  <tr>
                    <td>Seat Category Disccount</td>
                    <td><select name="discount">
                       <option value="">Select Discount</option>
                        <option value="5">5 %</option>
                        <option value="4">4 %</option>
                        <option value="3">3 %</option>
                        <option value="2">2 %</option>
                        <option value="0">0 %</option>
                      </select>
                    </td>
                  </tr>
                  <br>
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





