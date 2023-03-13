@extends('layouts.dashboard')
@section('style')

@endsection

@section('content')


                <div class="row ">
                    <!-- brands-coverpic-col -->
                    <div class="col-12 brands-profile-cover" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{asset('front-end/images/profile-bg.png')}});">

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



		   
@endsection
@section('script')
@endsection
