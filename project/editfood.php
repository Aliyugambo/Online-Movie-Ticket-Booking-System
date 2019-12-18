
<?php 

   include_once "connection/conn.php";
 ?>


<?php include_once "file/header.php"; ?>
  <section class="contentsection clear">
     <?php include_once "file/sidebar.php"; ?>
    <article class="maincontent clear">
      <div class="content">
            <h2>Update food name & price & Image</h2>

              <?php 
                if (isset($_GET["food_id"]) and $_GET["food_id"] !=NULL) {
                  $food_id=preg_replace("/[^a-zA-Z0-9]/", "", $_GET["food_id"]);
                 
                }else{
                  header("location:foodlist.php");
                }

             ?>

               <?php 
                if ($_SERVER["REQUEST_METHOD"]=="POST") {
                  $fid=$_POST["fid"];
                  $fname=$_POST["fname"];
                  $image=$_POST["image"];
                  $price=$_POST["price"];
                  $fcategory=$_POST["fcategory"];


                  $image=basename($_FILES["image"]["name"]);
                  $target_file = "common/images/foods/$image";
                  move_uploaded_file($_FILES['image'], $target_file); 
                  
                   if ($fid=="" || $fname=="" || $image=="" || $price=="" || $fcategory=""){
                     echo "<span style='color:red'>no empty</span>";
                  }else{
                     $sql="UPDATE tbl_food set fid='$fid', fname='$fname', image='$image', price='$price', fcategory='$fcategory' where food_id='$food_id'";
                     $query=mysqli_query($connection,$sql);
                     if ($query !=false) {
                       echo "<span style='color:green'>update successfully</span>";
                     }else{
                       echo "<span style='color:green'>Error</span>";
                     }
                  }
                 
                }
              ?>

            <form action="" method="post" enctype="multipart/data-form">
              <table>

                <?php 
                    $sql="SELECT * FROM tbl_food where food_id='$food_id'";
                    $query=mysqli_query($connection,$sql);
                    if ($query !=false) {
                      while ($value=mysqli_fetch_array($query)) {
                 ?>

                <tr>
                    <td>Food Id</td>
                    <td><input type="text" name="fid" value="<?php echo $value['food_id'] ?>"/></td>
                </tr>
                <tr>
                    <td>Food Name</td>
                    <td><input type="text" name="fname" value="<?php echo $value['food_name'] ?>"/></td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td><input type="file" name="image" value="<?php echo $value['image'] ?>"/></td>
                </tr>
                <tr>
                    <td>Food Price</td>
                    <td><select name="price">
                       <option value="">Select Pricet</option>
                        <option value="100">100 TK</option>
                        <option value="150">150 TK</option>
                        <option value="200">200 TK</option>
                        <option value="80">80 TK</option>
                      </select>
                       <?php echo $value['price'] ?>
                    </td>
                  </tr>
                  <br>
                <tr>
                    <td>Food Category</td>
                    <td><input type="text" name="fcategory" value="<?php echo $value['food_category'] ?>"/></td>
                </tr>
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





