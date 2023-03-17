<?php
  $is_invalid = false;
  if($_SERVER["REQUEST_METHOD"] === "POST"){
    $mysqli = require __DIR__ . "/database.php";

    $sql = sprintf("SELECT * FROM user WHERE email = '%s'",$mysqli->real_escape_string($_POST["email"]));

    $result = $mysqli-> query($sql);
    $user = $result->fetch_assoc();

    if($user){
       
      if(password_verify($_POST["password"], $user["password_hash"])){
        session_start();

        $_SESSION["user_name"] = $user["name"];
        header("Location: index.php");
        exit;
      }
    }

    $is_invalid = true;

  }

?>
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
    <title>Login</title>
  </head>
  <body class="bg-light">
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
            <li><a href="register.php" class="btn btn-outline-dark"><svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="svg-img bi bi-door-open-fill" viewBox="0 0 16 16">
              <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
            </svg>Register</a></li>
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
            <li><a href="register.php" class="btn btn-outline-dark ms-2 mx-auto nas"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class=" bi bi-door-open-fill" viewBox="0 0 16 16">
              <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
            </svg>Register</a></li>
          </ul>
    <?php endif; ?>
    </div>
      </div>
    </nav>
    <!-- Navbar end -->
    <!-- login start -->
<section>
    <div class="row mt-3 mx-auto">
    <div class="col-sm-6">
        <div>
        <img alt="" class="w-100" src="/images/register.png">
        </div>
    </div>
    <div class="col-sm-6">
    <div class="container texboxs mt-1 mx-auto bg-light text-dark p-5 text-center">
<form method="post">
<div>
<h2>Welcome Please Login</h2>
<?php if($is_invalid): ?>
    <em>Invalid login</em>
  <?php endif; ?>
</div>
<div class="form-group">
  <label for="Email" class="w-100 mt-3">E-mail</label>
  <input type="email" class="w-100  form-control mt-2 texbox mx-auto" name="email" id="email" aria-describedby="emailHelpId" placeholder="E-mail" value="<?= htmlspecialchars($_POST["email"] ?? "" ) ?>"> 
</div>
  <div class="form-group">
    <label for="Password" class="w-100 mt-5">Password</label>
    <input type="password" class="w-100 form-control mt-2 texbox mx-auto" name="password" id="password" placeholder="Password">
  </div>
  <div class=" mt-5  usersbtn">
    <button class="btn btn-outline-dark w-50">Login</button>
  </div>
  <div class="mt-2">
    <span><a href="register.php" class="text-dark">Click to register!</a></span>
  </div>
</form>
</div>
    </div>
  </div>
    </section>
    <!-- login end -->
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
