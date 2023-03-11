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
		<!-- popup end -->
@section('content')

<div class="app-content pt-3 p-md-3 p-lg-4 posted-job-review">
		    <div class="container-fluid " style="padding:2%;">
                <div class="row ">
                    <!-- brands-coverpic-col -->
                    <div class="col-12 brands-profile-cover" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('assets/images/profile-bg.png');">

                    </div>

                    <!-- brands-add-payment-col -->
                    <div class="col-12 left-green-border d-lg-flex align-items-center mt-4">
                        <h1 class="brands-review-headings">
                            Payment history
                        </h1>


                    </div>
                    <div class=" col-12 mt-0 d-flex">

                        <div class="row g-2 justify-content-start  align-items-center">


							<div class=" col-12 col-sm-auto">
								<form class="app-search-form docs-search">
									<input type="text" placeholder="job title, keywords" name="search" class="form-control search-input">
									<button type="submit" class="btn search-btn btn-primary" value="Search"><i class="fa-solid fa-magnifying-glass"></i></button>
								</form>
							</div><!--//search-box-->
							<div class=" col-12 col-sm-auto">
								<form class="app-search-form docs-search">
									<input type="text" placeholder="By Athletes" name="search" class="form-control search-input">
									<button type="submit" class="btn search-btn btn-primary" value="Search"><i class="fa-solid fa-magnifying-glass"></i></button>
								</form>
							</div><!--//search-box-->



                            <div class="col-12 col-sm-auto ">

                                <input type="text" class="form-control" id="exampleFormControlInput1" style="background: #F5F5F5;" placeholder="$ Min Price - $ Max price" required>
                            </div>
                            <div class="col-12 col-sm-auto ">

                                <select class="form-select  ">
                                      <option selected="" value="option-1">All  mode</option>
                                      <option value="option-2">Pay with cash</option>
                                      <option value="option-3">Pay with product</option>


                                </select>
                            </div>
                            <div class=" col-12 col-sm-auto">
                                <form >
                                    <input type="text" placeholder="release  Date" name="search" class="form-control " style="background-color: #F5F5F5;">


                                </form>
                            </div>


                            <div class=" col-auto">
                                <a href="#"><img src="{{asset('front-end/images/right-rotate.png')}}" alt=""></a>
                            </div><!--//-->
                            <div class=" col-auto">
                                <a href="#"><img src="assets/images/login.png" alt=""></a>
                            </div><!--//login-->

                        </div><!--//row-->

                </div><!--//col-auto-->
                    <div class="col-12 py-5 text-center">
                        <div>
                            <img src="{{asset('front-end/images/payment-history.png')}} " alt="" class="img-fluid">
                        </div>



                    </div>


                </div>



		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
@endsection
@section('script')
@endsection
