<!-- php navbar user data start-->
<?php
 session_start();
 if(isset($_SESSION["user_id"])){
  $mysqli = require __DIR__ . "/database.php";
  $sql = "SELECT * FROM user WHERE id = {$_SESSION["user_id"]}";
  $result = $mysqli-> query($sql);
  $user = $result->fetch_assoc();
 }
?>
<!-- php navbar user data end -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/footer.css">
    <title>20Information</title>
  </head>
  <body>
    <!-- Navbar start -->
    <nav class="navbar navbar-expand-lg mx-auto bg-warning w-100 shadow-lg mt-3">
      <div class="container">
        <a href="index.php" class="navbar-brand bg-dark text-white p-2 text-center font-monospace">20Information</a>
        <button class="navbar-toggler togl" type="button"  borders data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span><div class="nodoco" onclick="myFunction(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
          </div></span>
        </button>
        <div class="nadoninehundred">
    <?php if(isset($_SESSION["user_name"])): ?>
      <li class="nav-item dropdown">
      <a class="dropdown-toggle text-dark nas" data-bs-toggle="dropdown" aria-expanded="false"><i class="far fa-user"></i> <?php echo $_SESSION['user_name'] ?></a>
          <ul class="dropdown-menu bg-warning">
            <li><a href="#" class="dropdown-item" href="#">My account</a></li>
            <li><a href="logout.php" class="dropdown-item" href="#">Log Out</a></li>
        </li>
      <?php else: ?>
          <ul class="navbar-nav">
            <li><a href="login.php" class="btn btn-outline-dark"><svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="svg-img bi bi-door-open-fill" viewBox="0 0 16 16">
              <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
            </svg>Login</a></li>
          </ul>
    <?php endif; ?>
    </div>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 p-2 ">
            <li class="nav-item ms-2">
              <a class="nav-link w-100 active mb-1 p-2 text-center nas" aria-current="page" href="index.php">Home</a>
            <div class="line"></div>
            </li>
            <li class="nav-item ms-2">
              <a class="nav-link w-100 mb-1 p-2 text-center nas" href="#">Articles</a>
              <div class="line"></div>
            </li>
            <li class="nav-item ms-2">
              <a class="nav-link w-100 mb-1 p-2 text-center nas" href="#">Writers</a>
              <div class="line"></div>
            </li>
          </ul>
          <form class="d-flex mx-1" role="search">
            <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-dark" type="submit">Search</button>
          </form>
        </div>
        <div class="nadothousand text-center">
    <?php if(isset($_SESSION["user_name"])): ?>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-dark w-100 nas" data-bs-toggle="dropdown" aria-expanded="false"><i class="far fa-user"></i> <?php echo $_SESSION['user_name'] ?></a>
      <div class="line"></div>
          <ul class="dropdown-menu bg-warning">
            <li><a href="#" class="dropdown-item" href="#">My account</a></li>
            <li><a href="logout.php" class="dropdown-item" href="#">Log Out</a></li>
        </li>
    <?php else: ?>
          <ul  class="navbar-nav">
            <li><a href="login.php" class="btn btn-outline-dark ms-2 mx-auto nas"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class=" bi bi-door-open-fill" viewBox="0 0 16 16">
              <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
            </svg>Login</a></li>
          </ul>
    <?php endif; ?>
    </div>
      </div>
    </nav>
    <!-- Navbar end -->
    <!-- Slider start -->
    <section>
    <div class="row mt-3 mx-auto">
    <div class="col-lg-12">
      <div class="row">
      <div class="col-lg-9">
      <div class="carousel slide  carimgs w-100 mx-auto mb-3" data-bs-ride="carousel" id="carouselExampleIndicators">
		<div class="carousel-indicators">
			<button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button><button aria-label="Slide 4" data-bs-slide-to="3" data-bs-target="#carouselExampleIndicators" type="button"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active carimg">
				<a href="#"><img class="d-block w-100 h-100  rounded" src="images/slider1.jpg"></a>
			</div>
			<div class="carousel-item carimg">
				<a href="#"><img class="d-block w-100 h-100  rounded" src="images/slider2.jpg"></a>
			</div>
			<div class="carousel-item carimg">
				<a href="#"><img class="d-block w-100 h-100  rounded" src="images/slider3.jpg"></a>
			</div>
      <div class="carousel-item carimg">
				<a href="#"><img class="d-block w-100 h-100 rounded" src="images/slider4.jpg"></a>
			</div>
		</div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
	</div>
  </div>
  

  <div class="col-lg-3 overflow-hidden mt-3">
  <div class="mb-2">
  <a href="#"><img class="popcard w-100 h-100 rounded" src="/images/sliders1.jpg"   alt="..."></a>
  </div>
  <div class="row">
  <div class="mb-2 col ">
  <a href="#"><img  class="popcard w-100 h-100 rounded" src="/images/sliders1.jpg"  alt="..."></a>
  </div>
  <div class="mb-2 col">
  <a href="#"><img  class="popcard w-100 h-100 rounded" src="/images/sliders1.jpg"  alt="..."></a>
  </div>
    </div>
    <div class="row">
  <div class="mb-2 col ">
  <a href="#"><img  class="popcard w-100 h-100 rounded" src="/images/sliders1.jpg"  alt="..."></a>
  </div>
  <div class="mb-2 col">
  <a href="#"><img  class="popcard w-100 h-100 rounded" src="/images/sliders1.jpg"  alt="..."></a>
  </div>
    </div>
    <div class="row">
  <div class="mb-2 col ">
  <a href="#"><img  class="popcard w-100 h-100 rounded" src="/images/sliders1.jpg"  alt="..."></a>
  </div>
  <div class="mb-2 col">
  <a href="#"><img  class="popcard w-100 h-100 rounded" src="/images/sliders1.jpg"  alt="..."></a>
  </div>
    </div>
  <div class="mb-2 ">
  <a href="#"><img class="popcard w-100 h-100 rounded" src="/images/sliders1.jpg"  alt="..."></a>
  </div>
    </div>
    </div>
    </section>
    <!-- Slider End -->
    <hr>
    <!-- POPULAR POTS start -->
    <section>
    <h2 class="text-center text-dark">POPULAR POTS</h2>
    <div class="row mt-3 mx-auto">
    <div class="col-md-4">
      <div class="row bg-dark g-0 border rounded overflow-hidden flex-md-row mb-2 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static text-light">
          <strong class="d-inline-block mb-2">Lorem</strong>
          <h3 class="mb-0 ">Lorem, ipsum.</h3>
          <div class="mb-1 text-muted">Nov12</div>
          <p class="card-text mb-auto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente est aliquam recusandae aliquid!</p>
          <a href="#" class="stretched-link text-warning">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
        <img alt="" style="width: 200px; height:270px;" src="/images/slidercard1.jpg">
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="row bg-dark g-0 border rounded overflow-hidden flex-md-row mb-2 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static text-light">
          <strong class="d-inline-block mb-2">Lorem</strong>
          <h3 class="mb-0 ">Lorem, ipsum.</h3>
          <div class="mb-1 text-muted">Nov12</div>
          <p class="card-text mb-auto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente est aliquam recusandae aliquid!</p>
          <a href="#" class="stretched-link text-warning">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
        <img alt="" style="width: 200px; height:270px;" src="/images/slidercard1.jpg">
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="row bg-dark g-0 border rounded overflow-hidden flex-md-row mb-2 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static text-light">
          <strong class="d-inline-block mb-2">Lorem</strong>
          <h3 class="mb-0">Lorem, ipsum.</h3>
          <div class="mb-1 text-muted">Nov 11</div>
          <p class="mb-auto">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam, sed. Lorem, ipsum dolor.</p>
          <a href="#" class="stretched-link text-warning">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img alt="" style="width: 200px; height:270px;" src="/images/slidercard2.jpg">
        </div>
      </div>
    </div>
  </div>
    </section>
    <!-- POPULAR POTS End -->
    <hr>
    <!-- Team Start -->
    <h2 class="text-center mt-4">TEAM</h2>
      <section class=" w-100  row mx-auto text-center text-light">
        <div class="col mx-auto w-100  mt-3 mb-1 bg-dark">
          <div class="card col-6 mx-auto borders-card bg-dark"><img class="borders-card " src="images/chirchel1.jpg"></div>
          <div class="col-6 mx-auto mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, odit?</div>
        </div>
        <div class="col mx-auto w-100  mt-3 mb-1 bg-dark">
          <div class="card col-6 mx-auto borders-card bg-dark"><img class="borders-card" src="images/chirchel1.jpg"></div>
          <div class="col-6 mx-auto mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, odit?</div>
        </div>
        <div class="col mx-auto w-100  mt-3 mb-1 bg-dark">
          <div class="card col-6 mx-auto borders-card bg-dark"><img class="borders-card" src="images/chirchel1.jpg"></div>
          <div class="col-6 mx-auto mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, odit?</div>
        </div>
      </section>
    <!-- Team end -->
    <hr>
    <!-- Articles start -->
      <main class="container">
      <div class="row">
      <div class="col-md-8">
    <div class="row">
    <div class="col-md-12">
    <div class="text-light mx-auto">
    <h2 class="text-center text-dark ">ARTICLES</h2>
    <div class="row row-cols-1 row-cols-md-2 g-3">
    <div class="col">
    <div class="card h-100 mt-1">
      <img src="images/book.jpg" class="card-img-top" alt="...">
      <div class="card-body bg-dark">
        <h5 class="card-title text-warning">Card title</h5>
        <p class="card-text">Lorem ipsum dolor,Lorem ipsut sit amet consectetur adipisicing elit. Illo praesentium laborum nostrum commodi sunt qui.</p>
      </div>
      <div class="card-footer bg-dark">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100 mt-1">
      <img src="images/book.jpg" class="card-img-top" alt="...">
      <div class="card-body bg-dark">
        <h5 class="card-title text-warning">Card title</h5>
        <p class="card-text">Lorem ipsum dolor,Lorem ipsut sit amet consectetur adipisicing elit. Illo praesentium laborum nostrum commodi sunt qui.</p>
      </div>
      <div class="card-footer bg-dark">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
    </div>
    </div>
<div class="g-3 mt-2 row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body rounded bg-dark">
        <h5 class="card-title text-danger">Lorem, ipsum dolor.</h5>
        <p class="card-text text-light">Lorem ipsum dolor,Lorem ipsut sit amet consectetur adipisicing elit. Illo praesentium laborum nostrum commodi sunt qui.</p>
        <a href="#" class="btn btn-warning text-dark">Show more</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body rounded bg-dark">
        <h5 class="card-title text-success">Lorem, ipsum dolor.</h5>
        <p class="card-text text-light">Lorem ipsum dolor sit Lorem, ipsum. amet consectetur, adipisicing elit. Aliquid assumenda ipsam nisi eos incidunt est.</p>
        <a href="#" class="btn btn-danger">Show more</a>
      </div>
    </div>
  </div>
</div>
    <div class="row mt-3 mx-auto">
    <div class="col-sm-12 border rounded  text-center text-light bg-dark mx-auto">
     <div class="card-header text-warning">
     Lorem ipsum dolor sit amet.
     </div>
    <div class="card-body">
     <h5 class="card-title">Lorem, ipsum dolor.</h5>
      <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, maiores!</p>
      <a href="#" class="btn btn-warning">Show more</a>
    </div>
      <div class="card-footer text-muted">
       2 days ago
      </div>
    </div>
    </div>
    <div class="row mt-3 mx-auto mb">
    <div class="col-ms-12 w-100">
      <div class="row bg-dark overflow-hidden flex-md-row mb-3 rounded h-md-250 position-relative">
      <div class="col-md-3 d-none d-sm-block">
        <img alt="" class="mx-auto w-100 articimg" src="/images/slidercard1.jpg">
        </div>
        <div class="col-md-9 p-4 d-flex flex-column position-static text-light">
          <strong class="d-inline-block text-warning mb-2">Lorem</strong>
          <h3 class="mb-0 text-warning">Lorem, ipsum.</h3>
          <div class="mb-1 text-muted">Nov12</div>
          <p class="card-text mb-auto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente est aliquam recusandae aliquid!</p>
          <a href="#" class="btn w-50 btn-light mx-auto">Continue reading</a>
        </div>
      </div>
    </div>
  </div>
  <div class="btn btn-outline-dark w-100">More</div>
    </div>
    </div>
      </div>

   <div class="col-md-4 mt-4 container">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-1 text-light rounded border bg-dark">
          <h4 class="text-danger">Videos of the week</h4>
          <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ipsum quos minus veniam, libero eum. Incidunt recusandae delectus odit optio.</p>
        </div>
        <div>
        <video class="w-100 " controls muted src="/videos/news1.mp4" type="video/mp4" style="width: 415px; height:250px;" autoplay></video>
      </div>
      <div>
        <video class="w-100 " controls muted src="/videos/news1.mp4" type="video/mp4" autoplay style="width: 415px; height:250px;"></video>
      </div>

      </div>
   </div>
      </div>
    </main>
    <!-- Articles end -->
    <br>
    <!-- Footer start -->
    <div class="footer-clean bg-warning">
        <footer>
            <div class="container">
                <div class="row justify-content-center text-dark">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Lorem, ipsum.</a></li>
                            <li><a href="#">Lorem, ipsum.</a></li>
                            <li><a href="#">Lorem, ipsum.</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Lorem, ipsum.</a></li>
                            <li><a href="#">Lorem, ipsum.</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Careers</h3>
                        <ul>
                            <li><a href="#">Lorem, ipsum.</a></li>
                            <li><a href="#">Lorem, ipsum.</a></li>
                            <li><a href="#">Lorem, ipsum.</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 item social"><a href="#"><i class="fab fa-instagram"></i></a><a href="#"><i class="fab fa-facebook"></i></a><a href="#"><i class="fab fa-whatsapp"></i></a>
                        <p class="copyright">Web Designer Ufuk Kuru E-mail uege60@gmail.com</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Footer end -->
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
