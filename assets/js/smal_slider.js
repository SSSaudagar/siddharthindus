        $(document).ready(function(){
var indicatr = $('ul.slider_indicator1 li');
var imags = $('.sml_slidr ul li');
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
    tar = $('ul.slider_indicator1 li.active').index();
    tar === lastElem ? tar = 0 : tar = tar+1;
    sliderResponse(tar);
}

var timingRun = setInterval(function() { sliderTiming(); },4000);
function resetTiming() {
    clearInterval(timingRun);
    timingRun = setInterval(function() { sliderTiming(); },4000);
}
            
        });