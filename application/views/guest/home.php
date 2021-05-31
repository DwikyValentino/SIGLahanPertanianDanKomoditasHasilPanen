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
        <button type="submit" class="btn btn-default">Submit</button>
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
                    <div id='map' style='width: 1020px; height: 500px;'>

                    </div>
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
                            map.addSource('maine', {
                                'type': 'geojson',
                                'data': {
                                    'type': 'Feature',
                                    'geometry': {
                                        'type': 'Polygon',
                                        // These coordinates outline Maine.
                                        // These coordinates outline Maine.
                                        'coordinates': [
                                            [
                                                [-67.13734, 45.13745],
                                                [-66.96466, 44.8097],
                                                [-68.03252, 44.3252],
                                                [-69.06, 43.98],
                                                [-70.11617, 43.68405],
                                                [-70.64573, 43.09008],
                                                [-70.75102, 43.08003],
                                                [-70.79761, 43.21973],
                                                [-70.98176, 43.36789],
                                                [-70.94416, 43.46633],
                                                [-71.08482, 45.30524],
                                                [-70.66002, 45.46022],
                                                [-70.30495, 45.91479],
                                                [-70.00014, 46.69317],
                                                [-69.23708, 47.44777],
                                                [-68.90478, 47.18479],
                                                [-68.2343, 47.35462],
                                                [-67.79035, 47.06624],
                                                [-67.79141, 45.70258],
                                                [-67.13734, 45.13745]
                                            ]
                                            ]
                                        }
                                    }
                            });
                            
                            // Add a new layer to visualize the polygon.
                            map.addLayer({
                                'id': 'maine',
                                'type': 'fill',
                                'source': 'maine', // reference the data source
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
                                'source': 'maine',
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