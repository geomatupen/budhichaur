// *
// * Add multiple markers
// * 2013 - en.marnoto.com
// *

// necessary variables
var map;
var infoWindow;

// markersData variable stores the information necessary to each marker
var markersData = [

   {
      lat: 27.7089559,
      lng: 85.2911132,
      image: "images/slider.jpg",
      website: "www.website.com",
      email: "abc@gmail.com",
      phone: "123456789",
      address: "kathmandu",
      type: "city",
      name: "kathmandu centre",
      attr1:"kathmandu centre",
      attr2: "kathmandu centre",
      postalCode: "00977" // don't insert comma in the last item of each marker
   },
   {
      lat: 27.696101,
      lng: 85.353472,
      image: "images/slider.jpg",
      website: "www.website.com",
      email: "abc@gmail.com",
      phone: "123456789",
      address: "kathmandu",
      type: "hospital",
      name: "Kathmandu Medical College",
      attr1:"Kathmandu Nepal",
      attr2: "Bagmati zone",
      postalCode: "00977" // don't insert comma in the last item of each marker
   },
   {
      lat: 27.699744,
      lng:  85.323536,
      image: "images/slider.jpg",
      website: "www.website.com",
      email: "abc@gmail.com",
      phone: "123456789",
      address: "kathmandu",
      type: "Government office",
      name: "Home ministry office",
      attr1:"Kathmandu Nepal",
      attr2: "Bagmati zone",
      postalCode: "00977" // don't insert comma in the last item of each marker
   },
   {
      lat: 27.712457,
      lng: 85.291228,
      image: "images/slider.jpg",
      website: "www.website.com",
      email: "abc@gmail.com",
      phone: "123456789",
      address: "kathmandu",
      type: "hospital",
      name: "birendra sainik hospital",
      attr1:"Kathmandu Nepal",
      attr2: "Bagmati zone",
      postalCode: "00977" // don't insert comma in the last item of each marker
   },
   {
      lat: 27.715415,
      lng: 85.349253,
      image:"images/slider.jpg",
      website: "www.website.com",
      email: "abc@gmail.com",
      phone: "123456789",
      address: "kathmandu",
      type: "temple",
      name: "pashupati nath",
      attr1:"Kathmandu Nepal",
      attr2: "Bagmati zone",
      postalCode: "00977" // don't insert comma in the last item of each marker
   } // don't insert comma in the last item
];


function initialize() {
   var mapOptions = {
      center: new google.maps.LatLng(27.7089559, 85.2911132),
      zoom: 16,
      panControl: false,
      scrollwheel: false,
      mapTypeId: 'roadmap',
   };

   map = new google.maps.Map(document.getElementById('map'), mapOptions);

   // a new Info Window is created
   infoWindow = new google.maps.InfoWindow();



   // Event that closes the Info Window with a click on the map
   google.maps.event.addListener(map, 'click', function() {
      infoWindow.close();
   });

   // Finally displayMarkers() function is called to begin the markers creation
   displayMarkers();
}
google.maps.event.addDomListener(window, 'load', initialize);


// This function will iterate over markersData array
// creating markers with createMarker function
function displayMarkers(){

   // this variable sets the map bounds according to markers position
   var bounds = new google.maps.LatLngBounds();
   
   // for loop traverses markersData array calling createMarker function for each marker 
   for (var i = 0; i < markersData.length; i++){

      var latlng = new google.maps.LatLng(markersData[i].lat, markersData[i].lng);
      var image = markersData[i].image;
      var website = markersData[i].website;
      var email = markersData[i].email;
      var phone = markersData[i].phone;
      var address = markersData[i].address;
      var type = markersData[i].type;
      var name = markersData[i].name;
      var attr1 = markersData[i].attr1;
      var attr2 = markersData[i].attr2;
      var postalCode = markersData[i].postalCode;

      createMarker(latlng, image, website, email, phone, address, type, name, attr1, attr2, postalCode);

      // marker position is added to bounds variable
      bounds.extend(latlng);  
   }

   // Finally the bounds variable is used to set the map bounds
   // with fitBounds() function
   map.fitBounds(bounds);
}

// This function creates each marker and it sets their Info Window content
function createMarker(latlng, image, website, email, phone, address, type, name, attr1, attr2, postalCode){
   var markerImage = 'marker.png';
   var marker = new google.maps.Marker({
      map: map,
      position: latlng,
      icon: markerImage,
      title: name
   });

   // This event expects a click on a marker
   // When this event is fired the Info Window content is created
   // and the Info Window is opened.
   google.maps.event.addListener(marker, 'click', function() {
      
      // Creating the content to be inserted in the infowindow
      var iwContent =
       '<div class="popup-panel arrow_box" id="popup-container">'+
      '<div class="row">'+
      '<div class="col-md-6 blog-panel1">'+
        '<a href="#" class="thumbnail1">'+
            '<img src="'+image+'" alt="popupimage">'+
        '</a>'+
      '</div>'+
      '<div class="fancy col-md-6">' +
    '<ul class="list-group">'+
     '<li class="list-group-item">'+ type +'</li>'+
      '<li class="list-group-item">'+ name +'</li>'+
      '<li class="list-group-item">'+ attr1 +'</li>'+
      '<li class="list-group-item">'+ attr2 +'</li>'+
      '<li class="list-group-item">'+ postalCode +'</li>'+
    '</ul>'+
      '</div>'+
    '</div>'+
    '<hr class="horz">'+
    '<div class="row">'+
      '<div class="col-md-12">'+
        '<p class="tiny">'+
          '<i class="fa fa-info-circle" aria-hidden="true"></i> Website: <a href="#">' +website+ '</a>'+
          '| <i class="fa fa-envelope" aria-hidden="true"></i> E-mail: <a href="#">' +email+ '</a>'+
          '| <i class="fa fa-phone-square" aria-hidden="true"></i> Contact: <a href="#">' +phone+ '</a>'+
          '| <i class="fa fa-home" aria-hidden="true"></i> Address: <a href="#">' +address+ '</a>'+
        '</p>'+
      '</div>'+
    '</div>'+  
    '<hr class="horz">'+                     
                                    '<ul class="nav nav-tabs" role="tablist">'+
                                        '<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>'+
                                        '<li role="presentation"><a href="#about" aria-controls="profile" role="tab" data-toggle="tab">About</a></li>'+
                                        '<li role="presentation"><a href="#profile" aria-controls="messages" role="tab" data-toggle="tab">Profile</a></li>'+
                                        '<li role="presentation"><a href="#others" aria-controls="settings" role="tab" data-toggle="tab">Others</a></li>'+
                                    '</ul>'+
                                    '<!-- Tab panes -->'+
                                    '<div class="tab-content">'+
                                        '<div role="tabpanel" class="tab-pane active" id="home">This is the HOME page.</div>'+
                                        '<div role="tabpanel" class="tab-pane" id="about">This is the ABOUT page..</div>'+
                                        '<div role="tabpanel" class="tab-pane" id="profile">This is the PROFILE page.</div>'+
                                        '<div role="tabpanel" class="tab-pane" id="others">This is the OTHERS page.</div>'+
                                    '</div>'+                       
'</div>';
         
      
      // including content to the Info Window.
      infoWindow.setContent(iwContent);

      // opening the Info Window in the current map and at the current marker location.
      infoWindow.open(map, marker);
   });
}
