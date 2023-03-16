@extends('layouts.dashboard')
@section('style')
@endsection
@include('dashboard.modals.payments-method-modal')
@section('content')

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
                            <img src="{{asset('front-end/images/payment-methods.png')}} " alt="" class="img-fluid">
                        </div>
                        <div class="mt-5">
                            <a href="#add-payment" class="btn add-ques-btn text-white " role="button" style="background: linear-gradient(90deg, #FFDE00 0%, #FD5900 100%);">Add payment Methods<i class="fa-solid fa-plus px-2"></i></a>
                        </div>


                    </div>

                </div>

		 

@endsection
@section('script')
@endsection
