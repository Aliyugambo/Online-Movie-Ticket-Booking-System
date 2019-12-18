
<?php 

   include_once "connection/conn.php";

   $path=realpath(dirname(__FILE__));
  
 ?>

<?php include_once "file/header.php"; ?>
  <section class="contentsection clear">
    <?php include_once "file/sidebar.php"; ?>
    <article class="maincontent clear">
      <div class="content">
        <h2>Update Admin</h2>
    
        <?php 
                if (isset($_GET["admin_id"]) and $_GET["admin_id"] !=NULL) {
                  $admin_id=preg_replace("/[^a-zA-Z0-9]/", "", $_GET["admin_id"]);
                 
                }else{
                  header("location:adminprofilelist.php");
                }

        ?>

        <?php 
                if ($_SERVER["REQUEST_METHOD"]=="POST") {
                  $name=$_POST["name"];
                  $email=$_POST["email"];
                  $password=$_POST["password"];
                  
                   if ($name=="" || $email=="" || $password==""){
                     echo "<span style='color:red'>no empty</span>";
                  }else{
                     $sql="UPDATE admin set name='$name', email='$email', password='$password' where admin_id='$admin_id'";
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
                    $sql="SELECT * FROM admin where admin_id='$admin_id'";
                    $query=mysqli_query($connection,$sql);
                    if ($query !=false) {
                      while ($value=mysqli_fetch_array($query)) {
                 ?>

            <tr>
                <td>Admin Name</td>
                <td><input type="text" name="name" value="<?php echo $value['name'] ?>" /></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value="<?php echo $value['email'] ?>" /></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" value="<?php echo $value['password'] ?>"  /></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" name="submit" value="Add"/></td>
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





