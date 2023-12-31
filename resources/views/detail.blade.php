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
                    {{--                <span class="badge">0</span>--}}
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
                            <a href="{{ route('home') }}" class="nav-item nav-link">Home</a>
                            <a href="{{ route('shop') }}" class="nav-item nav-link">Shop</a>
                            {{--                        <a href="{{ route('detail') }}" class="nav-item nav-link
                            active">Shop Detail</a>--}}
                            <a href="{{ route('cart.list') }}" class="nav-item nav-link">Shopping Cart</a>
                            <a href="{{ route('checkout') }}" class="nav-item nav-link">Checkout</a>
                            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                        </div>
                        {{--                    <div class="navbar-nav ml-auto py-0">--}}
                        {{--                        <a href="" class="nav-item nav-link">Login</a>--}}
                        {{--                        <a href="" class="nav-item nav-link">Register</a>--}}
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
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Shop Detail</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{ route('home') }}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shop Detail</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Shop Detail Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 pb-5">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner border">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" src="{{asset('img/product.png')}}" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="w-100 h-100" src="{{asset('img/product.png')}}" alt="Image">
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a>
                </div>
            </div>

            @foreach($products as $k => $data)
            <div class="col-lg-7 pb-5">
                <h3 class="font-weight-semi-bold">{{$data->name}}</h3>
                <div class="d-flex mb-3">
                    <div class="text-primary mr-2">
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star-half-alt"></small>
                        <small class="far fa-star"></small>
                    </div>
                    <small class="pt-1">(50 Reviews)</small>
                </div>
                <h3 class="font-weight-semi-bold mb-4">${{$data->price}}</h3>
                <p class="mb-4">{{$data->description}}</p>
                <div class="d-flex mb-3">
                    <p class="text-dark font-weight-medium mb-0 mr-3">Sizes:</p>
                    <label>{{$data->size}}</label>
                </div>
                <div class="d-flex mb-4">
                    <p class="text-dark font-weight-medium mb-0 mr-3">Colors:</p>
                    <label>{{$data->color}}</label>
                    </form>
                </div>
                <div class="d-flex align-items-center mb-4 pt-2">
                    {{--                    <div class="input-group quantity mr-3" style="width: 130px;">--}}
                    {{--                        <div class="input-group-btn">--}}
                    {{--                            <button class="btn btn-primary btn-minus" >--}}
                    {{--                                <i class="fa fa-minus"></i>--}}
                    {{--                            </button>--}}
                    {{--                        </div>--}}
                    {{--                        <input type="text" class="form-control bg-secondary text-center" value="1">--}}
                    {{--                        <div class="input-group-btn">--}}
                    {{--                            <button class="btn btn-primary btn-plus">--}}
                    {{--                                <i class="fa fa-plus"></i>--}}
                    {{--                            </button>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $data->id }}" name="id">
                        <input type="hidden" value="{{ $data->name }}" name="name">
                        <input type="hidden" value="{{ $data->price }}" name="price">
                        <input type="hidden" value="1" name="quantity">
                        <button class="px-4 py-2 text-white bg-blue-800 rounded"> <i
                                class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</button>
                    </form>
                    {{--                    <form action="{{ route('cart.store') }}" method="POST"
                    enctype="multipart/form-data">--}}
                    {{--                        @csrf--}}
                    {{--                        <input type="hidden" value="{{ $row->id }}" name="id">--}}
                    {{--                        <input type="hidden" value="{{ $row->name }}" name="name">--}}
                    {{--                        <input type="hidden" value="{{ $row->price }}" name="price">--}}
                    {{--                        <input type="hidden" value="1" name="quantity">--}}
                    {{--                        <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button>--}}
                    {{--                    </form>--}}
                </div>
                <div class="d-flex pt-2">
                    <p class="text-dark font-weight-medium mb-0 mr-2">Share on:</p>
                    <div class="d-inline-flex">
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
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row px-xl-5">
            @foreach($products as $k => $data)

            <div class="col">
                <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                    <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Description</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-3">Reviews (0)</a>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <h4 class="mb-3">Product Description</h4>
                        <p>{{$data->description}}</p>
                    </div>
                    <div class="tab-pane fade" id="tab-pane-3">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="mb-4">0 review for "{{$data->name}}"</h4>

                            </div>
                            <div class="col-md-6">
                                <h4 class="mb-4">Leave a review</h4>
                                <small>Your email address will not be published. Required fields are marked *</small>
                                <div class="d-flex my-3">
                                    <p class="mb-0 mr-2">Your Rating * :</p>
                                    <div class="text-primary">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                                <form>
                                    <div class="form-group">
                                        <label for="message">Your Review *</label>
                                        <textarea readonly placeholder="Will be Implemented Soon Insha'allah"
                                            id="message" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Your Name *</label>
                                        <input readonly placeholder="Will be Implemented Soon Insha'allah" type="text"
                                            class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Your Email *</label>
                                        <input readonly placeholder="Will be Implemented Soon Insha'allah" type="email"
                                            class="form-control" id="email">
                                    </div>
                                    <div class="form-group mb-0">
                                        <input type="submit" value="Leave Your Review" class="btn btn-primary px-3">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    {{--<div class="container-fluid py-5">--}}
    {{--    <div class="text-center mb-4">--}}
    {{--        <h2 class="section-title px-5"><span class="px-2">You May Also Like</span></h2>--}}
    {{--    </div>--}}
    {{--    <div class="row px-xl-5">--}}
    {{--        <div class="col">--}}
    {{--            <div class="owl-carousel related-carousel">--}}
    {{--                <div class="card product-item border-0">--}}
    {{--                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
    {{--                        <img class="img-fluid w-100" src="{{asset('img/product-1.jpg')}}" alt="">--}}
    {{--                    </div>--}}
    {{--                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">--}}
    {{--                        <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
    {{--                        <div class="d-flex justify-content-center">--}}
    {{--                            <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="card-footer d-flex justify-content-between bg-light border">--}}
    {{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
    {{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="card product-item border-0">--}}
    {{--                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
    {{--                        <img class="img-fluid w-100" src="{{asset('img/product-2.jpg')}}" alt="">--}}
    {{--                    </div>--}}
    {{--                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">--}}
    {{--                        <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
    {{--                        <div class="d-flex justify-content-center">--}}
    {{--                            <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="card-footer d-flex justify-content-between bg-light border">--}}
    {{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
    {{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="card product-item border-0">--}}
    {{--                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
    {{--                        <img class="img-fluid w-100" src="{{asset('img/product-3.jpg')}}" alt="">--}}
    {{--                    </div>--}}
    {{--                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">--}}
    {{--                        <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
    {{--                        <div class="d-flex justify-content-center">--}}
    {{--                            <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="card-footer d-flex justify-content-between bg-light border">--}}
    {{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
    {{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="card product-item border-0">--}}
    {{--                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
    {{--                        <img class="img-fluid w-100" src="{{asset('img/product-4.jpg')}}" alt="">--}}
    {{--                    </div>--}}
    {{--                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">--}}
    {{--                        <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
    {{--                        <div class="d-flex justify-content-center">--}}
    {{--                            <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="card-footer d-flex justify-content-between bg-light border">--}}
    {{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
    {{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="card product-item border-0">--}}
    {{--                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">--}}
    {{--                        <img class="img-fluid w-100" src="{{asset('img/product-5.jpg')}}" alt="">--}}
    {{--                    </div>--}}
    {{--                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">--}}
    {{--                        <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>--}}
    {{--                        <div class="d-flex justify-content-center">--}}
    {{--                            <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="card-footer d-flex justify-content-between bg-light border">--}}
    {{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>--}}
    {{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}
    {{--<!-- Products End -->--}}


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span
                            class="text-primary font-weight-bold border border-white px-3 mr-1">E</span>Shopper</h1>
                </a>
                <p>Dolore erat dolor sit lorem vero amet. Sed sit lorem magna, ipsum no sit erat lorem et magna ipsum
                    dolore amet erat.</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Our
                                Shop</a>
                            {{--                        <a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>--}}
                            <a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Shopping
                                Cart</a>
                            <a class="text-dark mb-2" href="checkout.html"><i
                                    class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact
                                Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Our
                                Shop</a>
                            {{--                        <a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>--}}
                            <a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Shopping
                                Cart</a>
                            <a class="text-dark mb-2" href="checkout.html"><i
                                    class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact
                                Us</a>
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
                    &copy; <a class="text-dark font-weight-semi-bold" href="#">Your Site Name</a>. All Rights Reserved.
                    Designed
                    by
                    <a class="text-dark font-weight-semi-bold" href="https://htmlcodex.com">HTML Codex</a><br>
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