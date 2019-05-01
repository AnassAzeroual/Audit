function initMap() {

        var start = document.getElementById('start');
        var end = document.getElementById('end');
        var autoComplete = new google.maps.places.Autocomplete(start);
        var autoComplete = new google.maps.places.Autocomplete(end);

        var longlat={lat: 48.862725, lng: 2.287592000000018};
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: longlat
        });
        var marker = new google.maps.Marker({
          position: longlat,
          map: map,
          title: 'Hello Paris!'
        });

        directionsDisplay.setMap(map);

        document.getElementById('submit').addEventListener('click', function() {
            document.getElementById('directions-panel').innerHTML="";
            document.getElementById('addreses').innerHTML="";
            document.getElementById('road').innerHTML="";
            document.getElementById('time').innerHTML="";
            document.getElementById('container_feedback').classList.remove("Cshadow");
            document.getElementById('container_feedback').style.display="block";
          
          var Vstar = document.getElementById('start').value;
          var Vend = document.getElementById('end').value;
          if (Vstar == "" || Vend == "") {
              document.getElementById('container_feedback').classList.add("warningMess");
              document.getElementById('feed').innerHTML="Le nom doit être rempli !";
              document.getElementById('hide_road').style.visibility="hidden";
              document.getElementById('hide_time').style.visibility="hidden";
              return false;
          }
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        });
      }
      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        directionsService.route({
          origin: document.getElementById('start').value,
          destination: document.getElementById('end').value,
          optimizeWaypoints: true,
          travelMode: document.getElementById('input0').value
        }, function(response, status) {
          
            var nameRoute = document.getElementById('directions-panel');
            var startAddrsend = document.getElementById('addreses');
            var distancinKm = document.getElementById('road');
            var times = document.getElementById('time');
            var parnt = document.getElementById('container_feedback');
                parnt.style.display="block";
            var feeds =document.getElementById('feed');
                feeds.innerHTML="";
            nameRoute.innerHTML = '';
            startAddrsend.innerHTML = '';
            distancinKm.innerHTML = '';
            times.innerHTML = '';
            document.getElementById('hide_road').style.visibility="hidden";
              document.getElementById('hide_time').style.visibility="hidden";
                                  // Add class warning Message if it's not ok !
                
                



          if (status === 'OK') {
            document.getElementById('directions-panel').classList.remove("warningMess"); // remove class warning if it's ok !
            directionsDisplay.setDirections(response);

            settimeouts(); // time out in 3s
            function settimeouts() {
                  setTimeout(function(){ names(); }, 3000);
              }
            function names() {
            var route = response.routes[0];
                 parnt.classList.remove("warningMess");
                 parnt.classList.add("Cshadow"); 

            // For each route, display summary information.
              for (var i = 0; i < route.legs.length; i++) {
                var routeSegment = i + 1;
                nameRoute.innerHTML += '<b>Route Segment: ' + routeSegment + '</b><br>';
                startAddrsend.innerHTML += route.legs[i].start_address + ' to ';
                startAddrsend.innerHTML += route.legs[i].end_address   + '<br>';
                distancinKm.innerHTML += route.legs[i].distance.text + '<br><br>';
                times.innerHTML += route.legs[i].duration.text + '<br>';
              }
                  document.getElementById('hide_road').style.visibility="visible";
                  document.getElementById('hide_time').style.visibility="visible";
                                  return 0;
            }


          } else {
                  document.getElementById('hide_road').style.visibility="hidden";
                  document.getElementById('hide_time').style.visibility="hidden";
            /*window.alert('Directions request failed due to ' + status);*/
            settimeouts2(); // time out in 3s
            function settimeouts2() {
                  setTimeout(function(){ gogo(); }, 3000);
              }
              function gogo() {
                /*var doc = document.getElementById('container_feedback');*/
                
                
                initMap(); // re initialisation du Map if it's not ok !
                document.getElementById('start').value=""; // clear inputs '#Start' and the '#End' !
                document.getElementById('end').value="";  // ..
                parnt.classList.remove("Cshadow");
                parnt.classList.add("warningMess");
                feeds.innerHTML="Aucun itinéraire trouvé.";

                return 0;
              }
            
          }
        });
      }