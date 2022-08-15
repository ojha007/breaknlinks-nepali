<div class="bl-newsHeader">
    <h5 class="header-title">{{$categories[3]??'Third CateGoryNews'}}</h5>
</div>
@foreach($order3News as $news)
    <div class="bl-news bl-news--smallThumbs">
        <!--repeatable items-->
        <div class="bl-newsPost bl-newsPost--small">
            <figure class="post_img">
                <a href="#">
                    <img src="{{asset(($news)->image??'')}}"
                         alt="{{($news)->title}} -- {{config('app.name')}}"/>
                </a>
            </figure>
            <div class="post_content">
                <h5 class="post_title"><a href="#">{{$news->title}}</a></h5>
                <p class="post_source">{{$news->author??''}} {{$news->date_line ? '-' .$news->date_line  :''}}</p>

            </div>
        </div>
    </div>
@endforeach
