
<?php 

   include_once "connection/conn.php";
 ?>


<?php include_once "file/header.php"; ?>
  <section class="contentsection clear">
     <?php include_once "file/sidebar.php"; ?>
    <article class="maincontent clear">
      <div class="content">
            <h2>Add food name & price & Image</h2>
            <?php 
                if ($_SERVER["REQUEST_METHOD"]=="POST") {
                  $fid=$_POST["fid"];
                  $fname=$_POST["fname"];
                  $image=$_POST["image"];
                  $price=$_POST["price"];
                  $fcategory=$_POST["fcategory"];

                   $image = basename($_FILES['image']['name']);
                   $target_file = "common/images/$image";
                   move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

                  if (empty($fname) || empty($image) || empty($price) || empty($fcategory)) {
                  echo "Nothing empty";
                  }else{
                    $sql="SELECT * FROM tbl_food where food_name='$fname'";
                    $query=mysqli_query($connection,$sql);
                     $row=mysqli_num_rows($query);

                       if ($row<1) {
                         $sql="INSERT INTO tbl_food (food_id,food_name,image,price,foot_category) VALUES('$fid',$fname','$image','$price','$fcategory');";
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
            <form action="" method="post" enctype="multipart/form-data">
              <table>
                <tr>
                    <td>Food id</td>
                    <td><input type="text" name="fid" placeholder="Food id"/></td>
                </tr>
                <tr>
                    <td>Food Name</td>
                    <td><input type="text" name="fname" placeholder="Food Name"/></td>
                </tr>
                <tr>
                    <td>Food Image</td>
                    <td><input type="file" name="image"/></td>
                </tr>
                <tr>
                    <td>Food Price</td>
                    <td><select name="price">
                       <option value="">Select Pricet</option>
                        <option value="400">300 TK</option>
                        <option value="450">400 TK</option>
                        <option value="500">500 TK</option>
                        <option value="600">100 TK</option>
                      </select>
                    </td>
                  </tr>
                  <br>
                <tr>
                    <td>Food Category</td>
                    <td><input type="text" name="fcategory" placeholder="Food Catagory"/></td>
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





