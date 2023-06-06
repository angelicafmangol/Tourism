<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Marinduque Gems - About Page</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php" class="active">Home</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Information</a>
                                <ul>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="history.php">History</a></li>
                                    <li><a href="creators.php">About Creators</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Municipality</a>
                                <ul>
                                    <li><a href="muni1.php">BOAC</a></li>
                                    <li><a href="muni2.php">MOGPOG</a></li>
                                    <li><a href="muni3.php">GASAN</a></li>
                                    <li><a href="muni4.php">STA. CRUZ</a></li>
                                    <li><a href="muni5.php">BUENAVISTA</a></li>
                                    <li><a href="muni6.php">TORRIJOS</a></li>
                                </ul>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-image">
                        <img src="assets/images/mv1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <br>
                        <br>
                        <h4>OUR MISSION &amp; VISION</h4>
                        <span>Our mission is to promote Marinduque as a premier tourism destination, encouraging exploration and appreciation of its natural resources, rich culture, and unique attractions. Through our website, we aim to provide comprehensive content that inspires responsible tourism practices and fosters a strong connection with the local community.</span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i><p>Discover Marinduque: Unveiling Treasures, Embracing Culture<i class="fa fa-quote-right"></i></p>
                        </div>
                        <p>Our vision is to be the top online platform for showcasing the wonders of Marinduque. We aspire to attract diverse visitors, promote sustainable tourism, and leave a lasting impact by preserving the region's natural and cultural treasures, contributing to the local community's growth and fostering visitor pride.</p>
   


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** About Area Ends ***** -->


 
    <!-- ***** Footer Start ***** -->
    <footer>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2023 Mangol&Abalos. All Rights Reserved. 
                        
                        <br>Template Credits:<a href="https://templatemo.com" target="_parent" title="free css templates"> TemplateMo</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- ***** Footer ends ***** -->

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>

</html>
