<?php include "header.php"; ?>
<title>Locations to Film | Azerbaijan</title>
  <!-- Background -->
  <div class="container-fluid">
    <div class="row bg h-100 d-lg-flex justify-content-lg-start justify-content-center" style="background-image: url('imgs/azer_03.jpg')">
      <div class="col-lg-6 col-12 col-10 my-5 bg-dark p-5 m-5" style="--bs-bg-opacity: .5;">
        <h1 class="fw-bold text-light" >Azerbaijan</h1>
        <p class="text-light d-none d-lg-block">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed hic, dolorum fugiat, sunt illo nihil architecto maiores ullam nemo excepturi culpa tenetur quos fuga blanditiis voluptatum laborum error eveniet dolore?</p>  
      </div>
    </div>
  </div>

  <!-- Location cards -->
  <div class="album py-5">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="imgs/commercial_01.jpg" alt="">

            <div class="card-body">
              <!-- Header -->
              <h2>Commercial Properties</h2>
              <!-- Text -->
              <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat deserunt incidunt cupiditate earum vel possimus quae quasi rerum aut error.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button onclick="window.location.href='./commercial-properties.php'" type="button" class="btn btn-sm btn-primary" style="background-color: #6351ce; border-color: #6351ce">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="imgs/rural_01.jpg" alt="">

            <div class="card-body">
              <!-- Header -->
              <h2>Rural</h2>
              <!-- Text -->
              <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat deserunt incidunt cupiditate earum vel possimus quae quasi rerum aut error.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-primary" style="background-color: #6351ce; border-color: #6351ce">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="imgs/period_home_01.jpg" alt="">

            <div class="card-body">
              <!-- Header -->
              <h2>Period Homes</h2>
              <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat deserunt incidunt cupiditate earum vel possimus quae quasi rerum aut error.</p>
              <!-- Text -->
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-primary" style="background-color: #6351ce; border-color: #6351ce">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php include "footer.php"; ?>