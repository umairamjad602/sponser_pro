@extends('layouts.dashboard')
@section('style')
@endsection
@section('content')
    <div class="row title-row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto mt-0">
            <h1 class="app-page-title mb-0">Athletes </h1>
        </div>
        <div class="col-auto mt-0">
            <div class="page-utilities">
                <div class="row g-2 justify-content-start justify-content-md-end align-items-center">

                    <div class="app-search-box col-auto">
                        <form class="app-search-form docs-search">
                            <input type="text" placeholder="Name" name="search" class="form-control search-input">
                            <button type="submit" class="btn search-btn btn-primary" value="Search"><i
                                    class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <!--//app-search-box-->

                    <div class="col-auto ">

                        <select class="form-select w-auto ">
                            <option selected="" value="option-1">Select university</option>
                            <option value="option-2">1</option>
                            <option value="option-3">2</option>
                            <option value="option-4">3</option>
                            <option value="option-5">4</option>
                            <option value="option-6">5</option>

                        </select>
                    </div>


                    <div class=" col-auto">
                        <a href="#"><img src="{{ asset('front-end/assets/images/right-rotate.png') }}"
                                alt=""></a>
                    </div>
                    <!--//-->
                    <div class=" col-auto">
                        <a href="#"><img src="{{ asset('front-end/assets/images/login.png') }}" alt=""></a>
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

    <div class="row g-3 ath-sec">
        <div class="row py-3">
            <div class="col-auto">
                <h1 class="app-page-sub-title  mb-0"> All Athletes </h1>
            </div>
            <div class="col-auto ">

                <select class="form-select w-auto ">
                    <option selected="" value="option-1">Sports</option>
                    <option value="option-2">1</option>
                    <option value="option-3">2</option>
                    <option value="option-4">3</option>
                    <option value="option-5">4</option>
                    <option value="option-6">5</option>

                </select>
            </div>
            <div class="col-auto ">

                <select class="form-select w-auto ">
                    <option selected="" value="option-1">Skills</option>
                    <option value="option-2">1</option>
                    <option value="option-3">2</option>
                    <option value="option-4">3</option>
                    <option value="option-5">4</option>
                    <option value="option-6">5</option>

                </select>
            </div>
            <div class="col-auto ">

                <select class="form-select w-auto ">
                    <option selected="" value="option-1">Platforms</option>
                    <option value="option-2">1</option>
                    <option value="option-3">2</option>
                    <option value="option-4">3</option>
                    <option value="option-5">4</option>
                    <option value="option-6">5</option>

                </select>
            </div>
            <div class="col-auto ">

                <select class="form-select w-auto ">
                    <option selected="" value="option-1">Gender</option>
                    <option value="option-2">1</option>
                    <option value="option-3">2</option>
                    <option value="option-4">3</option>
                    <option value="option-5">4</option>
                    <option value="option-6">5</option>

                </select>
            </div>
            <div class="col-auto ">

                <select class="form-select w-auto ">
                    <option selected="" value="option-1">Eligibility</option>
                    <option value="option-2">1</option>
                    <option value="option-3">2</option>
                    <option value="option-4">3</option>
                    <option value="option-5">4</option>
                    <option value="option-6">5</option>

                </select>
            </div>
            <div class="col d-flex justify-content-md-end ">

                <select class="form-select w-auto ">
                    <option selected="" value="option-1">Social Followers</option>
                    <option value="option-2">1</option>
                    <option value="option-3">2</option>
                    <option value="option-4">3</option>
                    <option value="option-5">4</option>
                    <option value="option-6">5</option>

                </select>
            </div>

        </div>



        <!-- all athletes section-cards -->


        <div class="col-12 col-md-6 col-xl-4 col-xxl-4 athletes-card">
            <div class="app-card app-card-doc shadow-sm h-100 ">
                <div class="card-head pt-4 px-4"
                    style="  background-image: url('{{ asset('front-end/assets/images/athlete-bg.png') }}');">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end pb-5">
                            <a href="#"> <i class="fa-solid fa-heart" style="color:#F43756;"></i></a>

                        </div>
                        <div class="col-12 pb-3 pt-5"><a href="#"><img
                                    src="{{ asset('front-end/assets/images/job-user.png') }}" alt=""></a></div>
                    </div>

                </div>
                <div class="app-card-body  p-4">
                    <div class="row d-flex py-1">
                        <div class="col-auto ath-title"><a href="#">
                                <h6>Jack Betts</h6>
                            </a></div>
                        <div class="col-auto">
                            <a href="#">
                                <p class="sub-title">Amherst College</p>
                            </a>
                            <p class="ath-categori">Men's Football</p>
                            <p>Junior WR at Amherst College competing at the DIII level. Born and raised Dallas, Texas.
                                Known as "The King of D3 NIL". Holds..</p>

                        </div>

                    </div>

                    <div class="row py-1 mb-3">
                        <div class="col-auto categori my-1"><a href="">
                                <p>Gaming</p>
                            </a></div>
                        <div class="col-auto categori my-1"><a href="">
                                <p>Tranding cards</p>
                            </a></div>
                        <div class="col-auto categori my-1"><a href="">
                                <p>Gaming</p>
                            </a></div>
                        <div class="col-auto categori my-1"><a href="">
                                <p>Gaming</p>
                            </a></div>
                        <div class="col-auto categori my-1"><a href="">
                                <p>Gaming</p>
                            </a></div>
                        <div class="col-auto categori my-1"><a href="">
                                <p>Gaming</p>
                            </a></div>
                    </div>
                    <div class="row py-1 gx-2 gy-2">
                        <div class="col-12 col-md-6   ">
                            <div class="social-box d-flex align-items-center">
                                <div><a href="#"><img src="{{ asset('front-end/assets/images/insta.png') }}"
                                            alt=""></a></div>
                                <div class="px-2 pt-2">
                                    <p><a href="#">jbetts21</a> <br> <span
                                            style="font-weight: bold; color: black;">5.4k</span> Followers</p>
                                </div>


                            </div>
                        </div>
                        <div class="col-12 col-md-6 ">
                            <div class="social-box d-flex align-items-center">
                                <div><a href="#"><img src="{{ asset('front-end/assets/images/tweet.png') }}"
                                            alt=""></a></div>
                                <div class="px-2 pt-2">
                                    <p><a href="#">jbetts21</a> <br> <span
                                            style="font-weight: bold; color: black;">5.4k</span> Followers</p>
                                </div>


                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="social-box d-flex align-items-center">
                                <div><a href="#"><img src="{{ asset('front-end/assets/images/tiktok.png') }}"
                                            alt=""></a></div>
                                <div class="px-2 pt-2">
                                    <p><a href="#">jbetts21</a> <br> <span
                                            style="font-weight: bold; color: black;">5.4k</span> Followers</p>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="row py-3 d-flex">
                        <button class="btn view-job-btn mb-3" style="text-align: start;">invite to job <i
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
        <div class="col-12 col-md-6 col-xl-4 col-xxl-4 athletes-card">
            <div class="app-card app-card-doc shadow-sm h-100 ">
                <div class="card-head pt-4 px-4"
                    style="  background-image: url('{{ asset('front-end/assets/images/athlete-bg.png') }}');">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end pb-5">
                            <a href="#"> <i class="fa-solid fa-heart" style="color:#F43756;"></i></a>

                        </div>
                        <div class="col-12 pb-3 pt-5"><a href="#"><img
                                    src="{{ asset('front-end/assets/images/job-user.png') }}" alt=""></a></div>
                    </div>

                </div>
                <div class="app-card-body  p-4">
                    <div class="row d-flex py-1">
                        <div class="col-auto ath-title"><a href="#">
                                <h6>Jack Betts</h6>
                            </a></div>
                        <div class="col-auto">
                            <a href="#">
                                <p class="sub-title">Amherst College</p>
                            </a>
                            <p class="ath-categori">Men's Football</p>
                            <p>Junior WR at Amherst College competing at the DIII level. Born and raised Dallas, Texas.
                                Known as "The King of D3 NIL". Holds..</p>

                        </div>

                    </div>

                    <div class="row py-1 mb-3">
                        <div class="col-auto categori my-1"><a href="">
                                <p>Gaming</p>
                            </a></div>
                        <div class="col-auto categori my-1"><a href="">
                                <p>Tranding cards</p>
                            </a></div>
                        <div class="col-auto categori my-1"><a href="">
                                <p>Gaming</p>
                            </a></div>
                        <div class="col-auto categori my-1"><a href="">
                                <p>Gaming</p>
                            </a></div>
                        <div class="col-auto categori my-1"><a href="">
                                <p>Gaming</p>
                            </a></div>
                        <div class="col-auto categori my-1"><a href="">
                                <p>Gaming</p>
                            </a></div>
                    </div>
                    <div class="row py-1 gx-2 gy-2">
                        <div class="col-12 col-md-6   ">
                            <div class="social-box d-flex align-items-center">
                                <div><a href="#"><img src="{{ asset('front-end/assets/images/insta.png') }}"
                                            alt=""></a></div>
                                <div class="px-2 pt-2">
                                    <p><a href="#">jbetts21</a> <br> <span
                                            style="font-weight: bold; color: black;">5.4k</span> Followers</p>
                                </div>


                            </div>
                        </div>
                        <div class="col-12 col-md-6 ">
                            <div class="social-box d-flex align-items-center">
                                <div><a href="#"><img src="{{ asset('front-end/assets/images/tweet.png') }}"
                                            alt=""></a></div>
                                <div class="px-2 pt-2">
                                    <p><a href="#">jbetts21</a> <br> <span
                                            style="font-weight: bold; color: black;">5.4k</span> Followers</p>
                                </div>


                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="social-box d-flex align-items-center">
                                <div><a href="#"><img src="{{ asset('front-end/assets/images/tiktok.png') }}"
                                            alt=""></a></div>
                                <div class="px-2 pt-2">
                                    <p><a href="#">jbetts21</a> <br> <span
                                            style="font-weight: bold; color: black;">5.4k</span> Followers</p>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="row py-3 d-flex">
                        <button class="btn view-job-btn mb-3" style="text-align: start;">invite to job <i
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
        <div class="col-12 col-md-6 col-xl-4 col-xxl-4 athletes-card">
            <div class="app-card app-card-doc shadow-sm h-100 ">
                <div class="card-head pt-4 px-4"
                    style="  background-image: url('{{ asset('front-end/assets/images/athlete-bg.png') }}');">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end pb-5">
                            <a href="#"> <i class="fa-solid fa-heart" style="color:#F43756;"></i></a>

                        </div>
                        <div class="col-12 pb-3 pt-5"><a href="#"><img
                                    src="{{ asset('front-end/assets/images/job-user.png') }}" alt=""></a></div>
                    </div>

                </div>
                <div class="app-card-body  p-4">
                    <div class="row d-flex py-1">
                        <div class="col-auto ath-title"><a href="#">
                                <h6>Jack Betts</h6>
                            </a></div>
                        <div class="col-auto">
                            <a href="#">
                                <p class="sub-title">Amherst College</p>
                            </a>
                            <p class="ath-categori">Men's Football</p>
                            <p>Junior WR at Amherst College competing at the DIII level. Born and raised Dallas, Texas.
                                Known as "The King of D3 NIL". Holds..</p>

                        </div>

                    </div>

                    <div class="row py-1 mb-3">
                        <div class="col-auto categori my-1"><a href="">
                                <p>Gaming</p>
                            </a></div>
                        <div class="col-auto categori my-1"><a href="">
                                <p>Tranding cards</p>
                            </a></div>
                        <div class="col-auto categori my-1"><a href="">
                                <p>Gaming</p>
                            </a></div>
                        <div class="col-auto categori my-1"><a href="">
                                <p>Gaming</p>
                            </a></div>
                        <div class="col-auto categori my-1"><a href="">
                                <p>Gaming</p>
                            </a></div>
                        <div class="col-auto categori my-1"><a href="">
                                <p>Gaming</p>
                            </a></div>
                    </div>
                    <div class="row py-1 gx-2 gy-2">
                        <div class="col-12 col-md-6   ">
                            <div class="social-box d-flex align-items-center">
                                <div><a href="#"><img src="{{ asset('front-end/assets/images/insta.png') }}"
                                            alt=""></a></div>
                                <div class="px-2 pt-2">
                                    <p><a href="#">jbetts21</a> <br><span
                                            style="font-weight: bold; color: black;">5.4k</span> Followers</p>
                                </div>


                            </div>
                        </div>
                        <div class="col-12 col-md-6 ">
                            <div class="social-box d-flex align-items-center">
                                <div><a href="#"><img src="{{ asset('front-end/assets/images/tweet.png') }}"
                                            alt=""></a></div>
                                <div class="px-2 pt-2">
                                    <p><a href="#">jbetts21</a> <br> <span
                                            style="font-weight: bold; color: black;">5.4k</span> Followers</p>
                                </div>


                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="social-box d-flex align-items-center">
                                <div><a href="#"><img src="{{ asset('front-end/assets/images/tiktok.png') }}"
                                            alt=""></a></div>
                                <div class="px-2 pt-2">
                                    <p><a href="#">jbetts21</a> <br><span
                                            style="font-weight: bold; color: black;">5.4k</span> Followers</p>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="row py-3 d-flex">
                        <button class="btn view-job-btn mb-3" style="text-align: start;">invite to job <i
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
        </nav>//app-pagination -->
@endsection
@section('script')
@endsection
