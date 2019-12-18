
<?php session_start(); ?>

<?php 
      include_once "connection/conn.php";
 ?>

<!DOCTYPE html>
<html>
<title>Smart Movie Ticket Booking System</title>
<link href="common/css/common.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
<style type="text/css">
.bs-example {
	margin:10px;
}
body { 
  background: url("common/images/"); 
  background-position: center 0;
  backface-visibility: visible;
  background-color: #030202!important;
  background-repeat: no-repeat;
}
</style>
</head>
<body>
  <div class="container" style="margin-top:40px;">
             
  </div>    
 <script src="common/js/jquery.min.js"></script> 
<div class="container header-tops">
    <div class="col-md-2 col-sm-12 pull-left">
        <a href="index.html">
            <img src="common/images/logo.png" alt="Logo"/>
            
        </a>
    </div>
    <div class="col-md-6 col-sm-12 visible-lg t_align_r t_xs_align_c">
      <div class="search_box">
        <input type="text" placeholder="Search..." class="search_box_input">
        <button class="search_box_button">&#128269;</button>
     </div>
    </div>


</div>

<div class="container">
    <nav class="navbar navbar-inverse"  style="z-index:1000;">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
               <i class="fa fa-home">&nbsp;</i>
            </a>
        </div>
        <div class="collapse navbar-collapse js-navbar-collapse nav-menu">
            <ul class="nav navbar-nav">
                <li class="menu-item text-center"><a href="showtimes.php" > Show Time</a></li>
                <li class="menu-item text-center"><a href='aboutus.php'>About</a></li>                
                <li class="menu-item text-center"><a href='contactus.php'>Contact Us</a></li>
                <li class="menu-item text-center"><a href='gallary.php'>Gallary</a></li>
                <li class="menu-item text-center"><a href='registrar.php'>Buy Ticket</a></li>
                <li class="menu-item text-center"><a href='seatavailable.php'>Seat Available</a></li>
                <li class="menu-item text-center"><a href='typesofseats.php'>Types Of Seat</a></li>
            </ul>  
        </div>
    </nav>
</div>
<div class="container"  style="padding-left: 0px; padding-right: 0px;">
    <div data-ride="carousel" class="carousel slide" id="carousel-example-generic"  style="margin-top: -44px; float:left; width:100%;">
      <!-- Indicators -->
          <ol class="carousel-indicators">
              <li data-slide-to="0" data-target="#carousel-example-generic"></li>
              <li data-slide-to="1" data-target="#carousel-example-generic"></li>
              <li data-slide-to="2" data-target="#carousel-example-generic"></li>
              <li data-slide-to="3" data-target="#carousel-example-generic"></li>
              <li data-slide-to="4" data-target="#carousel-example-generic"></li>
              <li data-slide-to="5" data-target="#carousel-example-generic"></li>
          </ol>
      <!-- slides -->
      <div class="carousel-inner">
          <div class="item active">
             <img alt="Solo: A Star Wars Story (3D)" src="uploads/slider/mission_24.png">
            <div class="carousel-caption">
               <h2> Mission: Mission 24 Hours (3D)</h2>
            </div>
          </div>
          <div class="item ">
             <img alt="DeadPool 2" src="uploads/slider/avengers.png">
            <div class="carousel-caption">
               <h2> Avengers (3D)</h2>
            </div>
          </div>
          <div class="item ">
             <img alt="Avengers: Infinity War (3D)" src="uploads/slider/avengers-infinity-wa1.jpg">
            <div class="carousel-caption">
              <h2> Avengers: Infinity War (3D)</h2>
            </div>
          </div>
          <div class="item ">
              <img alt="Renegades" src="uploads/slider/Renegades-1.jpg">
            <div class="carousel-caption">
              <h2> Renegades</h2>
            </div>
          </div>
          <div class="item ">
              <img alt="Rampage" src="uploads/slider/rampage.jpg">
            <div class="carousel-caption">
              <h2> Rampage</h2>
            </div>
          </div>
          <div class="item ">
             <img alt="Swapnajaal" src="uploads/slider/swapnajaal_bangla_movie1.jpg">
            <div class="carousel-caption">
              <h2> Swapnajaal</h2>
            </div>
          </div>
      </div>
    </div>

</div> 
<!--container -->
<div class="container">
  <div class="row" style="overflow: hidden;"> 
    <!--Left Bar-->
    <div class=".col-xs-12 col-sm-8 col-lg-8 " style="overflow: hidden;"> 
      <!--Tab Section--> 
      <div class="row">
        <div class=".col-md-12 col-md-12" style="overflow: hidden;">
          <div class="tabs home-hero" style="overflow: hidden;">
            <ul class="nav nav-tabs etabs" >
              <li class="active"><a data-toggle="tab" href="#sectionA">Now Showing</a></li>
              <li><a data-toggle="tab" href="seattypes.php">Ticket Price</a></li>
              <li><a data-toggle="tab" href="#sectionB">Buy Ticket</a></li>
              <li><a data-toggle="tab" href="#sectionC">Coming Soon</a></li>

            </ul>
             <ul class="nav nav-tabs etabs" >
              <li><a data-toggle="tab" href="mission_vission.php">Mission & Vission</li></a>
              <li><a data-toggle="tab" href="showtimes.php">Time Schedule</a></li>
              <li><a data-toggle="tab" href="seatavailabe.php">Seat Available</a></li>
              <li><a data-toggle="tab" href="seattypes.php">Types Of Seat</a></li>
            </ul>
           
            <div class="tab-content body" style="overflow: hidden;"> 
              <!--Showing Tab-->
              <div id="sectionA" class="tab-pane fade in active">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="carousel slide" id="myCarouselA">
                      <div class="carousel-inner">
                            <div class="item active">
                                <ul class="thumbnails">   

                                  <?php 

                                    $sql="SELECT * FROM tbl_movie order by movie_id desc";
                                    $query=mysqli_query($connection,$sql);
                                    if ($query !=false) {
                                      while ($value=mysqli_fetch_array($query)) {
                                        
                                   
                                   ?>
                                      <li class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-bt">
                                        <div class="thumbnail">
                                          <a href="cineplexbd/showtimedetails/175/1010.html">
                                            <img class="img-responsive" src="<?php echo $value['image'] ?>" alt="Rampage">
                                          </a>
                                        </div>
                                        <div class="caption">
                                          <a href="cineplexbd/showtimedetails/175/1010.html">
                                           <h4><?php echo $value["movie_name"]; ?></h4>
                                          </a>
                                          <a class="btn btn-primary btn-xs" href="showtimes.php">Showtime& Movie Details
                                          </a>
                                        </div>
                                      </li>
                                      <?php }} ?>
                                </ul>
                            </div>
                            <div class="item ">
                                <ul class="thumbnails">
                                      <li class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-bt">
                                        <div class="thumbnail">
                                          <a href="cineplexbd/showtimedetails/172/1007.html">
                                            <img class="img-responsive" src="uploads/movie_gallery/portrait/swanpajaal.jpg" alt="Swapnajaal">
                                          </a>
                                        </div>
                                        <div class="caption">
                                          <a href="cineplexbd/showtimedetails/172/1007.html">
                                            <h4>Swapnajaal</h4>
                                          </a>
                                          <a class="btn btn-primary btn-xs" href="showtimes.php">Showtime & Movie Details
                                          </a>
                                        </div>
                                      </li>
                                  </ul>
                            </div>
                      </div>
                      <div class="control-box"> <a data-slide="prev" href="#myCarouselA" class="carousel-control left">‹</a> <a data-slide="next" href="#myCarouselA" class="carousel-control right">›</a> </div>
                      <!-- /.control-box --> 
                    </div>
                    <!-- /#myCarousel --> 
                  </div>
                </div>
              </div>
              <!--End Showing Tab--> 
              <!--Buy Ticket Tab-->
              <div id="sectionB" class="tab-pane fade" style="overflow: hidden;">
                <div class="row">
                  <div class="col-md-12">
                   <!-- <img style="padding: 10px;" alt=""> -->
                    <div class="order col-md-6"> 
                      <img class="order__images" src="common/images/tickets.png" alt="Ticket Purchase">
                      <p class="order__title">Purchase a ticket <br>
                        <span class="order__descript">through bkash number</span></p>
                      <div class="order__control"><a class="btn btn-primary btn-sm" href="registrar.php" target="_blank">Buy Now</a> </div>
                    </div>
                    <div class="order col-md-6"> 
                      <img class="order__images" src="common/images/tickets.png" alt="Ticket Purchase">
                      <p class="order__title">Purchase a ticket <br>
                        <span class="order__descript">through dbbl number</span></p>
                      <div class="order__control"><a class="btn btn-primary btn-sm" href="registrar.php" target="_blank">Buy Now</a> </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--End Buy Ticket Tab--> 
              <!--Start Coming soon Tab-->
              <div id="sectionC" class="tab-pane fade" style="overflow: hidden;">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="carousel slide" id="myCarousel">
                      <div class="carousel-inner">
                            <div class="item active">
                                <ul class="thumbnails">
                                    <li class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-bt">
                                        <div class="thumbnail"> <a href="cineplexbd/comingsoondetails/106.html"><img class="img-responsive" src="uploads/movie_gallery/portrait/aaa.jpg" alt=" The Darkest Minds"></a> 
                                        </div>
                                        <div class="caption"> <a href="cineplexbd/comingsoondetails/106.html">
                                          <h4> The Darkest Minds</h4>
                                          </a> <a class="btn btn-primary btn-xs" href="showtimes.php">Movie Details</a> 
                                        </div>
                                    </li>
                                    <li class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-bt">
                                        <div class="thumbnail"> <a href="cineplexbd/comingsoondetails/105.html"><img class="img-responsive" src="uploads/movie_gallery/portrait/ccc.jpg" alt="Christopher Robin"></a> 
                                        </div>
                                        <div class="caption"> <a href="cineplexbd/comingsoondetails/105.html">
                                          <h4>Christopher Robin</h4>
                                          </a> <a class="btn btn-primary btn-xs" href="showtimes.php">Movie Details</a> 
                                        </div>
                                      </li>
                                      <li class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-bt">
                                        <div class="thumbnail"> <a href="cineplexbd/comingsoondetails/104.html"><img class="img-responsive" src="uploads/movie_gallery/portrait/eee.jpg" alt="The Equalizer 2"></a> 
                                        </div>
                                        <div class="caption"> <a href="cineplexbd/comingsoondetails/104.html">
                                          <h4>The Equalizer 2</h4>
                                          </a> <a class="btn btn-primary btn-xs" href="showtimes.php">Movie Details</a> 
                                        </div>
                                      </li>
                                      <li class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-bt">
                                        <div class="thumbnail"> <a href="cineplexbd/comingsoondetails/103.html"><img class="img-responsive" src="uploads/movie_gallery/portrait/33.jpg" alt="Skyscraper"></a></div>
                                        <div class="caption"> <a href="cineplexbd/comingsoondetails/103.html">
                                          <h4>Skyscraper</h4>
                                          </a> <a class="btn btn-primary btn-xs" href="showtimes.php">Movie Details</a> 
                                        </div>
                                      </li>
                                </ul>
                            </div>
                            <div class="item " style="overflow: hidden;">
                                <ul class="thumbnails">
                                      <li class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-bt">
                                        <div class="thumbnail"> <a href="cineplexbd/comingsoondetails/102.html"><img class="img-responsive" src="uploads/movie_gallery/portrait/ant.jpg" alt="Ant-Man and the Wasp"></a> 
                                        </div>
                                        <div class="caption"> <a href="cineplexbd/comingsoondetails/102.html">
                                          <h4>Ant-Man and the Wasp</h4>
                                          </a> <a class="btn btn-primary btn-xs" href="showtimes.php">Movie Details</a> 
                                        </div>
                                      </li>
                                      <li class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-bt">
                                        <div class="thumbnail"> <a href="cineplexbd/comingsoondetails/101.html"><img class="img-responsive" src="uploads/movie_gallery/portrait/ju.jpg" alt="Jurassic World: Fallen Kingdom"></a> 
                                        </div>
                                        <div class="caption"> <a href="cineplexbd/comingsoondetails/101.html">
                                          <h4>Jurassic World: Fallen Kingdom</h4>
                                          </a> <a class="btn btn-primary btn-xs" href="showtimes.php">Movie Details</a> 
                                        </div>
                                      </li>
                                      <li class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-bt">
                                        <div class="thumbnail"> <a href="cineplexbd/comingsoondetails/99.html"><img class="img-responsive" src="uploads/movie_gallery/portrait/pred1_.jpg" alt="The Predator"></a> 
                                        </div>
                                        <div class="caption"> <a href="cineplexbd/comingsoondetails/99.html">
                                          <h4>The Predator</h4>
                                          </a> <a class="btn btn-primary btn-xs" href="showtimes.php">Movie Details</a> 
                                        </div>
                                      </li>
                                      <li class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-bt">
                                        <div class="thumbnail"> <a href="cineplexbd/comingsoondetails/98.html"><img class="img-responsive" src="uploads/movie_gallery/portrait/alita1_.jpg" alt="Alita: Battle Angel"></a> 
                                        </div>
                                        <div class="caption"> <a href="cineplexbd/comingsoondetails/98.html">
                                          <h4>Alita: Battle Angel</h4>
                                          </a> <a class="btn btn-primary btn-xs" href="showtimes.php">Movie Details</a> 
                                        </div>
                                      </li>
                                </ul>
                            </div>
                            <div class="item " style="overflow: hidden;">
                                <ul class="thumbnails">
                                      <li class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-bt">
                                        <div class="thumbnail"> <a href="cineplexbd/comingsoondetails/97.html"><img class="img-responsive" src="uploads/movie_gallery/portrait/MV5BINCREDABLE_2.jpg" alt="Incredibles 2"></a> 
                                        </div>
                                        <div class="caption"> <a href="cineplexbd/comingsoondetails/97.html">
                                          <h4>Incredibles 2</h4>
                                          </a> <a class="btn btn-primary btn-xs" href="showtimes.php">Movie Details</a> 
                                        </div>
                                      </li>
                                      <li class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-bt">
                                        <div class="thumbnail"> <a href="cineplexbd/comingsoondetails/89.html"><img class="img-responsive" src="uploads/movie_gallery/portrait/551.jpg" alt="Alpha"></a></div>
                                        <div class="caption"> <a href="cineplexbd/comingsoondetails/89.html">
                                          <h4>Alpha</h4>
                                          </a> <a class="btn btn-primary btn-xs" href="showtimes.php">Movie Details</a> 
                                        </div>
                                      </li>
                                      <li class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-bt">
                                        <div class="thumbnail"> <a href="cineplexbd/comingsoondetails/83.html"><img class="img-responsive" src="uploads/movie_gallery/portrait/solo.jpg" alt="Solo: A Star Wars Story"></a> 
                                        </div>
                                        <div class="caption"> <a href="cineplexbd/comingsoondetails/83.html">
                                          <h4>Solo: A Star Wars Story</h4>
                                          </a> <a class="btn btn-primary btn-xs" href="showtimes.php">Movie Details</a> 
                                        </div>
                                      </li>
                                      <li class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-bt">
                                        <div class="thumbnail"> <a href="cineplexbd/comingsoondetails/65.html"><img class="img-responsive" src="uploads/movie_gallery/portrait/s_1.jpg" alt="The Snowman"></a> 
                                        </div>
                                        <div class="caption"> <a href="cineplexbd/comingsoondetails/65.html">
                                          <h4>The Snowman</h4>
                                          </a> <a class="btn btn-primary btn-xs" href="showtimes.php">Movie Details</a> 
                                        </div>
                                      </li>
                                </ul>
                    </div>
                            <div class="item " style="overflow: hidden;">
                                <ul class="thumbnails">
                                      <li class="col-lg-3 col-md-3 col-sm-3 col-xs-12 padding-bt">
                                        <div class="thumbnail"> <a href="cineplexbd/comingsoondetails/54.html"><img class="img-responsive" src="uploads/movie_gallery/portrait/pola.jpg" alt="Polaroid"></a> </div>
                                        <div class="caption"> <a href="cineplexbd/comingsoondetails/54.html">
                                          <h4>Polaroid</h4>
                                          </a> <a class="btn btn-primary btn-xs" href="showtimes.php">Movie Details</a> 
                                        </div>
                                      </li>
                                </ul>
                            </div>
                      </div>
                      <div class="control-box"> <a data-slide="prev" href="#myCarousel" class="carousel-control left">‹</a> <a data-slide="next" href="#myCarousel" class="carousel-control right">›</a> </div>
                      <!-- /.control-box --> 
                    </div>
                    <!-- /#myCarousel --> 
                  </div>
                </div>
              </div>
              <!--End Coming Soon Tab--> 
              <!--Start Music Tab-->
              <div id="sectionD" class="tab-pane fade" style="overflow: hidden;">
                <div class="row">
                  <div class="col-md-12">
                   <a target="_blank" href="http://music.cineplexbd.com/"><img style="padding: 10px;" src="common/images/order-banner.jpg" alt="Music">
                  </a></div>
                </div>
              </div>
              <!--End Music Tab--> 
            </div>
          </div>
        </div>
      </div>
      <!--End Tab Section--> 
      <!-- Start Movie News-->
      <div class="row node" style="overflow: hidden;">
        <div class="col-md-12 alpha omega">
          <h2 class="title_page">News</h2>
          <div class="col-md-12" style=" background:#131315;">
            <div class="col-md-6 col-sm-6" style="padding:10px;"><a class="offer" href="showtimes.php"><img style="width:634px;height:250px;" src="uploads/gossip_news/looper.png" alt="Gossip and News Photo">
              </a>
            </div>
            <div class="col-md-6 col-sm-6" style="padding:10px;"><a class="offer" href="showtimes.php"><img style="width:634px;height:250px;" src="uploads/gossip_news/deadpool2.png" alt="Gossip and News Photo">
              </a>
            </div>
            <div class="col-md-6 col-sm-6" style="padding:10px;"><a class="offer" href="showtimes.php"><img style="width:634px;height:250px;" src="uploads/gossip_news/scap.png" alt="News Photo">
              </a>
            </div>
            <div class="col-md-6 col-sm-6" style="padding:10px;"><a class="offer" href="showtimes.php"><img style="width:634px;height:250px;" src="uploads/gossip_news/rampage1.png" alt="Gossip and News Photo">
              </a>
            </div>               
          </div>
        </div>
        <!--Paging-->
        <div class="clearfix"></div>
        <!--Start Cine Buzz-->
        <div class="col-lg-12">
        <!-- <span class="issue-tx">(1 2)</span>-->
          <h2 class="title_page">Cinebuzz</h2>
          <a href="typesofseats.php" target="_blank"><img class="img-thumbnail" src="uploads/rampage.png" alt="cinebuzz"></a> 
        </div>
        <!--End CineBuzz--> 
        <!--Start Soft Drinks Logo-->
        <div class="col-lg-12 padding-bt">
          <h2 class="title_page">Soft Drinks</h2>
          <div class="row ">
            <div class="col-xs-6 col-md-3"><a href="food.php"><img class="thumbnail" src="uploads/partnerlogo/pepssi.png" alt="Pepsi"></a>
            </div>
            <div class="col-xs-6 col-md-3"><a href="food.php"><img class="thumbnail" src="uploads/partnerlogo/sprit.png" alt="Pepsi"></a>
            </div>
            <div class="col-xs-6 col-md-3"><a href="food.php"><img class="thumbnail" src="uploads/partnerlogo/cokee.png" alt="Independent"></a>
              </div>
          </div>
        </div>
        <!--End Soft Drinks Logo--> 
      </div>
    </div>
    <div class="col-xs-12 col-sm-4 col-lg-4"> 
      <div class="row">
        <h1 class="sideber">&nbsp &nbsp &nbsp  &nbsp &nbsp Other Element</h1>
        <div class="col-xs-12">
          <div class="contentHead">Showing Desire Trailer</div>
          <div class="contentText">
            <div class="video-container">
              <iframe class="iframe-video" src="https://www.youtube.com/embed/6Q7vVt-MeXk" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
      </div>
      <div class="row row_padding_top" style="overflow: hidden;">
        <div class="col-xs-12">
          <div class="contentHead">Notice which daya Hall Is Open</div>
          <div class="contentText" style="padding:10px;text-align:justify;">
            <div class="">
              <div class="row">
                <div class="col-md-12">Cinema Hall is open seven days a week including Tuesdays.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row row_padding_top" style="overflow: hidden;">
        <div class="col-xs-12">
          <div class="contentHead">On The Way</div>
          <div class="contentText">
            <div class="video-container">
              <iframe class="iframe-video" src="https://www.youtube.com/embed/t9QePUT-Yt8" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
      </div>
      <div class="row row_padding_top" style="overflow: hidden;">
        <div class="col-xs-12">
          <div class="contentHead">Please Rating Mark</div>
          <div class="contentText">
          <form id="poll_form" action="http://www.cineplexbd.com/cineplexbd/vote_poll/11" method="post">
            <section class="recipientcase">
              <h3>Do you deasire rate the movie&nbsp; Avengers: Infinity War</h3>
            </section>
            <div class="bs-example">
              <label class="radio-inline">
                <input type="radio" value="3" name="vote">
                Good </label>
              <label class="radio-inline">
                <input type="radio"  value="2" name="vote">
                Average </label>
              <label class="radio-inline">
                <input type="radio" value="1" name="vote">
                Excellent </label>
            </div>
            <div class="bs-example">
              <input id="pollSelect" type="submit" class="btn btn-primary btn-sm" name="btn" value="Submit">
            </div>
          </form>
            <div id="response">
                <p style='color:#375493;font-weight:bold;text-align:center;'>For vote this movie please select an option.</p>
            </div>            
          </div>
        </div>
      </div>
      <div class="row row_padding_top">
        <div class="col-xs-12">
          <div class="contentHead">One The Way</div>
          <div class="contentText">
            <div class="video-container">
              <iframe class="iframe-video" src="https://www.youtube.com/embed/ATpJBunjGJg" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
      </div>
      <div class="row row_padding_top">
        <div class="col-xs-12">
          <div class="contentHead">One The Way</div>
          <div class="contentText">
            <div class="video-container">
              <iframe class="iframe-video" src="https://www.youtube.com/embed/wb49-oV0F78" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End Right Sidebar--> 
  </div>
</div>
<div class="modal fade" id="dailyModal" tabindex="-1" role="dialog" aria-labelledby="dailyModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width: 600px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="dailyModalLabel">SUPER OFFER</h4>
<!-- <p>This is Bootstrap Modal popup example.</p> -->
      </div>
      <div class="modal-body">
        <a href="javascript:void(0)" target="_blank"><img class="img-responsive" src="common/images/xXx_return_of_xander_cage__with_gp_offer.jpg" alt="SUPER OFFER"></a>
      </div>
      <!-- end modal-body -->
      <div class="modal-footer remove-top">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <div class="footer-v1 ">
    <div class="footer footer-v1--section">
      <div class="container" style="background:none;">
        <div class="row"> 
          <!-- About -->
          <div class="col-md-3 col-sm-6 column-one md-margin-bottom-50 md-padding-top-40 md-padding-bottom-40">
                        <a href="index.html"><img src="common/images/footer-cineplex-logo.png" alt="Cineplex footer"/></a> 
                        <p class="margin-bottom-20"></p>
                        <span>Contact Us:</span>
                        <p><strong>Not going to see</strong> <br/>
            		Level 5, Mohammadpur <br />
                        15/9 Brazil, Brazil, Dhaka<br />
                        Dhaka 1205, Bangladesh. </p>
                        <hr>
                       <!-- <span>Mobile:</span>
                        <p>(+88) 01755665544 </p>
                          <hr>-->
                        <span>Phone:</span>
                        <p>+8801723093965, 658765678 </p>
                        <p>+8801634189911, 45646465</p>
                        <hr>
                        <span>Email Address:</span>
                        <a href="mailto:info@cineplexbd.com"> info@.com</a>
                    </div>
          <!-- End About --> 
          <!-- More at Cineplex -->
          <div class="col-md-3 md-margin-bottom-40 md-padding-top-40 md-padding-bottom-40">
            <div class="headline">
              <h2>Some Features</h2>
            </div>
            <ul class="list-unstyled link-list">
              <li><a href="javascript:void(0)">Contact Us</a><i class="fa fa-angle-right"></i></li>
              <li><a href="javascript:void(0)">Movie</a><i class="fa fa-angle-right"></i></li>
              <li><a href="javascript:void(0)">Movie</a><i class="fa fa-angle-right"></i></li>
            </ul>
          </div>
          <!--/col-md-3--> 
          <!-- End More at Cineplex --> 
          <!-- Theatre Information -->
          <div class="col-md-3 md-margin-bottom-40 md-padding-top-40 md-padding-bottom-40"> 
          <div class="headline">
              <h2>Movie & Food Information</h2>
            </div>
            <ul class="list-unstyled link-list">
              <li><a href="javascript:void(0)">Find a Movie</a><i class="fa fa-angle-right"></i></li>
              <li><a href="javascript:void(0)">Food and Drink</a><i class="fa fa-angle-right"></i></li>
              <li><a href="javascript:void(0)">Information</a><i class="fa fa-angle-right"></i></li>
            </ul>
          </div>
          <!--/col-md-3--> 
          <!-- End Theatre Information --> 
          <!-- Link Corporate Information-->
          <div class="col-md-3 md-margin-bottom-40 md-padding-top-40 md-padding-bottom-40">
            <div class="headline">
              <h2>Corporate Information</h2>
            </div>
            <ul class="list-unstyled link-list">
              <li><a href="javascript:void(0)">Corporate Sales & Rentals</a><i class="fa fa-angle-right"></i></li>
              <li><a href="javascript:void(0)">Corporate Information</a><i class="fa fa-angle-right"></i></li>
              <li><a href="javascript:void(0)">Press Room</a><i class="fa fa-angle-right"></i></li>
            </ul>
          </div>
          <!--/col-md-3--> 
          <!-- End Corporate Information --> 
        </div>
      </div>
    </div>
    <!--/footer-->
    <div class="copyright footer-v1--section ">
      <div class="container" style="background:none;">
        <div class="row">
          <div class="col-md-6">
            <p> &copy; All Rights Reserved. | Develop by <a href="http://www.baseltd.com/" target="_blank">Arif Hossain</a></p>
          </div>
          <!-- Social Links -->
          <div class="col-md-6">
            <ul class="footer-socials list-inline">
              <li> <a href="https://www.facebook.com" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"> <i class="fa fa-facebook"></i> </a> </li>
              <li> <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype"> <i class="fa fa-skype"></i> </a> </li>
              <li> <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus"> <i class="fa fa-google-plus"></i> </a> </li>
              <li> <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin"> <i class="fa fa-linkedin"></i> </a> </li>
              <li> <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest"> <i class="fa fa-pinterest"></i> </a> </li>
              <li> <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"> <i class="fa fa-twitter"></i> </a> </li>
              <li> <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble"> <i class="fa fa-dribbble"></i> </a> </li>
            </ul>
          </div>
          <!-- End Social Links --> 
        </div>
      </div>
    </div>
    <!--/copyright--> 
  </div>
  <!--=== End Footer Version 1 ===--> 
<!-- Bootstrap core JavaScript--> 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="common/js/commonscript.min.js"></script> 
<script type="text/javascript">
	$(document).ready(function ($) {
		// delegate calls to data-toggle="lightbox" for Vedio Lightbox
		$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
			event.preventDefault();
			return $(this).ekkoLightbox({
				onShown: function() {
					if (window.console) {
						return console.log('Checking our the events huh?');
					}
				}
			});
		});
		//Programatically call
		$('#open-image').click(function (e) {
			e.preventDefault();
			$(this).ekkoLightbox();
		});
		$('#open-youtube').click(function (e) {
			e.preventDefault();
			$(this).ekkoLightbox();
		});
	});
	// Photo Lightbox
	$(document).ready(function(){
        $("[rel^='lightbox']").prettyPhoto();
    });
    $(function() {
	  $("#poll_form").on("submit",function(e){
	      e.preventDefault();
	      var postData = $(this).serializeArray();
	      var formURL = $(this).prop("action");
	      $.ajax({
	          url : formURL,
	          type: "POST",
	          data : postData,
	          success:function(data, textStatus, jqXHR) 
	          {
	            var obj = jQuery.parseJSON( data );
	           
	            $('#response').html( obj.request );//data: return data from server
	           
	          },
	          error: function(jqXHR, textStatus, errorThrown) 
	          {
	              console.log(textStatus);//if fails      
	          }
	      });
	  });
	});
</script> 
<script type="text/javascript">
	$(document).ready(function(){
	    $(".dropdown").hover(            
	        function() {
	            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
	            $(this).toggleClass('open');        
	        },
	        function() {
	            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
	            $(this).toggleClass('open');       
	        }
	    );
	});
</script>
<script type="text/javascript">
</script>
</html>