
<!-- Load this file into the head 

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"> </script> -->

<!--The map containing div-->
<div class="mapcontainer"><div id="map-canvas" style="height:400px; width:605px;"></div></div>
<script>	
	function initialize() {
//the latitude and longitude of the centre
	  var myLatlng = new google.maps.LatLng(*LAT*, *LNG*); 
	  var mapOptions = {
	   // the level of zoom the map defaults to, and the upper and lower zoom limits of the iframe
	    zoom: 4,
	    minZoom: 6, 
	    maxZoom: 17, 
	    center: myLatlng,
	    mapTypeId: google.maps.MapTypeId.ROADMAP,
	    // Set the Map Controls
		overviewMapControl:true,
		mapTypeControl:false
	  }

	  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
//the path of the your central pin - use an absolute path including domain
	  var image = new google.maps.MarkerImage("http://www.domain.co.uk/images/map-icon.png", null, null, null, new google.maps.Size(35,52));

	  var marker = new google.maps.Marker({
	      position: myLatlng,
	      // animation:google.maps.Animation.BOUNCE,
	      icon:image,
	      map: map,
	      //name of the map
	      title: 'MAP1'
	  });

	  // The Radius Band:
	var local = new google.maps.Circle({
		  center:myLatlng,
		  radius:51265.408,
		  strokeColor:"#0000FF",
		  strokeOpacity:0.8,
		  strokeWeight:0,
		  fillColor:"#710030",
		  fillOpacity:0.3
		  });

		local.setMap(map);

		google.maps.event.addListener(local, 'click', function(ev){
	    	band0infowindow.setPosition(ev.latLng);
	    	band0infowindow.open(map);
		});
		
}

	google.maps.event.addDomListener(window, 'load', initialize);

	</script>
