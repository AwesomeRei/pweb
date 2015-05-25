var main=function(){
	$('.button-collapse').sideNav();
	$('.dropdown-button').dropdown();
	$('.slider').slider({full_width:true});
	$('.row').click(function(){

		$exp = $(this).children('.answers');
		$exp.toggleClass('hidden');
	});
	$('.modal-trigger').leanModal();
	$('.tabs-wrapper').pushpin({ top: $('.tabs-wrapper').offset().top });
 	$('.collapsible').collapsible({
     	accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
    

}
$(document).ready(main);