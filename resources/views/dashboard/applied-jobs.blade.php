@extends('layouts.dashboard')
@section('style')
@endsection
@section('content')


			    <div class="row title-row g-3 py-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto mt-0 d-flex" >
			            <h1 class="app-page-title mb-0">My Applied Jobs  </h1>
                        <a class="total-jobs btn">0 Jobs</a>
				    </div>
				    <div class="col-auto mt-0">
					     <div class="page-utilities">
						    <div class="row g-2 justify-content-start justify-content-md-end align-items-center">

								<div class=" col-12 col-sm-auto">
									<form class="app-search-form docs-search">
										<input type="text" placeholder="job title" name="search" class="form-control search-input">
										<button type="submit" class="btn search-btn btn-primary" value="Search"><i class="fa-solid fa-magnifying-glass"></i></button>
									</form>
                                   								</div><!--//search-box-->
                                <div class=" col-12 col-sm-auto">

                                    <a href="{{url('disclose-deal')}}" class="btn view-job-btn" style="border-radius: 8px; width: 100%;">Disclose non-SponserPro deals</a>
								</div>




						    </div><!--//row-->
					    </div><!--//table-utilities-->
				    </div><!--//col-auto-->
			    </div><!--//row-->

			    <div class="row g-3 ">
                    <div class="col-lg-9">
					 <div class="row py-3 g-2">

						<div class="col-12  ">
								    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="jobs-tab" data-bs-toggle="tab" data-bs-target="#jobs" type="button" role="tab" aria-controls="jobs" aria-selected="true">All Jobs <span class="job-count">0</span></button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pending-tab" data-bs-toggle="tab" data-bs-target="#pending" type="button" role="tab" aria-controls="pending" aria-selected="false">Invited <span class="job-count">0</span></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="applied-tab" data-bs-toggle="tab" data-bs-target="#applied" type="button" role="tab" aria-controls="applied" aria-selected="false">Applied <span class="job-count">0</span></button>
                          </li>

                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="hired-tab" data-bs-toggle="tab" data-bs-target="#hired" type="button" role="tab" aria-controls="hired" aria-selected="false">Hired <span class="job-count">0</span></button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="ongoing-tab" data-bs-toggle="tab" data-bs-target="#ongoing" type="button" role="tab" aria-controls="ongoing" aria-selected="false">Ongoing <span class="job-count">0</span></button>
                        </li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="payment-tab" data-bs-toggle="tab" data-bs-target="#payment" type="button" role="tab" aria-controls="payment" aria-selected="false">Payment Requested <span class="job-count">0</span></button>
						  </li>
						  <li class="nav-item" role="presentation">
							<button class="nav-link" id="completed-tab" data-bs-toggle="tab" data-bs-target="#completed" type="button" role="tab" aria-controls="completed" aria-selected="false">Completed <span class="job-count">0</span></button>
						  </li>
                          <li class="nav-item" role="presentation">
							<button class="nav-link" id="not-hired-tab" data-bs-toggle="tab" data-bs-target="#not-hired" type="button" role="tab" aria-controls="not-hired" aria-selected="false">Not hired <span class="job-count">0</span></button>
						  </li>
                      </ul>
						</div>
					</div>

					<div class="row py-3 posted-jobs">
						<div class="col-12 ">
							<div class="tab-content py-5">
								<div class="tab-pane active text-center" id="jobs" role="tabpanel" aria-labelledby="jobs-tab">

								<img src="{{asset('front-end/images/postedjob-character.png')}}" alt="" class="img-fluid">
								<h1>Ready to get paid? Find opportunities <a href="{{url('jobs')}}" style="color: #63AF31;">here.</a> </h1>

								</div>
								<div class="tab-pane  text-center" id="pending" role="tabpanel" aria-labelledby="pending-tab">

									<img src="{{asset('front-end/images/postedjob-character.png')}}" alt="" class="img-fluid">
									<h1>Ready to get paid? Find opportunities <a href="{{url('jobs')}}" style="color: #63AF31;">here.</a> </h1>

									</div>
                                    <div class="tab-pane  text-center" id="applied" role="tabpanel" aria-labelledby="applied-tab">

                                        <img src="{{asset('front-end/images/postedjob-character.png')}}" alt="" class="img-fluid">
                                        <h1>Ready to get paid? Find opportunities <a href="{{url('jobs')}}" style="color: #63AF31;">here.</a> </h1>

                                        </div>


									<div class="tab-pane  text-center" id="hired" role="tabpanel" aria-labelledby="hired-tab">

										<img src="{{asset('front-end/images/postedjob-character.png')}}" alt="" class="img-fluid">
										<h1>Ready to get paid? Find opportunities <a href="{{url('jobs')}}" style="color: #63AF31;">here.</a> </h1>

										</div>

										<div class="tab-pane text-center" id="ongoing" role="tabpanel" aria-labelledby="ongoing-tab">

											<img src="{{asset('front-end/images/postedjob-character.png')}}" alt="" class="img-fluid">
											<h1>Ready to get paid? Find opportunities <a href="{{url('jobs')}}" style="color: #63AF31;" >here.</a> </h1>

											</div>

											<div class="tab-pane text-center" id="payment" role="tabpanel" aria-labelledby="payment-tab">

												<img src="{{asset('front-end/images/postedjob-character.png')}}" alt="" class="img-fluid">
                                                <h1>Ready to get paid? Find opportunities <a href="{{url('jobs')}}" style="color: #63AF31;">here.</a> </h1>

												</div>

												<div class="tab-pane text-center" id="completed" role="tabpanel" aria-labelledby="completed-tab">

													<img src="{{asset('front-end/images/postedjob-character.png')}}" alt="" class="img-fluid">
													<h1>Ready to get paid? Find opportunities <a href="{{url('jobs')}}" style="color: #63AF31;">here.</a> </h1>

													</div>
                                                    <div class="tab-pane text-center" id="not-hired" role="tabpanel" aria-labelledby="not-hired-tab">

                                                        <img src="{{asset('front-end/images/postedjob-character.png')}}" alt="" class="img-fluid">
                                                        <h1>Ready to get paid? Find opportunities <a href="{{url('jobs')}}" style="color: #63AF31;">here.</a> </h1>

                                                        </div>





							  </div>
						</div>
					</div>
                </div>
                <div class="col-lg-3 apply-job-right-sidebar">

                    <div class=" d-flex my-3 justify-content-between apply-job-right-boxes" >
			            <h4 class=" mb-0">To-do  </h4>
                        <a class="total-jobs btn">1 Task(s)</a>

				    </div>
                    <div class="apply-job-right-boxes">
                        <img src="{{asset('front-end/images/tiktok-light.svg')}}" alt="" class="img-fluid" style="width:35px;">
                        <a href="{{url('edit-profile')}}">Add TikTok Link</a>
                    </div >
                    <div class="apply-job-right-boxes">
                        <img src="{{asset('front-end/sponser-favicon.png')}}" alt="" class="img-fluid" style="width:35px;">
                        <a href="{{url('manage-athalets-profile')}}#myinterests">Setup MyInterests</a>
                    </div>
                    <div class="apply-job-right-boxes">
                        <img src="{{asset('front-end/sponser-favicon.png')}}" alt="" class="img-fluid" style="width:35px;">
                        <a href="{{url('jobs')}}">Ready to get paid?</a>
                    </div>
					<div class="apply-job-right-boxes">
                        <img src="{{asset('front-end/images/chat-support.svg')}}" alt="" class="img-fluid" style="width:35px;">
                        <a href="{{url('chat')}}">Contact SponserPro</a>
                    </div>

                </div>

			    </div>
		 

@endsection
@section('script')
@endsection
