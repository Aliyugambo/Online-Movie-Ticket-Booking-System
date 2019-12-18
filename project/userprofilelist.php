
<?php 

   include_once "connection/conn.php";
 ?>


<?php include_once "file/header.php"; ?>
  <section class="contentsection clear">
    <?php include_once "file/sidebar.php"; ?>
    <article class="maincontent clear">
      <div class="content">
        <div class="catagoryoption">
            <h2>User Profile List</h2>
            
            <table class="mytable">
              <tr>
                <th width="10%">Serial NO.</th>
                <th width="35%">Name</th>
                 <th width="35%">Email</th>
                <th width="30%">Action</th>
              </tr>
              
              <tr>
                <td>01.</td>
                <td>Arif hossain</td>
                <td>Arif@gmail.com</td>
                <td>
                  <a href="editcategor.php?category_id=#">Edit</a> ||
                  <a href="#">Delete</a>
                </td>

            </tr>
            </table>
    </div>
    </div>
    </article>
  </section>
   <?php include_once "file/footer.php"; ?>
</div>
</body>
</html>





