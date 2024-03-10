@include('front.inc.header')
<section class="checkout-banner-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="checkout-banner-wrap-main">
                    <div class="checkout-banner-wrap-breadcrums">
                        <ul>
                            <li>
                                <a href="#!">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <span>Our Blogs</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="checkout-banner-wrap-heading">
                        <h6>Our Blogs</h6>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</section>

<section class="blog-first-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 order-1 order-xxl-0">
                <div class="blog-first-wrap-side1">
                    <div class="blog-first-wrap-feild">
                        <div class="blog-first-wrap-feild-icon">
                            <img src="assets/front/images/search.png" alt="">
                        </div>
                        <input type="text" placeholder="Search Your Favourite Products">
                    </div>
                </div>
                <div class="blog-first-wrap-side1-mediaicon">
                    <ul>
                        <li>
                            <a href="#!">
                                <div class="facebook-main">
                                    <div class="facebook-icon">
                                        <img src="assets/front/images/facebook.png" alt="">
                                    </div>
                                    <div class="facebook-text">
                                        <h6>Facebook</h6>
                                    </div>
                                    <div class="facebook-follow">
                                        <h6>Follow</h6>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <div class="instagram-main">
                                    <div class="instagram-icon">
                                        <img src="assets/front/images/instagram.png" alt="">
                                    </div>
                                    <div class="instagram-text">
                                        <h6>Instagram</h6>
                                    </div>
                                    <div class="instagram-follow">
                                        <h6>Follow</h6>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <div class="twitter-main">
                                    <div class="twitter-icon">
                                        <img src="assets/front/images/twitter.png" alt="">
                                    </div>
                                    <div class="twitter-text">
                                        <h6>Twitter</h6>
                                    </div>
                                    <div class="twitter-follow">
                                        <h6>Follow</h6>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <div class="pinterest-main">
                                    <div class="pinterest-icon">
                                        <img src="assets/front/images/pinterest.png" alt="">
                                    </div>
                                    <div class="pinterest-text">
                                        <h6>Pinterest</h6>
                                    </div>
                                    <div class="pinterest-follow">
                                        <h6>Follow</h6>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="blog-first-wrap-side1-posttext">
                    <h6>Popular Posts</h6>
                    <div class="blog-first-wrap-side1-posttext-flex">
                        <div class="blog-first-wrap-side1-posttext-img">
                            <img src="assets/front/images/blogpost01.png" alt="">
                        </div>
                        <div class="blog-first-wrap-side1-posttext-h">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text </p>
                        </div>
                    </div>
                    <div class="blog-first-wrap-side1-posttext-flex">
                        <div class="blog-first-wrap-side1-posttext-img">
                            <img src="assets/front/images/blogpost01.png" alt="">
                        </div>
                        <div class="blog-first-wrap-side1-posttext-h">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text </p>
                        </div>
                    </div>
                    <div class="blog-first-wrap-side1-posttext-flex">
                        <div class="blog-first-wrap-side1-posttext-img">
                            <img src="assets/front/images/blogpost01.png" alt="">
                        </div>
                        <div class="blog-first-wrap-side1-posttext-h">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8 order-0 order-xxl-1">
                <div class="row">
                    @if(count($blog)!=0)
                    @foreach($blog as $blogs)
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6 mb-3">
                        <a href="#!">
                            <div class="index-fifteen-blog"><a href="#!">
                                <div class="index-fifteen-blog-img">
                                    <img src="{{asset('storage/blogs/'.$blogs->blog_thumb)}}" alt="" class="img-fluid">
                                </div>
                                </a><div class="index-fifteen-blog-text"><a href="#!">
                                    <h6>Dummy Text</h6>
                                    <h5>{{$blogs->blog_title}}</h5>
                                    <p>{!! \Illuminate\Support\Str::words($blogs->blog_content, 10,'....')  !!}                                    </p>
                                    </a><div class="index-fifteen-blog-flex"><a href="#!">
                                        <div class="index-fifteen-blog-span">
                                            <span>{{ \Carbon\Carbon::parse($blogs->created_at)->format('D-m-Y') }}</span>
                                        </div>
                                        </a><div class="index-fifteen-blogcta-flex"><a href="#!">
                                            </a><ul><a href="#!">
                                                </a><li><a href="#!">
                                                    </a><a href="#!">
                                                        <img src="{{asset('front/assets/images/thumb_up_alt.png')}}" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#!">
                                                        <img src="{{asset('front/assets/images/mode_comment.png')}}" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#!">
                                                        <img src="{{asset('front/assets/images/share.png')}}" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>    
                    </div>
                    @endforeach
                    @else
                    <p>NO Blog</p>
                    @endif
                    @if(count($blog)>=8)

                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="pagination-blog">
                            <ul>
                                <li>
                                   {{$blog->links()}}
                                </li>

                              
                            </ul>
                        </div>
                    </div>  
                    @endif

                </div>
            </div>
        </div>
    </div>
</section>

@include('front.inc.footer')
