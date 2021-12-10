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

                        //Poligon Layer

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
                                    'fill-color': '#6600ff', // purple color fill
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
                                    'fill-color': '#ff00ff', // pink color fill
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

                            // bumiayu
                            map.addSource('bumiayu', {
                                'type': 'geojson',
                                'data': {
                                    'type': 'Feature',
                                    'geometry': {
                                        'type': 'Polygon',
                                        // These coordinates outline bumiayu.
                                        // These coordinates outline bumiayu.
                                        'coordinates': [
                                            [
                                                [109.04375662694946, -7.2254396722178535],
                                                [109.01938071301456, -7.21896829418889],
                                                [109.00290122190363, -7.23327332163214],
                                                [108.98710837625565, -7.240085080199086],
                                                [108.99054160357042, -7.235316859998982],
                                                [108.98710837625565, -7.2176058870142255],
                                                [108.97028556241325, -7.19342247765488],
                                                [108.94934287579312, -7.1879725172311595],
                                                [108.92840018917298, -7.20670648198375],
                                                [108.92531028458968, -7.214199851129966],
                                                [108.92702689824708, -7.220330697260094],
                                                [108.94728293940425, -7.240766250398947],
                                                [108.95346274857084, -7.2472373159681815],
                                                [108.97509208065394, -7.29729978123976],
                                                [108.99019828083895, -7.308537525398124],
                                                [109.00118460824623, -7.309559124492575],
                                                [109.00667777194988, -7.304451105661458],
                                                [109.00496115829249, -7.28129402208644],
                                                [109.01423087204239, -7.269033905209945],
                                                [109.0293370722274, -7.276185680757435],
                                                [109.04204001329208, -7.254389438202532],
                                                [109.03448691319957, -7.2503025251200794],
                                                [109.0478764997272, -7.23872273671307],
                                                [109.04375662694946, -7.2254396722178535]
                                            ]
                                        ]
                                    }
                                }
                            });

                            // Add a new layer to visualize the polygon.
                            map.addLayer({
                                'id': 'bumiayu',
                                'type': 'fill',
                                'source': 'bumiayu', // reference the data source
                                'layout': {},
                                    'paint': {
                                    'fill-color': '#ff0066', // pink dark color fill
                                    'fill-opacity': 0.5
                                    }
                            });
                            // Add a black outline around the polygon.
                            map.addLayer({
                                'id': 'outline',
                                'type': 'line',
                                'source': 'bumiayu',
                                'layout': {},
                                    'paint': {
                                    'line-color': '#000',
                                    'line-width':  1
                                    }
                            });
                            
                            // paguyangan
                            map.addSource('paguyangan', {
                                'type': 'geojson',
                                'data': {
                                    'type': 'Feature',
                                    'geometry': {
                                        'type': 'Polygon',
                                        // These coordinates outline paguyangan.
                                        // These coordinates outline paguyangan.
                                        'coordinates': [
                                            [
                                                [109.16671377329918, -7.267954411922307],
                                                [109.1509209276512, -7.249904143267408],
                                                [109.12345510913299, -7.259780795098508],
                                                [109.10628897255911, -7.26897610357282],
                                                [109.08603293140195, -7.24820125036299],
                                                [109.06818014936509, -7.239346103528268],
                                                [109.0482674309394, -7.237302583408574],
                                                [109.05238730371714, -7.226744248731535],
                                                [109.04758078547644, -7.222657085179969],
                                                [109.03144461709698, -7.226403653180677],
                                                [109.046550817282, -7.236280819877679],
                                                [109.03453452168029, -7.248882408297284],
                                                [109.0362511353377, -7.269316666939924],
                                                [109.01290518959719, -7.26897610357282],
                                                [109.00260550765287, -7.279533447829647],
                                                [108.98509604834751, -7.306436523396538],
                                                [108.9747963664032, -7.334700035241651],
                                                [109.02320487154154, -7.331975919367511],
                                                [109.03075797163405, -7.348660867306074],
                                                [109.0362511353377, -7.350703879123196],
                                                [109.04792410820792, -7.339467197902643],
                                                [109.08465964047602, -7.3047338450421115],
                                                [109.14130789116982, -7.268294976063992],
                                                [109.16671377329918, -7.267954411922307]
                                            ]
                                        ]
                                    }
                                }
                            });

                            // Add a new layer to visualize the polygon.
                            map.addLayer({
                                'id': 'paguyangan',
                                'type': 'fill',
                                'source': 'paguyangan', // reference the data source
                                'layout': {},
                                    'paint': {
                                    'fill-color': '#cc0000', // brown color fill
                                    'fill-opacity': 0.5
                                    }
                            });
                            // Add a black outline around the polygon.
                            map.addLayer({
                                'id': 'outline',
                                'type': 'line',
                                'source': 'paguyangan',
                                'layout': {},
                                    'paint': {
                                    'line-color': '#000',
                                    'line-width':  1
                                    }
                            });

                            // sirampog
                            map.addSource('sirampog', {
                                'type': 'geojson',
                                'data': {
                                    'type': 'Feature',
                                    'geometry': {
                                        'type': 'Polygon',
                                        // These coordinates outline sirampog.
                                        // These coordinates outline sirampog.
                                        'coordinates': [
                                            [
                                                [109.17453913609211, -7.240181414793131],
                                                [109.15737299951823, -7.24426841968377],
                                                [109.13711695836106, -7.234391427802357],
                                                [109.11377101262057, -7.212933770002484],
                                                [109.08081203039873, -7.214636795912761],
                                                [109.07703548035246, -7.201012409334402],
                                                [109.05609279373233, -7.189431358864809],
                                                [109.03240352526038, -7.205099768323726],
                                                [109.0289702979456, -7.2119119513811505],
                                                [109.01970058419572, -7.210208915221345],
                                                [109.01661067961241, -7.217361624040229],
                                                [109.03103023433447, -7.227238988393985],
                                                [109.04785304817688, -7.222811231058409],
                                                [109.04716640271393, -7.23609437286525],
                                                [109.05574947100087, -7.242224921869383],
                                                [109.07154231664882, -7.242906088836731],
                                                [109.07394557576916, -7.246311908233724],
                                                [109.1072478807225, -7.26844910633306],
                                                [109.12372737183343, -7.263340618857566],
                                                [109.15119319035162, -7.250058279838389],
                                                [109.16183619502743, -7.262318914394967],
                                                [109.1656127450737, -7.249036545217922],
                                                [109.17385249062914, -7.2507394349643155],
                                                [109.17453913609211, -7.240181414793131]
                                            ]
                                        ]
                                    }
                                }
                            });

                            // Add a new layer to visualize the polygon.
                            map.addLayer({
                                'id': 'sirampog',
                                'type': 'fill',
                                'source': 'sirampog', // reference the data source
                                'layout': {},
                                    'paint': {
                                    'fill-color': '#ff0000', // red color fill
                                    'fill-opacity': 0.5
                                    }
                            });
                            // Add a black outline around the polygon.
                            map.addLayer({
                                'id': 'outline',
                                'type': 'line',
                                'source': 'sirampog',
                                'layout': {},
                                    'paint': {
                                    'line-color': '#000',
                                    'line-width':  1
                                    }
                            });

                            // tonjong
                            map.addSource('tonjong', {
                                'type': 'geojson',
                                'data': {
                                    'type': 'Feature',
                                    'geometry': {
                                        'type': 'Polygon',
                                        // These coordinates outline tonjong.
                                        // These coordinates outline tonjong.
                                        'coordinates': [
                                            [
                                                [109.05676361677193, -7.188865462801114],
                                                [109.08354278982719, -7.147988759132727],
                                                [109.07427307607729, -7.114944082856385],
                                                [109.06122681228113, -7.128230373297683],
                                                [109.05710693950343, -7.1493513749625555],
                                                [109.03650757561476, -7.140153639268523],
                                                [109.00457856158734, -7.13981297883739],
                                                [108.99050232959677, -7.131977718920756],
                                                [108.97985932492095, -7.134362377442465],
                                                [108.96612641566185, -7.15037333416751],
                                                [108.96543977019888, -7.160933445327056],
                                                [108.97058961117105, -7.191931067560172],
                                                [108.98329255223574, -7.215092745053373],
                                                [108.98844239320788, -7.238934410239346],
                                                [109.00595185251325, -7.234847357014999],
                                                [109.02037140723532, -7.219520577965582],
                                                [109.03032776644817, -7.2116866902568875],
                                                [109.03238770283703, -7.207258780719467],
                                                [109.05676361677193, -7.188865462801114]
                                            ]
                                        ]
                                    }
                                }
                            });

                            // Add a new layer to visualize the polygon.
                            map.addLayer({
                                'id': 'tonjong',
                                'type': 'fill',
                                'source': 'tonjong', // reference the data source
                                'layout': {},
                                    'paint': {
                                    'fill-color': '#ff6600', // orange color fill
                                    'fill-opacity': 0.5
                                    }
                            });
                            // Add a black outline around the polygon.
                            map.addLayer({
                                'id': 'outline',
                                'type': 'line',
                                'source': 'tonjong',
                                'layout': {},
                                    'paint': {
                                    'line-color': '#000',
                                    'line-width':  1
                                    }
                            });

                            // larangan
                            map.addSource('larangan', {
                                'type': 'geojson',
                                'data': {
                                    'type': 'Feature',
                                    'geometry': {
                                        'type': 'Polygon',
                                        // These coordinates outline larangan.
                                        // These coordinates outline larangan.
                                        'coordinates': [
                                            [
                                                [109.01388220641066, -6.9494099772519045],
                                                [108.9857297424295, -6.94429794222736],
                                                [108.94075446460593, -6.9289615039947305],
                                                [108.92976813719865, -6.935436949941936],
                                                [108.93594794636523, -6.959633880480954],
                                                [108.90813880511556, -6.958611500173982],
                                                [108.90401893233783, -6.969516775256102],
                                                [108.9273648780783, -6.981103352010366],
                                                [108.9150052597451, -6.986896532828073],
                                                [108.91912513252285, -7.0172243652963475],
                                                [108.89955573682862, -7.034943083823516],
                                                [108.89303260493055, -7.093887021249202],
                                                [108.89440589585645, -7.102744996968135],
                                                [108.93079810539307, -7.101722931551331],
                                                [108.93388800997637, -7.113987566543725],
                                                [108.94352816595604, -7.128690381953346],
                                                [108.97919229953025, -7.119637433593575],
                                                [108.98333929180632, -7.0871276479011565],
                                                [108.96882481884006, -7.069019936715446],
                                                [108.96799542038487, -7.05914270410155],
                                                [108.98582748717196, -7.061200478294248],
                                                [108.98416869026154, -7.022924382701139],
                                                [108.96965421729529, -7.01757370939498],
                                                [108.98997447944804, -6.977235888105731],
                                                [109.01388220641066, -6.9494099772519045]
                                            ]
                                        ]
                                    }
                                }
                            });

                            // Add a new layer to visualize the polygon.
                            map.addLayer({
                                'id': 'larangan',
                                'type': 'fill',
                                'source': 'larangan', // reference the data source
                                'layout': {},
                                    'paint': {
                                    'fill-color': '#993300', // chocolate color fill
                                    'fill-opacity': 0.5
                                    }
                            });
                            // Add a black outline around the polygon.
                            map.addLayer({
                                'id': 'outline',
                                'type': 'line',
                                'source': 'larangan',
                                'layout': {},
                                    'paint': {
                                    'line-color': '#000',
                                    'line-width':  1
                                    }
                            });

                            // ketanggungan
                            map.addSource('ketanggungan', {
                                'type': 'geojson',
                                'data': {
                                    'type': 'Feature',
                                    'geometry': {
                                        'type': 'Polygon',
                                        // These coordinates outline ketanggungan.
                                        // These coordinates outline ketanggungan.
                                        'coordinates': [
                                            [
                                                [108.9232528734649, -7.09925722155088],
                                                [108.89166718216894, -7.099938602400632],
                                                [108.91913300068714, -7.0147582050102155],
                                                [108.92805939170557, -6.980681671898379],
                                                [108.90471344596511, -6.968413511834905],
                                                [108.93355255540922, -6.958871387556581],
                                                [108.92805939170557, -6.927517329188318],
                                                [108.9232528734649, -6.923427515500846],
                                                [108.90471344596511, -6.924109153577742],
                                                [108.90883331874284, -6.909794547301876],
                                                [108.89441376402077, -6.919337666364082],
                                                [108.87106781828028, -6.913202826236396],
                                                [108.88205414568756, -6.935015228810818],
                                                [108.86420136365075, -6.937060089818678],
                                                [108.86351471818779, -6.946602657074696],
                                                [108.86351471818779, -6.963642473958331],
                                                [108.84016877244731, -7.05019515408481],
                                                [108.84360199976209, -7.123104950138549],
                                                [108.85939484541005, -7.143544873300491],
                                                [108.90677338235396, -7.138094316370687],
                                                [108.90540009142806, -7.112884646670919],
                                                [108.9232528734649, -7.09925722155088]
                                            ]
                                        ]
                                    }
                                }
                            });

                            // Add a new layer to visualize the polygon.
                            map.addLayer({
                                'id': 'ketanggungan',
                                'type': 'fill',
                                'source': 'ketanggungan', // reference the data source
                                'layout': {},
                                    'paint': {
                                    'fill-color': '#cc9900', // dark yellow color fill
                                    'fill-opacity': 0.5
                                    }
                            });
                            // Add a black outline around the polygon.
                            map.addLayer({
                                'id': 'outline',
                                'type': 'line',
                                'source': 'ketanggungan',
                                'layout': {},
                                    'paint': {
                                    'line-color': '#000',
                                    'line-width':  1
                                    }
                            });

                            // banjarharjo
                            map.addSource('banjarharjo', {
                                'type': 'geojson',
                                'data': {
                                    'type': 'Feature',
                                    'geometry': {
                                        'type': 'Polygon',
                                        // These coordinates outline banjarharjo.
                                        // These coordinates outline banjarharjo.
                                        'coordinates': [
                                            [
                                                [108.86643594725128, -6.964050683332259],
                                                [108.84103006512191, -6.961665148270595],
                                                [108.84377664697375, -6.9381499400533135],
                                                [108.83176035137203, -6.936445893773513],
                                                [108.83038706044613, -6.942580431514453],
                                                [108.81184763294634, -6.9398539801658785],
                                                [108.77305216428935, -6.939513172636815],
                                                [108.76069254595615, -6.937809131290691],
                                                [108.75931925503025, -6.987223820528145],
                                                [108.79021830086324, -7.012781095540467],
                                                [108.78026194165038, -7.028796273486018],
                                                [108.77511210067823, -7.035951812973875],
                                                [108.78266520077074, -7.069683583152919],
                                                [108.77064890516903, -7.110226592093236],
                                                [108.84206003331634, -7.1224909999724355],
                                                [108.84343332424226, -7.0608249724063326],
                                                [108.83897012873305, -7.050262560961846],
                                                [108.85888284715877, -7.00494368004661],
                                                [108.86643594725128, -6.964050683332259]
                                            ]
                                        ]
                                    }
                                }
                            });

                            // Add a new layer to visualize the polygon.
                            map.addLayer({
                                'id': 'banjarharjo',
                                'type': 'fill',
                                'source': 'banjarharjo', // reference the data source
                                'layout': {},
                                    'paint': {
                                    'fill-color': '#ffff00', // yellow color fill
                                    'fill-opacity': 0.5
                                    }
                            });
                            // Add a black outline around the polygon.
                            map.addLayer({
                                'id': 'outline',
                                'type': 'line',
                                'source': 'banjarharjo',
                                'layout': {},
                                    'paint': {
                                    'line-color': '#000',
                                    'line-width':  1
                                    }
                            });

                            // losari
                            map.addSource('losari', {
                                'type': 'geojson',
                                'data': {
                                    'type': 'Feature',
                                    'geometry': {
                                        'type': 'Polygon',
                                        // These coordinates outline losari.
                                        // These coordinates outline losari.
                                        'coordinates': [
                                            [
                                                [108.88288152462766, -6.810243895068636],
                                                [108.86571538805379, -6.807516684336271],
                                                [108.86502874259084, -6.794562221837387],
                                                [108.83206976036898, -6.765242940134346],
                                                [108.84236944231331, -6.74751413839786],
                                                [108.84030950592445, -6.729784687597488],
                                                [108.8272632421283, -6.753651104843394],
                                                [108.82588995120238, -6.802062216388117],
                                                [108.81833685110988, -6.833424559761884],
                                                [108.78057135064735, -6.875692287861577],
                                                [108.75310553212913, -6.9193195473293345],
                                                [108.77439154148075, -6.9438581109431805],
                                                [108.80666387823965, -6.943176501437767],
                                                [108.81971014203579, -6.918637902335368],
                                                [108.82520330573944, -6.886599479271505],
                                                [108.85816228796128, -6.847741467954278],
                                                [108.86640203351675, -6.818425434225841],
                                                [108.87738836092403, -6.8204707971953535],
                                                [108.88288152462766, -6.810243895068636]
                                            ]
                                        ]
                                    }
                                }
                            });

                            // Add a new layer to visualize the polygon.
                            map.addLayer({
                                'id': 'losari',
                                'type': 'fill',
                                'source': 'losari', // reference the data source
                                'layout': {},
                                    'paint': {
                                    'fill-color': '#999966', // grey color fill
                                    'fill-opacity': 0.5
                                    }
                            });
                            // Add a black outline around the polygon.
                            map.addLayer({
                                'id': 'outline',
                                'type': 'line',
                                'source': 'losari',
                                'layout': {},
                                    'paint': {
                                    'line-color': '#000',
                                    'line-width':  1
                                    }
                            });

                            // tanjung
                            map.addSource('tanjung', {
                                'type': 'geojson',
                                'data': {
                                    'type': 'Feature',
                                    'geometry': {
                                        'type': 'Polygon',
                                        // These coordinates outline tanjung.
                                        // These coordinates outline tanjung.
                                        'coordinates': [
                                            [
                                                [108.89970559996344, -6.89258651880278],
                                                [108.89524240445424, -6.890541465320104],
                                                [108.891465854408, -6.870772160596082],
                                                [108.88734598163026, -6.850661162466066],
                                                [108.90382547274118, -6.852365517266884],
                                                [108.90622873186152, -6.84179841934918],
                                                [108.91961831838917, -6.821004415192746],
                                                [108.883569431584, -6.810777524450035],
                                                [108.88150949519515, -6.819299948556337],
                                                [108.86914987686194, -6.819640842368759],
                                                [108.85988016311207, -6.842139297127397],
                                                [108.83516092644567, -6.869749587974722],
                                                [108.81662149894588, -6.884747099224549],
                                                [108.80220194422381, -6.897017437741893],
                                                [108.80426188061269, -6.903834155166488],
                                                [108.81044168977927, -6.898039951611908],
                                                [108.81730814440881, -6.906219983070918],
                                                [108.81250162616814, -6.938938692747773],
                                                [108.83104105366793, -6.942005955369255],
                                                [108.8317276991309, -6.935871410142256],
                                                [108.84958048116772, -6.898380789078006],
                                                [108.8821961406581, -6.896335760602251],
                                                [108.88734598163026, -6.901448315232933],
                                                [108.89970559996345, -6.8959949216645855],
                                                [108.89970559996344, -6.89258651880278]
                                            ]
                                        ]
                                    }
                                }
                            });

                            // Add a new layer to visualize the polygon.
                            map.addLayer({
                                'id': 'tanjung',
                                'type': 'fill',
                                'source': 'tanjung', // reference the data source
                                'layout': {},
                                    'paint': {
                                    'fill-color': '#66ff33', // light green color fill
                                    'fill-opacity': 0.5
                                    }
                            });
                            // Add a black outline around the polygon.
                            map.addLayer({
                                'id': 'outline',
                                'type': 'line',
                                'source': 'tanjung',
                                'layout': {},
                                    'paint': {
                                    'line-color': '#000',
                                    'line-width':  1
                                    }
                            });

                            // kersana
                            map.addSource('kersana', {
                                'type': 'geojson',
                                'data': {
                                    'type': 'Feature',
                                    'geometry': {
                                        'type': 'Polygon',
                                        // These coordinates outline kersana.
                                        // These coordinates outline kersana.
                                        'coordinates': [
                                            [
                                                [108.89831882065891, -6.896307375137092],
                                                [108.89179568876084, -6.896136955688699],
                                                [108.88784747734884, -6.902272017196526],
                                                [108.88630252505719, -6.8993749147231584],
                                                [108.88218265227947, -6.897329890539957],
                                                [108.8495669927891, -6.89647779452418],
                                                [108.84184223133083, -6.96140310579348],
                                                [108.87411456808974, -6.963447852016762],
                                                [108.87823444086747, -6.954928017317544],
                                                [108.86347156341392, -6.947260033946053],
                                                [108.86621814526575, -6.93499100051014],
                                                [108.86827808165462, -6.938058288850096],
                                                [108.87977939315913, -6.940443943744996],
                                                [108.8837276045711, -6.933286942801562],
                                                [108.8814960068165, -6.925448197985857],
                                                [108.87050967940922, -6.923403286604652],
                                                [108.8730845998953, -6.909259073720499],
                                                [108.88990741373772, -6.910963218190014],
                                                [108.89334064105249, -6.915564377566528],
                                                [108.89694552973299, -6.909940732245435],
                                                [108.89831882065891, -6.896307375137092]
                                            ]
                                        ]
                                    }
                                }
                            });

                            // Add a new layer to visualize the polygon.
                            map.addLayer({
                                'id': 'kersana',
                                'type': 'fill',
                                'source': 'kersana', // reference the data source
                                'layout': {},
                                    'paint': {
                                    'fill-color': '#009933', // green color fill
                                    'fill-opacity': 0.5
                                    }
                            });
                            // Add a black outline around the polygon.
                            map.addLayer({
                                'id': 'outline',
                                'type': 'line',
                                'source': 'kersana',
                                'layout': {},
                                    'paint': {
                                    'line-color': '#000',
                                    'line-width':  1
                                    }
                            });

                            // bulakkamba
                            map.addSource('bulakamba', {
                                'type': 'geojson',
                                'data': {
                                    'type': 'Feature',
                                    'geometry': {
                                        'type': 'Polygon',
                                        // These coordinates outline bulakamba.
                                        // These coordinates outline bulakamba.
                                        'coordinates': [
                                            [
                                                [108.99645078654912, -6.873583453725106],
                                                [108.98718107279925, -6.872220031136504],
                                                [108.98992765465104, -6.838814958115533],
                                                [108.96829832256795, -6.812907374340246],
                                                [108.94666899048487, -6.824838672628338],
                                                [108.91954649469814, -6.820407082234121],
                                                [108.90547026270755, -6.83915583802303],
                                                [108.90375364905017, -6.85176822350437],
                                                [108.88727415793925, -6.8493821220891595],
                                                [108.88590086701335, -6.861312509722808],
                                                [108.8972305171521, -6.896079361218645],
                                                [108.89311064437436, -6.91380265737536],
                                                [108.90615690817052, -6.92504978909725],
                                                [108.929502853911, -6.933229352860121],
                                                [108.98512113641037, -6.9434536078653615],
                                                [108.98649442733627, -6.925731424830191],
                                                [108.98580778187332, -6.91039438276624],
                                                [108.99027097738252, -6.899828575374909],
                                                [108.98752439553071, -6.891989275571686],
                                                [108.99610746381765, -6.882104756265108],
                                                [108.99645078654912, -6.873583453725106]
                                            ]
                                        ]
                                    }
                                }
                            });

                            // Add a new layer to visualize the polygon.
                            map.addLayer({
                                'id': 'bulakamba',
                                'type': 'fill',
                                'source': 'bulakamba', // reference the data source
                                'layout': {},
                                    'paint': {
                                    'fill-color': '#006600', // dark green color fill
                                    'fill-opacity': 0.5
                                    }
                            });
                            // Add a black outline around the polygon.
                            map.addLayer({
                                'id': 'outline',
                                'type': 'line',
                                'source': 'bulakamba',
                                'layout': {},
                                    'paint': {
                                    'line-color': '#000',
                                    'line-width':  1
                                    }
                            });

                            // wanasari
                            map.addSource('wanasari', {
                                'type': 'geojson',
                                'data': {
                                    'type': 'Feature',
                                    'geometry': {
                                        'type': 'Polygon',
                                        // These coordinates outline wanasari.
                                        // These coordinates outline wanasari.
                                        'coordinates': [
                                            [
                                                [109.03380654978031, -6.865320810375001],
                                                [109.02419351329895, -6.859867001849431],
                                                [109.02419351329895, -6.852708783389131],
                                                [109.02007364052122, -6.834983208683703],
                                                [109.0293433542711, -6.838732904360158],
                                                [109.0310599679285, -6.833619675689597],
                                                [109.02419351329895, -6.82986993990701],
                                                [109.02247689964155, -6.821006811244813],
                                                [109.01046060403984, -6.8158933931718515],
                                                [109.01767038140088, -6.808052712867368],
                                                [109.01973031778974, -6.786575411257162],
                                                [108.96926187626252, -6.804643681467131],
                                                [108.96754526260514, -6.8124844174842485],
                                                [108.98539804464197, -6.8343014426727855],
                                                [108.98711465829938, -6.872137983132449],
                                                [108.99672769478074, -6.8724788392050336],
                                                [108.98848794922527, -6.892588914494909],
                                                [108.98745798103084, -6.898042347276468],
                                                [108.99157785380858, -6.900769040122382],
                                                [108.97921823547537, -6.916447219030398],
                                                [108.98162149459573, -6.922922836782147],
                                                [108.98608469010493, -6.925990203653636],
                                                [108.9850547219105, -6.949165219126739],
                                                [109.0142371540861, -6.948483617313114],
                                                [109.02694009515076, -6.93621461577819],
                                                [109.03826974528954, -6.913720616569511],
                                                [109.02213357691008, -6.894974799060373],
                                                [109.03311990431736, -6.886794573414925],
                                                [109.03380654978031, -6.865320810375001]
                                            ]
                                        ]
                                    }
                                }
                            });

                            // Add a new layer to visualize the polygon.
                            map.addLayer({
                                'id': 'wanasari',
                                'type': 'fill',
                                'source': 'wanasari', // reference the data source
                                'layout': {},
                                    'paint': {
                                    'fill-color': '#00ffff', // light blue color fill
                                    'fill-opacity': 0.5
                                    }
                            });
                            // Add a black outline around the polygon.
                            map.addLayer({
                                'id': 'outline',
                                'type': 'line',
                                'source': 'wanasari',
                                'layout': {},
                                    'paint': {
                                    'line-color': '#000',
                                    'line-width':  1
                                    }
                            });

                            // songgom
                            map.addSource('songgom', {
                                'type': 'geojson',
                                'data': {
                                    'type': 'Feature',
                                    'geometry': {
                                        'type': 'Polygon',
                                        // These coordinates outline songgom.
                                        // These coordinates outline songgom.
                                        'coordinates': [
                                            [
                                                [109.05270336429744, -6.969255932009507],
                                                [109.04188627266281, -6.963399257801213],
                                                [109.03623188385382, -6.969011905378115],
                                                [109.01877703144339, -6.965107462001052],
                                                [109.01705613050153, -6.954370075163557],
                                                [108.9772295658468, -6.980481019644815],
                                                [108.96370820130353, -7.0146426712965155],
                                                [108.98485069858936, -7.027574643281887],
                                                [108.97895046678867, -7.0451420287001385],
                                                [108.98681744252295, -7.059781008143409],
                                                [109.00156802202468, -7.041726200282887],
                                                [109.01582691554306, -7.046849933471911],
                                                [109.02443142025241, -7.042946141891633],
                                                [109.02566063521087, -7.03757837481651],
                                                [109.0185311884517, -7.024402683431569],
                                                [109.02738153615276, -6.999270237457222],
                                                [109.03475682590363, -7.001466330462436],
                                                [109.0254147922192, -6.9882896174810165],
                                                [109.04459054557147, -6.986093462517987],
                                                [109.0487698764303, -6.978284828020027],
                                                [109.04827819044691, -6.969743984891135],
                                                [109.05270336429744, -6.969255932009507]
                                            ]
                                        ]
                                    }
                                }
                            });

                            // Add a new layer to visualize the polygon.
                            map.addLayer({
                                'id': 'songgom',
                                'type': 'fill',
                                'source': 'songgom', // reference the data source
                                'layout': {},
                                    'paint': {
                                    'fill-color': '#3333cc', // purple blue color fill
                                    'fill-opacity': 0.5
                                    }
                            });
                            // Add a black outline around the polygon.
                            map.addLayer({
                                'id': 'outline',
                                'type': 'line',
                                'source': 'songgom',
                                'layout': {},
                                    'paint': {
                                    'line-color': '#000',
                                    'line-width':  1
                                    }
                            });

                            // jatibarang
                            map.addSource('jatibarang', {
                                'type': 'geojson',
                                'data': {
                                    'type': 'Feature',
                                    'geometry': {
                                        'type': 'Polygon',
                                        // These coordinates outline jatibarang.
                                        // These coordinates outline jatibarang.
                                        'coordinates': [
                                            [
                                                [109.07892112983917, -6.918914037788599],
                                                [109.07634620935309, -6.918402803696303],
                                                [109.07291298203832, -6.915505800052846],
                                                [109.06312828419122, -6.910904640105957],
                                                [109.05059700449226, -6.9161874495675635],
                                                [109.03394585201562, -6.920958968621923],
                                                [109.02793770421476, -6.937147691489296],
                                                [109.02038460412226, -6.937318096140796],
                                                [109.01489144041861, -6.947712663218599],
                                                [109.0196979586593, -6.965434018027229],
                                                [109.03549080430724, -6.968330714317747],
                                                [109.04149895210813, -6.963559675598771],
                                                [109.05351524770984, -6.968330714317748],
                                                [109.04870872946915, -6.971057000358047],
                                                [109.0493953749321, -6.977020695764462],
                                                [109.06347160692269, -6.976168743927171],
                                                [109.06518822058007, -6.972590529285735],
                                                [109.06879310926058, -6.974464835602506],
                                                [109.06673317287172, -6.992866717156044],
                                                [109.07480125706145, -6.993718638574179],
                                                [109.0701664001865, -6.972420137430522],
                                                [109.07686119345031, -6.961685325681187],
                                                [109.07583122525588, -6.949416668694147],
                                                [109.07754783891325, -6.947031059299155],
                                                [109.07840614574197, -6.932887555164616],
                                                [109.08183937305674, -6.9276049326329225],
                                                [109.07892112983917, -6.918914037788599]
                                            ]
                                        ]
                                    }
                                }
                            });

                            // Add a new layer to visualize the polygon.
                            map.addLayer({
                                'id': 'jatibarang',
                                'type': 'fill',
                                'source': 'jatibarang', // reference the data source
                                'layout': {},
                                    'paint': {
                                    'fill-color': '#ff5050', // light red color fill
                                    'fill-opacity': 0.5
                                    }
                            });
                            // Add a black outline around the polygon.
                            map.addLayer({
                                'id': 'outline',
                                'type': 'line',
                                'source': 'jatibarang',
                                'layout': {},
                                    'paint': {
                                    'line-color': '#000',
                                    'line-width':  1
                                    }
                            });


                        });

                        //Pop Up

                        map.on('load', function () {
                            map.addSource('places', {
                                // This GeoJSON contains features that include an "icon"
                                // property. The value of the "icon" property corresponds
                                // to an image in the Mapbox Streets style's sprite.
                                'type': 'geojson',
                                'data': {
                                    'type': 'FeatureCollection',
                                    'features': [
                                        {
                                            'type': 'Feature',
                                            'properties': {
                                                'description':
                                                    '<strong>Make it Mount Pleasant</strong><p><a href="http://www.mtpleasantdc.com/makeitmtpleasant" target="_blank" title="Opens in a new window">Make it Mount Pleasant</a> is a handmade and vintage market and afternoon of live entertainment and kids activities. 12:00-6:00 p.m.</p>',
                                                'icon': 'theatre-15'
                                            },
                                            'geometry': {
                                                'type': 'Point',
                                                'coordinates': [-77.038659, 38.931567]
                                            }
                                        },
                                        {
                                        'type': 'Feature',
                                            'properties': {
                                                'description':
                                                    '<strong>Seersucker Bike Ride and Social</strong><p>Feeling dandy? Get fancy, grab your bike, and take part in this year\'s <a href="http://dandiesandquaintrelles.com/2012/04/the-seersucker-social-is-set-for-june-9th-save-the-date-and-start-planning-your-look/" target="_blank" title="Opens in a new window">Seersucker Social</a> bike ride from Dandies and Quaintrelles. After the ride enjoy a lawn party at Hillwood with jazz, cocktails, paper hat-making, and more. 11:00-7:00 p.m.</p>',
                                            'icon': 'bicycle-15'
                                            },
                                            'geometry': {
                                                'type': 'Point',
                                                'coordinates': [-77.052477, 38.943951]
                                            }
                                        },
                                        {
                                        'type': 'Feature',
                                            'properties': {
                                                'description':
                                                    '<strong>Truckeroo</strong><p><a href="http://www.truckeroodc.com/www/" target="_blank">Truckeroo</a> brings dozens of food trucks, live music, and games to half and M Street SE (across from Navy Yard Metro Station) today from 11:00 a.m. to 11:00 p.m.</p>',
                                            'icon': 'music-15'
                                            },
                                            'geometry': {
                                                'type': 'Point',
                                                'coordinates': [-77.007481, 38.876516]
                                            }
                                        }
                                    ]
                                }
                            });

                            // Add a layer showing the places.
                            map.addLayer({
                                'id': 'places',
                                'type': 'symbol',
                                'source': 'places',
                                'layout': {
                                    'icon-image': '{icon}',
                                    'icon-allow-overlap': true
                                }
                            });
                            
                            // When a click event occurs on a feature in the places layer, open a popup at the
                            // location of the feature, with description HTML from its properties.
                            map.on('click', 'places', function (e) {
                                var coordinates = e.features[0].geometry.coordinates.slice();
                                var description = e.features[0].properties.description;
                            
                                // Ensure that if the map is zoomed out such that multiple
                                // copies of the feature are visible, the popup appears
                                // over the copy being pointed to.
                                while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
                                    coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
                                }
                            
                                new mapboxgl.Popup()
                                    .setLngLat(coordinates)
                                    .setHTML(description)
                                    .addTo(map);
                            });
                            
                            // Change the cursor to a pointer when the mouse is over the places layer.
                            map.on('mouseenter', 'places', function () {
                                map.getCanvas().style.cursor = 'pointer';
                            });
                            
                            // Change it back to a pointer when it leaves.
                            map.on('mouseleave', 'places', function () {
                                map.getCanvas().style.cursor = '';
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