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
        .nav-for-slider .swiper-slide {
            height: auto;
            width: auto;
            cursor: pointer;
           
        }
        .swiper-wrapper{
            height: auto;
        }
        .nav-for-slider .swiper-slide img{
            border:2px solid transparent;
            border-radius: 10px;
           
        }
        .nav-for-slider .swiper-slide-thumb-active img{
           
            border-color: rgb(79 70 229 );
        }

        .caseprolist h1, .case_top h1 {
            font-size: 34px;
            text-align: center;
            font-weight: normal;
            line-height: 200%;
        }
        .case_toptext {
            font-size: 16px;
        }
        .case_top {
            padding: 50px 4% 0 4%;
        }

        .casebox {
            width: 92%;
            margin: 40px auto 0 auto;
        }
        img, div, li, ul, dl, p, em, b {
            border: 0px;
        }
        .casebox ul {
            width: 100%;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .tz-gallery {
            width: 100%;
            overflow: hidden;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .clear2 {
            clear: both;
            width: 0px;
            height: 20px;
            font-size: 1px;
            visibility: hidden;
        }
        .casebox ul li {
            width: 30%;
            padding: 0 0 40px 0;
        }
        .tz-gallery li {
            width: 31%;
            padding: 12px 0;
        }
        .caseprolist {
            background: #f6f6f6;
            padding: 70px 0;
        }
        .caseprolist .swiper-container {
            padding: 58px 0 110px 0;
        }
        .swiper-container {
            margin-left: auto;
            margin-right: auto;
            position: relative;
            overflow: hidden;
            list-style: none;
            padding: 0;
            z-index: 1;
        }
        .case_pall {
            font-size: 17px;
            text-align: center;
        }
        .case_pall a {
            display: inline-block;
            background: #dc6600;
            color: #fff;
            border-radius: 50px;
            padding: 10px 66px;
        }
        .caseprolist .swiper-container .swiper-pagination {
            bottom: 35px;
        }
        .swiper-container-horizontal>.swiper-pagination-bullets, .swiper-pagination-custom, .swiper-pagination-fraction {
            bottom: 10px;
            left: 0;
            width: 100%;
        }
        .swiper-container-horizontal>.swiper-pagination-bullets, .swiper-pagination-custom, .swiper-pagination-fraction {
            bottom: 10px;
            left: 0;
            width: 100%;
        }
        .swiper-pagination {
            position: absolute;
            text-align: center;
            transition: .3s opacity;
            transform: translate3d(0, 0, 0);
            z-index: 10;
        }
        @media screen and (min-width: 768px) and (max-width: 1560px) {
            .caseprolist .swiper-slide .text-h {
                width: 65%;
                padding: 40px 2% 40px 2%;
                font-size: 12px;
            }
        }
        .caseprolist .swiper-slide {
            background: #fff;
            border-radius: 30px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            box-shadow: #ddd 0 0 20px;
            height: 400px;
        }
        @media screen and (min-width: 768px) and (max-width: 1560px) {
            .caseprolist .swiper-slide .text-h p, .caseprolist .swiper-slide .text-h td {
                font-size: 12px;
                -webkit-font-smoothing: none;
                -moz-font-smoothing: none;
                -ms-font-smoothing: none;
                -o-font-smoothing: none;
                font-smoothing: none;
            }
        }
        table {
            display: table;
            border-collapse: separate;
            box-sizing: border-box;
            text-indent: initial;
            unicode-bidi: isolate;
            border-spacing: 2px;
            border-color: gray;
        }
        .banner_page {
            height: auto;
        }
        .imgbj4 {
            background-repeat: no-repeat !important;
            background-position: center center !important;
            background-size: cover !important;
        }
        .banner_page img {
            width: 100%;
            display: block;
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
                                                <a href="/battery" class="sub-dropdown-toggle">Type</a>
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
                                        <a class="page-scroll" href="/contact-us">Contact Us</a>
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

    
        <section >
        <div class="main_01 web_w" style="padding-top: 190px;">
            <div class="banner_page imgbj4" style="width:100%; position:relative;">
                <img src="{{ asset('frontend/assets/images/banner.jpg') }}">
                <div class="toptext wow fadeInLeft animated animated" style="visibility: visible; animation-name: fadeInLeft;"></div>
            </div>
        </div>
        </section>

        <section>
            <div class="main_01 web_w">
                <div class="case_top">
                <h1>Residential &amp; Consumer</h1>
                <div class="case_toptext">
                            </div>
            </div>
            <div class="casebox">
                    <ul class="tz-gallery">
                        <li>
                            <div><img src="{{ asset('frontend/assets/images/residential1.jpg') }}" width="300px" height="300px"></div>
                            <h6>Electric vehicle charging</h6><p>Residential &amp; Consumer</p>
                        </li>
                        <li>
                            <div><img src="{{ asset('frontend/assets/images/residential2.jpg') }}"width="300px" height="300px"></div>
                            <h6>Marines, boats</h6><p>Residential &amp; Consumer</p>
                        </li>
                        <li>
                            <div><img src="{{ asset('frontend/assets/images/residential3.jpg') }}"width="300px" height="300px"></div>
                            <h6>Homes</h6><p>Residential &amp; Consumer</p>
                        </li>
                        <li>
                            <div><img src="{{ asset('frontend/assets/images/residential4.jpg') }}"width="300px" height="300px"></div>
                            <h6>SmartPole</h6><p>Residential &amp; Consumer</p>
                        </li>
                        <li>
                            <div><img src="{{ asset('frontend/assets/images/residential5.jpg') }}"width="300px" height="300px"></div>
                            <h6>SmartPole</h6><p>Residential &amp; Consumer</p>
                        </li>

                    
                            <!-- <li>
                            <div><img src="upload_files/2023-09/202309251150437791.jpg"></div>
                            <h6>Cottages, Cabins</h6><p>Residential &amp; Consumer</p>
                        </li>
                            <li>
                            <div><img src="upload_files/2023-09/202309251152196791.jpeg"></div>
                            <h6>Homes</h6><p>Residential &amp; Consumer</p>
                        </li>
                            <li>
                            <div><img src="upload_files/2023-09/202309251156441277.jpg"></div>
                            <h6>Marines, boats</h6><p>Residential &amp; Consumer</p>
                        </li>
                            <li>
                            <div><img src="upload_files/2023-09/202309250139491110.jpg"></div>
                            <h6>RVs, trailers</h6><p>Residential &amp; Consumer</p>
                        </li>
                            <li>
                            <div><img src="upload_files/2023-09/202309250141336796.jpg"></div>
                            <h6>Electric vehicle charging</h6><p>Residential &amp; Consumer</p>
                        </li> -->
                    </ul>
                <div class="clear2"></div>
            </div>
            <!-- <div class="caseprolist">
            <h1>PRODUCTS</h1>
            <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-5996.25px, 0px, 0px);"><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" style="width: 719.5px; margin-right: 80px;">
                        <div class="text-h"><a href="productshow_2136.html"><h3>450</h3><table><tbody><tr class="firstRow"><td valign="top" style="word-break: break-all;"><strong>Model # :</strong>&nbsp; AS24-120</td><td valign="top" style="word-break: break-all;"><strong>A&amp;S P/N&nbsp;:</strong>&nbsp;&nbsp;AS-DC3072-0120-810</td></tr><tr><td valign="top" style="word-break: break-all;"><strong>Size: 		 (mm / inch)&nbsp;:</strong>&nbsp; 522*269*220mm<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;20.55*10.59*8.66in</p></td><td valign="top" style="word-break: break-all;"><strong>Weight&nbsp;:</strong>&nbsp;&nbsp;23.6KG/52.02lb</td></tr><tr><td valign="top" style="word-break: break-all;"><strong>Gross Weight&nbsp; :</strong>&nbsp;&nbsp;25.8KG/56.87lb</td><td valign="top" style="word-break: break-all;"><strong>Continuous Discharge Current&nbsp;:</strong>&nbsp;&nbsp;100A</td></tr><tr><td style="word-break: break-all;"><strong>Peak Discharge Current&nbsp;:</strong>&nbsp;&nbsp;200A(3S)</td><td>Cycle Life (100%, 80%, 50% DOD)</td></tr></tbody></table><p><strong>Prod lead time : </strong> 3 - 4 weeks (urgent case 2 weeks)</p></a></div>
                        <div class="img"><a href="productshow_2136.html"><img class="flash" src="{{ asset('frontend/assets/images/solar_panel_2-removebg-preview.png') }}"width="500px" height="500px"></a></div>
                    </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="5" style="width: 719.5px; margin-right: 80px;">
                        <div class="text-h"><a href="productshow_2267.html"><h3>51.2V 400Ah</h3><table><tbody><tr class="firstRow"><td valign="top" style="word-break: break-all;"><strong>Model #&nbsp;:&nbsp;</strong>&nbsp;ADD2048K</td><td valign="top" style="word-break: break-all;"><strong>A&amp;S P/N&nbsp;:&nbsp;&nbsp;</strong>AS-DD2048-0400-610</td></tr><tr><td valign="top" style="word-break: break-all;"><p><strong>Size&nbsp;:&nbsp;</strong>(:mm / inch)&nbsp;585*550840mm</p><p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong>23.03*21.65*33.071n</p></td><td valign="top" style="word-break: break-all;"><strong>Weight&nbsp;:&nbsp;&nbsp; </strong>200KG/264.55Ib</td></tr><tr><td valign="top" style="word-break: break-all;"><strong>Gross weight :&nbsp;</strong>&nbsp;230KS/507lb</td><td valign="top" style="word-break: break-all;"><strong>Continuous Discharge Current : </strong>100A</td></tr><tr><td style="word-break: break-all;"><strong>Peak Discharge Current&nbsp;:&nbsp;</strong>&nbsp;400A</td><td>Cycle Life (100%, 80%, 50% DOD)</td></tr></tbody></table><p><strong>Prod lead time : </strong> 3 - 4 weeks (urgent case 2 weeks)</p></a></div>
                        <div class="img"><a href="productshow_2267.html"><img class="flash" src="{{ asset('frontend/assets/images/BatteryLFP5121001.jpg') }}"width="500px" height="500px"></a></div>
                    </div>
                                <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 719.5px; margin-right: 80px;">
                        <div class="text-h"><a href="productshow_2155.html"><h3>UP5000-HM8042   </h3><table><tbody><tr class="firstRow"><td valign="top" style="word-break: break-all;"><strong>Model # :&nbsp;</strong>UP5000-HM8042&nbsp;</td><td valign="top" style="word-break: break-all;"><strong>A&amp;S P/N :&nbsp;</strong>AS-INV005-0220-110</td></tr><tr><td valign="top" style="word-break: break-all;"><strong>Size :</strong> 		 (:mm / inch) 642.5*381.6*149mm<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 47.24*31.49*80.7 in</p></td><td valign="top" style="word-break: break-all;"><strong>Weight :</strong> 19KG/41.88lb</td></tr><tr><td valign="top" style="word-break: break-all;"><strong>Rated voltage :&nbsp;</strong>220V-230V</td><td valign="top" style="word-break: break-all;"><strong>Rated current :&nbsp;</strong>60A</td></tr><tr><td style="word-break: break-all;"><strong>Rated frequency :&nbsp;</strong>50/60Hz</td><td>Cycle Life (100%, 80%, 50% DOD)</td></tr></tbody></table><p><strong>Prod lead time : </strong> 3 - 4 weeks (urgent case 2 weeks)</p></a></div>
                        <div class="img"><a href="productshow_2155.html"><img class="flash" src="{{ asset('frontend/assets/images/acc22.png') }}"width="500px" height="500px"></a></div>
                    </div>
                                <div class="swiper-slide" data-swiper-slide-index="2" style="width: 719.5px; margin-right: 80px;">
                        <div class="text-h"><a href="productshow_2153.html"><h3>450W photovoltaic module</h3><table><tbody><tr class="firstRow"><td valign="top" style="word-break: break-all;"><strong>Types of :&nbsp;</strong>450W solar panel cells</td><td valign="top" style="word-break: break-all;"><strong>A&amp;S P/N :&nbsp;</strong>AS-PV0450-0000-100</td></tr><tr><td valign="top" style="word-break: break-all;"><strong>Size :</strong> 		 (:mm / inch) 1910*1134*35mm<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;75.19*44.64*1.37in</p></td><td valign="top" style="word-break: break-all;"><strong>Weight :&nbsp;</strong>24KG/52.9lb</td></tr><tr><td valign="top" style="word-break: break-all;"><strong>Optimal operating current :&nbsp;</strong>12.78A</td><td valign="top" style="word-break: break-all;"><strong>Module efficiency :&nbsp;</strong>20.78%</td></tr><tr><td style="word-break: break-all;"><strong>Maximum rated fuse current&nbsp;:&nbsp;</strong>25A</td><td>Cycle Life (100%, 80%, 50% DOD)</td></tr></tbody></table><p><strong>Prod lead time : </strong> 3 - 4 weeks (urgent case 2 weeks)</p></a></div>
                        <div class="img"><a href="productshow_2153.html"><img class="flash" src="{{ asset('frontend/assets/images/solar_panel_2-removebg-preview.png') }}"width="500px" height="500px"></a></div>
                    </div>
                                <div class="swiper-slide" data-swiper-slide-index="3" style="width: 719.5px; margin-right: 80px;">
                        <div class="text-h"><a href="productshow_2265.html"><h3>48V 100Ah</h3><table><tbody><tr class="firstRow"><td valign="top" style="word-break: break-all;"><strong>Model # :&nbsp;</strong>AS48-100</td><td valign="top" style="word-break: break-all;"><strong>A&amp;S P/N :&nbsp;</strong>AS-DC4800-0100-510</td></tr><tr><td valign="top" style="word-break: break-all;"><p><strong>Size(:mm / inch) :&nbsp;</strong>522x 240x 220mm</p><p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong>20.55*9.44*8.66in</p></td><td valign="top" style="word-break: break-all;"><strong>Weight :&nbsp;</strong>35.5KG/78.26lb</td></tr><tr><td valign="top" style="word-break: break-all;"><strong>Gross weight :&nbsp;</strong>37.4KG/82.45lb</td><td valign="top" style="word-break: break-all;"><strong>Continuous Discharge Current :</strong>&nbsp;100A</td></tr><tr><td style="word-break: break-all;"><strong>Peak Discharge Current :&nbsp;</strong>150A(3S)</td><td>Cycle Life (100%, 80%, 50% DOD)</td></tr></tbody></table><p><strong>Prod lead time : </strong> 3 - 4 weeks (urgent case 2 weeks)</p></a></div>
                        <div class="img"><a href="productshow_2265.html"><img class="flash" src="{{ asset('frontend/assets/images/Battery481002.jpg') }}"width="500px" height="500px"></a></div>
                    </div>
                                <div class="swiper-slide" data-swiper-slide-index="4" style="width: 719.5px; margin-right: 80px;">
                        <div class="text-h"><a href="productshow_2136.html"><h3>25.6V 120Ah</h3><table><tbody><tr class="firstRow"><td valign="top" style="word-break: break-all;"><strong>Model # :</strong>&nbsp; AS24-120</td><td valign="top" style="word-break: break-all;"><strong>A&amp;S P/N&nbsp;:</strong>&nbsp;&nbsp;AS-DC3072-0120-810</td></tr><tr><td valign="top" style="word-break: break-all;"><strong>Size: 		 (mm / inch)&nbsp;:</strong>&nbsp; 522*269*220mm<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;20.55*10.59*8.66in</p></td><td valign="top" style="word-break: break-all;"><strong>Weight&nbsp;:</strong>&nbsp;&nbsp;23.6KG/52.02lb</td></tr><tr><td valign="top" style="word-break: break-all;"><strong>Gross Weight&nbsp; :</strong>&nbsp;&nbsp;25.8KG/56.87lb</td><td valign="top" style="word-break: break-all;"><strong>Continuous Discharge Current&nbsp;:</strong>&nbsp;&nbsp;100A</td></tr><tr><td style="word-break: break-all;"><strong>Peak Discharge Current&nbsp;:</strong>&nbsp;&nbsp;200A(3S)</td><td>Cycle Life (100%, 80%, 50% DOD)</td></tr></tbody></table><p><strong>Prod lead time : </strong> 3 - 4 weeks (urgent case 2 weeks)</p></a></div>
                        <div class="img"><a href="productshow_2136.html"><img class="flash" src="{{ asset('frontend/assets/images/Battery2561202.jpg') }}"width="500px" height="500px"></a></div>
                    </div>
                                <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="5" style="width: 719.5px; margin-right: 80px;">
                        <div class="text-h"><a href="productshow_2267.html"><h3>51.2V 400Ah</h3><table><tbody><tr class="firstRow"><td valign="top" style="word-break: break-all;"><strong>Model #&nbsp;:&nbsp;</strong>&nbsp;ADD2048K</td><td valign="top" style="word-break: break-all;"><strong>A&amp;S P/N&nbsp;:&nbsp;&nbsp;</strong>AS-DD2048-0400-610</td></tr><tr><td valign="top" style="word-break: break-all;"><p><strong>Size&nbsp;:&nbsp;</strong>(:mm / inch)&nbsp;585*550840mm</p><p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong>23.03*21.65*33.071n</p></td><td valign="top" style="word-break: break-all;"><strong>Weight&nbsp;:&nbsp;&nbsp; </strong>200KG/264.55Ib</td></tr><tr><td valign="top" style="word-break: break-all;"><strong>Gross weight :&nbsp;</strong>&nbsp;230KS/507lb</td><td valign="top" style="word-break: break-all;"><strong>Continuous Discharge Current : </strong>100A</td></tr><tr><td style="word-break: break-all;"><strong>Peak Discharge Current&nbsp;:&nbsp;</strong>&nbsp;400A</td><td>Cycle Life (100%, 80%, 50% DOD)</td></tr></tbody></table><p><strong>Prod lead time : </strong> 3 - 4 weeks (urgent case 2 weeks)</p></a></div>
                        <div class="img"><a href="productshow_2267.html"><img class="flash" src="{{ asset('frontend/assets/images/Battery5124001.jpg') }}" width="500px" height="500px"></a></div>
                    </div>
                            
                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <div class="case_pall"><a href="product.html">ALL PRODUCTS</a></div>
        </div> -->
        </section>

 
 
        <footer class="footer bg-gray-500 text-base-content p-10">
  <aside>
  <a href="https://karmitechindonesia.id/" class="flex items-center">
                  <img src="{{ asset('frontend/assets/images/logofooter.png') }}" width="150px" height="150px"/>
              </a>

  </aside>
  <nav>
    <h6 class="footer-title" style="color:#FFFF;">Contact</h6>
    
    <i class="fa fa-phone " style="color:#FFFFFF;"> <a style="color:#FFFF;" >Phone: (021) 890992239</a></i>
    <i class="fa fa-phone " style="color:#FFFFFF;"> <a style="color:#FFFF;" > Whatsapp: +6281399029496</a></i>
    <i class="fa fa-envelope" style="color:#FFFFFF;"> <a style="color:#FFFF;" href="mailto:info@karmitechindonesia.id">Email: info@karmitechindonesia.id</a></i>
  </nav>
  <nav>
  <h6 class="footer-title" style="color:#FFFF;">Head Office</h6>
  <a class="fa fa-map-marker dark:text-white" style="color:#FFFF;"> PT Karya Mitra Sejati</a>
    <a class="dark:text-white" style="color:#FFFF;">Gedung Bella Vista </a>
    <a class="dark:text-white" style="color:#FFFF;" >Jl. Raya Jati Makmur No.100, Jatimakmur,  </a>
    <a class="dark:text-white" style="color:#FFFF;" >Kec. Pondok Gede, Kota Bekasi, Jawa Barat</a>
    <a class="dark:text-white" style="color:#FFFF;" >Kode Pos: 177413</a>
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
    <script src="{{ asset('frontend/assets/js/navbar.js') }}"></script>

    <!--====== Main js ======-->
    
    
   
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/pagedone@1.2.1/src/js/pagedone.js"></script>

</body>

</html>