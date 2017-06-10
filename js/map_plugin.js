var addressMap;
var latMap;
var longMap;
var positioningLat;
var positioningLong;

function setAddress() {
    addressMap = document.getElementById('adresses_map').value.split(';')[0];
    latMap = +document.getElementById('adresses_map').value.split(';')[1].split(',')[0];
    longMap = +document.getElementById('adresses_map').value.split(';')[1].split(',')[1];

    document.getElementById('selected_address').innerHTML = '<p>'+addressMap+'</p>';

    init_map(addressMap,latMap,longMap);
}                
document.getElementById('adresses_map').addEventListener("change", setAddress, false);
setAddress();

function init_map(addressMap,latMap,longMap){
    if (window.innerWidth >=320 && window.innerWidth <=767) {
        positioningLat = 0.0025;
        positioningLong = 0;
    }
    else if (window.innerWidth >=767) {
        positioningLat = 0.001;
        positioningLong = 0.005;
    }
    var myOptions = {
        zoom:16,
        center:new google.maps.LatLng(latMap+positioningLat,longMap-positioningLong),
        scrollwheel: false,      
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
    markerImage = new google.maps.MarkerImage(
        '/wp-content/uploads/2017/05/pin-icon-blue.png',
        new google.maps.Size(61,74),
        new google.maps.Point(0,0)
    );
    marker = new google.maps.Marker({
        map: map,
        icon: markerImage,
        position: new google.maps.LatLng(latMap,longMap)
    });
    /*infowindow = new google.maps.InfoWindow({content:'<p style="text-align: center;"><strong><img class="logo_map" src="/wp-content/themes/thomaslawplc/assets/images/logo-th.png" alt="Thomas Law | Civil Litigation and Consumer Protection Attorneys"><br><br>The Thomas Law Office PLC</strong><br><br>'+addressMap+'</p>'});
    google.maps.event.addListener(marker, 'click', function(){
        infowindow.open(map,marker);
    });
    infowindow.open(map,marker);*/
}
google.maps.event.addDomListener(window, 'load', init_map(addressMap,latMap,longMap));