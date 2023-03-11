@extends('layouts.dashboard')
@section('style')
@endsection

<!-- add-new-content -->
<div id="add-new-content" class="popup-overlay ">
        <div class="popup">
            <div class="row  ">

                <div class="col-auto">
					<a class="close" href="#">&times;</a>

					<h2>Create new post</h2>


				</div>
				<div class="col-12  py-4">
					<label class="text-black"><b>Add Photo/Video</b></label>
					<div class="form-check  p-0">
						<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
						<label class="form-check-label" for="flexRadioDefault2"> Upload
						</label>
					  </div>
					  <div class="upload-project-img">
						<label for="file" class="text-center">
							<img src="assets/images/cloud-computing.png" alt="">
							<p>Drag or upload project image</p>
						  </label>
						<input type="file" id="file" accept="image/jpeg, image/png, image/jpg" class="d-none">
					  </div>
					 <div>

						<img id="image" class="img-fluid my-4">
					 </div>

					  <div class="">
						<label for="exampleFormControlTextarea1" class="form-label text-black"><b>Post Caption</b></label>
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="Enter Your Caption Here" style="background-color: #F5F5F5;"></textarea>
					  </div>

				</div>


            </div>


				<div class="row g-0 d-md-flex justify-content-md-end  mt-md-5 mt-3">
					<div class="col-auto d-md-flex">

						<a href="home.html" class="btn close-btn d-flex  align-items-center mt-md-0 mt-3" type="button">
							<div class="text-start">Cancel </div>
							<div class="ms-auto  d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

						</a>
						<a href="" class="btn Continue-btn d-flex  align-items-center" type="button">
							<div class="text-start">Post</div>
							<div class="ms-auto  d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

						</a>


					</div>

				</div>




        </div>
    </div>

<div id="post-job" class="popup-overlay ">
		<div class="popup">
			<div class="row  ">

				<div class="col-auto">
					<a class="close" href="#">&times;</a>
					<h6>Getting Started</h6>
					<h2>What would you like to do?</h2>
					<p>Please complete your profile. Your profile needs to have these information. Completed profile becomes more trustworthy</p>
				</div>


			</div>
			<div class="row">

			<div class="col-lg-6 text-center">
				<div class="post-job-popup">
				  <div class="form-check  d-flex justify-content-end">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
					<label class="form-check-label" for="flexRadioDefault2">
					</label>

				  </div>
				  <img src="{{asset('front-end/images/part-time 1.png')}}" alt="">
					<h4>Preferred Payment Option</h4>
					<p>Please add your payment details to hire athletes</p>
				</div>

			</div>
			<div class="col-lg-6 text-center mt-lg-0 mt-3">
				<div class="post-job-popup">

				<div class="form-check d-flex justify-content-end">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
					<label class="form-check-label" for="flexRadioDefault2">
					</label>
				  </div>
				  <img src="{{asset('front-end/images/part-time 1.png')}}" alt="">
				  <h4>Preferred Payment Option</h4>
				   <p>Please add your payment details to hire athletes</p>
			</div>
				</div>
				<div class="row g-0 d-md-flex justify-content-md-end  mt-md-5 mt-3">
					<div class="col-auto d-md-flex">
						<a href="post-job.html" class="btn Continue-btn d-flex  align-items-center" type="button">
							<div class="text-start">Continue</div>
							<div class="ms-auto  d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

						</a>
						<a href="" class="btn close-btn d-flex  align-items-center mt-md-0 mt-3" type="button">
							<div class="text-start">Cancel </div>
							<div class="ms-auto  d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

						</a>


					</div>

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
                            <div class="ms-auto col-auto">
                                <a href="edit-profile.html"><img src="{{asset('front-end/images/edit-profile.png')}}" alt="" ></a>

                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="">
                                            <img src="{{asset('front-end/images/avatar.png')}}" alt="" class="img-fluid user-img">
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

                            <a href="" class=""><img src="{{asset('front-end/images/add-info.png')}}" alt=""></a>





                        </div>
                        <div class="row business-categori my-4">
                            <h6 class="sub-title">Business Category:</h6>
                            <a href="" class=""><img src="{{asset('front-end/images/add-info.png')}}" alt=""></a>
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
                                    <img src="{{asset('front-end/images/content-writing.png')}}" alt="" class="img-fluid text-center">
                                </a>



                            </div>






                        </div>
                        <div class="tab-pane ms-md-3" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="col-12 d-flex justify-content-end" >
                                <a href="#post-job" class="btn add-ques-btn ms-auto" role="button">Post new job<i class="fa-solid fa-plus px-2"></i></a>
                            </div>
                            <div class="text-center py-5">
                                <a href="">
                                    <img src="{{asset('front-end/images/product-review.png')}}" alt="" class="img-fluid text-center">
                                </a>


                            </div>
                        </div>
                        <div class="tab-pane ms-md-3" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                            <div class="text-center py-5">
                                <a href="">
                                    <img src="{{asset('front-end/images/profile-reviews.png')}}" alt="" class="img-fluid text-center">
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
