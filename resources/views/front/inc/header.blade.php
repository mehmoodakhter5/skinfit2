
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if(isset($title))
    <title>{{$title}} - TheSkinFit</title>
    @else
    <title>TheSkinFit</title>

    @endif
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('front/assets/images/TheSkinFit-Icon.webp')}}">
    <link rel="preload" href="{{asset('front/assets/css/bootstrap.min.css')}}"   as="style"  onload="this.onload=null;this.rel='stylesheet'" />
    <noscript><link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}"></noscript>
    <link rel="stylesheet"  href="{{asset('front/assets/css/owl.carousel.css')}}" />
    <link rel="stylesheet"  href="{{asset('front/assets/css/owl.theme.default.css')}}"  />
    <link rel="stylesheet"  href="//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"  />
    <link rel="stylesheet"   href="{{asset('front/assets/css/all.css')}}"  />
    <link rel="stylesheet"  href="{{asset('front/assets/css/aos.css')}}"  />
    <link rel="stylesheet"   href="{{asset('front/assets/css/main.css')}}"  />
    <link rel="stylesheet"  href="{{asset('front/assets/css/responsive.css')}}" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('front/assets/css/share-buttons.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css">
    @livewireStyles
</head>
<body>
            @if($agent->isDesktop())

<div class="fade_wrap"></div>
    <header class="header-main-wrapper">
        <div class="header-main-wrap-top">
            <a href="#!"><img src="{{asset('front/assets/images/top-header-banner.jpg')}}" alt="" class="img-fluid"></a>
        </div>
        <div class="header-main-wrap-middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxxl-3">
                        <div class="header-logo">
                            <a href="{{url('')}}"><img src="{{asset('front/assets/images/logo.png')}}" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxxl-5">
                      <livewire:search>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxxl-4">
                        <div class="header-desktop-flex">
                            <div class="header-user-desktop">
                                <a href="{{url('signin')}}"><img src="{{asset('front/assets/images/cart.png')}}" loading="lazy" alt=""></a>
                            </div>
                            <div class="header-bag-desktop">
                                <a href="{{url('my-cart')}}"><img src="{{asset('front/assets/images/bag.png')}}" alt="" loading="lazy">    <livewire:counter lazy="on-load"  />                                 </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-main-wrap">
            <div class="header-main-wrap-end">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="header-desktop-navbar-flex">
                                <div class="header-desktop-navbar">
                                    <ul>
                                        <li>
                                            <a href="#!" class="nav_item_1">
                                                Brands
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </a>
                                           
                                        </li>
                                        @foreach($category as $cat)
                                        <li>
                                            <a href="{{url($cat->category_slug)}}" class="nav_item_2 {{$cat->category_id}}" id='{{$cat->category_id}}'>
                                                {{$cat->category_name}}
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </a>
                                             <div class="megamenu-dropdown-desktop {{$cat->category_id}}" id="cat_panel_1">
                                                <div class="megamenu-dropdown-desktop-main">
                                                    <div class="megamenu-dropdown-flex1">
                                                        <ul class='subcategordata'>
                                                        @foreach($sub_category as $subcategory)
                                                        @if($subcategory->category_id==$cat->category_id)
                                                            <li>
                                                                <a href="{{url($cat->category_slug.'/'.$subcategory->sub_category_slug)}}">{{$subcategory->sub_category_name}}</a>
                                                                <ul class="subcategordata1">


                                                                    <li>
                                                                  @foreach($sub_category_lvl_2 as $lvl2)
                                                                    @if($subcategory->sub_category_id==$lvl2->sub_category_id)
                                                                        <a href="#!">
                                                                            {{$lvl2->sub_category_level_2_name}}
                                                                        </a>
                                                                          @endif
                                                                @endforeach
                                                                    </li>
                                                               
                                                                </ul>   
                                                            </li>
                                                        @endif
                                                        @endforeach
                                                        </ul>
                                                    </div>
                                                    
                                                    <div class="megamenu-dropdown-flex2">
                                                        
                                                        <div class="megamenu-dropdown-2">
                                                            <img src="{{asset('front/assets/images/dropdown1.png')}}" alt="dropdown">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                            
                                        <li>
                                            <a href="#!" class="nav_item_2">
                                                Discounts
                                                <i class="fa-solid fa-chevron-down"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-desktop-navbar-track-btn">
                                    <a href="{{url('track-your-order')}}">Track Your Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="megamenu-dropdown-desktop1" id="cat_panel_2">
                <div class="megamenu-dropdown-desktop1-main">
                    <div class="megamenu-dropdown-desktop1-text">
                        <ul>
                            <li>
                                Our featured Brands
                            </li>
                            <li>
                                K-Beauty Brands
                            </li>
                            <li>
                                Most Searched Brands
                            </li>
                        </ul>
                    </div>
                    <div class="our-brands-first-wrap-bar">
                        <ul>
                            <li>
                                <a href="#!">A</a>
                            </li>
                            <li>
                                <a href="#!">B</a>
                            </li>
                            <li>
                                <a href="#!">C</a>
                            </li>
                            <li>
                                <a href="#!">D</a>
                            </li>
                            <li>
                                <a href="#!">E</a>
                            </li>
                            <li>
                                <a href="#!">F</a>
                            </li>
                            <li>
                                <a href="#!">G</a>
                            </li>
                            <li>
                                <a href="#!">H</a>
                            </li>
                            <li>
                                <a href="#!">I</a>
                            </li>
                            <li>
                                <a href="#!">J</a>
                            </li>
                            <li>
                                <a href="#!">K</a>
                            </li>
                            <li>
                                <a href="#!">L</a>
                            </li>
                            <li>
                                <a href="#!">M</a>
                            </li>
                            <li>
                                <a href="#!">N</a>
                            </li>
                            <li>
                                <a href="#!">O</a>
                            </li>
                            <li>
                                <a href="#!">P</a>
                            </li>
                            <li>
                                <a href="#!">Q</a>
                            </li>
                            <li>
                                <a href="#!">R</a>
                            </li>
                            <li>
                                <a href="#!">S</a>
                            </li>
                            <li>
                                <a href="#!">T</a>
                            </li>
                            <li>
                                <a href="#!">W</a>
                            </li>
                            <li>
                                <a href="#!">X</a>
                            </li>
                            <li>
                                <a href="#!">Y</a>
                            </li>
                            <li>
                                <a href="#!">Z</a>
                            </li>
                        </ul>
                    </div>
                    <div class="our-brands-second-wrap-flex">
                        <div class="our-brands-second-wrap2">
                            <ul>
                                @foreach($brand as $brands)
                                <li><a href="{{url('brand/'.$brands->brand_slug)}}" wire:navigate>{{$brands->brand_name}}</a></li>
                               @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if($agent->isPhone())
         <div class="header-main-wrap-addcart">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="header-main-wrap-addcart-logo">
                        <img src="{{asset('front/assets/images/logo.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="header-main-wrap-addcart-text">
                        <h6>Add <span>Rs 5000</span> to cart and get free shipping!</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="header-main-wrap-addcart-img">
                        <img src="assets/front/images/cartbar.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="checkout-first-wrap-details">
                        <div class="checkout3-first-wrap-table-flex checkout3-desktop">
                            <div class="checkout3-th-flex">
                                <div class="checkout3-th checkout3-th1">
                                    <span>PRODUCT</span>
                                </div>
                                <div class="checkout3-th checkout3-th2">
                                    <span>PRICE</span>
                                </div>
                                <div class="checkout3-th checkout3-th3">
                                    <span>QUANTITY</span>
                                </div>
                                <div class="checkout3-th checkout3-th4">
                                    <span>SUBTOTAL</span>
                                </div>
                                <div class="checkout3-th checkout3-th5">
                                    <span>REMOVE</span>
                                </div>
                            </div>
                            <div class="checkout3-th1-flex">
                                <div class="checkout3-thh1">
                                    <img src="assets/front/images/product-cart.jpg" alt="">
                                    <span>Ogx Shampoo Strength & Length+ Keratin Oil 13oz</span>
                                </div>
                                <div class="checkout3-thh2">
                                    <span>Rs 3,000</span>
                                </div>
                                <div class="checkout3-thh3">
                                    <div class="date-time">
                                        <div id="field1">
                                            <button type="button" id="sub" class="minus">-</button>
                                            <input type="number" id="1" value="1" min="1" class="quantity" max="10">
                                            <button type="button" id="add" class="plus">+</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout3-thh4">
                                    <span>Rs 3,000</span>
                                </div>
                                <div class="checkout3-thh5">
                                    <img src="assets/front/images/cross.png" alt="">
                                </div>
                            </div>
                            <div class="checkout3-th2-flex">
                                <div class="checkout3-th2-main">
                                    <div class="checkout3-th2-input">
                                        <input type="text" placeholder="Coupon Code">
                                    </div>
                                    <div class="checkout3-th2-btn">
                                        <a href="#!">Apply Coupon</a>
                                    </div>
                                </div>
                                <div class="checkout3-th2-remove">
                                    <a href="#!">Remove All</a>   
                                </div>
                            </div>
                        </div>
                        <div class="checkout3-first-wrap-table-flex checkout3-mobile">
                            <div class="checkout3-th-flex">
                                <div class="checkout3-th checkout3-th1">
                                    <span>PRODUCT</span>
                                </div>
                                <div class="checkout3-th checkout3-th3">
                                    <span>QUANTITY</span>
                                </div>
                            </div>
                            @foreach(\Cart::getContent() as $cart)
                            <div class="checkout3-thh1">
                                <div class="checkout3-thh1-img-main">
                                    <div class="checkout3-thh1-img">
                                        <img src="https://imagedelivery.net/V8gK1_2VVoan1sk2mbDlgA/{{$cart['attributes']['image']}}/public" alt="">
                                    </div>
                                    <a href="{{url('clear/'.$cart->id)}}">
                                    <div class="checkout3-thh1-cross">
                                        <img src="{{asset('front/assets/images/cross.png')}}" alt="">
                                    </div>
                                    </a>
                                </div>
                                <span>{{$cart->name}}</span>
                                <form action="{{url('update-cart')}}" method="post">
                                    @csrf
                                <div class="checkout3-thh3">
                                    <div class="date-time">
                                        <div id="field1">
                                            <button type="button" id="sub" class="minus">-</button>
                                            <input type="number" name='qty[]' id="1" value="{{$cart->quantity}}" min="1" id='cartupdate' class="quantity">
                                            <input type="hidden" name='cart_id[]' value="{{$cart->id}}" class="quantity">

                                            <button type="button" id="add" class="plus">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="checkout3-th2-flex">
                                <div class="checkout3-th2-main">
                                    <div class="checkout3-th2-input">
                                        <input type="text" placeholder="Coupon Code">
                                    </div>
                                    <div class="checkout3-th2-btn">
                                        <a href="#!">Apply Coupon</a>
                                    </div>
                                </div>
                                <div class="checkout3-th2-remove">
                                    <a href="{{url('clear')}}">Remove All</a>   
                                </div>
                                <div class="checkout3-th2-submit">
                                    <button type='submit'>Update Cart</button>   
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="checkout-first-wrap-slip">
                        <div class="checkout-first-wrap-slip-th">
                            <h6>CART TOTALS</h6>
                        </div>
                        <div class="checkout-first-wrap-slip-total">
                            <ul>    
                                <li>
                                    Subtotal
                                    <h5>Rs.{{\Cart::getSubTotal()}}</h5>
                                </li>
                                <li>
                                    Shipping Charges
                                    <span>Rs.150</span>
                                </li>
                                <li>
                                    Total
                                    <span>Rs.{{\Cart::getTotal()}}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="checkout-first-wrap-bankdetail">
                            <div class="checkout-first-wrap-bankdetail-btn checkout3-first-wrap-bankdetail-btn">
                                <a href="#!">Proceed to Checkout</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main-wrap-mobile-top">
            <img src="{{asset('front/assets/images/top-bar-mobile 1.png')}}" alt="" class="img-fluid">
        </div>
        <div class="header-main-wrap-mobile-top1">
            <h6>Free delivery on order Rs.6000</h6>
        </div>
        <div class="header-main-wrap-mobile-top2">
            <div class="header-wrap-mobile-top2-flex">
                <div class="header-wrap-mobile-top2-bar" id="menu_toggle_btn">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <div class="header-wrap-mobile-logo">
                    <a href="#!"><img src="{{asset('front/assets/images/mobile-logo1.png')}}" alt=""></a>
                </div>
            </div>
            <div class="header-wrap-mobile-top2-flex1">
                <a href="{{url('signin')}}">
                <div class="header-wrap-user">
                    <img src="{{asset('front/assets/images/profile.png')}}" alt="">
                </div>
                </a>
                <div class="header-wrap-search">
                    <img src="{{asset('front/assets/images/search1.png')}}" alt="">
                </div>
                <div class="header-wrap-bag">
                    <img src="{{asset('front/assets/images/bag.png')}}" alt="">
                    <div class="header-wrap-bag-01">
                        <span><livewire:counter lazy="on-load"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main-mobile">
            <div class="header-main-mobile-screen-1 mobile-sub-menu">
                <div class="close_btn">
                    <img src="{{asset('front/assets/images/menu_cross.png')}}" alt="img">
                </div>
                <div class="header-mt-btn">
                    <div class="header-mt-btn1">
                        <a href="#!">Track Order</a>
                    </div>
                    <div class="header-mt-btn2">
                        <a href="#!">Track Order</a>
                    </div>
                </div>
                <div class="header-mt-logo">
                    <img src="{{asset('front/assets/images/logo.png')}}" alt="">
                </div>
                <div class="header-mt-1">
                    <ul>
                        <li>
                            <a href="#!"  class="main_cat_item_2">
                                Brands
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="main_cat_item">
                                Categories
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="header-mt-2">
                    <div class="header-mt-2-text">
                        <h6>Popular Categories</h6>
                    </div>
                    <div class="header-mt-pro-flex">
                        <ul>
                            @for ($i = 0; $i < min(6, count($category)); $i++)
                            <li>
                                <a href="{{url($category[$i]->category_slug)}}">
                                    <img src="assets/front/images/pro-mo1.png" alt="">
                                    <h6>{{$category[$i]->category_name}}</h6>
                                </a>
                            </li>
                            
                            @endfor
                        </ul>
                    </div>
                    <div class="header-mt-2-paragraph">
                        <p>Highlighted: New Arrivals Added</p>
                    </div>
                </div>
                <div class="header-mm-2">
                    <div class="header-mm-2-text">
                        <h6>Popular Deals</h6>
                    </div>
                    <div class="header-mm-2-flex">
                        <div class="header1-mm-main">
                            <div class="header1-mm-2">
                                <h6>All Under Rs</h6>
                                <h5>999</h5>
                            </div>
                            <div class="header1-mmb">
                                <h6>Under 999</h6>
                            </div>
                        </div>
                        <div class="header1-mm-main">
                            <div class="header1-mm-2">
                                <h6>All Under Rs</h6>
                                <h5>1999</h5>
                            </div>
                            <div class="header1-mmb">
                                <h6>Under 1999</h6>
                            </div>
                        </div>
                        <div class="header1-mm-main">
                            <div class="header1-mm-2">
                                <img src="{{asset('front/assets/images/discount-code.png')}}" alt="">
                            </div>
                            <div class="header1-mmb">
                                <h6>Discounts</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-mm-3">
                    <div class="header-mm-3-text">
                        <h6>Have you seen our top selling K-Beauty Products ?</h6>
                    </div>
                    <div class="header-mm-3-img">
                        <img src="{{asset('front/assets/images/menu-img.png')}}" alt="">
                    </div>
                </div>
                <div class="header-mm-4">
                    <h6>
                        <img src="{{asset('front/assets/images/Frame 142.png')}}" alt="">
                        Wishlist
                    </h6>
                </div>
                <div class="header-mm-5">
                    <div class="header-mm-5-text">
                        <h6>Follow Us</h6>
                    </div>
                    <div class="header-mm-5-social-icon">
                        <ul>
                            <li>
                                <a href="#!">
                                    <img src="{{asset('front/assets/images/tiktok-m.png')}}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <img src="assets/front/images/facebook-m.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <img src="assets/front/images/twitter-m.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <img src="assets/front/images/instagram-m.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <img src="assets/front/images/youtube-m.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <img src="assets/front/images/pinterest-m.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header-main-mobile-screen-2 mobile-sub-menu">
                <div class="close_btn">
                    <img src="{{asset('front/assets/images/menu_cross.png')}}" alt="img">
                </div>
                <div class="header-mt-btn">
                    <div class="header-mt-btn1">
                        <a href="{{url('track-your-order')}}">Track Order</a>
                    </div>
                    <div class="header-mt-btn2">
                        <a href="{{url('track-your-order')}}">Track Order</a>
                    </div>
                </div>
                <div class="header-mt-logo">
                    <img src="assets/front/images/logo.png" alt="">
                </div>
                <div class="header-backlink1">
                    <ul>
                        <li>
                            <a href="#!" class="">
                                <i class="fa-solid fa-chevron-left"></i>
                                Brands
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="header-backlink2">
                    <ul>
                        @foreach($brand as $brands)
                        <li>
                            <a href="{{url('brand/'.$brands->brand_slug)}}" wire:navigate>
                                <div class="header-backlink2-img">
                                    <img src="assets/front/images/makeup01.png" alt="">
                                    <span>{{$brands->brand_name}}</span>
                                </div>
                                <div class="header-backlink2-img-text">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </a>
                        </li>
                     @endforeach
                    </ul>
                </div>
                <div class="header-mm-5">
                    <div class="header-mm-5-text">
                        <h6>Follow Us</h6>
                    </div>
                    <div class="header-mm-5-social-icon">
                        <ul>
                            <li>
                                <a href="#!">
                                    <img src="assets/front/images/tiktok-m.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <img src="assets/front/images/facebook-m.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <img src="assets/front/images/twitter-m.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <img src="assets/front/images/instagram-m.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <img src="assets/front/images/youtube-m.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <img src="assets/front/images/pinterest-m.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header-main-mobile-screen-3 mobile-sub-menu">
                <div class="close_btn">
                    <img src="{{asset('front/assets/images/menu_cross.png')}}" alt="img">
                </div>
                <div class="header-mt-btn">
                    <div class="header-mt-btn1">
                        <a href="#!">Track Order</a>
                    </div>
                    <div class="header-mt-btn2">
                        <a href="#!">Track Order</a>
                    </div>
                </div>
                <div class="header-mt-logo">
                    <img src="assets/front/images/logo.png" alt="">
                </div>
                <div class="header-backlink1">
                    <ul>
                        <li>
                            <a href="#!" class="main_cat_item_2">
                                <i class="fa-solid fa-chevron-left"></i>
                                Categories
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="main_cat_item_2">
                                <i class="fa-solid fa-chevron-left"></i>
                                Makeup
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="header-backlink2">
                    <ul>
                        @foreach($category as $categories)
                        <li>
                            <a href="#!" class="main_cat_item_4">
                                <div class="header-backlink2-img">
                                    <span>{{$categories->category_name}}</span>
                                </div>
                                <div class="header-backlink2-img-text">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="header-mm-5">
                    <div class="header-mm-5-text">
                        <h6>Follow Us</h6>
                    </div>
                    <div class="header-mm-5-social-icon">
                        <ul>
                            <li>
                                <a href="#!">
                                    <img src="assets/front/images/tiktok-m.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <img src="assets/front/images/facebook-m.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <img src="assets/front/images/twitter-m.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <img src="assets/front/images/instagram-m.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <img src="assets/front/images/youtube-m.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <img src="assets/front/images/pinterest-m.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header-main-mobile-screen-4 mobile-sub-menu">
                <div class="close_btn">
                    <img src="{{asset('front/assets/images/menu_cross.png')}}" alt="img">
                </div>
                <div class="header-mt-btn">
                    <div class="header-mt-btn1">
                        <a href="#!">Track Order</a>
                    </div>
                    <div class="header-mt-btn2">
                        <a href="#!">Track Order</a>
                    </div>
                </div>
                <div class="header-mt-logo">
                    <img src="assets/front/images/logo.png" alt="">
                </div>
                <div class="header-backlink1">
                    <ul>
                        <li>
                            <a href="#!" class="main_cat_item_2">
                                <i class="fa-solid fa-chevron-left"></i>
                                Categories
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="main_cat_item_2">
                                <i class="fa-solid fa-chevron-left"></i>
                                Makeup
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="main_cat_item_2">
                                <i class="fa-solid fa-chevron-left"></i>
                                Eyes  
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="header-backlink2">
                    <ul>
                        <li>
                            <a href="#!" class="main_cat_item_5">
                                <div class="header-backlink2-img">
                                    <span>Eyeliner</span>
                                </div>
                                <div class="header-backlink2-img-text">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="main_cat_item_5">
                                <div class="header-backlink2-img">
                                    <span>Mascara</span>
                                </div>
                                <div class="header-backlink2-img-text">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="main_cat_item_5">
                                <div class="header-backlink2-img">
                                    <span>Concealer</span>
                                </div>
                                <div class="header-backlink2-img-text">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="main_cat_item_5">
                                <div class="header-backlink2-img">
                                    <span>Eye Pencil</span>
                                </div>
                                <div class="header-backlink2-img-text">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="main_cat_item_5">
                                <div class="header-backlink2-img">
                                    <span>Eye Primer</span>
                                </div>
                                <div class="header-backlink2-img-text">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="main_cat_item_5">
                                <div class="header-backlink2-img">
                                    <span>Eyeshadow</span>
                                </div>
                                <div class="header-backlink2-img-text">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="main_cat_item_5">
                                <div class="header-backlink2-img">
                                    <span>Eye Makeup Remover</span>
                                </div>
                                <div class="header-backlink2-img-text">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="header-mm-5">
                    <div class="header-mm-5-text">
                        <h6>Follow Us</h6>
                    </div>
                    <div class="header-mm-5-social-icon">
                        <ul>
                            <li>
                                <a href="#!">
                                    <img src="assets/front/images/tiktok-m.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <img src="assets/front/images/facebook-m.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <img src="assets/front/images/twitter-m.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <img src="assets/front/images/instagram-m.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <img src="assets/front/images/youtube-m.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <img src="assets/front/images/pinterest-m.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main-search-suggestion">
                 <div class="close_btn">
                    <img src="{{asset('front/assets/images/menu_cross.png')}}" alt="img">
                </div>
            <div class="header-mt-btn">
                <div class="header-mt-btn1">
                    <a href="#!">Track Order</a>
                </div>
                <div class="header-mt-btn2">
                    <a href="#!">Track Order</a>
                </div>
            </div>
            <div class="header-mt-logo">
                <img src="assets/front/images/logo.png" alt="">
            </div>
            <div class="header-suggestion-search">
                <div class="suggestion-search-feild">
                    <input type="text" placeholder="Search Your Favorite Products">
                </div>
            </div>
            <div class="header-search-suggestion-text">
                <h6>Trending Searches</h6>
            </div>
            <div class="header-search-suggestion-link">
                <ul>
                    <li>
                        <a href="#!">
                            <img src="assets/front/images/trend.png" alt="">
                            <span>THE ORDINARY Niacinamide</span>
                        </a>
                    </li>
                    <li>
                        <a href="#!">
                            <img src="assets/front/images/trend.png" alt="">
                            <span>Aztec Secret Indian</span>
                        </a>
                    </li>
                    <li>
                        <a href="#!">
                            <img src="assets/front/images/trend.png" alt="">
                            <span>Laneige Lip Sleeping</span>
                        </a>
                    </li>
                    <li>
                        <a href="#!">
                            <img src="assets/front/images/trend.png" alt="">
                            <span>Soap & Glory</span>
                        </a>
                    </li>
                    <li>
                        <a href="#!">
                            <img src="assets/front/images/trend.png" alt="">
                            <span>CeraVe Foaming Cleanser</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header-main-search-suggestion-after">
            <div class="close_btn">
                <img src="{{asset('front/assets/images/menu_cross.png')}}" alt="img">
            </div>
            <div class="suggestion-search-feild1">
                <input type="" placeholder="Search Your Favorite Products" />
            </div>
        </div>
        @endif
         
    </header>
