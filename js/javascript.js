$(document).ready(function(){
	$('#hassub').hover(function(){
		$('#submenu').slideToggle(350);
	});
	$("#top").click(function (){
		//$(this).animate(function(){
			$('html, body').animate({
				scrollTop: $("#header").offset().top
			}, 1000);
		//});
	});
});
$(window).load(function() { $(".loader").fadeOut("slow"); });