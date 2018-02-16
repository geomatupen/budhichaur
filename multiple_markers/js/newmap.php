<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title>Google Maps Javascript API example | codeshare by Paul Seal</title> 

      <!--link to bootstrap to reset the css. you could remove this or use your own resets.*/ --> 
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">   

      <style>
         #googleMap { width: 100%; height: 400px; top: 0; left: 0; right: 0; bottom: 0; }
       
         /*style the box*/  
         .gm-style .gm-style-iw {
            background-color: #3C61AD !important;
            top: 0 !important;
            left: 0 !important;
            width: 100% !important;
            height: 100% !important;
            min-height: 120px !important;
            padding-top: 10px;
            display: block !important;
         }    
     
         /*style the p tag*/
         .gm-style .gm-style-iw #google-popup p{
            padding: 10px;
         }
         
     
        /*style the arrow*/
        .gm-style div div div div div div div div {
            background-color: #3C61AD !important;
            padding: 0;
            margin: 0;
            padding: 0;
            top: 0;
            color: #fff;
            font-size: 16px;
        }
        
        /*style the link*/
        .gm-style div div div div div div div div a {
            color: #f1f1f1;
            font-weight: bold;
        }
              
      </style>
  </head>
<body> 

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7exZMUKU7pPZifDhZq1x3qplK1Cxk6AE"></script>
<script>

function initialize() {

//replace this variable with the json you generate in the google maps api wizard tool
//Styles Start
 var styles = [ { "featureType": "administrative", "elementType": "labels.text.fill", "stylers": [ { "color": "#444444" } ] }, { "featureType": "landscape", "elementType": "all", "stylers": [ { "color": "#f2f2f2" } ] }, { "featureType": "poi", "elementType": "all", "stylers": [ { "visibility": "on" } ] }, { "featureType": "poi", "elementType": "geometry.fill", "stylers": [ { "saturation": "-100" }, { "lightness": "57" } ] }, { "featureType": "poi", "elementType": "geometry.stroke", "stylers": [ { "lightness": "1" } ] }, { "featureType": "poi", "elementType": "labels", "stylers": [ { "visibility": "off" } ] }, { "featureType": "road", "elementType": "all", "stylers": [ { "saturation": -100 }, { "lightness": 45 } ] }, { "featureType": "road.highway", "elementType": "all", "stylers": [ { "visibility": "simplified" } ] }, { "featureType": "road.arterial", "elementType": "labels.icon", "stylers": [ { "visibility": "off" } ] }, { "featureType": "transit", "elementType": "all", "stylers": [ { "visibility": "off" } ] }, { "featureType": "transit.station.bus", "elementType": "all", "stylers": [ { "visibility": "on" } ] }, { "featureType": "transit.station.bus", "elementType": "labels.text.fill", "stylers": [ { "saturation": "0" }, { "lightness": "0" }, { "gamma": "1.00" }, { "weight": "1" } ] }, { "featureType": "transit.station.bus", "elementType": "labels.icon", "stylers": [ { "saturation": "-100" }, { "weight": "1" }, { "lightness": "0" } ] }, { "featureType": "transit.station.rail", "elementType": "all", "stylers": [ { "visibility": "on" } ] }, { "featureType": "transit.station.rail", "elementType": "labels.text.fill", "stylers": [ { "gamma": "1" }, { "lightness": "40" } ] }, { "featureType": "transit.station.rail", "elementType": "labels.icon", "stylers": [ { "saturation": "-100" }, { "lightness": "30" } ] }, { "featureType": "water", "elementType": "all", "stylers": [ { "color": "#d2d2d2" }, { "visibility": "on" } ] } ];

//Styles End
   //Create a styled map using the above styles
   var styledMap = new google.maps.StyledMapType(styles,{name: "Styled Map"}); 

   var mapProp = { 
      center:new google.maps.LatLng(52.922592, -1.474605),//set the centre of the map. In my case it is the same as the position of the map pin.
      zoom:14,
      mapTypeId:google.maps.MapTypeId.ROADMAP
   };

   var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

   //Set the map to use the styled map
   map.mapTypes.set('map_style', styledMap);
   map.setMapTypeId('map_style');
   var contentString = '<div id="google-popup">'+
            '<p>Styled Google maps pin popup example by Paul Seal on <a target="_blank" href="http://codeshare.co.uk">codeshare.co.uk</a><br /></p>'+
            '</div>';

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

   //Create a marker pin to add to the map
   var marker;
   marker = new google.maps.Marker({
      position: new google.maps.LatLng(52.922592, -1.474605),//set the position of the pin
      map: map,
      title: "Derby",
      icon: "http://www.codeshare.co.uk/images/blue-pin.png", //if you comment this out or delete it you will get the default pin icon.
      animation:google.maps.Animation.DROP
   });

    marker.addListener('click', function() {
        infowindow.open(map, marker);
    });

}

google.maps.event.addDomListener(window, 'load', initialize);

</script>

<!-- Map goes in the div below -->
<div id="googleMap"></div>

</body>
</html>