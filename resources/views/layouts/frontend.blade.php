<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}} - @yield('frontend_title')</title>

    <link rel="stylesheet" href="{{asset('Frontend/css/themify-icons.css')}}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('Frontend/images/favicon.png')}}">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{asset('Frontend/css/style.css')}}">

    @stack('frontend_css')

</head>

<body class="color-theme-blue open-font">
<div class="preloader"></div>

<div class="backdrop"></div>

<div class="main-wrapper">
    <!-- header wrapper -->
    <div class="upper-header bg-greylight">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-6 d-none d-block-md">
                    <ul class="list-inline list-item-style mt-0 float-left pl-1">
                        <li class="list-inline-item pl-0"><a href="#">(+1)866-540-3229</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-xs-6 d-none d-block-md">
                    <ul class="list-inline list-item-style mt-0 float-right">
                        <li class="list-inline-item"><a href="#"><i class="ti-user mr-2"></i> My Account</a></li>
                    </ul>
                </div>
                <div class="col-12 d-none d-lg-block">
                    <ul class="list-inline list-item-style mt-0 float-left pl-1">
                        <li class="list-inline-item pl-0"><a href="#">BECOME AN AGENT</a></li>
                        <li class="list-inline-item"><a href="#">PRIVACY</a></li>
                        <li class="list-inline-item"><a href="#">CUSTOMER SERVICE </a></li>
                    </ul>

                    <ul class="list-inline list-item-style mt-0 float-right">
                        <li class="list-inline-item"><a href="#"><i class="ti-location-pin mr-2"></i> Store Locator</a>
                        </li>
                        <li class="list-inline-item"><a href="#"><i class="ti-user mr-2"></i> My Account</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 navbar">
                    <a href="{{route('index')}}" class="logo">
                        <h1 class="fredoka-font ls-3 fw-700 text-current display1-size">{{config('app.name')}}</h1>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav nav-menu float-none text-center">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#">About </a>
                            </li>

                            <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 text-right">
                    @auth()
                        <a href="{{route('frontend.login_process')}}"
                           class="header-btn bg-current fw-500 text-white font-xssss">Dashboard</a>
                    @else
                        <a href="#" class="header-btn bg-dark fw-500 text-white font-xssss" data-toggle="modal"
                           data-target="#Modallogin">Login</a>
                        <a href="#" class="header-btn bg-current fw-500 text-white font-xssss" data-toggle="modal"
                           data-target="#ModalregisterD">Register</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>

@yield('frontend_content')

<!-- footer wrapper -->
    <div class="footer-wrapper mt-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-12 col-lg-4 col-sm-9 col-xs-12 md-mb25">
                            <a href="{{route('index')}}" class="logo">
                                <h1 class="fredoka-font ls-3 fw-700 text-current display1-size">{{config('app.name')}}</h1>
                            </a>
                            <p class="w-100 mt-lg-5 mt-4">41 madison ave, floor 24 new work, <br>NY 10010 1-877-932-7111
                                <br> support@mail.com</p>
                            <ul class="list-inline">
                                <li class="list-inline-item mr-3"><a href="#"><i class="ti-facebook"></i></a></li>
                                <li class="list-inline-item mr-3"><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                <li class="list-inline-item mr-3"><a href="#"><i class="ti-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-lg-2 col-sm-3 col-xs-6 md-mb25">
                            <h5>Language</h5>
                            <ul>
                                <li><a href="#">English</a></li>
                                <li><a href="#">Spanish</a></li>
                                <li><a href="#">Arab</a></li>
                                <li><a href="#">Urdu</a></li>
                                <li><a href="#">Brazil</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-lg-2 col-sm-4 col-xs-6">
                            <h5>Channel</h5>
                            <ul>
                                <li><a href="#">Makeup</a></li>
                                <li><a href="#">Dresses</a></li>
                                <li><a href="#">Girls</a></li>
                                <li><a href="#">Sandals</a></li>
                                <li><a href="#">Headphones</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-lg-2 col-sm-4 col-xs-6">
                            <h5>About</h5>
                            <ul>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Term of use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Feedback</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-lg-2 col-sm-4 col-xs-6">
                            <h5 class="mb-3">Office</h5>
                            <p style="width: 100%;">41 madison ave, floor 24 new work, NY 10010 <br>1-877-932-7111</p>
                            <p style="width: 100%;">41 madison ave, floor 24 new work, NY 10010 <br>1-877-932-7111</p>
                        </div>
                    </div>
                    <div class="middle-footer mt-5 pt-4 d-none"></div>
                </div>
                <div class="col-sm-12 lower-footer pt-0"></div>
                <div class="col-sm-6 col-xs-12  d-none">
                    <p class="copyright-text">© 2021 copyright. All rights reserved.</p>
                </div>
                <div class="col-sm-6 col-xs-12 text-right d-none">
                    <p class="copyright-text float-right">Design by <a href="#" class=""></a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- footer wrapper -->
</div>


<!-- Modal Register -->
<div class="modal bottom fade" id="ModalregisterD" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                    class="ti-close text-grey-500"></i></button>
            <div class="modal-body p-3 d-flex align-items-center bg-none">
                <div class="card shadow-none rounded-0 w-100 p-2 pt-3 border-0">
                    <form action="{{route('register')}}" method="post">
                        @csrf
                        <div class="card-body rounded-0 text-left pt-0">
                            <h2 class="fw-600 display2-size mb-4">Create <br>your account</h2>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name" name="name" value="{{old('name')}}"
                                       class="form-control h60 border-2 bg-color-none text-grey-700 @error('name') is-invalid @enderror">
                                @error('name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Mobile" name="mobile" value="{{old('mobile')}}"
                                       class="form-control h60 border-2 bg-color-none text-grey-700 @error('mobile') is-invalid @enderror">
                                @error('mobile')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" name="reg_email" value="{{old('reg_email')}}"
                                       class="form-control h60 border-2 bg-color-none text-grey-700 @error('reg_email') is-invalid @enderror">
                                @error('reg_email')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group icon-tab mb-3">
                                <input type="text" placeholder="Password" name="reg_password"
                                       value="{{old('reg_password')}}"
                                       class="form-control h60 border-2 bg-color-none text-grey-700 @error('reg_password') is-invalid @enderror">
                                <i class="ti-lock text-grey-700 pr-0"></i>
                                @error('reg_password')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group icon-tab mb-3">
                                <input type="text" placeholder="Confirm Password" name="password_confirmation"
                                       value="{{old('password_confirmation')}}"
                                       class="form-control h60 border-2 bg-color-none text-grey-700 @error('password_confirmation') is-invalid @enderror">
                                <i class="ti-lock text-grey-700 pr-0"></i>
                                @error('password_confirmation')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Refer Code" name="refer_code" value="{{old('refer_code')}}"
                                       class="form-control h60 border-2 bg-color-none text-grey-700">
                            </div>

                            <div class="col-sm-12 p-0 text-center">
                                <button type="submit"
                                        class="form-control h60 bg-current text-white font-xss fw-500 border-2 border-0 p-0">
                                    Create an account
                                </button>
                                <h6 class="text-grey-500 font-xsss fw-500 mt-2 mb-4 lh-32">Are you already member?
                                    <a href="#" class="fw-700 ml-1" data-toggle="modal" data-target="#Modallogin"
                                       data-dismiss="modal" aria-label="Close">Login</a>
                                </h6>
                                <div class="row">
                                    <div class="col-6 pr-1">
                                        <a href="#"
                                           class="form-control h60 p-0 pl-5 bg-lightblue text-grey-700 border-2 border-0 font-xssss fw-600 text-left position-relative">
                                            <img src="{{asset('Frontend/images/icon-facebook.png')}}"
                                                 style="width: 30px; position: absolute; left:10px; top:15px;" alt="">
                                            Connect with Facebook
                                        </a>
                                    </div>
                                    <div class="col-6 pl-1">
                                        <a href="#"
                                           class="form-control h60 p-0 pl-5 bg-lightblue text-grey-700 border-2 border-0 font-xssss fw-600 text-left position-relative">
                                            <img src="{{asset('Frontend/images/google-icon.png')}}"
                                                 style="width: 30px; position: absolute; left:10px; top:15px;" alt="">
                                            Connect with Google
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Register -->
<div class="modal bottom fade" id="Modallogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="ti-close text-grey-500"></i>
            </button>
            <div class="modal-body p-3 d-flex align-items-center bg-none">
                <div class="card shadow-none rounded-0 w-100 p-2 pt-3 border-0">
                    <form action="{{route('login')}}" method="post">
                        <div class="card-body rounded-0 text-left pt-0 pb-2">
                            <h2 class="fw-600 display2-size mb-4">Login into <br>your account</h2>
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" name="email" value="{{old('email')}}"
                                       class="form-control h60 border-2 bg-color-none text-grey-700 @error('email') is-invalid @enderror">
                                @error('email')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group icon-tab mb-1">
                                <input type="text" placeholder="Password" name="password" value="{{old('password')}}"
                                       class="form-control h60 border-2 bg-color-none text-grey-700 @error('password') is-invalid @enderror">
                                @error('password')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                <i class="ti-lock text-grey-700 pr-0"></i>
                            </div>
                            <div class="form-check text-left mb-3">
                                <input type="checkbox" class="form-check-input mt-2" id="remember_me">
                                <label class="form-check-label font-xsss text-grey-500" for="remember_me">
                                    Remember me
                                </label>
                                <a href="#" class="fw-600 font-xsss text-grey-700 mt-1 float-right">
                                    Forgot your Password?
                                </a>
                            </div>

                            <div class="col-sm-12 p-0 text-center">
                                <button type="submit"
                                        class="form-control h60 bg-current text-white font-xss fw-500 border-2 border-0 p-0">
                                    Login
                                </button>
                                <h6 class="text-grey-500 font-xsss fw-500 mt-2 mb-0 lh-32">Dont have account
                                    <a href="#" class="fw-700 ml-1" data-toggle="modal" data-target="#ModalregisterD"
                                       data-dismiss="modal" aria-label="Close">Register</a>
                                </h6>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{asset('Frontend/js/plugin.js')}}"></script>
<script src="{{asset('Frontend/js/scripts.js')}}"></script>

<script>
    @if(count($errors->messages()) > 0)
        @foreach($errors->messages() as $key=> $error)
            @if(in_array($key,['name','reg_email','mobile','reg_password','password_confirmation']))
                $('#ModalregisterD').modal('show');
            @endif
            @if(in_array($key,['email','password']))
                $('#Modallogin').modal('show');
            @endif
        @endforeach
    @endif
</script>

@stack('frontend_script')

</body>
</html>
