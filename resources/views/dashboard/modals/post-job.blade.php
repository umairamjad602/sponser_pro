 <!-- popup -->
 <div id="post-job" class="popup-overlay">
        <div class="popup">
            <div class="row  ">

                <div class="col-auto">
                    <a class="close" href="#">&times;</a>
                    <h6>Getting Started</h6>
                    <h2>What would you like to do?</h2>
                    <p>Please complete your profile. Your profile needs to have these information. Completed profile
                        becomes more trustworthy</p>
                </div>


            </div>
            <div class="row">

                <div class="col-lg-6 text-center">
                    <div class="post-job-popup">
                        <div class="form-check  d-flex justify-content-end">
                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                            </label>

                        </div>
                        <img src="{{ asset('front-end/assets/images/part-time 1.png') }}" alt="">
                        <h4>Preferred Payment Option</h4>
                        <p>Please add your payment details to hire athletes</p>
                    </div>

                </div>
                <div class="col-lg-6 text-center">
                    <div class="post-job-popup">

                        <div class="form-check d-flex justify-content-end">
                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                            </label>
                        </div>
                        <img src="{{ asset('front-end/assets/images/part-time 1.png') }}" alt="">
                        <h4>Preferred Payment Option</h4>
                        <p>Please add your payment details to hire athletes</p>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-end mt-5">
                    <div class="row">
                        <div class="col-auto"><a class="btn Continue-btn " href="{{ url('post-job') }}">Continue <i
                                    class="fa-solid fa-circle-chevron-right"
                                    style="position:relative; margin-left: 80px;"></i></a></div>
                        <div class="col-auto"> <a class="btn close-btn">Cancel <i
                                    class="fa-solid fa-circle-chevron-right"
                                    style="position:relative; margin-left: 90px;"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- popup end -->