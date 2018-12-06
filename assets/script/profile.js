$(document).ready(function(){
	var dataRate = $('.my-rating').attr('data-rated');
	$(".my-rating").starRating({
		readOnly:true, 
		initialRating:dataRate,
		activeColor:'#2196f4',
		ratedColor:'#2196f4',
		useGradient:'',
		starSize: 20
	});
});
$('.testing_settings').click(function(){
	$('.second_tab').fadeIn();
	$('.first_tab').fadeOut();
});
$('.userCloser').click(function(){
	$('.second_tab').fadeOut();
	$('.first_tab').fadeIn();
});