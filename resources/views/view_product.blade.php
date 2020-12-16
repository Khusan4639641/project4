@extends("org.org")
@section('content')
<form action="{{ URL::to('/') }}/one_click" method="post">
    @csrf
    <input type="hidden" name="id"  value="{{ $id }}"/>
    <section class="product_section">

		<div class="container">
			<div class="mt-4 mb-4">
				<ul class="mybread_crumbs ">
					<li><a href="#">Главная</a></li>
					<li><span><img src="{{ URL::to('/') }}/images/bi_arrow-left-short.png" alt=""></span></li>
					<li><a href="#">Продукты</a></li>
					<li><span><img src="{{ URL::to('/') }}/images/bi_arrow-left-short.png" alt=""></span></li>
					<li><a href="#">Телевизоры, видео и аудио</a></li>
					<li><span><img src="{{ URL::to('/') }}images/bi_arrow-left-short.png" alt=""></span></li>
					<li><a href="#">Телевизоры</a></li>
					<li><span><img src="{{ URL::to('/') }}/images/bi_arrow-left-short.png" alt=""></span></li>
					<li><a href="#">Телевизор Artel UA32H1200 Smart TV</a></li>
				</ul> <!-- mybread_crumbs -->
			</div>

			<h2 class="product_title" id="prod_name">
				{{ $info->name }}
			</h2> <!-- product_title -->
			
			<div class="row">
				<div class="col-md-6">
					<div class="d-flex resflex_column">

						<div class="swiper-container gallery-thumbs swiper-container-initialized swiper-container-free-mode swiper-container-thumbs swiper-container-horizontal">
							<div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
							    @if($type!="mp4")
								    <div class="swiper-slide swiper-slide-visible swiper-slide-active swiper-slide-thumb-active" style="background-image: url({{ URL::to('/') }}/media/{{ $info->img_url }}); width: 111.25px; margin-right: 10px;"></div>
								@endif
							</div> <!-- swiper-wrapper -->
						<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div> <!-- gallery-thumbs -->

						<div class="swiper-container gallery-top swiper-container-initialized swiper-container-horizontal">
							<div class="swiper-wrapper">
							    
							    @if($type!="mp4")
								    <div class="swiper-slide swiper-slide-active" id="prod_img" style="background-image: url({{ URL::to('/') }}/media/{{ $info->img_url }}); width: 475px; margin-right: 20px;"></div>
							    @else
							        <div class="swiper-slide swiper-slide-active" id="prod_img" style="padding:10px;"><video controls  style="height:450px;width:475px;" src="{{ URL::to('/') }}/media/{{ $info->img_url }}"></video></div>
								@endif
							</div> <!-- swiper-wrapper -->
							<!-- Add Arrows -->
							<div class="gallery_top_btns d-flex">
								<div class="swiper_button_prev_top mr-1 slider_btn prevbtn_img swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-disabled="true">
									<svg width="8" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M4.99951 6.41599L0.793094 10.6224C0.294229 11.1213 0.294229 11.9301 0.793094 12.429C1.29196 12.9278 2.10078 12.9278 2.59964 12.429L7.70934 7.31926C8.2082 6.82039 8.2082 6.01158 7.70934 5.51271L2.59964 0.403018C2.10078 -0.0958471 1.29196 -0.0958471 0.793094 0.403018C0.294229 0.901883 0.294229 1.7107 0.793094 2.20957L4.99951 6.41599Z" fill="#fff"></path>
									</svg>
								</div> <!-- swiper_button_prev_top -->
								<div class="swiper_button_next_top slider_btn" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false">
									<svg width="8" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M4.99951 6.41599L0.793094 10.6224C0.294229 11.1213 0.294229 11.9301 0.793094 12.429C1.29196 12.9278 2.10078 12.9278 2.59964 12.429L7.70934 7.31926C8.2082 6.82039 8.2082 6.01158 7.70934 5.51271L2.59964 0.403018C2.10078 -0.0958471 1.29196 -0.0958471 0.793094 0.403018C0.294229 0.901883 0.294229 1.7107 0.793094 2.20957L4.99951 6.41599Z" fill="#fff"></path>
									</svg>
								</div> <!-- swiper_button_next_top -->
							</div> <!-- gallery_top_btns -->
							
							
						<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div> <!-- gallery-top -->

					</div> <!-- d-flex -->
					
				</div> <!-- col-md-6 -->
				<div class="col-md-6">
					<h2 class="product_name">
						{{ $info->name }}
					</h2> <!-- product_name -->
					<h3 class="product_price" id="prod_price">
						{{ $info->price }} {{ $info->kurs }}
					</h3> <!-- product_price -->
					
					<div class="d-flex justify-content-between myalign-item-end pb-4 myborder_bottom resflex_column ">
						<div class="">
							<div class="d-flex align-items-center mb-2">
								<h4 class="product_subprice mr-2">
									0 сум/мес {{ $local['good_rasr'] }}
								</h4> <!-- product_subprice -->
								<div class="info_group" data-toggle="modal" data-target="#info_modal">
									<button type="button" class="info_btn">
										<img src="{{ URL::to('/') }}/images/info_icon.png" class="img-width" alt="">
									</button> <!-- info_img -->
								</div> <!-- info_group -->
							</div> <!-- d-flex -->
							<div class="d-flex align-items-end">
								<div class="product_stars mr-3">
									<img src="{{ URL::to('/') }}/images/product_stars.png" class="img-width">
								</div> <!-- product_stars -->
								
								<span class="reviews_number">
									Отзывы (0)
								</span> <!-- reviews_number -->
							</div> <!-- d-flex -->
						</div>
						<div class="d-flex res_mt2">
							<div class="favourites_product_btn mr-2">
								<svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M15.4961 9.31347C17.2123 7.50596 17.2123 4.57525 15.4961 2.76774C13.7842 0.964749 11.0111 0.960244 9.29387 2.75422C7.57664 0.960244 4.80358 0.964749 3.09166 2.76774C1.37545 4.57525 1.37545 7.50596 3.09166 9.31347L8.81173 15.3391C9.07763 15.6192 9.50878 15.6193 9.77471 15.3392L15.4961 9.31347ZM14.533 8.29881L9.29321 13.8174L4.05455 8.29886C2.8701 7.0514 2.8701 5.0288 4.0545 3.78139C5.23889 2.53399 7.15933 2.53399 8.34373 3.78139C8.48612 3.93136 8.61406 4.09683 8.72644 4.27517C8.99577 4.70263 9.59177 4.70263 9.86111 4.27517C9.97368 4.0965 10.1011 3.93175 10.2438 3.78139C11.4282 2.53399 13.3487 2.53399 14.533 3.78139C15.7174 5.0288 15.7174 7.0514 14.533 8.29881Z" fill="black"></path>
								</svg>
							</div> <!-- favourites_product_btn -->
							<div class="product_count">
								<button type="button" onclick="this.nextElementSibling.stepDown();changeCount({{ $info->id }})">
									<img src="{{ URL::to('/') }}/images/minus.png">
								</button>
								<input type="number" name="count" id="count" min="0" max="{{ $info->count }}" value="1" readonly="" class="raz">
								<button type="button" onclick="this.previousElementSibling.stepUp();changeCount({{ $info->id }})">
									<img src="{{ URL::to('/') }}/images/plus.png">
								</button>
							</div> <!-- product_count -->
						</div> <!-- d-flex -->
					</div> <!-- d-flex -->

					<div class=" pt-4">
						<h5 class="des_title" style="text-transform: uppercase;">{{ $local['shortInfo'] }}</h5>
						<p class="little_des">{!! $info->discription !!}</p>

						<div class="product_labels">
							<div class="product_label">
								<span>{{ $local['brend'] }}:</span>
								<h5>Samsung</h5>
							</div> <!-- product_label -->
							<div class="product_label">
								<span>{{ $local['model'] }}:</span>
								<h5>{{ $info->name }}</h5>
							</div> <!-- product_label -->
							<div class="product_label">
								<span>{{ $local['exist'] }}:</span>
								<h5>Есть в наличии</h5>
							</div> <!-- product_label -->
							
						</div> <!-- product_labels -->
						<div class="mt-4">
							<div class="product_btns">
								<a style="cursor:pointer;" onclick="add_to_card_one({{ $id }})" class="buy_click_btn mybtn">
									<img src="{{ URL::to('/') }}/images/buy_btn.png" alt="">
									{{ $local['addCard'] }}
								</a> <!-- buy_btn -->
								<button type='submit' class="buy_btn mybtn maincolor_bg maincolor_shadow">
									<img src="{{ URL::to('/') }}/images/buy_click_btn.png" alt="">
									{{ $local['buyOne'] }}
								</button> <!-- buy_click_btn -->
								<a href="#"  class="buy_click_btn mybtn">
									<img src="{{ URL::to('/') }}/images/buy_click_btn.png" alt="">
									{{ $local['cutBuy'] }}
								</a> <!-- buy_click_btn -->
							</div> <!-- product_btns -->
						</div> <!-- mt-4 -->
						<div class="product_delivery mt-3">
							<img src="{{ URL::to('/') }}/images/delivery_icon.png" class="mr-2" alt="">
							Доставка по Узбекистану
						</div> <!-- product_delivery -->
					</div>
					
				</div> <!-- col-md-6 -->
			</div> <!-- row -->

			<div class="row mt-5">
				<div class="col-md-12">
					<ul class="nav nav-pills product_pills mb-3" id="pills-tab" role="tablist">
						<li class="nav-item" role="presentation">
							<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Описание</a>
						</li>
					</ul>
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
							<div class="product_descroption mt-4">
								<h3>{{ $local['infoFull'] }}</h3>
								<p>
									{!! $info->discription !!}
								</p>
							</div> <!-- product_descroption -->
						</div> <!-- tab-pane -->
				<!--delete-->
					</div> <!-- tab-content -->
				</div> <!-- col-md-12 -->
			</div> <!-- row -->

		</div> <!-- container -->
		
	</section>
</form>
<section class="section1">
    
        <div class="container">
            <div class="section_title mb-4 pb-3">
                <h2>{{ $local['sport'] }}</h2>
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
                            <a href="{{ URL::to('/') }}/view_product/{{ $val->id }}" class="mycard_img" style="background-image: url({{ URL::to('/') }}/media/{{ $val->img_url }});" id="prod_img_{{ $val->id }}"></a> <!-- mycard_img -->
                            <div class="mycard_body">
                                <a href="{{ URL::to('/') }}/view_product/{{ $val->id }}" class="mycard_title" title="Treadmill GF-5030 asd dsadasd as M." id="prod_name_{{ $val->id }}" >{{ $val->name }}.</a>
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
@endsection