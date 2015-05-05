var main=function(){
	$('.dropdown-menu').find('form').click(function(e){
		e.stopPropagation();
	});
};

$(document).ready(main);