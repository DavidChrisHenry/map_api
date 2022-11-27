/** @format */

//javascript.js
//set map options
var myLatLng = { lat: 10.869966746925371, lng: 106.80324721573731 };
var mapOptions = {
  center: myLatLng,
  zoom: 17,
  mapTypeId: google.maps.MapTypeId.ROADMAP,
};

//create map
var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

//create a DirectionsService object to use the route method and get a result for our request
var directionsService = new google.maps.DirectionsService();

//create a DirectionsRenderer object which we will use to display the route
var directionsDisplay = new google.maps.DirectionsRenderer();

//bind the DirectionsRenderer to the map
directionsDisplay.setMap(map);
// choose the choose a transportation method
function initMap() {
  document.getElementById("choose-trans").addEventListener("change", () => {
    calculateAndDisplayRoute(directionsService, directionsRenderer);
  });
}
//define calcRoute function
function calcRoute() {
  //create request
  var selectedMode = document.getElementById("choose-trans").value;
  var request = {
    origin: document.getElementById("from").value,
    destination: document.getElementById("to").value,
    travelMode: google.maps.TravelMode[selectedMode], //WALKING, BYCYCLING, TRANSIT
    unitSystem: google.maps.UnitSystem.METRIC,
  };

  //pass the request to the route method
  directionsService.route(request, function (result, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      //Get distance and time
      const output = document.querySelector("#output");
      output.innerHTML =
        "<div class='alert-info'>Xuất phát: " +
        document.getElementById("from").value +
        ".<br />Đích: " +
        document.getElementById("to").value +
        ".<br /> Quảng đường <i class='fas fa-road'></i> : " +
        result.routes[0].legs[0].distance.text +
        ".<br />Thời gian đi <i class='fas fa-hourglass-start'></i> : " +
        result.routes[0].legs[0].duration.text +
        ".</div>";

      //display route
      directionsDisplay.setDirections(result);
    } else {
      //delete route from map
      directionsDisplay.setDirections({ routes: [] });
      //center map in London
      map.setCenter(myLatLng);

      //show error message
      output.innerHTML =
        "<div class='alert-danger'><i class='fas fa-exclamation-triangle'></i> không thể truy xuất khoảng cách.</div>";
    }
  });
}

//create autocomplete objects for all inputs
var options = {
  types: ["(cities)"],
};

var input1 = document.getElementById("from");
var autocomplete1 = new google.maps.places.Autocomplete(input1, options);

var input2 = document.getElementById("to");
var autocomplete2 = new google.maps.places.Autocomplete(input2, options);
