var main=function(){
	$('.button-collapse').sideNav();
	$('.dropdown-button').dropdown();
	$('.slider').slider({full_width:true});
	$('.row').click(function(){

		$exp = $(this).children('.answers');
		$exp.toggleClass('hidden');
	});
	$('.add').click(function(){
		$('.form').removeClass('hidden');
	});


}
$(document).ready(main);