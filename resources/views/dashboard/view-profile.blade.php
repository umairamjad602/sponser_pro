@extends('layouts.dashboard')
@section('style')
@endsection
@section('content')

<div class="app-content pt-3 p-md-3 p-lg-4 posted-job-review">
		    <div class="container-fluid " style="padding:2%;">
                <div class="row ">
                    <!-- brands-coverpic-col -->
                    <div class="col-12 brands-profile-cover" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{asset('front-end/images/profile-bg.png')}});">
                        <div class="brands-athlete-info text-center">
                            <img src="{{asset('front-end/images/ath-pic.png')}}" alt="" class="brands-profile-pic">
                            <h6>Ui designer</h6>
                            <p>Spectrum Reach <span style="font-weight: 500; text-transform: uppercase;"> All MOGL Athletes</span></p>
                        </div>
                    </div>

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
                        <p>Simpson College in Redding, California is creating an athletics department and we want to kick off their football program. We would like to do a recruitment camp around the end of June.</p>

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
                                    <p class="review-brands-description m-0 px-lg-2">1 Day(s) after athlete accepts the agreement</p>
                                </div>

                            </div>
                        </div>
                        <p class="mt-2">Personal meet and greet and coaching for recruitment. We would need them for 8 hours to actively coach with the new recruits.</p>


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

					<!-- apply-job button for athletes -->
					<div class="col-12 d-flex justify-content-end">
						<a href="" class="btn  accept-btn">Apply</a>

					</div>



















                </div>



		    </div><!--//container-fluid-->
	    </div><!--//app-content-->

@endsection
@section('script')
@endsection
