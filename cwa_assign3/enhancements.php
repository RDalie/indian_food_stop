<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Meta information -->
    <meta charset="utf-8" />
    <meta name="description" content="Enhancements" />
    <meta name="keywords" content="dinner, breakfast, lunch, Indian, food, meals"/>
    <meta name="author" content="Rabya Tayal" />

    <!-- Title -->
    <title>Enhancements</title>

    <!-- Style Links -->
    <link rel="stylesheet" href="styles/style.css"/>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">


      <!-- bootstrap cdn -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

  </head>
  <body class="enhancements">
      <!-- Include Menu -->
      <?php
          include_once 'menu.inc';
      ?>


    <main>

      <h1>Enhancements</h1>
      <ol>
        <li class="ol-li">Enhancement 1: Use of bootstrap to enhance the footer <a href="#footer">here</a> . The resources used was obtained from <a href="https://mdbootstrap.com/docs/standard/tools/builders/footer/">here</a>. This resource was added to the html and liniked to bootstrap styling. Changes that were made to the resources are listed below: 
        <ul>
          <li>The resource originally had the class col-lg-3 for the grid columns but it was changed to col-lg-4 which essentially means that the division is now divided into 3 columns because the content is lesser.</li>
          <li>There are four social media buttons present. The original resource had more but only some were used.</li>
          <li>The background color of the footer was changed to suit the main theme.</li>
          <li>Inline CSS was shifted to the main style.css file.</li>
          <li>Text color was changed so that it is more visible on the background.</li>
        </ul>
        </li>
        <li class="ol-li">Enhancement 2: Extra HTML + CSS content used which was not taught in the lectures:
        <ul>
          <li>Linear Gradient for background image on <a href="index.html">index</a>. This enhanced usability.</li>
          <li>tr:nth-child(even) selector was used for the tables to make the alternate rows of the tables <a href="product.html#south-indian-table">here</a> and <a href="product.html#north-indian-table">here</a> more readable.</li>
          <li>Used google fonts for the entire project and they are linked in the head of all files.</li>
          <li>Colored linear gradient used for the form <a href="enquire.html">here.</a></li>
          <li>Border-radius was used to change the "roundness" of the <a href="index.html#pussy-img">images</a> and the <a href="enquire.html">form elements</a> .</li>
        </ul>
      </li>
      </ol>
    </main>

  <!-- Footer -->
  <!-- ATTENTION: REFERENCED FROM https://mdbootstrap.com/docs/standard/tools/builders/footer/ -->
  <footer class="text-white text-center " id="footer">
  <!-- Grid container -->
  <div class="container p-4">

    <!-- Section: Social media -->
    <section class="mb-4">
      <h2>Socials</h2>
      <!-- Facebook -->
      <a id="btn1" class="btn btn-primary btn-floating m-1"  href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

      <!-- Twitter -->
      <a id="btn2" class="btn btn-primary btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>


      <!-- Instagram -->
      <a id="btn3" class="btn btn-primary btn-floating m-1"  href="#!" role="button"><i class="fab fa-instagram"></i></a>

      <!-- Linkedin -->
      <a id="btn4" class="btn btn-primary btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

    </section>
    <!-- Section: Social media -->



    <!-- Section: Text -->
    <section class="mb-4">
      <h2>More</h2>
      <p>
        Our restaurant is now open in many locations in Melbourne. Make sure you follow us on Twitter/Facebook/Instagram/Linkedin
      </p>
    </section>
    <!-- Section: Text -->


    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-4 col-md-4 mb-4 mb-md-0">
          <h5 class="text-uppercase">Check these pages:</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="about.html" class="text-white">About the author</a>
            </li>
            <li>
              <a href="enquire.html" class="text-white">Contact Us</a>
            </li>

            <li>
              <a href="index.html#reviews" class="text-white">Reviews</a>
            </li>
          
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-4 mb-4 mb-md-0">
          <h5 class="text-uppercase">Explore</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="index.html" class="text-white">Home</a>
            </li>
            <li>
              <a href="product.html" class="text-white">Meals</a>
            </li>
            <li>
              <a href="#" class="text-white">News</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-4 mb-4 mb-md-0">
          <h5 class="text-uppercase">Find Us</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#" class="text-white">Locations</a>
            </li>
            <li>
              <a href="#" class="text-white">Maps</a>
            </li>
            <li>
              <a href="#" class="text-white">More Info</a>
            </li>

          </ul>
        </div>
        <!--Grid column-->

        
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->

  </div>
  <!-- Grid container -->

  </footer>
  <!-- Footer -->

  </body>
</html>