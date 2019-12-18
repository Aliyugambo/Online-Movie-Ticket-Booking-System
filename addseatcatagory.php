
<?php 

   include_once "connection/conn.php";
 ?>


<?php include_once "file/header.php"; ?>
  <section class="contentsection clear">
     <?php include_once "file/sidebar.php"; ?>
    <article class="maincontent clear">
      <div class="content">
            <h2>Add Seat Types Catagory</h2>

            <?php 
                if ($_SERVER["REQUEST_METHOD"]=="POST") {
                  $types=$_POST["types"];
                  $price=$_POST["price"];
                 
                  if (empty($types) || empty($price)) {
                    echo "Nothing empty";
                  }else{
                     $sql="SELECT * FROM seat where types='$types'";
                     $query=mysqli_query($connection,$sql);
                      $row=mysqli_num_rows($query);
                        if ($row<1) {
                          $sql="INSERT INTO seat (types,price) VALUES('$types','$price');";
                          $query=mysqli_query($connection,$sql);
                             if ($query) {
                                echo "info inserted";
                            }
                          }else{
                            echo "exit";
                          }
                    
                  }

                 
                }

             ?>
            
            <form action="" method="post">
              <table>

                <tr>
                    <td>Seat type</td>
                    <td><select name="types">
                        <option value="">Select Seat type</option>
                        <option value="Gold">Gold</option>
                        <option value="Regular">Regular</option>
                        <option value="Silver">Silver</option>
                        <option value="Platinum">Platinum</option>
                        <option value="Premium">Premium</option>
                      </select>
                    </td>

                    <td>Seat Price</td>
                    <td><select name="price">
                       <option value="">Select amount</option>
                        <option value="700">700 TK</option>
                        <option value="650">650 TK</option>
                        <option value="600">600 TK</option>
                        <option value="500">500 TK</option>
                      </select>
                    </td>
                     <br>
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





