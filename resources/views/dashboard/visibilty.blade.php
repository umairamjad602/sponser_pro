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
							<h1 class="app-page-sub-title  ">Visibility</h1>
						</div>
						<div class="col-md-9 d-flex justify-content-md-end ">
								    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link " id="step1-tab" data-bs-toggle="tab" data-bs-target="#step1" type="button" role="tab" aria-controls="step1" aria-selected="true" disabled>Step<span class="job-count">1</span></button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link " id="step2-tab" data-bs-toggle="tab" data-bs-target="#step2" type="button" role="tab" aria-controls="step2" aria-selected="false" disabled>Step <span class="job-count">2</span></button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="step3-tab" data-bs-toggle="tab" data-bs-target="#step3" type="button" role="tab" aria-controls="step3" aria-selected="false" >Step<span class="job-count">3</span></button>
                        </li>

                      </ul>
						</div>
					</div>

					<div class="row visibility">
						<div class="col-12 ">
							<div class="tab-content py-4">
                                    <!-- step3 -->
									<div class="tab-pane active " id="step3" role="tabpanel" aria-labelledby="step3-tab">
										<h6 class="">TALNET LOCATION</h6>
										<div class="row">
											<div class="col-lg-6 ">
												<div class="">
												 <label for="exampleFormControlInput1" class="form-label">question 1</label>
												 <select class="form-select " aria-label="Default select example">
													<option selected>Specifics on Exclusive/Non Exclusive Deal ?</option>
													<option value="1">One</option>
													<option value="2">Two</option>
													<option value="3">Three</option>
												  </select>
													   </div>

											 </div>
											 <div class="col-lg-6 ">
												<div class="">
												 <label for="exampleFormControlInput1" class="form-label">question 2</label>
												 <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Specifics on Exclusive/Non Exclusive Deal ?">
											   </div>

											 </div>
										</div>
										<h6 class="pt-4">POINT OF CONTACT</h6>
										<div class="row">
											<div class="col-lg-6 ">
												<div class="">
												 <label for="exampleFormControlInput1" class="form-label">Name</label>
												 <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="enter name">
											   </div>

											 </div>
											 <div class="col-lg-6 ">
												<div class="">
												 <label for="exampleFormControlInput1" class="form-label">Email</label>
												 <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="type email">
											   </div>

											 </div>
										</div>
										<h6 class="pt-4">WHO CAN SEE YOUR JOB ? *</h6>
										<div class="col-lg-6 pt-3">
											<div class="form-check  d-flex align-items-center">
												<img src="assets/images/multi-ath.png" alt="">
												<h6 class="mb-0 px-2">All Sponserpro Athelete</h6>
												<input class="form-check-input ms-auto me-2" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
											  </div>
										</div>
										</div>
							  </div>
						</div>
                        <div class="row g-0 d-flex justify-content-end">
							<div class="col-auto d-flex">
								<a href="misc2.html" class="btn back-btn d-flex  align-items-center" type="button">
									<div class="text-start">Back</div>
									<div class="ms-auto  d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

								</a>
								<a href="{{url('posted-job-revew')}}" class="btn next-step-btn d-flex  align-items-center" type="button">
									<div class="text-start">Review</div>
									<div class="ms-auto  d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>
								</a>
                            </div>
                        </div>
					</div>
			    </div>
		   
@endsection
@section('script')
@endsection
