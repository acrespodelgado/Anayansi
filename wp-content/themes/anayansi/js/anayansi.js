(function ($) {
	$('#openNav').on('click', function () {
		$('#myNav').css("width", "100%");
		$('body').css('overflow', 'hidden');
	});

	$('#closeNav').on('click', function () {
		$('#myNav').css("width", "0%");
		$('body').css('overflow', 'auto');
	});

	$('#go-bottom').click(function () {
		$("html, body").animate({ scrollTop: ($('#go-here').offset().top - 150) }, 700);
	});

	if ($('.transparent').length > 0) {
		$(window).scroll(function () {
			if ($(window).scrollTop() > 0) {
				$('#wrapper-navbar').removeClass('transparent');
			} else {

				$('#wrapper-navbar').addClass('transparent');

			}
		});
	}

	$('.go-to').click(function (e) {
		e.preventDefault();
		target = '#' + $(this).attr('target');
		time = $(this).attr('timeto') ? $(this).attr('timeto') : 700;
		$("html, body").animate({ scrollTop: ($(target).offset().top - 150) }, time);
	});

	$(document).ready(function () {
		$(".owl-carousel").owlCarousel({
			items: 1,
			loop: true,
			nav: true,
			navText: ['<span>Anterior</span><img class="img-fluid" src="/img/icon-arrow-left.svg">', '<span>Siguiente</span><img class="img-fluid" src="/img/icon-arrow-right.svg">']
		});

		if ($(window).scrollTop() > 0) {
			$('#wrapper-navbar').removeClass('transparent');
		}
	});

	$('#anchors a').hover(function () {
		$('.circle.anime-me', this).addClass('animate__animated animate__pulse animate__faster animate__repeat-2');
	}, function () {
		$('.circle.anime-me', this).removeClass('animate__animated animate__pulse animate__faster animate__repeat-2');
	});

	$('#clear').on('click', function (e) {
		e.preventDefault();
		location.reload();
	});

	$('#month-selector, #year-selector').on('change', function() {
		var month = parseInt($('#month-selector').val());
		var year = parseInt($('#year-selector').val());
  
		$.ajax({
		  type: 'POST',
		  url: myAjax.ajax_url,
		  data: {
			action: 'filter_posts',
			month: month,
			year: year
		  },
		  success: function(response) {
            $('.post').remove();
			$('.pagination').remove();
			$('.row-posts').empty();
            //console.log(response);
            if (typeof response === 'string') {
                $('.row-posts').append(response);
            } else if (Array.isArray(response)) {
                response.forEach(function(post) {
                    var div = $("<div class='col-xs-12 col-md-4 post'></div>").append(post);
                    $('.row-posts').append(div);
                });
            } else {
                console.log('Response is not a valid array or string');
            }
        },
        error: function(xhr, status, error) {
            console.log(error);
        }
		});
	});

})(jQuery);