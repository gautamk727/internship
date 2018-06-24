<div id="map" style="width:100%;height:450px;background:yellow"></div>
    <script>
      function initMap() {
        var uluru = {lat: 28.503795, lng: 77.038475};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBp12_n3Tsip-Ieu3Csqyoxi19-_byTRI0&callback=initMap">
    </script>
