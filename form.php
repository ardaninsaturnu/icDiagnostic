<?php

if(isset($_POST['name']) && isset($_POST['email'])) {

    $name = $_POST['con_name'];
    $email = $_POST['email'];
    $to = 'icdiagnostickit@gmail.com';
    $subject = "New Customer"

    $body = '<html>
                <body>
                    <h2> Feedback Customer </h2>
                    <hr>
                    <p>Name <br> '.$name.' </p>
                    <p>Email : <br> '.$email.' </p>
                </body>
            </html>;        
           '
 //headers

 $headers = "From : ".$name." <".$email.">\r\n";
 $headers = "Reply-To : ".$email."\r\n";
 $headers = "MIME-Version: 1.0\r\n";
 $headers = "Content-type: text/html; charset-utf-8";

 //send


 $send = mail($to, $subject, $body, $headers);
 
 if($send) {
     echo '<br>';
     echo 'Talebiniz Başarıyla Alınmıştır Teşekkürler..'
 } else {
     echo 'error'
 }
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
    <link rel="icon" href="assets\images\favicon.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

    <!-- CSS
        ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets\css\vendor\bootstrap.min.css">

    <!-- FontAwesome CSS -->
    -<link rel="stylesheet" href="assets\css\vendor\fontawesome-all.min.css">

    <!-- Slick slider CSS -->
    <link rel="stylesheet" href="assets\css\plugins\slick.min.css">

    <!-- justify CSS -->
    <link rel="stylesheet" href="assets\css\plugins\justify.css">

    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="assets\css\plugins\swiper.min.css">

    <!-- Odomete CSS -->
    <link rel="stylesheet" href="assets\css\plugins\odometer.min.css">

    <!-- animate-text CSS -->
    <link rel="stylesheet" href="assets\css\plugins\animate-text.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets\css\plugins\animate.min.css">

    <!-- Light gallery CSS -->
    <link rel="stylesheet" href="assets\css\plugins\lightgallery.min.css">



    <link rel="stylesheet" href="assets\css\revolution\rs6.css">


    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->
    
        <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
        <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
        
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets\css\style.css">

</head>


<body>


    <!--================= pre loader ===================-->

    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100 flex-column">
                <img src="./assets/images/favicon.png" alt="">
                
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
                            <a href="./index.html">
                                <img src="./assets/images/diagnostic-logo-s2.png" class="img-fluid" alt="">
                               
                            </a>
                        </div>


                        <!--================== navigation menu ===========================-->

                        <div class="header__navigation d-none d-xl-block">
                            <nav class="navigation-menu">
                                <ul>
                                    <li><a href="index.html"><span>ANASAYFA</span></a></li>
                                    <li><a href="./blogs.html"><span>BLOG</span></a></li>
                                    <li><a href="./products.html"><span>ÜRÜNLER</span></a></li>
                                    <li><a href="index.html#faq-section"><span>SSS</span></a></li>
                                </ul>
                            </nav>
                        </div>

                        


                        <!-- header actions -->
                        <div class="header__actions">
                            <div class="header__icons-wrapper" id="hidden-icon-wrapper">
                                
                               
                                <div class="header-button">
                                    <a href="./form.html" class="ht-btn ht-btn--outline">Ürün Talep Formu</a>
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
        <div class="contact-from-wrapper overflow-hidden section-space--ptb_120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-7 order-2 order-md-1  wow move-up">
                        <div class="section-title section-space--mb_60">
                            <h2 class="font-weight--bold mb-15">Ürün Talep Formu</h2>
                            <p>Ürün Talep Formunu Doldurduktan sonra ki 1 iş günü içerisinde dönüş yapılır.</p>
                        </div>

                        <div class="contact-from-wrapper ">
                            <form id="contact-form" action="https://formspree.io/mjvpbrzb" method="post" role="form">
                                <div class="contact-page-form">
                                    <div class="contact-input">
                                        <div class="contact-inner">
                                            <input class="form-control" name="con_name" type="text" placeholder="İsim Soyisim *">
                                        </div>
                                        <div class="contact-inner">
                                            <input class="form-control" name="con_email" type="email" placeholder="Email *">
                                        </div>
                                        <div class="contact-inner">
                                            <input class="form-control" name="con_phone" type="phone" placeholder="Telefon *">
                                        </div>
                                        <div class="contact-inner">
                                            <input class="form-control" name="con_company" type="company" placeholder="Şirket Adı *">
                                        </div>

                                    </div>
                                    <div class="contact-inner">
                                        <select name="select" id="selectBox" class="form-control">
                                            <option class="formOption" value="0" selected>Ürün Seçiniz</option>
                                            <option class="formOption" value="1">COVID-19 Hızlı Test</option>
                                            <option class="formOption"  value="2">Antibiotic Test Kit</option>
                                            <option class="formOption"  value="3">IC Diagnostic Kit</option>
                                            <option class="formOption"  value="4">Hamilelik Test Kiti</option>
                                        </select>
                                    </div>
                                    <div class="contact-inner contact-message">
                                        <textarea class="form-control" name="con_message" placeholder="Adet, Özel İstek vb."></textarea>
                                    </div>
                                    <div class="contact-submit-btn">
                                        <button type="submit" name="submit" class="ht-btn ht-btn-md btn">Talep Gönder</button>
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="col-lg-5  col-md-5 order-1 order-md-2 wow move-up">
                        <div class="peatures_image-wrap section-space--mb_40">
                            <div class="image">
                                <img class="img-fluid" src="assets/images/testkiti.png" alt="">
                            </div>
                        </div>
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
                            <li>58 Howard Street #2 San Francisco, CA 941</li>
                            <li><a href="#" class="hover-style-link">contact@aeroland.com</a></li>
                            <li><a href="#" class="hover-style-link">(+68)1221 09876</a></li>
                            <li><a href="#" class="hover-style-link hover-style-link--green">www.icdiagnostickit.com</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-widget justify-content-center">
                        <h6 class="footer-widget__title mb-20">Who we are</h6>
                        <ul class="footer-widget__list">
                            <li><a href="#" class="hover-style-link">About us</a></li>
                            <li><a href="#" class="hover-style-link">Before you go</a></li>
                            <li><a href="#" class="hover-style-link">Online check in</a></li>
                            <li><a href="#" class="hover-style-link">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-widget justify-content-center">
                        <h6 class="footer-widget__title mb-20">Quick links</h6>
                        <ul class="footer-widget__list">
                            <li><a href="#" class="hover-style-link">Pick up locations</a></li>
                            <li><a href="#" class="hover-style-link">Terms of Payment</a></li>
                            <li><a href="#" class="hover-style-link">Privacy Policy</a></li>
                            <li><a href="#" class="hover-style-link">Where to Find Us</a></li>
                        </ul>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="footer-copyright-area border-top section-space--ptb_30">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    
                        <span class="copyright-text">© 2020 Diagnostic. All Rights Reserved.</span>
                    
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
                       <li><a href="index.html">Landing</a></li>
                       <li>
                           <a href="#">Pages</a>
                       </li>
                       <li>
                           <a href="#">Elements</a>
                       </li>
                        
                   </ul>
                   <div class="header-button__mobile">
                       <a href="#" class="ht-btn ht-btn--outline">SATIN AL</a>
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