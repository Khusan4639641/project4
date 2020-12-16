@extends("org.org")
@section('content')
<!--start-->
<form action="{{ URL::to('/') }}/{{ $lang }}/action_pay" method="post">
    <style>
         #map {
            width: 100%; height: 300px; padding: 0; margin: 0;
            display:none;
        }
    </style>
    @csrf
    <input type="hidden" value="click" name="pay_type" />
<section class="order_registration_section">
		<div class="container">
			<h2 class="section_titleh2 pb-5">
				Оформление заказа
			</h2>
			<div class="row">
				<div class="col-md-8">
					<div class="payment_form_div">
		
						<h2>Заполните форму заказа</h2>
                    <input type="hidden" name="summa" value="{{ $summa }}"/>
						<div class="row">
							<div class="col-md-6">
								<div class="payment_form_inputgroup">
									<label for="first_name_input">Ismiz *</label>
									<div class="login_form_input_border w-100">
										<input type="text" class="payment_form_input" name="user_name" id="first_name_input" required="">
									</div> <!-- login_form_input_border -->
								</div> <!-- payment_form_inputgroup -->
							</div> <!-- col-md-6 -->
							<div class="col-md-6">
							    <div class="payment_form_inputgroup">
									<label for="email_input">Telefon nomeri *</label>
									<div class="login_form_input_border w-100">
										<input type="text" class="payment_form_input" name="user_tell" id="email_input" required="">
									</div> <!-- login_form_input_border -->
								</div> <!-- payment_form_inputgroup -->
								
							</div> <!-- col-md-6 -->
							<div class="col-md-12">
								<div class="payment_form_inputgroup">
									<label for="comment_textarea">Aдрес
									    @if((isset($isMobile) && !empty($isMobile)))
									        <a class="btn btn-success" style="cursor:pointer;" onclick='getLocation()'>локация</a>
									    @endif
									</label>
									
									    <div id="map"></div>
							
								        <textarea id="comment_textarea" name="user_adress" class="payment_form_input"></textarea>
								
								</div> <!-- payment_form_inputgroup -->
							</div>
							<button type="submit" href="#" style="background:#FFA20A;width:100%;" class="btn btn-default">Заказать</button>
						</div> <!-- row -->
					</div> <!-- payment_form_div -->
					<div style="display:none;" id="visa" class="card_add_form mt-4">


						<div class="row">
							<div class="col-md-5">
								<div class="card_card">
									<div class="d-flex justify-content-between ">

										<div class="card_title">
											Your card
										</div> <!-- card_title -->
										<div class="d-flex align-items-start">
											<img src="images/dots.svg" class="dots_img" alt="">
										</div>
									</div> <!-- d-flex -->

									<div class="card_number mt-4 pt-1">
										<span id="card-number-display">
											**** **** **** ****
										</span>
									</div> <!-- card_number -->
									<div class="card_text mt-3">
										<div>
											<h5>Держатель карты</h5>
											<span id="card-name-display">
												Lindsey Johnson
											</span>
										</div>
										<div>
											<h5>Expires</h5>
											<span id="card-expires-display">
												**/**
											</span>
										</div> 
									</div> <!-- card_text -->


									<img src="images/card_bg.png" class="card_bg" alt="">


								</div> <!-- card_card -->
							</div> <!-- col-md-5 -->
							<div class="col-md-4">
								<div class="input_group2">
									<label for="card-name">Держатель карты *</label>
									<input type="text" id="card-name">
								</div> <!-- input_group2 -->
								<div class="input_group2">
									<label for="card-number">Номер карты *</label>
									<input type="text" id="card-number">
								</div> <!-- input_group2 -->

							</div> <!-- col-md-4 -->
							<div class="col-md-3">
								<div class="input_group2">
									<label for="card-expires">Срок действия *</label>
									<input type="text" id="card-expires">
								</div> <!-- input_group2 -->

								<div class="mt-5">
									<a href="#" class="main_btn rounded-border padding_btn black_btn">
										Сохранить
									</a> <!-- main_btn -->
								</div>
							</div> <!-- col-md-4 -->


						</div> <!-- row -->


					</div> <!-- card_add_form -->
				</div> <!-- col-md-8 -->
				<div class="col-md-4">
					<div class="payment_form2">
						<h2 class="">
							Ваш заказ
						</h2>
						<div class="products_list">
						    
							<div class="products_list_product">
								<div class="d-flex align-items-center">
									<div class="products_list_product_avatar" style="background-image: url(../media/{{ $info->img_url }});">
									</div> <!-- products_list_product_avatar -->

									<a href="#" class="mycard_title2" title="Адаптер Otg линия передач iopdaskd"> <span>{{ $info->name }}</span></a>
								</div> <!-- d-flex -->
								<div class="d-flex align-items-center">
									<h4 class="products_list_product_price">
										{{ $summa }} sum
										<input type="hidden" name="prod_count[0]" value="{{ $count }}"/>
										<input type="hidden" name="prod_id[0]" value="{{ $id }}"/>
									</h4> <!-- products_list_product_price -->
									<div class="product_list_close">
										<img src="images/white_close.svg" alt="">
									</div> <!-- product_list_close -->
								</div> <!-- d-flex -->
							</div> <!-- products_list_product -->
							
						</div> <!-- products_list -->
						<div class="text-center mt-2">
							<a href="#" class="text-center see_all_goods_link">Посмотреть весь ваш товар</a>
						</div> <!-- text-center -->
						<div class="payment_form2_flexes">
							<h3>Subtotal</h3>
							<h3>{{ $summa }} sum</h3>
						</div> <!-- payment_form2_flexes -->
						<div class="payment_form2_flexes">
							<h3>Shipping and Handing</h3>
							<h3>Free Shipping</h3>
						</div> <!-- payment_form2_flexes -->
						<div class="payment_form2_flexes">
							<h3>Total</h3>
							<h2>{{ $summa }} sum</h2>
						</div> <!-- payment_form2_flexes -->
						<div class="form-group form-check payment_form2_check" style="display:none;">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Банковский перевод</label>
						</div> <!-- form-group -->
						<div class="payment_form2_check_text" style="display:none;">
							Сделайте платеж прямо на наш банковский счет. Используйте свой идентификатор заказа в качестве ссылки для оплаты. Ваш заказ не будет отправлен, пока средства не будут зачислены на наш счет.
						</div> <!-- payment_form2_check_text -->

						<h3 class="payment_method_title">
							Способы оплаты
						</h3> <!-- payment_method_title -->
						<div class="row" style="display:none;">
							<div class="col-md-7">
								<div class="payment_methods">


									<input class="checkbox-tools" type="radio" name="tools" id="tool-1" checked="">
									<label class="for-checkbox-tools" for="tool-1">
										<img src="images/click.png">
										Click
									</label>
									<input class="checkbox-tools" type="radio" name="tools" id="tool-2">
									<label class="for-checkbox-tools" for="tool-2">
										<img src="images/payme.png">
										Payme
									</label>
									<input class="checkbox-tools" type="radio" name="tools" id="tool-3">
									<label class="for-checkbox-tools" for="tool-3">
										<img src="images/visa.png">
										Visa
									</label>
									<input class="checkbox-tools" type="radio" name="tools" id="tool-4">
									<label class="for-checkbox-tools" for="tool-4">
										<img src="images/mastercard.png">
										Master card
									</label>
								</div> <!-- payment_methods -->
							</div> <!-- col-md-6 -->

						</div> <!-- row -->

						<div class="payment_form2_btn" style="display:none;">
							
						</div> <!-- payment_form2_btn -->
					</div> <!-- payment_form2 -->

				</div> <!-- col-md-4 -->
			</div> <!-- row -->
		</div> <!-- container -->
	</section>
		@if((isset($isMobile) && !empty($isMobile)))
<script src="https://api-maps.yandex.ru/2.1/?lang=en_RU&amp;apikey=5aa14fdc-a0b9-43b5-bdb8-be641072b46e" type="text/javascript"></script>
    <script src="{{ asset('js/icon_customImage.js')}}" type="text/javascript"></script>
@endif
	</form>
    <!--end-->
@endsection