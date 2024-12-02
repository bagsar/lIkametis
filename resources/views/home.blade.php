<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> LikaMetis </title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all">
    <!-- Fontawesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Owlcarousel Link -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- Font Family-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Icon Link -->
    <link rel="stylesheet" href="assets/fonts/themability-font.css">
    <!-- CSS Link -->
    <link rel="stylesheet" href="style.css" type="text/css" media="all">
    <!--- Themibility link-->
    <link rel="stylesheet" href="assets/css/themability_megamenu.css">

</head>

<body class="home_page">
    <div class="loader"></div>
    <!-- Header_Top-->
    <nav id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 top-left">
                    <div class="contact-info">
                        <a href="tel:+1(123)8425733">
                            <i class="fa fa-phone"></i>
                            <span class="">+(374) 99770022</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 top-right">
                    <div class="pull-left">
                    </div>
 
                    <div id="header_ac" class="dropdown">
                       
 @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
               <a href="{{ url('/dashboard') }}" class="btn-link show">Dashboard</a>
                    @else
               <a href="{{ route('login') }}" class="btn-link show p-2">Log in</a>

                        @if (Route::has('register'))
          <a href="{{ route('register') }}" class="btn-link show">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


       
                    </div>

                    <div id="top-links" class="nav pull-right d-none">
                        <ul class="list-inline">
                            <li class="hidden">
                                <a href="#" id="wishlist-total" title="Wish List (2)">
                                    <i class="fa fa-heart"></i>
                                    <span class="hidden-xs hidden-sm hidden-md">Wish List (2)</span>
                                </a>
                            </li>
                            <li class="hidden">
                                <a href="#" title="Shopping Cart">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="hidden-xs hidden-sm hidden-md">Shopping Cart</span>
                                </a>
                            </li>
                            <li class="hidden">
                                <a href="#" title="Checkout">
                                    <i class="fa fa-share"></i>
                                    <span class="hidden-xs hidden-sm hidden-md">Checkout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Header_Top -->

    <!-- Nav_bar -->
    <header class="">
        <div class="container">
            <div class="row header-inner align-items-center sub_sub_menu">
                <div class="col-xl-2 col-md-6 header-left">
                    <div id="logo"> <a href="index.html">
                            <img src="assets/images/logo.png" title="Your Store" alt="Your Store" class="img-fluid">
                        </a> </div>
                </div>
                <div class="header-center text-end col-xl-7">
                    <div class="themability_megamenu-style-dev">
                        <div class="responsive themability_default">

                            <nav class="navbar-default">
                                <div class=" container-themability_megamenu horizontal ">
                                    <div class="navbar-header">
                                        <button type="button" id="show-themability_megamenu" data-toggle="collapse" class="navbar-toggle">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>

                                    <div class="themability_megamenu-wrapper megamenu_typeheader">

                                        <span id="remove-themability_megamenu" class="fa-solid fa-xmark"></span>

                                        <div class="themability_megamenu-pattern">
                                            <div class="container">
                                                <ul class="themability_megamenu" data-megamenuid="31" data-transition="slide" data-animationtime="500">

                                                    <li class="home">
                                                        <a href="/">
                                                            <span><strong>Home</strong></span>
                                                        </a>
                                                    </li>
                                                    <li class="with-sub-menu click">
                                                        <p class="close-menu"></p>
                                                        <a href="#" class="clearfix">
                                                            <strong>
                                                                LikaMetis
                                                            </strong>

                                                            <b class="fa fa-angle-down"></b>
                                                        </a>
                                                        <div class="sub-menu" style="width: 900px; display: none;">
                                                            <div class="content" style="display: none;">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="categories hot">
                                                                            <div class="row">
                                                                                                 <img alt="" class="img-responsive mw-35" src="/images/metis.jpg">
                                                                                                 <a href="category.html" class="main-menu">Wrenches</a>
                                                                                <div class="col-sm-3 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <ul>
                                                                                                    <li><a href="category.html">Plumbing Tools</a></li>
                                                                                                 
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-3 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <ul>
                                                                                                    <li><a href="category.html">Air Tools</a></li>                                                                              
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-3 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <ul>
                                                                                                    <li><a href="category.html">Gardening Tools</a></li>
                                                                                              
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-3 static-menu">
                                                                                    <div class="menu">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <ul>
                                                                                                    <li><a href="category.html">Drills</a></li>
                                                                 
                                                                                                </ul>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="border"></div>
                                                           
                                                            </div>
                                                        </div>
                                                    </li>

                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="header-right col-xl-3 col-md-6">
                    <div class="search-content">
                        <div class="search-btn-outer d-lg-none">
                            <i class="icon-search"></i>
                        </div>
                        <div class="header-search">
                            <div id="themabilitySearch" class="input-group themability-search">
                                <input type="text" name="search" value="" placeholder="Search..." class="form-control input-lg ui-autocomplete-input" autocomplete="off">
                                <span class="btn-search input-group-btn">
                                    <button type="button" class="btn btn-primary btn-lg"><i class="icon-search"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div id="header-cart" class="cart-content">
                        <div id="cart" class="dropdown d-grid btn-group btn-block">
                            <button type="button" data-bs-toggle="dropdown" class="btn btn-inverse btn-block dropdown-toggle show">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span id="cart-total" class="new">2<span class="d-none">2</span></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right header-cart-toggle ">
                                <li class="cart-content-product">
                                    <table class="table table-sm table-striped">
                                        <tbody>
                                            <tr>
                                                <td class="text-center product-cart-thumb">
                                                    <a href="#">
                                                        <img src="assets/images/products/7.jpg" width="90" alt="Backsaw tool" title="Backsaw tool" class="img-thumbnail">
                                                    </a>
                                                </td>
                                                <td class="text-start product-cart-details">
                                                    <a href="product.html" class="product-item-name">Screwdriver</a>
                                                    <div class="product-cart-info">
                                                        <span class="product-cart-qty">1 x </span>
                                                        <span class="product-cart-price">122.00$</span>
                                                    </div>
                                                </td>
                                                <td class="text-end product-cart-close">
                                                    <form method="post" data-oc-toggle="ajax" data-oc-load="" data-oc-target="#header-cart">
                                                        <input type="hidden" name="key" value="10">
                                                        <button type="button" data-bs-toggle="tooltip" title="Remove" class="btn btn-danger"><i class="fa-solid fa-circle-xmark"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center product-cart-thumb">
                                                    <a href="#">
                                                        <img src="assets/images/products/9.jpg" width="90" alt="Backsaw tool" title="Backsaw tool" class="img-thumbnail">
                                                    </a>
                                                </td>
                                                <td class="text-start product-cart-details">
                                                    <a href="product.html" class="product-item-name">Electric drill</a>
                                                    <div class="product-cart-info">
                                                        <span class="product-cart-qty">1 x </span>
                                                        <span class="product-cart-price">1,202.00$</span>
                                                    </div>
                                                </td>
                                                <td class="text-end product-cart-close">
                                                    <form method="post" data-oc-toggle="ajax" data-oc-load="" data-oc-target="#header-cart">
                                                        <input type="hidden" name="key" value="10">
                                                        <button type="button" data-bs-toggle="tooltip" title="Remove" class="btn btn-danger"><i class="fa-solid fa-circle-xmark"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>
                                <li>
                                    <div>
                                        <table class="table table-sm table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td class="text-start"><strong>Sub-Total</strong></td>
                                                    <td class="text-end">1,100.00$</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start"><strong>Eco Tax (-2.00)</strong></td>
                                                    <td class="text-end">4.00$</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start"><strong>VAT (20%)</strong></td>
                                                    <td class="text-end">220.00$</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start"><strong>Total</strong></td>
                                                    <td class="text-end">1,324.00$</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p class="text-center product-cart-button">
                                            <a href="shopping-cart.html" class="btn-primary cart-btn addtocart-btn"><i class="fa-solid fa-cart-shopping d-none"></i> View Cart</a>
                                            &nbsp;&nbsp;&nbsp;<a href="checkout.html" class="btn-primary cart-btn checkout-btn"><i class="fa-solid fa-share d-none"></i> Checkout</a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Nav_bar -->

    <!-- Banner_Slider -->
    <div class="container-fluid p-0">
        <div class="banner-slider owl-carousel owl-theme">
            <div class="item bann-img">
                <div class="bg-img bg-img-2">
                    <img src="assets/images/banners/mainbanner1.jpg" alt="">
                </div>
            </div>
            <div class="item bann-img">
                <div class="bg-img bg-img-3">
                    <img src="assets/images/banners/mainbanner2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- .Banner_Slider -->

    <!-- Shop_Categories -->
    <div class="shop-categories">
        <div class="container">
            <div class="heading-cate page-title">
                <h1 class="text-center">
                    Shop By Categories
                </h1>
            </div>
            <div class="main-box owl-carousel owl-theme swiper-pager">
                <div class="item box">
                    <div class="shop-card">
                        <img src="assets/images/categories/1.png" class="shop-1" alt="...">
                        <div class="card-body plier">
                            <h2 class="card-title">Pliers</h2>
                            <p class="card-text">Shop Laptop feature only the b...</p>
                            <a href="category.html" class="btn plier-btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="item box">
                    <div class="shop-card">
                        <img src="assets/images/categories/2.png" class="shop-1" alt="...">
                        <div class="card-body plier">
                            <h2 class="card-title">Sanding Tools</h2>
                            <p class="card-text">Shop laptop feature only the b...</p>
                            <a href="category.html" class="btn plier-btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="item box">
                    <div class="shop-card">
                        <img src="assets/images/categories/3.png" class="shop-1" alt="...">
                        <div class="card-body plier">
                            <h2 class="card-title">Drywall anchors</h2>
                            <p class="card-text">Example of category description...</p>
                            <a href="category.html" class="btn plier-btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row fetura d-flex">
                <div class="free-shipping col-lg-3 col-md-6 col-sm-6">
                    <div class="circle">
                        <i class="icon-shipping"></i>
                    </div>
                    <div class="circ-text">
                        <p>Free shipping</p>
                        <span>On order over $150</span>
                    </div>
                </div>
                <div class="free-shipping col-lg-3 col-md-6 col-sm-6">
                    <div class="circle">
                        <i class="icon-wallet"></i>
                    </div>
                    <div class="circ-text">
                        <p>Cash On Delivery</p>
                        <span>100% money back guarantee</span>
                    </div>
                </div>
                <div class="free-shipping col-lg-3 col-md-6 col-sm-6">
                    <div class="circle">
                        <i class="icon-gift"></i>
                    </div>
                    <div class="circ-text">
                        <p>Special Gift Card</p>
                        <span>Offer special bonuses with gift</span>
                    </div>
                </div>
                <div class="free-shipping col-lg-3 col-md-6 col-sm-6">
                    <div class="circle">
                        <i class="icon-customer-service"></i>
                    </div>
                    <div class="circ-text">
                        <p>24/7 customer service</p>
                        <span>Call us 24/7 at 123-456-789</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .Shop_Categories -->

    <!-- Top_Product -->
    <div class="product-section mt wow fadeInUp">
        <div class="container">
            <div class="product-hedaing page-title">
                <h1 class="text-center">
                    Top Product
                </h1>
                <div class="row">
                    <div class="product-btn list-group list-group-horizontal" id="list-tab" role="tablist">
                        <a class="list-group-item-action btn-click active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Featured</a>
                        <a class="list-group-item-action btn-click" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Latest</a>
                        <a class="list-group-item-action btn-click" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Bestseller</a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active " id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                            <div class="product-items owl-carousel owl-theme swiper-pager">
                                <div class="item product">
                                    <div class="col col-xs-12 single-column">
                                        <div class="card product-card h-100 border-0">
                                            <a href="product.html">
                                                <img src="assets/images/products/6.jpg" class="card-img-top" alt="..."></a>
                                            <div class="button-group">
                                                <button>
                                                    <i class="icon-shopping-bag"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-like"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-eye"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-shuffle-arrows"></i>
                                                </button>
                                            </div>
                                            <div class="card-body product-detail">
                                                <span class="star-icon">
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                    <i class="fa-regular fa-star"></i>
                                                </span>
                                                <a href="product.html">
                                                    <h6 class="card-text m-0">Backsaw Tool</h6>
                                                </a>
                                                <p class="card-text">$20.00</p>
                                            </div>
                                        </div>
                                        <div class="card product-card h-100 border-0">
                                            <a href="product.html">
                                                <img src="assets/images/products/1.jpg" class="card-img-top" alt="...">
                                            </a>
                                            <div class="button-group">
                                                <button>
                                                    <i class="icon-shopping-bag"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-like"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-eye"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-shuffle-arrows"></i>
                                                </button>
                                            </div>
                                            <div class="card-body product-detail">
                                                <span class="star-icon"><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i>
                                                </span>
                                                <a href="product.html">
                                                    <h6 class="card-text m-0">Monykeywrench</h6>
                                                </a>
                                                <p class="card-text">$110.00 <span class="text-decoration-line-through text-muted ms-3">$122.00</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item product">
                                    <div class="col col-xs-12 single-column">
                                        <div class="card product-card h-100 border-0">
                                            <a href="product.html">
                                                <img src="assets/images/products/12.jpg" class="card-img-top" alt="...">
                                            </a>
                                            <div class="button-group">
                                                <button>
                                                    <i class="icon-shopping-bag"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-like"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-eye"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-shuffle-arrows"></i>
                                                </button>
                                            </div>
                                            <div class="card-body product-detail">
                                                <span class="star-icon">
                                                    <i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i></span>
                                                <a href="product.html">
                                                    <h6 class="card-text m-0">Caulking Gun</h6>
                                                </a>
                                                <p class="card-text">$122.00</p>
                                            </div>
                                        </div>
                                        <div class="card product-card h-100 border-0">
                                            <a href="product.html">
                                                <img src="assets/images/products/9.jpg" class="card-img-top" alt="...">
                                            </a>
                                            <div class="button-group">
                                                <button>
                                                    <i class="icon-shopping-bag"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-like"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-eye"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-shuffle-arrows"></i>
                                                </button>
                                            </div>
                                            <div class="card-body product-detail">
                                                <span class="star-icon"><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i></span>
                                                <a href="product.html">
                                                    <h6 class="card-text m-0">Electric Drill</h6>
                                                </a>
                                                <p class="card-text">$1,202.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item product">
                                    <div class="col col-xs-12 single-column">
                                        <div class="card product-card h-100 border-0">
                                            <a href="product.html">
                                                <img src="assets/images/products/16.jpg" class="card-img-top" alt="...">
                                            </a>
                                            <div class="button-group">
                                                <button>
                                                    <i class="icon-shopping-bag"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-like"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-eye"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-shuffle-arrows"></i>
                                                </button>
                                            </div>
                                            <div class="card-body product-detail">
                                                <span class="star-icon"><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i></span>
                                                <a href="product.html">
                                                    <h6 class="card-text m-0">Cordless Drill</h6>
                                                </a>
                                                <p class="card-text">$482.00 <span class="text-decoration-line-through text-muted ms-3">$602.00</span></p>
                                            </div>
                                        </div>
                                        <div class="card product-card h-100 border-0">
                                            <a href="product.html">
                                                <img src="assets/images/products/14.jpg" class="card-img-top" alt="...">
                                            </a>
                                            <div class="button-group">
                                                <button>
                                                    <i class="icon-shopping-bag"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-like"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-eye"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-shuffle-arrows"></i>
                                                </button>
                                            </div>
                                            <div class="card-body product-detail">
                                                <span class="star-icon"><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i></span>
                                                <a href="product.html">
                                                    <h6 class="card-text m-0">Coping Saw</h6>
                                                </a>
                                                <p class="card-text">$122.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item product">
                                    <div class="col col-xs-12 single-column">
                                        <div class="card product-card h-100 border-0">
                                            <a href="product.html">
                                                <img src="assets/images/products/17.jpg" class="card-img-top" alt="...">
                                            </a>
                                            <div class="button-group">
                                                <button>
                                                    <i class="icon-shopping-bag"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-like"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-eye"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-shuffle-arrows"></i>
                                                </button>
                                            </div>
                                            <div class="card-body product-detail">
                                                <span class="star-icon"><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i></span>
                                                <a href="product.html">
                                                    <h6 class="card-text m-0">Hammer Tool</h6>
                                                </a>
                                                <p class="card-text">$98.00 <span class="text-decoration-line-through text-muted ms-3">$122.00</span></p>
                                            </div>
                                        </div>
                                        <div class="card product-card h-100 border-0">
                                            <a href="product.html">
                                                <img src="assets/images/products/7.jpg" class="card-img-top" alt="...">
                                            </a>
                                            <div class="button-group">
                                                <button>
                                                    <i class="icon-shopping-bag"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-like"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-eye"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-shuffle-arrows"></i>
                                                </button>
                                            </div>
                                            <div class="card-body product-detail">
                                                <span class="star-icon"><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i></span>
                                                <a href="product.html">
                                                    <h6 class="card-text m-0">Screwdriver</h6>
                                                </a>
                                                <p class="card-text">$122.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item product">
                                    <div class="col col-xs-12 single-column">
                                        <div class="card product-card h-100 border-0">
                                            <a href="product.html">
                                                <img src="assets/images/products/8.jpg" class="card-img-top" alt="...">
                                            </a>
                                            <div class="button-group">
                                                <button>
                                                    <i class="icon-shopping-bag"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-like"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-eye"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-shuffle-arrows"></i>
                                                </button>
                                            </div>
                                            <div class="card-body product-detail">
                                                <span class="star-icon"><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i></span>
                                                <a href="product.html">
                                                    <h6 class="card-text m-0">Soldering Iron</h6>
                                                </a>
                                                <p class="card-text">$122.00</p>
                                            </div>
                                        </div>
                                        <div class="card product-card h-100 border-0">
                                            <a href="product.html">
                                                <img src="assets/images/products/6.jpg" class="card-img-top" alt="...">
                                            </a>
                                            <div class="button-group">
                                                <button>
                                                    <i class="icon-shopping-bag"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-like"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-eye"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-shuffle-arrows"></i>
                                                </button>
                                            </div>
                                            <div class="card-body product-detail">
                                                <span class="star-icon"><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i></span>
                                                <a href="product.html">
                                                    <h6 class="card-text m-0">Spirit Level</h6>
                                                </a>
                                                <p class="card-text">$122.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item product">
                                    <div class="col col-xs-12 single-column">
                                        <div class="card product-card h-100 border-0">
                                            <a href="product.html">
                                                <img src="assets/images/products/11.jpg" class="card-img-top" alt="...">
                                            </a>
                                            <div class="button-group">
                                                <button>
                                                    <i class="icon-shopping-bag"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-like"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-eye"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-shuffle-arrows"></i>
                                                </button>
                                            </div>
                                            <div class="card-body product-detail">
                                                <span class="star-icon"><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i></span>
                                                <a href="product.html">
                                                    <h6 class="card-text m-0">Stepladder Tool</h6>
                                                </a>
                                                <p class="card-text">$1,202.00</p>
                                            </div>
                                        </div>
                                        <div class="card product-card h-100 border-0">
                                            <a href="product.html">
                                                <img src="assets/images/products/5.jpg" class="card-img-top" alt="...">
                                            </a>
                                            <div class="button-group">
                                                <button>
                                                    <i class="icon-shopping-bag"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-like"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-eye"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-shuffle-arrows"></i>
                                                </button>
                                            </div>
                                            <div class="card-body product-detail">
                                                <span class="star-icon"><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i></span>
                                                <a href="product.html">
                                                    <h6 class="card-text m-0">Sterilizers</h6>
                                                </a>
                                                <p class="card-text">$122.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                            <div class="latest product-items owl-carousel owl-theme swiper-pager">
                                <div class="item product">
                                    <div class="col col-xs-12 single-column">
                                        <div class="card product-card h-100 border-0">
                                            <a href="product.html">
                                                <img src="assets/images/products/6.jpg" class="card-img-top" alt="...">
                                            </a>
                                            <div class="button-group">
                                                <button>
                                                    <i class="icon-shopping-bag"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-like"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-eye"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-shuffle-arrows"></i>
                                                </button>
                                            </div>
                                            <div class="card-body product-detail">
                                                <span class="star-icon"><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i></span>
                                                <a href="product.html">
                                                    <h6 class="card-text m-0">Backsaw Tool</h6>
                                                </a>
                                                <p class="card-text">$20.00</p>
                                            </div>
                                        </div>
                                        <div class="card product-card h-100 border-0">
                                            <a href="product.html">
                                                <img src="assets/images/products/14.jpg" class="card-img-top" alt="...">
                                            </a>
                                            <div class="button-group">
                                                <button>
                                                    <i class="icon-shopping-bag"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-like"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-eye"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-shuffle-arrows"></i>
                                                </button>
                                            </div>
                                            <div class="card-body product-detail">
                                                <span class="star-icon"><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i></span>
                                                <a href="product.html">
                                                    <h6 class="card-text m-0">Plunger Tool</h6>
                                                </a>
                                                <p class="card-text">$241.99</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item product">
                                    <div class="col col-xs-12 single-column">
                                        <div class="card product-card h-100 border-0">
                                            <a href="product.html">
                                                <img src="assets/images/products/13.jpg" class="card-img-top" alt="...">
                                            </a>
                                            <div class="button-group">
                                                <button>
                                                    <i class="icon-shopping-bag"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-like"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-eye"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-shuffle-arrows"></i>
                                                </button>
                                            </div>
                                            <div class="card-body product-detail">
                                                <span class="star-icon"><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i></span>
                                                <a href="product.html">
                                                    <h6 class="card-text m-0">Impact Wrench</h6>
                                                </a>
                                                <p class="card-text">$122.00</p>
                                            </div>
                                        </div>
                                        <div class="card product-card h-100 border-0">
                                            <a href="product.html">
                                                <img src="assets/images/products/12.jpg" class="card-img-top" alt="...">
                                            </a>
                                            <div class="button-group">
                                                <button>
                                                    <i class="icon-shopping-bag"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-like"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-eye"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-shuffle-arrows"></i>
                                                </button>
                                            </div>
                                            <div class="card-body product-detail">
                                                <span class="star-icon"><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i></span>
                                                <a href="product.html">
                                                    <h6 class="card-text m-0">Caulking Gun</h6>
                                                </a>
                                                <p class="card-text">$122.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item product">
                                    <div class="col col-xs-12 single-column">
                                        <div class="card product-card h-100 border-0">
                                            <a href="product.html">
                                                <img src="assets/images/products/11.jpg" class="card-img-top" alt="...">
                                            </a>
                                            <div class="button-group">
                                                <button>
                                                    <i class="icon-shopping-bag"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-like"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-eye"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-shuffle-arrows"></i>
                                                </button>
                                            </div>
                                            <div class="card-body product-detail">
                                                <span class="star-icon"><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i></span>
                                                <a href="product.html">
                                                    <h6 class="card-text m-0">Stepladder Tool</h6>
                                                </a>
                                                <p class="card-text">$1,202.00</p>
                                            </div>
                                        </div>
                                        <div class="card product-card h-100 border-0">
                                            <a href="product.html">
                                                <img src="assets/images/products/10.jpg" class="card-img-top" alt="...">
                                            </a>
                                            <div class="button-group">
                                                <button>
                                                    <i class="icon-shopping-bag"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-like"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-eye"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-shuffle-arrows"></i>
                                                </button>
                                            </div>
                                            <div class="card-body product-detail">
                                                <span class="star-icon"><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i></span>
                                                <a href="product.html">
                                                    <h6 class="card-text m-0">Pipe Wrench</h6>
                                                </a>
                                                <p class="card-text">$2,000.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item product">
                                    <div class="col col-xs-12 single-column">
                                        <div class="card product-card h-100 border-0">
                                            <a href="product.html">
                                                <img src="assets/images/products/9.jpg" class="card-img-top" alt="...">
                                            </a>
                                            <div class="button-group">
                                                <button>
                                                    <i class="icon-shopping-bag"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-like"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-eye"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-shuffle-arrows"></i>
                                                </button>
                                            </div>
                                            <div class="card-body product-detail">
                                                <span class="star-icon"><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i></span>
                                                <a href="product.html">
                                                    <h6 class="card-text m-0">Electric Drill</h6>
                                                </a>
                                                <p class="card-text">$1,202.00</p>
                                            </div>
                                        </div>
                                        <div class="card product-card h-100 border-0">
                                            <a href="product.html">
                                                <img src="assets/images/products/16.jpg" class="card-img-top" alt="...">
                                            </a>
                                            <div class="button-group">
                                                <button>
                                                    <i class="icon-shopping-bag"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-like"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-eye"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-shuffle-arrows"></i>
                                                </button>
                                            </div>
                                            <div class="card-body product-detail">
                                                <span class="star-icon"><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i></span>
                                                <a href="product.html">
                                                    <h6 class="card-text m-0">Cordless Drill</h6>
                                                </a>
                                                <p class="card-text">$20.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item product">
                                    <div class="col col-xs-12 single-column">
                                        <div class="card product-card h-100 border-0">
                                            <a href="product.html">
                                                <img src="assets/images/products/1.jpg" class="card-img-top" alt="...">
                                            </a>
                                            <div class="button-group">
                                                <button>
                                                    <i class="icon-shopping-bag"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-like"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-eye"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-shuffle-arrows"></i>
                                                </button>
                                            </div>
                                            <div class="card-body product-detail">
                                                <span class="star-icon"><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i></span>
                                                <a href="product.html">
                                                    <h6 class="card-text m-0">Monkeywrench</h6>
                                                </a>
                                                <p class="card-text">$110.00</p>
                                            </div>
                                        </div>
                                        <div class="card product-card h-100 border-0">
                                            <a href="product.html">
                                                <img src="assets/images/products/8.jpg" class="card-img-top" alt="...">
                                            </a>
                                            <div class="button-group">
                                                <button>
                                                    <i class="icon-shopping-bag"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-like"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-eye"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-shuffle-arrows"></i>
                                                </button>
                                            </div>
                                            <div class="card-body product-detail">
                                                <span class="star-icon"><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i></span>
                                                <a href="product.html">
                                                    <h6 class="card-text m-0">Soldering Iron</h6>
                                                </a>
                                                <p class="card-text">$122.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                            <div class="bestseller product-items owl-carousel owl-theme swiper-pager">
                                <div class="item product">
                                    <div class="col col-xs-12 single-column">
                                        <div class="card product-card h-100 border-0">
                                            <a href="product.html">
                                                <img src="assets/images/products/13.jpg" class="card-img-top" alt="...">
                                            </a>
                                            <div class="button-group">
                                                <button>
                                                    <i class="icon-shopping-bag"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-like"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-eye"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-shuffle-arrows"></i>
                                                </button>
                                            </div>
                                            <div class="card-body product-detail">
                                                <span class="star-icon"><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i></span>
                                                <a href="product.html">
                                                    <h6 class="card-text m-0">Impact Wrench</h6>
                                                </a>
                                                <p class="card-text">$122.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item product">
                                    <div class="col col-xs-12 single-column">
                                        <div class="card product-card h-100 border-0">
                                            <a href="product.html">
                                                <img src="assets/images/products/12.jpg" class="card-img-top" alt="...">
                                            </a>
                                            <div class="button-group">
                                                <button>
                                                    <i class="icon-shopping-bag"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-like"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-eye"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-shuffle-arrows"></i>
                                                </button>
                                            </div>
                                            <div class="card-body product-detail">
                                                <span class="star-icon"><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i></span>
                                                <a href="product.html">
                                                    <h6 class="card-text m-0">Caulking Gun</h6>
                                                </a>
                                                <p class="card-text">$20.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item product">
                                    <div class="col col-xs-12 single-column">
                                        <div class="card product-card h-100 border-0">
                                            <a href="product.html">
                                                <img src="assets/images/products/11.jpg" class="card-img-top" alt="...">
                                            </a>
                                            <div class="button-group">
                                                <button>
                                                    <i class="icon-shopping-bag"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-like"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-eye"></i>
                                                </button>
                                                <button>
                                                    <i class="icon-shuffle-arrows"></i>
                                                </button>
                                            </div>
                                            <div class="card-body product-detail">
                                                <span class="star-icon"><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                                            fa-star"></i><i class="fa-regular fa-star"></i></span>
                                                <a href="product.html">
                                                    <h6 class="card-text m-0">Stepladder tool</h6>
                                                </a>
                                                <p class="card-text">$1,202.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .Top_Product -->

    <!-- Testimonial_Section -->
    <div class="testimonial-section wow fadeInUp">
        <div class="container">
            <div class="testimonial-content">
                <div class="testimonial-header page-title white-title">
                    <h1>Testimonial</h1>
                </div>
                <div class="testimonial-items owl-carousel owl-theme swiper-pager">
                    <div class="item">
                        <div class="first-person">
                            <div class="person-face">
                                <img src="assets/images/testimonial/1.jpg" alt="">
                            </div>
                            <div class="person-info">
                                <div class="person-name">Mariya Lorem</div>
                                <div class="person-sr-name">Customer</div>
                            </div>
                            <div class="person-content">
                                <i class="fa-solid fa-quote-left"></i>
                                <p>
                                    Lorem ipsum dolor sit, amet
                                    consectetur adipisicing elit. Ea
                                    sunt dolor necessitatibus doloribus, fuga, rem natus earum
                                    autem officiis nam voluptatem.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="first-person">
                            <div class="person-face">
                                <img src="assets/images/testimonial/3.jpg" alt="">
                            </div>
                            <div class="person-info">
                                <div class="person-name">Noelle Salar</div>
                                <div class="person-sr-name">Customer</div>
                            </div>
                            <div class="person-content">
                                <i class="fa-solid fa-quote-left"></i>
                                <p>
                                    Lorem ipsum dolor sit, amet
                                    consectetur adipisicing elit. Ea
                                    sunt dolor necessitatibus doloribus, fuga, rem natus earum
                                    autem officiis nam voluptatem.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="first-person">
                            <div class="person-face">
                                <img src="assets/images/testimonial/2.jpg" alt="">
                            </div>
                            <div class="person-info">
                                <div class="person-name">Smith Anthor</div>
                                <div class="person-sr-name">Customer</div>
                            </div>
                            <div class="person-content">
                                <i class="fa-solid fa-quote-left"></i>
                                <p>
                                    Lorem ipsum dolor sit, amet
                                    consectetur adipisicing elit. Ea
                                    sunt dolor necessitatibus doloribus, fuga, rem natus earum
                                    autem officiis nam voluptatem.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .Testimonial_Section -->

    <!-- Special_Product -->
    <div class="special-section wow fadeInUp">
        <div class="container">
            <div class="special-hedaing page-title">
                <h1 class="text-center  ">
                    Specials
                </h1>
            </div>
            <div class="special-items owl-carousel owl-theme swiper-pager">
                <div class="item product">
                    <div class="single-column">
                        <div class="card product-card h-100 border-0">
                            <a href="product.html">
                                <img src="assets/images/products/16.jpg" class="card-img-top" alt="...">
                            </a>
                            <div class="button-group sp">
                                <button>
                                    <i class="icon-shopping-bag"></i>
                                </button>
                                <button>
                                    <i class="icon-like"></i>
                                </button>
                                <button>
                                    <i class="icon-eye"></i>
                                </button>
                                <button>
                                    <i class="icon-shuffle-arrows"></i>
                                </button>
                            </div>
                            <div class="card-body product-detail">
                                <span class="star-icon">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"> </i>
                                    <i class="fa-regular fa-star"></i><i class="fa-regular
                                        fa-star"></i><i class="fa-regular fa-star"></i></span>
                                <a href="product.html">
                                    <h6 class="card-text m-0">Cordless drill</h6>
                                </a>
                                <p class="card-text">$120.00 <span class="text-decoration-line-through text-muted ms-3">$180.00</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item product">
                    <div class="single-column">
                        <div class="card product-card h-100 border-0">
                            <a href="product.html">
                                <img src="assets/images/products/17.jpg" class="card-img-top" alt="...">
                            </a>
                            <div class="button-group sp">
                                <button>
                                    <i class="icon-shopping-bag"></i>
                                </button>
                                <button>
                                    <i class="icon-like"></i>
                                </button>
                                <button>
                                    <i class="icon-eye"></i>
                                </button>
                                <button>
                                    <i class="icon-shuffle-arrows"></i>
                                </button>
                            </div>
                            <div class="card-body product-detail">
                                <span class="star-icon"><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                        fa-star"></i><i class="fa-regular fa-star"></i></span>
                                <a href="product.html">
                                    <h6 class="card-text m-0">Hammer tool</h6>
                                </a>
                                <p class="card-text">$100.00 <span class="text-decoration-line-through text-muted ms-3">$130.00</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item product">
                    <div class="single-column">
                        <div class="card product-card h-100 border-0">
                            <a href="product.html">
                                <img src="assets/images/products/1.jpg" class="card-img-top" alt="...">
                            </a>
                            <div class="button-group sp">
                                <button>
                                    <i class="icon-shopping-bag"></i>
                                </button>
                                <button>
                                    <i class="icon-like"></i>
                                </button>
                                <button>
                                    <i class="icon-eye"></i>
                                </button>
                                <button>
                                    <i class="icon-shuffle-arrows"></i>
                                </button>
                            </div>
                            <div class="card-body product-detail">
                                <span class="star-icon"><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                        fa-star"></i><i class="fa-regular fa-star"></i></span>
                                <a href="product.html">
                                    <h6 class="card-text m-0">Monkeywrench</h6>
                                </a>
                                <p class="card-text">$80.00 <span class="text-decoration-line-through text-muted ms-3">$110.00</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item product">
                    <div class="single-column">
                        <div class="card product-card h-100 border-0">
                            <a href="product.html">
                                <img src="assets/images/products/2.jpg" class="card-img-top" alt="...">
                            </a>
                            <div class="button-group sp">
                                <button>
                                    <i class="icon-shopping-bag"></i>
                                </button>
                                <button>
                                    <i class="icon-like"></i>
                                </button>
                                <button>
                                    <i class="icon-eye"></i>
                                </button>
                                <button>
                                    <i class="icon-shuffle-arrows"></i>
                                </button>
                            </div>
                            <div class="card-body product-detail">
                                <span class="star-icon"><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                        fa-star"></i><i class="fa-regular fa-star"></i></span>
                                <a href="product.html">
                                    <h6 class="card-text m-0">Rotary Hammer</h6>
                                </a>
                                <p class="card-text">$50.00 <span class="text-decoration-line-through text-muted ms-3">$80.00</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item product">
                    <div class="single-column">
                        <div class="card product-card h-100 border-0">
                            <a href="product.html">
                                <img src="assets/images/products/3.jpg" class="card-img-top" alt="...">
                            </a>
                            <div class="button-group sp">
                                <button>
                                    <i class="icon-shopping-bag"></i>
                                </button>
                                <button>
                                    <i class="icon-like"></i>
                                </button>
                                <button>
                                    <i class="icon-eye"></i>
                                </button>
                                <button>
                                    <i class="icon-shuffle-arrows"></i>
                                </button>
                            </div>
                            <div class="card-body product-detail">
                                <span class="star-icon"><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular
                                        fa-star"></i><i class="fa-regular fa-star"></i></span>
                                <a href="product.html">
                                    <h6 class="card-text m-0">Tape measure</h6>
                                </a>
                                <p class="card-text">$110.00 <span class="text-decoration-line-through text-muted ms-3">$150.00</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .Special_Product -->

    <!-- Newsletter_Section -->
    <div class="news-section wow fadeInUp">
        <div class="container-fluid p-0">
            <div class="news-content ">
                <div class="container">
                    <div class="news-info row align-items-center">
                        <div class="col-lg-6 d-flex align-items-center mb-md-3 mb-sm-4">
                            <div class="email-icon">
                                <i class="icon-newslatter"></i>
                            </div>
                            <div class="news-discount">
                                <div class="news-heading">
                                    <h3>Subscribe To Newsletter</h3>
                                </div>
                                <div class="news-text">
                                    Get free 20% discount for all products on your first order.
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form action="#">
                                <div class=" subscribe input-group mb-3 mb-sm-0">
                                    <input type="text" class="form-control" placeholder="Enter Your E-mail..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <button class="btn-primary" id="basic-addon2">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .Newsletter_Section -->

    <!-- Blog_Section -->
    <div class="blog-section wow fadeInUp">
        <div class="container mt-5">
            <div class="blog-hedaing page-title">
                <h1 class="text-center ">
                    Blogs
                </h1>
            </div>
            <div class="blogs-items owl-carousel owl-theme swiper-pager">
                <div class="item">
                    <div class="blog-content col-xs-12">
                        <div class="blog-info row d-flex align-items-center">
                            <div class="blog-left col-md-6">
                                <div class="blog-img">
                                    <img src="assets/images/blogs/2.png" alt="">
                                    <div class="blog-day">
                                        <div class="blog-date">22</div>
                                        <div class="blog-month">Nov</div>
                                    </div>
                                    <div class="post-hover">
                                        <a class="zoom" href="#"><i class="fa-solid
                                                fa-magnifying-glass-plus"></i></a>
                                        <a class="read-link" href="where-can-i-get-some.html"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-right col-md-6">
                                <div class="blog-text">
                                    <div class="blog-icon">
                                        <a href="where-can-i-get-some.html">
                                            <i class="fa-solid fa-comment-dots"></i>
                                            <span>0 Comments</span>
                                        </a>
                                    </div>
                                    <div class="blog-title">
                                        <a href="where-can-i-get-some.html">
                                            <h4>WHERE CAN I GET SOME ?</h4>
                                        </a>
                                        <div class="blog-details">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Laudantium, voluptas dicta! Veritatis beatae cum ....
                                        </div>
                                        <div class="blog-btn btn-primary">
                                            <a href="where-can-i-get-some.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog-content col-xs-12">
                        <div class="blog-info row d-flex align-items-center">
                            <div class="blog-left col-md-6">
                                <div class="blog-img">
                                    <img src="assets/images/blogs/3.png" alt="">
                                    <div class="blog-day">
                                        <div class="blog-date">22</div>
                                        <div class="blog-month">Nov</div>
                                    </div>
                                    <div class="post-hover">
                                        <a class="zoom" href="#"><i class="fa-solid
                                                fa-magnifying-glass-plus"></i></a>
                                        <a class="read-link" href="many-publishing-packages.html"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-right col-md-6">
                                <div class="blog-text">
                                    <div class="blog-icon">
                                        <a href="many-publishing-packages.html">
                                            <i class="fa-solid fa-comment-dots"></i>
                                            <span>0 Comments</span>
                                        </a>
                                    </div>
                                    <div class="blog-title">
                                        <a href="many-publishing-packages.html">
                                            <h4>MANY PUBLISHING PACKAGES</h4>
                                        </a>
                                        <div class="blog-details">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Laudantium, voluptas dicta! Veritatis beatae cum ....
                                        </div>
                                        <div class="blog-btn btn-primary">
                                            <a href="many-publishing-packages.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog-content col-xs-12">
                        <div class="blog-info row d-flex align-items-center">
                            <div class="blog-left col-md-6">
                                <div class="blog-img">
                                    <img src="assets/images/blogs/1.png" alt="">
                                    <div class="blog-day">
                                        <div class="blog-date">22</div>
                                        <div class="blog-month">Nov</div>
                                    </div>
                                    <div class="post-hover">
                                        <a class="zoom" href="#"><i class="fa-solid
                                                fa-magnifying-glass-plus"></i></a>
                                        <a class="read-link" href="there-are-many-variations.html"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-right col-md-6">
                                <div class="blog-text">
                                    <div class="blog-icon">
                                        <a href="there-are-many-variations.html">
                                            <i class="fa-solid fa-comment-dots"></i>
                                            <span>0 Comments</span>
                                        </a>
                                    </div>
                                    <div class="blog-title">
                                        <a href="there-are-many-variations.html">
                                            <h4>THERE ARE MANY VARIATIONS</h4>
                                        </a>
                                        <div class="blog-details">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Laudantium, voluptas dicta! Veritatis beatae cum ....
                                        </div>
                                        <div class="blog-btn btn-primary">
                                            <a href="there-are-many-variations.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog-content col-xs-12">
                        <div class="blog-info row d-flex align-items-center">
                            <div class="blog-left col-md-6">
                                <div class="blog-img">
                                    <img src="assets/images/blogs/5.png" alt="">
                                    <div class="blog-day">
                                        <div class="blog-date">22</div>
                                        <div class="blog-month">Nov</div>
                                    </div>
                                    <div class="post-hover">
                                        <a class="zoom" href="#"><i class="fa-solid
                                                fa-magnifying-glass-plus"></i></a>
                                        <a class="read-link" href="the-standard-lorem.html"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-right col-md-6">
                                <div class="blog-text">
                                    <div class="blog-icon">
                                        <a href="the-standard-lorem.html">
                                            <i class="fa-solid fa-comment-dots"></i>
                                            <span>0 Comments</span>
                                        </a>
                                    </div>
                                    <div class="blog-title">
                                        <a href="the-standard-lorem.html">
                                            <h4>THE STANDARD LOREM</h4>
                                        </a>
                                        <div class="blog-details">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Laudantium, voluptas dicta! Veritatis beatae cum ....
                                        </div>
                                        <div class="blog-btn btn-primary">
                                            <a href="the-standard-lorem.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog-content col-xs-12">
                        <div class="blog-info row d-flex align-items-center">
                            <div class="blog-left col-md-6">
                                <div class="blog-img">
                                    <img src="assets/images/blogs/4.png" alt="">
                                    <div class="blog-day">
                                        <div class="blog-date">22</div>
                                        <div class="blog-month">Nov</div>
                                    </div>
                                    <div class="post-hover">
                                        <a class="zoom" href="#"><i class="fa-solid
                                                fa-magnifying-glass-plus"></i></a>
                                        <a class="read-link" href="it-is-establishe.html"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-right col-md-6">
                                <div class="blog-text">
                                    <div class="blog-icon">
                                        <a href="it-is-established-fact.html">
                                            <i class="fa-solid fa-comment-dots"></i>
                                            <span>0 Comments</span>
                                        </a>
                                    </div>
                                    <div class="blog-title">
                                        <a href="it-is-established-fact.html">
                                            <h4>IT IS ESTABLISHED FACT</h4>
                                        </a>
                                        <div class="blog-details">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Laudantium, voluptas dicta! Veritatis beatae cum ....
                                        </div>
                                        <div class="blog-btn btn-primary">
                                            <a href="it-is-established-fact.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .Blog_Section -->
    <!-- Clint_Section -->
    <div class="client-section wow fadeInUp">
        <div class="container mt">
            <div class="client owl-carousel owl-theme swiper-pager">
                <div class="client-item item">
                    <img class="img-fluid client-img" src="assets/images/manufacturer/1.png" alt="">
                </div>
                <div class="client-item item">
                    <img class="img-fluid client-img" src="assets/images/manufacturer/2.png" alt="">
                </div>
                <div class="client-item item">
                    <img class="img-fluid client-img" src="assets/images/manufacturer/3.png" alt="">
                </div>
                <div class="client-item item">
                    <img class="img-fluid client-img" src="assets/images/manufacturer/4.png" alt="">
                </div>
                <div class="client-item item">
                    <img class="img-fluid client-img" src="assets/images/manufacturer/5.png" alt="">
                </div>
                <div class="client-item item">
                    <img class="img-fluid client-img" src="assets/images/manufacturer/6.png" alt="">
                </div>
                <div class="client-item item">
                    <img class="img-fluid client-img" src="assets/images/manufacturer/7.png" alt="">
                </div>
                <div class="client-item item">
                    <img class="img-fluid client-img" src="assets/images/manufacturer/8.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- .Clint_Section -->

    <!-- Footer_Section -->
    <footer class="bd-footer pt-lg-5 pt-3 mt-5 footer-color">
        <div class="container">
            <div class="row footer-row">
                <div id="contact" class="col-lg-3 mb-lg-3 mb-md-0 mb-sm-0 footer-column">
                    <h4 class="toggled">
                        Contact
                        <span class="toggle-open"><i class="fa fa-chevron-down"></i></span>
                    </h4>
                    <ul class="list-unstyled to-show contact">
                        <li class="map-icon"><i class="fa-solid fa-location-dot"></i>
                            National
                            park,dl 588436,US
                        </li>
                        <li class="phone-icon"><i class="fa-solid fa-phone"></i> +91 123 456
                            789
                        </li>
                        <li class="fax-icon"><i class="fa-solid fa-fax"></i> 0123-456-789</li>
                        <li class="mail-icon"><i class="fas fa-envelope"></i> demo@Yourstore.com </li>
                    </ul>
                </div>
                <div id="information" class="col-lg-3 mb-lg-3 mb-md-0 mb-sm-0 footer-column">
                    <h4 class="toggled">
                        Information
                        <span class="toggle-open"><i class="fa fa-chevron-down"></i></span>
                    </h4>
                    <ul class="list-unstyled text-set to-show information ">
                        <li class=""><a href="terms-conditions.html">Terms & Conditions</a></li>
                        <li class=""><a href="delivery-information.html">Delivery Information</a></li>
                        <li class=""><a href="about.html">About Us</a></li>
                        <li class=""><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li class=""><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
                <div id="extras" class="col-lg-3 mb-lg-3 mb-md-0 mb-sm-0 footer-column">
                    <h4 class="toggled">
                        Extras
                        <span class="toggle-open"><i class="fa fa-chevron-down"></i></span>
                    </h4>
                    <ul class="list-unstyled text-set to-show extras">
                        <li class=""><a href="brand.html">Brands</a></li>
                        <li class=""><a href="gift-certificat.html">Gift Certificates</a></li>
                        <li class=""><a href="login.html">Affiliate</a></li>
                        <li class=""><a href="category.html">Specials</a></li>
                        <li class=""><a href="site-map.html">Site Map</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 footer-column find-us">
                    <div class="position-footer-right">
                        <div class="follow-link">
                            <h4>Find Us On</h4>
                            <div class="media-icon mb-4">
                                <span class="fb"><i class="fab fa-facebook-f"></i></span>
                                <span class="insta"><i class="fab fa-instagram"></i></span>
                                <span class="wh-app"><i class="fab fa-whatsapp"></i></span>
                                <span class="pint"><i class="fab fa-pinterest"></i></span>
                            </div>
                        </div>

                        <div class="payment-link">
                            <h4>Payment</h4>
                            <div class="payment-icon mt-4">
                                <span class="visa"><i class="fab fa-cc-visa"></i></span>
                                <span class="master"><i class="fab fa-cc-mastercard"></i></span>
                                <span class="pay-pal"><i class="fab fa-cc-paypal"></i></span>
                                <span class="discover"><i class="fab fa-cc-discover"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right">
                <span class="last-text">
                    Powered By OpenCart Your Store &#169; 2023
                </span>
            </div>
        </div>
    </footer>
    <a class="scrollToTop back-to-top" href="" data-toggle="tooltip" title="" data-original-title="Top" style="display: block;"><i class="fa fa-angle-up"></i></a>
    <!-- .Footer_Section -->


    <!-- Jquery link  -->
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap Bundle with Popper js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Owlcarousel Js Link -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Jquery Js link -->
    <script src="assets/js/theme.js"></script>
    <!-- Themability Megamenu Js link -->
    <script src="assets/js/themability_megamenu.js"></script>
    <!-- wow javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>new WOW().init();</script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
</body>

</html>