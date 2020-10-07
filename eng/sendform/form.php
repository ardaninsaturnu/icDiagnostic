<?php

session_start();

if(isset($_SESSION["alert"])) {

    $alert = $_SESSION["alert"];

}

?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IC Diagnostic Kit </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/images/logo/apple-icon-57x57.png">
     <link rel="apple-touch-icon" sizes="60x60" href="../assets/images/logo/apple-icon-60x60.png">
     <link rel="apple-touch-icon" sizes="72x72" href="../assets/images/logo/apple-icon-72x72.png">
     <link rel="apple-touch-icon" sizes="76x76" href="../assets/images/logo/apple-icon-76x76.png">
     <link rel="apple-touch-icon" sizes="114x114" href="../assets/images/logo/apple-icon-114x114.png">
     <link rel="apple-touch-icon" sizes="120x120" href="../assets/images/logo/apple-icon-120x120.png">
     <link rel="apple-touch-icon" sizes="144x144" href="../assets/images/logo/apple-icon-144x144.png">
     <link rel="apple-touch-icon" sizes="152x152" href="../assets/images/logo/apple-icon-152x152.png">
     <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/logo/apple-icon-180x180.png">
     <link rel="icon" type="image/png" sizes="192x192"  href="../assets/images/logo/android-icon-192x192.png">
     <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/logo/favicon-32x32.png">
     <link rel="icon" type="image/png" sizes="96x96" href="../assets/images/logo/favicon-96x96.png">
     <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logo/favicon-16x16.png">
     <link rel="manifest" href="/manifest.json">
     <meta name="msapplication-TileColor" content="#ffffff">
     <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
     <meta name="theme-color" content="#ffffff">

    <!-- CSS
        ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets\css\vendor\bootstrap.min.css">

    <!-- FontAwesome CSS -->
    -<link rel="stylesheet" href="../assets\css\vendor\fontawesome-all.min.css">

    <!-- Slick slider CSS -->
    <link rel="stylesheet" href="../assets\css\plugins\slick.min.css">

    <!-- justify CSS -->
    <link rel="stylesheet" href="../assets\css\plugins\justify.css">

    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="../assets\css\plugins\swiper.min.css">

    <!-- Odomete CSS -->
    <link rel="stylesheet" href="../assets\css\plugins\odometer.min.css">

    <!-- animate-text CSS -->
    <link rel="stylesheet" href="../assets\css\plugins\animate-text.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="../assets\css\plugins\animate.min.css">

    <!-- Light gallery CSS -->
    <link rel="stylesheet" href="../assets\css\plugins\lightgallery.min.css">



    <link rel="stylesheet" href="../assets\css\revolution\rs6.css">


    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->
    
        <link rel="stylesheet" href="../assets/css/vendor/vendor.min.css">
        <link rel="stylesheet" href="../assets/css/plugins/plugins.min.css">
        
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <script src="//code.jivosite.com/widget/dnb3Yed10F" async></script>

</head>


<body>


    <!--================= pre loader ===================-->

    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100 flex-column">
                <img src="../assets/images/favicon.png" alt="">
                
                </div>
                
            </div>
        </div>
    </div>

       <!--====================  header area ====================-->

       <div class="mobile-header">
        <div class="header__logo_mobile">
            <a href="./index.html">
                <img src="./assets/images/diagnostic-logo-s2.png" class="img-fluid" alt="">
               
            </a>
        </div>
        <!-- mobile menu -->
        <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger">
            <i></i>
        </div>
    </div>
    <div class="header-area header-sticky header-area--absolute">
        <div class="container-fluid container-fluid--cp-150">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header position-relative">

                        <!-- brand logo -->

                        <div class="header__logo">
                            <a href="../index.html">
                            <img src="../assets/images/logo/MEDİCAL-logo.svg" class="img-fluid" alt="">
                               
                            </a>
                        </div>


                        <!--================== navigation menu ===========================-->

                        <div class="header__navigation d-none d-xl-block">
                            <nav class="navigation-menu">
                                <ul>

                                    <li><a href="../index.html"><span>HOME</span></a></li>
                                    <li class="aboutDropdown">
                                        <a href="../aboutus.html"><span>COMPANY</span></a>
                                        <ul class="aboutusdropdown">
                                            <li><a href="">Certifications</a></li>
                                            <li><a href="">About Us</a></li>
                                        </ul>
                                    
                                    </li>
                                    <li><a href="../blogs.html"><span>BLOG</span></a></li>
                                    <li><a href="../products.html"><span>PRODUCTS</span></a></li>
                                    <li><a href="../index.html#faq-section"><span>FAQ</span></a></li>

                                </ul>
                            </nav>
                        </div>

                        


                        <!-- header actions -->
                        <div class="header__actions">
                            <div class="header__icons-wrapper" id="hidden-icon-wrapper">
                                
                            <div class="language-button">
                                    <a href="../../sendform/form.php">TR</a> / <a href="#">ENG</a>
                                </div>
                               
                                <div class="header-button">
                                    <a href="./form.php" class="ht-btn ht-btn--outline">Product Request</a>
                                </div>
                            </div>
                            <!-- mobile menu -->
                            
                            <!-- hidden icons menu -->


                            <div class="hidden-icons-menu d-block d-md-none" id="hidden-icon-trigger">
                                <a href="javascript:void(0)">
                                    <i class="far fa-ellipsis-h-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of header area  ====================-->





    <div class="site-wrapper-reveal">
        <!--========== Newsletter Section Start ============-->
        <div class="container form-container">
        
            <div class="row">
                <div class="col-md-6">
    
                <?php if(isset($alert)){ ?>

                    <div class="alert alert-<?php echo $alert["type"]?>" role="alert">
    
                     <?php echo $alert["message"]; ?> 

                    </div>

                    <?php unset($_SESSION["alert"]); ?>

                    <?php } ?>  


                    <h1 style="font-size: 2.2rem; margin:1rem 0;">Product Request Form</h1>
                    <p style="margin-bottom: 1rem;">Complete This Form We ll return back quickly.</p>
    
                       
                    <form action="send_email.php" method="POST">
    
                    
    
                        <div class="form-group">
                            <label for="name">Name and Lastname : </label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
    
                        <div class="form-group">
                            <label for="email">E-mail : </label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
    
                        <div class="form-group">
                            <label for="phone">Phone : </label>
                            <input type="number" class="form-control" name="phone" required>
                        </div>

                        <div class="form-group form-groups">
                            <label for="product">
                                Product :
                                <select name="product" id="product" class="form-control" required>
                                    <option value="0">Ürün Seçiniz</option>
                                    <option value="1">Multi Drugs Diagnostic Kit</option>
                                    <option value="2">COVID-19 Diagnostic Kit</option>
                                    <option value="3">Hepatit anti-HBs Diagnostic Kit</option>
                                </select>
                            </label>
                            <label for="count">
                                Amount :
                                <input type="number" class="form-control"
                                name="count" placeholder="Adet Giriniz" required>
                            </label>
                        </div>
    
                        <div class="form-group">
                            <label for="message">Message :</label>
                            <textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
                        </div>
    
                        <button type="submit" class="btn btn-primary">Send</button>
                        
                        
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="form-img-container">
                    <img src="./assets/images/testkiti.png" alt="">
                    </div>
                    
                </div>
            </div>
        </div>
        <!--========== Newsletter Section End ============-->

    </div>

    <!--====================  footer area ====================-->
    <div class="footer-area-wrapper reveal-footer">
        <div class="footer-area section-space--ptb_90">
            <div class="container">
                <div class="row footer-widget-wrapper">
                    <div class="col-lg-4 col-md-6 footer-widget">
                        <div class="footer-widget__logo mb-30">
                            <img src="assets/images/logofooter.png" class="img-fluid" alt="">
                        </div>
                        <ul class="footer-widget__list">
                            <li>İncilipınar Mah. 36016 No'lu Cad. No1/A Şehitkamil/GAZİANTEP  TURKEY</li>
                            <li><a href="mailto:icdiagnostickit@gmail.com" class="hover-style-link">contact@icdiagnostickit.com</a></li>
                            <li><a href="#" class="hover-style-link hover-style-link--green">www.icdiagnostickit.com</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-widget justify-content-center">
                        <h6 class="footer-widget__title mb-20">Who We Are ?</h6>
                        <ul class="footer-widget__list">
                            <li><a href="./aboutus.html" class="hover-style-link">About Us</a></li>
                            <li><a href="#" class="hover-style-link">Frequently Asked Questions</a></li>
                            <li><a href="./sendform/form.php" class="hover-style-link">Product Request</a></li>
                            <li><a href="./blogs.html" class="hover-style-link">Blog</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-widget justify-content-center">
                        <h6 class="footer-widget__title mb-20">Links</h6>
                        <ul class="footer-widget__list">
                            <li><a href="./products.html" class="hover-style-link">Inspect Product</a></li>
                            <li><a href="#" class="hover-style-link">Coronavirüs Antichor Test Kit</a></li>
                            <li><a href="#" class="hover-style-link">Certifications</a></li>
                            
                        </ul>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="footer-copyright-area border-top section-space--ptb_30">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    
                        <span class="copyright-text">© 2020 IC Diagnostic Kit. All Rights Reserved.</span>
                    
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of footer area  ====================-->



     <!--====================  mobile menu overlay ====================-->

    <div class="mobile-menu-overlay" id="mobile-menu-overlay">
       <div class="mobile-menu-overlay__inner">
           <div class="mobile-menu-overlay__header">
               <div class="container-fluid">
                   <div class="row align-items-center">
                       <div class="col-md-6 col-8">
                           <!-- logo -->
                           <div class="logo">
                               <a href="index.html">
                                   <img src="./assets/images/diagnostic-logo-s2.png" class="img-fluid" alt="">
                               </a>
                           </div>
                       </div>
                       <div class="col-md-6 col-4">
                           <!-- mobile menu content -->
                           <div class="mobile-menu-content text-right">
                               <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="mobile-menu-overlay__body">
               <nav class="offcanvas-navigation">
                   <ul>
                  <li><a href="../index.html">ANASAYFA</a></li>
                   <li><a href="../aboutus.html"><span>KURUMSAL</span></a></li>
                                    <li><a href="../blogs.html"><span>BLOG</span></a></li>
                                    <li><a href="../products.html"><span>ÜRÜNLER</span></a></li>
                                    <li><a href="../index.html#faq-section"><span>SSS</span></a></li>
                        
                   </ul>
                   <div class="header-button__mobile">
                       <a href="form.php" class="ht-btn ht-btn--outline">Ürün Talep Formu</a>
                   </div>   
               </nav>
           </div>
       </div>
   </div>
   <!--====================  End of mobile menu overlay  ====================-->


    <!-- JS
    ============================================ -->
    <!--
     Modernizer JS 
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>-->

    <!-- jQuery JS -->
    <script src="assets\js\vendor\jquery-3.3.1.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets\js\vendor\bootstrap.min.js"></script>

    <!-- Popper JS -->
    <script src="assets\js\vendor\popper.min.js"></script>

    <!-- Swiper Slider JS -->
    <script src="assets\js\plugins\swiper.min.js"></script>

    <!-- Tippy JS -->
    <script src="assets\js\plugins\tippy.min.js"></script>

    <!-- Light gallery JS -->
    <script src="assets\js\plugins\lightgallery.min.js"></script>

    <!-- Light gallery video JS -->
    <script src="assets\js\plugins\lg-video.min.js"></script>

    <!-- Waypoints JS -->
    <script src="assets\js\plugins\waypoints.min.js"></script>

    <!-- Counter down JS -->
    <script src="assets\js\plugins\countdown.min.js"></script>

    <!-- Counter down JS -->
    <script src="assets\js\plugins\odometer.min.js"></script>

    <!-- Isotope JS -->
    <script src="assets\js\plugins\isotope.min.js"></script>

    <!-- Masonry JS -->
    <script src="assets\js\plugins\masonry.min.js"></script>

    <!-- ImagesLoaded JS -->
    <script src="assets\js\plugins\images-loaded.min.js"></script>

    <!-- Appear JS -->
    <script src="assets\js\plugins\appear.min.js"></script>

    <!-- TweenMax JS -->
    <script src="assets\js\plugins\TweenMax.min.js"></script>

    <!-- Wavify JS -->
    <script src="assets\js\plugins\wavify.js"></script>

    <!-- jQuery Wavify JS -->
    <script src="assets\js\plugins\jquery.wavify.js"></script>

    <!-- circle progress JS -->
    <script src="assets\js\plugins\circle-progress.min.js"></script>

    <!-- counterup JS -->
    <script src="assets\js\plugins\counterup.min.js"></script>

    <!-- instafeed JS -->
    <script src="assets\js\plugins\instafeed.min.js"></script>

    <!-- wow JS -->
    <script src="assets\js\plugins\wow.min.js"></script>

    <!-- time circles JS -->
    <script src="assets\js\plugins\time-circles.js"></script>

    <!-- animation text JS -->
    <script src="assets\js\plugins\animation-text.min.js"></script>

    <!-- one page nav JS -->
    <script src="assets\js\plugins\one-page-nav.min.js"></script>

    <!-- Mailchimp JS -->
    <script src="assets\js\plugins\mailchimp-ajax-submit.min.js"></script>

    <!-- test JS -->
    <script src="assets\js\plugins\test.js"></script>




    <!-- Revolution JS -->
    <script src="assets\js\revolution\revolution.tools.min.js"></script>
    <script src="assets\js\revolution\rs6.min.js"></script>
    <script src="assets\js\revolution.js"></script>

    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

    <!--
    <script src="assets/js/plugins/plugins.min.js"></script>
    -->

    <!-- Main JS -->
    <script src="assets\js\main.js"></script>


</body>

</html>