 <!-- login-popup -->
 <div id="login" class="popup-overlay">
        <div class="popup">
            <div class="row  m-0">

                <div class="col-lg-7 col-sm-12 popup-col-1 d-flex justify-content-center align-items-center"
                    style="background-image: url({{ asset('front-end/images/heroBg.png') }});">
                    <img src="{{ asset('front-end/images/logo.png') }}" class="img-fluid text-center" alt="">

                </div>
                <div class="col-lg-5 col-sm-12 popup-col-2 ">
                    <a class="close" href="#">&times;</a>

                    <a class="button btn bg-green-btn" href="#login">login</a>
                    <a class="  button btn btn-without-bg mx-3" href="#register">Registration </a>
                    <h3 class="mt-5">
                        WELCOME
                    </h3>
                    <h4>
                        Please login to your account
                    </h4>
                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    @if (session('verification-error'))
                        <div class="alert alert-danger">{{ session('verification-error') }}</div>
                    @endif


                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" id="email" aria-describedby="emailHelp" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" id="password" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <p class="psw "> <a href="#">Forgot password?</a></p>
                        <div class="">
                            <button type="submit" class="btn text-center bg-green-btn mb-3">SIGN IN<i
                                    class="fa-solid fa-circle-chevron-right " style="margin-left:15px;"></i></button>
                        </div>

                    </form>
                    <p>- OR -</p>
                    <div class="d-flex" style="margin-bottom: 20px;">
                        <a class="btn button google-btn"><img
                                src="{{ asset('front-end/images/icons8-google-48.png') }}" class="img-fluid ">Login
                            with Google</a>
                        <a class="btn button fb-btn"><i class="fa-brands fa-facebook-f px-2"></i>Login with
                            Facebaook</a>
                    </div>

                    <p class="text-center ">Terms and Conditions & Privacy Policy</p>


                </div>

            </div>

        </div>
    </div>