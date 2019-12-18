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
            <a class="navbar-brand" href="index.php">
               <i class="fa fa-home">&nbsp;</i>
            </a>
        </div>
        <div class="collapse navbar-collapse js-navbar-collapse nav-menu">
            <ul class="nav navbar-nav">
                <li class="menu-item text-center"><a href="showtimes.php" > Show Time</a></li>
                <li class="menu-item text-center"><a href='aboutus.php'>About</a></li>                
                <li class="menu-item text-center"><a href='contactus.php'>Contact</a></li>
                <li class="menu-item text-center"><a href='gallary.php'>Gallary</a></li>
                <li class="menu-item text-center"><a href='registrar.php'>Buy Ticket</a></li>
                <li class="menu-item text-center"><a href='seatavailable.php'>Seat Available</a></li>
                <li class="menu-item text-center"><a href='typesofseat.php'>Types Of Seat</a></li>
            </ul>  
        </div>
    </nav>
</div>

<!-- /container -->
<div class="container">
  <div class="row"> 
    <!--Start Left Bar-->
    <div class="no-hero-divider"></div>
    <div class="col-xs-12 col-sm-8 col-lg-8"> 
      <!-- Start About Star Cineplex-->
      <div class="row node">
        <div class="news col-md-12">
          <h2 class="title_page">Our Mission & Vission</h2>
          <p> A mission statement is a short statement of an organization's purpose, identifying the goal of its operations: what kind of product or service it provides, its primary customers or market, and its geographical region of operation.
           It may include a short statement of such fundamental matters as the organization's values or philosophies, a business's main competitive advantages, or a desired future state</p>
           <br>
          <p>Strategic planning is the process of developing company objectives, strategies and tactics to achieve the mission of the organization. The company generates short and long-term objectives using the mission statement. Objectives may include market-share targets, revenue or profit goals, customer satisfaction scores and improved brand awareness. Next, it develops strategies to accomplish objectives. For instance, better training and monitoring of feedback scores are strategies to achieve higher customer satisfaction. Actionable steps or tactics are then developed. Hiring an outside training consultant for a series of service training sessions is a tactic tied to the customer satisfaction goal and the training strategy.</p>
           <br>
          <p> Vision statements are sometimes confused or used synonymously with mission statements. However, vision statements should offer more of a direction and include a perspective of corporate values. A vision might provide a direction for the company for the next five to 10 years, while also noting a commitment to integrity, transparency, openness and other such values. In short, a vision statement takes your mission and adds an element of human values. It should inspire employees and given them a sense of purpose.</p>
          <h4><span class="glyphicon glyphicon-envelope"></span> Email</h4>
          <p><span>Customer Service:</span> <a href="mailto:customerservices@bd.com">customerservices@.com</a> </p>
          <p><span>General Information:</span> <a href="mailto:info@cineplexbd.com">info@.com</a></p>
        </div>
      </div>
      <!-- End About Star Cineplex--> 
    </div>

    <div class="col-xs-12 col-sm-4 col-lg-4"> 
      <div class="row">
        <h1 class="sideber">&nbsp &nbsp &nbsp  &nbsp &nbsp Other Eleiment</h1>
        <div class="col-xs-12">
          <div class="contentHead">Showing Desire Trailer</div>
          <div class="contentText">
            <div class="video-container">
              <iframe class="iframe-video" src="https://www.youtube.com/embed/6ZfuNTqbHE8" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End Left Bar--> 
    <!-- Start Right Sidebar-->
    <div class="col-xs-12 col-sm-4 col-lg-4">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mail-box side-module">
            <header>
              <h2>Mailing Address</h2>
            </header>
            <div class="body">
              <h3>On The Way</h3>
              <p>Level 10, Mohammdpur
                13/3 Mohammodpur,
                 Dhaka 1207</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End Right Sidebar--> 
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