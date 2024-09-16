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

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

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


    <div class="container-fluid p-0 pb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                
            </div>
        </div>
    </div>
</div>

<section class="header_area">
        <div class="navbar-area bg-white">
            <div class="container relative">
                <div class="row items-center">
                    <div class="w-full">
                        <nav class="flex items-center justify-between py-4 navbar navbar-expand-lg">
                            <a class="navbar-brand mr-5">
                                <img src="{{ asset('frontend/assets/images/KARMITECH-removebg-preview.png') }}" alt="Logo" width="125px" height="125px">
                            </a>
                            <button class="block navbar-toggler focus:outline-none lg:hidden" type="button" data-toggle="collapse" data-target="#navbarOne" aria-controls="navbarOne" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                
                            </button>
                          
                            <div class="absolute left-0 z-20 w-full px-5 py-3 duration-300 bg-white lg:w-auto navbar-collapse lg:block top-full mt-full lg:static lg:bg-transparent shadow lg:shadow-none" id="navbarOne">
                                <ul id="nav" class="items-center content-start mr-auto lg:justify-end navbar-nav lg:flex">
                                    <li class="nav-item ml-5 lg:ml-11">
                                        <a class="page-scroll" href="/">HOME</a>
                                    </li>
                                    <li class="nav-item ml-5 lg:ml-11">
                                        <a class="" href="/about">ABOUT US</a>
                                    </li>
                                    <li class="nav-item ml-5 lg:ml-11">
                                        <a class="page-scroll" href="">NEWS</a>
                                    </li>
                                   
                                    <li class="nav-item ml-5 lg:ml-11">
                                    <div class="dropdown dropdown-hover">
                                        <a class="fa fa-chevron-down"> PRODUCT</a>
                                        <div class="dropdown-content">
                                            <a href="/battery">Battery</a></br>
                                            <!-- <div class="sub-dropdown">
                                                <a href="#" class="sub-dropdown-toggle">Type</a>
                                                <div class="sub-dropdown-content">
                                                    <a href="#">Type 1</a></br>
                                                    <a href="#">Type 2</a></br>
                                                    <a href="#">Type 3</a></br>
                                                </div>
                                            </div> -->
                                            <a href="#">SmartPole</a></br>
                                            <a href="/solar">Solar Panel</a></br>
                                        </div>
                                    </div>
                                </li>
                                    <li class="nav-item ml-5 lg:ml-11">
                                    <div class="dropdown dropdown-hover">

                                    
                                    <a class="fa fa-chevron-down"> INSIGHT</a>
                                    <div class="dropdown-content">
                                    <a href="/gallery">Gallery</a></br>
                                    <a href="#">Article</a></br>

                                    </div>
                                        

                                    </li>
                                    <li class="nav-item ml-5 lg:ml-11">
                                        <a class="page-scroll" href="/contact-us">CONTACT US</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header navbar -->

        
    </section>
    <!--====== HEADER PART ENDS ======-->







    <!--====== GALLERY PART START ======-->

    <section id="gallery" class="gallery_area pt-32">
        <div class="container"style="padding-top:50px;">
            <div class="section_title text-center pb-6">
                <h5 class="sub_title">Gallery</h5>
                <h4 class="main_title">From The Gallery</h4>
            </div>
            <div class="md:flex row mx-auto">
                @foreach ($gallery as $item)
                    <div class="max-w-sm rounded overflow-hidden shadow-lg mx-auto md:mb-8 mb-4">
                        <img class="w-full" src="{{ asset('storage/' . $item->foto_gallery) }}">
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--====== GALLERY PART ENDS ======-->

  

  

    <!--====== FOOTER PART START ======-->


    
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
<footer class="footer footer-center bg-gray-500 text-base-content p-4" style="color:#FFFFFF;">
  <aside>
    <p>Copyright © 2024 - All right reserved by Karmitech Indonesia</p>
  </aside>
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

    <!--====== Main js ======-->
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
   
<script src="https://cdn.tailwindcss.com"></script>

</body>

</html>