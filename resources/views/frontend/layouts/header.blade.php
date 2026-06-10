<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>KIMS - Krishnayan Institute of Medical Sciences</title>
    <meta name="description"
        content="KIMS Krishnayan Institute of Medical Sciences a premier institute dedicated to shaping the future of healthcare professionals through excellence in paramedical education.">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/assets/images/rays.png') }}">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/font-awesome.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/animate.css') }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/owl.carousel.css') }}">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/slick.css') }}">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/off-canvas.css') }}">
    <!-- linea-font css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/fonts/linea-fonts.css') }}">
    <!-- flaticon css  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/fonts/flaticon.css') }}">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/magnific-popup.css') }}">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="{{ asset('/assets/css/rsmenu-main.css') }}">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/rs-spacing.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/style.css') }}">
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/responsive.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <style>
        .top_header p {
            font-size: 10px;
            font-weight: 600;
        }

        .top_header_logo {
            height: 200px;
        }

        .footer_logo {
            height: 150px;
        }

        @media (min-width:1300px) {
            .header_banner img {
                width: 100%;
                /* height: 300px;  */
            }
        }

        @media (max-width:500px) {
            .top_header h2 {
                font-size: 17px;
            }

            .top_header_logo {
                height: 60px;
            }

            .top_header h3 {
                font-size: 16px;
            }

            .top_header p {
                font-size: 4px;
            }
        }

        .logo_show .light-logo {
            display: flex !important;
            justify-content: center;
            align-items: center;
        }

        .logo_show .light-logo img {
            display: block !important;
        }
    </style>
</head>

<body class="home-style4">

    <div class="full-width-header header-style3 modify">
        <!--Header Start-->
        <header id="rs-header" class="rs-header">


            {{-- top header start --}}

            {{-- <div class="container-fluid px-0 py-1">
            <ul class=" d-flex justify-content-around bg-danger text-light">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                    </ul>
            </div> --}}

            {{-- <div class="container-fluid row top_header text-center mt-4 px-sm-0 mx-sm-0">

                <div class="col-md-2 col-2 d-md-block">
                    <a href="{{ url('/') }}">
                        <img class="top_header_logo" src="{{asset('/assets/images/KIMS_logo.png')}}" alt=""
                            width="auto">
                    </a>
                </div>

                <div class="col-md-8 col-8">
                    <h2 class="text-danger font-weight-bolder mb-0">
                        कृष्णायन इंस्टीट्यूट ऑफ मेडिकल साइंस
                    </h2>
                    <h3 class="text-primary font-weight-bolder my-0">
                        Krishnayan Institute Of Medical Science
                    </h3>

                    <div class="my-0">
                        <p class="my-0">Autonomous Universities/ Professional Institution Membership with Quality
                            Council of
                            India, New Delhi
                        </p>
                        <p class="my-0">Regd. by Govt. of NCT Delhi, 
                            registered under the Companies Act 2013, Govt of
                            India </p>
                        <p class="my-0"> Regd. by Minsitry of HRD, dept. of Secondary & Higher Education, New Delhi
                            under
                            C.R. Act</p>

                        <p class="my-0">ISO, National Skill Development Corporation, Ministry of Labour and Employment
                        </p>
                        <p class="my-0">
                            Regd. with - Ministry of Micro, Small & Medium Enterprises, New Delhi</p>
                            <p class="my-0">
                                All the courses are recognised by UGC and PCI,INC delhi,NSDC govt of india
                            </p>
                            <p class="my-0">
                                Underguideline WHO,Unicef and ministry of health and family welfare govt india
                            </p>
                    </div>
                </div>

                <div class="col-md-2 col-2 d-md-block">
                    <a href="{{ url('/') }}">
                        <img class="top_header_logo" src="{{asset('/assets/images/eyeglasses.png')}}" alt=""
                            width="auto">
                    </a>
                </div>


            </div> --}}


            <div class="container-fluid px-0 header_banner d-none d-md-block">
                <img src="{{ asset('/assets/images/banner_logo.jpg') }}" alt="">
            </div>

            <div class="container-fluid px-0 header_banner d-block d-md-none">
                <img src="{{ asset('/assets/images/banner_mobile.jpg') }}" alt="">
            </div>


            {{-- top header end --}}

            <!-- Menu Start -->
            <div class="menu-area menu-sticky" id="navbar">
                <div class="logo-part d-none d-lg-block">
                    <a class="light-logo d-none" href="{{ url('/') }}">
                        <img class="navbar_logo d-none" src="{{ asset('/assets/images/kims.jpg') }}" alt="KIMS Logo"
                            style="height: 100px !important; width: auto;max-height:80px !important;">
                    </a>
                    <a class="small-logo" href="{{ url('/') }}">
                        <img class="logo" src="{{ asset('/assets/images/kims.jpg') }}" alt="KIMS logo">
                    </a>
                </div>
                <div class="container">
                    {{-- <div class="responsive-logo">
                        <a href="{{ url('/') }}">
                            <img class="logo" src="{{asset('/assets/images/KIMS_logo.png')}}" alt="KIMS logo">
                        </a>
                    </div> --}}

                    <div class="rs-menu-area">
                        <div class="main-menu">
                            {{-- <div class="mobile-menu">
                                <a class="rs-menu-toggle">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </div> --}}
                            <div class="mobile-menu d-flex justify-content-end align-items-center d-lg-none">
                                <!-- Register Button -->

                                <a href="{{ url('register') }}" class="bg-light border-danger border text-danger mr-5"
                                    style="color: white; border-radius: 30px; padding: 11px 24px;line-height:1;">
                                    Admission Link
                                </a>

                                <!-- Menu Toggle Icon -->
                                <a class="rs-menu-toggle" id="mobile-menu-toggle">

                                    <i class="fa fa-bars"></i>
                                </a>
                            </div>
                            <nav class="rs-menu">
                                <ul class="nav-menu">
                                    <li class=" current-menu-item"> <a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <!-- <li class="">
                                        <a href="{{ url('/about') }}">About</a>
                                    </li> -->

                                    <li class="menu-item-has-children">
                                        <a href="#">About</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ url('about') }}">About</a></li>
                                            <li><a href="{{ url('team') }}">Directory Body</a></li>

                                            <li><a href="{{ url('advisory-board') }}">Advisory Board</a></li>

                                        </ul>
                                    </li>


                                    <li class="menu-item-has-children">
                                        <a href="#">Courses</a>
                                        <ul class="sub-menu courses-menu">
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <li><a href="{{ url('allCourse') }}">All Courses</a></li>
                                                    <li><a href="{{ url('ot') }}">O.T</a></li>

                                                    <li><a href="{{ url('ecg') }}">ECG</a></li>

                                                    <li><a href="{{ url('bmlt') }}">B.M.L.T</a></li>
                                                    <li><a href="{{ url('dmlt') }}">D.M.L.T</a></li>
                                                    <li><a href="{{ url('cms') }}">CMS & ED</a></li>


                                                    <li><a href="{{ url('emt') }}">E.M.T</a></li>
                                                    <li><a href="{{ url('opthemic') }}">OPHTHALMIC</a></li>
                                                    <li><a href="{{ url('dresser') }}">DRESSER</a></li>
                                                    <li><a href="{{ url('ctMR') }}">CT/MRI/X-RAY/ICU</a></li>

                                                </div>

                                                <div class="col-md-6">
                                                    <li><a href="{{ url('nursing') }}">NURSING</a></li>
                                                    <li><a href="{{ url('anm') }}">ANM</a></li>
                                                    <li><a href="{{ url('gnm') }}">GNM</a></li>
                                                    <li><a href="{{ url('pharmacy') }}">PHARMACY</a></li>
                                                    <li><a href="{{ url('dpharma') }}">DPHARMA</a></li>
                                                    <li><a href="{{ url('bpharma') }}">BPHARMA</a></li>
                                                    <li><a href="{{ url('others-bsc-courses') }}">Other BSC Course</a>
                                                    </li>
                                                    <li><a href="{{ url('others-certificate-courses') }}">Other
                                                            Certificate Course</a></li>
                                                    <li><a href="{{ url('others-diploma-courses') }}">Other Diploma
                                                            Courses</a></li>
                                                </div>

                                            </div>


                                        </ul>
                                    </li>

                                    {{-- <li class="">
                                        <a href="{{url('/team')}}">Our director body</a>
                                    </li> --}}
                                    <li class="">
                                        <a href="{{ url('gallery') }}">Gallery</a>

                                    </li>

                                    {{-- <li class="menu-item-has-children">
                                        <a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children right">
                                                <a href="#">Team</a>
                                                <ul class="sub-menu right">
                                                    <li><a href="team.html">Team One</a></li>
                                                    <li><a href="team2.html">Team Two</a></li>
                                                    <li><a href="team-single.html">Team Single</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Event</a>
                                                <ul class="sub-menu right">
                                                    <li><a href="events-style1.html">Event One</a></li>
                                                    <li><a href="events-style2.html">Event Two</a></li>
                                                    <li><a href="events-style3.html">Event Three</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Gallery</a>
                                                <ul class="sub-menu right">
                                                    <li><a href="gallery-style1.html">Gallery One</a></li>
                                                    <li><a href="gallery-style2.html">Gallery Two</a></li>
                                                    <li><a href="gallery-style3.html">Gallery Three</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Shop</a>
                                                <ul class="sub-menu right">
                                                    <li><a href="shop.html">Shop</a></li>
                                                    <li><a href="shop-single.html">Shop Single</a></li>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Others</a>
                                                <ul class="sub-menu right">
                                                    <li><a href="faq.html">FAQ</a></li>
                                                    <li><a href="error.html">404 Page</a></li>
                                                    <li><a href="login.html">Login</a></li>
                                                    <li><a href="register.html">Register</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> --}}

                                    <li class="menu-item-has-children">
                                        <a href="#">Verification</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('verify.user') }}">Admission verification</a></li>
                                            <li><a href="">Certificate verification</a></li>
                                            <!-- <li><a href="">Our affiliated institution
                                                </a></li> -->

                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">More</a>
                                        <ul class="sub-menu">
                                            <!-- <li><a href="{{ url('enquiry') }}">Enquiry</a></li> -->
                                            <li><a href="{{ url('contact') }}">Contact</a></li>
                                            {{-- <li><a href="">Address</a></li> --}}
                                            <li><a href="{{ url('frechicy') }}">Franchise form </a></li>
                                            <li><a href="{{ url('payment') }}">Payment</a></li>
                                            <li><a href="{{ url('associate') }}">Associate Form</a></li>


                                        </ul>
                                    </li>

                                    <li class="">
                                        <a href="{{ url('center') }}">Center</a>
                                    </li>


                                    {{-- <li class="">
                                        <a href="{{url('contact')}}">Contact</a>

                                    </li> --}}

                                </ul> <!-- //.nav-menu -->
                            </nav>
                        </div> <!-- //.main-menu -->
                        <div class="expand-btn-inner">
                            <ul>
                                <li>
                                    <a class="apply-btn" href="{{ url('register') }}">Registration</a>
                                </li>
                            </ul>
                            {{-- <span><a id="nav-expander" class="nav-expander style5">
                                    <span class="bar">
                                        <span class="dot1"></span>
                                        <span class="dot2"></span>
                                        <span class="dot3"></span>
                                    </span>
                                </a>
                            </span> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu End -->

            <!-- Canvas Menu start -->
            <nav class="right_menu_togle hidden-md">
                <div class="close-btn">
                    <div id="nav-close">
                        <div class="line">
                            <span class="line1"></span><span class="line2"></span>
                        </div>
                    </div>
                </div>
                <div class="canvas-logo">
                    <a href=""><img src="{{ asset('/assets/images/photos/logo.jpg') }}" alt="logo"></a>
                </div>
                <div class="offcanvas-text">
                    <p>We denounce with righteous indige nationality and dislike men who are so beguiled and demo by the
                        charms of pleasure of the moment data com so blinded by desire.</p>
                </div>
                <div class="offcanvas-gallery">
                    <div class="gallery-img">
                        <a class="image-popup" href="{{ asset('/assets/images/gallery/1.jpg') }}"><img
                                src="{{ asset('assets/images/gallery/1.jpg') }}" alt=""></a>
                    </div>
                    <div class="gallery-img">
                        <a class="image-popup" href="{{ asset('/assets/images/gallery/2.jpg') }}"><img
                                src="{{ asset('assets/images/gallery/2.jpg') }}" alt=""></a>
                    </div>
                    <div class="gallery-img">
                        <a class="image-popup" href="{{ asset('/assets/images/gallery/3.jpg') }}"><img
                                src="{{ asset('assets/images/gallery/3.jpg') }}" alt=""></a>
                    </div>
                    <div class="gallery-img">
                        <a class="image-popup" href="{{ asset('/assets/images/gallery/4.jpg') }}"><img
                                src="{{ asset('assets/images/gallery/4.jpg') }}" alt=""></a>
                    </div>
                    <div class="gallery-img">
                        <a class="image-popup" href="{{ asset('/assets/images/gallery/5.jpg') }}"><img
                                src="{{ asset('assets/images/gallery/5.jpg') }}" alt=""></a>
                    </div>
                    <div class="gallery-img">
                        <a class="image-popup" href="{{ asset('/assets/images/gallery/6.jpg') }}"><img
                                src="{{ asset('assets/images/gallery/6.jpg') }}" alt=""></a>
                    </div>
                </div>
                <div class="map-img">
                    <img src="{{ asset('/assets/images/map.jpg') }}" alt="">
                </div>
                <div class="canvas-contact">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </nav>
            <!-- Canvas Menu end -->
        </header>
        <!--Header End-->
    </div>

    <script>
        const navbar = document.getElementById('navbar');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('logo_show');
            } else {
                navbar.classList.remove('logo_show');
            }
        });
    </script>
