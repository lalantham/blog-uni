<?php require("inc/header.php") ?>

<?php

$posts_per_page =  3;

if (isset($_GET['page'])) {
  $page_id = $_GET['page'];
} else {
  $page_id = 1;
}


if (isset($_GET['cat'])) {

  $cat_id = $_GET['cat'];
  $cat_query = "SELECT * FROM categories WHERE id = $cat_id";
  $cat_result = $con->query($cat_query);
  $cat_row = $cat_result->fetch_assoc();
  $cat_name = $cat_row['category'];
}

if (isset($_POST['search'])) {

  $search = $_POST['search-text'];
  $get_al_posts_query = "SELECT * FROM posts WHERE status = 'publish'";
  $get_al_posts_query .= "and tags LIKE '%$search%'";
  $all_post_result = $con->query($get_al_posts_query);
  $all_post_count = mysqli_num_rows($all_post_result);
  $total_pages = ceil($all_post_count / $posts_per_page);
  $post_start_from = ($page_id - 1) * $posts_per_page;
} else {

  $get_al_posts_query = "SELECT * FROM posts WHERE status = 'publish'";

  if (isset($cat_name)) {
    $get_al_posts_query .= "and category = '$cat_name'";
  }

  $all_post_result = $con->query($get_al_posts_query);
  $all_post_count = mysqli_num_rows($all_post_result);
  $total_pages = ceil($all_post_count / $posts_per_page);
  $post_start_from = ($page_id - 1) * $posts_per_page;
}

?>

<!-- Jumbotron -->
<div class="jumbotron">
  <div class="container">
    <div id="details" class="text-center">
      <h1 class="animate__animated animate__backInLeft"><span id="my-text">My</span><span>Blog</span></h1>
      <p class="animate__animated animate__backInRight">This is My Custom Blog for Share My Ideas</p>
    </div>
  </div>
  <!-- <img src="img/top-image.jpg" alt="my blog topbar image"> -->
</div>

<!-- content  -->
<section>

  <div class="container">
    <!-- Posts -->
    <div class="col-md-8">

      <?php

      $slider_query = "SELECT * FROM posts WHERE status = 'publish' ORDER BY id DESC LIMIT 5";
      $slider_result = $con->query($slider_query);
      if (mysqli_num_rows($slider_result) > 0) {

        $count = mysqli_num_rows($slider_result);

      ?>

        <!-- Carosel  -->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-aos="zoom-in" data-aos-duration="1000">

          <!-- Indicators -->
          <ol class="carousel-indicators">

            <?php

            for ($i = 0; $i < $count; $i++) {
              if ($i == 0) {
                echo "<li data-target='#carousel-example-generic' data-slide-to='0' class='active'></li>";
              } else {
                echo "<li data-target='#carousel-example-generic' data-slide-to='" . $i . "'></li>";
              }
            }

            ?>

          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">

            <?php

            $check = 0;
            while ($slider_row = $slider_result->fetch_assoc()) {

              $slider_id = $slider_row['id'];
              $slider_image = $slider_row['image'];
              $slider_title = $slider_row['title'];

              $check = $check + 1;

              if ($check == 1) {

                echo "<div class='item active'>";
              } else {

                echo "<div class='item'>";
              }

            ?>


              <a href="post.php?p_id=<?php echo $slider_id ?>"><img src="img/<?php echo $slider_image ?>" alt="slider image 1"></a>
              <div class="carousel-caption">
                <h3><?php echo $slider_title ?></h3>
              </div>
          </div>
        <?php } ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>

    <?php

      }

      if (isset($_POST['search'])) {

        $search = $_POST['search-text'];

        $query = "SELECT * FROM  posts WHERE status = 'publish'";
        $query .= "and tags LIKE '%$search%'";
        $query .= "ORDER BY id DESC LIMIT $post_start_from, $posts_per_page";
      } else {

        $query = "SELECT * FROM  posts WHERE status = 'publish'";
        if (isset($cat_name)) {
          $query .= "AND category = '$cat_name'";
        }
        $query .= "ORDER BY id DESC LIMIT $post_start_from, $posts_per_page";
      }

      $post_result = $con->query($query);
      if (mysqli_num_rows($result) > 0) {
        while ($row = $post_result->fetch_assoc()) {

          $id = $row['id'];
          $date = getdate($row['date']);
          $day = $date["mday"];
          $month = $date["month"];
          $year = $date["year"];
          $title = $row['title'];
          $author = $row['author'];
          $author_image = $row['author_image'];
          $category = $row['category'];
          $tags = $row['tags'];
          $post_data = $row['post_data'];
          $views = $row['views'];
          $status = $row['status'];
          $image = $row['image'];
    ?>

      <!-- post  -->
      <div class="post" data-aos="zoom-in" data-aos-duration="1000">
        <div class="row">
          <div class="col-md-2 post-date">
            <div class="day"><?php echo $day ?></div>
            <div class="month"><?php echo $month ?></div>
            <div class="year"><?php echo $year ?></div>
          </div>
          <div class="col-md-8 post-title">
            <a href="post.php?p_id=<?php echo $id ?>">
              <h2 id="post-title"> <?php echo $title ?> </h2>
            </a>
            <p>Written by: <span id="author"><?php echo $author ?> </h2></span></p>
          </div>
          <div class="col-md-2 profile-picture">
            <img src="img/<?php echo $author_image ?> " alt="profile picture" class="img-circle">
          </div>
        </div>
        <a href="post.php?p_id=<?php echo $id ?>"><img src="img/<?php echo $image ?>" alt="post image 1"></a>
        <p class="desc" style="text-align:justify">
          <?php echo substr($post_data, 0, 500) . ' ...' ?> </h2>
        </p>
        <a href="post.php?p_id=<?php echo $id ?>" class="btn btn-default">Read Me</a>
        <div class="buttons">
          <span class="span1"><i class="fas fa-folder-open"></i><a href="index.php?category=<?php echo $id ?>"> <?php echo ucfirst($category) ?> </h2></span></a><span class="span2"><i class="fas fa-comments"></i> <a href="#">Comments</span></a>
        </div>
      </div>

  <?php

        }
      } else {
        echo "<center><h2>No Post Available</h2></center>";
      }

  ?>

  <!-- Paginations  -->
  <nav aria-label="Page navigation" id="pagination">
    <ul class="pagination">

      <li>
        <a href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>

      <?php

      for ($i = 1; $i <= $total_pages; $i++) {

        echo "<li class='" . ($page_id == $i ? 'active' : '') . "'><a href='index.php?page=" . $i . "&" . (isset($cat_name) ? "cat=$cat_id" : " ") . "'>$i</a></li>";
      }

      ?>

      <li>
        <a href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>

    </ul>
  </nav>

  </div>


  <!-- side bar -->
  <?php require("inc/sidebar.php") ?>


</section>

<?php require("inc/footer.php") ?>