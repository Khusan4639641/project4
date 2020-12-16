$(() => {

	//On Scroll Functionality
	$(window).scroll(() => {
		var windowTop = $(window).scrollTop();
		windowTop > 80 ? $('.navbar_inner1').addClass('navbar_inner1_active') : $('.navbar_inner1').removeClass('navbar_inner1_active');
		windowTop > 185 ? $('.cabinet_block').addClass('active') : $('.cabinet_block').removeClass('active');
	});

	var cardName = document.getElementById('card-name');



	//Click Logo To Scroll To Top
	$('#logo').on('click', () => {
		$('html,body').animate({
			scrollTop: 0
		}, 500);
	});
	$(".toggle-password").click(function () {

		$(this).toggleClass("password-show password-hide");
		var input = $($(this).attr("toggle"));
		if (input.attr("type") == "password") {
			input.attr("type", "text");
		} else {
			input.attr("type", "password");
		}
	});

	//Smooth Scrolling Using Navigation Menu
	$('a[href*="#"].anim').on('click', function (e) {
		$('html,body').animate({
			scrollTop: $($(this).attr('href')).offset().top - 100
		}, 1000);
		e.preventDefault();
	});


});

$(document).ready(function () {


	$('.m_categories_section_btn').click(function(){
		$('#nav-icon4').toggleClass('open');
	});
	$(".m_categories_section_btn").on("click", () => {
		$(".m_categories_menu").toggleClass("active");
	});
	$(".search_icon_img").on("click", () => {
		$(".search_section").toggleClass("active");
	});
	$(".favourites_product_btn").on("click", () => {
		$('.favourites_product_btn').toggleClass("active");
	});
	$(".product_pills .nav-link").on("click", () => {
		e.preventDefault();
	});

	$(document).bind("click", function (e) {
		var $clicked = $(e.target);

		// if (!$clicked.parents().hasClass("search_group"))
		// 	$(".search_section").removeClass("active");
	});



	var cardName = document.getElementById('card-name');
	var cardNumber = document.getElementById('card-number');
	var cardExpiration = document.getElementById('card-expires');

	cardName.onkeyup = function () {
		document.getElementById('card-name-display').innerHTML = cardName.value;
	}

	cardNumber.onkeyup = function () {
		document.getElementById('card-number-display').innerHTML = cardNumber.value;
	}

	cardExpiration.onkeyup = function () {
		document.getElementById('card-expires-display').innerHTML = cardExpiration.value;
	};


	var element = document.getElementById('card-number');
	var maskOptions = {
		mask: '0000 0000 0000 0000'
	};

	var element2 = document.getElementById('card-expires');
	var maskOptions2 = {
		mask: '00/00'
	};
	var mask = IMask(element, maskOptions);
	var mask = IMask(element2, maskOptions2);


});


function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$("#imagePreview").css(
				"background-image",
				"url(" + e.target.result + ")"
			);
			$("#imagePreview").hide();
			$("#imagePreview").fadeIn(650);
		};
		reader.readAsDataURL(input.files[0]);
	}
}
$("#imageUpload").change(function () {
	readURL(this);
});

function readURL2(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$("#imagePreview2").css(
				"background-image",
				"url(" + e.target.result + ")"
			);
			$("#imagePreview2").hide();
			$("#imagePreview2").fadeIn(650);
		};
		reader.readAsDataURL(input.files[0]);
	}
}
$("#imageUpload2").change(function () {
	readURL2(this);
});

function readURL3(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$("#imagePreview3").css(
				"background-image",
				"url(" + e.target.result + ")"
			);
			$("#imagePreview3").hide();
			$("#imagePreview3").fadeIn(650);
		};
		reader.readAsDataURL(input.files[0]);
	}
}
$("#imageUpload3").change(function () {
	readURL3(this);
});

$(document).ready(function () {

	var panel = $('.signin_pills_panel').css('width');

	var width = panel.replace('px', '');
	var i = 0;

	$('.signin_pills li').each(function () {
		i++;
	});

	var val1 = width / i;

	$('.signin_pills_panel').css('width', val1 + 'px');

	$('.signin_pills li:nth-child(1)').on('click', function () {

		$('.signin_pills_panel').animate({
			left: '4px'
		})
	});

	$('.signin_pills li:nth-child(2)').on('click', function () {

		$('.signin_pills_panel').animate({
			left: val1 + 'px'
		})
	});



});























var swiper = new Swiper('.header_slider', {
	navigation: {
		nextEl: '.swiper-button-next1',
		prevEl: '.swiper-button-prev1',
	},
	effect: "fade"
});
var swiper = new Swiper('.header_slider_banner', {
	loop: true,
	spaceBetween: 10,
	autoplay: {
		delay: 3250,
		disableOnInteraction: false,
	},
	pagination: {
		el: '.header_slider_banner_pagination',
		clickable: true,
	},

});
var swiper = new Swiper('.header_slider_banner2', {
	loop: true,
	spaceBetween: 10,
	autoplay: {
		delay: 3500,
		disableOnInteraction: false,
	},
	pagination: {
		el: '.header_slider_banner_pagination2',
		clickable: true,
	},
});
var swiper = new Swiper('.goods_swiper', {
	slidesPerView: 5,
	slidesPerColumn: 2,
	spaceBetween: 20,
	navigation: {
		nextEl: '.swiper-button-next2',
		prevEl: '.swiper-button-prev2',
	},
	breakpoints: {
		310: {
			slidesPerView: 2,
			spaceBetween: 15,
			slidesPerColumn: 2,
		},
		640: {
			slidesPerView: 2,
			spaceBetween: 20,
		},
		768: {
			slidesPerView: 3,
			spaceBetween: 20,
		},
		1024: {
			slidesPerView: 5,
			spaceBetween: 20,
		},
	},
});

var swiper = new Swiper('.goods_swiper2', {
	slidesPerView: 5,
	slidesPerColumn: 2,
	spaceBetween: 20,
	navigation: {
		nextEl: '.swiper-button-next3',
		prevEl: '.swiper-button-prev3',
	},
	breakpoints: {
		320: {
			slidesPerView: 2,
			spaceBetween: 15,
			slidesPerColumn: 2,
		},
		640: {
			slidesPerView: 2,
			spaceBetween: 20,
		},
		768: {
			slidesPerView: 3,
			spaceBetween: 20,
		},
		1024: {
			slidesPerView: 5,
			spaceBetween: 20,
		},
	},
});

var swiper = new Swiper('.goods_swiper3', {
	slidesPerView: 5,
	slidesPerColumn: 2,
	spaceBetween: 20,
	navigation: {
		nextEl: '.swiper-button-next4',
		prevEl: '.swiper-button-prev4',
	},
	breakpoints: {
		320: {
			slidesPerView: 2,
			spaceBetween: 15,
			slidesPerColumn: 2,
		},
		640: {
			slidesPerView: 2,
			spaceBetween: 20,
			slidesPerColumn: 2,
		},
		768: {
			slidesPerView: 3,
			spaceBetween: 20,
			slidesPerColumn: 2,
		},
		1024: {
			slidesPerView: 5,
			spaceBetween: 20,
			slidesPerColumn: 2,
		},
	},
});


var galleryThumbs = new Swiper('.gallery-thumbs', {
	spaceBetween: 10,
	slidesPerView: 4,
	freeMode: true,
	watchSlidesVisibility: true,
	watchSlidesProgress: true,
	direction: 'vertical',
	breakpoints: {
		320: {
			slidesPerView: 4,
			spaceBetween: 10,
			direction: 'horizontal',
		},
		768: {
			spaceBetween: 10,
			slidesPerView: 4,
		},
	}
});
var galleryTop = new Swiper('.gallery-top', {
	spaceBetween: 20,
	navigation: {
		nextEl: '.swiper_button_next_top',
		prevEl: '.swiper_button_prev_top',
	},
	thumbs: {
		swiper: galleryThumbs
	}
});