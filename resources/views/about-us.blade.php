<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('front-end/assets/images/sponser-favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('front-end/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/css/home.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>{{ env('APP_NAME') }}</title>
</head>


<body>

   @include('dashboard.modals.login-modal')
   @include('dashboard.modals.registration-modal')
    <div class="loader_wrap"><div class="loader">Loading...</div></div>

    <!-- header -->
    <div style="background-image: url({{ asset('front-end/images/aboutus-banner.png') }});"
        class="hero-header-bg main-header">
        <header>

            <div class="container ">
                <nav class="navbar navbar-expand-lg ">

                    <a class="navbar-brand" href="#"><img src="{{ asset('front-end/images/logo-white.png') }}"
                            alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarScroll">
                        <ul class="navbar-nav  my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{url('about-us')}}">ABOUT US
</a>
                            </li>


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    HOW IT WORKS
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{url('college-athletes')}}">COLLEGE ATHLETES</a></li>
                                    <li><a class="dropdown-item" href="#">PROFESSIONAL ATHLETES</a></li>
                                    <li><a class="dropdown-item" href="#">UNIVERSITIES & ATHLETIC DEPARTMENTS</a></li>
                                    <li><a class="dropdown-item" href="#">BRANDS</a></li>
                                    <li><a class="dropdown-item" href="#">MARKETING AGENCIES</a></li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">WHAT IS NIL</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">Resource Hub</a>
                            </li>
                        </ul>

                    </div>
                    <a class="btn button border-white-btn mx-3" href="#register">Signup <i
                            class="fa-solid fa-arrow-right-long px-1"></i></a>
                    <a class="button btn bg-green-btn" href="#login">login <i
                            class="fa-solid fa-arrow-right-long px-1"></i></a>

                </nav>




            </div>

        </header>


        <!-- hero-section -->
        <div class="container-fluid  hero-section  sec-space">

            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2>We’re On a Mission to Change the
                        </h2>
                        <h1 class="">Game of Athletic Endorsements</h1>
                        <button class="btn bg-green-btn ">BRAND SIGN UP <i
                                class="fa-solid fa-circle-chevron-right px-1"></i></button>
                        <button class="btn border-white-btn mx-3">ATHLETE SIGN UP <i
                                class="fa-solid fa-circle-chevron-right px-1"></i></button>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- mobile-header -->

    <div style=" background-image: url({{ asset('front-end/images/Rectangle 3.png') }});"
        class="hero-header-bg mobile-header">
        <header>

            <div class="container ">
                <nav class="navbar  ">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"><img src="{{ asset('front-end/images/logo.png') }}"
                                alt=""></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasNavbar"
                            aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img
                                        src="{{ asset('front-end/images/logo.png') }}" alt=""></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">



                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            How it works?
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Who We Are</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="#">Resources</a>
                                    </li>

                                </ul>
                                <a class="btn button border-white-btn my-3" href="#register">Signup <i
                                        class="fa-solid fa-arrow-right-long px-1"></i></a>
                                <a class="button btn bg-green-btn" href="#login">login <i
                                        class="fa-solid fa-arrow-right-long px-1"></i></a>
                            </div>
                        </div>
                    </div>
                </nav>

            </div>
        </header>


        <!-- hero-section -->
        <div class="container-fluid  hero-section  sec-space">

            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2>For all businesses and college athletes
                        </h2>
                        <h1 class="">GROW WITH SPONSORPRO</h1>
                        <p>Build partnerships locally and nationally while monetizing your NIL.</p>
                        <a class="btn bg-green-btn " href="#register">BRAND SIGN UP <i
                                class="fa-solid fa-circle-chevron-right px-1"></i></a>
                        <a class="btn border-white-btn mx-3" href="#register">ATHLETE SIGN UP <i
                                class="fa-solid fa-circle-chevron-right px-1"></i></a>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- what do learn -->

    <div class="container-fluid sec-space learn-sec">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center gy-4">
                <div class="col-md-6 col-sm-12">
                    <h4>What do you want to learn ?</h4>
                    <h3>We don’t work for our clients, we work with them.

                    </h3>
                    <button class="btn p-0">  View All <i class="fa-solid fa-caret-right"></i></button>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-3">
                            <img src="{{ asset('front-end/images/icons8-cbs-100.png') }}" alt=""
                                class="img-fluid learn-img">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('front-end/images/icons8-espn-100.png') }}" alt=""
                                class="img-fluid learn-img">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('front-end/images/icons8-new-york-times-100.png') }}" alt=""
                                class="img-fluid learn-img">
                        </div>
                        <div class="col-3">
                            <img src="{{ asset('front-end/images/sports.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <!-- solution-for-everyone -->

    <div class="container-fluid sec-space accor-sec">
        <div class="container">
            <div class="row gx-5 d-flex align-items-center justify-content-center">

                <div class="col-lg-6 col-12 ">
                    <p>ABOUT US</p>
                    <h2 class="pb-2">We are Former Sports <span style="color:#63AF31;">Players and Lifelong Fans</span></h2>
                    <p>And our overarching mission reflects how much we care about sports and the people involved in them. We strive to bring a human element to brand partnerships in order to create something more meaningful. <br> Our company was founded in 2019 by Sports Marketing professional Chase Garrett. We are proud to be a Denver-based company connecting brands of all sizes with professional athletes looking for marketing and endorsement opportunities.</p>




                </div>
                <div class="col-lg-6 col-12">
                    <img src="{{ asset('front-end/images/former-sports.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>

    </div>

    <!-- case studies -->
    <div class="container-fluid carosel-sec sec-space" style=" background-image: url({{ asset('front-end/images/light-green-bg.png') }});">
        <div class="container">
           <div class="row">
            <div class="col-md-3 aboutus-cards-bg">
                <div>
                <img src="{{ asset('front-end/images/connection.png') }}" alt="" class="img-fluid">
                <h6>Connection</h6>
                </div>
            </div>
            <div class="col-md-3 aboutus-cards-bg">
                <div>
                <img src="{{ asset('front-end/images/empowerment.png') }}" alt="" class="img-fluid mt-md-5 pt-md-5">
                <h6>Empowerment</h6>
                </div>
            </div>
            <div class="col-md-3 aboutus-cards-bg">
                <div>
                <img src="{{ asset('front-end/images/innovation.png') }}" alt="" class="img-fluid">
                <h6>Innovation</h6>
                </div>
            </div>
            <div class="col-md-3 aboutus-cards-bg">
                <div>
                <img src="{{ asset('front-end/images/inclusivity.png') }}" alt="" class="img-fluid mt-md-5 pt-md-5">
                <h6>Inclusivity</h6>
                </div>
            </div>
           </div>
        </div>
    </div>


    <!-- catch us in the news -->
    <div class="container-fluid sec-space accor-sec">
        <div class="container">
            <div class="row g-5 ">

                <div class="col-12 ">
                    <p>Find More Information in Our Resource Hub</p>
                    <h2 class="main-heading">Catch Us in the News</h2>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="resource-hub-card">
                        <div>
                            <img src="{{ asset('front-end/images/resourse-hub-img1.png') }}" alt="" class="img-fluid">

                        </div>
                        <div class="p-2">
                            <p class="date">08-10-2022</p>
                            <p class="title">Ground-Breaking Deal between Icon Source</p>
                            <p class="description">John Brenkus, Creator and Host of ESPN Sport Science and The NIL House, Signs Ground-Breaking Deal with Icon Source</p>
                            <button class="btn ">READ MORE<i
                                class="fa-solid fa-circle-chevron-right px-1"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="resource-hub-card">
                        <div>
                            <img src="{{ asset('front-end/images/resourse-hub-img2.png') }}" alt="" class="img-fluid">

                        </div>
                        <div class="p-2">
                            <p class="date">08-10-2022</p>
                            <p class="title">Ground-Breaking Deal between Icon Source</p>
                            <p class="description">John Brenkus, Creator and Host of ESPN Sport Science and The NIL House, Signs Ground-Breaking Deal with Icon Source</p>
                            <button class="btn ">READ MORE<i
                                class="fa-solid fa-circle-chevron-right px-1"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="resource-hub-card">
                        <div>
                            <img src="{{ asset('front-end/images/resourse-hub-img3.png') }}" alt="" class="img-fluid">

                        </div>
                        <div class="p-2">
                            <p class="date">08-10-2022</p>
                            <p class="title">Ground-Breaking Deal between Icon Source</p>
                            <p class="description">John Brenkus, Creator and Host of ESPN Sport Science and The NIL House, Signs Ground-Breaking Deal with Icon Source</p>
                            <button class="btn ">READ MORE<i
                                class="fa-solid fa-circle-chevron-right px-1"></i></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- download our app -->
    <div class="container-fluid download-app sec-space text-center"
        style=" background-image: url({{ asset('front-end/images/Rectangle-3.png') }});">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-12">
                    <h6 class="mb-3">DOWNLOAD OUR APP</h6>
                    <h2 class="mb-5">SPONSORPRO MAKES IT EASY AND AFFORDABLE FOR ATHLETES AND BRANDS TO CONNECT</h2>
                    <span> <a href="#"><img src="{{ asset('front-end/images/google-play.png') }}"
                                alt="" class="img-fluid"></a>
                        <a href="#"><img href="#" src="{{ asset('front-end/images/app-store.png') }}"
                                alt="" class="img-fluid"></a></span>
                </div>
            </div>
        </div>
    </div>



    <!-- footer -->
    <footer>
        <div class="container-fluid  sec-space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <img src="{{ asset('front-end/images/logo.png') }}" alt="" class="img-fluid">
                        <h6 class="py-3">be our partner</h6>
                        <p>We are a two-sided digital marketplace that connects college athletes with local and
                            nationwide businesses for marketing and endorsement opportunities.</p>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-12">
                        <h6 class="py-3">How It Works:</h6>
                        <ul>
                            <li><a href="#">College Athletes</a></li>
                            <li><a href="#">Pro Athletes</a></li>
                            <li><a href="#">Brands</a></li>
                            <li><a href="#">Marketing Agencies</a></li>
                            <li><a href="#">Universities</a></li>

                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-12">
                        <h6 class="py-3">who we are:</h6>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Terms of services</a></li>
                            <li><a href="#">Terms of services- Brands</a></li>


                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-12">
                        <h6 class="py-3">Resources
                        </h6>
                        <ul>
                            <li><a href="#">What is NIL</a></li>
                            <li><a href="#">Resource Hub</a></li>
                            <li><a href="#">Blogs</a></li>
                            <li><a href="#">Podcasts</a></li>
                            <li><a href="#">News</a></li>

                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <h6 class="py-3">DOWNLOAD OUR APP
                        </h6>
                        <a href="#"><img src="{{ asset('front-end/images/google-play.png') }}" alt=""
                                class="img-fluid"></a>
                        <a href="#"><img href="#" src="{{ asset('front-end/images/app-store.png') }}"
                                alt="" class="img-fluid"></a>


                    </div>
                </div>

            </div>

        </div>



    </footer>

    <!-- after footer -->
    <div class="container after-footer">
        <div class="row">
            <div class="col d-flex justify-content-center ">

                <h6>follow us on:</h6>
                <i class="fa-brands fa-facebook-f px-3"></i>
                <i class="fa-brands fa-twitter px-3"></i>
                <i class="fa-brands fa-linkedin-in px-3"></i>
                <i class="fa-brands fa-instagram px-3"></i>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>


</body>
	<script>
		window.addEventListener('DOMContentLoaded', function() {
  setTimeout(function(){
  $('.loader_wrap').fadeOut(800);
  $('main').fadeIn();
  },2000);
})
	</script>

</html>
