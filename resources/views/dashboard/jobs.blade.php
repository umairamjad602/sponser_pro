@extends('layouts.dashboard')
@section('style')
@endsection

<!-- after-login-poppup -->
	<div id="profile-complete" class="popup-overlay after-login-popup">
        <div class="popup">
            <div class="row  ">

                <div class="col-auto">
					<a class="close" href="#">&times;</a>
					<h4>Please complete your profile.</h4>
					<p>Please complete your profile. Your profile needs to have these information. Completed profile becomes more trustworthy</p>

				</div>


            </div>
			<div class="row">
				<div class="col-12 col-lg-6 ">
					<div class="comp-profile-box text-center">
					<img src="{{asset('front-end/images/bank 1.png')}}" alt="" class="img-fluid mb-3">
					<h6>Preferred Payment Option</h6>
					<p>Please add your payment details to hire athletes</p>
					<button class="btn popup-btn-red" >Missing</button>
				</div>
				<div class="comp-profile-box text-center">
					<H6>Bio Information</H6>
					<button class="btn popup-btn-red"  >Missing</button>
				</div>
				<div class="comp-profile-box text-center py-md-4">
					<H6>Career Highlights</H6>
					<button class="btn popup-btn-red"  >Missing</button>
				</div>
				<div class="comp-profile-box text-center py-md-4">
					<H6>Birth Date</H6>
					<button class="btn popup-btn-red"  >Missing</button>
				</div>
				<div class="comp-profile-box text-center py-md-4">
					<H6>Jerssy NO.</H6>
					<button class="btn popup-btn-red"  >Missing</button>
				</div>
				<div class="comp-profile-box text-center py-md-4">
					<H6>Height</H6>
					<button class="btn popup-btn-red"  >Missing</button>
				</div>
				<div class="comp-profile-box text-center py-md-4">
					<H6>Weight</H6>
					<button class="btn popup-btn-red"  >Missing</button>
				</div>
				</div>
				<div class="col-12 col-lg-6">
					<div class="comp-profile-box text-center py-md-3">
					<H6>Twitter Profile URL</H6>
					<button class="btn popup-btn-red"  >Missing</button>
				</div>
				<div class="comp-profile-box text-center py-md-4">
					<H6>Profile Photo</H6>
					<button class="btn popup-btn-red" >Missing</button>
				</div>
				<div class="comp-profile-box text-center py-md-4">
					<H6>Instagram Profile URL</H6>
					<button class="btn popup-btn-red"  >Missing</button>
				</div>
				<div class="comp-profile-box text-center py-md-4">
					<H6>Company Website</H6>
					<button class="btn popup-btn-red"  >Missing</button>
				</div>
				<div class="comp-profile-box text-center py-md-4">
					<H6>Shoes siize</H6>
					<button class="btn popup-btn-red"  >Missing</button>
				</div>
				<div class="comp-profile-box text-center py-md-4">
					<H6>Shirt size</H6>
					<button class="btn popup-btn-red"  >Missing</button>
				</div>
				<div class="comp-profile-box text-center py-md-4">
					<H6>Pants size</H6>
					<button class="btn popup-btn-red"  >Missing</button>
				</div>
				<div class="comp-profile-box text-center py-md-4">
					<H6>Hat size</H6>
					<button class="btn popup-btn-red"  >Missing</button>
				</div>
				</div>




			</div>
			<div class="row g-0 d-md-flex justify-content-md-end  mt-md-5 mt-3">
				<div class="col-auto d-md-flex">
					<a href="edit-profile.html" class="btn Continue-btn d-flex  align-items-center" type="button" style="width:250px;">
						<div class="text-start">Complate your profile</div>
						<div class="ms-auto  d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

					</a>
					<a href="" class="btn close-btn d-flex  align-items-center mt-md-0 mt-3" type="button">
						<div class="text-start">Skip </div>
						<div class="ms-auto  d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

					</a>


				</div>

			</div>

        </div>
    </div>
	<!-- popup end -->
@section('content')
<div class="app-content pt-3 p-md-3 p-lg-4">
		    <div style="padding:2%;">
			    <div class="row title-row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-lg-1 col-md-2 col-12 mt-0">
			            <h1 class="app-page-title mb-0">JOBS </h1>
				    </div>
				    <div class="col-lg-11 col-md-10 col-12 mt-0">

						    <div class="row g-2 justify-content-start  align-items-center">


								<div class=" col-12 col-sm-auto">
									<form class="app-search-form docs-search">
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
									<form class="app-search-form docs-search">
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
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
@endsection
@section('script')
@endsection
