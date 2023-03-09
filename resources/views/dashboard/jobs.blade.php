@extends('layouts.dashboard')
@section('style')
@endsection
@section('content')
    <div class="row title-row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto mt-0">
            <h1 class="app-page-title mb-0">JOBS </h1>
        </div>
        <div class="col-auto mt-0">
            <div class="page-utilities">
                <div class="row g-2 justify-content-start justify-content-md-end align-items-center">

                    <div class="app-search-box col-auto">
                        <form class="app-search-form docs-search">
                            <input type="text" placeholder="job title, keywords" name="search"
                                class="form-control search-input">
                            <button type="submit" class="btn search-btn btn-primary" value="Search"><i
                                    class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <!--//app-search-box-->

                    <div class="col-auto ">

                        <select class="form-select w-auto ">
                            <option selected="" value="option-1">All payment mode</option>
                            <option value="option-2">1</option>
                            <option value="option-3">2</option>
                            <option value="option-4">3</option>
                            <option value="option-5">4</option>
                            <option value="option-6">5</option>

                        </select>
                    </div>
                    <div class="col-auto ">

                        <select class="form-select w-auto ">
                            <option selected="" value="option-1">$ Min Price - $ Max Price</option>
                            <option value="option-2">1</option>
                            <option value="option-3">2</option>
                            <option value="option-4">3</option>
                            <option value="option-5">4</option>
                            <option value="option-6">5</option>

                        </select>
                    </div>
                    <div class=" col-auto">
                        <form class="app-search-form docs-search">
                            <input type="text" placeholder="location" name="search" class="form-control search-input">
                            <button type="submit" class="btn search-btn btn-primary" value="Search"><img
                                    src="{{ asset('front-end/assets//images/location-icon.png') }}" alt=""
                                    style="width:20px;"></button>
                        </form>
                    </div>
                    <!--//location-search-box-->
                    <div class=" col-auto">
                        <a href="#"><img src="{{ asset('front-end/assets//images/right-rotate.png') }}"
                                alt=""></a>
                    </div>
                    <!--//-->
                    <div class=" col-auto">
                        <a href="#"><img src="{{ asset('front-end/assets//images/login.png') }}" alt=""></a>
                    </div>
                    <!--//login-->

                </div>
                <!--//row-->
            </div>
            <!--//table-utilities-->
        </div>
        <!--//col-auto-->
    </div>
    <!--//row-->

    <div class="row g-3 job-sec">
        <div class="row py-3">
            <div class="col-auto">
                <h1 class="app-page-sub-title  mb-0"> ALL JOBS </h1>
            </div>
            <div class="col-auto ">

                <select class="form-select w-auto ">
                    <option selected="" value="option-1">Filter</option>
                    <option value="option-2">1</option>
                    <option value="option-3">2</option>
                    <option value="option-4">3</option>
                    <option value="option-5">4</option>
                    <option value="option-6">5</option>

                </select>
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-3 col-xxl-3">
            <div class="app-card app-card-doc shadow-sm h-100">
                <div class="app-card-body p-4 ">
                    <div class="row  py-1">
                        <div class="col-3 p-0"><a href="#"><img
                                    src="{{ asset('front-end/assets//images/job-user.png') }}" alt=""
                                    class="img-fluid "></a></div>
                        <div class="col-9">
                            <div>
                                <a href="#">
                                    <h6>Courtney Henry</h6>
                                </a>
                                <p>Share Your Story with 10-10 Media for $$$</p>
                            </div>
                        </div>

                    </div>


                    <div class="row d-flex py-1">
                        <div class="col-9">
                            <p>Share Your Story with 10-10 Media for $$$</p>
                        </div>
                        <div class="col-3 " style="text-align: end;"><a href="#"><img
                                    src="{{ asset('front-end/assets//images/job-story.png') }}" alt=""></a></div>
                    </div>

                    <div class="row py-1 mb-3">
                        <div class="col-auto categori my-1"><a href="">
                                <p>indoor Coaching</p>
                            </a></div>
                        <div class="col-auto categori my-1"><a href="">
                                <p>outdoor Coaching</p>
                            </a></div>

                    </div>

                    <div class="row py-1">
                        <div class="col-8 text-dark">
                            <p class="location-text"><img src="{{ asset('front-end/assets//images/location-icon.png') }}"
                                    alt="" style="width:30px;">Location N/A
                            </p>
                        </div>
                        <div class="col-4 " style="text-align: end;">
                            <p class="price me-auto">$ 200</p>
                        </div>

                    </div>

                    <div class="row py-1">
                        <button class="btn view-job-btn mb-3" style="text-align: start;">view job <i
                                class="fa-solid fa-circle-chevron-right"
                                style="font-size:25px; position: absolute; right: 25px;"></i></button>
                        <button class="btn view-profile-btn" style="text-align: start;">View profile <i
                                class="fa-solid fa-circle-chevron-right"
                                style="font-size:25px; position: absolute; right: 25px;"></i></button>

                    </div>


                </div>
                <!--//app-card-body-->

            </div>
            <!--//app-card-->
        </div>
        <!--//col-->
        <div class="col-12 col-md-6 col-xl-3 col-xxl-3">
            <div class="app-card app-card-doc shadow-sm h-100">
                <div class="app-card-body p-4 ">
                    <div class="row  py-1">
                        <div class="col-3 p-0"><a href="#"><img
                                    src="{{ asset('front-end/assets//images/job-user.png') }}" alt=""
                                    class="img-fluid "></a></div>
                        <div class="col-9">
                            <div>
                                <a href="#">
                                    <h6>Courtney Henry</h6>
                                </a>
                                <p>Share Your Story with 10-10 Media for $$$</p>
                            </div>
                        </div>

                    </div>


                    <div class="row d-flex py-1">
                        <div class="col-9">
                            <p>Share Your Story with 10-10 Media for $$$</p>
                        </div>
                        <div class="col-3 " style="text-align: end;"><a href="#"><img
                                    src="{{ asset('front-end/assets//images/job-story.png') }}" alt=""></a></div>
                    </div>

                    <div class="row py-1 mb-3">
                        <div class="col-auto categori my-1"><a href="">
                                <p>indoor Coaching</p>
                            </a></div>
                        <div class="col-auto categori my-1"><a href="">
                                <p>outdoor Coaching</p>
                            </a></div>

                    </div>

                    <div class="row py-1">
                        <div class="col-8 text-dark">
                            <p class="location-text"><img src="{{ asset('front-end/assets//images/location-icon.png') }}"
                                    alt="" style="width:30px;">Location N/A
                            </p>
                        </div>
                        <div class="col-4 " style="text-align: end;">
                            <p class="price me-auto">$ 200</p>
                        </div>

                    </div>

                    <div class="row py-1">
                        <button class="btn view-job-btn mb-3" style="text-align: start;">view job <i
                                class="fa-solid fa-circle-chevron-right"
                                style="font-size:25px; position: absolute; right: 25px;"></i></button>
                        <button class="btn view-profile-btn" style="text-align: start;">View profile <i
                                class="fa-solid fa-circle-chevron-right"
                                style="font-size:25px; position: absolute; right: 25px;"></i></button>

                    </div>


                </div>
                <!--//app-card-body-->

            </div>
            <!--//app-card-->
        </div>
        <!--//col-->
        <div class="col-12 col-md-6 col-xl-3 col-xxl-3">
            <div class="app-card app-card-doc shadow-sm h-100">
                <div class="app-card-body p-4 ">
                    <div class="row  py-1">
                        <div class="col-3 p-0"><a href="#"><img
                                    src="{{ asset('front-end/assets//images/job-user.png') }}" alt=""
                                    class="img-fluid "></a></div>
                        <div class="col-9">
                            <div>
                                <a href="#">
                                    <h6>Courtney Henry</h6>
                                </a>
                                <p>Share Your Story with 10-10 Media for $$$</p>
                            </div>
                        </div>

                    </div>


                    <div class="row d-flex py-1">
                        <div class="col-9">
                            <p>Share Your Story with 10-10 Media for $$$</p>
                        </div>
                        <div class="col-3 " style="text-align: end;"><a href="#"><img
                                    src="{{ asset('front-end/assets//images/job-story.png') }}" alt=""></a></div>
                    </div>

                    <div class="row py-1 mb-3">
                        <div class="col-auto categori my-1"><a href="">
                                <p>indoor Coaching</p>
                            </a></div>
                        <div class="col-auto categori my-1"><a href="">
                                <p>outdoor Coaching</p>
                            </a></div>

                    </div>

                    <div class="row py-1">
                        <div class="col-8 text-dark">
                            <p class="location-text"><img src="{{ asset('front-end/assets//images/location-icon.png') }}"
                                    alt="" style="width:30px;">Location N/A
                            </p>
                        </div>
                        <div class="col-4 " style="text-align: end;">
                            <p class="price me-auto">$ 200</p>
                        </div>

                    </div>

                    <div class="row py-1">
                        <button class="btn view-job-btn mb-3" style="text-align: start;">view job <i
                                class="fa-solid fa-circle-chevron-right"
                                style="font-size:25px; position: absolute; right: 25px;"></i></button>
                        <button class="btn view-profile-btn" style="text-align: start;">View profile <i
                                class="fa-solid fa-circle-chevron-right"
                                style="font-size:25px; position: absolute; right: 25px;"></i></button>

                    </div>


                </div>
                <!--//app-card-body-->

            </div>
            <!--//app-card-->
        </div>
        <!--//col-->
        <div class="col-12 col-md-6 col-xl-3 col-xxl-3">
            <div class="app-card app-card-doc shadow-sm h-100">
                <div class="app-card-body p-4 ">
                    <div class="row  py-1">
                        <div class="col-3 p-0"><a href="#"><img
                                    src="{{ asset('front-end/assets//images/job-user.png') }}" alt=""
                                    class="img-fluid "></a></div>
                        <div class="col-9">
                            <div>
                                <a href="#">
                                    <h6>Courtney Henry</h6>
                                </a>
                                <p>Share Your Story with 10-10 Media for $$$</p>
                            </div>
                        </div>

                    </div>


                    <div class="row d-flex py-1">
                        <div class="col-9">
                            <p>Share Your Story with 10-10 Media for $$$</p>
                        </div>
                        <div class="col-3 " style="text-align: end;"><a href="#"><img
                                    src="{{ asset('front-end/assets//images/job-story.png') }}" alt=""></a></div>
                    </div>

                    <div class="row py-1 mb-3">
                        <div class="col-auto categori my-1"><a href="">
                                <p>indoor Coaching</p>
                            </a></div>
                        <div class="col-auto categori my-1"><a href="">
                                <p>outdoor Coaching</p>
                            </a></div>

                    </div>

                    <div class="row py-1">
                        <div class="col-8 text-dark">
                            <p class="location-text"><img src="{{ asset('front-end/assets//images/location-icon.png') }}"
                                    alt="" style="width:30px;">Location N/A
                            </p>
                        </div>
                        <div class="col-4 " style="text-align: end;">
                            <p class="price me-auto">$ 200</p>
                        </div>

                    </div>

                    <div class="row py-1">
                        <button class="btn view-job-btn mb-3" style="text-align: start;">view job <i
                                class="fa-solid fa-circle-chevron-right"
                                style="font-size:25px; position: absolute; right: 25px;"></i></button>
                        <button class="btn view-profile-btn" style="text-align: start;">View profile <i
                                class="fa-solid fa-circle-chevron-right"
                                style="font-size:25px; position: absolute; right: 25px;"></i></button>

                    </div>


                </div>
                <!--//app-card-body-->

            </div>
            <!--//app-card-->
        </div>
        <!--//col-->
        <div class="col-12 col-md-6 col-xl-3 col-xxl-3">
            <div class="app-card app-card-doc shadow-sm h-100">
                <div class="app-card-body p-4 ">
                    <div class="row  py-1">
                        <div class="col-3 p-0"><a href="#"><img
                                    src="{{ asset('front-end/assets//images/job-user.png') }}" alt=""
                                    class="img-fluid "></a></div>
                        <div class="col-9">
                            <div>
                                <a href="#">
                                    <h6>Courtney Henry</h6>
                                </a>
                                <p>Share Your Story with 10-10 Media for $$$</p>
                            </div>
                        </div>

                    </div>


                    <div class="row d-flex py-1">
                        <div class="col-9">
                            <p>Share Your Story with 10-10 Media for $$$</p>
                        </div>
                        <div class="col-3 " style="text-align: end;"><a href="#"><img
                                    src="{{ asset('front-end/assets//images/job-story.png') }}" alt=""></a></div>
                    </div>

                    <div class="row py-1 mb-3">
                        <div class="col-auto categori my-1"><a href="">
                                <p>indoor Coaching</p>
                            </a></div>
                        <div class="col-auto categori my-1"><a href="">
                                <p>outdoor Coaching</p>
                            </a></div>

                    </div>

                    <div class="row py-1">
                        <div class="col-8 text-dark">
                            <p class="location-text"><img src="{{ asset('front-end/assets//images/location-icon.png') }}"
                                    alt="" style="width:30px;">Location N/A
                            </p>
                        </div>
                        <div class="col-4 " style="text-align: end;">
                            <p class="price me-auto">$ 200</p>
                        </div>

                    </div>

                    <div class="row py-1">
                        <button class="btn view-job-btn mb-3" style="text-align: start;">view job <i
                                class="fa-solid fa-circle-chevron-right"
                                style="font-size:25px; position: absolute; right: 25px;"></i></button>
                        <button class="btn view-profile-btn" style="text-align: start;">View profile <i
                                class="fa-solid fa-circle-chevron-right"
                                style="font-size:25px; position: absolute; right: 25px;"></i></button>

                    </div>


                </div>
                <!--//app-card-body-->

            </div>
            <!--//app-card-->
        </div>
        <!--//col-->
        <div class="col-12 col-md-6 col-xl-3 col-xxl-3">
            <div class="app-card app-card-doc shadow-sm h-100">
                <div class="app-card-body p-4 ">
                    <div class="row  py-1">
                        <div class="col-3 p-0"><a href="#"><img
                                    src="{{ asset('front-end/assets//images/job-user.png') }}" alt=""
                                    class="img-fluid "></a></div>
                        <div class="col-9">
                            <div>
                                <a href="#">
                                    <h6>Courtney Henry</h6>
                                </a>
                                <p>Share Your Story with 10-10 Media for $$$</p>
                            </div>
                        </div>

                    </div>


                    <div class="row d-flex py-1">
                        <div class="col-9">
                            <p>Share Your Story with 10-10 Media for $$$</p>
                        </div>
                        <div class="col-3 " style="text-align: end;"><a href="#"><img
                                    src="{{ asset('front-end/assets//images/job-story.png') }}" alt=""></a></div>
                    </div>

                    <div class="row py-1 mb-3">
                        <div class="col-auto categori my-1"><a href="">
                                <p>indoor Coaching</p>
                            </a></div>
                        <div class="col-auto categori my-1"><a href="">
                                <p>outdoor Coaching</p>
                            </a></div>

                    </div>

                    <div class="row py-1">
                        <div class="col-8 text-dark">
                            <p class="location-text"><img
                                    src="{{ asset('front-end/front-end/assets//images/location-icon.png') }}"
                                    alt="" style="width:30px;">Location N/A
                            </p>
                        </div>
                        <div class="col-4 " style="text-align: end;">
                            <p class="price me-auto">$ 200</p>
                        </div>

                    </div>

                    <div class="row py-1">
                        <button class="btn view-job-btn mb-3" style="text-align: start;">view job <i
                                class="fa-solid fa-circle-chevron-right"
                                style="font-size:25px; position: absolute; right: 25px;"></i></button>
                        <button class="btn view-profile-btn" style="text-align: start;">View profile <i
                                class="fa-solid fa-circle-chevron-right"
                                style="font-size:25px; position: absolute; right: 25px;"></i></button>

                    </div>


                </div>
                <!--//app-card-body-->

            </div>
            <!--//app-card-->
        </div>
        <!--//col-->
        <div class="col-12 col-md-6 col-xl-3 col-xxl-3">
            <div class="app-card app-card-doc shadow-sm h-100">
                <div class="app-card-body p-4 ">
                    <div class="row  py-1">
                        <div class="col-3 p-0"><a href="#"><img
                                    src="{{ asset('front-end/assets//images/job-user.png') }}" alt=""
                                    class="img-fluid "></a></div>
                        <div class="col-9">
                            <div>
                                <a href="#">
                                    <h6>Courtney Henry</h6>
                                </a>
                                <p>Share Your Story with 10-10 Media for $$$</p>
                            </div>
                        </div>

                    </div>


                    <div class="row d-flex py-1">
                        <div class="col-9">
                            <p>Share Your Story with 10-10 Media for $$$</p>
                        </div>
                        <div class="col-3 " style="text-align: end;"><a href="#"><img
                                    src="{{ asset('front-end/assets//images/job-story.png') }}" alt=""></a></div>
                    </div>

                    <div class="row py-1 mb-3">
                        <div class="col-auto categori my-1"><a href="">
                                <p>indoor Coaching</p>
                            </a></div>
                        <div class="col-auto categori my-1"><a href="">
                                <p>outdoor Coaching</p>
                            </a></div>

                    </div>

                    <div class="row py-1">
                        <div class="col-8 text-dark">
                            <p class="location-text"><img src="{{ asset('front-end/assets//images/location-icon.png') }}"
                                    alt="" style="width:30px;">Location N/A
                            </p>
                        </div>
                        <div class="col-4 " style="text-align: end;">
                            <p class="price me-auto">$ 200</p>
                        </div>

                    </div>

                    <div class="row py-1">
                        <button class="btn view-job-btn mb-3" style="text-align: start;">view job <i
                                class="fa-solid fa-circle-chevron-right"
                                style="font-size:25px; position: absolute; right: 25px;"></i></button>
                        <button class="btn view-profile-btn" style="text-align: start;">View profile <i
                                class="fa-solid fa-circle-chevron-right"
                                style="font-size:25px; position: absolute; right: 25px;"></i></button>

                    </div>


                </div>
                <!--//app-card-body-->

            </div>
            <!--//app-card-->
        </div>
        <!--//col-->
        <div class="col-12 col-md-6 col-xl-3 col-xxl-3">
            <div class="app-card app-card-doc shadow-sm h-100">
                <div class="app-card-body p-4 ">
                    <div class="row  py-1">
                        <div class="col-3 p-0"><a href="#"><img
                                    src="{{ asset('front-end/assets//images/job-user.png') }}" alt=""
                                    class="img-fluid "></a></div>
                        <div class="col-9">
                            <div>
                                <a href="#">
                                    <h6>Courtney Henry</h6>
                                </a>
                                <p>Share Your Story with 10-10 Media for $$$</p>
                            </div>
                        </div>

                    </div>


                    <div class="row d-flex py-1">
                        <div class="col-9">
                            <p>Share Your Story with 10-10 Media for $$$</p>
                        </div>
                        <div class="col-3 " style="text-align: end;"><a href="#"><img
                                    src="{{ asset('front-end/assets//images/job-story.png') }}" alt=""></a></div>
                    </div>

                    <div class="row py-1 mb-3">
                        <div class="col-auto categori my-1"><a href="">
                                <p>indoor Coaching</p>
                            </a></div>
                        <div class="col-auto categori my-1"><a href="">
                                <p>outdoor Coaching</p>
                            </a></div>

                    </div>

                    <div class="row py-1">
                        <div class="col-8 text-dark">
                            <p class="location-text"><img src="{{ asset('front-end/assets//images/location-icon.png') }}"
                                    alt="" style="width:30px;">Location N/A
                            </p>
                        </div>
                        <div class="col-4 " style="text-align: end;">
                            <p class="price me-auto">$ 200</p>
                        </div>

                    </div>

                    <div class="row py-1">
                        <button class="btn view-job-btn mb-3" style="text-align: start;">view job <i
                                class="fa-solid fa-circle-chevron-right"
                                style="font-size:25px; position: absolute; right: 25px;"></i></button>
                        <button class="btn view-profile-btn" style="text-align: start;">View profile <i
                                class="fa-solid fa-circle-chevron-right"
                                style="font-size:25px; position: absolute; right: 25px;"></i></button>

                    </div>


                </div>
                <!--//app-card-body-->

            </div>
            <!--//app-card-->
        </div>
        <!--//col-->









    </div>
    <!--//row-->
    <!-- <nav class="app-pagination mt-5">
                 <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                   <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                 </li>
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                  </li>
                 </ul>
                </nav> -->


    <!--//app-pagination-->
@endsection
@section('script')
@endsection
