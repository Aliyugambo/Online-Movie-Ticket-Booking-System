
<?php 

   include_once "connection/conn.php";
 ?>


<?php include_once "file/header.php"; ?>

<?php 
   $login=$_SESSION["login"];
   if ($login !=true) {
     header("location:login.php");
   }

 ?>

  <section class="contentsection clear">
     <?php include_once "file/sidebar.php"; ?>
    <article class="maincontent clear">
      <div class="content">
            <h2>Booking List</h2>
            <?php 

                  if (isset($_GET["book_id"] ) and isset($_GET["seat_id"])) {
                    $book_id=$_GET["book_id"];
                    $seat_id=$_GET['seat_id'];
                   
                   $sql="DELETE from book where book_id='$book_id'";
                    $query=mysqli_query($connection,$sql);
                    if ($query) {
                      $sql="UPDATE seat set status=0 where seat_id='$seat_id'";
                         $query=mysqli_query($connection,$sql);
                         if ($query) {
                           echo "Delete";
                         }
                    }

                  }

             ?>


              <?php 

                  if (isset($_GET["con_id"] )) {
                    $con_id=$_GET["con_id"];
                 
                 
                   
                      $sql="UPDATE book set status=1 where book_id='$con_id'";
                         $query=mysqli_query($connection,$sql);
                         if ($query) {
                           echo "Confirmed successfull";
                         }
                    }

             ?>

            <table>
              <tr>
                  <th width="5%">S.no</th>
                  <th width="10%">Seat</th>
                  <th width="15%">Package</th>
                  <th width="15%">Showdate</th>
                  <th width="10%">Showtime</th>
                  <th width="10%">price</th>
                  <th width="15%">phone</th>
                  <th width="15%">Movie</th>
                  <th width="20%">Action</th>
              </tr>
               <?php 
                $sql="SELECT book.*, seat.types from book inner join seat on book.seattype=seat.seat_id";
                $query=mysqli_query($connection,$sql);
                if ($query) {
                  $i=0;
                  while ($row=mysqli_fetch_array($query)) {
                  $i++;
               ?>  
              <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row["types"] ?></td>
                <td><?php echo $row["package"] ?></td>
                <td><?php echo $row["showdate"] ?></td>
                <td><?php echo $row["showtime"] ?></td>
                <td><?php echo $row["price"] ?></td>
                <td><?php echo $row["phone"] ?></td>
                <td><?php echo $row["mname"] ?></td>
                <td>
                  <a href="?book_id=<?php echo $row["book_id"] ?>&seat_id=<?php echo $row["seattype"] ?>" onclick="return confirm('Do you wnat to delete this ?')">Delate</a>
                  <?php 
                      if ($row["status"]=="0") {
                   ?>
                    <a href="?con_id=<?php echo $row['book_id'] ?>" style="color: red">Pandding</a>
                  <?php }else{ ?>
                    <span style="color: green">Confiemd</span>
                  <?php } ?>
                </td>
              </tr>
              <?php }} ?>
            </table>

    </div>
    </article>
  </section>
   <?php include_once "file/footer.php"; ?>
</div>
</body>
</html>





