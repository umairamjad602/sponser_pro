<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('front-end/sponser-favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('front-end/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/css/home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>

    <title>{{ env('APP_NAME') }}</title>
</head>

<body>
    <!-- login-popup -->
    <div id="login" class="popup-overlay">
        <div class="popup">
            <div class="row  m-0">

                <div class="col-lg-7 col-sm-12 popup-col-1 d-flex justify-content-center align-items-center"
                    style="background-image: url({{ asset('front-end/images/heroBg.png') }});">
                    <img src="{{ asset('front-end/images/logo.png') }}" class="img-fluid text-center" alt="">

                </div>
                <div class="col-lg-5 col-sm-12 popup-col-2 ">
                    <a class="close" href="#">&times;</a>

                    <a class="button btn bg-green-btn" href="#login">login</a>
                    <a class="  button btn btn-without-bg mx-3" href="#register">Registration </a>
                    <h3 class="mt-5">
                        WELCOME
                    </h3>
                    <h4>
                        Please login to your account
                    </h4>
                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    @if (session('verification-error'))
                        <div class="alert alert-danger">{{ session('verification-error') }}</div>
                    @endif


                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" id="email" aria-describedby="emailHelp" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" id="password" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <p class="psw "> <a href="#">Forgot password?</a></p>
                        <div class="">
                            <button type="submit" class="btn text-center bg-green-btn mb-3">SIGN IN<i
                                    class="fa-solid fa-circle-chevron-right " style="margin-left:15px;"></i></button>
                        </div>

                    </form>
                    <p>- OR -</p>
                    <div class="d-flex" style="margin-bottom: 20px;">
                        <a class="btn button google-btn"><img
                                src="{{ asset('front-end/images/icons8-google-48.png') }}" class="img-fluid ">Login
                            with Google</a>
                        <a class="btn button fb-btn"><i class="fa-brands fa-facebook-f px-2"></i>Login with
                            Facebaook</a>
                    </div>

                    <p class="text-center ">Terms and Conditions & Privacy Policy</p>


                </div>

            </div>

        </div>
    </div>


    <!-- registration -->
    <div id="register" class="popup-overlay">
        <div class="popup">
            <div class="row  m-0">

                <div class="col-lg-7 col-sm-12 popup-col-1 d-flex justify-content-center align-items-center"
                    style="background-image: url({{ asset('front-end/images/heroBg.png') }});">
                    <img src="{{ asset('front-end/images/logo.png') }}" class="img-fluid text-center" alt="">

                </div>
                <div class="col-lg-5 col-sm-12 popup-col-2 ">
                    <a class="close" href="#">&times;</a>

                    <a class="button btn btn-without-bg " href="#login">login</a>
                    <a class="  button btn  mx-3 bg-green-btn" href="#register">Registration </a>
                    <h3 class="mt-5">
                        WELCOME
                    </h3>
                    @if(Session::get('resgiter') == true)
                    <div class="alert alert-success" id="user-done" role="alert">
                        You have resgister successfully. When admin <b>Approve</b> or <b>Reject</b> your account will inform you by given email.
                    </div>
                    <p style="display: none;">
                        {{Session::remove('resgiter')}}
                    </p>
                    @endif
                    <h4>
                        Please signup to your account
                    </h4>
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <form method="POST" action="{{ url('resgter-user') }}">
                        @csrf

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="is_athlete" id="inlineRadio1"
                                value="0" required @if (old('is_athlete') == '0') checked @endif>
                            <label class="form-check-label" for="inlineRadio1">BRAND</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="is_athlete" id="inlineRadio2"
                                value="1" @if (old('is_athlete') == '1') checked @endif>
                            <label class="form-check-label" for="inlineRadio2">ATHLETE</label>
                        </div>

                        @error('is_athlete')
                            <div class="d-flex">
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            </div>
                        @enderror

                        <div class="d-flex ">
                            <div class="mb-2 " style="margin-right: 10px;">
                                <label for="first_name" class="form-label">Name</label>
                                <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                                    name="first_name" id="first_name" value="{{ old('first_name') }}" required>
                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                    name="last_name" id="last_name" value="{{ old('last_name') }}" required>
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-2">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" id="email" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" id="password" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <p class="psw "> <a href="#login">Already have an account? Log in</a></p>
                        <div class="">
                            <button type="submit" class="btn text-center bg-green-btn mb-3">SIGN UP<i
                                    class="fa-solid fa-circle-chevron-right px-1"
                                    style="margin-left:15px;"></i></button>
                        </div>

                    </form>
                    <p>- OR -</p>
                    <div class="d-flex" style="margin-bottom: 20px;">
                        <a class="btn button google-btn"><img
                                src="{{ asset('front-end/images/icons8-google-48.png') }}" class="img-fluid ">Login
                            with Google</a>
                        <a class="btn button fb-btn"><i class="fa-brands fa-facebook-f px-2"></i>Login with
                            Facebaook</a>
                    </div>

                    <p class="text-center ">Terms and Conditions & Privacy Policy</p>


                </div>

            </div>

        </div>
    </div>




    <!-- header -->
    <div style="background-image: url({{ asset('front-end/images/Sponser\ Pro.png') }});"
        class="hero-header-bg main-header">
        <header>

            <div class="container ">
                <nav class="navbar navbar-expand-lg ">

                    <a class="navbar-brand" href="#"><img src="{{ asset('front-end/images/logo.png') }}"
                            alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarScroll">
                        <ul class="navbar-nav  my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">


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
                        <h2>For all businesses and college athletes
                        </h2>
                        <h1 class="">GROW WITH SPONSORPRO</h1>
                        <p>Build partnerships locally and nationally while <br> monetizing your NIL.</p>
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
                    <h4>Opportunities for businesses of all sizes</h4>
                    <h3>SponsorPro makes it easy and affordable to connect with athletes.
                    </h3>
                    <button class="btn p-0"> For Brands <i class="fa-solid fa-caret-right"></i></button>
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

                <div class="col-md-6 col-sm-12 ">
                    <p>Partner with local and national businesses</p>
                    <h2 class="main-heading">Cash in on your NIL today!</h2>


                    <div class="accordion my-5" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item my-3">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseOne">
                                    College Athletes
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    <p> We’re FREE for all college athletes.</p>
                                    <button class="btn bg-green-btn">Learn more <i
                                            class="fa-solid fa-arrow-up"></i></button>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item  my-3">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseTwo">
                                    Brands

                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                    <p> Expand your customer base and grow your business.</p>
                                    <button class="btn bg-green-btn">Learn more <i
                                            class="fa-solid fa-arrow-up"></i></button>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-md-6 col-sm-12">
                    <img src="{{ asset('front-end/images/Frame 6356139.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>

    </div>

    <!-- case studies -->
    <div class="container-fluid carosel-sec sec-space">
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
                <div class="col-md-4 col-sm-12">
                    <img src="{{ asset('front-end/images/carousel-img.png') }}" alt="" class="img-fluid">

                </div>
            </div>
        </div>
    </div>

    <!-- download our app -->
    <div class="container-fluid download-app sec-space text-center"
        style=" background-image: url('images/Rectangle 3.png');">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script>
        // $(document).ready(function () {
        //     $('#user-done').hide();
        //     console.log(location.href);
        //     if (location.href.includes("resgiter=true")) {
        //         $('#user-done').show();
        //     }
        // })
    </script>

</body>

</html>
