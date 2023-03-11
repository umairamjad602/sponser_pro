@extends('layouts.dashboard')
@section('style')
@endsection
<!-- add-payments-methods-popup -->
<div id="add-payment" class="popup-overlay ">
			<div class="popup">
				<div class="row  ">

					<div class="col-12">
						<a class="close" href="#">&times;</a>
						<input type="radio" class="btn-check " name="options" id="option1" autocomplete="off" checked>
<label class="btn btn-secondary" for="option1">Debit Card</label>

<input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
<label class="btn btn-secondary" for="option2">Credit Card</label>
					</div>
                    <div class="col-lg-6 mt-3">
                        <div class="my-3">
                            <label for="exampleInput" class="form-label">Card Number</label>
                           <input type="text" class="form-control" id="exampleInput" placeholder="Enter Card Number">
                           </div>
                    </div>
                    <div class="col-lg-6 mt-3">
                        <div class="my-3">
                            <label for="exampleInput" class="form-label">Name on the Card</label>
                           <input type="text" class="form-control" id="exampleInput" placeholder="Enter card name">
                           </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="my-3">
                            <label for="exampleInput" class="form-label">Expiry Date</label>
                           <input type="text" class="form-control" id="exampleInput" placeholder="Enter expiry date">
                           </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="my-3">
                            <label for="exampleInput" class="form-label">CVC</label>
                           <input type="text" class="form-control" id="exampleInput" placeholder="Enter CVC">
                           </div>
                    </div>


				</div>
				<div class="row">


					<div class="row g-0 d-md-flex justify-content-md-end  mt-md-5 mt-3">
						<div class="col-auto d-md-flex">
							<a href="" class="btn Continue-btn d-flex  align-items-center" type="button">
								<div class="text-start">Submit</div>
								<div class="ms-auto  d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

							</a>
							<a href="" class="btn close-btn d-flex  align-items-center mt-md-0 mt-3" type="button">
								<div class="text-start">Cancel </div>
								<div class="ms-auto  d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

							</a>


						</div>

					</div>


				</div>

			</div>
		</div>
@section('content')
<div class="app-content pt-3 p-md-3 p-lg-4 posted-job-review">
		    <div class="container-fluid " style="padding:2%;">
                <div class="row ">
                    <!-- brands-coverpic-col -->
                    <div class="col-12 brands-profile-cover" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{asset('front-end/images/profile-bg.png')}});">

                    </div>

                    <!-- brands-add-payment-col -->
                    <div class="col-12 left-green-border d-lg-flex align-items-center mt-4">
                        <h1 class="brands-review-headings">
                            Payment methods
                        </h1>
                        <div class="row ms-auto">
                            <div class="col-auto">
                                <a href="#add-payment" class="btn add-ques-btn ms-auto" role="button">Add payment Methods<i class="fa-solid fa-plus px-2"></i></a>

                            </div>


                        </div>

                    </div>
                    <div class="col-12 py-5 text-center">
                        <div>
                            <img src="assets/images/payment-methods.png " alt="" class="img-fluid">
                        </div>
                        <div class="mt-5">
                            <a href="#add-payment" class="btn add-ques-btn text-white " role="button" style="background: linear-gradient(90deg, #FFDE00 0%, #FD5900 100%);">Add payment Methods<i class="fa-solid fa-plus px-2"></i></a>
                        </div>


                    </div>

                </div>

		    </div><!--//container-fluid-->
	    </div><!--//app-content-->

@endsection
@section('script')
@endsection
