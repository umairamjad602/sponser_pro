@extends('layouts.dashboard')
@section('style')
@endsection
@section('content')

                <div class="row " >
                    <!-- cover-profile-pic-upload -->

                    <div class="col-lg-12 edit-profile-brands mb-2" id="image-background" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{asset('front-end/images/profile-bg.png')}}); height:auto ;">
                        <div class=" text-center">
							 <label for="jsimageupload">
								<img src="{{asset('front-end/images/upload-photo.png')}}"  alt="" class="edit-cover-pic-brands">
								<h6 class="text-white">Change Background Picture</h6>
								<p>Recommended resolution is 1440px x 280px</span></p>
							  </label>
							  <input type="file"  accept="image/*" class="d-none" onchange="updateImage()" id="jsimageupload">



                        </div>

                        <div class=" text-left mb-3">
							<label for="inputFile" >
								<img src="{{asset('front-end/images/profile-placeholder.png')}}"  id="profileimg" alt="Img" alt="" class="img-fluid " style=" width:200px; border-radius: 8px;" >

							  </label>
                         <input type="file" id="inputFile" accept="image/jpeg, image/png, image/jpg" onchange="readUrl(this)" class="d-none">

                        </div>

                    </div>
                    <!-- form fields  -->


                    <div class="col-lg-4 col-md-6">
               <div class="my-3">
               <label for="exampleInput" class="form-label">Company name</label>
              <input type="text" class="form-control" id="exampleInput" placeholder="Enter company name">
              </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="my-3">
                        <label for="exampleInput" class="form-label">Contact Number</label>
                       <input type="text" class="form-control" id="exampleInput" placeholder="Enter Contact Number">
                       </div>
                             </div>
                             <div class="col-lg-4 col-md-6">
                                <div class="my-3">
                                <label for="exampleInput" class="form-label">City</label>
                               <input type="text" class="form-control" id="exampleInput" placeholder="Enter City name">
                               </div>
                                     </div>
                                     <div class="col-lg-4 col-md-6">
                                        <div class="my-3">
                                        <label for="exampleInput" class="form-label">Business Category</label>
                                       <input type="text" class="form-control" id="exampleInput" placeholder="Enter Business Category">
                                       </div>
                                             </div>
                                             <div class="col-lg-4 col-md-6">
                                                <div class="my-3">
                                                <label for="exampleInput" class="form-label">Instagram Profile URL</label>
                                               <input type="text" class="form-control" id="exampleInput" placeholder="Enter Instagram Profile URL">
                                               </div>
                                                     </div>
                                                     <div class="col-lg-4 col-md-6">
                                                        <div class="my-3">
                                                        <label for="exampleInput" class="form-label">Twitter Profile URL</label>
                                                       <input type="text" class="form-control" id="exampleInput" placeholder="Enter Twitter Profile URL">
                                                       </div>
                                                             </div>
															 <div class="col-lg-4 col-md-6">
																<div class="my-3">
																<label for="exampleInput" class="form-label">TikTok Profile URL</label>
															   <input type="text" class="form-control" id="exampleInput" placeholder="Enter Twitter Profile URL">
															   </div>
																	 </div>
                                                             <div class="col-lg-4 col-md-6">
                                                                <div class="my-3">
                                                                <label for="exampleInput" class="form-label">Company Website</label>
                                                               <input type="text" class="form-control" id="exampleInput" placeholder="Enter Company Website">
                                                               </div>
                                                                     </div>  <div class="col-lg-8 col-md-12">
                                                                        <div class="my-3">
                                                                        <label for="exampleInput" class="form-label">Bio</label>
                                                                       <input type="text" class="form-control" id="exampleInput" placeholder="Enter Bio">
                                                                       </div>
                                                                             </div>
																			 <!-- athelets-profile-fields -->
																			 <div class="col-lg-4 col-md-6">
																				<div class="my-3">
																				<label for="exampleInput" class="form-label">First name</label>
																			   <input type="text" class="form-control" id="exampleInput" placeholder="Enter First name">
																			   </div>
																					 </div>
																					 <div class="col-lg-4 col-md-6">
																						<div class="my-3">
																						<label for="exampleInput" class="form-label">Last name</label>
																					   <input type="text" class="form-control" id="exampleInput" placeholder="Enter Last name">
																					   </div>
																							 </div>
																							 <div class="col-lg-4 col-md-6">
																								<div class="my-3">
																								<label for="exampleInput" class="form-label">Expected graduation date</label>
																							   <input type="date" class="form-control" id="exampleInput" placeholder="Select Date">
																							   </div>
																									 </div>
																									 <div class="col-lg-4 col-md-6">
																										<div class="my-3">
																										<label for="exampleInput" class="form-label">Birth date</label>
																									   <input type="date" class="form-control" id="exampleInput" placeholder="Select Date">
																									   </div>
																											 </div>

																											 <div class="col-lg-4 col-md-6">
																												<div class="my-3">
																												<label for="exampleInput" class="form-label">Jersey No.</label>
																											   <input type="Text" class="form-control" id="exampleInput" placeholder="Jersey No.">
																											   </div>
																													 </div>
																													 <div class="col-lg-4 col-md-6">
																														<div class="my-3">
																														<label for="exampleInput" class="form-label">City</label>
																													   <input type="Text" class="form-control" id="exampleInput" placeholder="City">
																													   </div>
																															 </div>
																															 <div class="col-12 my-3">
																																<label for="exampleInput" class="form-label">Height (in feet & inches)</label>
																																<div class="d-md-flex">
																																	<input type="Text" class="form-control me-3 mb-3 mb-md-0" id="exampleInput" placeholder="ft.">
																															   <input type="Text" class="form-control" id="exampleInput" placeholder="in.">
																															   </div>
																																	 </div>
																																	 <div class="col-lg-4 col-md-6">
																																		<div class="my-3">
																																		<label for="exampleInput" class="form-label">Weight (in lbs)</label>
																																	   <input type="Text" class="form-control" id="exampleInput" placeholder="Weight">
																																	   </div>
																																			 </div>
																																			 <div class="col-lg-8 col-md-6">
																																				<div class="my-3">
																																				<label for="exampleInput" class="form-label">Career Highlights</label>
																																			   <input type="Text" class="form-control" id="exampleInput" placeholder="Career Highlights">
																																			   </div>
																																					 </div>
																																					 <div class="col-md-6 my-3">
																																						<label for="exampleInput" class="form-label">Sports</label>

																																						<select class="form-select " style="background-color: white !important;">
																																							  <option selected="" value="option-1">Sports</option>
																																							  <option value="option-2">All Sports</option>
																																							  <option value="option-3">Men's Baseball</option>
																																							  <option value="option-4">Men's Basketball</option>


																																						</select>
																																					</div>
																																					<div class="col-md-6 my-3">
																																						<label for="exampleInput" class="form-label">Skills</label>
																																						<select class="form-select " style="background-color: white !important;">
																																							  <option selected="" value="option-1">Skills</option>
																																							  <option value="option-2">Non Profits</option>
																																							  <option value="option-3">Tiktok Creation</option>
																																							  <option value="option-4">Faith</option>


																																						</select>
																																					</div>
																																					<div class="col-md-6 my-3">
																																						<label for="exampleInput" class="form-label">Are you a US citizen?</label>
																																						<div>
																																							<div class="form-check form-check-inline ps-0">
																																								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
																																								<label class="form-check-label" for="inlineRadio1">Yes</label>
																																							  </div>
																																							  <div class="form-check form-check-inline">
																																								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
																																								<label class="form-check-label" for="inlineRadio2">No</label>
																																							  </div>
																																						</div>

																																					</div>
																																					<div class="col-md-6 my-3">
																																						<label for="exampleInput" class="form-label">Set my profile as private</label>
																																						<div>
																																							<div class="form-check form-check-inline ps-0">
																																								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" checked>
																																								<label class="form-check-label" for="inlineRadio3">Yes</label>
																																							  </div>
																																							  <div class="form-check form-check-inline">
																																								<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
																																								<label class="form-check-label" for="inlineRadio4">No</label>
																																							  </div>
																																						</div>

																																					</div>


																																					<!-- clothing-sizes -->
																																					<div class="col-12 py-3 border-green my-2">
																																						<h3 class="mb-0">Clothing Sizes</h3>
																																					 </div>
																																					 <div class="col-lg-6 ">
																																						<div class="my-3">
																																						<label for="exampleInput" class="form-label">Hat</label>
																																					   <input type="Text" class="form-control" id="exampleInput" placeholder="Hat size (inches)">
																																					   </div>
																																							 </div>
																																							 <div class="col-lg-6 my-3">
																																								<label for="exampleInput" class="form-label">Shirt</label>
																																								<select class="form-select " style="background-color: white !important;">
																																									<option selected="" value="option-1">S-(small)</option>
																																									<option value="option-2">M-(medium)</option>
																																									<option value="option-3">L-(large)</option>


																																								</select>
																																							</div>
																																							<div class="col-lg-6 my-3">
																																								<label for="exampleInput" class="form-label">Pants (waist size in inches)</label>
																																								<select class="form-select " style="background-color: white !important;">
																																									  <option selected="" value="option-1">24</option>
																																									  <option value="option-2">25</option>
																																									  <option value="option-3">26</option>
																																									  <option value="option-3">27</option>
																																									  <option value="option-3">28</option>



																																								</select>
																																							</div>
																																							<div class="col-lg-6 my-3">
																																								<label for="exampleInput" class="form-label">Shoes</label>
																																								<select class="form-select " style="background-color: white !important;">
																																									  <option selected="" value="option-1">2.5</option>
																																									  <option value="option-2">3</option>
																																									  <option value="option-3">3.5</option>
																																									  <option value="option-4">4</option>


																																								</select>
																																							</div>


                                                                             <!-- account-setting -->
                                                                             <div class="col-12 py-3 border-green my-2">
                                                                                <h3 class="mb-0">Account Settings</h3>
                                                                             </div>
                                                                             <div class="col-md-6">
                                                                                <div class="my-3">
                                                                                <label for="exampleInput" class="form-label">Email</label>
                                                                               <input type="text" class="form-control" id="exampleInput" placeholder="Enter your email">
                                                                               </div>
                                                                                     </div>
                                                                                     <div class=" col-md-6">
                                                                                        <div class="my-3">
                                                                                        <label for="exampleInput" class="form-label">Password</label>
                                                                                       <input type="text" class="form-control" id="exampleInput" placeholder="Enter password">
                                                                                       </div>
                                                                                             </div>
																							 <div class="col-12 my-3">
																								<div class="form-check form-switch">
																									<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
																									<label class="form-check-label" for="flexSwitchCheckChecked">I want to receive of the SMS and email marketing notifications</label>
																								  </div>
																							 </div>






              </div>

              <div class="row g-0    mt-md-5 mt-3">
                <div class="col-12 d-md-flex justify-content-md-end">
                    <a href="{{url('profile-screen')}}" class="btn Continue-btn d-flex  align-items-center" type="button">
                        <div class="text-start">Save</div>
                        <div class="ms-auto  d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

                    </a>
                    <a href="" class="btn close-btn d-flex  align-items-center mt-md-0 mt-3" type="button">
                        <div class="text-start">Cancel </div>
                        <div class="ms-auto  d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

                    </a>


                </div>

            </div>



		

@endsection
@section('script')
@endsection
