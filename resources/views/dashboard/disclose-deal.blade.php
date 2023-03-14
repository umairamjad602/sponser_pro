@extends('layouts.dashboard')
@section('style')
@endsection
@section('content')


			    <div class="row title-row g-3 mb-4 py-3 align-items-center justify-content-between">
				    <div class="col-auto mt-0 d-flex" >
			            <h1 class="app-page-title mb-0">Disclose your Non-SponserPro deals </h1>
				    </div>

			    </div><!--//row-->
					<div class="row posted-jobs p-0">
						<div class="col-12 ">
                                    <div class="row p-0 g-0 g-md-4">
                                        <!-- col -->
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Job name *</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Job name" required>
                                              </div>

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

                                        </div>
                                          <!-- col -->
                                          <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Business (Brand) name*</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Business (Brand) name" required>
                                              </div>

                                        </div>
                                          <!-- col -->
                                          <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Platform name *</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Like UpWork, Fiver..." required>
                                              </div>

                                        </div>
                                          <!-- col -->
                                          <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Brand contact email*</label>
                                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Brand contact email" required>
                                              </div>

                                        </div>
                                          <!-- col -->
                                          <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Job Applied Date *</label>
                                                <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Job name" required>
                                              </div>

                                        </div>
                                          <!-- col -->
                                          <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Date of Signed Agreement*</label>
                                                <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Job name" required>
                                              </div>

                                        </div>

                                        <!-- col -->
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">Job Description</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Description" rows="5"></textarea>
                                              </div>

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
                                                    <label>How would you like to pay the athlete for this deliverable?</label>
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
                                                     <label class="btn btn-secondary mb-sm-0 mb-2" for="option1">Non Exclusive Deal</label>

                                                   <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
                                                    <label class="btn btn-secondary" for="option2">Exclusive Deal</label>
                                                 
                                                </div>
                                            </div>
                                            <div class="my-2">
                                                <label for="exampleFormControlTextarea1" class="form-label">Specifics on Exclusive/Non Exclusive Deal</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Specifics on Exclusive/Non Exclusive Deal" rows="7"></textarea>
                                              </div>

                                        </div>
                                        <!-- col additional-projects -->
                                        <div class="col-lg-6 my-3">
                                            <div class=" d-flex align-items-center border-green py-3">
                                                 <h3 class="app-page-title mb-0">Upload Contract or Agreements</h3>

                                            </div>

											<div class="text-center bg-white py-5 mt-5" style="border-radius: 8px;">

												<label for="file-input">
													<img src="{{asset('front-end/images/cloud-computing.png')}}" alt="" class="img-fluid ">
													<p>Drag or upload deal screen shots</p>
												  </label>
												  <input id="file-input" type="file" class="d-none"/>
											</div>



                                        </div>
                                        <!--  -->
                                        <div>
                                            <label for="">Job status :</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                                                <label class="form-check-label" for="inlineRadio1">Hired</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">On Going</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
                                                <label class="form-check-label" for="inlineRadio3">Completed</label>
                                              </div>
                                        </div>

                                        <div class="row g-0">
                                            <div class="col d-flex justify-content-end">
												<a href="" class="btn  d-flex cancel-btn me-3 align-items-center" type="button" >
                                                    <div class="text-start">Cancel</div>
                                                    <div class="ms-auto  d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

                                                </a>
													<a href="" class="btn next-step-btn d-flex  align-items-center" type="button">
														<div class="text-start">Submit</div>
														<div class="ms-auto  d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

													</a>

                                            </div>
                                        </div>
                                    </div>









						</div>
					</div>










		   
@endsection
@section('script')
@endsection
