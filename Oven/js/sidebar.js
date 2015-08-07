$(document).ready( function(){
	$('.sidebar-options-container li span').hide();
	$('.sidebar-options-container li').hover( function(){
		$(this).find('span').show();
	});
	
	$('.sidebar-options-container li').hover( function(){
		$(this).find('span').show();
	}, function(){
		$(this).find('span').hide();		
	});
	
});
