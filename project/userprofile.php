<?php include_once "file/header.php"; ?>
  <section class="contentsection clear">
    <?php include_once "file/sidebar.php"; ?>
    <article class="maincontent clear">
      <div class="content">
        <h2>User Update</h2>
        <form action="" method="">
          <table>
            <tr>
                <td>UserName</td>
                <td><input type="text" name="username" placeholder="User Name" value="" /></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" placeholder="Email" value="" /></td>
            </tr>
            <tr>
                <td>PassWord</td>
                <td><input type="password" name="password" placeholder="Password" /></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" name="update" value="Update"/></td>
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





