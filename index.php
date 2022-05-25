<?php include 'header.php';?>
  <!--Carousel Start -->
  <div id="myCarousel" class="carousel slide h-500px" data-bs-ride="carousel">
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
            <div class="carousel-caption d-none d-md-block text-light">
            <h5>Azerbaijan</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, laudantium?  </p>
              </div>
          </div>
          <div class="carousel-item" style = "height: 500px;">
              <img src="imgs/warsaw.jpeg" class="d-block w-100" alt="Slide 2">
              <div class="carousel-caption d-none d-md-block text-light">
                  <h5>Poland</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, voluptatem.</p>
              </div>
          </div>
          <div class="carousel-item" style = "height: 500px;" >
              <img src="imgs/ruski.jpg" class="d-block w-100 img-fluid" alt="Slide 3">
              <div class="carousel-caption d-none d-md-block text-light">
                  <h5>Russia</h5>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, est.</p>
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