const selectElement = (element) => document.querySelector(element);

	selectElement('.hamburger').addEventListener('click', () => {
		selectElement('.hamburger').classList.toggle('active');
		selectElement('.nav-list').classList.toggle('active');
	});

$(document).ready(function() {
	$('nav a[href*="#"]').on('click', function() {
		$('html, body').animate(
			{
				scrollTop: $($(this).attr('href')).offset().top - 100
			},
			2000
		);
	});

	$('#up').on('click', function() {
		$('html, body').animate(
			{
				scrollTop: 0
			},
			2000
		);
	});

	AOS.init({
		easing: 'ease',
		duration: 1800,
		once: true,
	});
});
