$(document).ready(function(){
var indicatr = $('ul.slider_indicator li');
var imags = $('.pic_slidr ul li');
var lastElem = indicatr.length-1;
var tar;

indicatr.first().addClass('active');
imags.hide().first().show();

function sliderResponse(tar) {
    imags.fadeOut(800).eq(tar).fadeIn(800);
    indicatr.removeClass('active').eq(tar).addClass('active');
}

indicatr.click(function() {
    if ( !$(this).hasClass('active') ) {
        tar = $(this).index();
        sliderResponse(tar);
        resetTiming();
    }
});

function sliderTiming() {
    tar = $('ul.slider_indicator li.active').index();
	console.log('index is:'+tar);
    tar === lastElem ? tar = 0 : tar = tar+1;
    sliderResponse(tar);
	if(tar>3){
		$(".extrusion_cont").removeClass("active");
		$("#extrusion2_content").addClass("active");
	}
	else{
		$(".extrusion_cont").removeClass("active");
		$("#extrusion1_content").addClass("active");
	}
}

var timingRun = setInterval(function() { sliderTiming(); },4000);
function resetTiming() {
    clearInterval(timingRun);
    timingRun = setInterval(function() { sliderTiming(); },4000);
}
            
        });