	if ($('#map-contact').length) {
		var map = L.map('map-contact', {
			zoom: 18,
			maxZoom: 100,
			tap: false,
			gestureHandling: true,
			center: [-29.315880,27.491181]
		});

		map.scrollWheelZoom.disable();

		var OpenStreetMap_Mapnik = L.tileLayer('https://{s}.tile.openstreetmap.de/tiles/osmde/{z}/{x}/{y}.png', {
			scrollWheelZoom: false,
			attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
		}).addTo(map);

		var icon = L.divIcon({
			html: '<i class="fa fa-building"></i>',
			iconSize: [50, 50],
			iconAnchor: [50, 50],
			popupAnchor: [-20, -42]
		});

		var marker = L.marker([-29.315880,27.491181], {
			icon: icon
		}).addTo(map);
	}
