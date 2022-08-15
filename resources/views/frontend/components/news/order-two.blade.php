<div class="bl-newsHeader">
    <h5 class="header-title">{{$categories[2]??'Second CateGoryNews'}}</h5>
</div>
<div class="bl-news bl-news--generalNews">
    @foreach($order2News as $key=> $news)
        @if($key ==0)
            <div class="bl-newsPost bl-newsPost--highlightNews">
                <figure class="post_img">
                    <a href="#">
                        <img src="{{asset(($news)->image??'')}}"
                             alt="{{($news)->title??''}} -- {{config('app.name')}}"/>
                    </a>
                </figure>
                <div class="post_content">
                    <h5 class="post_title"><a href="#">{{$news->title}} </a></h5>
                    <p>{{\Illuminate\Support\Str::limit($news->description)}}</p>
                    <p class="post_source">{{$news->author??''}} {{$news->date_line ? '-' .$news->date_line  :''}}</p>
                </div>
            </div>
        @else
            <div class="bl-newsPost bl-newsPost--thumbnail">
                <figure class="post_img">
                    <a href="#">
                        <img src="{{asset(($news)->image??'')}}"
                             alt="{{($news)->title}} -- {{config('app.name')}}"/> </a>
                </figure>
                <div class="post_content">
                    <h5 class="post_title"><a href="#">{{$news->title}}</a></h5>
                    <p class="post_source">{{$news->author}} {{$news->date_line ? '-' .$news->date_line  :''}}</p>
                </div>
            </div>
        @endif
    @endforeach
</div>
