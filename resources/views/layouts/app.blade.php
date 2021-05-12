{{--
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}

<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>{{ config('app.name', 'vezzeta') }}</title>

    <title>Job Board</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href=" {{ asset('assets/img/favicon.png') }} ">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href=" {{ asset('assets/css/owl.carousel.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('assets/css/magnific-popup.css') }} ">
    <link rel="stylesheet" href=" {{ asset('assets/css/font-awesome.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('assets/css/themify-icons.css') }} ">
    <link rel="stylesheet" href=" {{ asset('assets/css/nice-select.css') }} ">
    <link rel="stylesheet" href=" {{ asset('assets/css/flaticon.css') }} ">
    <link rel="stylesheet" href=" {{ asset('assets/css/gijgo.css') }} ">
    <link rel="stylesheet" href=" {{ asset('assets/css/animate.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('assets/css/slicknav.css') }} ">

    <link rel="stylesheet" href=" {{ asset('assets/css/style.css') }} ">
    {{-- <link rel="stylesheet" href=" {{ asset('assets/css/responsive.css') }} "> --}}
</head>

<body>

<!-- header-start -->
<header>
<div class="header-area ">
    <div id="sticky-header" class="main-header-area">
        <div class="container-fluid " style="background-color: rgba(0, 29, 56, 0.8);" >
            <div class="header_bottom_border">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-2">
                        <div class="logo">
                            <a href="index.html">
                                <img src=" {{ asset('assets/img/logo2.png') }} " alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="">احجز دكتورك</a></li>|
                                    <li><a href="">المقالات</a></li>|
                                    <li><a href="">الصفحه الشخصيه </a></li>|
                                    <li><a href="contact.html">اتصل بنا</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                        <div class="Appointment">
                        <div class="phone_num d-none d-xl-block"></div>
                        <!-- Authentication Links -->
                        @guest
                        <div class="phone_num d-none d-xl-block">
                            <a class="boxed-btn3" href="{{ route('login') }}">سجل الدخول</a>
                        </div>
                        @if (Route::has('register'))
                        <div class="d-none d-lg-block">
                            <a class="boxed-btn3" href="{{ route('register') }}">قدم نفسك</a>
                        </div>
                        @endif
                    @else
                        <div class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</header>
<!-- header-end -->

<div dir="rtl">
    <!-- Search -->
    <div class="catagory_area ">
<div class="container " style="margin-top: 10rem">
            <div class=" single_text">
                <h2>احجز مع
                    أفضل دكتور في مصر</h3>
                <h3>احجز اونلاين او كلم  ١٧٧٥۸</h4>
                <h4>١٦٠٠٠ دكتور -٤٠٠٠ استاذ واستشاري - اكثر من ۲٠ تخصص</h5>
                <br>
            </div>
            <form  method="GET" action="">
            <div class="row cat_search" >

                <div class="col-lg-3 col-md-4">
                    <div class="single_input">
                        <input type="text" placeholder="إسم الدكتور" >
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="single_input">
                        <select class="wide" >
                            <option value="" >الموقع</option>
                            <option value="المنصوره">المنصوره</option>
                            <option value="الدقي">الدقي</option>
                            <option value="4">Sylet</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="single_input">
                        <select class="wide" >
                            <option value="">التخصص</option>
                            <option value="جلدية">جلدية</option>
                            <option value="اسنان">اسنان</option>
                            <option value="نفسي">نفسي</option>
                            <option value="اطفال">اطفال حديثي الولادة</option>
                            <option value="مخ">مخ واعصاب</option>
                            <option value="عظام">عظام</option>
                            <option value="نساء">نساء وتوليد</option>
                            <option value="انف">انف واذن وحنجرة</option>
                            <option value="قلب">قلب واوعية دموية</option>
                            <option value="امراض">امراض دم</option>
                            <option value="اورام">اورام</option>
                            <option value="باطنه">باطنه</option>
                            <option value="تخسيس">تخسيس وتغذية</option>
                            <option value="جاطفال">جراحة اطفال</option>
                            <option value="جاورام">جراحة اورام</option>
                            <option value="جاوعيه">جراحة اوعية دموية</option>
                            <option value="جتجميل">جراحة تجميل</option>
                            <option value="سمنه">جراحه سمنة ومناظير </option>
                            </select>
                    </div>
                </div>

                <div class="col-lg-3 col-md-12">
                    <div class="job_btn">
                        <input type="submit" class="boxed-btn3" value="ابحث هنا">
                    </div>
                </div>

            </div>
            </form>
        </div>
    </div>
    <!-- endsearch -->
    <!-- job_listing_area_start  -->
    <div class="job_listing_area">
        <div class="container">

            <div class="job_lists">
                <div class="row">
                    <div class="col-lg-10 col-md-10" style="height: 16rem;" >


                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- job_listing_area_end  -->
</div>


<!-- footer start -->
<footer class="footer">
<div class="footer_top">
<div class="container">
    <div class="row">
        <div class="col-xl-3 col-md-6 col-lg-3">
            <div class="footer_widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                <div class="footer_logo">
                    <a href="#">
                        <img src=" {{ asset('assets/img/logo2.png') }} " alt="">
                    </a>
                </div>
                <p>
                    ma7mod.raouf@gmail.com <br>
                    +01005162422 <br>
                    Mansora, Egypt
                </p>
                <div class="socail_links">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/m7modsabra">
                                <i class="ti-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UC7FFcZc90vE5FfR_dgA_dVg?view_as=subscriber">
                                <i class="fa fa-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/Mahmod_Raouf">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/Mahmod_Raouf">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-6 col-lg-2">
            <div class="footer_widget wow fadeInUp" data-wow-duration="1.1s" data-wow-delay=".4s">
                <h3 class="footer_title">
                    ماذا عنا
                </h3>
                <ul>
                    <li><a href="https://code4learn.teachable.com/p/online-courses">من نحن </a></li>
                    <li><a href="https://code4learn.teachable.com/p/online-courses"> أسعارنا</a></li>
                    <li><a href="https://www.facebook.com/m7modsabra">إستفسار</a></li>
                </ul>

            </div>
        </div>
        <div class="col-xl-3 col-md-6 col-lg-3">
            <div class="footer_widget wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
                <h3 class="footer_title">
                    الخدمات
                </h3>
                <ul>
                    <li><a href="https://code4learn.teachable.com/p/soundcloud">اعمالنا</a></li>
                    <li><a href="https://twitter.com/code4learn/status/1236082742582001670?s=21">شركائنا</a></li>
                    <li><a href="https://code4learn.teachable.com/p/online-courses">الخصومات والمشاريع</a></li>
                    <li><a href="https://www.facebook.com/m7modsabra">للإعلان</a></li>
                </ul>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 col-lg-4">
            <div class="footer_widget wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".6s">
                <h3 class="footer_title">
                    Subscribe
                </h3>
                <form action="#" class="newsletter_form">
                    <input type="text" placeholder="Enter your mail">
                    <button type="submit">Subscribe</button>
                </form>
                <p class="newsletter_text">Esteem spirit temper too say adieus who direct esteem esteems
                    luckily.</p>
            </div>
        </div>
    </div>
</div>
</div>
<div class="copy-right_text wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".3s">
<div class="container">
    <div class="footer_border"></div>
    <div class="row">
        <div class="col-xl-12">
            <p class="copy_right text-center">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
    </div>
</div>
</div>
</footer>
<!--/ footer end  -->

<!-- link that opens popup -->
<!-- JS here -->
<script src="{{ asset('js/app.js') }}"></script>
<script src=" {{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }} "></script>
<script src=" {{ asset('assets/js/owl.carousel.min.js') }} "></script>
<script src=" {{ asset('assets/js/isotope.pkgd.min.js') }} "></script>
<script src=" {{ asset('assets/js/ajax-form') }} .js"></script>
<script src=" {{ asset('assets/js/waypoints.min.js') }} "></script>
<script src=" {{ asset('assets/js/jquery.counterup.min.js') }} "></script>
<script src=" {{ asset('assets/js/imagesloaded.pkgd.min.js') }} "></script>
<script src=" {{ asset('assets/js/scrollIt.js') }} "></script>
<script src=" {{ asset('assets/js/jquery.scrollUp.min.js') }} "></script>
<script src=" {{ asset('assets/js/wow.min.js') }} "></script>
<script src=" {{ asset('assets/js/nice-select.min.js') }} "></script>
<script src=" {{ asset('assets/js/jquery.slicknav.min.js') }} "></script>
<script src=" {{ asset('assets/js/jquery.magnific-popup.min.js') }} "></script>
<script src=" {{ asset('assets/js/plugins.js') }} "></script>
<script src=" {{ asset('assets/js/gijgo.min.js') }} "></script>



<!--contact js-->
<script src=" {{ asset('assets/js/contact.js') }} "></script>
<script src=" {{ asset('assets/js/jquery.ajaxchimp.min.js') }} "></script>
<script src=" {{ asset('assets/js/jquery.form') }} .js"></script>
<script src=" {{ asset('assets/js/jquery.validate.min.js') }} "></script>
<script src=" {{ asset('assets/js/mail-script.js') }} "></script>


<script src=" {{ asset('assets/js/main.js') }} "></script>
</body>

</html>
