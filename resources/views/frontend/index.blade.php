<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>::BL News</title>
    <link rel="stylesheet" href="{{asset('frontend/bootstrap/css/bootstrap.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('frontend/fontawesome/css/all.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('frontend/owlcarousel/css/owl.carousel.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('frontend/owlcarousel/css/owl.theme.default.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('frontend/css/language-switcher.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('frontend/css/bl-masterlayout.css')}}" type="text/css"/>
</head>
<body>
<!--header start-->
<header class="header">
    <section class="header-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 d-flex align-items-center justify-content-end">
                    <ul class="social-link">
                        <li class="list-item ttu">Follow Us</li>
                        <li class="list-item"><a href="#"><i class="fab fa-facebook-square"></i> </a></li>
                        <li class="list-item"><a href="#"><i class="fab fa-twitter-square"></i> </a></li>
                        <li class="list-item"><a href="#"><i class="fab fa-instagram"></i> </a></li>
                        <li class="list-item"><a href="#"><i class="fab fa-youtube-square"></i> </a></li>
                    </ul>

                    <!--                    <span class="news-lang">-->
                    <!--                        <a href="#"><span class="lang-flag"><img src="assets/images/UK-Flag.png"/></span> <span class="lang-text">English</span> </a>-->
                    <!--                    </span>-->

                    <div class="news-lang">
                        <div class="language-picker js-language-picker" data-trigger-class="btn btn--subtle">
                            <form action="" class="language-picker__form">
                                <label for="language-picker-select">Select your language</label>
                                <select name="language-picker-select" id="language-picker-select">
                                    <option lang="de" value="deutsch">Deutsch</option>
                                    <option lang="en" value="english" selected>English</option>
                                    <option lang="fr" value="francais">Français</option>
                                    <option lang="it" value="italiano">Italiano</option>
                                    <option lang="np" value="nepali">Nepali</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="adv-widebanner">
                    <img src="{{asset('frontend/images/xplus.png')}}"/>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar--primary">
        <div class="container align-items-start">
            <div class="navbar-brand">
                <a href="#" class="brand-logo"><img src="{{asset('frontend/images/bl-logo.png')}}"/> </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#primaryNavContent" aria-controls="primaryNavContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="primaryNavContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#"><i
                                class="fas fa-house-chimney"></i> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">BL Special</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Science and Tech</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Travel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Economy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Break</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Entertainment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Focus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">South Asia</a>
                    </li>
                </ul>
                <!--                <form class="d-flex" role="search">-->
                <!--                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
                <!--                    <button class="btn btn-outline-success" type="submit">Search</button>-->
                <!--                </form>-->

            </div>
            <div class="expand-search-box">
                <input type="text" class="expand-search-input" placeholder="Start Looking For Something!">
                <a class="expand-search-btn" href="#">
                    <i class="fas fa-search"></i>
                </a>
            </div>


        </div>
    </nav>
</header>
<!--header ended-->

<!--hot carousel news-->
<section class="container-fluid">
    <div class="row">
        <div class="bl-news bl-news--hotScrolling">
            <div class="owl-carousel owl-theme" id="bl-hotScrolling">
                <!--repeatable items-->
                <div class="item">
                    <div class="bl-newsPost bl-newsPost--small">
                        <figure class="post_img">
                            <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/>
                            </a>
                        </figure>
                        <div class="post_content">
                            <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                    Afg...</a></h5>
                            <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do...</p>
                            <p class="post_source">BreaknLinks - Islamabad</p>
                        </div>
                    </div>
                </div>
                <!--ended repeatable items-->
                <div class="item">
                    <div class="bl-newsPost bl-newsPost--small">
                        <figure class="post_img">
                            <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-1.jpg')}}"/>
                            </a>
                        </figure>
                        <div class="post_content">
                            <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                    Afg...</a></h5>
                            <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do...</p>
                            <p class="post_source">BreaknLinks - Islamabad</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="bl-newsPost bl-newsPost--small">
                        <figure class="post_img">
                            <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-5.jpg')}}"/> </a>
                        </figure>
                        <div class="post_content">
                            <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                    Afg...</a></h5>
                            <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do...</p>
                            <p class="post_source">BreaknLinks - Islamabad</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="bl-newsPost bl-newsPost--small">
                        <figure class="post_img">
                            <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-9.webp')}}"/> </a>
                        </figure>
                        <div class="post_content">
                            <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                    Afg...</a></h5>
                            <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do...</p>
                            <p class="post_source">BreaknLinks - Islamabad</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="bl-newsPost bl-newsPost--small">
                        <figure class="post_img">
                            <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-2.webp')}}"/> </a>
                        </figure>
                        <div class="post_content">
                            <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                    Afg...</a></h5>
                            <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do...</p>
                            <p class="post_source">BreaknLinks - Islamabad</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="bl-newsPost bl-newsPost--small">
                        <figure class="post_img">
                            <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-3.jpg')}}"/> </a>
                        </figure>
                        <div class="post_content">
                            <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                    Afg...</a></h5>
                            <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do...</p>
                            <p class="post_source">BreaknLinks - Islamabad</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="bl-newsPost bl-newsPost--small">
                        <figure class="post_img">
                            <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-4.jpg')}}"/> </a>
                        </figure>
                        <div class="post_content">
                            <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                    Afg...</a></h5>
                            <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do...</p>
                            <p class="post_source">BreaknLinks - Islamabad</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="bl-newsPost bl-newsPost--small">
                        <figure class="post_img">
                            <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-6.webp')}}"/> </a>
                        </figure>
                        <div class="post_content">
                            <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                    Afg...</a></h5>
                            <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do...</p>
                            <p class="post_source">BreaknLinks - Islamabad</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="bl-newsPost bl-newsPost--small">
                        <figure class="post_img">
                            <a href="#"><img src="{{asset('frontned/images/newsImages/bl-news-img-7.jpg')}}"/> </a>
                        </figure>
                        <div class="post_content">
                            <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                    Afg...</a></h5>
                            <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do...</p>
                            <p class="post_source">BreaknLinks - Islamabad</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="bl-newsPost bl-newsPost--small">
                        <figure class="post_img">
                            <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-8.jpg')}}"/> </a>
                        </figure>
                        <div class="post_content">
                            <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                    Afg...</a></h5>
                            <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do...</p>
                            <p class="post_source">BreaknLinks - Islamabad</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="bl-newsPost bl-newsPost--small">
                        <figure class="post_img">
                            <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-9.webp')}}"/> </a>
                        </figure>
                        <div class="post_content">
                            <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                    Afg...</a></h5>
                            <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do...</p>
                            <p class="post_source">BreaknLinks - Islamabad</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="bl-newsPost bl-newsPost--small">
                        <figure class="post_img">
                            <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-10.webp')}}"/> </a>
                        </figure>
                        <div class="post_content">
                            <h5 class="post_title"><a href="#">Pakistan Foreign Minister visits China to discuss
                                    Afg...</a></h5>
                            <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do...</p>
                            <p class="post_source">BreaknLinks - Islamabad</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--ended hot carousel news-->

<!--BL Top post news-->
<section class="container">
    <div class="row">
        <section class="news-row">
            <div class="bl-newsHeader">
                <h5 class="header-title">Anchor</h5>
            </div>
            <div class="bl-news bl-news--mainPost">
                <!--repeatable items with condition-->
                <div class="bl-newsPost bl-newsPost--topStory">
                    <figure class="post_img">
                        <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                        {{--                        <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                    </figure>
                    <div class="post_content">
                        <h5 class="post_title"><a href="#">Queen Elizabeth to make first public appearance in 5 months
                                and pay tribute to late husband </a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Varius convallis at ut vitae enim.
                            Justo nunc diam viverra lectus. Lacus risus, augue libero eget porttitor. A nibh diam orci
                            erat curabitur pellentesque. Est viverra lectus blandit faucibus mattis sed eu cras
                            vulputate.
                            Dictum mattis aliquet nulla adipiscing dictum condimentum. Id in tortor sit tellus amet arcu
                            ullamcorper semper. Mattis arcu, vulputate facilisis nunc, nunc iaculis sit. Ante pretium
                            malesuada risus vitae, eu. Nascetur at sagittis, massa fames cras vel vulputate. Ullamcorper
                            duis bibendum nulla non. Vehicula arcu massa ipsum in facilisis.</p>
                        <p class="post_source">BreaknLinks - Islamabad</p>
                    </div>
                </div>
                <!--ended repeatable items-->

                <div class="bl-newsPost bl-newsPost--thumbnail">
                    <figure class="post_img">
                        <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                        {{--                        <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                    </figure>
                    <div class="post_content">
                        <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians with
                                anti-...</a></h5>
                        <p>"You are doing everything possible to convince our people to abandon the Rus...</p>
                        <p class="post_source">BreaknLinks - Islamabad</p>
                    </div>
                </div>

                <div class="bl-newsPost bl-newsPost--thumbnail">
                    <figure class="post_img">
                        <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                        {{--                        <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                    </figure>
                    <div class="post_content">
                        <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians with
                                anti-...</a></h5>
                        <p>"You are doing everything possible to convince our people to abandon the Rus...</p>
                        <p class="post_source">BreaknLinks - Islamabad</p>
                    </div>
                </div>

                <div class="bl-newsPost bl-newsPost--thumbnail">
                    <figure class="post_img">
                        <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                        {{--                        <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                    </figure>
                    <div class="post_content">
                        <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians with
                                anti-...</a></h5>
                        <p>"You are doing everything possible to convince our people to abandon the Rus...</p>
                        <p class="post_source">BreaknLinks - Islamabad</p>
                    </div>
                </div>

                <div class="bl-newsPost bl-newsPost--thumbnail">
                    <figure class="post_img">
                        <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>

                        {{--                        <a href="#"><img src="assets/images/newsImages/bl-news-img-11.png"/> </a>--}}
                    </figure>
                    <div class="post_content">
                        <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians with
                                anti-...</a></h5>
                        <p>"You are doing everything possible to convince our people to abandon the Rus...</p>
                        <p class="post_source">BreaknLinks - Islamabad</p>
                    </div>
                </div>

            </div>
        </section>
    </div>
</section>
<!--ended BL Top post news-->

<!--BL Special news post-->

<section class="container blSpecial-container">
    <div class="row">
        <div class="news-row">
            <div class="bl-newsHeader">
                <h5 class="header-title">Anchor</h5>
            </div>
            <div class="bl-news bl-news--blSpecial">
                <!--start repeatable items-->
                <div class="bl-newsPost bl-newsPost--thumbnail">
                    <figure class="post_img">
                        <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>
                    </figure>
                    <div class="post_content">
                        <h5 class="post_title"><a href="#">Mattis nulla facilisis dui habitasse sollicitudin.</a></h5>
                        <p class="post_source">BreaknLinks - Islamabad</p>
                    </div>
                </div>
                <!--ended repeatable items-->
                <div class="bl-newsPost bl-newsPost--thumbnail">
                    <figure class="post_img">
                        <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>
                    </figure>
                    <div class="post_content">
                        <h5 class="post_title"><a href="#">Diam porttitor posuere iaculis rhoncus id.</a></h5>
                        <p class="post_source">BreaknLinks - Islamabad</p>
                    </div>
                </div>
                <div class="bl-newsPost bl-newsPost--thumbnail">
                    <figure class="post_img">
                        <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>
                    </figure>
                    <div class="post_content">
                        <h5 class="post_title"><a href="#">Sit neque sed at interdum at dapibus orci.</a></h5>
                        <p class="post_source">BreaknLinks - Islamabad</p>
                    </div>
                </div>
                <div class="bl-newsPost bl-newsPost--thumbnail">
                    <figure class="post_img">
                        <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>
                    </figure>
                    <div class="post_content">
                        <h5 class="post_title"><a href="#">Nibh augue tempus eget nec pellentesque sit orci.</a></h5>
                        <p class="post_source">BreaknLinks - Islamabad</p>
                    </div>
                </div>
                <div class="bl-newsPost bl-newsPost--thumbnail">
                    <figure class="post_img">
                        <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>
                    </figure>
                    <div class="post_content">
                        <h5 class="post_title"><a href="#">Ipsum quis velit fringilla donec sed placerat mi.</a></h5>
                        <p class="post_source">BreaknLinks - Islamabad</p>
                    </div>
                </div>
                <div class="bl-newsPost bl-newsPost--thumbnail">
                    <figure class="post_img">
                        <a href="#"><img src="{{asset('frontend/images/newsImages/bl-news-img-11.png')}}"/> </a>
                    </figure>
                    <div class="post_content">
                        <h5 class="post_title"><a href="#">Venenatis at sed ultricies purus quam donec diam.</a></h5>
                        <p class="post_source">BreaknLinks - Islamabad</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
                                enim. Justo nunc diam viverra lectus. Lacus risus, augue libero eget porttitor. A nibh
                                diam orci erat curabitur pellentesque. Est viverra lectus blandit faucibus mattis sed eu
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
                            <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians with
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
                            <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians with
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
                            <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians with
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
                            <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians with
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
                            <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians with
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
                            <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians with
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
                            <p>Sed lorem duis at facilisis tincidunt. Suspendisse amet lorem pharetra vitae. Dictumst
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
                            <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians with
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
                            <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians with
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
                            <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians with
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
                            <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians with
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
                            <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians with
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
                            <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians with
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
                            <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians with
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
                            <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians with
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
                            <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians with
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
                            <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians with
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
                            <p>Sed lorem duis at facilisis tincidunt. Suspendisse amet lorem pharetra vitae. Dictumst
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
                            <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians with
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
                            <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians with
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
                            <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians with
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
                            <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians with
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
                            <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians with
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
                            <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians with
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
                            <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians with
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
                            <h5 class="post_title"><a href="#">Zelenskyy claims that Russia is infusing Ukrainians with
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


<!--script loading-->
<script type="text/javascript" src="{{asset('frontend/js/jquery-3.6.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/bootstrap/js/bootstrap.bundle.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/library/language-switcher.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/owlcarousel/js/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/library/loadScript.js')}}"></script>


<!--ended script loading-->
</body>
</html>
