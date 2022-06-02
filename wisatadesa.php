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
                <h1>Peta Objek Wisata Desa di Kabupaten Kebumen</h1>
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
            <div class="col-md-6">
                <div class="card" style="width: 34rem;">
                    <img src="pic\jembangan_wisata_alam.jpg" class="card-img-top">
                    <div class="card-body">
                        <h2 class="card-title">Jembangan Wisata Alam</h2>
                        <p class="card-text" align="justify">Jembangan Wisata Alam merupakan salah satu objek wisata
                            yang berada di desa Jembangan, kecamatan Poncowarno. Terletak sekitar 17 km ke arah timur
                            dari pusat kota. Objek wisata ini berada dekat dengan
                            lokasi aliran Waduk Wadaslintang sehingga dimanfaatkan untuk wisata air seperti bebek air
                            dan kapal naga. Di sekitaran sungai pun terdapat restoran dan gazebo untuk beristirahat
                            sambil menikmati pemandangan yang masih alami. Biaya tiket masuknya untuk parkir sebesar Rp
                            3.000,00, wahana perahu Rp 15.000,00, bebek air Rp 10.000, dan gazebo Rp 10.000. </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card" style="width: 34rem;">
                    <img src="pic\kampung_etnik.jpg" class="card-img-top">
                    <div class="card-body">
                        <h2 class="card-title">Kampung Etnik</h2>
                        <p class="card-text" align="justify">Kampung Etnik adalah salah satu objek wisata di
                            Kabupaten Kebumen yang berada di desa Pejagoan, kecamatan Pejagoan. Terletak sekitar
                            2 km dari pusat kota. Kampung Etnik ini mempunyai beberapa destinasi seperti wisata perahu,
                            kolam renang, bungalow, penyewaan pakaian adat, dan lain-lain. Biaya tiket masuk ke Kampung
                            Etnik sekitar Rp 10.000,00, biaya parkir Rp 3.000,00, dan biaya paket terusan untuk seluruh
                            wahana lengkap dan voucher makan sebesar Rp 35.000,00.</p>
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
var map = L.map('map').setView([-7.656290242741518, 109.70398862411031], 13);
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

var jsonTest = new L.GeoJSON.AJAX(["assets/wisatadesa.geojson"], {
    onEachFeature: popUp
}).addTo(map);
</script>

</html>