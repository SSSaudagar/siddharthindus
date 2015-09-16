var locatns = [
    [-1.83124, -78.18341],
    [39.39987, -8.22445],
    [40.46367, -3.74922],
    [39.07421, 21.82431],
    [38.96375, 35.24332],
    [23.88594, 45.07916],
    [21.51258, 55.92325],
    [28.39486, 84.12401],
    [23.68499, 90.35633],
    [7.87305, 80.77180]
    ];    
    
    var len = locatns.length;
    var cen = new google.maps.LatLng(26.33510, 17.22833);
function initialize() {
  var mapProp = {
    center:cen,
    zoom:3,
    scrollwheel:false,
    draggable: false,
    disableDefaultUI:true,
    disableDoubleClickZoom: true,
mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("locations"),mapProp);
  var marker = new Array();
    
for(var i = 0; i<len; i++){
    var marker = new google.maps.Marker({
    position: new google.maps.LatLng(locatns[i][0], locatns[i][1]),
        map: map
    });
}
marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);