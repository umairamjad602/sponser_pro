@extends('layouts.dashboard')
@section('style')
@endsection
@include('dashboard.modals.after-login-modal')
@section('content')

			    <div class="row title-row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-lg-1 col-md-2 col-12 mt-0">
			            <h1 class="app-page-title mb-0">JOBS </h1>
				    </div>
				    <div class="col-lg-11 col-md-10 col-12 mt-0">

						    <div class="row g-2 justify-content-start  align-items-center">


								<div class=" col-12 col-sm-auto">
									<form class="app-search-form docs-search mt-0 mt-md-3">
										<input type="text" placeholder="job title, keywords" name="search" class="form-control search-input">
										<button type="submit" class="btn search-btn btn-primary" value="Search"><i class="fa-solid fa-magnifying-glass"></i></button>
									</form>
								</div><!--//search-box-->

							    <div class="col-12 col-sm-auto ">

								    <select class="form-select  ">
										  <option selected="" value="option-1">All payment mode</option>
										  <option value="option-2">Pay with cash</option>
										  <option value="option-3">Pay with product</option>


									</select>
							    </div>
								<div class="col-12 col-sm-auto ">

								    <input type="text" class="form-control" id="exampleFormControlInput1" style="background: #F5F5F5;" placeholder="$ Min Price - $ Max price" required>
							    </div>
								<div class=" col-12 col-sm-auto">
									<form class="app-search-form docs-search mt-0 mt-md-3">
										<input type="text" placeholder="location" name="search" class="form-control search-input">
										<button type="submit" class="btn search-btn btn-primary" value="Search"><img src="{{asset('front-end/images/location-icon.png')}}" alt="" style="width:20px;" ></button>
									</form>
								</div><!--//location-search-box-->
								<div class=" col-auto">
									<a href="#"><img src="{{asset('front-end/images/right-rotate.png')}}" alt=""></a>
								</div><!--//-->
								<div class=" col-auto">
									<a href="#"><img src="{{asset('front-end/images/login.png')}}" alt=""></a>
								</div><!--//login-->

						    </div><!--//row-->

				    </div><!--//col-auto-->
			    </div><!--//row-->

			    <div class="row g-3 job-sec">
					<div class="row py-3">
						<div class="col-auto">
							<h1 class="app-page-sub-title  mb-0"> ALL JOBS </h1>
						</div>
						<div class="col-auto ">

							<select class="form-select w-auto ">
								  <option selected="" value="option-1">Filter</option>
								  <option value="option-2">Autograph Signing</option>
								  <option value="option-3">Appearances and Meet & Greets</option>
								  <option value="option-4">Social Media Campaigns</option>
								  <option value="option-5">Commercials</option>
								  <option value="option-6">Personal Training and Coaching</option>

							</select>
						</div>
					</div>

				    <div class="col-12 col-md-6 col-xl-3 col-xxl-3">
					    <div class="app-card app-card-doc shadow-sm h-100">
						    <div class="app-card-body p-4 ">
							    <div class="row  py-1">
									<div class="col-3 p-0"><a href="#"><img src="{{asset('front-end/images/job-user.png')}}" alt="" class="img-fluid "></a></div>
									<div class="col-9">
										<div>
										<a href="#"><h6>Courtney Henry</h6></a>
										<p>Share Your Story with 10-10 Media for $$$</p>
									</div>
									</div>

								</div>


								<div class="row d-flex py-1">
									<div class="col-9">
										<p>Share Your Story with 10-10 Media for $$$</p>
									</div>
									<div class="col-3 " style="text-align: end;"><a href="#"><img src="assets/images/job-story.png" alt="" ></a></div>
								</div>

								<div class="row py-1 mb-3">
									<div class="col-auto categori my-1"><a href=""><p>indoor Coaching</p></a></div>
									<div class="col-auto categori my-1"><a href=""><p>outdoor Coaching</p></a></div>

								</div>

							    <div class="row py-1">
									<div class="col-8 text-dark" >
										<p class="location-text"><img src="{{asset('front-end/images/location-icon.png')}}" alt="" style="width:30px;" >Location N/A
										</p>
									</div>
									<div class="col-4 " style="text-align: end;"><p class="price me-auto">$ 200</p></div>

								</div>
								<div class="row py-1 ">
									<a href="{{url('view-profile')}}" class="btn view-job-btn mb-3 d-flex mx-auto align-items-center" type="button">
										<div class="text-start">view job</div>
										<div class="ms-auto  d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

									</a>
									<a href="#profile-complete" class="btn view-profile-btn  d-flex mx-auto align-items-center" type="button">
										<div class="text-start">View profile</div>
										<div class="ms-auto d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

									</a>



								</div>




						    </div><!--//app-card-body-->

						</div><!--//app-card-->
				    </div><!--//col-->
					<div class="col-12 col-md-6 col-xl-3 col-xxl-3">
					    <div class="app-card app-card-doc shadow-sm h-100">
						    <div class="app-card-body p-4 ">
							    <div class="row  py-1">
									<div class="col-3 p-0"><a href="#"><img src="{{asset('front-end/images/job-user.png')}}" alt="" class="img-fluid "></a></div>
									<div class="col-9">
										<div>
										<a href="#"><h6>Courtney Henry</h6></a>
										<p>Share Your Story with 10-10 Media for $$$</p>
									</div>
									</div>

								</div>


								<div class="row d-flex py-1">
									<div class="col-9">
										<p>Share Your Story with 10-10 Media for $$$</p>
									</div>
									<div class="col-3 " style="text-align: end;"><a href="#"><img src="assets/images/job-story.png" alt="" ></a></div>
								</div>

								<div class="row py-1 mb-3">
									<div class="col-auto categori my-1"><a href=""><p>indoor Coaching</p></a></div>
									<div class="col-auto categori my-1"><a href=""><p>outdoor Coaching</p></a></div>

								</div>

							    <div class="row py-1">
									<div class="col-8 text-dark" >
										<p class="location-text"><img src="{{asset('front-end/images/location-icon.png')}}" alt="" style="width:30px;" >Location N/A
										</p>
									</div>
									<div class="col-4 " style="text-align: end;"><p class="price me-auto">$ 200</p></div>

								</div>
								<div class="row py-1 ">
									<a href="{{url('view-profile')}}" class="btn view-job-btn mb-3 d-flex mx-auto align-items-center" type="button">
										<div class="text-start">view job</div>
										<div class="ms-auto  d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

									</a>
									<a href="#profile-complete" class="btn view-profile-btn  d-flex mx-auto align-items-center" type="button">
										<div class="text-start">View profile</div>
										<div class="ms-auto d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

									</a>



								</div>




						    </div><!--//app-card-body-->

						</div><!--//app-card-->
				    </div><!--//col-->
					<div class="col-12 col-md-6 col-xl-3 col-xxl-3">
					    <div class="app-card app-card-doc shadow-sm h-100">
						    <div class="app-card-body p-4 ">
							    <div class="row  py-1">
									<div class="col-3 p-0"><a href="#"><img src="{{asset('front-end/images/job-user.png')}}" alt="" class="img-fluid "></a></div>
									<div class="col-9">
										<div>
										<a href="#"><h6>Courtney Henry</h6></a>
										<p>Share Your Story with 10-10 Media for $$$</p>
									</div>
									</div>

								</div>


								<div class="row d-flex py-1">
									<div class="col-9">
										<p>Share Your Story with 10-10 Media for $$$</p>
									</div>
									<div class="col-3 " style="text-align: end;"><a href="#"><img src="assets/images/job-story.png" alt="" ></a></div>
								</div>

								<div class="row py-1 mb-3">
									<div class="col-auto categori my-1"><a href=""><p>indoor Coaching</p></a></div>
									<div class="col-auto categori my-1"><a href=""><p>outdoor Coaching</p></a></div>

								</div>

							    <div class="row py-1">
									<div class="col-8 text-dark" >
										<p class="location-text"><img src="{{asset('front-end/images/location-icon.png')}}" alt="" style="width:30px;" >Location N/A
										</p>
									</div>
									<div class="col-4 " style="text-align: end;"><p class="price me-auto">$ 200</p></div>

								</div>
								<div class="row py-1 ">
									<a href="{{url('view-profile')}}" class="btn view-job-btn mb-3 d-flex mx-auto align-items-center" type="button">
										<div class="text-start">view job</div>
										<div class="ms-auto  d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

									</a>
									<a href="#profile-complete" class="btn view-profile-btn  d-flex mx-auto align-items-center" type="button">
										<div class="text-start">View profile</div>
										<div class="ms-auto d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

									</a>



								</div>




						    </div><!--//app-card-body-->

						</div><!--//app-card-->
				    </div><!--//col-->
					<div class="col-12 col-md-6 col-xl-3 col-xxl-3">
					    <div class="app-card app-card-doc shadow-sm h-100">
						    <div class="app-card-body p-4 ">
							    <div class="row  py-1">
									<div class="col-3 p-0"><a href="#"><img src="{{asset('front-end/images/job-user.png')}}" alt="" class="img-fluid "></a></div>
									<div class="col-9">
										<div>
										<a href="#"><h6>Courtney Henry</h6></a>
										<p>Share Your Story with 10-10 Media for $$$</p>
									</div>
									</div>

								</div>


								<div class="row d-flex py-1">
									<div class="col-9">
										<p>Share Your Story with 10-10 Media for $$$</p>
									</div>
									<div class="col-3 " style="text-align: end;"><a href="#"><img src="assets/images/job-story.png" alt="" ></a></div>
								</div>

								<div class="row py-1 mb-3">
									<div class="col-auto categori my-1"><a href=""><p>indoor Coaching</p></a></div>
									<div class="col-auto categori my-1"><a href=""><p>outdoor Coaching</p></a></div>

								</div>

							    <div class="row py-1">
									<div class="col-8 text-dark" >
										<p class="location-text"><img src="{{asset('front-end/images/location-icon.png')}}" alt="" style="width:30px;" >Location N/A
										</p>
									</div>
									<div class="col-4 " style="text-align: end;"><p class="price me-auto">$ 200</p></div>

								</div>
								<div class="row py-1 ">
									<a href="{{url('view-profile')}}" class="btn view-job-btn mb-3 d-flex mx-auto align-items-center" type="button">
										<div class="text-start">view job</div>
										<div class="ms-auto  d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

									</a>
									<a href="#profile-complete" class="btn view-profile-btn  d-flex mx-auto align-items-center" type="button">
										<div class="text-start">View profile</div>
										<div class="ms-auto d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

									</a>



								</div>




						    </div><!--//app-card-body-->

						</div><!--//app-card-->
				    </div><!--//col-->
					<div class="col-12 col-md-6 col-xl-3 col-xxl-3">
					    <div class="app-card app-card-doc shadow-sm h-100">
						    <div class="app-card-body p-4 ">
							    <div class="row  py-1">
									<div class="col-3 p-0"><a href="#"><img src="{{asset('front-end/images/job-user.png')}}" alt="" class="img-fluid "></a></div>
									<div class="col-9">
										<div>
										<a href="#"><h6>Courtney Henry</h6></a>
										<p>Share Your Story with 10-10 Media for $$$</p>
									</div>
									</div>

								</div>


								<div class="row d-flex py-1">
									<div class="col-9">
										<p>Share Your Story with 10-10 Media for $$$</p>
									</div>
									<div class="col-3 " style="text-align: end;"><a href="#"><img src="assets/images/job-story.png" alt="" ></a></div>
								</div>

								<div class="row py-1 mb-3">
									<div class="col-auto categori my-1"><a href=""><p>indoor Coaching</p></a></div>
									<div class="col-auto categori my-1"><a href=""><p>outdoor Coaching</p></a></div>

								</div>

							    <div class="row py-1">
									<div class="col-8 text-dark" >
										<p class="location-text"><img src="{{asset('front-end/images/location-icon.png')}}" alt="" style="width:30px;" >Location N/A
										</p>
									</div>
									<div class="col-4 " style="text-align: end;"><p class="price me-auto">$ 200</p></div>

								</div>
								<div class="row py-1 ">
									<a href="{{url('view-profile')}}" class="btn view-job-btn mb-3 d-flex mx-auto align-items-center" type="button">
										<div class="text-start">view job</div>
										<div class="ms-auto  d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

									</a>
									<a href="#profile-complete" class="btn view-profile-btn  d-flex mx-auto align-items-center" type="button">
										<div class="text-start">View profile</div>
										<div class="ms-auto d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

									</a>



								</div>




						    </div><!--//app-card-body-->

						</div><!--//app-card-->
				    </div><!--//col-->
					<div class="col-12 col-md-6 col-xl-3 col-xxl-3">
					    <div class="app-card app-card-doc shadow-sm h-100">
						    <div class="app-card-body p-4 ">
							    <div class="row  py-1">
									<div class="col-3 p-0"><a href="#"><img src="{{asset('front-end/images/job-user.png')}}" alt="" class="img-fluid "></a></div>
									<div class="col-9">
										<div>
										<a href="#"><h6>Courtney Henry</h6></a>
										<p>Share Your Story with 10-10 Media for $$$</p>
									</div>
									</div>

								</div>


								<div class="row d-flex py-1">
									<div class="col-9">
										<p>Share Your Story with 10-10 Media for $$$</p>
									</div>
									<div class="col-3 " style="text-align: end;"><a href="#"><img src="assets/images/job-story.png" alt="" ></a></div>
								</div>

								<div class="row py-1 mb-3">
									<div class="col-auto categori my-1"><a href=""><p>indoor Coaching</p></a></div>
									<div class="col-auto categori my-1"><a href=""><p>outdoor Coaching</p></a></div>

								</div>

							    <div class="row py-1">
									<div class="col-8 text-dark" >
										<p class="location-text"><img src="{{asset('front-end/images/location-icon.png')}}" alt="" style="width:30px;" >Location N/A
										</p>
									</div>
									<div class="col-4 " style="text-align: end;"><p class="price me-auto">$ 200</p></div>

								</div>
								<div class="row py-1 ">
									<a href="{{url('view-profile')}}" class="btn view-job-btn mb-3 d-flex mx-auto align-items-center" type="button">
										<div class="text-start">view job</div>
										<div class="ms-auto  d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

									</a>
									<a href="#profile-complete" class="btn view-profile-btn  d-flex mx-auto align-items-center" type="button">
										<div class="text-start">View profile</div>
										<div class="ms-auto d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

									</a>



								</div>




						    </div><!--//app-card-body-->

						</div><!--//app-card-->
				    </div><!--//col-->
					<div class="col-12 col-md-6 col-xl-3 col-xxl-3">
					    <div class="app-card app-card-doc shadow-sm h-100">
						    <div class="app-card-body p-4 ">
							    <div class="row  py-1">
									<div class="col-3 p-0"><a href="#"><img src="{{asset('front-end/images/job-user.png')}}" alt="" class="img-fluid "></a></div>
									<div class="col-9">
										<div>
										<a href="#"><h6>Courtney Henry</h6></a>
										<p>Share Your Story with 10-10 Media for $$$</p>
									</div>
									</div>

								</div>


								<div class="row d-flex py-1">
									<div class="col-9">
										<p>Share Your Story with 10-10 Media for $$$</p>
									</div>
									<div class="col-3 " style="text-align: end;"><a href="#"><img src="assets/images/job-story.png" alt="" ></a></div>
								</div>

								<div class="row py-1 mb-3">
									<div class="col-auto categori my-1"><a href=""><p>indoor Coaching</p></a></div>
									<div class="col-auto categori my-1"><a href=""><p>outdoor Coaching</p></a></div>

								</div>

							    <div class="row py-1">
									<div class="col-8 text-dark" >
										<p class="location-text"><img src="{{asset('front-end/images/location-icon.png')}}" alt="" style="width:30px;" >Location N/A
										</p>
									</div>
									<div class="col-4 " style="text-align: end;"><p class="price me-auto">$ 200</p></div>

								</div>
								<div class="row py-1 ">
									<a href="{{url('view-profile')}}" class="btn view-job-btn mb-3 d-flex mx-auto align-items-center" type="button">
										<div class="text-start">view job</div>
										<div class="ms-auto  d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

									</a>
									<a href="#profile-complete" class="btn view-profile-btn  d-flex mx-auto align-items-center" type="button">
										<div class="text-start">View profile</div>
										<div class="ms-auto d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

									</a>



								</div>




						    </div><!--//app-card-body-->

						</div><!--//app-card-->
				    </div><!--//col-->
					<div class="col-12 col-md-6 col-xl-3 col-xxl-3">
					    <div class="app-card app-card-doc shadow-sm h-100">
						    <div class="app-card-body p-4 ">
							    <div class="row  py-1">
									<div class="col-3 p-0"><a href="#"><img src="{{asset('front-end/images/job-user.png')}}" alt="" class="img-fluid "></a></div>
									<div class="col-9">
										<div>
										<a href="#"><h6>Courtney Henry</h6></a>
										<p>Share Your Story with 10-10 Media for $$$</p>
									</div>
									</div>

								</div>


								<div class="row d-flex py-1">
									<div class="col-9">
										<p>Share Your Story with 10-10 Media for $$$</p>
									</div>
									<div class="col-3 " style="text-align: end;"><a href="#"><img src="assets/images/job-story.png" alt="" ></a></div>
								</div>

								<div class="row py-1 mb-3">
									<div class="col-auto categori my-1"><a href=""><p>indoor Coaching</p></a></div>
									<div class="col-auto categori my-1"><a href=""><p>outdoor Coaching</p></a></div>

								</div>

							    <div class="row py-1">
									<div class="col-8 text-dark" >
										<p class="location-text"><img src="{{asset('front-end/images/location-icon.png')}}" alt="" style="width:30px;" >Location N/A
										</p>
									</div>
									<div class="col-4 " style="text-align: end;"><p class="price me-auto">$ 200</p></div>

								</div>
								<div class="row py-1 ">
									<a href="{{url('view-profile')}}" class="btn view-job-btn mb-3 d-flex mx-auto align-items-center" type="button">
										<div class="text-start">view job</div>
										<div class="ms-auto  d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

									</a>
									<a href="#profile-complete" class="btn view-profile-btn  d-flex mx-auto align-items-center" type="button">
										<div class="text-start">View profile</div>
										<div class="ms-auto d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

									</a>



								</div>




						    </div><!--//app-card-body-->

						</div><!--//app-card-->
				    </div><!--//col-->










			    </div><!--//row-->
			   
		 
@endsection
@section('script')
@endsection
