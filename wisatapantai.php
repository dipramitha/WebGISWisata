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
        height: 483px;
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
                <h1>Peta Objek Wisata Pantai di Kabupaten Kebumen</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div id="map"></div>
            </div>

            <div class="col-md-7">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                            aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5"
                            aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6"
                            aria-label="Slide 7"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7"
                            aria-label="Slide 8"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8"
                            aria-label="Slide 9"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9"
                            aria-label="Slide 10"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="10"
                            aria-label="Slide 11"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="11"
                            aria-label="Slide 12"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="12"
                            aria-label="Slide 13"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="13"
                            aria-label="Slide 14"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="14"
                            aria-label="Slide 15"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="15"
                            aria-label="Slide 16"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="16"
                            aria-label="Slide 17"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="17"
                            aria-label="Slide 18"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="pic\pantai_ambal.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Pantai Ambal</h2>
                                <p>Desa Kenoyojayan, Kecamatan Ambal - Harga Tiket Rp 5.000,00</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="pic\pantai_ayah.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Pantai Ayah</h2>
                                <p>Desa Ayah, Kecamatan Ayah - Harga Tiket Rp 5.000,00</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="pic\pantai_bocor.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Pantai Bocor</h2>
                                <p>Desa Bocor, Kecamatan Buluspesantren - Harga Tiket Rp 5.000,00</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="pic\pantai_bopong.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Pantai Bopong</h2>
                                <p>Desa Surorejan, Kecamatan Puring - Harga Tiket Rp 5.000,00</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="pic\pantai_karang_agung.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Pantai Karang Agung</h2>
                                <p>Desa Argopeni, Kecamatan Ayah - Harga Tiket Rp 5.000,00</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="pic\pantai_karangbolong.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Pantai Karangbolong</h2>
                                <p>Desa Karangbolong, Kecamatan Buayan - Harga Tiket Rp 5.000,00</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="pic\pantai_lampon.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Pantai Lampon</h2>
                                <p>Desa Pasir, Kecamatan Ayah - Harga Tiket Rp 5.000,00</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="pic\pantai_lembupurwo.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Pantai Lembupurwo</h2>
                                <p>Desa Lembupurwo, Kecamatan Mirit - Harga Tiket Rp 3.000,00</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="pic\pantai_logending.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Pantai Logending</h2>
                                <p>Desa Argopeni, Kecamatan Ayah - Harga Tiket Rp 5.000,00</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="pic\pantai_menganti.jpeg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Pantai Menganti</h2>
                                <p>Desa Karangduwur, Kecamatan Ayah - Harga Tiket Rp 10.000,00</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="pic\pantai_pecaron.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Pantai Pecaron</h2>
                                <p>Desa Srati, Kecamatan Ayah - Harga Tiket Rp 5.000,00</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="pic\pantai_petanahan.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Pantai Petanahan</h2>
                                <p>Desa Karanggadung, Kecamatan Petanahan - Harga Tiket Rp 5.000,00</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="pic\pantai_sawangan.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Pantai Sawangan</h2>
                                <p>Desa Karangduwur, Kecamatan Ayah - Harga Tiket Rp 10.000,00</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="pic\pantai_setrojenar.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Pantai Setrojenar</h2>
                                <p>Desa Setrojenar, Kecamatan Buluspesantren - Harga Tiket Rp 5.000,00</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="pic\pantai_surumanis.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Pantai Surumanis</h2>
                                <p>Desa Pasir, Kecamatan Ayah - Harga Tiket Rp 5.000,00</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="pic\pantai_suwuk.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Pantai Suwuk</h2>
                                <p>Desa Tambakmulyo, Kecamatan Puring - Harga Tiket Rp 5.000,00</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="pic\pantai_watubale.jpeg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>Pantai Watubale</h2>
                                <p>Desa Pasir, Kecamatan Ayah - Harga Tiket Rp 10.000,00</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
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
var map = L.map('map').setView([-7.745307331767559, 109.59901151367379], 10.3);
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

var jsonTest = new L.GeoJSON.AJAX(["assets/wisatapantai.geojson"], {
    onEachFeature: popUp
}).addTo(map);
</script>

</html>