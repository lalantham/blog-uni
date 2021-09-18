<?php require("inc/header.php") ?>


<?php


if (isset($_GET['p_id'])) {

  $p_id = $_GET['p_id'];

  $query = "SELECT * FROM posts WHERE status = 'publish' and id = $p_id";

  $post_result = $con->query($query);

  if (mysqli_num_rows($post_result) > 0) {

    $row = $post_result->fetch_assoc();

    $id = $row['id'];
    $date = getdate($row['date']);
    $day = $date['mday'];
    $month = $date['month'];
    $year = $date['year'];
    $title = $row['title'];
    $image = $row['image'];
    $author_image = $row['author_image'];
    $author = $row['author'];
    $category = $row['category'];
    $post_data = $row['post_data'];
  } else {

    header('location: index.php');
  }
}


?>

<!-- Jumbotron -->
<div class="jumbotron">
  <div class="container">
    <div id="details" class="text-center">
      <h1 class="animate__animated animate__backInLeft">My<span>Blog</span></h1>
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
              <h2><?php echo $title ?></h2>
            </a>
            <p>Written by: <span><?php echo $author ?></span></p>
          </div>
          <div class="col-md-2 profile-picture">
            <img src="img/<?php echo $author_image ?>" alt="profile picture" class="img-circle">
          </div>
        </div>
        <a href="#"><img src="img/<?php echo $image ?>" alt="post image 1"></a>
        <p class="desc">
          <?php echo $post_data ?>
        </p>
        <div class="buttons">
          <span class="span1"><i class="fas fa-folder-open"></i><a href="#"> <?php echo ucfirst($category) ?></span></a><span class="span2"><i class="fas fa-comments"></i> <a href="#">Comments</span></a>
        </div>
      </div>

      <!-- related post  -->
      <div class="related">
        <h3>Realted Post</h3>
        <div class="row">
          <hr>

          <?php

          $r_query = "SELECT * FROM posts WHERE status = 'publish' AND title LIKE '%$title%' LIMIT 3";

          $r_result = $con->query($r_query);

          if (mysqli_num_rows($r_result) > 0) {

            while ($r_row = $r_result->fetch_assoc()) {

              $r_id = $r_row['id'];
              $r_title = $r_row['title'];
              $r_image = $r_row['image'];

          ?>

              <div class="col-sm-4">
                <a href="">
                  <a href="post.php?p_id=<?php echo $id ?>"> <img src="img/<?php echo $image ?>" alt="related image"></a>
                  <h4> <a href="post.php?p_id=<?php echo $id ?>"><?php echo $title ?></a> </h4>
                </a>
              </div>

          <?php

            }
          } else {
            echo "<h4>No Content Available</h4>";
          }

          ?>

        </div>
      </div>

      <!-- author  -->
      <div class="author">
        <h3>Author</h3>
        <div class="row">
          <div class="col-sm-3">
            <img src="img/<?php echo $author_image ?>" alt="author image">
          </div>
          <div class="col-sm-9">
            <h4><?php echo ucfirst($author) ?></h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam corrupti, nemo omnis possimus autem dolores? Temporibus necessitatibus nemo doloribus ea, eos suscipit? Maiores atque, tempora maxime unde impedit nobis, perspiciatis a incidunt dolore et aliquam iure, recusandae cupiditate commodi. Rerum quibusdam cupiditate enim excepturi. Impedit ex soluta error ea eveniet!</p>
          </div>
        </div>
      </div>

      <!-- Comments  -->

      <?php

      $c_query = "SELECT * FROM comments WHERE status = 'approve' AND post_id = $p_id ORDER BY id DESC";

      $c_result = $con->query($c_query);

      if (mysqli_num_rows($c_result) > 0) {


      ?>

        <div class="comment">
          <h3>Comments</h3>
          <hr>

          <?php

          while ($c_row = $c_result->fetch_assoc()) {

            $c_id  = $c_row['id'];
            $c_name  = $c_row['name'];
            $c_comment  = $c_row['comment'];
            $c_image = $c_row['image'];

          ?>
            <div class="row single-comment">
              <div class="col-sm-2">
                <img src="img/<?php echo $c_image ?>" alt="unkown user">
              </div>
              <div class="col-sm-10">
                <h4><?php echo ucfirst($c_name) ?></h4>
                <p><?php echo $c_comment ?></p>
              </div>
            </div>
          <?php } ?>
        </div>

      <?php
      } else {
        echo "";
      }
      ?>


      <?php

      if (isset($_POST['submit'])) {

        $cm_name = $_POST['name'];
        $cm_email = $_POST['email'];
        $cm_website = $_POST['website'];
        $cm_comment = $_POST['comment'];
        $cm_date = time();

        if (empty($cm_name) or empty($cm_email) or empty($cm_comment)) {

          $error_msg = "All Required Fileds Must Be Filled";
        } else {

          $cm_query = "INSERT INTO `comments`(`id`, `date`, `name`, `username`, `post_id`, `email`, `website`, `image`, `comment`, `status`) VALUES (NULL, '$cm_date','$cm_name','user','$p_id','$cm_email','$cm_website','unkown.jpg','$cm_comment','pending')";

          if ($con->query($cm_query) === TRUE) {

            $msg = "Comment has been submitted and Wating for Aproval.";

            $cm_name = "";
            $cm_email = "";
            $cm_website = "";
            $cm_comment = "";
          } else {

            $error_msg = "comment has not been submitted";
          }
        }
      }

      ?>

      <!-- write comment  -->
      <div class="comment-box">
        <div class="row">
          <div class="col-xs-12">
            <form action="" method="post">
              <div class="form-group">
                <label for="fullName">* Full Name: </label>
                <input type="text" name="name" id="fullName" placeholder="Full Name" class="form-control" value="<?php if (isset($cm_name)) {
                                                                                                                    echo $cm_name;
                                                                                                                  } ?>">
              </div>
              <div class="form-group">
                <label for="email">* Email: </label>
                <input type="text" name="email" id="email" placeholder="Email" class="form-control" value="<?php if (isset($cm_email)) {
                                                                                                              echo $cm_email;
                                                                                                            } ?>">
              </div>
              <div class="form-group">
                <label for="website">Website: </label>
                <input type="text" name="website" id="website" placeholder="Website" class="form-control" value="<?php if (isset($cm_website)) {
                                                                                                                    echo $cm_website;
                                                                                                                  } ?>">
              </div>
              <div class="form-group">
                <label for="comment">* Comment: </label>
                <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Message Here" class="form-control"><?php if (isset($cm_comment)) {
                                                                                                                            echo $cm_comment;
                                                                                                                          } ?></textarea>
              </div>
              <input type="submit" class="btn btn-default" value="Submit" name="submit">
              <?php

              if (isset($msg)) {
                echo "<span class='pull-right' style='color:green';>" . $msg . "</span>";
              } else if (isset($error_msg)) {
                echo "<span class='pull-right' style='color:red;'>" . $error_msg . "</span>";
              }

              ?>
            </form>
          </div>
        </div>
      </div>
      <br>
    </div>

    <!-- side bar -->
    <?php require("inc/sidebar.php") ?>

</section>

<?php require("inc/footer.php") ?>