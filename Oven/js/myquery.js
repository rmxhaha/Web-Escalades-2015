function thirty_pc() {
    var height = $(window).height();
    var thirtypc = height;
    thirtypc = parseInt(thirtypc) + 'px';
    $("div.container#page1").css('height',thirtypc);
}

$(document).ready(function() {
    thirty_pc();
    $(window).bind('resize', thirty_pc);
});

$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});
});