
<?php include_once "file/header.php"; ?>
  <section class="contentsection clear">
    <?php include_once "file/sidebar.php"; ?>
    <article class="maincontent clear">
      <div class="content">
        <h2>Update Passwod</h2>
        <form action="" method="">
          <table>
            <tr>
                <td>Old Password</td>
                <td><input type="text" name="oldpass" placeholder="Old Password" value="" required="" /></td>
            </tr>
            <tr>
                <td>New Password</td>
                <td><input type="email" name="newpass" placeholder="New Password" value="" required="" /></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input type="password" name="password" placeholder="Confirm Password" required="" /></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" name="submit" value="Update"/></td>
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





