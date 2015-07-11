var myCent = new google.maps.LatLng(15.84970, 74.49767);
function initialize(){
var mapProp = {
center: myCent,
zoom : 14,
scrollwheel:false,
mapTypeId : google.maps.MapTypeId.ROADMAP
};
var map = new google.maps.Map(document.getElementById("location"), mapProp);

var marker = new google.maps.Marker({
position: myCent
});

marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);