<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>Job board </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="front/assets/img/favicon.ico">
    <script src="https://kit.fontawesome.com/729cc29f14.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/front/css/app.css">
</head>

<body>
<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="front/assets/img/logo/logo.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<header>
    <!-- Header Start -->
   <div class="header-area header-transparrent">
       <div class="headder-top header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-2">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html"><img src="front/assets/img/logo/logo.png" alt=""></a>
                        </div>  
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="menu-wrapper">
                            <!-- Main-menu -->
                            <div class="main-menu">
                                <nav class="d-none d-lg-block">
                                    <ul id="navigation">
                                        @if (auth()->check() && auth()->user()->role =="jobUser")
                                        <li><a href="{{route('Userprofile')}}">Edit resume</a></li>
                                        @elseif(auth()->check() && auth()->user()->role =="companyUser")
                                        <li><a href="{{route('postJob')}}">post job</a></li>
                                        @endif
                                        <li><a href="{{route('home')}}">Home</a></li>
                                        <li><a href="{{route('job_listing')}}">Find a Jobs </a></li>
                                       
                                       
                                        <li class="genric-btn primary small">User Menu
                                            <ul class="submenu">
                                                @auth
                                                <li> <form action="{{route('logout')}}" method="POST">
                                                    @csrf
                                                    <button class="genric-btn danger small" type="submit">log out</button>
                                                </form>
                                            </li>

                                            @else
                                            <li>  <a href="{{ route('register') }}">Register</a></li>
                                            <li><a href="{{ route('login') }}">Login</a></li>
                                            
                                            
                                            @endauth
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>          
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
       </div>
   </div>
    <!-- Header End -->
</header>