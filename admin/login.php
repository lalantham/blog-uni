
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../img/favicon.png">
    <title>MyBlog | Login</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>

  <body>


     <!-- Navbar  -->
     <nav class="navbar navbar-default navbar-fixed-top text-center">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
    
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../index.html"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="../contact.html"><i class="fas fa-phone-alt"></i> Contact Us</a></li>
            <li><a href="#"><i class="fas fa-user-plus"></i> Register</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">

      <div class="full-form" data-aos="zoom-in" data-aos-duration="1000">
        <form class="form-signin">
          <h1 class="form-signin-heading text-center login-head">Admin Login</h1>
          <hr>
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus> <br>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
          <div class="checkbox">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button class="btn btn-lg btn-default btn-block" type="submit">Sign in</button>
        </form>
      </div>

    </div> <!-- /container -->


    <!-- Scroll Animation  -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    
    <script src="../js/jquery-1.12.4.js"></script>    
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
