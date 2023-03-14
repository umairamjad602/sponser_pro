<!-- add-new-content -->
<div id="add-new-content" class="popup-overlay ">
        <div class="popup">
            <div class="row  ">

                <div class="col-auto">
					<a class="close" href="#">&times;</a>

					<h2>Create new post</h2>


				</div>
				<div class="col-12  py-4">
					<label class="text-black"><b>Add Photo/Video</b></label>
					<div class="form-check  p-0">
						<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
						<label class="form-check-label" for="flexRadioDefault2"> Upload
						</label>
					  </div>
					  <div class="upload-project-img">
						<label for="file" class="text-center">
							<img src="{{asset('front-end/images/cloud-computing.png')}}" alt="">
							<p>Drag or upload project image</p>
						  </label>
						<input type="file" id="file" accept="image/jpeg, image/png, image/jpg" class="d-none">
					  </div>
					 <div>

						<img id="image" class="img-fluid my-4">
					 </div>

					  <div class="">
						<label for="exampleFormControlTextarea1" class="form-label text-black"><b>Post Caption</b></label>
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="Enter Your Caption Here" style="background-color: #F5F5F5;"></textarea>
					  </div>

				</div>


            </div>


				<div class="row g-0   mt-md-5 mt-3">
					<div class="col-12 d-md-flex justify-content-md-end">

						<a href="{{url('/home')}}" class="btn close-btn d-flex mb-md-0 mb-3  align-items-center mt-md-0 mt-3" type="button">
							<div class="text-start">Cancel </div>
							<div class="ms-auto  d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

						</a>
						<a href="" class="btn Continue-btn d-flex  align-items-center" type="button">
							<div class="text-start">Post</div>
							<div class="ms-auto  d-flex align-items-center"><i class="fa-solid fa-circle-chevron-right" style="font-size:25px;"></i></div>

						</a>


					</div>

				</div>




        </div>
    </div>