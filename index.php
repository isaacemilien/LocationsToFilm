<?php include 'header.php';?>

  <!--Carousel Start -->
  <div id="myCarousel" class="carousel  carousel-light slide h-500px" data-bs-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
      </ol>

    <!-- Wrapper for carousel items -->
    <div class="carousel-inner" style = "height: 500px;">
        <div class="carousel-item active" style = "height: 500px;">
            <img style="object-fit: cover; overflow: hidden; height: 500px;"src="imgs/baku.jpg" class="d-block w-100" alt="Slide 1" >
            <div class="carousel-caption shadow-lg p-3 mb-5 bg-body-dark bg-dark rounded  text-light" style ="--bs-bg-opacity: .5;">
              <h1>Azerbaijan</h1>
              <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, excepturi!</h5>
            </div>
          </div>
          <div class="carousel-item" style = "height: 500px;">
              <img src="imgs/warsaw.jpeg" class="d-block w-100" alt="Slide 2">
              <div class="carousel-caption shadow-lg p-3 mb-5 bg-body-dark bg-dark rounded  text-light" style ="--bs-bg-opacity: .5;">
                  <h1>Poland</h1>
                  <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, excepturi!</h5>
              </div>
          </div>
          <div class="carousel-item" style = "height: 500px;" >
              <img src="imgs/ruski.jpg" class="d-block w-100" alt="Slide 3">
              <div class="carousel-caption shadow-lg p-3 mb-5 bg-body-dark bg-dark rounded  text-light" style ="--bs-bg-opacity: .5;">
                  <h1>Russia</h1>
                  <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, excepturi!</h5>
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
<!--Carousel End -->
    <!-- Location cards -->
  <div class="album py-5">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="imgs/azer_04.jpg" alt="">

            <div class="card-body">
              <!-- Header -->
              <h2>Azerbaijan</h2>
              <!-- Text -->
              <p class="card-text">Azerbaijan is a country located in the southern part of the Caucasus, at the crossroads of Southwest Asia and Southeastern Europe. It shares a border with Russia, Georgia, Armenia, Iran and its exclave with Turkey.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button onclick="window.location.href=''" type="button" class="btn btn-sm btn-primary">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="imgs/poland.jpg" alt="">

            <div class="card-body">
              <!-- Header -->
              <h2>Poland</h2>
              <!-- Text -->
              <p class="card-text">Wander old medieval towns and gawp at the baroque architecture, taking in the charm as you walk through. With old-fashioned market squares, you'll soon notice yourself falling irreversibly in love with this country.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-primary">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="imgs/russia_06.png" alt="">

            <div class="card-body">
              <!-- Header -->
              <h2>Russia</h2>
              <p class="card-text">Whether you're sipping on a cocktail in a glamorous rooftop bar in Moscow, gazing out from your Trans-Siberian, any Russian adventure is guaranteed to come with views to take your breath away.</p>
              <!-- Text -->
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-primary">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row bg h-100 d-lg-flex justify-content-lg-start justify-content-center" style="background-image: url('imgs/doo.jpg')">
      <div class="col-lg-6 col-12 my-5 bg-dark p-5 m-5 text-dark" style="--bs-bg-opacity: .5;">
        <i class="fa-solid fa-quote-left text-white fs-3"></i>
        <p class="text-light fst-italic fw-bold">“You've gotta dance like there's nobody watching, love like you'll never be hurt, sing like there's nobody listening, and live like it's heaven on Earth.”</p>
        <div class="text-white fw-bold mx-3">William W. Purkey </div>
        <div class="text-white  mx-3">Anesthesiologist in Winter Park, Florida</div>
      </div>
    </div>
  </div>
  
<?php include "footer.php"; ?>