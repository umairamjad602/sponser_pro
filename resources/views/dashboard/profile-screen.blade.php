@extends('layouts.dashboard')
@section('style')
@endsection

 <!-- logout-popup -->
 <div id="link-copied" class="popup-overlay ">
        <div class="popup">
            <div class="row  ">

                <div class="col-auto">
					<a class="close" href="#">&times;</a>

					<h2>Link Copied</h2>

				</div>
				<div class="col-12 text-center py-4">
					<img src="{{asset('front-end/images/link-copied.png')}}" alt="" class="img-fluid">
				</div>


            </div>







        </div>
    </div>

@section('content')

<div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-fluid " style="padding:2%;">
			    <div class="row  g-3 mb-4 align-items-center justify-content-between">

                    <!-- profile-cover-img -->
				  <div class="col-12 profile-cover-brands" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{asset('front-end/images/profile-bg.png')}});">

                  </div>


                  <!-- profile -->
                  <div class="row gx-3 gy-3">
                    <div class="col-lg-4 ath-profile ">
                        <div class="row ">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-auto"><img src="{{asset('front-end/images/job-user.png')}}" alt="" class="img-fluid user-img"></div>
                                    <div class="col-auto">
                                        <h6 class="title">Spectrum Reach</h6>
                                        <p>Los Angeles</p>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="rating">(4.0)</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row text-center follower-views my-4">
                            <div class="col-6">
                                <p class="rating-no">33k</p>
                                <p>Followers</p>
                            </div>
                            <div class="col-6">
                                <p class="rating-no">33k</p>
                                <p>views</p>
                            </div>

                        </div>
                        <!-- athletes-options -->
                        <div class="row my-4">
                            <div class="col-12 justify-content-center  d-flex">
                                <a href="{{url('chat')}}" class="btn view-job-btn me-4" style="border-radius: 8px;">Message</a>
                                <a href="" class="btn view-job-btn" style="background-color: #63AF31;color: white; border-radius: 8px;">Follow</a>
                            </div>

                        </div>
                         <!-- athletes-options -->
                        <div class="row Social-media">
                            <h6 class="sub-title">Social Media:</h6>
                            <div class="col-10 d-flex ">
                            <a href="" class=""><img src="{{asset('front-end/images/tik-tok.png')}}" alt=""></a>
                            <a href=""><img src="{{asset('front-end/images/twitter.png')}}" alt=""></a>
                            <a href=""><img src="{{asset('front-end/images/instagram.png')}}" alt=""></a>
                            <a href=""><img src="{{asset('front-end/images/fb.png')}}" alt=""></a>
                            <a href=""><img src="{{asset('front-end/images/www.png')}}" alt=""></a>

                        </div>
                        <div class="col-2 d-flex justify-content-end">
                           <a href="#link-copied"><img src="{{asset('front-end/images/send.png')}}" alt=""></a>
                        </div>

                        </div>
                        <div class="row business-categori my-4">
                            <h6 class="sub-title">Business Category:</h6>
                            <div class="col-auto categori my-1"><a href=""><p>indoor Coaching</p></a></div>
									<div class="col-auto categori my-1"><a href=""><p>outdoor Coaching</p></a></div>
                        </div>


                    </div>
                    <div class="col-lg-8">


                       <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Content</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Posted Jobs</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">Reviews</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">About</button>
                        </li>
                      </ul>

                      <div class="tab-content py-5">
                        <div class="tab-pane active ms-md-3" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row cover-pic-update mb-4 g-3">

                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-auto"><img src="{{asset('front-end/images/job-user.png')}}" alt="" class="img-fluid"></div>
                                        <div class="col-auto">
                                            <h6 class="sub-title">Spectrum Reach</h6>
                                            <p class="date">Feb 20, 2023</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <p >Cover Photo Updated</p>
                                    <img src="{{asset('front-end/images/profile-bg.png')}}" alt="" class="img-fluid profile-cover">
                                </div>
                            </div>
                            <div class="row profile-pic-update ">
                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-auto"><img src="{{asset('front-end/images/job-user.png')}}" alt="" class="img-fluid "></div>
                                        <div class="col-auto">
                                            <h6 class="sub-title">Spectrum Reach</h6>
                                            <p class="date">Feb 20, 2023</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 ">
                                    <p>profile photo Updated</p>
                                    <img src="{{asset('front-end/images/profile-pic.png')}}" alt="" class="img-fluid profile-img">
                                </div>
                            </div>






                        </div>
                        <div class="tab-pane ms-md-3" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row g-2">
                                <div class="col-12 col-md-4 text-center">
                                  <div class="brands-posted-jobs-card">

                                    <div class="row ">
                                        <div class="col-6 text-start job-price">
                                           <p > $100</p>
                                        </div>
                                        <div class="col-6 text-end job-status-pending">
                                           <p > Pending</p>
                                        </div>
                                        </div>
                                    <img src="{{asset('front-end/images/job-user.png')}}" alt="">
                                    <h6>Spectrum Reach</h6>
                                    <p>Feb 20, 2023</p>
                                    <div class="row d-md-flex justify-content-between">
                                        <div class="col-auto text-start job-applicants">
                                            <p>Applicants</p>
                                        </div>
                                        <div class="col-auto text-end no-of-applicants">
                                           <p>2 Applicants</p>
                                        </div>
                                    </div>
                                    <a href="{{url('view-profile')}}"> <img src="{{asset('front-end/images/arrow.png')}}" alt=""></a>

                                  </div>


                                </div>
                                <!-- col -->
                                <div class="col-12 col-md-4 text-center">
                                    <div class="brands-posted-jobs-card">

                                      <div class="row">
                                          <div class="col-6 text-start job-price">
                                             <p > $100</p>
                                          </div>
                                          <div class="col-6 text-end job-status-complete">
                                             <p >Complete</p>
                                          </div>
                                          </div>
                                      <img src="{{asset('front-end/images/job-user.png')}}" alt="">
                                      <h6>Spectrum Reach</h6>
                                      <p>Feb 20, 2023</p>
                                      <div class="row d-md-flex justify-content-between">
                                        <div class="col-auto text-start job-applicants">
                                            <p>Applicants</p>
                                        </div>
                                        <div class="col-auto text-end no-of-applicants">
                                           <p>2 Applicants</p>
                                        </div>
                                      </div>
                                      <a href="{{url('view-profile')}}"> <img src="{{asset('front-end/images/arrow.png')}}" alt=""></a>

                                    </div>


                                  </div>
                                  <!-- col -->
                                  <div class="col-12 col-md-4 text-center">
                                    <div class="brands-posted-jobs-card">

                                      <div class="row">
                                          <div class="col-6 text-start job-price">
                                             <p > $100</p>
                                          </div>
                                          <div class="col-6 text-end job-status-pending">
                                             <p > Pending</p>
                                          </div>
                                          </div>
                                      <img src="{{asset('front-end/images/job-user.png')}}" alt="">
                                      <h6>Spectrum Reach</h6>
                                      <p>Feb 20, 2023</p>
                                      <div class="row d-md-flex justify-content-between">
                                        <div class="col-auto text-start job-applicants">
                                            <p>Applicants</p>
                                        </div>
                                        <div class="col-auto text-end no-of-applicants">
                                           <p>2 Applicants</p>
                                        </div>
                                      </div>
                                      <a href="{{url('view-profile')}}"> <img src="{{asset('front-end/images/arrow.png')}}" alt=""></a>

                                    </div>


                                  </div>
                                  <!-- col -->
                                  <div class="col-12 col-md-4 text-center">
                                    <div class="brands-posted-jobs-card">

                                      <div class="row">
                                          <div class="col-6 text-start job-price">
                                             <p > $100</p>
                                          </div>
                                          <div class="col-6 text-end job-status-pending">
                                             <p > Pending</p>
                                          </div>
                                          </div>
                                      <img src="{{asset('front-end/images/job-user.png')}}" alt="">
                                      <h6>Spectrum Reach</h6>
                                      <p>Feb 20, 2023</p>
                                      <div class="row d-md-flex justify-content-between">
                                        <div class="col-auto text-start job-applicants">
                                            <p>Applicants</p>
                                        </div>
                                        <div class="col-auto text-end no-of-applicants">
                                           <p>2 Applicants</p>
                                        </div>
                                      </div>
                                      <a href="{{url('view-profile')}}"> <img src="{{asset('front-end/images/arrow.png')}}" alt=""></a>

                                    </div>


                                  </div>
                                  <!-- col -->
                                  <div class="col-12 col-md-4 text-center">
                                    <div class="brands-posted-jobs-card">

                                      <div class="row">
                                          <div class="col-6 text-start job-price">
                                             <p > $100</p>
                                          </div>
                                          <div class="col-6 text-end job-status-complete">
                                             <p >Complete</p>
                                          </div>
                                          </div>
                                      <img src="{{asset('front-end/images/job-user.png')}}" alt="">
                                      <h6>Spectrum Reach</h6>
                                      <p>Feb 20, 2023</p>
                                      <div class="row d-md-flex justify-content-between">
                                        <div class="col-auto text-start job-applicants">
                                            <p>Applicants</p>
                                        </div>
                                        <div class="col-auto text-end no-of-applicants">
                                           <p>2 Applicants</p>
                                        </div>
                                      </div>
                                      <a href="{{url('view-profile')}}"> <img src="{{asset('front-end/images/arrow.png')}}" alt=""></a>

                                    </div>


                                  </div>
                                  <!-- col -->
                                  <div class="col-12 col-md-4 text-center">
                                    <div class="brands-posted-jobs-card">

                                      <div class="row">
                                          <div class="col-6 text-start job-price">
                                             <p > $100</p>
                                          </div>
                                          <div class="col-6 text-end job-status-pending">
                                             <p > Pending</p>
                                          </div>
                                          </div>
                                      <img src="{{asset('front-end/images/job-user.png')}}" alt="">
                                      <h6>Spectrum Reach</h6>
                                      <p>Feb 20, 2023</p>
                                      <div class="row d-md-flex justify-content-between">
                                        <div class="col-auto text-start job-applicants">
                                            <p>Applicants</p>
                                        </div>
                                        <div class="col-auto text-end no-of-applicants">
                                           <p>2 Applicants</p>
                                        </div>
                                      </div>
                                      <a href="{{url('view-profile')}}"> <img src="{{asset('front-end/images/arrow.png')}}" alt=""></a>

                                    </div>


                                  </div>
                                  <!-- col -->







                            </div>
                        </div>
                        <div class="tab-pane ms-md-3" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                            <div class="row reviews-tab">
                                <h6 class="title mb-3 px-0">Reviews</h6>
                                <div class="col-lg-8 rating-box ">
                                    <div class="row d-md-flex align-items-center">
                                        <div class="col-md-3">
                                            <p class=" brands-total-rating">Rating <br>0.0</p>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <p class="mb-0">Quality</p>
                                                </div>
                                                <div class="col-md-10">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="rating">(4.0)</span>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <p class="mb-0">Service</p>
                                                </div>
                                                <div class="col-md-10">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="rating">(4.0)</span>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <p class="mb-0">Time</p>
                                                </div>
                                                <div class="col-md-10">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="rating">(4.0)</span>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <p class="mb-0">Staff</p>
                                                </div>
                                                <div class="col-md-10">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="rating">(4.0)</span>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-center mt-md-5 mt-2">
                                    <img src="assets/images/undraw_reviews.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane ms-md-3" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                            <div class="row bio-graphy">
                                <div class="col">
                                    <h6 class="title">Biography</h6>
                                    <p>Spectrum Reach®, the advertising sales business of Charter Communications, Inc. (NASDAQ:CHTR), provides custom advertising solutions for local, regional and national clients. Operating in 36 states and 91 markets, Spectrum Reach creates scalable advertising and marketing services driven by aggregated and de-identified data insights and award-winning creative services. Spectrum Reach helps businesses of all sizes reach anyone, anywhere, on any screen. Additional information about Spectrum Reach can be found at spectrumreach.com.</p>
                                </div>
                            </div>
                        </div>
                      </div>


                    </div>
                  </div>



		    </div><!--//container-fluid-->
	    </div><!--//app-content-->

    </div><!--//app-wrapper-->

@endsection
@section('script')
@endsection
