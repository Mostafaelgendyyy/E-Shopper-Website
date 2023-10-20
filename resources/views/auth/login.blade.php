


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dental Hospital Website Template | Smarteyeapps.com</title>
    <link rel="shortcut icon" href="{{asset('img/fav.png')}}" type="image/x-icon">
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('img/fav.jpg')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/stylelogin.css')}}" />
</head>
<body class="bg-white">
<div class="container-fluid vh-100 overflow-auto">
    <div class="row vh-100 ">
        <div class="col-lg-6 bg-gray p-5 text-center">
            <h4 class="text-center fw-bolder fs-2">Register</h4>
            <p class="mb-3 fs-7">Register Now and Fell the New Digital World</p>
            <a href="{{ route('register') }}">
                <button class="btn fw-bold mb-5 btn-outline-success px-4 rounded-pill">Sign Up</button>
            </a>
            <div class="img-cover p-4">
                <img src="{{asset('img/loginbg.svg')}}" alt="">
            </div>
        </div>
        <div class="col-lg-6 p  vh-100">
            <div class="row d-flex vh-100">
                <div class="col-md-8 p-4 ikigui m-auto text-center align-items-center">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h4 class="text-center fw-bolder mb-4 fs-2">Login</h4>
                        <div class="input-group mb-4">
                            <span class="input-group-text border-end-0 inbg" id="basic-addon1"><i class="bi bi-person"></i></span>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror ps-2 border-start-0 fs-7 inbg form-control-lg mb-0" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email" aria-describedby="basic-addon1">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text border-end-0 inbg" id="basic-addon1"><i class="bi bi-lock"></i></span>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror ps-2 border-start-0 fs-7 inbg form-control-lg mb-0" name="password" required autocomplete="current-password" placeholder="Password" aria-describedby="basic-addon1">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror


                        </div>

                        <button type="submit" class="btn btn-lg fw-bold fs-7 btn-success  w-100">
                            {{ __('Login') }}
                        </button>

                    </form>
                    <p class="text-center py-4 fw-bold fs-8">Or Sign in with social platforms</p>

                    <ul class="d-inline-block mx-auto">
                        <li class="float-start px-3"><a href=""><i class="bi bi-facebook"></i></a></li>
                        <li class="float-start px-3"><a href=""><i class="bi bi-twitter"></i></a></li>
                        <li class="float-start px-3"><a href=""><i class="bi bi-linkedin"></i></a></li>
                        <li class="float-start px-3"><a href=""><i class="bi bi-google"></i></a></li>

                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('plugins/scroll-fixed/jquery-scrolltofixed-min.js')}}"></script>
<script src="{{asset('plugins/testimonial/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>

</html>
