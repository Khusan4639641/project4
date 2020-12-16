@extends("org.org")
@section('content')
<!--start-->
<form action="pay" method="post">
    
@csrf
    <section class="cart_section">
		
		<div class="container">
			<h2 class=" section_title_h2 pb-4">
				Корзина
			</h2> <!-- section_title -->
			


			<div class="row">
				<div class="col-md-9">
					<div class="cart_card_titles mb-3">
						<div class="cart_card_titles_product">
							Продукция
						</div> <!-- cart_card_titles_product -->
						<div class="cart_card_titles_count">
							Количество
						</div> <!-- cart_card_titles_count -->
						<div class="cart_card_titles_price">
							Цена
						</div> <!-- cart_card_titles_price -->
						<div class="cart_card_titles_remove">
							Удалить
						</div> <!-- cart_card_titles_remove -->
					</div> <!-- cart_card_titles -->
					<div class="cart_cards">
					    <input id="arrays_id" name="arrays_id" value="{{ $id ?? '' }}" type="hidden"/>   
					    @foreach($result as $val)
						    <div class="cart_card" id="cart_card_{{ $val->id }}">
							<div class="d-flex align-items-center resflex_column">
								
								<a href="#" class="cart_card_img" style="background-image: url(../media/{{ $val->img_url }});">

								</a> <!-- cart_card_img -->
								<div class="d-flex align-items-center resflex_column">
									<div class="cart_card_product">
										<h4>
											<a href="#" title="Treadmill GF-5030 M">{{ $val->name }}</a>
										</h4>
										<!--<p class="mb-0">{{ filter_var($val->discription,FILTER_SANITIZE_SPECIAL_CHARS) }}</p>-->
									</div> <!-- cart_card_product -->

									<div class="cart_card_count">
										<button type="button" class="minus" onclick="this.nextElementSibling.stepDown();min_real({{ $val->id }});">
											<img src="{{ URL::to('/') }}/images/white_minus.png">
										</button>
										<input type="number"  min="1" id='id_{{ $val->id }}' name='count[{{ $val->id }}]' max="{{ $val->count }}" value="{{ $val->counting }}" readonly class="raz">
										<button type="button" class="plus" onclick="this.previousElementSibling.stepUp();plus_real({{ $val->id }})">
											<img src="{{ URL::to('/') }}/images/white_plus.png"/>
										</button>
									</div> <!-- cart_card_count -->
									<div id='card_price_{{ $val->id }}' class="cart_card_price">
										{{ $val->price }} {{ $val->kurs }}
									</div> <!-- cart_card_price -->
								</div>
								
							</div> <!-- d-flex -->
							<a href="#" class="cart_card_remove" onclick="del_div({{ $val->id }})">
								<img src="{{ URL::to('/') }}/images/cart_card_remove.png" alt="">
							</a> <!-- cart_card_remove -->
						</div> <!-- cart_card -->
						@endforeach
						<script>
						
						    </script>
					</div> <!-- cart_cards -->
					<div class="cart_btn mt-5">
						<a href="#">
							<img src="images/left_arrow.png" class="mr-2" alt="">
							Продолжить покупку
						</a>
					</div> <!-- cart_btn -->
				</div> <!-- col-md-9 -->
				<div class="col-md-3">
					<h3 class="total_summa_title">Общая сумма</h3>
					<div class="total_summa_section">
						<h5>В корзине 3 товара</h5>
						<div class="total_summa_card">
							<span>Стоимость:</span>
							<h6 id="summa">{{ $summa }}</h6>
						</div> <!-- total_summa_card -->
						<div class="total_summa_card bg_white">
							<span>Скидка:</span>
							<h6>0 сум</h6>
						</div> <!-- total_summa_card -->
						<div class="total_summa_card">
							<span>Dostavka:</span>
							<h6>25 000 сум</h6>
						</div> <!-- total_summa_card -->

						<button type="submit" class="order_product_btn main_btn my-4">Оформить заказ</button>
						<div class="order_text">
							Нажимая "Оформить заказ", я соглашаюсь с <a href="#">публичным договором оферты</a>
						</div>
					</div> <!-- total_summa_section -->
					<div class="total_summa_section help_phone mt-3">
						<div class="mr-3">
							<img src="images/help_phone.png" alt="">
						</div>
						
						<div>
							<h5>Телефон поддержки</h5>
							<a href="#">+998 (71) 222-333-1</a>
						</div>
					</div> <!-- total_summa_section -->
				</div> <!-- col-md-3 -->
			</div> <!-- row -->
			</div> <!-- row -->


		</div> <!-- container -->

	</section> <!-- cart_section -->
</form>    
    <!--end-->
@endsection