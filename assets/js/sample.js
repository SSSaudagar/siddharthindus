$(document).ready(function(){
	$(".tablinks").click(function(e){
		var active_corousl; var active_indicator;
		e.preventDefault();
		$(".tablinks").removeClass("active");
		$(this).addClass("active");
		var current_tb = $(this).attr('href');
		$(".tabs").removeClass("active");
		$(".tabs"+current_tb).addClass("active");
		active_corousl = $(current_tb).find(".pic_sectn");
		active_indicator = $(current_tb).find(".indicators");
			});

	$("#opn_modl").click(function(e){
		e.preventDefault();
		$(".modal_readmore").fadeIn();
	});
	$("#cls_modl").click(function(e){
		e.preventDefault();
		$(".modal_readmore").fadeOut();
	});
});