<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add custom icons with Markers</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
<link href="https://api.mapbox.com/mapbox-gl-js/v2.12.0/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.12.0/mapbox-gl.js"></script>
<style>
body { margin: 0; padding: 0; }
#map { position: absolute; top: 0; bottom: 0; width: 100%; }
</style>
</head>
<body>
<style>
    .marker {
        display: block;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        padding: 0;
    }
</style>

<div id="map"></div>

<script>
	mapboxgl.accessToken = 'pk.eyJ1IjoibGVlcm95a3UiLCJhIjoiY2w1MTFhYzdrMDFiMzNrbXk1bHFucXNlayJ9.c61PVNZdqDVISnFcUrflFQ';
   
////////////////////////////////////////////////////////
const geojson2 = {
        'type': 'FeatureCollection',
        'features': [
            {
                'type': 'Feature',
                'properties': {
                    'message': 'Foo',
                    'iconSize': [60, 60]
                },
                'geometry': {
                    'type': 'Point',
                    'coordinates':   [31.01081,-17.88582]
                }
            }
        ]
    };
    ////////////////////////////////////////////////////////
    const map = new mapboxgl.Map({
        container: 'map',
        // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
        style: 'mapbox://styles/mapbox/streets-v12',
        center: [26.356292,  -18.758843],
        zoom: 5
    });

    // Add markers to the map.
   

    for (const marker of geojson2.features) {
        // Create a DOM element for each marker.
        const ell = document.createElement('div');
        const width = marker.properties.iconSize[0];
        const height = marker.properties.iconSize[1];
        ell.className = 'marker';
        ell.style.backgroundImage = `url(bus.jpg)`;
        ell.style.width = `${width}px`;
        ell.style.height = `${height}px`;
        ell.style.backgroundSize = '100%';


        ell.addEventListener('click', () => {
           //window.location.href = 'https://www.mapbox.com/';
          // window(marker.properties.href);
           ell.setHTML('<a href = "southlea_nav.php"> donedeal </a>');
        });

        // Add markers to the map.
        new mapboxgl.Marker(ell)
            .setLngLat(marker.geometry.coordinates)
            .addTo(map);
    }
</script>

</body>
</html>

  