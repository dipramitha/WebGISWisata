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
        margin-top: 13px;
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
                <h1>Peta Objek Wisata Air Terjun di Kabupaten Kebumen</h1>
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
            <div class="col-md-3">
                <div class="card" style="width: 17rem;">
                    <img src="pic\curug_silancur.jpg" class="card-img-top">
                    <div class="card-body">
                        <h2 class="card-title">Curug Silancur</h2>
                        <p class="card-text" align="justify">Curug Silancur adalah salah satu objek wisata air terjun di
                            Kabupaten Kebumen yang berada di desa Wadasmalang, kecamatan Karangsambung. Terletak sekitar
                            20 km ke arah utara dari pusat kota. Topografi wilayahnya berupa dataran tinggi. Akses jalan
                            menuju objek wisata ini masih alami karena belum
                            ramai wisatawan yang
                            berkunjung. Pengunjung akan disuguhi pemandangan alam di sekitar air terjun yang masih
                            sangat alami. Pengunjung tidak perlu membayar tiket masuk, hanya perlu membayar biaya
                            penitipan motor sekitar Rp 5.000,00.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card" style="width: 17rem;">
                    <img src="pic\curug_silangit.jpg" class="card-img-top">
                    <div class="card-body">
                        <h2 class="card-title">Curug Silangit</h2>
                        <p class="card-text" align="justify">Curug Silangit adalah salah satu objek wisata air terjun di
                            Kabupaten Kebumen yang berada di desa Sidoagung, kecamatan Sruweng. Terletak sekitar
                            16 km ke arah barat laut dari pusat kota. Biaya tiket masuk ke Curug Silangit sekitar Rp
                            5.000,00. Pengunjung akan disuguhi pemandangan alam di sekitar air terjun yang masih
                            sangat alami.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card" style="width: 17rem;">
                    <img src="pic\curug_sudimoro.jpg" class="card-img-top">
                    <div class="card-body">
                        <h2 class="card-title">Curug Sudimoro</h2>
                        <p class="card-text" align="justify">Curug Sudimoro adalah salah satu objek wisata air terjun di
                            Kabupaten Kebumen yang berada di desa Donorejo, kecamatan Sempor. Terletak sekitar
                            34 km ke arah barat laut dari pusat kota. Biaya tiket masuk ke Curug Sudimoro sekitar Rp
                            5.000,00. Pengunjung akan disuguhi pemandangan alam di sekitar air terjun yang masih
                            sangat alami.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card" style="width: 17rem;">
                    <img src="pic\curug_wringin.jpg" class="card-img-top">
                    <div class="card-body">
                        <h2 class="card-title">Curug Wringin</h2>
                        <p class="card-text" align="justify">Curug Wringin adalah salah satu objek wisata air terjun di
                            Kabupaten Kebumen yang berada di desa Pujotirto, kecamatan Kebumen. Terletak sekitar
                            21 km ke arah timur laut dari pusat kota. Biaya tiket masuk ke Curug Wringin sekitar Rp
                            5.000,00. Pengunjung akan disuguhi pemandangan alam di sekitar air terjun yang masih
                            sangat alami.</p>
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
var map = L.map('map').setView([-7.570827629977975, 109.63569395198772], 12);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '?? OpenStreetMap'
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

var jsonTest = new L.GeoJSON.AJAX(["assets/wisataairterjun.geojson"], {
    onEachFeature: popUp
}).addTo(map);
</script>

</html>