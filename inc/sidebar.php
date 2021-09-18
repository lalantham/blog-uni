<!-- side bar -->
<div class="col-md-4">

<!-- Search Bar  -->
<div class="widgets">
   <form action="index.php" method="post">
   <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for..." name="search-text">
    <span class="input-group-btn">
      <input type="submit" value="Go" class=" btn btn-default" name="search">
    </span>
  </div>
  </form>
</div>

<!-- Popular Post  -->
<div class="widgets">
  <div class="popular">
    <h4>Popular Post</h4>
    <hr>

    <?php

      $p_query = "SELECT * FROM posts WHERE status = 'publish' ORDER BY views DESC LIMIT 5";

      $p_result = $con->query($p_query);

      if(mysqli_num_rows($p_result) > 0) {

        while($p_row = $p_result->fetch_assoc()) {

          $p_id = $p_row['id'];
          $p_date = getdate($p_row['date']);
          $p_day = $p_date['mday'];
          $p_month = $p_date['month'];
          $p_year = $p_date['year'];
          $p_title = $p_row['title'];
          $p_image = $p_row['image'];


    ?>

    <div class="row">
      <div class="col-xs-4">
        <a href="post.php?p_id=<?php echo $p_id ?>"><img src="img/<?php echo $p_image ?>" alt="blog slider image 1"></a>
      </div>
      <div class="col-xs-8 details">
        <a href="post.php?p_id=<?php echo $p_id ?>"><h4><?php echo $p_title ?></h4></a>
        <p><i class="fas fa-clock"></i> <?php echo $p_day . " ". $p_month . " " . $p_year ?> </p>
      </div>
    </div>

    <?php 
            }
      } else {
        echo "<h3>No Conent Available</h3>";
      }
     ?>

  </div>
</div>

<!-- Recent Post  -->
<div class="widgets">
<div class="popular">
  <h4>Recent Post</h4>
  <hr>

  <?php 

    $r_query = "SELECT * FROM posts WHERE status = 'publish' ORDER BY id DESC LIMIT 5";

    $r_result = $con->query($r_query);

    if(mysqli_num_rows($r_result) > 0){

      while($r_row = $r_result->fetch_assoc()){

        $r_id = $r_row['id'];
        $r_title = $r_row['title'];
        $r_date = getdate($r_row['date']);
        $r_day = $r_date['mday'];
        $r_month = $r_date['month'];
        $r_year = $r_date['year'];
        $r_image = $r_row['image'];


  ?>

  <div class="row">
    <div class="col-xs-4">
      <a href="post.php?p_id=<?php echo $r_id ?>"><img src="img/<?php echo $r_image ?>" alt="blog slider image 1"></a>
    </div>
    <div class="col-xs-8 details">
      <a href="post.php?p_id=<?php echo $r_id ?>"><h4><?php echo $r_title ?></h4></a>
      <p><i class="fas fa-clock"></i><?php echo $r_day . " " . $r_month . " " . $r_year ?></p>
    </div>
  </div>

  <?php 

    }

    } else {
      echo "<h3>Content Not Available</h3>";
    }

  ?>

</div>
</div>

<!-- Newsletter -->
<div class="widgets">
<div class="popular text-center">
<h3>Newsletter</h3>
<hr>
<h4>Newsletter</h4>
<p>Subscribe to our weekly Newsletter and stay tuned.</p>
<form>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Youre Email Address">
  </div>
  <div class="from-group">
    <button class="btn btn-default">Get Notify</button>
  </div>
</form>
</div>
</div>

<!-- Category  -->
<div class="widgets">
<div class="category popular">
<h4>Categories</h4>
<hr>
<div class="row">
  <div class="col-xs-6">
    <ul>

    <?php

      $c_query = "SELECT * FROM categories";
      $c_result = $con->query($c_query);

      if(mysqli_num_rows($c_result) > 0) {
        while($c_row = $c_result->fetch_assoc()){
          $c_id = $c_row['id'];
          $c_category = ucfirst($c_row['category']);
  
      ?>

      <li><a href="index.php?cat=<?php echo $c_id ?>"> <?php echo $c_category  ?> </a></li>

      <?php 

        }
        } else {
          echo "<p>Content Not Available</p>";
        }

      ?>

    </ul>     
  </div>

</div>
</div>
</div>

<!-- Social  -->
<div class="widgets">
<div class="social popular">
<h4>Social Links</h4>
<hr>
 <div class="row">
   <div class="col-xs-2">
     <a href="#"><i class="fab fa-facebook-square"></i></a>
   </div>
   <div class="col-xs-2">
     <a href="#"><i class="fab fa-twitter-square"></i></a>
   </div>
   <div class="col-xs-2">
     <a href="#"><i class="fab fa-instagram-square"></i></a>
   </div>
   <div class="col-xs-2">
    <a href="#"><i class="fab fa-youtube-square"></i></a>
  </div>
  <div class="col-xs-2">
    <a href="#"><i class="fab fa-whatsapp-square"></i></a>
  </div>
 </div>
</div>
</div>

</div>