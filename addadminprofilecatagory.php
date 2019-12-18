
<?php 

   include_once "connection/conn.php";
 ?>

<?php include_once "file/header.php"; ?>
  <section class="contentsection clear">
    <?php include_once "file/sidebar.php"; ?>
    <article class="maincontent clear">
      <div class="content">
        <h2>Add Admin Profile Catagory</h2>
    

        <?php 
                if ($_SERVER["REQUEST_METHOD"]=="POST") {
                  $name=$_POST["name"];
                  $email=$_POST["email"];
                  $password=$_POST["password"];
                  

                   if (empty($name) || empty($email) || empty($password)) {
                    echo "Nothing empty";
                  }else{
                    $sql="SELECT * FROM admin where name='$name'";
                    $query=mysqli_query($connection,$sql);
                     $row=mysqli_num_rows($query);

                       if ($row<1) {
                         $sql="INSERT INTO admin (name,email,password) VALUES('$name','$email','$password');";
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
                <td>Admin Name</td>
                <td><input type="text" name="name" placeholder="Admin Name" /></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" placeholder="Email" /></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" placeholder="Password"  /></td>
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