<div class="content-wrapper">
    <h2><?= $title?></h2>
    <div class="row">
        <div class="col-md-12">
            <div id="map" style = "width: 100%; height:400px;"></div>
        </div>
    </div>
</div>

<script>

    var map = L.map('map').setView([-6.447686, 111.024596], 13);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
    }).addTo(map);


    // create a red polyline from an array of LatLng points
    var latlngs = [
        [[-6.449613, 111.024693],
        [-6.448888, 111.023919],
        [-6.448096, 111.024989],
        [-6.446345, 111.023058]],
        [[-6.445828, 111.022286],
        [-6.445263, 111.020961],
        [-6.444959, 111.020014]],
    ];

    var polyline = L.polyline(latlngs, {color: 'blue'}).bindPopup("<b>Jalur 1!</b><br />Haiii.").addTo(map);


    var latlngs1 = [
        [-6.447582, 111.024350],
        [-6.448904, 111.025766],
    ];

    var polyline1 = L.polyline(latlngs1, {color: 'red'}).bindPopup("<b>Jalur 2!</b><br />Haiii.").addTo(map);

    
    map.fitBounds(polyline.getBounds());
    // zoom the map to the polyline
   

</script>