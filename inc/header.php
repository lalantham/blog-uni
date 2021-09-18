<?php 

  require_once("inc/db.php");
  ob_start();
  
?>

<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Blog | My Custom Blog</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js">    </script>
    <link rel="stylesheet" href="css/blog.css">
    <link rel="icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.min.css">
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
            <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="contact.php"><i class="fas fa-phone-alt"></i> Contact Us</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-clipboard-list"></i>  Category <span class="caret"></span></a>
              <ul class="dropdown-menu" id="dropdown-menu-categories">
              
                  <!-- fetch categoris  -->
                  <?php   
                    $query = "SELECT * FROM categories ORDER BY id DESC";
                    $result = $con->query($query);

                    if(mysqli_num_rows($result) > 0){
                        while($row = $result->fetch_assoc()){
                            $category = ucfirst($row['category']);
                            $id = $row['id'];
                            echo "<li><a href='index.php?cat=" . $id ."'>" . $category . "</a></li>";
                        }
                    } else {
                      echo "<li><a>Items No Found</a></li>";
                    } 
                  ?>

              </ul>
            </li>
            <li><a href="admin/login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Footer  -->
    <?php require_once("footer.php") ?>