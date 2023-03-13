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
                    <div class="col-12  py-3 ">
                        <div class="add-link-box row">

                               <div class="col-md-9 ">
                                <div class="d-md-flex justify-content-between">
                                <div class="my-3">
                                    <label for="exampleInput" class="form-label">Add Title</label>
                                   <input type="text" class="form-control" id="exampleInput" placeholder="Title" style="background-color: #FAFAFA;">
                                   </div>
                                   <div class="d-flex  my-3">
                                    <a href="" class="pe-3"><i class="fa-solid fa-trash "></i></a>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Status</label>
                                      </div>
                                   </div>

                                </div>
                                <div class="my-3">
                                   <input type="url" class="form-control" id="exampleInput" placeholder="Enter your URL" style="background-color: #FAFAFA;">
                                   </div>
                                   <div class="d-flex justify-content-between my-4">
                                   <div >
                                    <label for="exampleInput" class="form-label">Type:</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                                        <label class="form-check-label" for="inlineRadio1">Promotion</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Social</label>
                                      </div>
                                   </div>
                                   <a href="" class="btn " style="background-color: #63AF31; color: white;"> Save</a>
                                </div>


                               </div>
                               <div class="col-md-3 text-center">
                                <label for="inputFile"  >

                                    <img src="{{asset('front-end/images/add-icon.png')}} "  id="iconimg" alt="Img" alt="" class="img-fluid " style="  border-radius: 8px;" >
                                <p>Add Icon</p>
                                  </label>
                             <input type="file" id="inputFile" accept="image/jpeg, image/png, image/jpg" onchange="readUrl(this)" class="d-none">


                               </div>


                        </div>
                            <a href="" class="btn view-job-btn my-5">Add New Link</a>


                    </div>

                </div>


		  
@endsection
@section('script')
@endsection
