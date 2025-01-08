@yield('main')
@section('content')
    <!-- START SECTION BREADCRUMB -->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <div class="container"><!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title">
                        <h1>Register</h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active">Register</li>
                    </ol>
                </div>
            </div>
        </div><!-- END CONTAINER-->
    </div>
    <!-- END SECTION BREADCRUMB -->

    <!-- START MAIN CONTENT -->
    <div class="main_content">

        <!-- START LOGIN SECTION -->
        <div class="login_register_wrap section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-md-10">
                        <div class="login_wrap">
                            <div class="padding_eight_all bg-white">
                                <div class="heading_s1">
                                    <h3>Create an Account</h3>
                                </div>
                                <div>
                                    <div class="form-group mb-3">
                                        <input type="text" required="" class="form-control" name="email" placeholder="Enter Your Email">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input class="form-control" required="" type="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input class="form-control" required="" type="password" name="confirmPassword" placeholder="Confirm Password">
                                    </div>
                                    <div class="login_footer form-group mb-3">
                                        <div class="chek-form">
                                            <div class="custome-checkbox">
                                                <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="">
                                                <label class="form-check-label" for="exampleCheckbox2"><span>I agree to terms &amp; Policy.</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <button type="submit" class="btn btn-fill-out btn-block" name="register">Register</button>
                                    </div>
                                </div>
                                <div class="different_login">
                                    <span> or</span>
                                </div>
                                <ul class="btn-login list_none text-center">
                                    <li><a href="#" class="btn btn-facebook"><i class="ion-social-facebook"></i>Facebook</a></li>
                                    <li><a href="#" class="btn btn-google"><i class="ion-social-googleplus"></i>Google</a></li>
                                </ul>
                                <div class="form-note text-center">Already have an account? <a href="login.html">Log in</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END LOGIN SECTION -->

        <!-- START SECTION SUBSCRIBE NEWSLETTER -->
        <div class="section bg_default small_pt small_pb">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="heading_s1 mb-md-0 heading_light">
                            <h3>Subscribe Our Newsletter</h3>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="newsletter_form">
                            <form>
                                <input type="text" required="" class="form-control rounded-0" placeholder="Enter Email Address">
                                <button type="submit" class="btn btn-dark rounded-0" name="submit" value="Submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
