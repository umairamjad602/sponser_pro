@extends('layouts.dashboard')
@section('style')
@endsection
@section('content')


			    <div class="row title-row g-3 py-3 mb-4 d-flex align-items-center justify-content-between">
				    <div class="col-auto mt-0 d-flex" >
			            <h1 class="app-page-title mb-0">My Posted Jobs </h1>
                        <a class="total-jobs btn">0 Jobs</a>
				    </div>
				    <div class="col mt-0">
					     <div class="page-utilities">
						    <div class="row g-2 justify-content-start justify-content-md-end align-items-center">

								<div class=" col-12 col-sm-auto">
									<form class="app-search-form docs-search">
										<input type="text" placeholder="job title" name="search" class="form-control search-input">
										<button type="submit" class="btn search-btn btn-primary" value="Search"><i class="fa-solid fa-magnifying-glass"></i></button>
									</form>
								</div><!--//search-box-->




						    </div><!--//row-->
					    </div><!--//table-utilities-->
				    </div><!--//col-auto-->
			    </div><!--//row-->

			    <div class="row g-3 ">
					 <div class="row py-3 g-2">
						<div class="col-12 col-lg-2 col-md-1">
							<h1 class="app-page-sub-title  mb-0"> All Jobs </h1>
						</div>
						<div class="col-12 col-lg-10 col-md-11 ">
								    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="jobs-tab" data-bs-toggle="tab" data-bs-target="#jobs" type="button" role="tab" aria-controls="jobs" aria-selected="true">All Jobs <span class="job-count">0</span></button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pending-tab" data-bs-toggle="tab" data-bs-target="#pending" type="button" role="tab" aria-controls="pending" aria-selected="false">Pending <span class="job-count">0</span></button>
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
                      </ul>
						</div>
					</div>

					<div class="row py-3 p-0 ">
						<div class="col-12 p-0">
							<div class="tab-content ">
								<div class="tab-pane active " id="jobs" role="tabpanel" aria-labelledby="jobs-tab">
                                    <div class="row g-3">
                                        <div class="col-12 col-md-4 col-xl-3 ">
                                            <div class=" brands-posted-job app-card app-card-doc shadow-sm  h-100">

                                                <div class="app-card-body p-3 has-card-actions">

                                                   <img src="{{asset('front-end/images/job-user.png')}}" alt="">
                                                    <div class=" d-flex mt-4 justify-content-between">
                                                        <div class="">
                                                            <p class="job-name">UI DESIGNER</p>
                                                            <p class="date">Feb 27, 2023</p>
                                                            <p class="invited">Invited <span>12</span></p>
                                                            <p class="price">$100</p>
                                                        </div>
                                                        <div class="text-end">
                                                            <div>
                                                                <a href="" class="pending">Pending</a>
                                                            </div>
                                                            <div>
                                                                <a href="" class="invite-athletes">Invite athletes</a>
                                                            </div>
                                                            <div>
                                                                <a href="" class="view-applications">View Applicants</a>
                                                            </div>

                                                        </div>

                                                    </div><!--//app-doc-meta-->

                                                    <div class="app-card-actions">
                                                        <div class="dropdown">
                                                            <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                </svg>
                                                            </div><!--//dropdown-toggle-->
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="{{url('view-details')}}">View</a></li>
                                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                <li><a class="dropdown-item" href="#">Share a job post</a></li>

                                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                                            </ul>
                                                        </div><!--//dropdown-->
                                                    </div><!--//app-card-actions-->

                                                </div><!--//app-card-body-->

                                            </div><!--//app-card-->
                                        </div><!--//col-->
                                        <div class="col-12 col-md-4 col-xl-3 ">
                                            <div class=" brands-posted-job app-card app-card-doc shadow-sm  h-100">

                                                <div class="app-card-body p-3 has-card-actions">

                                                   <img src="{{asset('front-end/images/job-user.png')}}" alt="">
                                                    <div class=" d-flex mt-4 justify-content-between">
                                                        <div class="">
                                                            <p class="job-name">UI DESIGNER</p>
                                                            <p class="date">Feb 27, 2023</p>
                                                            <p class="invited">Invited <span>12</span></p>
                                                            <p class="price">$100</p>
                                                        </div>
                                                        <div class="text-end">
                                                            <div>
                                                                <a href="" class="pending">Pending</a>
                                                            </div>
                                                            <div>
                                                                <a href="" class="invite-athletes">Invite athletes</a>
                                                            </div>
                                                            <div>
                                                                <a href="" class="view-applications">View Applicants</a>
                                                            </div>

                                                        </div>

                                                    </div><!--//app-doc-meta-->

                                                    <div class="app-card-actions">
                                                        <div class="dropdown">
                                                            <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                </svg>
                                                            </div><!--//dropdown-toggle-->
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="{{url('view-details')}}">View</a></li>
                                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                <li><a class="dropdown-item" href="#">Share a job post</a></li>

                                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                                            </ul>
                                                        </div><!--//dropdown-->
                                                    </div><!--//app-card-actions-->

                                                </div><!--//app-card-body-->

                                            </div><!--//app-card-->
                                        </div><!--//col-->
                                    </div>






								</div>
								<div class="tab-pane  text-center" id="pending" role="tabpanel" aria-labelledby="pending-tab">

									<img src="assets/images/postedjob-character.png" alt="" class="img-fluid">
									<h1>Ready to get started? Post <br> a job here .</h1>
									<a class="btn post-job-btn" href="#post-job" role="button">Create job<i class="fa-solid fa-plus px-2"></i></a>
									</div>

									<div class="tab-pane  text-center" id="hired" role="tabpanel" aria-labelledby="hired-tab">

										<img src="assets/images/postedjob-character.png" alt="" class="img-fluid">
										<h1>Ready to get started? Post <br> a job here .</h1>
										<a class="btn post-job-btn" href="#post-job" role="button">Create job<i class="fa-solid fa-plus px-2"></i></a>
										</div>

										<div class="tab-pane text-center" id="ongoing" role="tabpanel" aria-labelledby="ongoing-tab">

											<img src="assets/images/postedjob-character.png" alt="" class="img-fluid">
											<h1>Ready to get started? Post <br> a job here .</h1>
											<a class="btn post-job-btn" href="#post-job" role="button">Create job<i class="fa-solid fa-plus px-2"></i></a>
											</div>

											<div class="tab-pane text-center" id="payment" role="tabpanel" aria-labelledby="payment-tab">

												<img src="assets/images/postedjob-character.png" alt="" class="img-fluid">
												<h1>Ready to get started? Post <br> a job here .</h1>
												<a class="btn post-job-btn" href="#post-job" role="button">Create job<i class="fa-solid fa-plus px-2"></i></a>
												</div>

												<div class="tab-pane text-center" id="completed" role="tabpanel" aria-labelledby="completed-tab">

													<img src="assets/images/postedjob-character.png" alt="" class="img-fluid">
													<h1>Ready to get started? Post <br> a job here .</h1>
													<a class="btn post-job-btn" href="#post-job" role="button">Create job<i class="fa-solid fa-plus px-2"></i></a>
													</div>





							  </div>
						</div>
					</div>









			    </div><!--//row-->

		  
@endsection
@section('script')
@endsection
