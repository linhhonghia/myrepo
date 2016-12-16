'use strict';

(function ($) {

	$(document).ready(function () {

		/**
		 * AOS Animate Init
		 */
		$(document).imagesLoaded(function () {
			AOS.init();
		});

		/**
		 * Parallax.js Init
		 */
		$(".parralax").imageScroll({
			container: $('.c-download'),
			mediaWidth: 1920,
			mediaHeight: 800,
			coverRatio: 1,
			holderMaxHeight: 700
		});

		$(".header-parralax").imageScroll({
			container: $('.c-page-header'),
			mediaWidth: 1920,
			mediaHeight: 750,
			coverRatio: 1,
			holderMaxHeight: 500

		});

		var $grid = $('.c-about-masonry .grid').imagesLoaded(function () {
			//init Masonry after all images have loaded
			$grid.masonry({
				itemSelector: '.grid-item',
				fitWidth: true
			});
		});

		$('.btn-toggle-nav').click(function () {
			if ($('.c-wrapper').hasClass('toggle-nav')) {
				$('.c-wrapper').removeClass('toggle-nav')
			} else {
				$('.c-wrapper').addClass('toggle-nav')
			}
		});

		/**
		 * Sticky Menu
		 * @type {Window}
		 */
		var stickyNavigation = $('.c-main-navigation').offset().top;

		var stickyNav = function () {
			var scrollTop = $(window).scrollTop();

			if (scrollTop - stickyNavigation > 1) {
				$('.c-main-navigation').addClass('sticky');
			} else {
				$('.c-main-navigation').removeClass('sticky');
			}
		};

		stickyNav();

		$(window).scroll(function () {
			stickyNav();
		});
	});

	/**
	 * Progress Bar Init
	 */
	var round1 = new ProgressBar.Circle('#round-1', {
		color: '#fff',
		strokeWidth: 5,
		trailWidth: 5,
		trailColor: '#32211c',
		easing: 'easeInOut',
		duration: 2000,
		text: {
			autoStyleContainer: false
		},
		from: {color: '#32211c', width: 5},
		to: {color: '#ffd417', width: 5},

		step: function (state, circle) {
			circle.path.setAttribute('stroke', state.color);
			circle.path.setAttribute('stroke-width', state.width);

			var value = Math.round(circle.value() * 100);
			if (value === 0) {
				circle.setText('');
			} else {
				circle.setText(value);
			}

		}
	});
	var round2 = new ProgressBar.Circle('#round-2', {
		color: '#fff',
		strokeWidth: 4.5,
		trailWidth: 4.5,
		trailColor: '#32211c',
		easing: 'easeInOut',
		duration: 2000,
		text: {
			autoStyleContainer: false
		},
		from: {color: '#32211c', width: 4.5},
		to: {color: '#50d3ab', width: 4.5},

		step: function (state, circle) {
			circle.path.setAttribute('stroke', state.color);
			circle.path.setAttribute('stroke-width', state.width);

			var value = Math.round(circle.value() * 100);
			if (value === 0) {
				circle.setText('');
			} else {
				circle.setText(value);
			}

		}
	});
	var round3 = new ProgressBar.Circle('#round-3', {
		color: '#fff',
		strokeWidth: 4,
		trailWidth: 4,
		trailColor: '#32211c',
		easing: 'easeInOut',
		duration: 2000,
		text: {
			autoStyleContainer: false
		},
		from: {color: '#32211c', width: 4},
		to: {color: '#4fb9fc', width: 4},

		step: function (state, circle) {
			circle.path.setAttribute('stroke', state.color);
			circle.path.setAttribute('stroke-width', state.width);

			var value = Math.round(circle.value() * 100);
			if (value === 0) {
				circle.setText('');
			} else {
				circle.setText(value);
			}

		}
	});
	var round4 = new ProgressBar.Circle('#round-4', {
		color: '#fff',
		strokeWidth: 3.5,
		trailWidth: 3.5,
		trailColor: '#32211c',
		easing: 'easeInOut',
		duration: 2000,
		text: {
			autoStyleContainer: false
		},
		from: {color: '#32211c', width: 3.5},
		to: {color: '#8cbd14', width: 3.5},

		step: function (state, circle) {
			circle.path.setAttribute('stroke', state.color);
			circle.path.setAttribute('stroke-width', state.width);

			var value = Math.round(circle.value() * 100);
			if (value === 0) {
				circle.setText('');
			} else {
				circle.setText(value);
			}
		}

	});


	var fontFamily = '"Raleway", Helvetica, sans-serif';
	var fontSize = "36px";

	round1.text.style.fontFamily = fontFamily;
	round1.text.style.fontSize = fontSize;

	round2.text.style.fontFamily = fontFamily;
	round2.text.style.fontSize = fontSize;

	round3.text.style.fontFamily = fontFamily;
	round3.text.style.fontSize = fontSize;

	round4.text.style.fontFamily = fontFamily;
	round4.text.style.fontSize = fontSize;

	var section = $('#round-1');

	$(document).bind('scroll', function (ev) {
		var scrollOffset = $(document).scrollTop();
		var containerOffset = section.offset().top - window.innerHeight;
		if (scrollOffset > containerOffset) {
			round1.animate(0.8);
			round2.animate(0.85);
			round3.animate(0.9);
			round4.animate(0.95);
			$(document).unbind('scroll');
		}
	});

})(jQuery);