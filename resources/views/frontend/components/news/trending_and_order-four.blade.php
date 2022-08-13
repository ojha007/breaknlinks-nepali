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
                    <h5 class="header-title">{{$categories[4]??'Fourth CateGoryNews'}}</h5>
                </div>
                <div class="bl-news bl-news--twoColumner">
                    <!--repeatable item with condition-->
                    <div class="bl-newsPost bl-newsPost--highlightNews">
                        <figure class="post_img">
                            <a href="#">
                                <img src="{{asset(getFirstItem($order4News)->image??'')}}"
                                     alt="{{getFirstItem($order4News)->title??''}} -- {{config('app.name')}}"/> </a>

                            {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                        </figure>
                        <div class="post_content">
                            <h5 class="post_title"><a href="#">{{getFirstItem($order4News)->title??''}} </a></h5>
                            <p>{{\Illuminate\Support\Str::limit(getFirstItem($order4News)->description??'',255)}}</p>
                            @if(getFirstItem($order4News))
                                <p class="post_source">{{getFirstItem($order4News)->author??''}} {{getFirstItem($order4News)->date_line ? '-' .getFirstItem($order4News)->date_line  :''}}</p>
                            @endif
                        </div>
                    </div>
                    <!--ended repeatable item with condition-->
                    @forelse(skipAndTake($order2News,1,4) as $news)

                        <div class="bl-newsPost bl-newsPost--thumbnail">
                            <figure class="post_img">
                                <a href="#">
                                    <img src="{{asset(($news)->image??'')}}"
                                         alt="{{($news)->title??''}} -- {{config('app.name')}}"/>
                                </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">{{$news->title}}</a></h5>

                                <p class="post_source">{{$news->author??''}} {{$news->date_line ? '-' .$news->date_line  :''}}</p>

                            </div>
                        </div>
                    @empty
                    @endforelse

                </div>
            </div>
        </div>
    </div>
</div>
