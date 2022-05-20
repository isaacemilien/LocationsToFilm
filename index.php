<?php include 'header.php';?>

  <div class="container-fluid">
    <!-- Background -->
    <div class="row bg h-100" style="background-image: url('imgs/azer.jpg')">
      <div class="col-6 my-5 bg-dark p-5 m-5" style="--bs-bg-opacity: .5;">
        <h1 class="fw-bold text-light">Locations</h1>
        <p class=" text-light ">Azerbaijan is a new location for film industry, most of its unique pearls yet to be explored. With short distance between the cities and the countryside, all corners of the country are easily accessible.</p>
      </div>
    </div>
  </div>
  <!--Carousel Start -->

  <div class="container-lg my-3">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
        </ol>
        
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img style="object-fit: cover; overflow: hidden;"src="imgs/azer_02.jpg" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some demonstrative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="imgs/pol.jpg" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some demonstrative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="imgs/russia_06.jpg" class="d-block w-100" alt="Slide 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some demonstrative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>

        <!-- Carousel controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

</div>
  <!--Carousel End -->



    <!--Cards start-->
    <div class="row m-5 justify-content-center">
      <div class="col-lg-4 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <img src="imgs/azer_02.jpg" width="100%" height="200" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Azerbaijan</h5>
            <p class="card-text">Azerbaijan is a country located in the southern part of the Caucasus, at the crossroads of Southwest Asia and Southeastern Europe. It shares a border with Russia, Georgia, Armenia, Iran and its exclave with Turkey.</p>
            <a href="./azerbaijan.php" class="btn btn-primary">Visit</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <img src="imgs/pol.jpg" width="100%" height="200" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Poland</h5>
            <p class="card-text">Wander old medieval towns and gawp at the baroque architecture, taking in the charm as you walk through. With old-fashioned market squares and gothic ruins, you’ll soon notice yourself falling irreversibly in love with this country.</p>
            <a href="./international.php" class="btn btn-primary">Visit</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <img src="imgs/russia_06.png" width="100%" height="200" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Russia</h5>
            <p class="card-text">Whether you're sipping on a cocktail in a glamorous rooftop bar in Moscow, gazing out from your Trans-Siberian, any Russian adventure is guaranteed to come with views to take your breath away. </p>
            <a href="./international.php" class="btn btn-primary">Visit</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Quote Start -->
  <div class="container-fluid">
    <div class="row bg h-100" style="background-image: url('imgs/doo.jpg')">
      <div class="col-6 my-5 bg-dark p-5 m-5" style="--bs-bg-opacity: .5;">
        <i class="fa-solid fa-quote-left text-white fs-3"></i>
        <p class="text-light fst-italic fw-bold">“You've gotta dance like there's nobody watching, love like you'll never be hurt, sing like there's nobody listening, and live like it's heaven on Earth.”</p>
        <div class="text-white fw-bold mx-3">William W. Purkey </div>
        <div class="text-white  mx-3">Anesthesiologist in Winter Park, Florida</div>
      </div>
    </div>
  </div>
  <!-- Quote End -->
<?php include "footer.php"; ?>