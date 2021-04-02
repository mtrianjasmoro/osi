<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="custom.css">

  <!-- kalender -->
  <link href='calender/fullcalendar.min.css' rel='stylesheet' />
  <link href='calender/fullcalendar.print.min.css' rel='stylesheet' media='print' />  
  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/2adaa6ac33.js" crossorigin="anonymous"></script>
  <title>OSI </title>
</head>
<body class="bg-custom-body">

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
  <nav class="navbar navbar-expand-sm navbar-dark bg-light sticky-top">
    <a href="login.php"><img src="img/logo.png" width="70px" height="100%"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
      <strong>
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#galery">Galery </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#harga">Harga</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#jadwal">Jadwal</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#reservasi">Reservasi</a>
          </li>
        </ul>
      </strong>
    </div>
  </nav>
  <!-- end navbar -->

  <!-- galery -->
  <section id="galery">
   <div class="container">
    <h1 class="text-center scrol">Galery</h1>
    <div class="row col-md-12">
      <?php 
      for ($i=0; $i <= 13; $i++) { 
        ?>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Nama pengantin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="img/osi1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="img/osi2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="img/osi3.jpg" class="d-block w-100" alt="...">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card ml-auto mt-4 rounded mx-auto d-block bg-card foto-galery" data-toggle="modal" data-target="#exampleModalCenter" style="width: 18rem;">
          <img class="card-img-top" src="img/foto1.jpg" alt="Card image cap">
          <div class="card-body">
            <table class="m-auto">
              <tr>
                <td colspan="2" class="text-center"><a href="https://www.instagram.com/iron.meibarata/">Nama pengantin</a></td>
              </tr>
              <tr>
                <td>MUA</td>
                <td>: <a href="https://www.instagram.com/mtrianjasmoro/">Sakinah</a></td>
              </tr>
              <tr>
                <td>Kuade </td>
                <td>: <a href="https://www.instagram.com/mtrianjasmoro/">Warohma</a></td>
              </tr>
              <tr>
                <td>Hairdo/hijab do</td>
                <td>: <a href="https://www.instagram.com/mtrianjasmoro/">Rambuts</a></td>
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
    <div class="row col-md-12">
      <?php
      for ($i=0; $i <= 7; $i++) { 
        ?>
        <div class="card ml-auto mt-4 rounded mx-auto d-block" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title text-center">Akad & Resepsi</h5>
            <div class="card">
              <div class="card-header text-center">
                <b class="garis-solid">Start from 3.500 K</b>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Kuade 4 meter</li>
                <li class="list-group-item">60 foto edit</li>
                <li class="list-group-item">60 foto cetak</li>
                <li class="list-group-item">2 crew foto</li>
                <li class="list-group-item">unlimite file foto</li>
              </ul>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>
<!-- harga -->

<!-- jadwal -->
<section id="jadwal">
  <div class="container">
    <h1 class="text-center scrol  mt-4">Jadwal</h1>
    <div class="row">
      <div id='calendar' class="p-3 rounded" style="background-color: #f5f5f5;"></div>
    </div>
  </div>
</section>

<!-- reservasi -->
<section id="reservasi">  
  <div class="container mt-5">
    <h1 class="text-center scrol">Reservasi</h1>
    <div class="card" style="width:100%">
      <div class="card-body ">
        <h4 class="card-title text-center">Iron</h4>
        <p class="card-text p-1 mb-4 h4 "><a href="https://www.instagram.com/iron.meibarata/" class="rounded bg-light p-2"><i class="fab fa-instagram ">&nbsp;Iron mei barata</i></a></p>

        <p class="card-text p-1 mb-4 h4"><a href="https://wa.me/081913451575" class="rounded bg-light p-2"><i class="fab fa-whatsapp text-success">&nbsp;081 91345 1575</i></a></p>
      </div>
      <img class="card-img-bottom" src="img/fotofooter.jpg" alt="Card image" style="width:100%">
    </div>
  </div>
</div>
</section>
<!-- reservasi -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- kalender -->
<script src='calender/jquery.min.js'></script>
<script src='calender/moment.min.js'></script>
<script src='calender/fullcalendar.min.js'></script>

</body>
<footer class="text-center bg-light">mtrianjasmoro@gmail.com 2021</footer>
</html>

<script>

  $(document).ready(function() {

    $('#calendar').fullCalendar({
      defaultDate: new Date().toISOString().slice(0, 10),
      editable: false,
      eventLimit: false, // allow "more" link when too many events
      events: [
      {
        id:99,
        title: 'Hanafi',
        start: '2021-03-01',
        color: '#ff9800',
      },
      {
        id:100,
        title: 'Ulya',
        start: '2021-03-02',
        color: '#ff9800',
      },
      {
        id:101,
        title: 'Khanafi',
        start: '2021-03-04',
        color: '#ff9800',
      },
      ]
    });

  });

</script>