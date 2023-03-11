@extends('layouts.dashboard')
@section('style')
@endsection
@section('content')

<div class="app-content pt-3 p-md-3 p-lg-4 ">
		    <div style="padding:2%;">
			    <div class="row title-row g-3 py-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto mt-0 d-flex" >
			            <h1 class="app-page-title mb-0">My disclosed jobs </h1>
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
                    <div class="col-12 text-center " >
                        <h3 style="margin-top: 100px;">Disclosed job not found.</h3>

                    </div>
			    </div>
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
@endsection
@section('script')
@endsection
