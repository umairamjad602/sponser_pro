@extends('layouts.dashboard')
@section('style')
@endsection
@section('content')
    <div class="row title-row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto mt-0 d-flex">
            <h1 class="app-page-title mb-0">My Posted Jobs </h1>
            <a class="total-jobs btn">0 Jobs</a>
        </div>
        <div class="col-auto mt-0">
            <div class="page-utilities">
                <div class="row g-2 justify-content-start justify-content-md-end align-items-center">

                    <div class="app-search-box col-auto">
                        <form class="app-search-form docs-search">
                            <input type="text" placeholder="job, title" name="search" class="form-control search-input">
                            <button type="submit" class="btn search-btn btn-primary" value="Search"><i
                                    class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <!--//app-search-box-->




                </div>
                <!--//row-->
            </div>
            <!--//table-utilities-->
        </div>
        <!--//col-auto-->
    </div>
    <!--//row-->

    <div class="row g-3 ">
        <div class="row py-3">
            <div class="col-auto">
                <h1 class="app-page-sub-title  mb-0"> All Jobs </h1>
            </div>
            <div class="col-auto ">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="jobs-tab" data-bs-toggle="tab" data-bs-target="#jobs"
                            type="button" role="tab" aria-controls="jobs" aria-selected="true">All Jobs <span
                                class="job-count">0</span></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pending-tab" data-bs-toggle="tab" data-bs-target="#pending"
                            type="button" role="tab" aria-controls="pending" aria-selected="false">Pending <span
                                class="job-count">0</span></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="hired-tab" data-bs-toggle="tab" data-bs-target="#hired" type="button"
                            role="tab" aria-controls="hired" aria-selected="false">Hired <span
                                class="job-count">0</span></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="ongoing-tab" data-bs-toggle="tab" data-bs-target="#ongoing"
                            type="button" role="tab" aria-controls="ongoing" aria-selected="false">Ongoing <span
                                class="job-count">0</span></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="payment-tab" data-bs-toggle="tab" data-bs-target="#payment"
                            type="button" role="tab" aria-controls="payment" aria-selected="false">Payment Requested
                            <span class="job-count">0</span></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="completed-tab" data-bs-toggle="tab" data-bs-target="#completed"
                            type="button" role="tab" aria-controls="completed" aria-selected="false">Completed <span
                                class="job-count">0</span></button>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row py-3 posted-jobs">
            <div class="col-12 ">
                <div class="tab-content py-5">
                    <div class="tab-pane active text-center" id="jobs" role="tabpanel" aria-labelledby="jobs-tab">

                        <img src="{{ asset('front-end/assets/images/postedjob-character.png') }}" alt=""
                            class="img-fluid">
                        <h1>Ready to get started? Post <br> a job here .</h1>
                        <a class="btn post-job-btn" href="#post-job" role="button">Create job<i
                                class="fa-solid fa-plus px-2"></i></a>
                    </div>
                    <div class="tab-pane  text-center" id="pending" role="tabpanel" aria-labelledby="pending-tab">

                        <img src="{{ asset('front-end/assets/images/postedjob-character.png') }}" alt=""
                            class="img-fluid">
                        <h1>Ready to get started? Post <br> a job here .</h1>
                        <a class="btn post-job-btn" href="#post-job" role="button">Create job<i
                                class="fa-solid fa-plus px-2"></i></a>
                    </div>

                    <div class="tab-pane  text-center" id="hired" role="tabpanel" aria-labelledby="hired-tab">

                        <img src="{{ asset('front-end/assets/images/postedjob-character.png') }}" alt=""
                            class="img-fluid">
                        <h1>Ready to get started? Post <br> a job here .</h1>
                        <a class="btn post-job-btn" href="#post-job" role="button">Create job<i
                                class="fa-solid fa-plus px-2"></i></a>
                    </div>

                    <div class="tab-pane text-center" id="ongoing" role="tabpanel" aria-labelledby="ongoing-tab">

                        <img src="{{ asset('front-end/assets/images/postedjob-character.png') }}" alt=""
                            class="img-fluid">
                        <h1>Ready to get started? Post <br> a job here .</h1>
                        <a class="btn post-job-btn" href="#post-job" role="button">Create job<i
                                class="fa-solid fa-plus px-2"></i></a>
                    </div>

                    <div class="tab-pane text-center" id="payment" role="tabpanel" aria-labelledby="payment-tab">

                        <img src="{{ asset('front-end/assets/images/postedjob-character.png') }}" alt=""
                            class="img-fluid">
                        <h1>Ready to get started? Post <br> a job here .</h1>
                        <a class="btn post-job-btn" href="#post-job" role="button">Create job<i
                                class="fa-solid fa-plus px-2"></i></a>
                    </div>

                    <div class="tab-pane text-center" id="completed" role="tabpanel" aria-labelledby="completed-tab">

                        <img src="{{ asset('front-end/assets/images/postedjob-character.png') }}" alt=""
                            class="img-fluid">
                        <h1>Ready to get started? Post <br> a job here .</h1>
                        <a class="btn post-job-btn" href="#post-job" role="button">Create job<i
                                class="fa-solid fa-plus px-2"></i></a>
                    </div>





                </div>
            </div>
        </div>









    </div>
    <!--//row-->
   


@endsection
@section('script')
@endsection
