<section class="container blSpecial-container">
    <div class="row">
        <div class="news-row">
            <div class="bl-newsHeader">
                <h5 class="header-title">{{$categories[1]??'First Order Category News'}}</h5>
            </div>
            <div class="bl-news bl-news--blSpecial">
                @foreach($order1News as $news)
                    <div class="bl-newsPost bl-newsPost--thumbnail">
                        <figure class="post_img">
                            <a href="#">
                                <img src="{{asset($news->image)}}" alt="{{$news->title}} -- {{config('app.name')}}"/>
                            </a>
                        </figure>
                        <div class="post_content">
                            <h5 class="post_title">
                                <a href="#"{{$news->title}}</a>
                            </h5>
                            <p class="post_source">{{$news->author??''}} {{$news->date_line ? '-' .$news->date_line  :''}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
