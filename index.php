<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/paddle-white.png" alt="Halifax Canoe and Kayak" class="logo me-2">
      <span class="fw-bold align-items-center">Halifax Canoe and Kayaking</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title text-white" id="offcanvasLabel">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body bg-primary">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-light" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#">Book Trip</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="/main.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>



  <div id="carouselExampleAutoplaying" class="carousel slide mt-3 d-flex " data-bs-ride="carousel">
    <div class="carousel-inner ">
      <div class="carousel-item active">
        <img src="/kayaking blue rocks 1920x1080.jpg" class="d-block mx-auto" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./28869.jpg" style="width: 1280px;" class="d-block mx-auto " alt="...">
      </div>
      <div class="carousel-item">
        <img src="./canoe.jpg" class="d-block mx-auto" style="width: 1280px;" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- events  -->

  <section class="Upcoming container mt-3">

    <h1 class="title is-3"> Upcoming Events</h1>

    <h3>Welcome to our upcoming events page! Here, you'll find all the latest information on the exciting canoe and
      kayak events happening in the near future. Whether you're an experienced paddler or just starting out, there's
      something here for everyone.</h3>
    <button type="button" class="btn btn-primary btn-lg viewEvents">View Events</button>
  </section>




  <div class="events container mt-4">

    <h1> Halifax</h1>

    <div class="d-flex justify-content-between">
      <div class="card mb-3 " style="max-width: 650px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="/kayaking blue rocks 1920x1080.jpg" class="img-fluid rounded-start" alt="..."
              style="height: 300px;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Halifax Harbour Kayak Tour</h5>
              <p class="card-text">Embark on a two-hour guided kayak tour of Halifax Harbour and take in stunning views
                of the city skyline. You'll paddle past historic sites like the Halifax Citadel and the Maritime Museum
                of the Atlantic, and learn about the city's rich maritime history. Suitable for beginners, this tour
                includes all necessary equipment and instruction..</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-3" style="max-width: 650px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="/28869.jpg" class="img-fluid rounded-start" alt="..." style="height: 300px;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Keji Wilderness Canoe Trip</h5>
              <p class="card-text">Join us for a three-day guided canoe trip through the wilderness of Kejimkujik
                National Park. You'll paddle through tranquil lakes and winding rivers, portage through beautiful
                forests, and camp under the stars. Suitable for intermediate paddlers, this trip includes all necessary
                equipment, meals, and instruction. </p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <h1> Sydney</h1>
    <div class="d-flex justify-content-between mt-3">
      <div class="card mb-3" style="max-width: 650px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="/2-hour-exploratour-along.jpg" class="img-fluid rounded-start" alt="..."
              style="height: 345px;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Bay of Fundy Sea Kayaking</h5>
              <p class="card-text">EExperience the world-renowned tides of the Bay of Fundy on a sea kayaking adventure.
                Paddle along the rugged coastline, explore sea caves, and spot wildlife like seals, whales, and
                seabirds. Suitable for intermediate paddlers, this tour includes all necessary equipment,
                transportation, and instruction.. Suitable for beginners, this tour includes all necessary equipment and
                instruction..</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-3" style="max-width: 650px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="/download.jfif" class="img-fluid rounded-start" alt="..." style="height: 345px;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Shubenacadie River Whitewater Rafting</h5>
              <p class="card-text">Get your adrenaline pumping on a thrilling whitewater rafting trip down the
                Shubenacadie River. Navigate Class III and IV rapids, plunge down waterfalls, and experience the power
                of the river up close. Suitable for adventurous beginners and experienced paddlers, this trip includes
                all necessary equipment, transportation, and instruction.. </p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  </div>


  <!-- footer -->

  <footer class="footer">
    <div class="content has-text-centered">
      <p>
        <strong>Website</strong> by <a href="https://jgthms.com">Renjith Rajakumar</a>. The source code is licensed
        <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
        is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
      </p>
    </div>
  </footer>



  <script src="./main.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

</body>

</html>

</html>