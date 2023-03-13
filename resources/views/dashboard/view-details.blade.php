@extends('layouts.dashboard')
@section('style')
@endsection
@section('content')


                <div class="row ">
                    <!-- brands-coverpic-col -->
                    <div class="col-12 brands-profile-cover"
                        style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{asset('front-end/images/profile-bg.png')}});">
                        <div class="brands-athlete-info text-center">
                            <img src="{{asset('front-end/images/ath-pic.png')}}" alt="" class="brands-profile-pic">
                            <h6>Ui designer</h6>
                            <p>Spectrum Reach <span style="font-weight: 500; text-transform: uppercase;"> All MOGL
                                    Athletes</span></p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-10 col-md-11 ">
                        <ul class="nav nav-tabs my-3" id="myTab" role="tablist">
                            <li class="nav-item me-3" role="presentation">
                                <button class="nav-link active" id="Overview-tab" data-bs-toggle="tab"
                                    data-bs-target="#Overview" type="button" role="tab" aria-controls="Overview"
                                    aria-selected="true">Overview </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="management-tab" data-bs-toggle="tab"
                                    data-bs-target="#management" type="button" role="tab" aria-controls="management"
                                    aria-selected="false">Campaign Management</button>
                            </li>

                        </ul>
                    </div>

                    <div class="col-12 ">
                        <div class="tab-content ">
                            <div class="tab-pane active " id="Overview" role="tabpanel" aria-labelledby="Overview-tab">
                                <!-- brands-overview-col -->
                                <div class="col-12 left-green-border d-lg-flex align-items-center mt-4">
                                    <h1 class="brands-review-headings">
                                        Overview
                                    </h1>
                                    <div class="row ms-auto">
                                        <div class="col-auto">
                                            <p class="review-brands-title mb-1">Job Title:</p>
                                            <p class="review-brands-description m-0">Simpson College</p>

                                        </div>
                                        <div class="col-auto">
                                            <p class="review-brands-title mb-1">Location:</p>
                                            <p class="review-brands-description m-0">Redding, CA 96002, USA</p>
                                        </div>
                                        <div class="col-auto">
                                            <p class="review-brands-title mb-1">Category:</p>
                                            <p class="review-brands-description m-0">Personal Training and Coaching</p>
                                        </div>
                                        <div class="col-auto">
                                            <p class="review-brands-title mb-1">Payment Type:</p>
                                            <p class="review-brands-description m-0">Fixed Price</p>
                                        </div>
                                    </div>

                                </div>

                                <!--brands-description -->
                                <div class="col-12 left-green-border">
                                    <h1 class="brands-review-headings">
                                        Description:
                                    </h1>
                                    <p>Simpson College in Redding, California is creating an athletics department and we
                                        want to kick off their football program. We would like to do a recruitment camp
                                        around the end of June.</p>

                                </div>



                                <!-- brands-Deliverables -->
                                <div class="col-12 left-green-border  align-items-center ">
                                    <div class="d-lg-flex">
                                        <h1 class="brands-review-headings">
                                            Deliverables
                                        </h1>
                                        <div class="row ms-auto">
                                            <div class="col-auto d-lg-flex align-items-center">
                                                <p class="review-brands-title mb-1">1st Deliverable:</p>
                                                <p class="review-brands-description m-0 px-lg-2">Compensation: $1000</p>

                                            </div>
                                            <div class="col-auto d-lg-flex align-items-center">
                                                <p class="review-brands-title mb-1">Estimated time of completion:</p>
                                                <p class="review-brands-description m-0 px-lg-2">1 Day(s) after athlete
                                                    accepts the agreement</p>
                                            </div>

                                        </div>
                                    </div>
                                    <p class="mt-2">Personal meet and greet and coaching for recruitment. We would need
                                        them for 8 hours to actively coach with the new recruits.</p>


                                </div>




                                <!-- brands-Total-Compensation -->
                                <div class="col-12 left-green-border">
                                    <h1 class="brands-review-headings">
                                        Total Compensation:
                                    </h1>
                                    <p> $1,000</p>

                                </div>

                                <!-- brands-ppint-of-coontact -->
                                <div class="col-12 left-green-border   ">
                                    <h1 class="brands-review-headings">
                                        Point of contact
                                    </h1>
                                    <div class="row d-flex align-items-center ">
                                        <div class="col-auto d-lg-flex align-items-center">
                                            <p class="review-brands-title mb-1">Person name</p>
                                            <p class="review-brands-description m-0 px-lg-2">Name 1</p>

                                        </div>
                                        <div class="col-auto d-lg-flex align-items-center">
                                            <p class="review-brands-title mb-1">person email</p>
                                            <p class="review-brands-description m-0 px-lg-2">Email</p>

                                        </div>
                                    </div>
                                    <div class="row d-flex align-items-center mt-2">
                                        <div class="col-auto d-lg-flex align-items-center">
                                            <p class="review-brands-title mb-1">Q1.</p>
                                            <p class="review-brands-description m-0 px-lg-2">Question here?</p>

                                        </div>
                                        <div class="col-auto d-lg-flex align-items-center">
                                            <p class="review-brands-title mb-1">Q2.</p>
                                            <p class="review-brands-description m-0 px-lg-2">Question here?</p>

                                        </div>
                                        <div class="col-auto d-lg-flex align-items-center">
                                            <p class="review-brands-title mb-1">Q3.</p>
                                            <p class="review-brands-description m-0 px-lg-2">Question here?</p>

                                        </div>
                                    </div>


                                </div>


                                <!-- brands-skills -->
                                <div class="col-12 left-green-border  d-lg-flex align-items-center">
                                    <h1 class="brands-review-headings">
                                        Athlete and Skills
                                    </h1>
                                    <div class="row d-flex align-items-center px-lg-3">
                                        <div class="col-auto ">
                                            <button class="btn athlete-skills" disabled>Indoor Coaching</button>

                                        </div>
                                        <div class="col-auto">
                                            <button class="btn athlete-skills" disabled>Indoor Coaching</button>
                                        </div>
                                    </div>

                                </div>


                                <!-- brands-numb-of-athelete -->
                                <div class="col-12 left-green-border  d-lg-flex align-items-center">
                                    <h1 class="brands-review-headings">
                                        Number of Athletes
                                    </h1>
                                    <div class="row d-flex align-items-center px-lg-3">
                                        <div class="col-auto ">
                                            <button class="btn no-of-athe" disabled>12</button>

                                        </div>

                                    </div>

                                </div>


                                <!-- brands-who-see-job -->
                                <div class="col-12 left-green-border brands-who-see-jobs d-lg-flex align-items-center">
                                    <h1 class="brands-review-headings">
                                        Who can see your job
                                    </h1>
                                    <div class="row d-flex align-items-center seeing-athletes">
                                        <div class="col-auto"><img src="{{asset('front-end/images/multi-ath.png')}}" alt=""></div>
                                        <div class="col-auto">
                                            <h6 class="mb-0">all Sponserpro Athelete</h6>
                                        </div>
                                    </div>

                                </div>






                                <!-- brands-additional-files -->
                                <div class="col-12 left-green-border brands-additional-files-covers">
                                    <h1 class="brands-review-headings">
                                        Additional Project Files & Cover
                                    </h1>
                                    <div class="row">
                                        <div class="col-auto">
                                            <img src="{{asset('front-end/images/projects-files.png')}}" alt=""
                                                class="img-fluid brands-additional-img">
                                        </div>
                                        <div class="col-auto">
                                            <img src="{{asset('front-end/images/projects-files.png')}}" alt=""
                                                class="img-fluid brands-additional-img">
                                        </div>
                                        <div class="col-auto">
                                            <img src="{{asset('front-end/images/projects-files.png')}}" alt=""
                                                class="img-fluid brands-additional-img">
                                        </div>
                                        <div class="col-auto">
                                            <img src="{{asset('front-end/images/projects-files.png')}}" alt=""
                                                class="img-fluid brands-additional-img">
                                        </div>
                                    </div>

                                </div>

                                <!-- download-btn -->
                                <div class="col-12 d-flex justify-content-md-end">

                                    <a href="" class="btn accept-btn" type="button">Download File</a>


                                </div>








                            </div>

                            <!-- management-tab -->
                            <div class="tab-pane " id="management" role="tabpanel" aria-labelledby="management">
                                <div class="col-12 left-green-border mt-4">
                                    <h1 class="brands-review-headings">
                                        Bulk Actions
                                    </h1>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <p>Select any records from the list of Athletes below so that you can either
                                                Bulk Message or Bulk Pay them. You can also apply filters to narrow your
                                                search.</p>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="" class="btn post-job-btn">Bulk massages</a>
                                            <a href="" class="btn bulk-pay-btn">Bulk pay</a>
                                        </div>

                                    </div>
                                </div>

                                <!-- all-athletes filter -->
                                <div class="col-12">
                                    <div class="row py-3 g-3 ">
                                        <div class="col-12 col-sm-auto">
                                            <h1 class="app-page-sub-title  "> All Athletes </h1>
                                        </div>
                                        <div class="col-12 col-sm-auto ">

                                            <select class="form-select ">
                                                <option selected="" value="option-1">Athlete name</option>
                                                <option value="option-2">All Sports</option>
                                                <option value="option-3">Men's Baseball</option>
                                                <option value="option-4">Men's Basketball</option>


                                            </select>
                                        </div>
                                        <div class="col-12 col-sm-auto ">

                                            <select class="form-select ">
                                                <option selected="" value="option-1">Statuse by</option>
                                                <option value="option-2">Non Profits</option>
                                                <option value="option-3">Tiktok Creation</option>
                                                <option value="option-4">Faith</option>


                                            </select>
                                        </div>
                                        <div class="col-12 col-sm-auto ">

                                            <select class="form-select ">
                                                <option selected="" value="option-1">Any agrement statuse</option>
                                                <option value="option-2">Facebook</option>
                                                <option value="option-3">Twitter</option>
                                                <option value="option-4">Instagram</option>


                                            </select>
                                        </div>

                                        <div class="col-12 col-sm-auto">

                                            <select class="form-select ">
                                                <option selected="" value="option-1">Sort by latest</option>
                                                <option value="option-2">Current Athletes</option>
                                                <option value="option-3">Former Athletes</option>
                                                <option value="option-4">All Athletes</option>


                                            </select>
                                        </div>
                                        <div class=" col-auto">
                                            <a href="#"><img src="{{asset('front-end/images/right-rotate.png')}}" alt=""></a>
                                        </div>
                                        <!--//-->
                                        <div class=" col-auto">
                                            <a href="#"><img src="assets/images/login.png" alt=""></a>
                                        </div>
                                        <!--//login-->
                                        <div class="col-12 col-sm-auto ">

                                            <a href="#advance-filter" class="social-followers-btn btn bg-white"> Advance
                                                filter</a>

                                        </div>

                                    </div>
                                </div>



                                <!-- all athelets cards -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-6">
                                        <div class="view-detail-athletes-cards">
                                            <div class="d-flex justify-content-between  mb-3">
                                                <img src="{{asset('front-end/images/job-user.png')}}" alt="">
                                                <p class="date">Feb 27, 2023</p>
                                            </div>
                                            <h6>Erika Cucala Page</h6>
                                            <p class="mb-0">Women's Fencing University of Notre Dame</p>
                                            <div class="d-flex justify-content-between align-items-center py-3">
                                                <a href="" style="color:#63AF31;">Athelet profile</a>
                                                <a href="" style="color:#595959;">Messages</a>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <a href="" class="post-job-btn btn"
                                                    style="border-radius: 50px; width:100%">Hire Athlete</a>

                                            </div>
                                            <div class="col-12">

                                                <a href="" class="bulk-pay-btn btn"
                                                    style="border-radius: 50px; width: 100%;">Not interested</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- col -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="view-detail-athletes-cards">
                                            <div class="d-flex justify-content-between  mb-3">
                                                <img src="{{asset('front-end/images/job-user.png')}}" alt="">
                                                <p class="date">Feb 27, 2023</p>
                                            </div>
                                            <h6>Erika Cucala Page</h6>
                                            <p class="mb-0">Women's Fencing University of Notre Dame</p>
                                            <div class="d-flex justify-content-between align-items-center py-3">
                                                <a href="" style="color:#63AF31;">Athelet profile</a>
                                                <a href="" style="color:#595959;">Messages</a>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <a href="" class="post-job-btn btn"
                                                    style="border-radius: 50px; width:100%">Hire Athlete</a>

                                            </div>
                                            <div class="col-12">

                                                <a href="" class="bulk-pay-btn btn"
                                                    style="border-radius: 50px; width: 100%;">Not interested</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- col -->

                                </div>




                            </div>










                        </div>
                    </div>















                </div>
               
     

@endsection
@section('script')
@endsection
