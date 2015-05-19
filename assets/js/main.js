var main=function(){
	$('.slider').slider({full_width:true});
	$('.row').click(function(){

		$exp = $(this).children('.answers');
		$exp.toggleClass('hidden');
	});
}
$(document).ready(main);