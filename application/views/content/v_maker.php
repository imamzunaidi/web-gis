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

    // var icon1 = L.icon({
    //     iconUrl: ,
    //     iconSize: [30, 95],
    //     iconAnchor: [22, 94],
    //     popupAnchor: [-3, -76]
    // });
    var LeafIcon = L.Icon.extend({
		options: {
			iconSize:     [30, 45],
			iconAnchor:   [22, 94],
			shadowAnchor: [4, 62],
			popupAnchor:  [-3, -76]
		}
	});

	var icon1 = new LeafIcon({iconUrl: '<?= base_url('./assets/gambar/arah.png')?>'});

    var lokasi1 = L.marker([-6.449520, 111.024661], {icon: icon1}).addTo(map)
		.bindPopup("<b>Ini Rumahku!</b><br />Haiii.").openPopup();

    var lokasi2 = L.marker([-6.449146, 111.023608 ]).addTo(map)
        .bindPopup("<b>Ini Lokasi 2</b><br />Haiii.");

    var lokasi3 = L.marker([-6.447658, 111.024598]).addTo(map)
        .bindPopup("<b>Ini Lokasi 3</b><br />Haiii.");
    
    var lokasi4 = L.marker([-6.448013, 111.024917]).addTo(map)
        .bindPopup("<b>Ini Lokasi 4</b><br />Haiii.");
    
    var lokasi5 = L.marker([-6.450372, 111.020042]).addTo(map)
        .bindPopup("<b>Ini Lokasi 5</b><br />Haiii.");

</script>