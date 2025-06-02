<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
      .navbar-custom{
        background-color: #2F539B;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container-fluid">
    <a class="navbar-brand" href="#page-top" style="color: white;">SMK NEGERI 71 JAKARTA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" style="color: white;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: white;">Tentang</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
            Profile
          </a>
          <ul class="dropdown-menu" style="color: white;">
            <li><a class="dropdown-item" href="#">Guru Management</a></li>
            <li><a class="dropdown-item" href="#">Guru Kejuruan</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Pelajaran</a></li>
          </ul>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <div id="carouselExampleFade" class="carousel slide carousel-fade">
  <div class="carousel-inner" style="height: 10%; ">
    <div class="carousel-item active">
      <img src="sekolahku.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="bendera.JPG" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="senam.JPG" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </body>

</html>