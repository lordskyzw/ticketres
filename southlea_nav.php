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
                        [31.04239,-17.83707],
[31.04236,-17.83778],
[31.04233,-17.83834],
[31.04229,-17.83886],
[31.04225,-17.83936],
[31.04225,-17.83944],
[ 31.04225,-17.8395],
[31.04225,-17.83953],
[31.04225,-17.83954],
[31.04225,-17.83956],
[ 31.0419,-17.83996],
[31.04132,-17.84065],
[31.04095,-17.84108],
[31.04089,-17.84114],
[31.04088,-17.84117],
[31.04076,-17.84126],
[31.04072,-17.84128],
[31.04072,-17.84129],
[ 31.04072,-17.8413],
[ 31.04073,-17.8413],
[31.04073,-17.84131],
[31.04073,-17.84132],
[31.04073,-17.84133],
[31.04074,-17.84134],
[31.04074,-17.84135],
[31.04074,-17.84136],
[31.04073,-17.84136],
[31.04073,-17.84137],
[31.04073,-17.84138],
[31.04073,-17.84139],
[ 31.04072,-17.8414],
[31.04072,-17.84141],
[31.04071,-17.84142],
[ 31.0407,-17.84143],
[ 31.0407,-17.84144],
[31.04069,-17.84144],
[31.04069,-17.84145],
[31.04068,-17.84145],
[31.04067,-17.84146],
[31.04066,-17.84146],
[31.04065,-17.84147],
[31.04064,-17.84147],
[31.04063,-17.84147],
[31.04062,-17.84148],
[31.04061,-17.84148],
[ 31.0406,-17.84148],
[31.04059,-17.84148],
[31.04058,-17.84148],
[31.04005,-17.84248],
[31.03986,-17.84283],
[31.03944,-17.84347],
[31.03937,-17.84349],
[31.03915,-17.84383],
[31.03906,-17.84401],
[31.03899,-17.84418],
[31.03892,-17.84443],
[31.03892,-17.84479],
[31.03893,-17.84485],
[  31.03895,-17.845],
[31.03915,-17.84556],
[31.03917,-17.84565],
[31.03919,-17.84576],
[31.03919,-17.84589],
[31.03916,-17.84602],
[31.03912,-17.84612],
[31.03905,-17.84623],
[31.03897,-17.84632],
[31.03881,-17.84645],
[31.03866,-17.84654],
[31.03849,-17.84665],
[31.03839,-17.84672],
[31.03837,-17.84673],
[31.03806,-17.84691],
[ 31.03757,-17.8472],
[31.03736,-17.84733],
[31.03711,-17.84749],
[ 31.03683,-17.8477],
[  31.0367,-17.8478],
[31.03647,-17.84801],
[31.03622,-17.84828],
[ 31.0361,-17.84843],
[ 31.0357,-17.84895],
[ 31.0352,-17.84957],
[31.03512,-17.84967],
[31.03457,-17.85035],
[31.03446,-17.85049],
[31.03431,-17.85072],
[  31.034,-17.85121],
[31.03377,-17.85157],
[ 31.03369,-17.8517],
[31.03351,-17.85199],
[31.03322,-17.85244],
[31.03242,-17.85361],
[31.03155,-17.85491],
[31.03146,-17.85504],
[31.03089,-17.85589],
[31.03087,-17.85592],
[31.03053,-17.85646],
[31.03014,-17.85709],
[31.03003,-17.85726],
[31.02951,-17.85803],
[ 31.02893,-17.8589],
[31.02838,-17.85973],
[31.02819,-17.86003],
[31.02795,-17.86041],
[ 31.0274,-17.86121],
[31.02737,-17.86126],
[31.02717,-17.86156],
[31.02699,-17.86185],
[31.02664,-17.86236],
[31.02586,-17.86355],
[31.02571,-17.86377],
[31.02563,-17.86389],
[31.02468,-17.86534],
[ 31.02464,-17.8654],
[31.02385,-17.86659],
[31.02376,-17.86671],
[31.02353,-17.86707],
[31.02337,-17.86731],
[31.02322,-17.86755],
[31.02196,-17.86947],
[31.02108,-17.87082],
[31.02097,-17.87099],
[ 31.02053,-17.8717],
[31.02008,-17.87237],
[31.01988,-17.87268],
[ 31.0198,-17.87278],
[31.01958,-17.87312],
[31.01948,-17.87323],
[31.01931,-17.87353],
[31.01905,-17.87394],
[31.01895,-17.87411],
[31.01859,-17.87468],
[31.01812,-17.87538],
[31.01806,-17.87546],
[ 31.01786,-17.8758],
[  31.017,-17.87716],
[31.01671,-17.87761],
[31.01641,-17.87809],
[31.01565,-17.87929],
[31.01529,-17.87987],
[31.01449,-17.88112],
[31.01372,-17.88236],
[31.01307,-17.88314],
[31.01283,-17.88343],
[ 31.0128,-17.88347],
[31.01211,-17.88422],
[31.01185,-17.88451],
[31.01168,-17.88469],
[31.01133,-17.88508],
[31.01135,-17.88508],
[31.01136,-17.88509],
[31.01137,-17.88511],
[31.01138,-17.88512],
[31.01139,-17.88513],
[ 31.0114,-17.88514],
[31.01141,-17.88515],
[31.01142,-17.88517],
[31.01143,-17.88519],
[31.01144,-17.88522],
[31.01144,-17.88524],
[31.01144,-17.88527],
[31.01144,-17.88529],
[31.01144,-17.88532],
[31.01143,-17.88535],
[31.01142,-17.88537],
[31.01141,-17.88539],
[ 31.0114,-17.88542],
[31.01138,-17.88544],
[31.01136,-17.88546],
[31.01134,-17.88547],
[31.01132,-17.88549],
[ 31.01129,-17.8855],
[31.01127,-17.88551],
[31.01125,-17.88551],
[31.01123,-17.88551],
[31.01103,-17.88561],
[ 31.01093,-17.8857],
[31.01081,-17.88582],
[31.01072,-17.88591],
[31.01024,-17.88645],
[    31.01,-17.8867],
[ 31.00956,-17.8872],
[ 31.00926,-17.8875],
[31.00907,-17.88769],
[31.00864,-17.88821],
[31.00838,-17.88862],
[31.00811,-17.88918],
[31.00783,-17.88985],
[31.00719,-17.89114],
[31.00706,-17.89142],
[31.00689,-17.89178],
[31.00645,-17.89269],
[31.00631,-17.89298],
[31.00618,-17.89323],
[31.00596,-17.89362],
[31.00578,-17.89393],
[31.00521,-17.89498],
[31.00421,-17.89671],
[31.00418,-17.89677],
[31.00407,-17.89697],
[31.00361,-17.89776],
[  31.00348,-17.898],
[31.00302,-17.89875],
[ 31.0028,-17.89915],
[ 31.0026,-17.89949],
[31.00222,-17.90015],
[  31.002,-17.90053],
[31.00155,-17.90123],
[31.00092,-17.90226],
[31.00075,-17.90254],
[31.00072,-17.90259],
[ 31.0004,-17.90312],
[      31,-17.90378],
[ 30.9999,-17.90394],
[30.99977,-17.90416],
[30.99917,-17.90515],
[30.99851,-17.90625],
[30.99825,-17.90667],
[30.99798,-17.90712],
[30.99773,-17.90753],
[30.99748,-17.90793],
[  30.997,-17.90871],
[30.99632,-17.90981],
[ 30.99612,-17.9101],
[30.99594,-17.91039],
[30.99553,-17.91095],
[30.99552,-17.91096],
[  30.9951,-17.9114],
[30.99476,-17.91169],
[30.99438,-17.91202],
[30.99364,-17.91267],
[30.99353,-17.91276],
[ 30.99313,-17.9131],
[ 30.99261,-17.9135],
[30.99237,-17.91367],
[ 30.99232,-17.9137],
[30.99217,-17.91381],
[30.99185,-17.91404],
[ 30.9915,-17.91431],
[30.99148,-17.91433],
[30.99098,-17.91474],
[30.99067,-17.91501],
[ 30.9902,-17.91543],
[30.98999,-17.91563],
[30.98939,-17.91618],
[30.98826,-17.91714],
[30.98815,-17.91723],
[30.98736,-17.91786],
[30.98696,-17.91822],
[30.98666,-17.91852],
[30.98633,-17.91887],
[30.98601,-17.91925],
[30.98589,-17.91941],
[30.98576,-17.91961],
[30.98566,-17.91985],
[30.9856,-17.92004],
[30.98558,-17.92024],
[30.98562,-17.92028],
[30.98563,-17.92034],
[30.98563,-17.9204],
[30.98563,-17.92046],
[30.98561,-17.92051],
[30.98559,-17.92057],
[30.98556,-17.92062],
[30.98548,-17.92062],
[30.98547,-17.9207],
[30.98541,-17.92074],
[30.98535,-17.92076],
[30.98528,-17.92078],
[30.98522,-17.92078],
[30.98515,-17.92077],
[30.98508,-17.92075],
[30.98499,-17.92077],
[30.9848,-17.92108],
[30.98452,-17.92152],
[30.98419,-17.92205],
[30.98415,-17.92211],
[30.98398,-17.92238],
[30.9838,-17.92265],
[30.98342,-17.92322],
[30.98303,-17.92382],
[30.98263,-17.92442],
[30.98249,-17.92463],
[30.98198,-17.92534],
[30.98169,-17.92575],
[30.98148,-17.92604],
[30.98146,-17.92607],
[30.98123,-17.9264],
[30.98056,-17.92737],
[30.98051,-17.92745],
[30.98047,-17.92751],
[30.98041,-17.92761],
[30.98,-17.9283],
[30.97986,-17.92869],
[30.97976,-17.92895],
[30.97968,-17.92923],
[30.97962,-17.92949],
[30.97957,-17.92975],
[30.97955,-17.92995],
[30.97951,-17.93018],
[30.97952,-17.93058],
[30.97952,-17.93105],
[30.97956,-17.93171],
[30.97956,-17.93187],
[30.97957,-17.93207],
[ 30.97957,-17.9325],
[30.97964,-17.93277],
[  30.97966,-17.933],
[30.97968,-17.93336],
[30.97968,-17.93355],
[30.97968,-17.93359],
[30.97966,-17.93398],
[30.97963,-17.93454],
[ 30.9796,-17.93482],
[30.97954,-17.93535],
[30.97944,-17.93624],
[30.97938,-17.93686],
[30.97937,-17.93696],
[30.97926,-17.93779],
[30.97911,-17.93879],
[ 30.97907,-17.9391],
[30.97897,-17.93984],
[30.97891,-17.94035],
[30.97885,-17.94084],
[ 30.97874,-17.9417],
[30.97867,-17.94232],
[ 30.9786,-17.94298],
[30.97848,-17.94403],
[30.97841,-17.94464],
[30.97841,-17.94468],
[30.97829,-17.94555],
[30.97824,-17.94598],
[ 30.97822,-17.9462],
[30.97817,-17.94672],
[30.97806,-17.94759],
[30.97802,-17.94797],
[30.97797,-17.94835],
[30.97785,-17.94949],
[ 30.97776,-17.9503],
[30.97775,-17.95042],
[30.97771,-17.95095],
[ 30.97768,-17.9512],
[30.97763,-17.95172],
[30.97759,-17.95209],
[30.97756,-17.95235],
[30.97747,-17.95329],
[30.97741,-17.95389],
[30.97735,-17.95434],
[ 30.9773,-17.95504],
[30.97722,-17.95598],
[30.97715,-17.95674],
[ 30.9771,-17.95731],
[30.97704,-17.95794],
[30.97703,-17.95801],
[30.97698,-17.95862],
[ 30.97692,-17.9591],
[30.97688,-17.95946],
[30.97684,-17.95972],
[30.97672,-17.96015],
[30.97663,-17.96049],
[30.97656,-17.96071],
[30.97664,-17.96074],
[ 30.97683,-17.9608],
[ 30.9775,-17.96091],
[ 30.9779,-17.95964],
[30.97801,-17.95966],
[ 30.97812,-17.9597],
[30.97827,-17.95974],
[ 30.97888,-17.9599],
[30.97874,-17.96038] 
            
                      
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
                    'coordinates': [31.01081,-17.88582]
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