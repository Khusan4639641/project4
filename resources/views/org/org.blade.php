<!DOCTYPE html>
<html lang="">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>7market - Лучший интернет магазин!</title>


	<link
		href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap"
		rel="stylesheet">



	<link rel="stylesheet" href="{{ URL::to('/') }}/css/style.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/css/media.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/css/fonts.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/libs/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/libs/fontawesome/all.min.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/libs/swiper-slider/swiper-bundle.min.css">
	<link rel="shortcut icon" href="{{ URL::to('/') }}/images/favicon.png" type="image/x-icon">

</head>

<body>
	<div id="top"></div>
	<div class="mydark_bg">

	</div> <!-- mydark_bg -->
	<div class="fixed_socials">
        <a href="https://instagram.com/7market.uz" class="fixed_social">
            <img src="{{ URL::to('/') }}/images/fixed_instagram.png" class="img-width" alt="">
        </a> <!-- fixed_social -->
        <a href="#" class="fixed_social">
            <img src="{{ URL::to('/') }}/images/fixed_twitter.png" class="img-width" alt="">
        </a> <!-- fixed_social -->
        <a href="#" class="fixed_social">
            <img src="{{ URL::to('/') }}/images/fixed_vk.png" class="img-width" alt="">
        </a> <!-- fixed_social -->
        <a href="https://fb.com/7market.uzbekistan" class="fixed_social">
            <img src="{{ URL::to('/') }}/images/fixed_facebook.png" class="img-width" alt="">
        </a> <!-- fixed_social -->
        <a href="#" class="fixed_social">
            <img src="{{ URL::to('/') }}/images/fixed_google.png" class="img-width" alt="">
        </a> <!-- fixed_social -->
        <a href="https://vt.tiktok.com/ytY26M/" class="fixed_social">
            <img src="{{ URL::to('/') }}/images/fixed_tiktok.png" class="img-width" alt="">
        </a> <!-- fixed_social -->
    </div> <!-- fixed_socials -->
	<nav class="">
		<div class="navbar_inner1_shadow"></div>
		<div class="navbar_inner1">

			<div class="container">
				<div class="d-flex justify-content-between align-items-center">
					<div class="d-flex align-items-center res_between resw-100">
						<a href="#" class="logo" id="logo">
							<img src="{{ URL::to('/') }}/images/logo.png" class="img-width" alt="">
						</a> <!-- logo -->
						<form  action="https://7market.uz/ru/search" method="post" class="search_form myd-flex align-items-center res_dnone">
                                @csrf
							<input type="text" placeholder="{{ $local['search'] }}..." id="searching" name="searching" class="h-100">

							<button type="submit" onclick="searchForm()" class="ml-2 main_btn d-flex align-items-center h-100">
								<img src="{{ URL::to('/') }}/images/search_icon.svg" class="mr-2" alt="">
								    {{ $local['search'] }}
							</button>

						</form> <!-- search_form -->


					</div> <!-- d-flex -->
                    <script>
                        function searchForm(){
                            var search = document.getElementById("searching").value;
                            window.location.href = "https://7market.uz/ru/search/"+search;
                        }
                    </script>
					<div class="d-flex myalign-items-center2 res_align_items_end resflex_column">

						<a href="tel:+998 99 795 09 99" class="nav_phone_link mx-4 res_dnone">
							<svg width="24" height="25" viewBox="0 0 24 25" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path
									d="M16 2.65405H8C7.46957 2.65405 6.96086 2.86477 6.58579 3.23984C6.21071 3.61491 6 4.12362 6 4.65405V20.6541C6 21.1845 6.21071 21.6932 6.58579 22.0683C6.96086 22.4433 7.46957 22.6541 8 22.6541H16C16.5304 22.6541 17.0391 22.4433 17.4142 22.0683C17.7893 21.6932 18 21.1845 18 20.6541V4.65405C18 4.12362 17.7893 3.61491 17.4142 3.23984C17.0391 2.86477 16.5304 2.65405 16 2.65405ZM13 21.6541H11V20.6541H13V21.6541ZM16 19.6541H8V5.65405H16V19.6541Z"
									fill="#E3E3E3" />
							</svg>

							+998 71 300 22 33
						</a> <!-- nav_phone_link -->

						<div class="dropdown">
							<button class="language_dropdown_btn dropdown-toggle" type="button"
								id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
								aria-expanded="false">
								<img src="{{ URL::to('/') }}/images/{{ $local['lang_img_menu'] }}" class="mr-2" alt="">{{ $local['lang_text_menu'] }}
							</button>
							<div class="dropdown-menu language_dropdown dropdown-menu-right"
								aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="#" onclick="changeLang('en')">
                                    <img src="{{ URL::to('/') }}/images/language_flag.png" alt="">
                                    Eng
                                </a> <!-- dropdown-item -->
                                <a class="dropdown-item" href="#" onclick="changeLang('uz')">
                                    <img src="{{ URL::to('/') }}/images/uzbekistan-flag-small.png" alt="">
                                    Uzb
                                </a> <!-- dropdown-item -->
                                <a class="dropdown-item" href="#" onclick="changeLang('ru')">
                                    <img src="{{ URL::to('/') }}/images/russia-flag-icon-16.png" alt="">
                                    Rus
                                </a> <!-- dropdown-item -->
							</div> <!-- dropdown-menu -->
						</div> <!-- dropdown -->
						<div class="d-flex mt-3">
							<a href="tel: 997770770" class="res_dflex align-items-center justify-content-center phone_icon_img">
								<img src="{{ URL::to('/') }}/images/phone.svg" alt="">
							</a> <!-- res_dflex -->
							<a href="#" class="res_dflex align-items-center justify-content-center phone_icon_img position-relative">
								<img src="{{ URL::to('/') }}/images/cart.svg" alt="">
								<div class="cart_numbers" id="cart_number1">
									0
								</div> <!-- cart_numbers -->
	
							</a> <!-- res_dflex -->
							<a href="#" class="res_dflex align-items-center justify-content-center phone_icon_img">
								<img src="{{ URL::to('/') }}/images/favourites.svg" alt="">
							</a> <!-- res_dflex -->
							<a href="#" data-toggle="modal" data-target="#signin_modal" class="res_dflex align-items-center justify-content-center phone_icon_img">
								<img src="{{ URL::to('/') }}/images/user.svg" alt="">
							</a> <!-- res_dflex -->
							
						</div> <!-- d-flex -->

					</div> <!-- d-flex -->

				</div> <!-- d-flex -->
			</div> <!-- container -->

		</div> <!-- navbar_inner1 -->

		<script>
            function changeLang(lang){
                var newLink="";
                var hrefs = window.location.href;
                    hrefs = hrefs.split("/");
                    hrefs[3]=lang;
                    for(var i=0;i<hrefs.length;i++){
                        if(i!=hrefs.length-1){
                            newLink += hrefs[i]+"/";    
                        }else{
                            newLink += hrefs[i];    
                        }
                        
                    }
                    window.location.href=newLink;
            }
        </script>

	</nav> <!-- navbar -->
	<div class="navbar_inner2">
		<div class="container res-px-none">
			<div class="d-flex justify-content-between">
				<div class="navbar_inner2_links d-flex">
					<div class="categories_section position-relative">

						<div class="categories_section_btn res_dnone">
							<a href="#" class="d-flex align-items-center">
								{{ $local['coty'] }}
								<img src="{{ URL::to('/') }}/images/categories.png" class="ml-3" alt="">
							</a>
						</div> <!-- categories_section_btn -->
						<div class="m_categories_group">
							<div class="categories_section_btn m_categories_section_btn res_dflex">
								<div id="nav-icon4">
									<span></span>
									<span></span>
									<span></span>
								</div> <!-- nav-icon4 -->
							</div> <!-- categories_section_btn -->

							<div class="m_categories_menu" id="m_categories_menu">
								<div class="accordion" id="accordionExample">
									<div class="card">
										<div class="card-header" id="headingOne">
											<h2 class="mb-0">
												<div class="text-left collapse_item" type="button"
													data-toggle="collapse" data-target="#collapseOne"
													aria-expanded="true" aria-controls="collapseOne">
													<a href="#" class="m_categories_link">
														{{ $local['sport'] }}
													</a>

													<svg width="7" height="11" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M4.99951 6.41599L0.793094 10.6224C0.294229 11.1213 0.294229 11.9301 0.793094 12.429C1.29196 12.9278 2.10078 12.9278 2.59964 12.429L7.70934 7.31926C8.2082 6.82039 8.2082 6.01158 7.70934 5.51271L2.59964 0.403018C2.10078 -0.0958471 1.29196 -0.0958471 0.793094 0.403018C0.294229 0.901883 0.294229 1.7107 0.793094 2.20957L4.99951 6.41599Z" fill="black"/>
													</svg>

												</div> <!-- collapse_item -->
											</h2>
										</div> <!-- card-header -->

										<div id="collapseOne" class="collapse" aria-labelledby="headingOne"
											data-parent="#accordionExample">
											<div class="m_categories_submenu">
											    @foreach($sport as $val)
												@if(url()->full()=="https://7market.uz/".$lang."/coteg/".$val->id)
    												    <a href="{{ URL::to('/') }}/{{ $lang }}/coteg/{{ $val->id }}" style="color:#ffa20a;" class="m_categories_link">{{ $val->$lang }}</a>
    												@else
    												    <a href="{{ URL::to('/') }}/{{ $lang }}/coteg/{{ $val->id }}" class="m_categories_link">{{ $val->$lang }}</a>
    												@endif
												@endforeach
											</div> <!-- m_categories_submenu -->
										</div> <!-- collapse -->
									</div>
									<div class="card">
										<div class="card-header" id="headingTwo">
											<h2 class="mb-0">
												<div class="text-left collapse_item" type="button"
													data-toggle="collapse" data-target="#collapseTwo"
													aria-expanded="true" aria-controls="collapseTwo">
													<a href="#" class="m_categories_link">
														{{ $local['moto'] }}
													</a>

													<svg width="7" height="11" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M4.99951 6.41599L0.793094 10.6224C0.294229 11.1213 0.294229 11.9301 0.793094 12.429C1.29196 12.9278 2.10078 12.9278 2.59964 12.429L7.70934 7.31926C8.2082 6.82039 8.2082 6.01158 7.70934 5.51271L2.59964 0.403018C2.10078 -0.0958471 1.29196 -0.0958471 0.793094 0.403018C0.294229 0.901883 0.294229 1.7107 0.793094 2.20957L4.99951 6.41599Z" fill="black"/>
													</svg>


												</div>
											</h2>
										</div>
										<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
											data-parent="#accordionExample">
											<div class="m_categories_submenu">
												@foreach($moto as $val)
    												    @if(url()->full()=="https://7market.uz/".$lang."/coteg/".$val->id)
        												    <a href="{{ URL::to('/') }}/{{ $lang }}/coteg/{{ $val->id }}" style="color:#ffa20a;" class="m_categories_link">{{ $val->$lang }}</a>
        												@else
        												    <a href="{{ URL::to('/') }}/{{ $lang }}/coteg/{{ $val->id }}" class="m_categories_link">{{ $val->$lang }}</a>
        												@endif
												@endforeach
											</div> <!-- m_categories_submenu -->
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="headingThree">
											<h2 class="mb-0">
												<div class="text-left collapse_item" type="button"
													data-toggle="collapse" data-target="#collapseThree"
													aria-expanded="true" aria-controls="collapseThree">
													<a href="#" class="m_categories_link">
														{{ $local['velo'] }}
													</a>

													<svg width="7" height="11" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M4.99951 6.41599L0.793094 10.6224C0.294229 11.1213 0.294229 11.9301 0.793094 12.429C1.29196 12.9278 2.10078 12.9278 2.59964 12.429L7.70934 7.31926C8.2082 6.82039 8.2082 6.01158 7.70934 5.51271L2.59964 0.403018C2.10078 -0.0958471 1.29196 -0.0958471 0.793094 0.403018C0.294229 0.901883 0.294229 1.7107 0.793094 2.20957L4.99951 6.41599Z" fill="black"/>
													</svg>


												</div>
											</h2>
										</div>
										<div id="collapseThree" class="collapse" aria-labelledby="headingThree"
											data-parent="#accordionExample">
											<div class="m_categories_submenu">
												@foreach($velo as $val)
    												@if(url()->full()=="https://7market.uz/".$lang."/coteg/".$val->id)
    												    <a href="{{ URL::to('/') }}/{{ $lang }}/coteg/{{ $val->id }}" style="color:#ffa20a;" class="m_categories_link">{{ $val->$lang }}</a>
    												@else
    												    <a href="{{ URL::to('/') }}/{{ $lang }}/coteg/{{ $val->id }}" class="m_categories_link">{{ $val->$lang }}</a>
    												@endif
												@endforeach
											</div> <!-- m_categories_submenu -->
										</div>
									</div>
								</div>
							</div> <!-- m_categories_menu -->
						</div> <!-- m_categories_group -->


						<div class="categories_menu">
							<div class="categories_menu_content">
								<div class="categories_menu_part">
									<div class="categories_category">
										<h3><a href="#">{{ $local['medic'] }}</a></h3>
										<ul class="categories_category_ul">
										    @foreach($med as $val)
											    @if(url()->full()=="https://7market.uz/".$lang."/coteg/".$val->id)
    											    <li><a href="{{ URL::to('/') }}/{{ $lang }}/coteg/{{ $val->id }}" style="color:#ffa20a;" ><span class="mycircle3"></span>{{ $val->$lang }}</a></li>
    										    @else
    										        <li><a href="{{ URL::to('/') }}/{{ $lang }}/coteg/{{ $val->id }}"><span class="mycircle3"></span>{{ $val->$lang }}</a></li>
    										    @endif
											@endforeach
										</ul>
									</div> <!-- categories_category -->

									<div class="categories_category">
										<h3><a href="#">{{ $local['velo'] }}</a></h3>
										<ul class="categories_category_ul">
										    
											@foreach($velo as $val)
											    @if(url()->full()=="https://7market.uz/".$lang."/coteg/".$val->id)
    											    <li><a href="{{ URL::to('/') }}/{{ $lang }}/coteg/{{ $val->id }}" style="color:#ffa20a;"><span class="mycircle3"></span>{{ $val->$lang }}</a></li>
    										    @else
    										        <li><a href="{{ URL::to('/') }}/{{ $lang }}/coteg/{{ $val->id }}"><span class="mycircle3"></span>{{ $val->$lang }}</a></li>
    										    @endif
											@endforeach
											
										</ul>
									</div> <!-- submenu_category -->

								</div> <!-- submenu_part -->

								<div class="categories_menu_part">
									<div class="categories_category">
										<h3><a href="#">{{ $local['moto'] }}</a></h3>
										<ul class="categories_category_ul">
										    
											@foreach($moto as $val)
											    @if(url()->full()=="https://7market.uz/".$lang."/coteg/".$val->id)
    											    <li><a href="{{ URL::to('/') }}/{{ $lang }}/coteg/{{ $val->id }}" style="color:#ffa20a;"><span class="mycircle3"></span>{{ $val->$lang }}</a></li>
    										    @else
    										        <li><a href="{{ URL::to('/') }}/{{ $lang }}/coteg/{{ $val->id }}"><span class="mycircle3"></span>{{ $val->$lang }}</a></li>
    										    @endif
											@endforeach
											
										</ul>
									</div> <!-- submenu_category -->

									<div class="categories_category">
										<h3><a href="#">{{ $local['sport'] }}</a></h3>
										<ul class="categories_category_ul">
											@foreach($sport as $val)
    											@if(url()->full()==URL::to('/').'/'.$lang.'/coteg/'.$val->id)
    											    <li><a href="{{ URL::to('/') }}/{{ $lang }}/coteg/{{ $val->id }}" style="color:#ffa20a;"><span class="mycircle3"></span>{{ $val->$lang }}</a></li>
    										    @else
    										        <li><a href="{{ URL::to('/') }}/{{ $lang }}/coteg/{{ $val->id }}"><span class="mycircle3"></span>{{ $val->$lang }}</a></li>
    										    @endif
											@endforeach
										</ul>
									</div> <!-- submenu_category -->

								</div> <!-- submenu_part -->

								<div class="categories_menu_part">
									<div class="d-flex flex-column ">
										<div class="categories_menu_banner">
											<a href="#" class="categories_menu_banner_img"
												style="background-image: url({{ URL::to('/') }}/images/product.png);">

											</a> <!-- categories_menu_banner_img -->
											<div class="categories_menu_banner_text">
												<a href="#" class="categories_menu_banner_title">
													Беговая дорожка PowerGym PG 770
												</a> <!-- categories_menu_banner_title -->
												<div class="categories_menu_banner_company">
													PowerGym
												</div> <!-- categories_menu_banner_company -->
												<a href="#" class="categories_menu_banner_btn"><img
														src="images/tag.png" class="mr-2" alt="">Подробнее</a>
											</div> <!-- categories_menu_banner_text -->

										</div> <!-- categories_menu_banner -->
										<div class="categories_menu_banner">
											<a href="#" class="categories_menu_banner_img"
												style="background-image: url({{ URL::to('/') }}/images/product.png);">

											</a> <!-- categories_menu_banner_img -->
											<div class="categories_menu_banner_text">
												<a href="#" class="categories_menu_banner_title">
													Беговая дорожка PowerGym PG 770
												</a> <!-- categories_menu_banner_title -->
												<div class="categories_menu_banner_company">
													PowerGym
												</div> <!-- categories_menu_banner_company -->
												<a href="#" class="categories_menu_banner_btn"><img
														src="{{ URL::to('/') }}/images/tag.png" class="mr-2" alt="">Подробнее</a>
											</div> <!-- categories_menu_banner_text -->

										</div> <!-- categories_menu_banner -->
									</div> <!-- d-flex -->

								</div> <!-- submenu_part -->

							</div> <!-- submenu_content -->
						</div> <!-- categories_menu -->

					</div> <!-- categories_section position-relative -->
					@if(url()->full()=="https://7market.uz/ru/medic")
					    <a href="{{ URL::to('/') }}/{{ $lang }}/medic" style="color:#ffa20a;" class="best_categories_link mx-3">{{ $local['medic'] }}</a>
					@else
					    <a href="{{ URL::to('/') }}/{{ $lang }}/medic" class="best_categories_link mx-3">{{ $local['medic'] }}</a>
					@endif
					@if(url()->full()=="https://7market.uz/ru/sport")
                        <a href="{{ URL::to('/') }}/{{ $lang }}/sport" style="color:#ffa20a;" class="best_categories_link mx-3">{{ $local['sport'] }}</a>
                    @else 
                        <a href="{{ URL::to('/') }}/{{ $lang }}/sport" class="best_categories_link mx-3">{{ $local['sport'] }}</a>
                    @endif
                    @if(url()->full()=="https://7market.uz/ru/moto")
                        <a href="{{ URL::to('/') }}/{{ $lang }}/moto" style="color:#ffa20a;" class="best_categories_link mx-3">{{ $local['moto'] }}</a>
                    @else 
                        <a href="{{ URL::to('/') }}/{{ $lang }}/moto" class="best_categories_link mx-3">{{ $local['moto'] }}</a>
                    @endif
				</div> <!-- navbar_inner2_links -->

				<div class="navbar_inner2_icons myd-flex res_dnone">
					<div class="position-relative cart_dropdown_link">
						<a href="#" class="navbar_inner2_icon navbar_inner2_cart_icon d-flex align-items-center justify-content-center">
                                <img src="{{ asset('image/cart.svg')}}" alt="">
                                <div class="cart_numbers" id="cart_number">
                                    0
                                </div> <!-- cart_numbers -->

                            </a> <!-- navbar_inner2_icon -->
						<div class="cart_dropdown">
                                <div class="cart_dropdown_items" id='card_panel'>

                                    <p id='card_button' style="display:block; text-align:center;">Карзинка пуста</p>

                                </div>
                                <form action='{{ URL::to('/') }}/{{ $lang }}/card' method='post'>
                                    @csrf
                                    <input id='sendForm' name='send' type='hidden' value='0'/>
                                    <input id='sendFormCounts' name='sendCounts' type='hidden' value='0'/>
                                    <button href="#" id='card_button' style='min-width:240px;' class="main_btn w-100 d-block text-center py-2 mt-3">{{ $local['card'] }}</button>
                                </form>
                            </div> <!-- cart_dropdown -->
					</div> <!-- position-relative -->


					<a href="#" class="navbar_inner2_icon d-flex align-items-center justify-content-center">
						<img src="{{ URL::to('/') }}/images/favourites.svg" alt="">
					</a> <!-- navbar_inner2_icon -->

					<a href="#" class="navbar_inner2_icon d-flex align-items-center justify-content-center"
						data-toggle="modal" data-target="#signin_modal">
						<img src="{{ URL::to('/') }}/images/user.svg" alt="">
					</a> <!-- navbar_inner2_icon -->
				</div> <!-- navbar_inner2_icons -->

					<div class="search_group position-relative res_dblock">
						<div class="search_section ">
							<form action="" method="POST" class="search_form myd-flex align-items-center">
					
								<input type="text" placeholder="Поиск..." class="h-100">
					
								<button type="submit" class="main_btn d-flex align-items-center h-100">
									<img src="{{ URL::to('/') }}/images/search_icon.svg" class="mr-2" alt="">
									Поиск
								</button>
					
							</form> <!-- search_form -->
						</div> <!-- search_section -->
					
					</div> <!-- search_group -->

			</div> <!-- d-flex -->
		</div> <!-- container -->
	</div> <!-- navbar_inner2 -->

<!--Content-->
    @yield('content')
<!---->
	<footer>
    <div class="container">
        <div class="footer_upper position-relative">
            <a href="#header" class="top_circle_link">
                <img src="{{ asset('image/top.svg')}}" alt="">
            </a> <!-- top_circle_link -->
            <a href="#" class="footer_logo">
                <img src="{{ asset('image/logo.png')}}" class="img-width" alt="">
            </a>
            <div class="d-flex align-items-center resflex_column res_textcenter">
                <h4>{{ $local['sendContact'] }}</h4>
                <button class="main_btn">
                    {{ $local['submit'] }}
                </button> <!-- main_btn -->
            </div> <!-- d-flex -->
        </div> <!-- footer_upper -->


        <div class="footer_middle">

            <div class="row">
                <div class="col-md-4">
                    <h3 class="pb-4 res_textcenter">{{ $local['subs'] }}</h3>
                    <form method="" class="footer_form d-flex">
                        <input type="text" name="" placeholder="Email address" required="">
                        <button>
                            <img src="{{ asset('image/right.svg')}}" alt="">
                        </button>
                    </form> <!-- d-flex -->
                    <div class="d-flex footer_social_links py-3">
                        <a href="#" class="footer_social_link">
                            <i class="fab fa-youtube"></i>
                        </a> <!-- footer_social_link -->
                        <a href="#" class="footer_social_link">
                            <i class="fab fa-facebook"></i>
                        </a> <!-- footer_social_link -->
                        <a href="#" class="footer_social_link">
                            <i class="fab fa-twitter"></i>
                        </a> <!-- footer_social_link -->
                        <a href="#" class="footer_social_link">
                            <i class="fab fa-instagram"></i>
                        </a> <!-- footer_social_link -->
                    </div> <!-- d-flex -->
                </div> <!-- col-md-4 -->
                <div class="col-md-2">

                </div> <!-- col-md-2 -->
                <div class="col-md-2 col-6">
                    <ul class="footer_menu">
                        <h4>Services</h4>
                        <li><a href="#">Email Marketing</a></li>
                        <li><a href="#">Campaigns</a></li>
                        <li><a href="#">Branding</a></li>
                        <li><a href="#">Offline</a></li>
                    </ul> <!-- footer_menu -->
                </div> <!-- col-md-2 -->
                <div class="col-md-2 col-6">
                    <ul class="footer_menu">
                        <h4>About</h4>
                        <li><a href="#">Our Story</a></li>
                        <li><a href="#">Benefits</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul> <!-- footer_menu -->
                </div> <!-- col-md-2 -->
                <div class="col-md-2 col-6">
                    <ul class="footer_menu">
                        <h4>Help</h4>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul> <!-- footer_menu -->
                </div> <!-- col-md-2 -->
            </div> <!-- row -->

        </div> <!-- footer_middle -->

        <div class="footer_inner">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="d-flex align-items-center">
                        <img src="{{ URL::to('/') }}/image/map-marker-alt.png" class="mr-2">
                        <h5>{{ $local['adress'] }}</h5>
                    </a> <!-- d-flex -->
                </div> <!-- col-md-3 -->
                <div class="col-md-3">
                    <a href="#" class="d-flex align-items-center">
                        <img src="{{ URL::to('/') }}/image/phone.png" class="mr-2">
                        <h5>+998 99 795 09 99</h5>
                    </a> <!-- d-flex -->
                </div> <!-- col-md-3 -->
                <div class="col-md-3">
                    <a href="#" class="d-flex align-items-center">
                        <img src="{{ URL::to('/') }}/image/clock.png" class="mr-2">
                        <h5>9 - 12, Mon - Tue</h5>
                    </a> <!-- d-flex -->
                </div> <!-- col-md-3 -->
                <div class="col-md-3">
                    <a href="#" class="d-flex align-items-center">
                        <img src="{{ URL::to('/') }}/image/envelope.png" class="mr-2">
                        <h5>7sevenMarket@gmail.com</h5>
                    </a> <!-- d-flex -->
                </div> <!-- col-md-3 -->
            </div> <!-- row -->
        </div> <!-- footer_inner -->


    </div> <!-- container -->
</footer> <!-- footer -->
<div class="modal fade" id="signin_modal" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">




                <button type="button" class="add_product_modal_close_btn" data-dismiss="modal" aria-label="Close">
                    <img src="images/close.svg" alt="">
                </button>

                <ul class="nav nav-pills signin_pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                           role="tab" aria-controls="pills-home" aria-selected="true">{{ $local['reg'] }}</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                           role="tab" aria-controls="pills-profile" aria-selected="false">{{ $local['login'] }}</a>
                    </li>

                    <div class="signin_pills_panel"></div>
                </ul> <!-- signin_pills -->


                <div class="tab-content signin_modal_form" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                         aria-labelledby="pills-home-tab">
                        <div class="modal_body_border_inner">
                            <h3 class="pb-3">{{ $local['loginRole'] }}</h3>
                            <form action="" method="" class="login_form">
                                <div class="d-flex mb-2">
                                    <div class="login_form_input_border w-100 position-relative">
                                        <input type="number" class="login_form_input phone" placeholder="Telephone">
                                        <div class="phone_number_pre">
                                            +998
                                        </div> <!-- phone_number_pre -->
                                    </div> <!-- login_form_input_border -->
                                </div> <!-- d-flex -->
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <button class="main_btn">{{ $local['submit'] }}</button>
                                </div> <!-- d-flex -->
                                <div class="d-flex align-items-center mt-4 iagree_rules">
                                    <input type="checkbox" class="mr-2" id="iagree_rules_checkbox" required>
                                    <label class="mb-0" for="iagree_rules_checkbox">{{ $local['rule2'] }}</a> </label>
                                </div> <!-- d-flex -->
                                <div class="d-flex align-items-center mt-2 iagree_rules">
                                    <input type="checkbox" class="mr-2" id="iagree_rules_checkbox2" checked>
                                    <label class="mb-0" for="iagree_rules_checkbox2">{{ $local['rule1'] }}</label>
                                </div> <!-- d-flex -->





                            </form> <!-- login_form -->

                            <div class="login_socials mt-4">
                                <div class="d-flex">
                                    <a href="#" class="login_social">
                                        <img src="images/google.svg" alt="">
                                    </a> <!-- login_social -->
                                    <a href="#" class="login_social">
                                        <img src="images/instagram.svg" alt="">
                                    </a> <!-- login_social -->
                                    <a href="#" class="login_social facebook_img">
                                        <img src="images/facebook.svg" alt="">
                                    </a> <!-- login_social -->
                                    <a href="#" class="login_social">
                                        <img src="images/tik-tok.svg" alt="">
                                    </a> <!-- login_social -->

                                    <a href="#" class="login_social">
                                        <img src="images/mailru.png" alt="">
                                    </a> <!-- login_social -->
                                </div> <!-- d-flex -->
                            </div> <!-- login_socials -->
                        </div> <!-- modal_body_border_inner -->

                    </div> <!-- tab-pane -->
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                         aria-labelledby="pills-profile-tab">
                        <div class="modal_body_border_inner">
                            <h3 class="pb-3">Введите данные</h3>
                            <form action="" method="" class="login_form">
                                <div class="d-flex mb-2">
                                    <div class="login_form_input_border position-relative">
                                        <input type="number" class="login_form_input phone" placeholder="Telephone">
                                        <div class="phone_number_pre">
                                            +998
                                        </div> <!-- phone_number_pre -->
                                    </div> <!-- login_form_input_border -->
                                </div> <!-- d-flex -->
                                <div class="d-flex">
                                    <div class="login_form_input_border position-relative">
                                        <input type="password" class="login_form_input" placeholder="Password"
                                               id="password-field">
											<span toggle="#password-field"
                                                  class="password-hide field-icon toggle-password"></span>
                                    </div> <!-- login_form_input_border -->
                                </div> <!-- d-flex -->
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <button class="main_btn">Войти</button>
                                    <a href="#" class="forget_password">Забыли пороль?</a>
                                </div> <!-- d-flex -->
                            </form> <!-- login_form -->



                            <div class="login_socials mt-4">
                                <div class="d-flex">
                                    <a href="#" class="login_social">
                                        <img src="images/google.svg" alt="">
                                    </a> <!-- login_social -->
                                    <a href="#" class="login_social">
                                        <img src="images/instagram.svg" alt="">
                                    </a> <!-- login_social -->
                                    <a href="#" class="login_social facebook_img">
                                        <img src="images/facebook.svg" alt="">
                                    </a> <!-- login_social -->
                                    <a href="#" class="login_social">
                                        <img src="images/tik-tok.svg" alt="">
                                    </a> <!-- login_social -->

                                    <a href="#" class="login_social">
                                        <img src="images/mailru.png" alt="">
                                    </a> <!-- login_social -->
                                </div> <!-- d-flex -->
                            </div> <!-- login_socials -->
                        </div> <!-- modal_body_border_inner -->


                    </div> <!-- tab-pane -->
                </div> <!-- tab_content -->




            </div> <!-- modal-body -->

        </div> <!-- modal-content -->
    </div> <!-- modal-dialog -->
</div> <!-- modal -->



<script src="{{ asset('js/pay.js')}}"></script>
	<script src="{{ URL::to('/') }}/js/jquery.min.js"></script>
	<script src="{{ URL::to('/') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="{{ URL::to('/') }}/libs/fontawesome/all.min.js"></script>
	<script src="{{ URL::to('/') }}/libs/swiper-slider/swiper-bundle.min.js"></script>
	<script src="{{ URL::to('/') }}/https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>

	<script src="{{ URL::to('/') }}/js/main.js"></script>
</body>

</html>