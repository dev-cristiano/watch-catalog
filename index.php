<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TempoNobre</title>

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://kit.fontawesome.com/909f0af900.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="app/assets/css/app.css">
    <link rel="stylesheet" href="app/assets/css/index.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand fs-5 fw-normal" href="#">TempoNobre</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav fs-5">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Colection</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Services</a>
                    </li>
                </ul>
            </div>
            <button class="btn btn-outline-success"><i class="fab fa-whatsapp"></i> Suporte</button>
        </div>
    </nav>

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="./app/assets/images/watch1.png" alt="" id="img-swiper"></div>
            <div class="swiper-slide"><img src="./app/assets/images/watch1.png" alt="" id="img-swiper"></div>
            <div class="swiper-slide"><img src="./app/assets/images/watch1.png" alt="" id="img-swiper"></div>
        </div>
    </div>

    <footer class="bg-dark text-white mt-auto py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <h5>About Us</h5>
                    <p>Some information about the company.</p>
                </div>
                <div class="col-md-3 mb-3">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">Home</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Colection</a></li>
                        <li><a href="#" class="text-white text-decoration-none">About Us</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Services</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-3">
                    <h5>Contact</h5>
                    <address>
                        Avenida Eliziario L. da Costa<br>
                        Jandaia - GO / 75950-000<br>
                        <a href="tel:+1234567890" class="text-white text-decoration-none">+55 (62) 9 9104-1247</a><br>
                        <a href="criistiano.dev@gmail.com" class="text-white text-decoration-none">criistiano.dev@gmail.com</a>
                    </address>
                </div>
                <div class="col-md-3 mb-3">
                    <h5>Follow Us</h5>
                    <div>
                        <a href="#" class="text-white me-2"><i class="fab fa-whatsapp"></i></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col text-center mt-3">
                    <p class="mb-0">&copy; 2024 Company Name. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>



    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="./app/assets/js/swiper.js"></script>
</body>

</html>