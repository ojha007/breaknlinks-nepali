<div class="bl-newsHeader">
    <h5 class="header-title">{{$categories[5]??'Fifth CateGoryNews'}}</h5>
</div>

<div class="bl-news bl-news--twoColumner">
    <!--repeatable item with condition-->
    @foreach($order5News as $key=> $news)

        @if($key < 2)
            <div class="bl-newsPost bl-newsPost--columnTopNews">
                <figure class="post_img">
                    <a href="#">
                        <img src="{{asset($news->image??'')}}"
                             alt="{{$news->title??''}} -- {{config('app.name')}}"/>
                    </a>
                </figure>
                <div class="post_content">
                    <h5 class="post_title"><a href="#">{{$news->title}} </a></h5>
                    <p class="post_source">{{$news->author??''}} {{$news->date_line ? '-' .$news->date_line  :''}}</p>

                </div>
            </div>
        @else
            <div class="bl-newsPost bl-newsPost--thumbnail">
                <figure class="post_img">
                    <a href="#">
                        <img src="{{asset($news->image??'')}}"
                             alt="{{$news->title??''}} -- {{config('app.name')}}"/>
                    </a>
                </figure>
                <div class="post_content">
                    <h5 class="post_title"><a href="#">{{$news->title}}</a></h5>
                    <p class="post_source">{{$news->author??''}} {{$news->date_line ? '-' .$news->date_line  :''}}</p>
                </div>
            </div>
        @endif
    @endforeach
</div>
