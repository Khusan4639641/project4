@extends("org.org")
@section('content')
<header id="header">
    <!-- Swiper -->
    <div class="swiper-container header_slider position-relative">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url({{ URL::to('/') }}/images/bg.jpg);">
                <div class="container position-relative h-100	">
                    <div class="header_slide_text text-white">
                        <h2>Treadmill GF-5090 M</h2>
                        <p>Around-the-world trip remains the world’s greatest <br> journey. For two out o people.
                        </p>
                    </div> <!-- header_slide_text -->
                </div> <!-- container -->

                <div class="container position-relative">
                    <div class="header_slider_controls d-flex align-items-center pl-4">


                    </div> <!-- header_slider_controls -->
                </div> <!-- container -->

            </div> <!-- swiper-slide -->
            <div class="swiper-slide" style="background-image: url({{ URL::to('/') }}/images/bg2.jpg);">
                <div class="container position-relative h-100	">
                    <div class="header_slide_text text-white">
                        <h2>Другое название товара</h2>
                        <p>Описание другого товара название которого является <br> то что наверху.</p>
                    </div> <!-- header_slide_text -->
                </div> <!-- container -->

                <div class="container position-relative">
                    <div class="header_slider_controls d-flex align-items-center pl-4">


                    </div> <!-- header_slider_controls -->
                </div> <!-- container -->
            </div>
            <div class="swiper-slide" style="background-image: url({{ URL::to('/') }}/images/bg.jpg);">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>
            <div class="swiper-slide">Slide 5</div>
            <div class="swiper-slide">Slide 6</div>



        </div> <!-- swiper-wrapper -->
        <!-- Add Arrows -->

        <div class="slideneckline"></div> <!-- slideneckline -->
        <div class="container position-relative">
            <div class="header_slider_btns">
                <div class="swiper-button-prev1 slider_btn prevbtn_img mr-2">
                    <i class="fa fa-long-arrow-alt-right"></i>
                </div> <!-- swiper-button-prev1 -->

                <div class="swiper-button-next1 slider_btn ml-1">
                    <i class="fa fa-long-arrow-alt-right"></i>

                </div>

            </div> <!-- header_slider_btns -->

        </div> <!-- container -->



    </div> <!-- swiper_container -->

    <div class="container position-relative">
        <div class="header_slider_banners">
            <div class="swiper-container header_slider_banner mb-3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#" class="header_slider_banner_img"
                           style="background: url({{ URL::to('/') }}/images/header_banner.png);"></a>
                    </div> <!-- swiper-slide -->
                    <div class="swiper-slide">
                        <a href="#" class="header_slider_banner_img"
                           style="background: url({{ URL::to('/') }}/images/header_banner2.png);"></a>
                    </div> <!-- swiper-slide -->
                </div> <!-- swiper-wrapper -->
                <!-- Add Pagination -->
                <div class="swiper-pagination header_slider_banner_pagination"></div>
            </div> <!-- header_slider_banner -->

            <div class="swiper-container header_slider_banner2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#" class="header_slider_banner_img"
                           style="background: url({{ URL::to('/') }}/images/header_banner2.png);"></a>
                    </div> <!-- swiper-slide -->
                    <div class="swiper-slide">
                        <a href="#" class="header_slider_banner_img"
                           style="background: url({{ URL::to('/') }}/images/header_banner.png);"></a>
                    </div> <!-- swiper-slide -->
                </div> <!-- swiper-wrapper -->
                <!-- Add Pagination -->
                <div class="swiper-pagination header_slider_banner_pagination2"></div>
            </div> <!-- header_slider_banner -->


        </div> <!-- header_slider_banners -->
    </div> <!-- container -->
</header>
@if(isset($success))
    <div class="row" style="position:fixed;top:150px;z-index:1;right:0px;">
        <div class="alert alert-success" id="div">
            {{ $success }}
            <button type="button" class="btn btn-tool" onclick="removeDiv()" data-card-widget="remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <script>
            setTimeout(function(){ document.getElementById('div').style.display='none'; }, 3000);
            function removeDiv(){
                document.getElementById('div').style.display='none';
            }
            localStorage.clear();
            setTimeout(function(){ window.location.href = "https://7market.uz/"; }, 3000);
        </script>
    </div>
@endif
@if(!(isset($coteg) && !empty($coteg)))
    @if(!(isset($search) && !empty($search)))
        <section class="section1">

            <div class="container">
                <div class="section_title mb-4 pb-3">
                    <h2>{{ $local['blog_sport'] }}</h2>
                    <div class="slider_btns d-flex">
                        <div class="slider_btn prevbtn_img mr-3 swiper-button-prev2">
                            <svg width="8" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.99951 6.41599L0.793094 10.6224C0.294229 11.1213 0.294229 11.9301 0.793094 12.429C1.29196 12.9278 2.10078 12.9278 2.59964 12.429L7.70934 7.31926C8.2082 6.82039 8.2082 6.01158 7.70934 5.51271L2.59964 0.403018C2.10078 -0.0958471 1.29196 -0.0958471 0.793094 0.403018C0.294229 0.901883 0.294229 1.7107 0.793094 2.20957L4.99951 6.41599Z" fill="black"/>
                            </svg>

                        </div> <!-- slider_btn  СПОРТИВНЫЙ ИНВЕНТАРЬ -->
                        <div class="slider_btn  swiper-button-next2">
                            <svg width="8"  viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.99951 6.41599L0.793094 10.6224C0.294229 11.1213 0.294229 11.9301 0.793094 12.429C1.29196 12.9278 2.10078 12.9278 2.59964 12.429L7.70934 7.31926C8.2082 6.82039 8.2082 6.01158 7.70934 5.51271L2.59964 0.403018C2.10078 -0.0958471 1.29196 -0.0958471 0.793094 0.403018C0.294229 0.901883 0.294229 1.7107 0.793094 2.20957L4.99951 6.41599Z" fill="black"/>
                            </svg>

                        </div> <!-- slider_btn -->
                    </div> <!-- slider_btns -->
                </div> <!-- section_title -->

                <!-- Swiper -->
                <div class="swiper-container goods_swiper goods_slider">
                    <div class="swiper-wrapper">
                        @foreach($result1 as $val)
                            <div class="swiper-slide">
                                <div class="mycard" >
                                    <a href="{{ URL::to('/') }}/{{ $lang }}/view_product/{{ $val->id }}" class="mycard_img" style="background-image: url({{ URL::to('/') }}/media/{{ $val->img_url }});" id="prod_img_{{ $val->id }}"></a> <!-- mycard_img -->
                                    <div class="mycard_body">
                                        <a href="{{ URL::to('/') }}/{{ $lang }}/view_product/{{ $val->id }}" class="mycard_title" title="Treadmill GF-5030 asd dsadasd as M." id="prod_name_{{ $val->id }}" >{{ $val->name }}.</a>
                                        <h3 id="prod_price_{{ $val->id }}">{{ $val->price }} {{ $val->kurs }}</h3>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <img  src="{{ asset('image/stars.png')}}" class="img-width stars_rating_img" alt="">
                                                <span class="stars_rating_span ml-2">5.0</span>
                                            </div> <!-- d-flex -->
                                            <div class="mycard_btns d-flex">
                                                <a  class="mr-2 mycard_btn">
                                                    <img src="{{ asset('image/favourites.svg')}}" alt="">
                                                </a> <!-- mycard_btn -->
                                                <a onclick='add_to_card({{ $val->id }})' class="mycard_btn maincolor_bg add_to_card">
                                                    <img src="{{ asset('image/cart.svg')}}" alt="">
                                                </a> <!-- mycard_btn -->
                                            </div> <!-- mycard_btns -->
                                        </div> <!-- d-flex -->
                                    </div> <!-- mycard_body -->
                                </div> <!-- mycard -->

                            </div> <!-- swiper-slide -->
                        @endforeach




                    </div> <!-- swiper-wrapepr -->
                </div> <!-- swiper-container -->


            </div> <!-- container -->

        </section> <!-- section1 -->

        <section class="section2">

            <div class="container">
                <div class="section_title mb-4 pb-3">
                    <h2 class="text-white" style='text-transform: uppercase;'>{{ $local['blog_moto'] }}</h2>
                    <div class="slider_btns d-flex">
                        <div class="slider_btn prevbtn_img mr-3 swiper-button-prev3">
                            <svg width="8" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.99951 6.41599L0.793094 10.6224C0.294229 11.1213 0.294229 11.9301 0.793094 12.429C1.29196 12.9278 2.10078 12.9278 2.59964 12.429L7.70934 7.31926C8.2082 6.82039 8.2082 6.01158 7.70934 5.51271L2.59964 0.403018C2.10078 -0.0958471 1.29196 -0.0958471 0.793094 0.403018C0.294229 0.901883 0.294229 1.7107 0.793094 2.20957L4.99951 6.41599Z" fill="black"/>
                            </svg>

                        </div> <!-- slider_btn -->
                        <div class="slider_btn  swiper-button-next3">
                            <svg width="8"  viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.99951 6.41599L0.793094 10.6224C0.294229 11.1213 0.294229 11.9301 0.793094 12.429C1.29196 12.9278 2.10078 12.9278 2.59964 12.429L7.70934 7.31926C8.2082 6.82039 8.2082 6.01158 7.70934 5.51271L2.59964 0.403018C2.10078 -0.0958471 1.29196 -0.0958471 0.793094 0.403018C0.294229 0.901883 0.294229 1.7107 0.793094 2.20957L4.99951 6.41599Z" fill="black"/>
                            </svg>

                        </div> <!-- slider_btn -->
                    </div> <!-- slider_btns -->
                </div> <!-- section_title -->

                <!-- Swiper -->
                <div class="swiper-container goods_swiper2 goods_slider">
                    <div class="swiper-wrapper">
                        @foreach($result2 as $val)
                            <div class="swiper-slide">

                                <div class="mycard" >
                                    <a href="{{ URL::to('/') }}/{{ $lang }}/view_product/{{ $val->id }}" class="mycard_img" style="background-image: url({{ URL::to('/') }}/media/{{ $val->img_url }});" id="prod_img_{{ $val->id }}" ></a> <!-- mycard_img -->

                                    <div class="mycard_body">
                                        <a href="{{ URL::to('/') }}/{{ $lang }}/view_product/{{ $val->id }}" class="mycard_title" title="Treadmill GF-5030 asd dsadasd as M." id="prod_name_{{ $val->id }}">{{ $val->name }}.</a>
                                        <h3 id="prod_price_{{ $val->id }}">{{ $val->price }} {{ $val->kurs }}</h3>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('image/stars.png')}}" class="img-width stars_rating_img" alt=""/>
                                                <span class="stars_rating_span ml-2">5.0</span>
                                            </div> <!-- d-flex -->
                                            <div class="mycard_btns d-flex">
                                                <a  class="mr-2 mycard_btn">
                                                    <img src="{{ asset('image/favourites.svg')}}" alt="">
                                                </a> <!-- mycard_btn -->
                                                <a  onclick='add_to_card({{ $val->id }})' class="mycard_btn maincolor_bg add_to_card">
                                                    <img src="{{ asset('image/cart.svg')}}" alt="">
                                                </a> <!-- mycard_btn -->
                                            </div> <!-- mycard_btns -->
                                        </div> <!-- d-flex -->
                                    </div> <!-- mycard_body -->
                                </div> <!-- mycard -->

                            </div> <!-- swiper-slide -->
                        @endforeach

                    </div> <!-- swiper-wrapepr -->
                </div> <!-- swiper-container -->


            </div> <!-- container -->

        </section> <!-- section2 -->

        <section class="section3">

            <div class="container">
                <div class="section_title mb-4 pb-3">
                    <h2 class="">{{ $local['blog_other'] }} </h2>
                    <div class="slider_btns d-flex">
                        <div class="slider_btn prevbtn_img mr-3 swiper-button-prev4">
                            <svg width="8" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.99951 6.41599L0.793094 10.6224C0.294229 11.1213 0.294229 11.9301 0.793094 12.429C1.29196 12.9278 2.10078 12.9278 2.59964 12.429L7.70934 7.31926C8.2082 6.82039 8.2082 6.01158 7.70934 5.51271L2.59964 0.403018C2.10078 -0.0958471 1.29196 -0.0958471 0.793094 0.403018C0.294229 0.901883 0.294229 1.7107 0.793094 2.20957L4.99951 6.41599Z" fill="black"/>
                            </svg>

                        </div> <!-- slider_btn -->
                        <div class="slider_btn  swiper-button-next4">
                            <svg width="8"  viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.99951 6.41599L0.793094 10.6224C0.294229 11.1213 0.294229 11.9301 0.793094 12.429C1.29196 12.9278 2.10078 12.9278 2.59964 12.429L7.70934 7.31926C8.2082 6.82039 8.2082 6.01158 7.70934 5.51271L2.59964 0.403018C2.10078 -0.0958471 1.29196 -0.0958471 0.793094 0.403018C0.294229 0.901883 0.294229 1.7107 0.793094 2.20957L4.99951 6.41599Z" fill="black"/>
                            </svg>

                        </div> <!-- slider_btn -->
                    </div> <!-- slider_btns -->
                </div> <!-- section_title -->

                <!-- Swiper -->
                <div class="swiper-container goods_swiper3 goods_slider">
                    <div class="swiper-wrapper">
                        @foreach($result3 as $val)
                            <div class="swiper-slide">

                                <div class="mycard" >
                                    <a href="{{ URL::to('/') }}/{{ $lang }}/view_product/{{ $val->id }}" class="mycard_img" style="background-image: url(media/{{ $val->img_url }});" id="prod_img_{{ $val->id }}"></a> <!-- mycard_img -->

                                    <div class="mycard_body">
                                        <a href="{{ URL::to('/') }}/{{ $lang }}/view_product/{{ $val->id }}" class="mycard_title" title="Treadmill GF-5030 asd dsadasd as M." id="prod_name_{{ $val->id }}">{{ $val->name }}.</a>
                                        <h3 id="prod_price_{{ $val->id }}">{{ $val->price }} {{ $val->kurs }}</h3>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('image/stars.png')}}" class="img-width stars_rating_img" alt="">
                                                <span class="stars_rating_span ml-2">5.0</span>
                                            </div> <!-- d-flex -->
                                            <div class="mycard_btns d-flex">
                                                <a class="mr-2 mycard_btn">
                                                    <img src="{{ asset('image/favourites.svg')}}" alt="">
                                                </a> <!-- mycard_btn -->
                                                <a  onclick='add_to_card({{ $val->id }})' class="mycard_btn maincolor_bg add_to_card">
                                                    <img src="{{ asset('image/cart.svg')}}" alt="">
                                                </a> <!-- mycard_btn -->
                                            </div> <!-- mycard_btns -->
                                        </div> <!-- d-flex -->
                                    </div> <!-- mycard_body -->
                                </div> <!-- mycard -->

                            </div> <!-- swiper-slide -->
                        @endforeach




                    </div> <!-- swiper-wrapepr -->
                </div> <!-- swiper-container -->


            </div> <!-- container -->

        </section> <!-- section3 -->
    @else
        <section class="section3">

            <div class="container">
                <div class="section_title mb-4 pb-3">
                    @if(count($search)!=0)
                        <h2 class="">{{ $local['blog_find'] }} </h2>
                    @else
                            <h3>Товар не найден</h3>
                    @endif
                    <div class="slider_btns d-flex">
                        <div class="slider_btn prevbtn_img mr-3 swiper-button-prev4">
                            <svg width="8" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.99951 6.41599L0.793094 10.6224C0.294229 11.1213 0.294229 11.9301 0.793094 12.429C1.29196 12.9278 2.10078 12.9278 2.59964 12.429L7.70934 7.31926C8.2082 6.82039 8.2082 6.01158 7.70934 5.51271L2.59964 0.403018C2.10078 -0.0958471 1.29196 -0.0958471 0.793094 0.403018C0.294229 0.901883 0.294229 1.7107 0.793094 2.20957L4.99951 6.41599Z" fill="black"/>
                            </svg>

                        </div> <!-- slider_btn -->
                        <div class="slider_btn  swiper-button-next4">
                            <svg width="8"  viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.99951 6.41599L0.793094 10.6224C0.294229 11.1213 0.294229 11.9301 0.793094 12.429C1.29196 12.9278 2.10078 12.9278 2.59964 12.429L7.70934 7.31926C8.2082 6.82039 8.2082 6.01158 7.70934 5.51271L2.59964 0.403018C2.10078 -0.0958471 1.29196 -0.0958471 0.793094 0.403018C0.294229 0.901883 0.294229 1.7107 0.793094 2.20957L4.99951 6.41599Z" fill="black"/>
                            </svg>

                        </div> <!-- slider_btn -->
                    </div> <!-- slider_btns -->
                </div> <!-- section_title -->

                <!-- Swiper -->
                <div class="swiper-container goods_swiper3 goods_slider">
                    <div class="swiper-wrapper">
                        @if(count($search)!=0)
                        @foreach($search as $val)
                            <div class="swiper-slide">

                                <div class="mycard" >
                                    <a href="{{ URL::to('/') }}/{{ $lang }}/view_product/{{ $val->id }}" class="mycard_img" style="background-image: url({{ URL::to('/') }}/media/{{ $val->img_url }});" id="prod_img_{{ $val->id }}"></a> <!-- mycard_img -->

                                    <div class="mycard_body">
                                        <a href="{{ URL::to('/') }}/{{ $lang }}/view_product/{{ $val->id }}" class="mycard_title" title="Treadmill GF-5030 asd dsadasd as M." id="prod_name_{{ $val->id }}">{{ $val->name }}.</a>
                                        <h3 id="prod_price_{{ $val->id }}">{{ $val->price }} {{ $val->kurs }}</h3>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('image/stars.png')}}" class="img-width stars_rating_img" alt="">
                                                <span class="stars_rating_span ml-2">5.0</span>
                                            </div> <!-- d-flex -->
                                            <div class="mycard_btns d-flex">
                                                <a class="mr-2 mycard_btn">
                                                    <img src="{{ asset('image/favourites.svg')}}" alt="">
                                                </a> <!-- mycard_btn -->
                                                <a  onclick='add_to_card({{ $val->id }})' class="mycard_btn maincolor_bg add_to_card">
                                                    <img src="{{ asset('image/cart.svg')}}" alt="">
                                                </a> <!-- mycard_btn -->
                                            </div> <!-- mycard_btns -->
                                        </div> <!-- d-flex -->
                                    </div> <!-- mycard_body -->
                                </div> <!-- mycard -->

                            </div> <!-- swiper-slide -->
                        @endforeach
                        @endif


                    </div> <!-- swiper-wrapepr -->
                </div> <!-- swiper-container -->


            </div> <!-- container -->

        </section> <!-- section3 -->
    @endif
@else
    <section class="section3">

        <div class="container">
            <div class="section_title mb-4 pb-3">
                @if(isset($name) && !empty($name))
                    <h2 class="">{{ $name }} </h2>
                @else
                    <h2 class="">{{ $local['blog_find'] }}</h2>
                @endif
                <div class="slider_btns d-flex">
                    <div class="slider_btn prevbtn_img mr-3 swiper-button-prev4">
                        <svg width="8" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.99951 6.41599L0.793094 10.6224C0.294229 11.1213 0.294229 11.9301 0.793094 12.429C1.29196 12.9278 2.10078 12.9278 2.59964 12.429L7.70934 7.31926C8.2082 6.82039 8.2082 6.01158 7.70934 5.51271L2.59964 0.403018C2.10078 -0.0958471 1.29196 -0.0958471 0.793094 0.403018C0.294229 0.901883 0.294229 1.7107 0.793094 2.20957L4.99951 6.41599Z" fill="black"/>
                        </svg>

                    </div> <!-- slider_btn -->
                    <div class="slider_btn  swiper-button-next4">
                        <svg width="8"  viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.99951 6.41599L0.793094 10.6224C0.294229 11.1213 0.294229 11.9301 0.793094 12.429C1.29196 12.9278 2.10078 12.9278 2.59964 12.429L7.70934 7.31926C8.2082 6.82039 8.2082 6.01158 7.70934 5.51271L2.59964 0.403018C2.10078 -0.0958471 1.29196 -0.0958471 0.793094 0.403018C0.294229 0.901883 0.294229 1.7107 0.793094 2.20957L4.99951 6.41599Z" fill="black"/>
                        </svg>

                    </div> <!-- slider_btn -->
                </div> <!-- slider_btns -->
            </div> <!-- section_title -->

            <!-- Swiper -->
            <div class="swiper-container goods_swiper3 goods_slider">
                <div class="swiper-wrapper">
                    @foreach($coteg as $val)
                        <div class="swiper-slide">

                            <div class="mycard" >
                                <a href="{{ URL::to('/') }}/{{ $lang }}/view_product/{{ $val->id }}" class="mycard_img" style="background-image: url({{ URL::to('/') }}/media/{{ $val->img_url }});" id="prod_img_{{ $val->id }}"></a> <!-- mycard_img -->

                                <div class="mycard_body">
                                    <a href="{{ URL::to('/') }}/{{ $lang }}/view_product/{{ $val->id }}" class="mycard_title" title="Treadmill GF-5030 asd dsadasd as M." id="prod_name_{{ $val->id }}">{{ $val->name }}.</a>
                                    <h3 id="prod_price_{{ $val->id }}">{{ $val->price }} {{ $val->kurs }}</h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('image/stars.png')}}" class="img-width stars_rating_img" alt="">
                                            <span class="stars_rating_span ml-2">5.0</span>
                                        </div> <!-- d-flex -->
                                        <div class="mycard_btns d-flex">
                                            <a class="mr-2 mycard_btn">
                                                <img src="{{ asset('image/favourites.svg')}}" alt="">
                                            </a> <!-- mycard_btn -->
                                            <a  onclick='add_to_card({{ $val->id }})' class="mycard_btn maincolor_bg add_to_card">
                                                <img src="{{ asset('image/cart.svg')}}" alt="">
                                            </a> <!-- mycard_btn -->
                                        </div> <!-- mycard_btns -->
                                    </div> <!-- d-flex -->
                                </div> <!-- mycard_body -->
                            </div> <!-- mycard -->

                        </div> <!-- swiper-slide -->
                    @endforeach




                </div> <!-- swiper-wrapepr -->
            </div> <!-- swiper-container -->


        </div> <!-- container -->

    </section> <!-- section3 -->
@endif

<section class="advantages_section">
    <div class="container">
        <div class="advantages_block row">
            <div class="d-flex align-items-center resflex_column res-col-6 res_textcenter">
                <div class="advantages_circle d-flex justify-content-center align-items-center">
                    <img src="{{ asset('image/advantages1.png')}}" class="img-width" alt="">
                </div> <!-- advantages_circle -->

                <div class="d-flex flex-column">
                    <h3>{{ $local['infoH_1'] }}</h3>
                    <p class="mb-0">{{ $local['infoP_1'] }}</p>

                </div> <!-- d-flex -->
            </div> <!-- d-flex -->

            <div class="d-flex align-items-center resflex_column res-col-6 res_textcenter">
                <div class="advantages_circle d-flex justify-content-center align-items-center">
                    <img src="{{ asset('image/advantages2.png')}}" class="img-width" alt="">
                </div> <!-- advantages_circle -->

                <div class="d-flex flex-column">
                    <h3>{{ $local['infoH_2'] }}</h3>
                    <p class="mb-0">{{ $local['infoP_2'] }}</p>

                </div> <!-- d-flex -->
            </div> <!-- d-flex -->

            <div class="d-flex align-items-center resflex_column res-col-6 resmt-2 res_textcenter">
                <div class="advantages_circle d-flex justify-content-center align-items-center">
                    <img src="{{ asset('image/advantages3.png')}}" class="img-width" alt="">
                </div> <!-- advantages_circle -->

                <div class="d-flex flex-column">
                    <h3>{{ $local['infoH_3'] }}</h3>
                    <p class="mb-0">{{ $local['infoP_3'] }}</p>

                </div> <!-- d-flex -->
            </div> <!-- d-flex -->

            <div class="d-flex align-items-center resflex_column resmt-2 res_textcenter">
                <div class="advantages_circle d-flex justify-content-center align-items-center">
                    <img src="{{ asset('image/advantages4.png')}}" class="img-width" alt="">
                </div> <!-- advantages_circle -->

                <div class="d-flex flex-column">
                    <h3>{{ $local['infoH_4'] }}</h3>
                    <p class="mb-0">{{ $local['infoP_4'] }}</p>

                </div> <!-- d-flex -->
            </div> <!-- d-flex -->

        </div> <!-- advantages_block -->
    </div> <!-- container -->
</section> <!-- advantages_section -->
@endsection