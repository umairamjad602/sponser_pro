@extends('layouts.dashboard')
@section('style')
@endsection
@include('dashboard.modals.referrals-modal')
@include('dashboard.modals.add-new-content')
@include('dashboard.modals.link-copied-modal')
@section('content')

			    <div class="row  g-3 mb-4 align-items-center justify-content-between">

                    <!-- profile-cover-img -->
				  <div class="col-12 profile-cover-brands" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{asset('front-end/images/profile-bg.png')}});">

                  </div>


                  <!-- profile -->
                  <div class="row gx-3 gy-3">
                    <div class="col-lg-4 ath-profile ">
                        <div class="row ">
                            <div class="col-lg-12">
                                <div class="row text-center">
                                    <div class="col-12 d-flex justify-content-between">
                                        <a href="#link-copied"><img src="{{asset('front-end/images/send.png')}}" alt="" class="img-fluid"></a>
                                      <a href="{{url('edit-profile')}}"><img src="{{asset('front-end/images/edit-profile.png')}}" alt="" class="img-fluid" style="width:30px;"></a>

                                    </div>
                                    <div class="col-12 my-3"><img src="{{asset('front-end/images/avatar.png')}}" alt="" class="img-fluid user-img"></div>
                                    <div class="col-12">
                                        <h6 class="title"><b>Jack Betts</b></h6>
                                        <p>Alabama State University</p>
                                        <p>Men's Basketball</p>

                                    </div>
                                    <div class="col-12 d-flex justify-content-between my-4">
                                        <h6 class="sub-title"><b>MOGL Ratings</b></h6>
                                        <div>
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

                        <div class="col-12  ">
                            <div class="social-box d-flex align-items-center">
                                <div><a href="#"><img src="{{asset('front-end/images/tweet.png')}}" alt=""></a></div>
                                <div class="px-2 pt-2"><p><a href="#">jbetts21</a> <br> <span style="font-weight: bold; color: black;">5.4k</span> Followers</p>
                            </div>


                            </div>
                        </div>
                        <div class="col-12 ">
                            <div class="social-box d-flex align-items-center">
                                <div><a href="#"><img src="{{asset('front-end/images/tiktok.png')}}" alt=""></a></div>
                                <div class="px-2 pt-2"><p ><a href="#">jbetts21</a> <br> <span style="font-weight: bold; color: black;">5.4k</span> Followers</p>
                            </div>


                            </div>
                        </div>


                        <div class="row business-categori my-4">
                            <h6 class="sub-title"><b>My Skills and Interests</b></h6>
                            <div class="col-auto categori my-1"><a href=""><p>indoor Coaching</p></a></div>
									<div class="col-auto categori my-1"><a href=""><p>outdoor Coaching</p></a></div>
                                    <div class="col-auto categori my-1"><a href=""><p>NFT’s</p></a></div>


                        </div>
                        <div class="col-12 mt-5" >
                            <p>Your profile is 50% completed</p>
                        <div class="progress ">

                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>


                    </div>
                    <div class="col-lg-8">


                       <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="post-tab" data-bs-toggle="tab" data-bs-target="#post" type="button" role="tab" aria-controls="post" aria-selected="true">Content</button>
                        </li>

                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="athletes-review-tab" data-bs-toggle="tab" data-bs-target="#athletes-review" type="button" role="tab" aria-controls="athletes-review" aria-selected="false">Reviews</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="myinterests-tab" href="#myinterests" data-bs-toggle="tab" data-bs-target="#myinterests" type="button" role="tab" aria-controls="myinterests" aria-selected="false">My Interests</a>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false">About</button>
                          </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="social-tab" data-bs-toggle="tab" data-bs-target="#social" type="button" role="tab" aria-controls="social" aria-selected="false">Social Media Statistics</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link btn"  href="#referrals"   type="button" role="button"  >Referrals</a>
                          </li>
                      </ul>

                      <div class="tab-content py-5">
                        <!-- tab -->
                        <div class="tab-pane active ms-md-3" id="post" role="tabpanel" aria-labelledby="post-tab">

                            <div class="row">
                                <div class="col-12 left-green-border py-4">
                                    <h6>My Sponserpro link</h6>
                                    <p class="mb-4">Sponserpro is a place for you to upload all your affiliate links. Sponserpro is to be shared across all your social media to drive sales and revenue for you and your sponsors.</p>
                                     <a href="{{url('sponsorpro-jobs')}}" class="sponserpro-link btn">Create your Sponserpro link</a>
                                </div>
                                <div class="col-12 d-md-flex justify-content-between">
                                    <h4>POSTS</h4>
                                    <a href="#add-new-content" class="btn view-job-btn" style="border-radius: 8px;">Upload new content</a>
                                </div>

                                    <div class="col-lg-12 social-media-statistics-profile">
                                        <div class="row">
                                            <div class="col-auto"><img src="{{asset('front-end/images/ath-pic.png')}}" alt="" class="img-fluid user-img"></div>
                                            <div class="col-auto">
                                                <h6 class="title">Spectrum Reach</h6>
                                                <p>Created at : February 21, 2023 at 1:12:33 PM GMT-5</p>

                                            </div>
                                            <div class="col-12">

                                                <p>RT @GatorsGym: Senior week - 𝙍𝙖𝙘𝙝𝙚𝙡 𝘽𝙖𝙪𝙢𝙖𝙣𝙣✨ Once a Gator, Always a Gator 🧡💙 #GoGators | #WeChomp <br><a href="#">https://t.co/3thOBLwVoo</a> </p>

                                           <img src="{{asset('front-end/images/profile-bg.png')}}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>

                            </div>






                        </div>
                       <!-- tab -->
                        <div class="tab-pane ms-md-3" id="athletes-review" role="tabpanel" aria-labelledby="athletes-review-tab">
                            <div class="row reviews-tab">
                                <h6 class="title mb-3 px-0">Reviews</h6>
                                <div class="col-lg-8 rating-box ">
                                    <div class="row d-md-flex align-items-center">
                                        <div class="col-md-3">
                                            <p class=" brands-total-rating">Rating <br>0.0</p>
                                        </div>
                                        <div class="col-md-9 ps-0">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <p class="mb-0">Quality</p>
                                                </div>
                                                <div class="col-md-9">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="rating">(4.0)</span>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <p class="mb-0">Service</p>
                                                </div>
                                                <div class="col-md-9">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="rating">(4.0)</span>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <p class="mb-0">Time</p>
                                                </div>
                                                <div class="col-md-9">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="rating">(4.0)</span>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <p class="mb-0">Staff</p>
                                                </div>
                                                <div class="col-md-9">
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
                                    <img src="{{asset('front-end/images/undraw_reviews.png')}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                         <!-- tab -->
                         <div class="tab-pane  ms-md-3" id="myinterests" role="tabpanel" aria-labelledby="myinterests-tab">

                            <div class="row">

                                <!-- col -->
                                <div class="col-12 left-green-border d-flex justify-content-between align-items-center py-4">
                                    <h5 class="mb-0">My Interests</h5>
                                 <a href="" class="sponserpro-link btn">Add/Edit My Interests</a>
                                </div>

                                <!-- col -->
                                <div class="col-12 industries-col">
                                    <h5 class="mb-4">Industries</h5>
                                   <div class="text-center m-2 p-5 industry-brands-select">
                                    <img src="{{asset('front-end/images/industry-select.png')}}" alt="" class="img-fluid ">
                                    <p>No Industries selected!</p>
                                   </div>
                                   <div class="d-flex justify-content-between mt-4">
                                    <h5 class="mb-4">Brands</h5>
                                    <p>
                                        All you are interested in (Total selected: 0)
                                    </p>
                                   </div>
                                   <div class="text-center m-2  p-5 industry-brands-select">
                                    <img src="{{asset('front-end/images/brand-select.png')}}" alt="" class="img-fluid ">
                                    <p>No Brands selected!</p>
                                   </div>

                                </div>


                                <!-- col -->
                                <div class="col-12 interest-col">
                                    <h5 class="mb-4">Skills</h5>
                                    <div class="row ">
                                        <div class="col-auto categori my-1"><a href=""><p>indoor Coaching</p></a></div>
                                        <div class="col-auto categori my-1"><a href=""><p>outdoor Coaching</p></a></div>
                                        <div class="col-auto categori my-1"><a href=""><p>NFT’s</p></a></div>

                                    </div>

                                </div>




                            </div>






                        </div>
                         <!-- tab -->
                         <div class="tab-pane  ms-md-3" id="about" role="tabpanel" aria-labelledby="about-tab">

                           <div class="row about-tab p-4">
                            <div class="col-12 border-grey mb-3 p-3">
                                <p style="color: #63AF31;">Jersey No. N/A</p>
                                <div class="row">
                                    <div class="col-md-3 col-6">
                                        <img src="{{asset('front-end/images/athlete-avatar.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <h6 class="mb-1">Years Experience:</h6>
                                        <p>5 year</p>
                                        <h6 class="mb-1">Pant Size:</h6>
                                        <p>8.5 ft</p>
                                        <h6 class="mb-1">Shirt Size:</h6>
                                        <p>8.5 ft</p>
                                    </div>
                                    <div class="col-md-3 col-6" >
                                        <h6 class="mb-1">Age:</h6>
                                        <p>19 year</p>
                                        <h6 class="mb-1">Shoes Size:</h6>
                                        <p>8.5 ft</p>
                                        <h6 class="mb-1">Height:</h6>
                                        <p>8.5 ft</p>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <h6 class="mb-1">Gender:</h6>
                                        <p>Male</p>
                                        <h6 class="mb-1">Pant Size:</h6>
                                        <p>8.5 ft</p>
                                        <h6 class="mb-1">Hat Size:</h6>
                                        <p>8.5 ft</p>
                                    </div>


                                </div>



                            </div>
                            <div class="col-12 border-grey mb-3 p-3">
                                <h5 class="mb-1">Biography</h5>
                                <p class="mb-0">Biography not added yet</p>
                            </div>
                            <div class="col-12 border-grey mb-3 p-3">
                                <h5 class="mb-1">Career Highlights</h5>
                                <p class="mb-0">Career info. not added yet</p>
                            </div>

                           </div>






                        </div>
                        <!-- tab -->
                        <div class="tab-pane ms-md-3 social-media-statistics" id="social" role="tabpanel" aria-labelledby="social-tab">
                            <div class="row social-reviews-row">
                                <div class="col">
                                    <div class="row ">
                                        <div class="  col-12 social-media-statistics-col">
                                            <img src="{{asset('front-end/images/insta.png')}}" alt="">

                                            <div class="d-md-flex justify-content-between mt-4">
                                                <div>
                                                    <h6 class="">Instagram Statistics</h6>
                                                    <a href="#">alyssa_baumann</a>

                                                </div>
                                                <div class="text-center">
                                                    <p class="social-count">72.6K</p>
                                                    <p>Followers</p>
                                                </div>
                                                <div class="text-center">
                                                    <p  class="social-count">587</p>
                                                    <p>Following</p>
                                                </div>
                                                <div class="text-center">
                                                    <p  class="social-count">295</p>
                                                    <p>Media Count </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="  col-12 social-media-statistics-col">
                                            <img src="{{asset('front-end/images/tweet.png')}}" alt="">

                                            <div class="d-md-flex justify-content-between mt-4">
                                                <div>
                                                    <h6 class="mt-2">Twitter Statistics</h6>
                                                    <a href="#" >alyssa_baumann</a>
                                                </div>
                                                <div class="text-center">
                                                    <p  class="social-count">72.6K</p>
                                                    <p>Followers</p>
                                                </div>
                                                <div class="text-center">
                                                    <p  class="social-count">587</p>
                                                    <p>Following</p>
                                                </div>
                                                <div class="text-center">
                                                    <p  class="social-count">295</p>
                                                    <p>Media Count </p>
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



		 

@endsection
@section('script')
@endsection
