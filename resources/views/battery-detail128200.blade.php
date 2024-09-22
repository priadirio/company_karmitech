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
    <link href="https://cdn.jsdelivr.net/npm/pagedone@1.2.1/src/css/pagedone.css"/>


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

        #large-image-container img {
            width: 100%;
            height: auto;
        }

            
        #small-images-container {
            display: flex;
            flex-direction: column;
            gap: 10px; /* Jarak antara gambar kecil */
            align-items: center;
        }

        #small-images-container .image-item img {
            width: 20%; /* Sesuaikan lebar gambar kecil */
            height: auto;
        }


        .carousel-container {
    position: relative;
    height: 450px; /* Adjust based on your needs */
    overflow: hidden;
}

.carousel {
    display: flex;
    flex-direction: column;
    transition: transform 0.3s ease-in-out;
    height: 100%;
    overflow-y: auto;
}

.carousel img {
    width: 100%;
    height: auto;
    display: block;
}
 
/* Style for small images */
#small-images-container {
    display: flex;
    flex-direction: column;
    gap: 10px; /* Space between small images */
    align-items: center;
}

#small-images-container .image-item img {
    width: 100px; /* Width for small images */
    height: auto;
    cursor: pointer;
}
strong{
    font-weight: 900 !important;
    color:black
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

    <section class="py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8" style="padding-top: 120px;">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Small Images Container -->
                <div class="carousel-container flex flex-col gap-4">
                    <div id="small-images-container" class="carousel">
                        <!-- Small images will be inserted here -->
                    </div>
                </div>

                <!-- Large Image Container -->
                <div class="flex flex-col items-center">
                    <div id="large-image-container" class="w-full max-w-md">
                        <!-- Large image will be inserted here -->
                    </div>
                </div>

                <!-- Description -->
               
                <div>
                <h1 style = "font-size : 32px;font-weight: 700" > 12.8V 200Ah LiFePO4 Batteries</h1>
                <br/>
                    <table>
                        <tbody>
                            
                            <tr class="firstRow">
                                <td valign="top" style="word-break: break-all;"><strong>Model #&nbsp;:&nbsp;</strong>&nbsp;12-200</td>
                                <td valign="top" style="word-break: break-all;"><strong> P/N&nbsp;:&nbsp;</strong>DC2560-0200-420</td>
                            </tr>
                            <tr>
                                <td valign="top" style="word-break: break-all;">
                                <strong>Size&nbsp;:&nbsp;&nbsp;</strong>		 (:mm / inch)522*240*220mm
                                <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;20.55*9.44*8.66in</p>
                                </td>
                                <td valign="top" style="word-break: break-all;"><strong>Weight&nbsp;:&nbsp;&nbsp;</strong> 29.6KG/65.25lb</td>
                            </tr>
                            <tr>
                                <td valign="top" style="word-break: break-all;"><strong>Gross weight :&nbsp;&nbsp;</strong>31.5KG/69.44lb</td>
                                <td valign="top" style="word-break: break-all;"><strong>Continuous Discharge Current&nbsp;:</strong>&nbsp;&nbsp;100A</td>
                            </tr>
                            <tr>
                                <td style="word-break: break-all;"><strong>Peak Discharge Current&nbsp;:&nbsp;</strong>&nbsp;150A(3S)</td>
                                <td>Cycle Life (100%, 80%, 50% DOD)</td>
                            </tr>
                        </tbody>
                    </table>
                    <p><strong>Prod lead time : </strong> 3 - 4 weeks (urgent case 2 weeks)<br></p>
                    <p><strong>Sea shipment lead time:</strong></p>
                    <table>
                        <tbody>
                            <tr class="firstRow">
                                <td valign="top">North America :</td>
                                <td valign="top">3 - 4 weeks</td>
                                <td valign="top">by Sea</td>
                            </tr>
                            <tr>
                                <td valign="top">EU:</td>
                                <td valign="top">3- 4 weeks</td>
                                <td valign="top">by Sea</td>
                            </tr>
                            <tr>
                                <td valign="top">Southern Eastern Asia :</td>
                                <td valign="top">7- 10 days</td>
                                <td valign="top">by Sea</td>
                            </tr>
                            <tr>
                                <td valign="top">India/Pakistan:</td>
                                <td valign="top">12-15 days</td>
                                <td valign="top">by Sea</td>
                            </tr>
                            <tr>
                                <td valign="top">South America	:</td>
                                <td valign="top">4-5 weeks</td>
                                <td valign="top">by Sea</td>
                            </tr>
                        </tbody>
                    </table>
                    <p><strong>Cert:</strong>&nbsp; &nbsp;<br></p>
                    <p>&nbsp; &nbsp; &nbsp; (1)Cell		: 	UL, CE, ROHS, REACH, EMC, BIS, UN38.3, IEC 63133, IEC 61960</p>
                    <p>&nbsp; &nbsp; &nbsp; (2)Pack		:	UL, CE, ROHS, REACH, EMC, BIS, UN 38.3</p>
                    <p><br></p>
                    </div>
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

    <!--====== Main js ======-->
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/product-detail128200.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/navbar.js') }}"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/pagedone@1.2.1/src/js/pagedone.js"></script>

</body>

</html>