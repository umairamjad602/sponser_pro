@extends('layouts.dashboard')
@section('style')
@endsection

<!-- invite-job-popup -->
<div id="invite-job" class="popup-overlay ">
			<div class="popup">
				<div class="row  ">

					<div class="col-12">
						<a class="close" href="#">&times;</a>
						<div class="d-md-flex justify-content-between">
							<h2 class="me-md-5">Invite Job to Mardrez McBride</h2>

								<form class="app-search-form">
									<input type="text" placeholder="Name.." name="search" class="form-control search-input">
									<button type="submit" class="btn search-btn btn-primary" value="Search"><i class="fas fa-search"></i></button>
								</form>


						</div>


					</div>


				</div>
				<div class="row mt-3">

				<div class="col-lg-6 text-center">
					<div class="post-job-popup">
					  <div class="form-check  d-flex justify-content-end">
						<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
						<label class="form-check-label" for="flexRadioDefault2">
						</label>

					  </div>
					  <img src="{{asset('front-end/images/free-trial.png')}}" alt="">
						<h4 class="my-2">Trial</h4>
						<p>long-term The Players Locker, $ 500, Dec 23, 2022</p>
					</div>

				</div>
				<div class="col-lg-6 text-center mt-lg-0 mt-3">
					<div class="post-job-popup">

					<div class="form-check d-flex justify-content-end">
						<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
						<label class="form-check-label" for="flexRadioDefault2">
						</label>
					  </div>
					  <img src="{{asset('front-end/images/part-time.png')}}" alt="">
					  <h4 class="my-2">contract</h4>
					   <p>long-term The Players Locker, $ 50, Dec 23, 2022</p>
				</div>
					</div>



				</div>

			</div>
		</div>
		<!-- popup end -->
		<!-- social-follwers-popup -->
		<div id="social-followers" class="popup-overlay ">
			<div class="popup">

				<div class="social-followers row d-md-flex">


					<div class="col-lg-4">
						<a class="close" href="#">&times;</a>
						<label for="">Instagram followers</label>
						<input type="text" class="form-control my-1" id="exampleFormControlInput1" style="background: #F5F5F5;" placeholder="Min IG followers - Max IG followers" required>
					</div>
					<div class="col-lg-4">
						<label for="">Twitter followers</label>
						<input type="text" class="form-control my-1" id="exampleFormControlInput1" style="background: #F5F5F5;" placeholder="Min Twitter followers - Max Twitter followers" required>
					</div>
					<div class="col-lg-3">
						<label for="">TikTok followers</label>
						<input type="text" class="form-control my-1" id="exampleFormControlInput1" style="background: #F5F5F5;" placeholder="Min TikTok followers - Max TikTok followers" required>
					</div>
					<div class="col-lg-1">
						<a href="#"><img src="assets/images/login.png" alt=""></a>
					</div>
				</div>

			</div>
		</div>
		<!-- popup end -->

@section('content')

<div class="app-content pt-3 p-md-3 p-lg-4">
		    <div style="padding:2%;">
			    <div class="row title-row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-12 col-lg-2 col-md-1 mt-0">
			            <h1 class="app-page-title mb-0">Athletes </h1>
				    </div>
				    <div class="col-12 col-lg-10 col-md-11 mt-0">
					     <div class="page-utilities">
						    <div class="row g-2 justify-content-start justify-content-md-end align-items-center">

								<div class=" col-12 col-sm-auto">
									<form class="app-search-form docs-search">
										<input type="text" placeholder="Name" name="search" class="form-control search-input">
										<button type="submit" class="btn search-btn btn-primary" value="Search"><i class="fa-solid fa-magnifying-glass"></i></button>
									</form>
								</div><!--//search-box-->

							    <div class="col-12 col-sm-auto ">

								    <select class="form-select  ">
										  <option selected="" value="option-1">Select university</option>
										  <option value="option-2">Abilene Christian University</option>
										  <option value="option-3">Academy of Art University San Francisco</option>
										  <option value="option-4">Alabama A&M</option>


									</select>
							    </div>


								<div class=" col-auto">
									<a href="#"><img src="assets/images/right-rotate.png" alt=""></a>
								</div><!--//-->
								<div class=" col-auto">
									<a href="#"><img src="assets/images/login.png" alt=""></a>
								</div><!--//login-->

						    </div><!--//row-->
					    </div><!--//table-utilities-->
				    </div><!--//col-auto-->
			    </div><!--//row-->

			    <div class="row g-3 ath-sec">
					<div class="row py-3 g-3 ">
						<div class="col-12 col-sm-auto">
							<h1 class="app-page-sub-title  "> All Athletes </h1>
						</div>
						<div class="col-12 col-sm-auto ">

							<select class="form-select ">
								  <option selected="" value="option-1">Sports</option>
								  <option value="option-2">All Sports</option>
								  <option value="option-3">Men's Baseball</option>
								  <option value="option-4">Men's Basketball</option>


							</select>
						</div>
                        <div class="col-12 col-sm-auto ">

							<select class="form-select ">
								  <option selected="" value="option-1">Skills</option>
								  <option value="option-2">Non Profits</option>
								  <option value="option-3">Tiktok Creation</option>
								  <option value="option-4">Faith</option>


							</select>
						</div>
                        <div class="col-12 col-sm-auto ">

							<select class="form-select ">
								  <option selected="" value="option-1">Platforms</option>
								  <option value="option-2">Facebook</option>
								  <option value="option-3">Twitter</option>
								  <option value="option-4">Instagram</option>


							</select>
						</div>
                        <div class="col-12 col-sm-auto">

							<select class="form-select">
								  <option selected="" value="option-1">Gender</option>
								  <option value="option-2">Male</option>
								  <option value="option-3">Female</option>
								  <option value="option-4">Prefer not to say</option>


							</select>
						</div>
                        <div class="col-12 col-sm-auto">

							<select class="form-select ">
								  <option selected="" value="option-1">Eligibility</option>
								  <option value="option-2">Current Athletes</option>
								  <option value="option-3">Former Athletes</option>
								  <option value="option-4">All Athletes</option>


							</select>
						</div>
                        <div class="col-12 col-sm-auto ">

							<a href="#social-followers" class="social-followers-btn btn"> Social Followers</a>

						</div>

					</div>




                    <!-- all athletes section-cards -->


				    <div class="col-12 col-md-6 col-xl-4 col-xxl-4 athletes-card">
					    <div class="app-card app-card-doc shadow-sm h-100 ">
                            <div class="card-head pt-4 px-4" style="  background-image: url('{{asset('front-end/assets/images/athlete-bg.png')}}');">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-end pb-5">
                                        <a href="#"> <i class="fa-solid fa-heart" style="color:#F43756;"></i></a>

                                    </div>
                                    <div class="col-12 pb-3 pt-5"><a href="#"><img src="assets/images/job-user.png" alt="" ></a></div>
                                </div>

                            </div>
						    <div class="app-card-body  p-4">
							    <div class="row d-flex py-1">
									<div class="col-auto ath-title"><a href="#"><h6>Jack Betts</h6></a></div>
									<div class="col-auto">
										<a href="#"><p class="sub-title">Amherst College</p></a>
										<p class="ath-categori">Men's Football</p>
                                        <p>Junior WR at Amherst College competing at the DIII level. Born and raised Dallas, Texas. Known as "The King of D3 NIL". Holds..</p>

									</div>

								</div>

								<div class="row py-1 mb-3">
									<div class="col-auto categori my-1"><a href=""><p>Gaming</p></a></div>
									<div class="col-auto categori my-1"><a href=""><p>Tranding cards</p></a></div>
                                    <div class="col-auto categori my-1"><a href=""><p>Gaming</p></a></div>
									<div class="col-auto categori my-1"><a href=""><p>Gaming</p></a></div>
                                    <div class="col-auto categori my-1"><a href=""><p>Gaming</p></a></div>
									<div class="col-auto categori my-1"><a href=""><p>Gaming</p></a></div>
								</div>
							   <div class="row py-1 gx-2 gy-2">
                                <div class="col-12    ">
                                    <div class="social-box d-flex align-items-center">
                                        <div><a href="#"><img src="{{asset('front-end/images/insta.png')}}" alt=""></a></div>
                                        <div class="px-2 pt-2"><p><a href="#">jbetts21</a> <br> <span style="font-weight: bold; color: black;">5.4k</span> Followers</p>
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
                               </div>

								<div class="row py-3 ">
									<a href="#invite-job" class="btn view-job-btn mb-3 d-flex mx-auto align-items-center" type="button">
										<div class="text-start">invite to job</div>
										<div class="ms-auto  d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

									</a>
									<a href="{{url('athelets-view-profile')}}" class="btn view-profile-btn  d-flex mx-auto align-items-center" type="button">
										<div class="text-start">View profile</div>
										<div class="ms-auto d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

									</a>



								</div>


						    </div><!--//app-card-body-->

						</div><!--//app-card-->
				    </div><!--//col-->
                    <div class="col-12 col-md-6 col-xl-4 col-xxl-4 athletes-card">
					    <div class="app-card app-card-doc shadow-sm h-100 ">
                            <div class="card-head pt-4 px-4" style="  background-image: url('{{asset('front-end/assets/images/athlete-bg.png')}}');">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-end pb-5">
                                        <a href="#"> <i class="fa-solid fa-heart" style="color:#F43756;"></i></a>

                                    </div>
                                    <div class="col-12 pb-3 pt-5"><a href="#"><img src="assets/images/job-user.png" alt="" ></a></div>
                                </div>

                            </div>
						    <div class="app-card-body  p-4">
							    <div class="row d-flex py-1">
									<div class="col-auto ath-title"><a href="#"><h6>Jack Betts</h6></a></div>
									<div class="col-auto">
										<a href="#"><p class="sub-title">Amherst College</p></a>
										<p class="ath-categori">Men's Football</p>
                                        <p>Junior WR at Amherst College competing at the DIII level. Born and raised Dallas, Texas. Known as "The King of D3 NIL". Holds..</p>

									</div>

								</div>

								<div class="row py-1 mb-3">
									<div class="col-auto categori my-1"><a href=""><p>Gaming</p></a></div>
									<div class="col-auto categori my-1"><a href=""><p>Tranding cards</p></a></div>
                                    <div class="col-auto categori my-1"><a href=""><p>Gaming</p></a></div>
									<div class="col-auto categori my-1"><a href=""><p>Gaming</p></a></div>
                                    <div class="col-auto categori my-1"><a href=""><p>Gaming</p></a></div>
									<div class="col-auto categori my-1"><a href=""><p>Gaming</p></a></div>
								</div>
							   <div class="row py-1 gx-2 gy-2">
                                <div class="col-12    ">
                                    <div class="social-box d-flex align-items-center">
                                        <div><a href="#"><img src="{{asset('front-end/images/insta.png')}}" alt=""></a></div>
                                        <div class="px-2 pt-2"><p><a href="#">jbetts21</a> <br> <span style="font-weight: bold; color: black;">5.4k</span> Followers</p>
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
                               </div>

							   <div class="row py-3 ">
								<a href="#invite-job" class="btn view-job-btn mb-3 d-flex mx-auto align-items-center" type="button">
									<div class="text-start">invite to job</div>
									<div class="ms-auto  d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

								</a>
								<a href="{{url('athelets-view-profile')}}" class="btn view-profile-btn  d-flex mx-auto align-items-center" type="button">
									<div class="text-start">View profile</div>
									<div class="ms-auto d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

								</a>



							</div>


						    </div><!--//app-card-body-->

						</div><!--//app-card-->
				    </div><!--//col-->
                    <div class="col-12 col-md-6 col-xl-4 col-xxl-4 athletes-card">
					    <div class="app-card app-card-doc shadow-sm h-100 ">
                            <div class="card-head pt-4 px-4" style="  background-image: url('{{asset('front-end/assets/images/athlete-bg.png')}}');">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-end pb-5">
                                        <a href="#"> <i class="fa-solid fa-heart" style="color:#F43756;"></i></a>

                                    </div>
                                    <div class="col-12 pb-3 pt-5"><a href="#"><img src="assets/images/job-user.png" alt="" ></a></div>
                                </div>

                            </div>
						    <div class="app-card-body  p-4">
							    <div class="row d-flex py-1">
									<div class="col-auto ath-title"><a href="#"><h6>Jack Betts</h6></a></div>
									<div class="col-auto">
										<a href="#"><p class="sub-title">Amherst College</p></a>
										<p class="ath-categori">Men's Football</p>
                                        <p>Junior WR at Amherst College competing at the DIII level. Born and raised Dallas, Texas. Known as "The King of D3 NIL". Holds..</p>

									</div>

								</div>

								<div class="row py-1 mb-3">
									<div class="col-auto categori my-1"><a href=""><p>Gaming</p></a></div>
									<div class="col-auto categori my-1"><a href=""><p>Tranding cards</p></a></div>
                                    <div class="col-auto categori my-1"><a href=""><p>Gaming</p></a></div>
									<div class="col-auto categori my-1"><a href=""><p>Gaming</p></a></div>
                                    <div class="col-auto categori my-1"><a href=""><p>Gaming</p></a></div>
									<div class="col-auto categori my-1"><a href=""><p>Gaming</p></a></div>
								</div>
							   <div class="row py-1 gx-2 gy-2">
                                <div class="col-12    ">
                                    <div class="social-box d-flex align-items-center">
                                        <div><a href="#"><img src="{{asset('front-end/images/insta.png')}}" alt=""></a></div>
                                        <div class="px-2 pt-2"><p><a href="#">jbetts21</a> <br><span style="font-weight: bold; color: black;">5.4k</span> Followers</p>
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
                                        <div class="px-2 pt-2"><p ><a href="#">jbetts21</a> <br><span style="font-weight: bold; color: black;">5.4k</span>  Followers</p>
                                    </div>


                                    </div>
                                </div>
                               </div>
							   <div class="row py-3 ">
								<a href="#invite-job" class="btn view-job-btn mb-3 d-flex mx-auto align-items-center" type="button">
									<div class="text-start">invite to job</div>
									<div class="ms-auto  d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

								</a>
								<a href="{{url('athelets-view-profile')}}" class="btn view-profile-btn  d-flex mx-auto align-items-center" type="button">
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
				</nav>//app-pagination -->
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->

@endsection
@section('script')
@endsection
