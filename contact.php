<?php require("inc/header.php") ?>

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

            <div class="row">
                <div class="col-md-12">
                    <div class="map" data-aos="zoom-in" data-aos-duration="1000">
                        <h2>Find Us</h2>
                        <hr>
                        <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=100%&amp;height=400&amp;hl=en&amp;q=samangala%20road,%20weranketagoda%20+()&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='https://add-map.org/'>.</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=617639df05f117ffa86af2858394e92d98f5a122'></script>
                    </div>
                </div>
                <div class="col-md-12 contact-form" data-aos="zoom-in" data-aos-duration="1000">
                    <h2>Contact Form</h2>
                    <hr>
                    <form action="">
                        <div class="form-group">
                            <label for="fullName">* Full Name:</label>
                            <input type="text" id="fullName" class="form-control" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <label for="email">* Email:</label>
                            <input type="text" id="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="website">Website:</label>
                            <input type="text" id="website" class="form-control" placeholder="Website">
                        </div>
                        <div class="form-group">
                            <label for="message">* Message:</label>
                            <textarea id="message" cols="30" rows="10" class="form-control" placeholder="Message Here"></textarea>
                        </div>
                        <input type="submit" name="submit" value="Submit" class="btn btn-default">
                    </form>
                </div>
            </div>

        </div>

        

        <!-- side bar -->
        <?php require("inc/sidebar.php") ?>

    </section>

<?php require("inc/footer.php") ?>