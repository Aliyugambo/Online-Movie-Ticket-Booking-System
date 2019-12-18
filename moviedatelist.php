
<?php 

   include_once "connection/conn.php";
 ?>


<?php include_once "file/header.php"; ?>
  <section class="contentsection clear">
    <?php include_once "file/sidebar.php"; ?>
    <article class="maincontent clear">
      <div class="content">
        <div class="catagoryoption">
            <h2>movie category list</h2>
            <?php 
                if (isset($_GET["date_id"])) {
                  $date_id=$_GET["date_id"];
                  $sql="DELETE from tbl_date where date_id='$date_id'";
                  $query=mysqli_query($connection,$sql);
                  if ($query !=false) {
                    echo "<span class='success'>Delete successfully<span>";
                  }
                }
             ?>
            <table class="mytable">
              <tr>
                <th width="20%">Serial NO.</th>
                <th width="50%">Date Name</th>
                <th width="20%">Action</th>
              </tr>
              <?php 
                  $sql="SELECT * FROM tbl_date";
                  $query=mysqli_query($connection,$sql);
                  if ($query !=false) {
                    $i=1;
                    while ($value=mysqli_fetch_array($query)) {
                      $i++;
                  
               ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $value["date_name"]; ?></td>
                <td>
                  <a href="editdate.php?date_id=<?php echo $value['date_id'] ?>">Edit</a> ||
                  <a href="?date_id=<?php echo $value['date_id'] ?>" onclick="return confirm('Do you wnat to delete this ?')">Delete</a>
                </td>

            </tr>
            <?php }} ?>
            </table>
    </div>
    </div>
    </article>
  </section>
   <?php include_once "file/footer.php"; ?>
</div>
</body>
</html>





