$(document).ready(function(){
$(".tab_links").click(function(e){
e.preventDefault();
var tb = $(this).attr("href");
var nm = $(this).children(".hidn").text();
$(".tab_links").removeClass("active_link");
$(this).addClass("active_link");
$("#tb_nm").text(nm);
$("div.tabs").removeClass("active_tab");
$("div"+tb).addClass("active_tab");
});
});