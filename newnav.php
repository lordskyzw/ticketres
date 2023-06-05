<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Fit to the bounds of a LineString</title>
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

    .btn-control {
        font: bold 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
        background-color: #3386c0;
        color: #fff;
        position: absolute;
        top: 20px;
        left: 50%;
        z-index: 1;
        border: none;
        width: 200px;
        margin-left: -100px;
        display: block;
        cursor: pointer;
        padding: 10px 20px;
        border-radius: 3px;
    }

    .btn-control:hover {
        background-color: #4ea0da;
    }
</style>
<div id="map"></div>
<button id="zoomto" class="btn-control">Zoom to bounds</button>

<script>
	mapboxgl.accessToken = 'pk.eyJ1IjoibGVlcm95a3UiLCJhIjoiY2w1MTFhYzdrMDFiMzNrbXk1bHFucXNlayJ9.c61PVNZdqDVISnFcUrflFQ';
    // A GeoJSON object with a LineString route from the White House to Capitol Hill
    const geojson = {
        'type': 'FeatureCollection',
        'features': [
            {
                'type': 'Feature',
                'geometry': {
                    'type': 'LineString',
                    'properties': {},
                    'coordinates': [
         [31.00826,-17.83531],
          [31.00765,-17.83446],
          [31.00766,-17.83445],
          [31.00801,-17.83421],
         [ 31.00802,-17.8342],
          [31.00827,-17.83408],
          [31.00834,-17.83405],
          [31.00853,-17.83398],
          [31.00855,-17.83395],
          [31.00859,-17.83389],
          [31.00863,-17.83379],
          [31.00865,-17.83367],
          [31.00866,-17.83314],
          [31.00866,-17.83286],
          [31.00866,-17.83246],
          [31.00866,-17.83197],
          [31.00866,-17.83187],
          [31.00868,-17.83083],
          [31.00868,-17.83065],
          [31.00869,-17.83041],
         [ 31.0087,-17.83016],
         [ 31.0087,-17.83011],
          [31.00872,-17.82913],
          [31.00867,-17.82896],
          [31.00868,-17.82883],
         [ 31.00964,-17.8288],
         [ 31.01032,-17.8287],
          [31.01048,-17.82868],
          [31.01119,-17.82856],
          [31.01204,-17.82836],
          [31.01254,-17.82828],
          [31.01344,-17.82809],
          [31.01503,-17.82781],
          [31.01512,-17.82779],
         [ 31.01716,-17.8274],
         [ 31.01777,-17.8273],
          [31.01804,-17.82728],
          [31.01823,-17.82728],
         [ 31.01852,-17.8273],
          [31.01859,-17.82731],
         [ 31.01898,-17.8274],
          [31.01933,-17.82749],
         [ 31.02008,-17.8277],
          [31.02077,-17.82789],
          [31.02126,-17.82802],
          [31.02297,-17.82852],
          [31.02393,-17.82875],
         [ 31.02412,-17.8288],
          [31.02512,-17.82885],
          [31.02589,-17.82889],
         [ 31.02596,-17.8289],
          [31.02652,-17.82894],
          [31.02694,-17.82897],
          [31.02714,-17.82899],
        [  31.02737,-17.829],
         [ 31.02855,-17.8291],
          [31.02892,-17.82913],
          [31.02944,-17.82917],
          [31.03061,-17.82927],
          [31.03165,-17.82935],
          [31.03283,-17.82944],
          [31.03301,-17.82944],
         [ 31.03377,-17.8295],
          [31.03434,-17.82955],
          [31.03446,-17.82956],
          [31.03522,-17.82955],
          [31.03608,-17.82952],
          [31.03677,-17.82944],
          [31.03773,-17.82926],
          [31.03944,-17.82885],
      [    31.04,-17.8287],
          [31.04069,-17.82853],
          [31.04133,-17.82839],
          [31.04135,-17.82838],
          [31.04252,-17.82809],
          [31.04264,-17.82806],
          [31.04266,-17.82815],
         [ 31.04274,-17.8285],
          [31.04293,-17.82935],
          [31.04325,-17.83053],
          [31.04325,-17.83055],
          [31.04326,-17.83053],
         [ 31.04383,-17.8304],
          [31.04435,-17.83027],
          [31.04472,-17.83018],
          [31.04517,-17.83007],
          [31.04524,-17.83004],
          [31.04573,-17.82992],
          [31.04578,-17.82991],
          [31.04614,-17.82982],
          [31.04612,-17.83054],
          [31.04609,-17.83138],
         [ 31.04609,-17.8314],
         [ 31.04589,-17.8314],
        [  31.0458,-17.8314]
                      
                    ]
                }
            }
        ]
    };

    const map = new mapboxgl.Map({
        container: 'map',
        // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
        style: 'mapbox://styles/mapbox/light-v11',
        center: [31.04134651060202, -17.83493680198602],
        zoom: 12
    });

    map.on('load', () => {
        map.addSource('LineString', {
            'type': 'geojson',
            'data': geojson
        });
        map.addLayer({
            'id': 'LineString',
            'type': 'line',
            'source': 'LineString',
            'layout': {
                'line-join': 'round',
                'line-cap': 'round'
            },
            'paint': {
                'line-color': '#BF93E4',
                'line-width': 5
            }
        });

        document.getElementById('zoomto').addEventListener('click', () => {
            // Geographic coordinates of the LineString
            const coordinates = geojson.features[0].geometry.coordinates;

            // Create a 'LngLatBounds' with both corners at the first coordinate.
            const bounds = new mapboxgl.LngLatBounds(
                coordinates[0],
                coordinates[0]
            );

            // Extend the 'LngLatBounds' to include every coordinate in the bounds result.
            for (const coord of coordinates) {
                bounds.extend(coord);
            }

            map.fitBounds(bounds, {
                padding: 20
            });
        });
    });
///////////////////////////////////////////////////////////////////

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
                    'coordinates':   [31.05836048018324, -17.860431992449783]
                }
            }
        ]
    };

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
           ell.setHTML('<a href = "newnav.php"> donedeal </a>');
        });

        // Add markers to the map.
        new mapboxgl.Marker(ell)
            .setLngLat(marker.geometry.coordinates)
            .addTo(map);
    }
</script>

</body>
</html>