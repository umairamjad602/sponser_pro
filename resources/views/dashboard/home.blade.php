@extends('layouts.dashboard')
@section('style')
@endsection
@section('content')

	    <div class="app-content pt-3 p-md-3 p-lg-4 sponser-tab">
		    <div style="padding:2%;">
			    <div class="row title-row g-3 py-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto mt-0 d-flex" >
			            <h1 class="app-page-title mb-0">My Posted Jobs </h1>
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

					<div class="row py-3 posted-jobs">
						<div class="col-12 ">
							<div class="tab-content py-5">
								<div class="tab-pane active text-center" id="jobs" role="tabpanel" aria-labelledby="jobs-tab">

								<img src="assets/images/postedjob-character.png" alt="" class="img-fluid">
								<h1>Ready to get started? Post <br> a job here .</h1>
								<a class="btn post-job-btn" href="#post-job" role="button">Create job<i class="fa-solid fa-plus px-2"></i></a>
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
