<?php session_start(); ?>

<?php 

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
             <?php 
    echo $_SESSION["email"];


  ?>
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
            <a class="navbar-brand" href="index.html">
               <i class="fa fa-home">&nbsp;</i>
            </a>
        </div>
        <div class="collapse navbar-collapse js-navbar-collapse nav-menu">
            <ul class="nav navbar-nav">
                <li class="menu-item text-center"><a href="showtimes.php" > Show Time</a></li>
                <li class="menu-item text-center"><a href='about.php'>About</a></li>                
                <li class="menu-item text-center"><a href='contactus.php'>Contact</a></li>
                <li class="menu-item text-center"><a href='gallary.php'>Gallary</a></li>
                <li class="menu-item text-center"><a href='#'>Buy Ticket</a></li>
                <li class="menu-item text-center"><a href='#'>Seat Available</a></li>
                <li class="menu-item text-center"><a href='typesofseat.php'>Types Of Seat</a></li>
            </ul>  
        </div>
    </nav>
</div>

<!-- /container -->
<div class="container">

  <div class="row "> 
  <div class="no-hero-divider"></div>
    <div class="col-md-12">
    <!--Movie Details Panel-->
      <div class="panel panel-default">
      <div class="panel-head">
        <h2>Looper</h2>
      </div>
      <div class="panel-body">
        <div class="col-lg-7 padding-clear">
          <div class="col-lg-3 col-sm-3 col-xs-12 padding-clear"><img class="img-thumbnail" src="common/images/looper.png">
          </div>
          <div class="col-lg-9 col-sm-9 synop">
            <div class="col-lg-12" >
              <h3>Best English Movie</h3>
              <h4 class="synop-details">EVERY CHARACTER IN DEADPOOL 2. He's back, and he's got a few new friends.</h4>
            </div>
            <div class="col-lg-12" > <a href="https://www.youtube.com/embed/pej_AzLtFu0" data-toggle="lightbox" data-gallery="youtubevideos" class=" btn btn-default btn-sm"  title="Avengers: Age of Ultron" >See The Trailer</a> </div>
          </div>
        </div>
        <br>
        <div class="col-lg-5">
          <div class="col-lg-6">
            <div class="movie__btns"> <a id="buy_ticket" class="btn btn-md btn--warning"  href="registrar.php">Buy ticket</a> </div>
          </div>
          <div class="clearfix"></div>
          <table class="details_table table-striped" style="margin-top:40px;">
            <tbody>
              <tr>
                <td width="30%" class="border_left">Director :</td>
                <td width="70%" class="border_right">Elias Khan</td>
              </tr>
              <tr>
                <td class="border_left">Release Date :</td>
                <td class="border_right">10-05-18</td>
              </tr>
              <tr>
                <td class="border_left">Running Time :</td>
                <td class="border_right">140 Min</td>
              </tr>
              <tr>
                <td class="border_left">Genre : </td>
                <td class="border_right">Action Movie</td>
              </tr>
              <tr>
                <td class="border_left">Cast :</td>
                <td class="border_right">Tom cruse,Hellary Duff</td>
              </tr>
            </tbody>
          </table>
          <!--Show Time-->
          
        </div>
      </div>
      </div>
  </div>
    <!--End Movie Details Panel--> 
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
</html>