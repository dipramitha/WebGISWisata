<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Kebumen</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin="" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <style>
    #map {
        height: 530px;
    }

    .row {
        margin-top: 13px
    }

    h1 {
        font-family: 'Pacifico', cursive;
        font-size: 30px;
    }

    h2 {
        font-family: 'Pacifico', cursive;
        font-size: 20px;
    }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #C2DEB2;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Wisataku!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="beranda.php">Beranda</a>
                    <a class="nav-link" href="index.php">Destinasi</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Peta Objek Wisata Goa di Kabupaten Kebumen</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="map"></div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 22rem;">
                    <img src="pic\goa_barat.jpg" class="card-img-top">
                    <div class="card-body">
                        <h2 class="card-title">Goa Barat</h2>
                        <p class="card-text" align="justify">Goa Barat adalah salah satu goa yang berada di Kabupaten
                            Kebumen. Letaknya di desa Jatijajar, kecamatan Ayah sekitar 36 km ke arah barat dari pusat
                            kota. Biaya tiket masuk Goa Barat adalah Rp 50.000,00.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 22rem;">
                    <img src="pic\goa_jatijajar.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h2 class="card-title">Goa Jatijajar</h2>
                        <p class="card-text" align="justify">Goa Jatijajar adalah salah satu goa yang berada di
                            Kabupaten
                            Kebumen. Letaknya di desa Jatijajar, kecamatan Ayah sekitar 35 km ke arah barat dari pusat
                            kota. Biaya tiket masuk Goa Jatijajar adalah Rp 5.000.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 22rem;">
                    <img src="pic\goa_petruk.jpeg" class="card-img-top">
                    <div class="card-body">
                        <h2 class="card-title">Goa Petruk</h2>
                        <p class="card-text" align="justify">Goa Petruk adalah salah satu goa yang berada di Kabupaten
                            Kebumen. Letaknya di desa Candirenggo, kecamatan Ayah sekitar 46 km ke arah barat dari pusat
                            kota. Biaya tiket masuk Goa Barat sebesar Rp 10.000.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
    integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
    crossorigin="">
</script>

<script src="assets\leaflet.ajax.js"></script>
<script src="assets\leaflet.ajax.min.js"></script>

<script>
var map = L.map('map').setView([-7.6720554133904475, 109.43516927933531], 12);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© OpenStreetMap'
}).addTo(map);

var adminStyle = {
    "color": "#A5BF96",
    "weight": 3,
    "opacity": 0.5
};

var jalanStyle = {
    "color": "#9E92EF",
    "weight": 2,
    "opacity": 0.5
};

function popUp(f, l) {
    var out = [];
    if (f.properties) {
        for (key in f.properties) {
            out.push(key + ": " + f.properties[key]);
        }
        l.bindPopup(out.join("<br />"));
    }
}
var jsonTest = new L.GeoJSON.AJAX(["assets/admin.geojson"], {
    onEachFeature: popUp,
    style: adminStyle
}).addTo(map);

var jsonTest = new L.GeoJSON.AJAX(["assets/jalan.geojson"], {
    onEachFeature: popUp,
    style: jalanStyle
}).addTo(map);

var jsonTest = new L.GeoJSON.AJAX(["assets/wisatagoa.geojson"], {
    onEachFeature: popUp
}).addTo(map);
</script>

</html>