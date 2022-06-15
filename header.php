<!-- Head -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/801a4238f4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
  </head>
  <body>

<!-- <i class="fa-solid fa-video"></i> -->
<!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" >
    <div class="container-xl">
      <a class="navbar-brand" href="index.php" >
        <span class="fs-4 text-light"><span class="iconify" data-icon="oi:aperture" data-width="35" data-height="35"></span>&nbsp;&nbsp;Locations to Film</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarsExample07XL">
        <ul class="nav navbar-nav mb-2 mb-lg-0">
          <!-- <li class="nav-item active px-2 ">
            <a class="nav-link" aria-current="page" href="azerbaijan.php">Azerbaijan</a>
          </li> -->
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="azerbaijan.php" data-bs-toggle="dropdown">Azerbaijan</a>
          <ul class="dropdown-menu bg-dark">
            <li><a class="dropdown-item bg-dark text-light " href="azerbaijan.php"> Azerbaijan</a></li>
            <li><a class="dropdown-item bg-dark text-light " href="commercial-properties.php"> Commercial Properties</a></li>
          </ul>
          <li class="nav-item px-2">
            <a class="nav-link" aria-current="page" href="international.php">International</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link" aria-current="page" href="services.php">Services</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link" aria-current="page" href="about.php">About</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link" aria-current="page" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <!-- Navbar Highlighting current page start -->
  <script>
    $(function(){
        $('a').each(function(){
            if ($(this).prop('href') == window.location.href) {
                $(this).addClass('active'); $(this).parents('li').addClass('active');
            }
        });
    });
</script>
  <!-- Navbar Highlighting current page end -->
  

