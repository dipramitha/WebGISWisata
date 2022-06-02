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
        height: 277px;
    }

    .row {
        margin-top: 20px;
    }

    h1 {
        font-family: 'Pacifico', cursive;
        font-size: 27px;
    }

    h2 {
        font-family: 'Pacifico', cursive;
        font-size: 12px;
    }

    .alert {
        width: 270px;
        height: 57px;
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
                <h1>Peta Objek Wisata di Kabupaten Kebumen</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div id="map"></div>
            </div>
            <div class="col-md-3">
                <div class="alert alert-primary text-center" role="alert">
                    <a href="wisataairterjun.php" class="alert-link">Wisata Air Terjun</a>
                </div>

                <div class="alert alert-secondary text-center" role="alert">
                    <a href="wisatabukit.php" class="alert-link">Wisata Bukit</a>
                </div>

                <div class="alert alert-success text-center" role="alert">
                    <a href="wisatadesa.php" class="alert-link">Wisata Desa</a>
                </div>

                <div class="alert alert-danger text-center" role="alert">
                    <a href="wisatagoa.php" class="alert-link">Wisata Goa</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="alert alert-warning text-center" role="alert">
                    <a href="wisatahutan.php" class="alert-link">Wisata Hutan</a>
                </div>

                <div class="alert alert-info text-center" role="alert">
                    <a href="wisatapantai.php" class="alert-link">Wisata Pantai</a>
                </div>

                <div class="alert alert-light text-center" role="alert">
                    <a href="wisatasejarah.php" class="alert-link">Wisata Sejarah</a>
                </div>
                <div class="alert alert-dark text-center" role="alert">
                    <a href="wisatawaduk.php" class="alert-link">Wisata Waduk</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Website Resmi Pemerintah Kabupaten Kebumen</h5>
                    <p class="card-text">Infografis terkait wilayah Kabupaten Kebumen</p>
                    <a href="https://www.kebumenkab.go.id/" class="btn btn-primary">Info Wilayah</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Website Plesir Kebumen</h5>
                    <p class="card-text">Infografis terkait wisata di Kabupaten Kebumen</p>
                    <a href="https://sikopat.kebumenkab.go.id/index.php/wisata/index/kontak" class="btn btn-primary">Info Wisata</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 py-3">
                <h2>© Pramitha 20/464138/SV/18457</h2>
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
var map = L.map('map').setView([-7.633029513364326, 109.61137112705136], 11.3);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 17,
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

var jsonTest = new L.GeoJSON.AJAX(["assets/wisata.geojson"], {
    onEachFeature: popUp
}).addTo(map);
</script>

</html>