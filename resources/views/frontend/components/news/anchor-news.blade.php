{{--order one news--}}
<section class="container">
    <div class="row">
        <section class="news-row">
            <div class="bl-newsHeader">
                <h5 class="header-title">Anchor</h5>
            </div>
            <div class="bl-news bl-news--mainPost">
                <!--repeatable items with condition-->
                @foreach($anchorNews as $key=>$news)
                    @if($key ==1)
                        <div class="bl-newsPost bl-newsPost--topStory">
                            <figure class="post_img">
                                <a href="#">
                                    <img src="{{asset($news->image)}}" alt="{{$news->title}} -- {{config('app.name')}}"/>
                                </a>
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title">
                                    <a href="#">{{$news->title}}</a></h5>
                                <p>{{$news->sub_description}}</p>
                                <p class="post_source">{{$news->author}} {{$news->date_line ? '-' .$news->date_line  :''}}</p>
                            </div>
                        </div>
                        <!--ended repeatable items-->
                    @else
                        <div class="bl-newsPost bl-newsPost--thumbnail">
                            <figure class="post_img">
                                <img src="{{asset($news->image)}}" alt="{{$news->title}} -- {{config('app.name')}}"/>
                            </figure>
                            <div class="post_content">
                                <h5 class="post_title">
                                    <a href="#"{{$news->title}}</a>
                                </h5>
                                <p>{{$news->sub_description}}</p>
                                <p class="post_source">{{$news->author}} {{$news->date_line ? '-' .$news->date_line  :''}}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>
    </div>
</section>
