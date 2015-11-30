var myCent = new google.maps.LatLng(35.84170, 14.41237);
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