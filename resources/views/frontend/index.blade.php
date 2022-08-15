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
    @include('frontend.components.news.order-two_and_three')
    <!--ended general news and links news section-->

    <!--start trending and brand story news section-->
    @include('frontend.components.news.trending_and_order-four')

    <!--ended trending and brand story news section-->

    <!--start economy and analysis news block-->
    @include('frontend.components.news.order-five_and_six')
    <!--ended economy and analysis news block-->

    <!--start Entertainment and Blog news block-->
    @include('frontend.components.news.order-seven_and_eight')
    <!--ended Entertainment and Blog news block-->

    <!--start Video News block-->
    @include('frontend.components.news.videos')
    <!--ended Video News block-->

@endsection

<!--script loading-->

