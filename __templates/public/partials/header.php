<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/dist/css/style.css">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//kenwheeler.github.io/slick/slick/slick-theme.css"/>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


    <title>Ciné Coris &mdash; <?= $title ?></title>

</head>
<body>
<header >
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

            <div class="div-logo">
                <a href="/"><img src="assets/images/Logo.svg" class="img-logo" ></a>
            </div>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class=" text-nav-secondary">News</a></li>
                <li><a href="films.php" class="  text-nav-white">Films</a></li>
                <li><a href="series.php" class=" text-nav-white">Séries</a></li>
                <li><a href="a-venir.php" class="  text-nav-white">A venir</a></li>

            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form>

            <div class="text-end">
                <a href="/connexion.php" class="btn btn-outline-light me-2">Login</a>
            </div>
        </div>
    </div>
</header>
</body>
</html>