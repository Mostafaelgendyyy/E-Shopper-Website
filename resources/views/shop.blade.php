<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Small E-commerce</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="{{asset('https://fonts.gstatic.com')}}">
    <link
        href="{{asset('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap')}}"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css')}}"
        rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Help</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="{{ route('home') }}" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span
                            class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="{{ route('search') }}" method="GET">
                    @csrf
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Search for products">
                        <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="{{route('cart.list')}}" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100"
                    data-toggle="collapse" href="#navbar-vertical"
                    style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light"
                    id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                    <div class="navbar-nav w-100 overflow-hidden">
                        @foreach($categories as $k => $data)
                        <a href="{{ route('CategoryProducts',$data->id) }}"
                            class="nav-item nav-link">{{$data->name}}</a>
                        @endforeach
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span
                                class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{ route('home') }}" class="nav-item nav-link ">Home</a>
                            <a href="{{ route('shop') }}" class="nav-item nav-link active">Shop</a>
                            {{--                        <a href="{{ route('detail') }}" class="nav-item nav-link">Shop
                            Detail</a>--}}
                            <a href="{{ route('cart.list') }}" class="nav-item nav-link">Shopping Cart</a>
                            <a href="{{ route('checkout') }}" class="nav-item nav-link">Checkout</a>
                            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                        </div>
                        {{--                    <div class="navbar-nav ml-auto py-0">--}}
                        {{--                        <a href="{{ route('login') }}" class="nav-item
                        nav-link">Login</a>--}}
                        {{--                        <a href="{{ route('register') }}" class="nav-item
                        nav-link">Register</a>--}}
                        {{--                    </div>--}}
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Our Shop</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{ route('home') }}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shop</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Shop Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            {{--        <div class="col-lg-3 col-md-12">--}}
            {{--            <!-- Price Start -->--}}
            {{--            <div class="border-bottom mb-4 pb-4">--}}
            {{--                <h5 class="font-weight-semi-bold mb-4">Filter by price</h5>--}}
            {{--                <form>--}}
            {{--                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">--}}
            {{--                        <input type="checkbox" class="custom-control-input" checked id="price-all">--}}
            {{--                        <label class="custom-control-label" for="price-all">All Price</label>--}}
            {{--                        <span class="badge border font-weight-normal">1000</span>--}}
            {{--                    </div>--}}
            {{--                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">--}}
            {{--                        <input type="checkbox" class="custom-control-input" id="price-1">--}}
            {{--                        <label class="custom-control-label" for="price-1">$0 - $100</label>--}}
            {{--                        <span class="badge border font-weight-normal">150</span>--}}
            {{--                    </div>--}}
            {{--                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">--}}
            {{--                        <input type="checkbox" class="custom-control-input" id="price-2">--}}
            {{--                        <label class="custom-control-label" for="price-2">$100 - $200</label>--}}
            {{--                        <span class="badge border font-weight-normal">295</span>--}}
            {{--                    </div>--}}
            {{--                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">--}}
            {{--                        <input type="checkbox" class="custom-control-input" id="price-3">--}}
            {{--                        <label class="custom-control-label" for="price-3">$200 - $300</label>--}}
            {{--                        <span class="badge border font-weight-normal">246</span>--}}
            {{--                    </div>--}}
            {{--                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">--}}
            {{--                        <input type="checkbox" class="custom-control-input" id="price-4">--}}
            {{--                        <label class="custom-control-label" for="price-4">$300 - $400</label>--}}
            {{--                        <span class="badge border font-weight-normal">145</span>--}}
            {{--                    </div>--}}
            {{--                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">--}}
            {{--                        <input type="checkbox" class="custom-control-input" id="price-5">--}}
            {{--                        <label class="custom-control-label" for="price-5">$400 - $500</label>--}}
            {{--                        <span class="badge border font-weight-normal">168</span>--}}
            {{--                    </div>--}}
            {{--                </form>--}}
            {{--            </div>--}}
            {{--            <!-- Price End -->--}}

            {{--            <!-- Color Start -->--}}
            {{--            <div class="border-bottom mb-4 pb-4">--}}
            {{--                <h5 class="font-weight-semi-bold mb-4">Filter by color</h5>--}}
            {{--                <form>--}}
            {{--                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">--}}
            {{--                        <input type="checkbox" class="custom-control-input" checked id="color-all">--}}
            {{--                        <label class="custom-control-label" for="price-all">All Color</label>--}}
            {{--                        <span class="badge border font-weight-normal">1000</span>--}}
            {{--                    </div>--}}
            {{--                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">--}}
            {{--                        <input type="checkbox" class="custom-control-input" id="color-1">--}}
            {{--                        <label class="custom-control-label" for="color-1">Black</label>--}}
            {{--                        <span class="badge border font-weight-normal">150</span>--}}
            {{--                    </div>--}}
            {{--                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">--}}
            {{--                        <input type="checkbox" class="custom-control-input" id="color-2">--}}
            {{--                        <label class="custom-control-label" for="color-2">White</label>--}}
            {{--                        <span class="badge border font-weight-normal">295</span>--}}
            {{--                    </div>--}}
            {{--                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">--}}
            {{--                        <input type="checkbox" class="custom-control-input" id="color-3">--}}
            {{--                        <label class="custom-control-label" for="color-3">Red</label>--}}
            {{--                        <span class="badge border font-weight-normal">246</span>--}}
            {{--                    </div>--}}
            {{--                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">--}}
            {{--                        <input type="checkbox" class="custom-control-input" id="color-4">--}}
            {{--                        <label class="custom-control-label" for="color-4">Blue</label>--}}
            {{--                        <span class="badge border font-weight-normal">145</span>--}}
            {{--                    </div>--}}
            {{--                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">--}}
            {{--                        <input type="checkbox" class="custom-control-input" id="color-5">--}}
            {{--                        <label class="custom-control-label" for="color-5">Green</label>--}}
            {{--                        <span class="badge border font-weight-normal">168</span>--}}
            {{--                    </div>--}}
            {{--                </form>--}}
            {{--            </div>--}}
            {{--            <!-- Color End -->--}}

            {{--            <!-- Size Start -->--}}
            {{--            <div class="mb-5">--}}
            {{--                <h5 class="font-weight-semi-bold mb-4">Filter by size</h5>--}}
            {{--                <form>--}}
            {{--                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">--}}
            {{--                        <input type="checkbox" class="custom-control-input" checked id="size-all">--}}
            {{--                        <label class="custom-control-label" for="size-all">All Size</label>--}}
            {{--                        <span class="badge border font-weight-normal">1000</span>--}}
            {{--                    </div>--}}
            {{--                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">--}}
            {{--                        <input type="checkbox" class="custom-control-input" id="size-1">--}}
            {{--                        <label class="custom-control-label" for="size-1">XS</label>--}}
            {{--                        <span class="badge border font-weight-normal">150</span>--}}
            {{--                    </div>--}}
            {{--                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">--}}
            {{--                        <input type="checkbox" class="custom-control-input" id="size-2">--}}
            {{--                        <label class="custom-control-label" for="size-2">S</label>--}}
            {{--                        <span class="badge border font-weight-normal">295</span>--}}
            {{--                    </div>--}}
            {{--                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">--}}
            {{--                        <input type="checkbox" class="custom-control-input" id="size-3">--}}
            {{--                        <label class="custom-control-label" for="size-3">M</label>--}}
            {{--                        <span class="badge border font-weight-normal">246</span>--}}
            {{--                    </div>--}}
            {{--                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">--}}
            {{--                        <input type="checkbox" class="custom-control-input" id="size-4">--}}
            {{--                        <label class="custom-control-label" for="size-4">L</label>--}}
            {{--                        <span class="badge border font-weight-normal">145</span>--}}
            {{--                    </div>--}}
            {{--                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">--}}
            {{--                        <input type="checkbox" class="custom-control-input" id="size-5">--}}
            {{--                        <label class="custom-control-label" for="size-5">XL</label>--}}
            {{--                        <span class="badge border font-weight-normal">168</span>--}}
            {{--                    </div>--}}
            {{--                </form>--}}
            {{--            </div>--}}
            {{--            <!-- Size End -->--}}
            {{--        </div>--}}
            {{--        <!-- Shop Sidebar End -->--}}


            <!-- Shop Product Start -->
            <div class="col-lg-14 col-md-12">
                <div class="row pb-3">

                    {{--                        <div class="dropdown ml-4">--}}
                    {{--                            <button class="btn border dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"--}}
                    {{--                                    aria-expanded="false">--}}
                    {{--                                Sort by--}}
                    {{--                            </button>--}}
                    {{--                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">--}}
                    {{--                                <a class="dropdown-item" href="#">Latest</a>--}}
                    {{--                                <a class="dropdown-item" href="#">Popularity</a>--}}
                    {{--                                <a class="dropdown-item" href="#">Best Rating</a>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                </div>
            </div>
            @foreach($products as $key=> $row)
            <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="{{asset('img/product.png')}}" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">{{$row->name}}</h6>
                        <div class="d-flex justify-content-center">
                            <h6>${{$row->price}}</h6>
                            <h6 class="text-muted ml-2"><del>${{$row->price*2}}</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="{{route('detail',$row->id)}}" class="btn btn-sm text-dark p-0"><i
                                class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $row->id }}" name="id">
                            <input type="hidden" value="{{ $row->name }}" name="name">
                            <input type="hidden" value="{{ $row->price }}" name="price">
                            <input type="hidden" value="1" name="quantity">
                            <button class="px-4 py-2 text-white bg-blue-800 rounded"> <i
                                    class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</button>
                        </form>
                    </div>
                </div>
            </div>

            @endforeach
            {{--                <div class="col-lg-4 col-md-6 col-sm-12 pb-1">--}}
            {{--                    <div class="card product-item border-0 mb-4">--}}
            {{--                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
            {{--                            <img class="img-fluid w-100" src="{{asset('img/product-2.jpg')}}"
            alt="">--}}
            {{--                        </div>--}}
            {{--                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">--}}
            {{--                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
            {{--                            <div class="d-flex justify-content-center">--}}
            {{--                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div class="card-footer d-flex justify-content-between bg-light border">--}}
            {{--                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
            {{--                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="col-lg-4 col-md-6 col-sm-12 pb-1">--}}
            {{--                    <div class="card product-item border-0 mb-4">--}}
            {{--                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
            {{--                            <img class="img-fluid w-100" src="{{asset('img/product-3.jpg')}}"
            alt="">--}}
            {{--                        </div>--}}
            {{--                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">--}}
            {{--                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
            {{--                            <div class="d-flex justify-content-center">--}}
            {{--                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div class="card-footer d-flex justify-content-between bg-light border">--}}
            {{--                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
            {{--                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="col-lg-4 col-md-6 col-sm-12 pb-1">--}}
            {{--                    <div class="card product-item border-0 mb-4">--}}
            {{--                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
            {{--                            <img class="img-fluid w-100" src="{{asset('img/product-4.jpg')}}"
            alt="">--}}
            {{--                        </div>--}}
            {{--                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">--}}
            {{--                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
            {{--                            <div class="d-flex justify-content-center">--}}
            {{--                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div class="card-footer d-flex justify-content-between bg-light border">--}}
            {{--                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
            {{--                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="col-lg-4 col-md-6 col-sm-12 pb-1">--}}
            {{--                    <div class="card product-item border-0 mb-4">--}}
            {{--                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
            {{--                            <img class="img-fluid w-100" src="{{asset('img/product-5.jpg')}}"
            alt="">--}}
            {{--                        </div>--}}
            {{--                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">--}}
            {{--                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
            {{--                            <div class="d-flex justify-content-center">--}}
            {{--                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div class="card-footer d-flex justify-content-between bg-light border">--}}
            {{--                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
            {{--                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="col-lg-4 col-md-6 col-sm-12 pb-1">--}}
            {{--                    <div class="card product-item border-0 mb-4">--}}
            {{--                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
            {{--                            <img class="img-fluid w-100" src="{{asset('img/product-6.jpg')}}"
            alt="">--}}
            {{--                        </div>--}}
            {{--                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">--}}
            {{--                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
            {{--                            <div class="d-flex justify-content-center">--}}
            {{--                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div class="card-footer d-flex justify-content-between bg-light border">--}}
            {{--                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
            {{--                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="col-lg-4 col-md-6 col-sm-12 pb-1">--}}
            {{--                    <div class="card product-item border-0 mb-4">--}}
            {{--                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
            {{--                            <img class="img-fluid w-100" src="{{asset('img/product-7.jpg')}}"
            alt="">--}}
            {{--                        </div>--}}
            {{--                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">--}}
            {{--                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
            {{--                            <div class="d-flex justify-content-center">--}}
            {{--                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div class="card-footer d-flex justify-content-between bg-light border">--}}
            {{--                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
            {{--                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="col-lg-4 col-md-6 col-sm-12 pb-1">--}}
            {{--                    <div class="card product-item border-0 mb-4">--}}
            {{--                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
            {{--                            <img class="img-fluid w-100" src="{{asset('img/product-8.jpg')}}"
            alt="">--}}
            {{--                        </div>--}}
            {{--                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">--}}
            {{--                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
            {{--                            <div class="d-flex justify-content-center">--}}
            {{--                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div class="card-footer d-flex justify-content-between bg-light border">--}}
            {{--                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
            {{--                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="col-lg-4 col-md-6 col-sm-12 pb-1">--}}
            {{--                    <div class="card product-item border-0 mb-4">--}}
            {{--                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
            {{--                            <img class="img-fluid w-100" src="{{asset('img/product-1.jpg')}}"
            alt="">--}}
            {{--                        </div>--}}
            {{--                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">--}}
            {{--                            <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
            {{--                            <div class="d-flex justify-content-center">--}}
            {{--                                <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div class="card-footer d-flex justify-content-between bg-light border">--}}
            {{--                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
            {{--                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <div class="col-12 pb-1" >--}}
            {{--                    <nav aria-label="Page navigation">--}}
            {{--                        <ul class="pagination justify-content-center mb-3">--}}
            {{--                            <li class="page-item disabled">--}}
            {{--                                <a class="page-link" href="#" aria-label="Previous">--}}
            {{--                                    <span aria-hidden="true">&laquo;</span>--}}
            {{--                                    <span class="sr-only">Previous</span>--}}
            {{--                                </a>--}}
            {{--                            </li>--}}
            {{--                            <li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
            {{--                            <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
            {{--                            <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
            {{--                            <li class="page-item">--}}
            {{--                                <a class="page-link" href="#" aria-label="Next">--}}
            {{--                                    <span aria-hidden="true">&raquo;</span>--}}
            {{--                                    <span class="sr-only">Next</span>--}}
            {{--                                </a>--}}
            {{--                            </li>--}}
            {{--                        </ul>--}}
            {{--                    </nav>--}}
            {{--                </div>--}}
        </div>
    </div>
    <!-- Shop Product End -->
    </div>
    </div>
    <!-- Shop End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span
                            class="text-primary font-weight-bold border border-white px-3 mr-1">E</span>Shopper</h1>
                </a>
                <p>it is Small E-commerce website that We buy brands of Clothes</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Cairo, Egypt</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>mostafaaaelgendyy@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+20 111 447 4582</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="{{ route('home') }}"><i
                                    class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="{{ route('shop') }}"><i
                                    class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            {{--                        <a class="text-dark mb-2" href="{{ route('detail') }}"><i
                                class="fa fa-angle-right mr-2"></i>Shop Detail</a>--}}
                            <a class="text-dark mb-2" href="{{ route('cart.list') }}"><i
                                    class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-dark mb-2" href="{{ route('checkout') }}"><i
                                    class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-dark" href="{{ route('contact') }}"><i
                                    class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Newsletter</h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 py-4" placeholder="Your Name"
                                    required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 py-4" placeholder="Your Email"
                                    required="required" />
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">Subscribe
                                    Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="#">Small E-commerce</a>. All Rights
                    Reserved. Designed
                    by
                    <a class="text-dark font-weight-semi-bold"
                        href="https://www.linkedin.com/in/mostafa-elgendy-673976220/">Mostafa Elgendy</a><br>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="{{asset('img/payments.png')}}" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="{{asset('https://code.jquery.com/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>