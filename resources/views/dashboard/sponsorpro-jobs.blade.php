@extends('layouts.dashboard')
@section('style')
@endsection
@section('content')


			    <div class="row title-row g-3 mb-4 py-3 align-items-center justify-content-between">
				    <div class="col-auto mt-0 d-flex" >
			            <h1 class="app-page-title mb-0">Your links </h1>
				    </div>

			    </div><!--//row-->
                <div class="row ">
                    <div class="col-12 text-center py-5 ">
                        <p>You don't have any links to display.
                            Click the button below to add. to add one.</p>
                            <a href="{{url('add-new-link')}}" class="btn view-job-btn">Add New Link</a>


                    </div>

                </div>


		
@endsection
@section('script')
@endsection
