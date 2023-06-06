<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Marinduque Gemsssss</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <link rel="stylesheet" href="admin.css">


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
    
 //dini na yung simula
 //andini logo   
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <ul class="nav">

                
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
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

                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                        <header class="text-black">
                            <div class="container px-4 text-center">
                                <h1 class="fw-bolder">Marinduque Gems</h1>
                                <p class="lead">"Unveiling Hidden Treasures: Embrace the Journey of Exploration"</p>
                            </div>
                        </header>
                                <br>
                                <br>
                                <br>
                                <br>
                        <!-- ***** Menu End ***** -->


                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

                                <br>
                                <br>
                                <br>
                                <br>

    <!-- ***** Main Banner Area Start ***** -->
    
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">


                                <div class="main-border-button">
                                    
                                </div>
                            </div>
                            <img src="assets/images/homep.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">

                                        </div>
                                        <img src="assets/images/homep2.jpg">
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                        
                                        </div>
                                        <img src="assets/images/homep3.jpg">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="second-container">   
        <form method="GET" class="searchbar" >
            <input type="text" placeholder="search" name="search" required="required">
            <button type="submit" value="search"><img src="backgrounds/search3.png" alt="" ></button>
        </form>
    </div>
    <section>
    <?php
        if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $xml = simplexml_load_file('tourism.xml');
    $found = false;
    foreach ($xml->municipality as $municipality) {
        if (stripos($municipality->title, $search) !== false) {
            echo '<div class="municipality">';
            echo '<h3>' . $municipality->title . '</h3>';
            echo "<img src='images/{$municipality->image}' alt='History Image'>";
            echo '<p>' . $municipality->content . '</p>';
            echo '</div>';
            $found = true;
        }
    }
    if (!$found) {
        echo '<p>No results found.</p>';
    }
    // Display the search metadata
    echo '<p>Showing results for search: ' . $search . '</p>';
    
 }else {
        $xml = simplexml_load_file('tourism.xml');
        foreach ($xml->municipality as $municipality) {
            echo '<div class="municipality">';
            echo '<h3>' . $municipality->title . '</h3>';
            echo "<img src='images/{$municipality->image}' alt='History Image'>";
            echo '<p>' . $municipality->content . '</p>';
            echo '</div>';
        }
        }
        ?>

    </section>
    <!-- ***** Main Banner Area End ***** -->
    
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