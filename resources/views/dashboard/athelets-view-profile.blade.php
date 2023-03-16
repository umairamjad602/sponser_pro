@extends('layouts.dashboard')
@section('style')
@endsection
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
                                <div class="row">
                                    <div class="col-auto"><img src="{{asset('front-end/images/ath-pic.png')}}" alt="" class="img-fluid user-img"></div>
                                    <div class="col-auto">
                                        <h6 class="title"><b>Jack Betts</b></h6>
                                        <p>Amherst College</p>
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
                        <div class="Biography my-4">
                            <h6 class="sub-title"><b>Biography</b></h6>
                            <p>Junior WR at Amherst College competing at the DIII level. Born and raised Dallas, Texas. Known as "The King of D3 NIL". Holds 35+ deals/partnerships. Represented Amherst College as Student-Athlete delegate at 2022 NIL Summit in Atlanta, Georgia. Co-host of College Football podcast. Founder of The Make Your Own Legacy Academy which seeks to bring education opportunities to Native American and smaller market athletes interested in NIL.</p>
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


                    </div>
                    <div class="col-lg-8">


                       <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="post-tab" data-bs-toggle="tab" data-bs-target="#post" type="button" role="tab" aria-controls="post" aria-selected="true">Post</button>
                        </li>

                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="athletes-review-tab" data-bs-toggle="tab" data-bs-target="#athletes-review" type="button" role="tab" aria-controls="athletes-review" aria-selected="false">Reviews</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="social-tab" data-bs-toggle="tab" data-bs-target="#social" type="button" role="tab" aria-controls="social" aria-selected="false">Social Media Statistics</button>
                        </li>
                      </ul>

                      <div class="tab-content py-5">
                        <div class="tab-pane active ms-md-3" id="post" role="tabpanel" aria-labelledby="post-tab">
                            <div class="row cover-pic-update mb-4 g-3">

                                <div class="col-lg-4">
                                    <div class="row">
                                        <div class="col-auto"><img src="{{asset('front-end/images/ath-pic.png')}}" alt="" class="img-fluid"></div>
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
                                        <div class="col-auto"><img src="{{asset('front-end/images/ath-pic.png')}}" alt="" class="img-fluid "></div>
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
                        <div class="tab-pane ms-md-3 social-media-statistics" id="social" role="tabpanel" aria-labelledby="social-tab">
                            <div class="row social-reviews-row">
                                <div class="col">
                                    <h6 class="title">Reviews</h6>
                                    <div class="d-md-flex  ">
                                        <div class=" review-social-box text-center my-5">
                                            <img src="{{asset('front-end/images/insta.png')}}" alt="">
                                            <h6 class="mt-2">Instagram Statistics</h6>
                                            <a href="#">alyssa_baumann</a>
                                            <div class="d-flex justify-content-between mt-4">
                                                <div>
                                                    <p class="social-count">72.6K</p>
                                                    <p>Followers</p>
                                                </div>
                                                <div>
                                                    <p  class="social-count">587</p>
                                                    <p>Following</p>
                                                </div>
                                                <div>
                                                    <p  class="social-count">295</p>
                                                    <p>Media Count </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" review-social-box text-center my-5">
                                            <img src="{{asset('front-end/images/tweet.png')}}" alt="">
                                            <h6 class="mt-2">Twitter Statistics</h6>
                                            <a href="#" >alyssa_baumann</a>
                                            <div class="d-flex justify-content-between mt-4">
                                                <div>
                                                    <p  class="social-count">72.6K</p>
                                                    <p>Followers</p>
                                                </div>
                                                <div>
                                                    <p  class="social-count">587</p>
                                                    <p>Following</p>
                                                </div>
                                                <div>
                                                    <p  class="social-count">295</p>
                                                    <p>Media Count </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row social-media-statistics-profile">
                                <div class="col-lg-12">
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
                      </div>


                    </div>
                  </div>



		

@endsection
@section('script')
@endsection
