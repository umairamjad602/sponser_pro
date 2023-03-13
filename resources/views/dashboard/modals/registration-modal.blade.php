 <!-- registration -->
 <div id="register" class="popup-overlay">
        <div class="popup">
            <div class="row  m-0">

                <div class="col-lg-7 col-sm-12 popup-col-1 d-flex justify-content-center align-items-center"
                    style="background-image: url({{ asset('front-end/images/heroBg.png') }});">
                    <img src="{{ asset('front-end/images/logo.png') }}" class="img-fluid text-center" alt="">

                </div>
                <div class="col-lg-5 col-sm-12 popup-col-2 ">
                    <a class="close" href="#">&times;</a>

                    <a class="button btn btn-without-bg " href="#login">login</a>
                    <a class="  button btn  mx-3 bg-green-btn" href="#register">Registration </a>
                    <h3 class="mt-5">
                        WELCOME
                    </h3>
                    @if(Session::get('resgiter') == true)
                    <div class="alert alert-success" id="user-done" role="alert">
                    Your account got registered successfully. Wait for the admin approval. You will be notified at your email. Thanks
                    </div>
                    <p style="display: none;">
                        {{Session::remove('resgiter')}}
                    </p>
                    @endif
                    <h4>
                        Please signup to your account
                    </h4>
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <form method="POST" action="{{ url('resgter-user') }}">
                        @csrf

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="is_athlete" id="inlineRadio1"
                                value="0" required @if (old('is_athlete') == '0') checked @endif>
                            <label class="form-check-label" for="inlineRadio1">BRAND</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="is_athlete" id="inlineRadio2"
                                value="1" @if (old('is_athlete') == '1') checked @endif>
                            <label class="form-check-label" for="inlineRadio2">ATHLETE</label>
                        </div>

                        @error('is_athlete')
                            <div class="d-flex">
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            </div>
                        @enderror

                        <div class="d-flex ">
                            <div class="mb-2 " style="margin-right: 10px;">
                                <label for="first_name" class="form-label">Name</label>
                                <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                                    name="first_name" id="first_name" value="{{ old('first_name') }}" required>
                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="text" class="form-control @error('last_name') is-invalid @enderror"
                                    name="last_name" id="last_name" value="{{ old('last_name') }}" required>
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-2">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" id="email" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" id="password" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <p class="psw "> <a href="#login">Already have an account? Log in</a></p>
                        <div class="">
                            <button type="submit" class="btn text-center bg-green-btn mb-3">SIGN UP<i
                                    class="fa-solid fa-circle-chevron-right px-1"
                                    style="margin-left:15px;"></i></button>
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
