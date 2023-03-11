@extends('layouts.dashboard')
@section('style')
@endsection
@section('content')
<div class="app-content pt-3 p-md-3 p-lg-4 ">
		    <div style="padding:2%;">
			    <div class="row title-row g-3 mb-4 py-3 align-items-center justify-content-between">
				    <div class="col-auto mt-0 d-flex" >
			            <h1 class="app-page-title mb-0">Create a job post </h1>
				    </div>

			    </div><!--//row-->

			    <div class="row  ">
                    <!-- title-and-steps -->
					 <div class="row g-0 py-3 border-green d-md-flex align-items-center">
						<div class="col-md-3">
							<h1 class="app-page-sub-title  "> Misc</h1>
						</div>
						<div class="col-md-9 d-flex justify-content-md-end">
								    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link " id="step1-tab" data-bs-toggle="tab" data-bs-target="#step1" type="button" role="tab" aria-controls="step1" aria-selected="true" disabled>Step<span class="job-count">1</span></button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="step2-tab" data-bs-toggle="tab" data-bs-target="#step2" type="button" role="tab" aria-controls="step2" aria-selected="false">Step <span class="job-count">2</span></button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="step3-tab" data-bs-toggle="tab" data-bs-target="#step3" type="button" role="tab" aria-controls="step3" aria-selected="false" disabled>Step<span class="job-count">3</span></button>
                        </li>

                      </ul>
						</div>
					</div>

					<div class="row posted-jobs">
						<div class="col-12 ">
							<div class="tab-content py-4">



                                <!-- step2 -->
								<div class="tab-pane active misc" id="step2" role="tabpanel" aria-labelledby="step2-tab">

									<div class="row">
										<div class="col-12">
											<h3>screening Questions <span style="color:#B9B9B9 ;">(optional)</span></h3>
										</div>
										<div class="col-lg-6 ">
                                           <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Q1.</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Question here?">
                                          </div>

										</div>
                                        <div class="col-lg-6 ">
                                            <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">Q2.</label>
                                             <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="enter city, state/zip code">
                                           </div>

                                         </div>
									</div>

                                </div>


							  </div>
						</div>
                        <div class="row g-0 d-flex justify-content-end">
                            <div class="col-auto d-flex">
								<a href="post-job.html" class="btn back-btn d-flex  align-items-center" type="button">
									<div class="text-start">Back</div>
									<div class="ms-auto  d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

								</a>
								<a href="{{url('visibilty')}}" class="btn next-step-btn d-flex  align-items-center" type="button">
									<div class="text-start">Next step</div>
									<div class="ms-auto  d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

								</a>


                            </div>
                        </div>
					</div>









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
