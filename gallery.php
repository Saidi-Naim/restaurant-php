<?php include 'connect.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="/bootstrap-5.2.0-beta1-dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/makiLogo.png">
    <link rel="apple-touch-icon" type="image/png" sizes="16x16" href="./img/makiLogo.png">
    <link rel="stylesheet" href="style.css" />
    <title>Pictures</title>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-md fixed-top bg-dark navbar-dark pl-3 pr-3">
    <!-- Logo Navbar -->
    <a href="index.html" class="navbar-brand"><img src="./img/makiLogo.png" alt="logo" width="30" height="40" class="d-inline-block align-text-top"></a>
    <!-- Logo Navbar x-->

    <!-- Hamburger Menu and Links -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle Navigation">

        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="toggleMobileMenu">
        <div class="navbar-nav ml-md-auto">
            <div>
                <a class="nav-item nav-link" href="menu.html"><img src="./img/poulpe.png"> Menu</a>
            </div>
            <div>
                <a class="nav-item nav-link" href="gallery.html"><img src="./img/poulpe.png"> Gallery</a>
            </div>
            <div>
                <a class="nav-item nav-link" href="contact.html"><img src="./img/poulpe.png"> Contact</a>
            </div>
            <div>
                <a class="nav-item nav-link" href="Locations.html"><img src="./img/poulpe.png"> Locations</a>
            </div>
        </div>
    </div>
    <!-- Hamburger Menu and Links x-->
  </nav>
  <!-- Navbar x-->

    <!-- Carousel -->
      <div id="carouselGalery" class="carousel slide pl-3 pr-3 mt-5 pt-5"     data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselGalery" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselGalery" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselGalery" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselGalery" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <!-- Carousel Images and interval -->
        <div class="container">
          <div class="row">
          <?php 
            $sql='SELECT * from upload';
            $result=$con->query($sql);
            $values= $result->fetchAll(PDO::FETCH_ASSOC);
            foreach($values as $i => $row){
          
                echo '
              <div class="col-lg-6">
                <img width="400" height="400" src="./img/'.$row['name'].'" class="d-block" alt="maki">
              </div>
              ';
            }
            ?>
            </div>
          
        </div>
        <!-- Carousel Images and Interval x-->

        <!-- Carousel Button -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselGalery" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselGalery" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        <!-- Carousel Button x-->
      </div>
      <!-- Carousel x-->

      <!-- JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>