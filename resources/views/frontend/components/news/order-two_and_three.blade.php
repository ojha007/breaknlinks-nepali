<section class="container">
    <div class="news-row">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-9 col-xl-9 col-xxl-9">
                <div class="bl-newsHeader">
                    <h5 class="header-title">{{$categories[2]??'Second CateGoryNews'}}</h5>
                </div>
                <div class="bl-news bl-news--generalNews">
                    <!--repeatable item with condition-->
                    <div class="bl-newsPost bl-newsPost--highlightNews">
                        <figure class="post_img">
                            <a href="#">
                                <img src="{{asset(getFirstItem($order2News)->image??'')}}"
                                     alt="{{getFirstItem($order2News)->title??''}} -- {{config('app.name')}}"/>
                            </a>

                            {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                        </figure>
                        <div class="post_content">
                            <h5 class="post_title"><a href="#">{{getFirstItem($order2News)->title??''}} </a></h5>
                            <p>{{\Illuminate\Support\Str::limit(getFirstItem($order2News)->description??'')}}</p>
                            @if(getFirstItem($order2News))
                            <p class="post_source">{{getFirstItem($order2News)->author??''}} {{getFirstItem($order2News)->date_line ? '-' .getFirstItem($order2News)->date_line  :''}}</p>
                            @endif
                        </div>
                    </div>

                    <!--ended repeatable item with condition-->
                    @forelse(skipAndTake($order2News,1,6) as $news)
                        <div class="bl-newsPost bl-newsPost--thumbnail">
                            <figure class="post_img">
                                <a href="#">
                                    <img src="{{asset(($news)->image??'')}}"
                                         alt="{{($news)->title??''}} -- {{config('app.name')}}"/> </a>
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">{{$news->title??''}}</a></h5>

                                <p class="post_source">{{$news->author??''}} {{$news->date_line ? '-' .$news->date_line  :''}}</p>

                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                <div class="bl-newsHeader">
                    <h5 class="header-title">{{$categories[3]??'Third CateGoryNews'}}</h5>
                </div>
                @forelse($order3News->take(9) as $news)
                    <div class="bl-news bl-news--smallThumbs">
                        <!--repeatable items-->
                        <div class="bl-newsPost bl-newsPost--small">
                            <figure class="post_img">
                                <a href="#">
                                    <img src="{{asset(($news)->image??'')}}"
                                         alt="{{($news)->title??''}} -- {{config('app.name')}}"/>
                                </a>                            </a>

                                {{--                            <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title"><a href="#">{{$news->title??''}}</a></h5>


                                <p class="post_source">{{$news->author??''}} {{$news->date_line ? '-' .$news->date_line  :''}}</p>

                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
</section>
