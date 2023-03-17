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
    <title>Register</title>
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
    <!-- register start -->
<section class="bgregister">
<div class="container texboxs mt-5 mx-auto  text-dark text-center">
<form action="processregister.php" method="post" novalidate >
<div class="mt-3">
<h2>Welcome Please Register</h2>
<h5 class="muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, rem. Sapiente.</h5>
</div>
<div class="form-label">
  <label class="w-100 mt-4">Name</label>
  <input type="text" name="name" id="name" class="form-control mt-2 texbox mx-auto" placeholder="Name" aria-describedby="helpId">
</div>
<div class="form-label">
  <label class="w-100 mt-4">Surname</label>
  <input type="text" name="surname" id="surname" class="form-control mt-2 texbox mx-auto" placeholder="SurName" aria-describedby="helpId">
</div>
<div class="form-label">
  <label class="w-100 mt-4">E-mail</label>
  <input type="email" class="form-control mt-2 texbox mx-auto" name="email" id="email" aria-describedby="emailHelpId" placeholder="E-mail">
</div>
  <div class="form-label">
    <label class="w-100 mt-4">Password</label>
    <input type="password" class="form-control mt-2 texbox mx-auto" name="password" id="password" placeholder="Password">
  </div>
  <div class="form-label">
    <label class="w-100 mt-4">Date Of Birth</label>
    <input type="date" class="form-control mt-2 texbox mx-auto" name="dateofbirth" id="dateofbirth" aria-describedby="emailHelpId" placeholder="E-mail">
  </div>
  <div class="form-check mx-auto w-50 mt-4">
    <label class="form-check-label w-100">
      <input type="checkbox" class="form-check-input" name="check" id="check" value="checkedValue">
      <p>Lorem<small class="chec">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus adipisci doloremque sequi id enim! Eveniet!</small></p>
    </label>
  </div>
  <div class=" mt-3  usersbtn">
    <button class="btn btn-outline-dark w-50" id="registerbtn" name="registerbtn">Register</button>
  </div>
  <div class="mt-2">
    <span><a href="login.php" class="text-dark">Click to login!</a></span>
  </div>
</form>
</div>
</section>
    <!-- Register end -->
    <br>
<!-- footer start -->
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
    <!-- footer end -->
<script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>