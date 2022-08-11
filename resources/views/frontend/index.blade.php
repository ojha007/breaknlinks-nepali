@extends('frontend.layouts.master')
@section('content')

    <!--Hot carousel news-->
    @include('frontend.components.carousel-news')
    <!--ended Hot carousel news-->


    <!--BL Top post news anchor news-->
    @include('frontend.components.news.anchor-news')
    <!--Ended BL Top post news-->


    <!--BL Special news post order 1-->
    @include('frontend.components.news.order-one')
    <!--ended BL Special news post-->


    <!--start general news and links news section-->
    <section class="container">
        <div class="news-row">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-9 col-xl-9 col-xxl-9">
                    <div class="bl-newsHeader">
                        <h5 class="header-title">News</h5>
                    </div>
                    <div class="bl-news bl-news--generalNews">
                        <!--repeatable item with condition-->
                        <div class="bl-newsPost bl-newsPost--highlightNews">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Queen Elizabeth to make first public appearance in 5
                                        months and pay tribute to late husband </a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Varius convallis at ut vitae
                                    enim. Justo nunc diam viverra lectus. Lacus risus, augue libero eget porttitor. A
                                    nibh
                                    diam orci erat curabitur pellentesque. Est viverra lectus blandit faucibus mattis
                                    sed eu
                                    cras vulputate.</p>
                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>
                        <!--ended repeatable item with condition-->

                        <div class="bl-newsPost bl-newsPost--thumbnail">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians
                                        with
                                        anti-...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>

                        <div class="bl-newsPost bl-newsPost--thumbnail">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians
                                        with
                                        anti-...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>

                        <div class="bl-newsPost bl-newsPost--thumbnail">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians
                                        with
                                        anti-...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>

                        <div class="bl-newsPost bl-newsPost--thumbnail">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians
                                        with
                                        anti-...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>

                        <div class="bl-newsPost bl-newsPost--thumbnail">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians
                                        with
                                        anti-...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>

                        <div class="bl-newsPost bl-newsPost--thumbnail">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians
                                        with
                                        anti-...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                    <div class="bl-newsHeader">
                        <h5 class="header-title">Links</h5>
                    </div>
                    <div class="bl-news bl-news--smallThumbs">
                        <!--repeatable items-->
                        <div class="bl-newsPost bl-newsPost--small">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                        Afg...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>
                        <!--ended repeatable items-->
                        <div class="bl-newsPost bl-newsPost--small">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                        Afg...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>
                        <div class="bl-newsPost bl-newsPost--small">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                        Afg...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>
                        <div class="bl-newsPost bl-newsPost--small">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                        Afg...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>
                        <div class="bl-newsPost bl-newsPost--small">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                        Afg...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>
                        <div class="bl-newsPost bl-newsPost--small">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                        Afg...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>
                        <div class="bl-newsPost bl-newsPost--small">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                        Afg...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>
                        <div class="bl-newsPost bl-newsPost--small">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                        Afg...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>
                        <div class="bl-newsPost bl-newsPost--small">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                        Afg...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ended general news and links news section-->

    <!--start trending and brand story news section-->
    <div class="container">
        <div class="news-row">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                    <div class="bl-news bl-news--trending">
                        <div class="post-widgetHeader">
                            <h4>Trending</h4>
                        </div>
                        <div class="post-widgetBody">
                            <div class="trendingNews">
                                <!--repeatable item-->
                                <div class="trendingNews-item">
                                    <h5 class="post_title">
                                        <a href="#">Augue enim sociis felis auctor nulla nunc laoreet volutpat etiam.
                                            Tortor.</a>
                                    </h5>
                                    <span class="post_source">BreaknLinks - Islamabad</span>
                                </div>
                                <!--ended repeatable item-->
                                <div class="trendingNews-item">
                                    <h5 class="post_title">
                                        <a href="#">Augue enim sociis felis auctor nulla nunc laoreet volutpat etiam.
                                            Tortor.</a>
                                    </h5>
                                    <span class="post_source">BreaknLinks - Islamabad</span>
                                </div>
                                <div class="trendingNews-item">
                                    <h5 class="post_title">
                                        <a href="#">Augue enim sociis felis auctor nulla nunc laoreet volutpat etiam.
                                            Tortor.</a>
                                    </h5>
                                    <span class="post_source">BreaknLinks - Islamabad</span>
                                </div>
                                <div class="trendingNews-item">
                                    <h5 class="post_title">
                                        <a href="#">Augue enim sociis felis auctor nulla nunc laoreet volutpat etiam.
                                            Tortor.</a>
                                    </h5>
                                    <span class="post_source">BreaknLinks - Islamabad</span>
                                </div>
                                <div class="trendingNews-item">
                                    <h5 class="post_title">
                                        <a href="#">Augue enim sociis felis auctor nulla nunc laoreet volutpat etiam.
                                            Tortor.</a>
                                    </h5>
                                    <span class="post_source">BreaknLinks - Islamabad</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-9 col-xl-9 col-xxl-9">
                    <div class="bl-newsHeader">
                        <h5 class="header-title">Brand Story</h5>
                    </div>
                    <div class="bl-news bl-news--twoColumner">
                        <!--repeatable item with condition-->
                        <div class="bl-newsPost bl-newsPost--highlightNews">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Queen Elizabeth to make first public appearance in 5
                                        months and pay tribute to late husband </a></h5>
                                <p>Sed lorem duis at facilisis tincidunt. Suspendisse amet lorem pharetra vitae.
                                    Dictumst
                                    venenatis magna felis malesuada lacus natoque auctor pretium. Viverra nisi elementum
                                    vehicula odio sed. Vel, diam urna purus suspendisse orci nullam dignissim pulvinar
                                    posuere. Mattis cum malesuada varius nunc nec pellentesque. Massa feugiat malesuada
                                    dignissim egestas lorem turpis turpis. Et posuere tortor, lacus mi gravida. Maecenas
                                    feugiat orci, pellentesque ac. Non quis cras adipiscing accumsan, pellentesque eu
                                    bibendum magna. Placerat vitae maecenas molestie et lobortis praesent.</p>
                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>
                        <!--ended repeatable item with condition-->

                        <div class="bl-newsPost bl-newsPost--thumbnail">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians
                                        with
                                        anti-...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>

                        <div class="bl-newsPost bl-newsPost--thumbnail">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians
                                        with
                                        anti-...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>

                        <div class="bl-newsPost bl-newsPost--thumbnail">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians
                                        with
                                        anti-...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>

                        <div class="bl-newsPost bl-newsPost--thumbnail">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians
                                        with
                                        anti-...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--ended trending and brand story news section-->


    <!--start economy and analysis news block-->
    <section class="container">
        <div class="news-row">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-9 col-xl-9 col-xxl-9">
                    <div class="bl-newsHeader">
                        <h5 class="header-title">Economy</h5>
                    </div>

                    <div class="bl-news bl-news--twoColumner">
                        <!--repeatable item with condition-->
                        <div class="bl-newsPost bl-newsPost--columnTopNews">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Queen Elizabeth to make first public appearance in 5
                                        months and pay tribute to late husband </a></h5>
                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>
                        <!--ended repeatable item with condition-->

                        <div class="bl-newsPost bl-newsPost--columnTopNews">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Queen Elizabeth to make first public appearance in 5
                                        months and pay tribute to late husband </a></h5>
                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>

                        <div class="bl-newsPost bl-newsPost--thumbnail">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians
                                        with
                                        anti-...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>

                        <div class="bl-newsPost bl-newsPost--thumbnail">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians
                                        with
                                        anti-...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>

                        <div class="bl-newsPost bl-newsPost--thumbnail">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians
                                        with
                                        anti-...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>

                        <div class="bl-newsPost bl-newsPost--thumbnail">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians
                                        with
                                        anti-...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>

                        <div class="bl-newsPost bl-newsPost--thumbnail">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians
                                        with
                                        anti-...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>

                        <div class="bl-newsPost bl-newsPost--thumbnail">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians
                                        with
                                        anti-...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                    <div class="bl-newsHeader">
                        <h5 class="header-title">Analysis</h5>
                    </div>
                    <div class="bl-news bl-news--smallThumbs">
                        <!--repeatable items-->
                        <div class="bl-newsPost bl-newsPost--small">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                        Afg...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>
                        <!--ended repeatable items-->
                        <div class="bl-newsPost bl-newsPost--small">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                        Afg...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>
                        <div class="bl-newsPost bl-newsPost--small">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                        Afg...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>
                        <div class="bl-newsPost bl-newsPost--small">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                        Afg...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>
                        <div class="bl-newsPost bl-newsPost--small">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                        Afg...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>
                        <div class="bl-newsPost bl-newsPost--small">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                        Afg...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>
                        <div class="bl-newsPost bl-newsPost--small">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                        Afg...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ended economy and analysis news block-->

    <!--start Entertainment and Blog news block-->
    <section class="container">
        <div class="news-row">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-9 col-xl-9 col-xxl-9">
                    <div class="bl-newsHeader">
                        <h5 class="header-title">Entertainment</h5>
                    </div>

                    <div class="bl-news bl-news--twoColumner">
                        <!--repeatable item with condition-->
                        <div class="bl-newsPost bl-newsPost--highlightNews">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Queen Elizabeth to make first public appearance in 5
                                        months and pay tribute to late husband </a></h5>
                                <p>Sed lorem duis at facilisis tincidunt. Suspendisse amet lorem pharetra vitae.
                                    Dictumst
                                    venenatis magna felis malesuada lacus natoque auctor pretium. Viverra nisi elementum
                                    vehicula odio sed. Vel, diam urna purus suspendisse orci nullam dignissim pulvinar
                                    posuere. Mattis cum malesuada varius nunc nec pellentesque. Massa feugiat malesuada
                                    dignissim egestas lorem turpis turpis. Et posuere tortor, lacus mi gravida. Maecenas
                                    feugiat orci, pellentesque ac. Non quis cras adipiscing accumsan, pellentesque eu
                                    bibendum magna. Placerat vitae maecenas molestie et lobortis praesent.</p>
                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>
                        <!--ended repeatable item with condition-->


                        <div class="bl-newsPost bl-newsPost--thumbnail">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians
                                        with
                                        anti-...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>

                        <div class="bl-newsPost bl-newsPost--thumbnail">
                            <figure class="post_img"><a href="#"><img
                                        src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians
                                        with
                                        anti-...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>

                        <div class="bl-newsPost bl-newsPost--thumbnail">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians
                                        with
                                        anti-...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>

                        <div class="bl-newsPost bl-newsPost--thumbnail">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians
                                        with
                                        anti-...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                    <div class="bl-newsHeader">
                        <h5 class="header-title">Blog</h5>
                    </div>
                    <div class="bl-news bl-news--smallThumbs">
                        <!--repeatable items-->
                        <div class="bl-newsPost bl-newsPost--small">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                        Afg...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>
                        <!--ended repeatable items-->
                        <div class="bl-newsPost bl-newsPost--small">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                        Afg...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>
                        <div class="bl-newsPost bl-newsPost--small">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                        Afg...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>
                        <div class="bl-newsPost bl-newsPost--small">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                        Afg...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>
                        <div class="bl-newsPost bl-newsPost--small">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                        Afg...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ended Entertainment and Blog news block-->

    <!--start Video News block-->
    <section class="container">
        <div class="news-row">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="bl-newsHeader">
                        <h5 class="header-title">Video News</h5>
                    </div>

                    <div class="bl-news bl-news--videoNews">
                        <!--repeatable item with condition-->
                        <div class="bl-newsPost bl-newsPost--topVideo">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Queen Elizabeth to make first public appearance in 5
                                        months and pay tribute to late husband </a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>
                        <!--ended repeatable item with condition-->


                        <div class="bl-newsPost bl-newsPost--videoThumbnail">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians
                                        with
                                        anti-...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>

                        <div class="bl-newsPost bl-newsPost--videoThumbnail">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians
                                        with
                                        anti-...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>

                        <div class="bl-newsPost bl-newsPost--videoThumbnail">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians
                                        with
                                        anti-...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>

                        <div class="bl-newsPost bl-newsPost--videoThumbnail">
                            <figure class="post_img">
                                <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians
                                        with
                                        anti-...</a></h5>

                                <p class="post_source">BreaknLinks - Islamabad</p>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--ended Video News block-->


@endsection

<!--script loading-->

