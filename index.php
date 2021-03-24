<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="custom.css">

<!-- font awesome -->
<script src="https://kit.fontawesome.com/2adaa6ac33.js" crossorigin="anonymous"></script>
  <title>OSI </title>
</head>
<body>
  
  <!-- carosel -->
  <div id="carouselExampleIndicators" class="carousel slide col mt-1" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/osi1.jpg" alt="First slide">
        <div class="carousel-caption d-none d-sm-block">
          <h5>OSI</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/osi2.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-sm-block">
          <h5>OSI</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/osi3.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-sm-block">
          <h5>OSI</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- carosel -->
<!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <a class="navbar-brand" href="#">OSI</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#galery">Galery <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#harga">Harga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#jadwal">Jadwal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- end navbar -->

  <!-- jadwal -->
  <!-- jadwal -->

  <!-- galery -->
  <section id="galery">
   <div class="container">
    <h1 class="text-center scrol">Galery</h1>
    <div class="row col-md-12">
      <?php 
      for ($i=0; $i <= 13; $i++) { 
        ?>
        <div class="card ml-auto mt-4 rounded mx-auto d-block" style="width: 18rem;">
          <img class="card-img-top" src="img/foto1.jpg" alt="Card image cap">
          <div class="card-body">
            <table class="m-auto">
              <tr>
                <td colspan="2" class="text-center"><a href="https://www.instagram.com/iron.meibarata/">Iron</a></td>
              </tr>
              <tr>
                <td>MUA</td>
                <td>: <a href="https://www.instagram.com/mtrianjasmoro/">cup cup</a></td>
              </tr>
              <tr>
                <td>Tanggal</td>
                <td>: 12 Oktober 2021</td>
              </tr>
            </table>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>

<!-- galery -->

<!-- Harga -->
<section id="harga">
  <div class="container">
    <h1 class="text-center scrol">Harga</h1>
    <div class="card">
      <div class="card-header">
        Quote
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
        </blockquote>
      </div>
    </div>
  </div>
</section>
<!-- harga -->

<!-- jadwal -->
<section id="jadwal">
  <div class="container">
    <h1 class="text-center scrol">Jadwal</h1>
  </div>
</section>
<!-- jadwal -->
<!-- contact -->
<section id="contact">  
    <div class="container mt-5">
      <h1 class="text-center scrol">Contact</h1>
        <div class="card" style="width:100%">
    <div class="card-body ">
      <h4 class="card-title text-center">Iron</h4>
      <p class="card-text p-1 mb-4 h4 "><a href="https://www.instagram.com/iron.meibarata/" class="rounded bg-light p-2"><i class="fab fa-instagram ">&nbsp;Iron mei barata</i></a></p>

      <p class="card-text p-1 mb-4 h4"><a href="https://wa.me/081913451575" class="rounded bg-light p-2"><i class="fab fa-whatsapp text-success">&nbsp;081 91345 1575</i></a></p>
    </div>
    <img class="card-img-bottom" src="img/5.jpg" alt="Card image" style="width:100%">
  </div>
</div>
    </div>
</section>
<!-- contact -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>