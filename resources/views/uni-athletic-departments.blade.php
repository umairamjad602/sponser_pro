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
    <div style="background-image: url({{ asset('front-end/images/uni-athletic.png') }});"
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
                                    <li><a class="dropdown-item" href="#">COLLEGE ATHLETES</a></li>
                                    <li><a class="dropdown-item" href="#">PROFESSIONAL ATHLETES</a></li>
                                    <li><a class="dropdown-item" href="#">UNIVERSITIES & ATHLETIC DEPARTMENTS</a></li>
                                    <li><a class="dropdown-item" href="{{url('brands')}}">BRANDS</a></li>
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
                        <h2><span style="color:white;">HOW IT WORKS ></span>   UNIVERSITIES & ATHLETIC DEPARTMENTS
                        </h2>
                        <h1 class="">Free Insights Into Deals Made by <br> Your Student Athletes</h1>
                        <p>Maintain regulatory compliance while boosting recruitment <br> opportunities with Icon Suite.</p>
                        <a href="" class="btn  bg-green-btn d-flex align-items-center my-2" type="button" style="width:250px;">
										<div class="text-start">UNIVERSITY SIGN UP</div>
										<div class="ms-auto d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

									</a>

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
                <div class="col-md-8 col-sm-12">
                    <h4>What do you want to learn ?</h4>
                    <h3>Only 10% of Students Disclose Their NIL Deals. See Them All with Icon Source.

                    </h3>
                   
                </div>
                <div class="col-md-4 col-sm-12 d-flex justify-content-end">
                <img src="{{ asset('front-end/images/triangle-vector.png') }}" alt="" class="img-fluid ">

                </div>

            </div>

        </div>
    </div>

    <!-- portal-setup -->

    <div class="container-fluid sec-space how-it-works-img-text-col" style=" background-image: url({{ asset('front-end/images/01.png') }});">
        <div class="container">
            <div class="row g-5 d-flex align-items-center justify-content-center" >

                <div class="col-lg-6 col-12 " >
                    <h2 class="pb-2">Portal Set Up</h2>
                  <p>Sign up and get access to Icon Suite, your university-branded portal. Maintain NCAA NIL compliance by viewing all student athlete contracts in real time and in one location.</p>
                   <a href="" class="btn  bg-green-btn d-flex align-items-center" type="button" style="width:200px;">
										<div class="text-start">SIGN UP</div>
										<div class="ms-auto d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

									</a>
                   

                </div>
                <div class="col-lg-6 col-12">
                    <img src="{{ asset('front-end/images/creat-account.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>

    </div>
      <!-- continues-monitoring -->

      <div class="container-fluid sec-space how-it-works-img-text-col " style=" background-image: url({{ asset('front-end/images/02.png') }}); background-position:top center;">
        <div class="container">
            <div class="row g-5 d-flex align-items-center justify-content-center" >
            <div class="col-lg-6 col-12">
                    <img src="{{ asset('front-end/images/monitoring.png') }}" alt="" class="img-fluid">
                </div>

                <div class="col-lg-6 col-12 ">
                    <h2 class="pb-2">Continuous Monitoring</h2>
                  <p>Avoid mishaps with NCAA recruiting rules and maintain NCAA NIL compliance by monitoring current endorsement opportunities in real time, as well as seeing potential sponsorship opportunities.</p>

                   

                </div>
               
            </div>
        </div>

    </div>
     <!-- Leveraging Data -->

      <div class="container-fluid sec-space how-it-works-img-text-col " style=" background-image: url({{ asset('front-end/images/03.png') }});">
        <div class="container">
            <div class="row g-5 d-flex align-items-center justify-content-center">

                <div class="col-lg-6 col-12 ">
                    <h2 class="pb-2">Leveraging Data</h2>
                <p>Empower your athletic department by giving them an NIL deal analytics application that allows them to improve recruiting year over year and have the data to boost department funding.</p>


                   

                </div>
                <div class="col-lg-6 col-12">
                    <img src="{{ asset('front-end/images/sign-execute.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid  sec-space " style=" background-image: url({{ asset('front-end/images/light-green-bg.png') }});">
        <div class="container">
           <div class="row g-5 ">
              <div class="col-12 ">
                    <p>UNIVERSITIES & ATHLETIC DEPARTMENTS</p>
                    <h2 class="main-heading">An NIL Deal Reporting Application That’s <br>
Putting Schools in the Game</h2>
                </div>
            <div class="col-md-4 text-center how-it-works-cards-bg" style=" background-image: url({{ asset('front-end/images/green-vector.png') }});">
            <div class="how-it-works-cards">

            <img src="{{ asset('front-end/images/data.png') }}" alt="" class="img-fluid mb-3">
            <h6>Data</h6>
            <p>Free access via website or mobile app. Our app has an intuitive design for maximum ease of use.</p>
            </div>
            </div>
            <div class="col-md-4 text-center  how-it-works-cards-bg" style=" background-image: url({{ asset('front-end/images/sky-vector.png') }});">
            <div class="how-it-works-cards">
            <img src="{{ asset('front-end/images/transparency.png') }}" alt="" class="img-fluid mb-3">
            <h6>Transparency</h6>
            <p>No algorithms or backdoors here. All users are screened thoroughly, ensuring equal opportunity for everyone on our platform.</p>
            </div>
        </div>
            <div class="col-md-4 text-center  how-it-works-cards-bg" style=" background-image: url({{ asset('front-end/images/green-vector.png') }});">
            <div class="how-it-works-cards">
            <img src="{{ asset('front-end/images/independence.png') }}" alt="" class="img-fluid mb-3">
            <h6>Independence</h6>
            <p>Once schools are up and running on our platform, they can use their white-labeled platform how they wish.</p>
            </div>
            </div>
           
           
           </div>
        </div>
    </div>
   <div class="container-fluid " style="background-color:#FAFFF6;">
    <div class="container">
 <div class="row " >
        <div class="col-12 d-flex justify-content-center">
            <img src="{{ asset('front-end/images/video-img.png') }}" alt="" class="img-fluid ">
            </div>
        </div>
    </div>
   </div>

     <!-- case studies -->
     <div class="container-fluid carosel-sec bg-white sec-space">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <p>CASE STUDIES</p>
                <h2 class="proud-heading">PROUD PARTNERS WITH
                </h2>
                <div class="col-md-8 col-sm-12">
                    <div class="d-flex align-items-center py-5 ">

                        <div class="container">
                            <div id="mycarousel" class="carousel slide" data-bs-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-bs-target="#mycarousel" data-bs-slide-to="0" class="active"></li>
                                    <li data-bs-target="#mycarousel" data-bs-slide-to="1"></li>
                                    <li data-bs-target="#mycarousel" data-bs-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-lg-6 ">
                                                <img src="{{ asset('front-end/images/unsplash_MTZTGvDsHFY.png') }}"
                                                    class="d-block w-100 img-fluid" alt="...">

                                            </div>
                                            <div class="col-lg-6 py-3">
                                                <div class=" d-flex flex-column justify-content-center  px-3">
                                                    <h6>The Players’ Lounge</h6>
                                                    <p>Crocs wanted to leverage athlete influencer marketing to
                                                        emphasize the universality of their footwear. With Icon Source,
                                                        they quickly found five athletes who fit their campaigns in a
                                                        pool of over 400,000</p>
                                                    <div class="row">
                                                        <div class="col-6 d-flex">
                                                            <img src="{{ asset('front-end/images/VideoCamera.png') }}"
                                                                alt="">
                                                            <span>
                                                                <p><strong>7.6M</strong></p>
                                                                <p>IMPRESSIONS</p>
                                                            </span>
                                                        </div>
                                                        <div class="col-6 d-flex">
                                                            <img src="{{ asset('front-end/images/VideoCamera (1).png') }}"
                                                                alt="">
                                                            <span>
                                                                <p><strong>369k</strong></p>
                                                                <p>ENGAGEMENTS</p>
                                                            </span>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-lg-6 ">
                                                <img src="{{ asset('front-end/images/unsplash_MTZTGvDsHFY.png') }}"
                                                    class="d-block w-100 img-fluid" alt="...">

                                            </div>
                                            <div class="col-lg-6 py-3">
                                                <div class=" d-flex flex-column justify-content-center  px-3">
                                                    <h6>The Players’ Lounge</h6>
                                                    <p>Crocs wanted to leverage athlete influencer marketing to
                                                        emphasize the universality of their footwear. With Icon Source,
                                                        they quickly found five athletes who fit their campaigns in a
                                                        pool of over 400,000</p>
                                                    <div class="row">
                                                        <div class="col-6 d-flex">
                                                            <img src="{{ asset('front-end/images/VideoCamera.png') }}"
                                                                alt="">
                                                            <span>
                                                                <p><strong>7.6M</strong></p>
                                                                <p>IMPRESSIONS</p>
                                                            </span>
                                                        </div>
                                                        <div class="col-6 d-flex">
                                                            <img src="{{ asset('front-end/images/VideoCamera (1).png') }}"
                                                                alt="">
                                                            <span>
                                                                <p><strong>369k</strong></p>
                                                                <p>ENGAGEMENTS</p>
                                                            </span>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-lg-6 ">
                                                <img src="{{ asset('front-end/images/unsplash_MTZTGvDsHFY.png') }}"
                                                    class="d-block w-100 img-fluid" alt="...">

                                            </div>
                                            <div class="col-lg-6 py-3 ">
                                                <div class=" d-flex flex-column justify-content-center  px-3">
                                                    <h6>The Players’ Lounge</h6>
                                                    <p>Crocs wanted to leverage athlete influencer marketing to
                                                        emphasize the universality of their footwear. With Icon Source,
                                                        they quickly found five athletes who fit their campaigns in a
                                                        pool of over 400,000</p>
                                                    <div class="row">
                                                        <div class="col-6 d-flex">
                                                            <img src="{{ asset('front-end/images/VideoCamera.png') }}"
                                                                alt="">
                                                            <span>
                                                                <p><strong>7.6M</strong></p>
                                                                <p>IMPRESSIONS</p>
                                                            </span>
                                                        </div>
                                                        <div class="col-6 d-flex">
                                                            <img src="{{ asset('front-end/images/VideoCamera (1).png') }}"
                                                                alt="">
                                                            <span>
                                                                <p><strong>369k</strong></p>
                                                                <p>ENGAGEMENTS</p>
                                                            </span>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-md-4 col-sm-12 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('front-end/images/testi-white.png') }}" alt="" class="img-fluid">

                </div>
            </div>
        </div>
    </div>

    <!-- download our app -->
    <div class="container-fluid download-app sec-space text-center"
        style=" background-image: url({{ asset('front-end/images/how-it-works-download.png') }});">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-12">
                    <h6 class="mb-3">DOWNLOAD OUR APP</h6>
                    <h2 class="mb-5">With Icon Source, Deals are a Game <br>
                      <span style="color:#65FF00;">You’ve Already Won</span></h2>
                    <span class="d-md-flex justify-content-center "> <a href="" class="btn  bg-green-btn d-flex align-items-center mx-auto mx-md-3 my-2" type="button" style="width:250px;">
										<div class="text-start">CREATE AN ACCOUNT</div>
										<div class="ms-auto d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

									</a>
                                    <a href="" class="btn  border-white-btn d-flex align-items-center mx-auto mx-md-3 my-2" type="button" style="width:250px;">
										<div class="text-start">COLLEGE NIL INFO</div>
										<div class="ms-auto d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

									</a>
                        
                                </span>
                </div>
            </div>
        </div>
    </div>

    <!-- faqs -->
    <div class="container-fluid sec-space accor-sec">
        <div class="container">
            <div class="row gx-5 d-flex align-items-center justify-content-center">

                <div class="col-md-6 col-sm-12 ">
                    <h2 class="">FAQs</h2>


                    <div class="accordion my-5" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item my-3">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseOne">
                                    Can college athletes be paid?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    <p>As of the summer of 2021, collegiate athletes are able to be compensated for their Name, Image, and Likenesses. Read everything you need to know about collegiate NIL rules here.</p>
                                   

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item  my-3">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseTwo">
                                    What is the role of NIL in college sports?

                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                    <p> Expand your customer base and grow your business.</p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item  my-3">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseThree">
                                    What states do you support for NIL?

                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body">
                                    <p> Expand your customer base and grow your business.</p>
                                   
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-md-6 col-sm-12">
                    <img src="{{ asset('front-end/images/faqs.png') }}" alt="" class="img-fluid">
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
