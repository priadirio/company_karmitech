<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>PT Karmitech</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/KARMITECH-removebg-preview.png') }}" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/tiny-slider.css') }}">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/lineicons/font-css/LineIcons.css') }}">

    <!--====== Tailwind CSS ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/tailwindcss.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/detail.css') }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/pagedone@1.2.1/src/css/pagedone.css"/>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>
<style>
        @media screen and (min-width: 768px) and (max-width: 1560px) {
           .web_w, .proright {
                width: 100%;
            }
        }

        .main_01 {
            width: 100%;
            position: relative;
            margin: 0 auto;
            overflow: hidden;
        }
        .web_w {
            width: 100%;
            margin: 0 auto;
        }
        @media screen and (min-width: 768px) and (max-width: 1560px) {
            .cus_title {
                padding: 0 0 0 2%;
            }
        }
        .cus_title {
            background: #f6f7f2;
            height: 90px;
            line-height: 90px;
            padding: 0 0 0 4%;
            font-size: 30px;
        }
        .contactbox {
            width: 92%;
            margin: 0 auto;
            padding: 100px 0 50px 0;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
        .conright {
            width: 100%;
            font-size: 12px;
        }
        .ordertb {
            width: 100%;
        }
        .porderinput {
            height: 26px;
            line-height: 26px;
            padding: 0 3%;
            width: 94%;
            background: #f6f7f2;
            border: none;
        }
        .ordertb tr td {
            padding: 7px 0 7px 0;
            color: #000;
            font-size: 12px;
            vertical-align: top;
        }
        .order_sub {
            background: #dd6600;
            color: #fff;
            font-size: 18px;
            text-align: center;
            width: 169px;
            height: 36px;
            line-height: 36px;
            border: none;
        }
        .order_res {
            background: #f6f7f2;
            color: #999;
            font-size: 18px;
            text-align: center;
            width: 169px;
            height: 36px;
            line-height: 36px;
            border: none;
        }
        .pordertext {
            height: 78px;
            line-height: 150%;
            padding: 10px 3%;
            width: 94%;
            background: #f6f7f2;
            border: none;
        }
        .conleft h1, .conright h1 {
            font-size: 24px;
            font-weight: normal;
            padding: 0 0 50px 0;
        }
    </style>  
    
<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
   
   
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->
    
    <!--====== HEADER PART START ======-->


    <section class="header_area">
        <div class="navbar-area bg-white">
            <div class="container relative">
                <div class="row items-center">
                    <div class="w-full">
                        <nav class="flex items-center justify-between py-4 navbar navbar-expand-lg">
                            <a class="navbar-brand mr-5">
                                <img src="{{ asset('frontend/assets/images/KARMITECH-removebg-preview.png') }}" alt="Logo" width="125px" height="125px">
                            </a>
                            <button class="block navbar-toggler focus:outline-none lg:hidden" type="button" data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation" id="burger-navbar">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                
                            </button>
                          
                            <div class="absolute left-0 z-20 w-full px-5 py-3 duration-300 bg-white lg:w-auto navbar-collapse lg:block top-full mt-full lg:static lg:bg-transparent shadow lg:shadow-none" id="navbarOne">
                                <ul id="nav" class="items-center content-start mr-auto lg:justify-end navbar-nav lg:flex">
                                   
                                    
                                  
                                   
                                    <li class="nav-item ml-5 lg:ml-11">
                                    <div class="dropdown dropdown-hover product-hover" id="idProduct">
                                        <a class="fa fa-chevron-down"> Battery</a>
                                        <div class="dropdown-content">
                                            <a id="menu-battery" class="battery" href="/battery">Battery</a></br>
                                            <div class="sub-dropdown">
                                                <a href="#" class="sub-dropdown-toggle">Type</a>
                                                <div class="sub-dropdown-content">
                                                
                                                </div>
                                               
                                            </div>

                                            <a href="#">SmartPole</a></br>
                                            <a href="/solar">Solar Panel</a></br>
                                           
                                        </div>
                                         
                                    </div>
                                </li>

                                <li class="nav-item ml-5 lg:ml-11">
                                    <div class="dropdown dropdown-hover product-hover" id="idProduct">
                                        <a class="fa fa-chevron-down"> Solar Panel</a>
                                        <div class="dropdown-content">
                                            <a id="menu-battery" class="battery" href="/battery">Battery</a></br>
                                            <div class="sub-dropdown">
                                                <a href="#" class="sub-dropdown-toggle">Type</a>
                                                <div class="sub-dropdown-content">
                                                
                                                </div>
                                               
                                            </div>

                                        
                                           
                                        </div>
                                        
                                    </div>
                                </li>
                                
                                <li class="nav-item ml-5 lg:ml-11">
                                    <div class="dropdown dropdown-hover product-hover" id="idProduct">
                                        <a class="fa fa-chevron-down"> SmartPole</a>
                                        <div class="dropdown-content">
                                            <a id="menu-battery" class="battery" href="/battery">Battery</a></br>
                                            <div class="sub-dropdown">
                                                <a href="#" class="sub-dropdown-toggle">Type</a>
                                                <div class="sub-dropdown-content">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="test-product" class="testProduct" >
                                          <!-- Dynamic content will be injected here -->
                                        </div>
                                         
                                    </div>
                                </li>

                                <li class="nav-item ml-5 lg:ml-11">
                                    <div class="dropdown dropdown-hover product-hover" id="idProduct">
                                        <a class="fa fa-chevron-down">Application</a>
                                        <div class="dropdown-content">
                                        
                                            <div class="sub-dropdown">
                                                <a href="#" class="sub-dropdown-toggle">Type</a>
                                                <div class="sub-dropdown-content">
                                                </div>
                                            </div>
                                        </div>
                                         
                                    </div>
                                </li>
                                    <li class="nav-item ml-5 lg:ml-11">
                                        <a class="" href="/about">About Us</a>
                                    </li>

                                    <li class="nav-item ml-5 lg:ml-11">
                                        <a class="page-scroll" href="">News</a>
                                    </li>

                                    <li class="nav-item ml-5 lg:ml-11">
                                    <div class="dropdown dropdown-hover">

                                    
                                    <a class="fa fa-chevron-down"> Insight</a>
                                    <div class="dropdown-content">
                                    <a href="/gallery">Gallery</a></br>
                                    <a href="#">Article</a></br>

                                    </div>
                                    </li>
                                    <li class="nav-item ml-5 lg:ml-11">
                                        <a class="page-scroll" href="#contact">Contact Us</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            
                        </nav> <!-- navbar -->
                        <div class="testProduct" id="test-product" style="display: none; z-index:99; position: absolute; width: -webkit-fill-available;
                      top: 150px;
                            background-color: mintcream; ">
                            <center>test</center>

                            </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header navbar -->
    </section>

    <section  class="py-24">
        <div class="main_01 web_w " style="padding-top: 80px;">
        <div class="cus_title">Contact Us</div>
        <div class="contactbox">
            <div class="conright">
            <h1>Contact form</h1>	  <form name="xjform" action="ordersave.php" method="post">
            <table border="0" cellpadding="0" cellspacing="0" class="ordertb">
                <tbody><tr>
                    <td>Your name<sup>*</sup></td>
                    <td><input type="text" name="p_name" value="" class="porderinput"></td>
                </tr>
                <tr>
                    <td>Your e-mail address<sup>*</sup></td>
                    <td><input type="text" name="p_email" value="" class="porderinput"></td>
                </tr>
                <tr>
                    <td>Telephone</td>
                    <td><input type="text" name="p_tel" value="" class="porderinput"></td>
                </tr>
                <tr>
                    <td>Company</td>
                    <td><input type="text" name="p_company" value="" class="porderinput"></td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td><input type="text" name="p_add" value="" class="porderinput"></td>
                </tr>
                <tr>
                    <td>Subject<sup>*</sup></td>
                    <td><input type="text" name="p_protitle" value="" class="porderinput"></td>
                </tr>
                <tr>
                    <td>Message</td>
                    <td><textarea name="p_text" class="pordertext"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submitt" value="Submit" class="order_sub">
                        <input type="reset" name="resett" value="Reset" class="order_res">
                    </td>
                </tr>
            </tbody></table>
            </form>
            </div>
        </div>
    </section>
    <footer class="footer bg-gray-500 text-base-content p-10">
  <aside>
  <a href="https://karmitechindonesia.id/" class="flex items-center">
                  <img src="{{ asset('frontend/assets/images/logofooter.png') }}" width="150px" height="150px"/>
              </a>

  </aside>
  <nav>
    <h6 class="footer-title" style="color:#FFFF;">Contact</h6>
    
    <i class="fa fa-phone " style="color:#FFFFFF;"> <a style="color:#FFFF;" > (021)890992239</a></i>
    <i class="fa fa-envelope" style="color:#FFFFFF;"> <a style="color:#FFFF;" href="mailto:info@karmitechindonesia.id">info@karmitechindonesia.id</a></i>
  </nav>
  <nav>
  <h6 class="footer-title" style="color:#FFFF;">Head Office</h6>
  <a class="fa fa-map-marker dark:text-white" style="color:#FFFF;"> PT Karya Mitra Sejati</a>
    <a class="dark:text-white" style="color:#FFFF;">Gedung Bella Vista </a>
    <a class="dark:text-white" style="color:#FFFF;" >Jl. Raya Jati Makmur No.100, Jatimakmur,  </a>
    <a class="dark:text-white" style="color:#FFFF;" >Kec. Pondok Gede, Kota Bekasi, Jawa Barat 17413</a>
  </nav>

</footer>

    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    

    <!--====== BACK TOP TOP PART ENDS ======-->    

    <!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->




    <!--====== Tiny Slider js ======-->
    <script src="{{ asset('frontend/assets/js/tiny-slider.js') }}"></script>

    <!--====== Wow js ======-->
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/detail.js') }}"></script>

    <!--====== Main js ======-->
    
    
   
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/pagedone@1.2.1/src/js/pagedone.js"></script>

</body>

</html>