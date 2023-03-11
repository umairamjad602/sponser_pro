@extends('layouts.dashboard')
@section('style')
@endsection
@section('content')
<div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-fluid " style="padding:2%;">
			    <div class="row  g-3 mb-4 align-items-center justify-content-between">

                    <!-- profile-cover-img -->
				  <div class="col-12 profile-cover-brands" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('assets/images/profile-bg.png');">

                  </div>


                  <!-- profile -->
                  <div class="row gx-3 gy-3">
                    <div class="col-lg-4 ath-profile ">
                        <div class="row ">
                            <div class="ms-auto col-auto">
                                <a href="edit-profile.html"><img src="{{asset('front-end/images/edit-profile.png')}}" alt="" ></a>

                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="">
                                            <img src="assets/images/avatar.png" alt="" class="img-fluid user-img">
                                        </a>

                                    </div>
                                    <div class="col-auto">
                                        <h6 class="title">The Players Locker</h6>
                                        <p>Tampa</p>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="rating">(0.0)</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row text-center follower-views my-4">
                            <div class="col-6">
                                <p class="text-black">0</p>
                                <p>Followers</p>
                            </div>
                            <div class="col-6">
                                <p class="text-black">0</p>
                                <p>views</p>
                            </div>

                        </div>
                        <div class="row Social-media">
                            <h6 class="sub-title">Add social:</h6>

                            <a href="" class=""><img src="assets/images/add-info.png" alt=""></a>





                        </div>
                        <div class="row business-categori my-4">
                            <h6 class="sub-title">Business Category:</h6>
                            <a href="" class=""><img src="assets/images/add-info.png" alt=""></a>
                        </div>


                    </div>
                    <div class="col-lg-8">


                       <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Content</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Jobs</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">Reviews</button>
                        </li>

                      </ul>

                      <div class="tab-content py-5">
                        <div class="tab-pane active ms-md-3" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="col-12 d-flex justify-content-end" >
                                <a href="#add-new-content" class="btn add-ques-btn ms-auto" role="button">Upload new content<i class="fa-solid fa-plus px-2"></i></a>
                            </div>
                            <div class="text-center py-5">
                                <a href="">
                                    <img src="assets/images/content-writing.png" alt="" class="img-fluid text-center">
                                </a>



                            </div>






                        </div>
                        <div class="tab-pane ms-md-3" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="col-12 d-flex justify-content-end" >
                                <a href="#post-job" class="btn add-ques-btn ms-auto" role="button">Post new job<i class="fa-solid fa-plus px-2"></i></a>
                            </div>
                            <div class="text-center py-5">
                                <a href="">
                                    <img src="assets/images/product-review.png" alt="" class="img-fluid text-center">
                                </a>


                            </div>
                        </div>
                        <div class="tab-pane ms-md-3" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                            <div class="text-center py-5">
                                <a href="">
                                    <img src="assets/images/profile-reviews.png" alt="" class="img-fluid text-center">
                                </a>


                            </div>

                        </div>

                      </div>


                    </div>
                  </div>



		    </div><!--//container-fluid-->
	    </div><!--//app-content-->

@endsection
@section('script')
@endsection
