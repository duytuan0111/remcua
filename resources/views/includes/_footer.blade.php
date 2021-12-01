<footer>
	<p>@ 2020 RÈM CỬA DUY TÍN. ALL RIGHTS RESERVED.</p>
</footer>
</body>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
<script type="text/javascript">
	$('.dropdown-toggle').click(function(e) {
		if ($(document).width() > 768) {
			e.preventDefault();

			var url = $(this).attr('href');


			if (url !== '#') {

				window.location.href = url;
			}

		}
	});
	jQuery(document).ready(function($) {
		var btn = $('#button');

		$(window).scroll(function() {
			if ($(window).scrollTop() > 300) {
				btn.addClass('show');
			} else {
				btn.removeClass('show');
			}
		});

		btn.on('click', function(e) {
			e.preventDefault();
			$('html, body').animate({scrollTop:0}, '300');
		});

		$('.slider-nav').slick({
			infinite: true,
			arrows: true,
			autoarrows: true,
			slidesToShow: 4,
			slidesToScroll: 1,
			prevArrow: '<div class="d-class-slide-prev"><i class="fa fa-2x fa-chevron-left" aria-hidden="true"></i></div>',
			nextArrow: '<div class="d-class-slide-next"><i class="fa fa-2x fa-chevron-right" aria-hidden="true"></i></div>',
			responsive: [{
				breakpoint: 1024,
				settings: {
					infinite: true,
					arrows: true,
					draggable: false,
					slidesToShow: 3,
					slidesToScroll: 1,
                // autoplay: 5000,
                prevArrow: '<div class="d-class-slide-prev"><i class="fa fa-2x fa-chevron-left" aria-hidden="true"></i></div>',
                nextArrow: '<div class="d-class-slide-next"><i class="fa fa-2x fa-chevron-right" aria-hidden="true"></i></div>',
            }
        },
        {
        	breakpoint: 480,
        	settings: {
        		infinite: true,
        		arrows: true,
        		draggable: false,
        		slidesToShow: 1,
        		slidesToScroll: 1,
                // autoplay:5000,
                prevArrow: '<div class="d-class-slide-prev"><i class="fa fa-2x fa-chevron-left" aria-hidden="true"></i></div>',
                nextArrow: '<div class="d-class-slide-next"><i class="fa fa-2x fa-chevron-right" aria-hidden="true"></i></div>',
            }
        }
        ]
    });


	});
	jQuery(document).ready(function($) {
		$('.slider-nav-1').slick({
			infinite: true,
			arrows: true,
			autoarrows: true,
			slidesToShow: 4,
			slidesToScroll: 1,
			prevArrow: '<div class="d-class-slide-prev"><i class="fa fa-2x fa-chevron-left" aria-hidden="true"></i></div>',
			nextArrow: '<div class="d-class-slide-next"><i class="fa fa-2x fa-chevron-right" aria-hidden="true"></i></div>',
			responsive: [{
				breakpoint: 1024,
				settings: {
					infinite: true,
					arrows: true,
					draggable: false,
					slidesToShow: 3,
					slidesToScroll: 1,
                // autoplay: 5000,
                prevArrow: '<div class="d-class-slide-prev"><i class="fa fa-2x fa-chevron-left" aria-hidden="true"></i></div>',
                nextArrow: '<div class="d-class-slide-next"><i class="fa fa-2x fa-chevron-right" aria-hidden="true"></i></div>',
            }
        },
        {
        	breakpoint: 480,
        	settings: {
        		infinite: true,
        		arrows: true,
        		draggable: false,
        		slidesToShow: 1,
        		slidesToScroll: 1,
                // autoplay:5000,
                prevArrow: '<div class="d-class-slide-prev"><i class="fa fa-2x fa-chevron-left" aria-hidden="true"></i></div>',
                nextArrow: '<div class="d-class-slide-next"><i class="fa fa-2x fa-chevron-right" aria-hidden="true"></i></div>',
            }
        }
        ]
    });


	});
</script>
</html>