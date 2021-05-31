<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $title ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Demo project with jQuery">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <style>
        .container h1 {
            font-size: 8vw;
        }
    </style>
    <style type="text/css"></style>
    <!-- script mapbox bagian head -->

    <!-- <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script> -->
    <!-- <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' /> -->

    <script src="https://api.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.css" rel="stylesheet" />

    <!-- <style>
        body { margin: 0; padding: 0; }
        #map { position: absolute; top: 0; bottom: 0; width: 100%; }
    </style> -->
    
    
</head>
<body>
    <!-- Script Kode Geocoder untuk pencariaon -->
    <!-- Load the `mapbox-gl-geocoder` plugin. -->
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js"></script>
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.css" type="text/css">
    
    <!-- Promise polyfill script is required -->
    <!-- to use Mapbox GL Geocoder in IE 11. -->
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>

    <!-- batas akhir script kode geocoder -->

    <!-- script kode pop up -->

    <style>
        .mapboxgl-popup {
            max-width: 400px;
            font: 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
        }
    </style>

    <!-- batas akhir script kode pop up -->

    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="<?= site_url('home') ?>">SIG DPKP</a>
        </div>
        <ul class="nav navbar-nav">
        <li class="active"><a href="<?= site_url('home') ?>">Home</a></li>
        <li><a href="<?= site_url('tutorial') ?>">Tutorial</a></li>
        <li><a href="<?= site_url('contact') ?>">Contact US</a></li>
        </ul>

        <!-- script pencarian -->
        <form class="navbar-form navbar-left" action="/action_page.php">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submitt</button>
        </form>
        <!-- batas akhir script pencarian -->

    </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1><?= $title ?></h1>
                    <p><?= $page ?></p>
                    <div id='map' style='width: 1020px; height: 500px;'></div>
                    <script>
                        mapboxgl.accessToken = 'pk.eyJ1IjoiZHdpa3l2YWxlbnRpbm80OCIsImEiOiJja284enFjbHQxa3A5Mm9zNzh4ZHNsa2tkIn0.nfz0Eou-nFSfHdWYR5H4QA';
                        var map = new mapboxgl.Map({
                            container: 'map',
                            style: 'mapbox://styles/mapbox/streets-v11',
                            center: [108.937736,-7.0339021],
                            zoom: 9.75,
                        });

                        map.on('load', function () {
                            // Add a data source containing GeoJSON data
                            // Brebes
                            map.addSource('brebes', {
                                'type': 'geojson',
                                'data': {
                                    'type': 'Feature',
                                    'geometry': {
                                        'type': 'Polygon',
                                        // These coordinates outline Brebes.
                                        // These coordinates outline Brebes.
                                        'coordinates': [
                                            [
                                                [109.10111450871624, -6.840016329945992],
                                                [109.08312672003095, -6.820448277161256],
                                                [109.08285213222285, -6.820448277161256],
                                                [109.07708578825302, -6.810905620662727],
                                                [109.0754382614045, -6.807361157030009],
                                                [109.07241779551553, -6.80681585260909],
                                                [109.07131944428319, -6.808451764013193],
                                                [109.0688481540104, -6.806270547568714],
                                                [109.06802439058615, -6.800544807255793],
                                                [109.07406532236408, -6.795091657803351],
                                                [109.08147919318243, -6.783094511388162],
                                                [109.06857356620232, -6.75391838679977],
                                                [109.05072535867664, -6.780367845512359],
                                                [109.0326025633429, -6.780640512794301],
                                                [109.02079528759513, -6.7820038468895945],
                                                [109.01173388992827, -6.817176530619787],
                                                [109.02463951690838, -6.858344376753672],
                                                [109.03177879991863, -6.887514141901117],
                                                [109.02216822663559, -6.894329249357353],
                                                [109.02793457060541, -6.911775477588985],
                                                [109.03951188393324, -6.922578651074828],
                                                [109.07605687497488, -6.915743507395913],
                                                [109.07685133130188, -6.886824498597927],
                                                [109.08082361293685, -6.871575583614125],
                                                [109.08161806926385, -6.859481268731631],
                                                [109.10111450871624, -6.840016329945992]
                                            ]
                                        ]
                                    }
                                }
                            });

                            // Add a new layer to visualize the polygon.
                            map.addLayer({
                                'id': 'brebes',
                                'type': 'fill',
                                'source': 'brebes', // reference the data source
                                'layout': {},
                                    'paint': {
                                    'fill-color': '#0080ff', // blue color fill
                                    'fill-opacity': 0.5
                                    }
                            });
                            // Add a black outline around the polygon.
                            map.addLayer({
                                'id': 'outline',
                                'type': 'line',
                                'source': 'brebes',
                                'layout': {},
                                    'paint': {
                                    'line-color': '#000',
                                    'line-width': 3
                                    }
                            });

                            // Salem
                            map.addSource('salem', {
                                'type': 'geojson',
                                'data': {
                                    'type': 'Feature',
                                    'geometry': {
                                        'type': 'Polygon',
                                        // These coordinates outline Salem.
                                        // These coordinates outline Salem.
                                        'coordinates': [
                                            [
                                                [108.89525766288834, -7.186122621321199],
                                                [108.89491434015687, -7.173859921515611],
                                                [108.8822113990922, -7.157509141331825],
                                                [108.87534494446265, -7.1650033217329385],
                                                [108.8622986806665, -7.159212374963735],
                                                [108.85714883969433, -7.135025862064919],
                                                [108.83757944400011, -7.120377070569528],
                                                [108.78814097066734, -7.10879397393055],
                                                [108.74728556562151, -7.112200797396469],
                                                [108.69304057404806, -7.151036795556418],
                                                [108.72290965168659, -7.192253847171426],
                                                [108.79088755251917, -7.213371879827306],
                                                [108.84787912594444, -7.205878496982071],
                                                [108.88427133548106, -7.183397605496707],
                                                [108.89525766288834, -7.186122621321199]
                                            ]
                                        ]
                                    }
                                }
                            });

                            // Add a new layer to visualize the polygon.
                            map.addLayer({
                                'id': 'salem',
                                'type': 'fill',
                                'source': 'salem', // reference the data source
                                'layout': {},
                                    'paint': {
                                    'fill-color': '#0080ff', // blue color fill
                                    'fill-opacity': 0.5
                                    }
                            });
                            // Add a black outline around the polygon.
                            map.addLayer({
                                'id': 'outline',
                                'type': 'line',
                                'source': 'salem',
                                'layout': {},
                                    'paint': {
                                    'line-color': '#000',
                                    'line-width': 3
                                    }
                            });
                            
                            // Bantarkawung
                            map.addSource('bantarkawung', {
                                'type': 'geojson',
                                'data': {
                                    'type': 'Feature',
                                    'geometry': {
                                        'type': 'Polygon',
                                        // These coordinates outline bantarkawung.
                                        // These coordinates outline bantarkawung.
                                        'coordinates': [
                                            [
                                                [108.97337351413549, -7.190359033849733],
                                                [108.96513376858, -7.1501637704118135],
                                                [108.93080149543225, -7.100425753502963],
                                                [108.90676890422881, -7.114734502884594],
                                                [108.90814219515474, -7.141306710638572],
                                                [108.86145030367378, -7.143350662742766],
                                                [108.87449656746993, -7.164470965601406],
                                                [108.89509593135858, -7.183546527161952],
                                                [108.81201183034099, -7.204664965158177],
                                                [108.81750499404463, -7.231231924706151],
                                                [108.86213694913671, -7.24349307154158],
                                                [108.85183726719241, -7.253710439182817],
                                                [108.95002756839499, -7.3299927655035555],
                                                [108.97474680506139, -7.334759978578347],
                                                [108.98435984154277, -7.306837005378842],
                                                [108.9589539594134, -7.2475800464063465],
                                                [108.92324839533975, -7.21420200190249],
                                                [108.94934092293204, -7.188996540684205],
                                                [108.97337351413549, -7.190359033849733]
                                            ]
                                        ]
                                    }
                                }
                            });

                            // Add a new layer to visualize the polygon.
                            map.addLayer({
                                'id': 'bantarkawung',
                                'type': 'fill',
                                'source': 'bantarkawung', // reference the data source
                                'layout': {},
                                    'paint': {
                                    'fill-color': '#0080ff', // blue color fill
                                    'fill-opacity': 0.5
                                    }
                            });
                            // Add a black outline around the polygon.
                            map.addLayer({
                                'id': 'outline',
                                'type': 'line',
                                'source': 'bantarkawung',
                                'layout': {},
                                    'paint': {
                                    'line-color': '#000',
                                    'line-width': 3
                                    }
                            });
                            
                        });

                        // Geocoder Control
                        map.addControl(
                            new MapboxGeocoder({
                                accessToken: mapboxgl.accessToken,
                                mapboxgl: mapboxgl
                            })
                        );

                        // Navigation Control
                        map.addControl(new mapboxgl.NavigationControl());

                        // Geolocate Control
                        map.addControl(
                            new mapboxgl.GeolocateControl({
                                positionOptions: {
                                    enableHighAccuracy: true
                                },
                                trackUserLocation: true
                            })
                        );
                    </script>
                </div>
            </div>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript">
        jQuery(function(){

        });
    </script>
</body>
</html>