@extends('layouts.dashboard')
@section('style')
@endsection
@section('content')

			    <div class="row title-row g-3 mb-4 py-3 align-items-center justify-content-between">
				    <div class="col-auto mt-0 d-flex" >
			            <h1 class="app-page-title mb-0">Create a job post </h1>
				    </div>

			    </div><!--//row-->

			    <div class="row  ">
                    <!-- title-and-steps -->
					 <div class="row g-0 py-3 border-green d-md-flex align-items-center">
						<div class="col-md-3">
							<h1 class="app-page-sub-title "> Title & Details </h1>
						</div>
						<div class="col-md-9  d-flex justify-content-md-end">
								    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="step1-tab" data-bs-toggle="tab" data-bs-target="#step1" type="button" role="tab" aria-controls="step1" aria-selected="true" >Step<span class="job-count">1</span></button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="step2-tab" data-bs-toggle="tab" data-bs-target="#step2" type="button" role="tab" aria-controls="step2" aria-selected="false" disabled>Step <span class="job-count">2</span></button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="step3-tab" data-bs-toggle="tab" data-bs-target="#step3" type="button" role="tab" aria-controls="step3" aria-selected="false" disabled>Step<span class="job-count">3</span></button>
                        </li>

                      </ul>
						</div>
					</div>

					<div class="row posted-jobs p-0">
						<div class="col-12 ">
							<div class="tab-content py-4">


                                <!-- step1 -->
								<div class="tab-pane active " id="step1" role="tabpanel" aria-labelledby="step1-tab">
                                    <div class="row p-0 g-0 g-md-4">
                                        <!-- col -->
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Job name *</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Job name" required>
                                              </div>
                                              <p>Here are some great examples:</p>
                                              <ul>
                                                <li>Instagram Product Promotion</li>
                                                <li>In-Person Autograph Session</li>
                                              </ul>
                                        </div>
                                        <!-- col -->
                                        <div class="col-lg-6">
                                            <label for="exampleFormControlselect" class="form-label">Job Category *</label>
                                            <select class="form-select mb-3" aria-label="Default select example">
                                                <option selected>Select Category</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                              </select>
                                              <p>Let's categorize your job, which help us personalize your job details and match your job relevants athlete and team. Here are some suggestions based on your job title:</p>
                                        </div>
                                        <!-- col -->
                                        <div class="col-12">
                                            <label>How many athlete(s) do you need for this job? *</label>
                                            <div class="row gx-3">
												<div class="col-lg-6 pt-3 ">
													<div class="form-check  d-flex align-items-center no-of-athlets">
														<img src="{{asset('front-end/images/ath-1.png')}}" alt="">
														<h6 class="mb-0 px-2">Preferred Payment Option</h6>
														<input class="form-check-input ms-auto me-2" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>


													  </div>
												</div>
												<div class="col-lg-6 pt-3 ">
													<div class="form-check  d-flex align-items-center no-of-athlets">
														<img src="{{asset('front-end/images/multi-ath.png')}}" alt="">
														<h6 class="mb-0 px-2">Preferred Payment Option</h6>
														<input class="form-check-input ms-auto me-2" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >


													  </div>
												</div>

                                            </div>


                                        </div>
                                        <!-- col -->
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">Job Description</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Description" rows="5"></textarea>
                                              </div>
                                              <p>A good description includes:</p>
                                              <ul>
                                                <li>What the deliverable is</li>
                                                <li>Type of athlete or team you’re looking for</li>
                                                <li>Anything unique about the project, team, or your company</li>
                                              </ul>
                                              <label for="exampleFormControlselect" class="form-label">What additional skills and expertise are important to you?</label>
                                              <select class="form-select " aria-label="Default select example">
                                                  <option selected>Select Category</option>
                                                  <option value="1">One</option>
                                                  <option value="2">Two</option>
                                                  <option value="3">Three</option>
                                                </select>
                                                <p class="my-4">Type your preferred skill and hit enter</p>
                                        </div>
                                        <!-- col -->
                                        <!-- deliverables -->
                                        <div class="col-12 deliverable d-md-flex align-items-center border-green py-3 mb-3">
                                            <h3 class="app-page-title mb-3 mb-lg-0 text-start">Deliverables *</h3>
                                            <a href="" class="ms-auto ">Add New Deliverable<i class="fa-solid fa-plus px-2"></i></a>

                                        </div>

                                        <div class="col-12">
                                            <div class="row p-0 g-0 g-md-3">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlTextarea1" class="form-label">1st Deliverable</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="1st Deliverable" rows="10"></textarea>
                                                      </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label>What additional skills and expertise are important to you?</label>
                                                    <ul class="nav nav-tabs mt-2" id="myTab" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link active" id="cash-tab" data-bs-toggle="tab" data-bs-target="#cash" type="button" role="tab" aria-controls="cash" aria-selected="true">Cash</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                          <button class="nav-link" id="product-tab" data-bs-toggle="tab" data-bs-target="#product" type="button" role="tab" aria-controls="product" aria-selected="false">Product</button>
                                                        </li>

                                                      </ul>

                      <div class="tab-content py-1">
                        <div class="tab-pane active" id="cash" role="tabpanel" aria-labelledby="cash-tab">

							<div class="col-12">


								<div class="d-md-flex ">
									<div class="me-md-3">
										<label for="exampleFormControlInput1" class="form-label">Cash Payment for Deliverable *</label>
									<input type="text" class="form-control " id="exampleFormControlInput1" placeholder="$ " required>
									</div>
									<div>
										<label for="exampleFormControlselect" class="form-label">starting date for this deliverable </label>
										<select class="form-select mb-2" aria-label="Default select example">
											<option selected>Select date and time</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										  </select>
									</div>


								</div>

							</div>
							<div class="col-12">
								<label for="exampleFormControlInput1" class="form-label">Estimated time of completion(eg. 5 days, 1 week, 2 months) *</label>

								<div class="d-md-flex ">
									<input type="text" class="form-control me-md-3" id="exampleFormControlInput1" placeholder="Estimated no.of time" required>
									<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Select time frame" required>

								</div>

							</div>






                        </div>
                        <div class="tab-pane" id="product" role="tabpanel" aria-labelledby="product-tab">
							<div class="row">
								<div class="col-12">
									<div class="mb-2">
										<label for="exampleFormControlTextarea1" class="form-label">Cash Payment for Deliverable *</label>
										<textarea class="form-control" id="exampleFormControlTextarea1" placeholder="In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate" rows="5"></textarea>
									  </div>

										<label for="exampleFormControlselect" class="form-label">starting date for this deliverable </label>
										<select class="form-select mb-2" aria-label="Default select example">
											<option selected>Select date and time</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										  </select>


								</div>
								<div class="col-12">
									<label for="exampleFormControlInput1" class="form-label">Estimated time of completion(eg. 5 days, 1 week, 2 months) *</label>

									<div class="d-md-flex ">
										<input type="text" class="form-control me-md-3" id="exampleFormControlInput1" placeholder="Estimated no.of time" required>
										<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Select time frame" required>

									</div>

								</div>
							</div>

                        </div>


                      </div>

                                                </div>
                                            </div>

                                        </div>
                                        <!-- col -->
                                        <!-- exclusive -->

                                        <div class="col-lg-6 my-3 exclusive-sec">
                                            <div class="row border-green py-3 exclusive d-md-flex align-items-center">
                                                <div class="col-auto"><h3 class="app-page-title  mb-3 mb-lg-0 text-start">Exclusive * </h3> </div>
                                                <div class="col-auto ms-md-auto" >
													<input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>
                                                     <label class="btn btn-secondary mb-2 mb-md-0" for="option1">Non Exclusive Deal</label>

                                                   <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
                                                    <label class="btn btn-secondary" for="option2">Exclusive Deal</label>
                                                    <!-- <a href="" class="btn me-2" style="margin-left: auto;">Non Exclusive Deal</a>
                                                    <a href="" style="margin-left: auto;">Exclusive Deal</a> -->
                                                </div>
                                            </div>
                                            <div class="my-2">
                                                <label for="exampleFormControlTextarea1" class="form-label">Specifics on Exclusive/Non Exclusive Deal</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Specifics on Exclusive/Non Exclusive Deal" rows="13"></textarea>
                                              </div>

                                        </div>
                                        <!-- col additional-projects -->
                                        <div class="col-lg-6 my-3">
                                            <div class=" d-flex align-items-center border-green py-3">
                                                 <h3 class="app-page-title mb-0">Additional project files (optional)</h3>

                                            </div>
                                            <p class="mt-5">Here are some great examples:</p>
                                            <ul>
                                              <li>Social media post that you want shared</li>
                                              <li>Direction to place of business</li>
                                              <li>Marketing Materials</li>
                                            </ul>
											<div class="text-center bg-white py-5" style="border-radius: 8px;">
												<label for="file-input">
													<img src="{{asset('front-end/images/cloud-computing.png')}}" alt="" class="img-fluid ">
													<p>Drag or upload image</p>
												  </label>
												  <input id="file-input" type="file" class="d-none"/>
											</div>



                                        </div>
                                        <div class="row g-0">
                                            <div class="col d-flex justify-content-end">

													<a href="{{url('misc')}}" class="btn next-step-btn d-flex  align-items-center" type="button">
														<div class="text-start">Next step</div>
														<div class="ms-auto  d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

													</a>

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
