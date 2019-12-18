<?php include_once "file/header.php"; ?>
  <section class="contentsection clear">
    <?php include_once "file/sidebar.php"; ?>
    <article class="maincontent clear">
      <div class="content">
        <h2>User Update</h2>
        <form action="" method="post">
          <table>
            <tr>
                <td>First Name</td>
                <td><input type="text" name="fname" placeholder="First Name" value="" /></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="lname" placeholder="Last Name" value="" /></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" placeholder="Email" value="" /></td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td><input type="number" name="pnumber" placeholder="Phone Number" /></td>
            </tr>
            <tr>
                    <td>Select Gender</td>
                    <td><select name="gender">
                        <option value="">Select Gender</option>
                        <option value="Gold">Male</option>
                        <option value="Regular">Female</option>
                        <option value="Silver">Other</option>
                      </select>
                    </td>
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





