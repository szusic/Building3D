<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
<!--  <meta content="width=device-width, initial-scale=1.0" name="viewport">-->

  <title>Building3D</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Building3D_icon.png" rel="icon">
  <link href="assets/img/Building3D_icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS files -->
  <link href="assets/css/register.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizPage
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container-fluid">

      <div class="row justify-content-center align-items-center">
        <div class="col-xl-11 d-flex align-items-center justify-content-between">
          <h1 class="logo"><a href="index.html">Building3D</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto" href="index.html">Home</a></li>
              <li><a class="nav-link scrollto" href="./reconstruction.php">Reconstruction</a></li>
              <li><a class="nav-link scrollto" href="3dlabelme.php">3DLabelMe</a></li>
              <li><a class="nav-link scrollto " href="benchmark.php">Benchmark</a></li>
              <li><a class="nav-link scrollto" href="./team.php">Team</a></li>
              <li><a class="nav-link scrollto" href="account.php">Account</a></li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->



  <main id="main">

        <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header" id="Building3D">
          <h3>Change Password</h3>
        </div>
        <div class="row contact-info">
          <p class="mb">Please use a <span style="color: red">complex mixed password</span> to keep your data and accounts secure.</p>
        </div>

        <div class="form row">
          <form action="./assets/php/user.php" method="post" role="form" class="php-email-form">
            <div class="row justify-content-center">


              <div class="form-group col-md-7">
                <label for="email" class="form-label">Email*</label>
                <input type="email" name="email" class="form-control rounded" id="email" placeholder="Enter a valid email address"  value="<?php echo $_GET['email']; ?>" spellcheck="false" readonly required>
              </div>


              <div class="form-group col-md-7">
                <label for="password" class="form-label">Password*</label>
                <input type="text" class="form-control rounded" name="password" id="password" placeholder="Enter your supervisor" required>
              </div>

              <div class="form-group col-md-7">
                <label for="confirmPassword" class="form-label">Confirm Password*</label>
                <input type="password" name="confirmPassword" class="form-control rounded" id="confirmPassword" placeholder="Confirm your password" required>
              </div>
              <input type="hidden" name="activation_code" value="<?php echo $_GET['code']; ?>" readonly>

            </div>

<!--            <div class="my-3">-->
<!--              <div class="loading">Loading</div>-->
<!--              <div class="error-message"></div>-->
<!--              <div class="sent-message">Your message has been sent. Thank you!</div>-->
<!--            </div>-->
            <div class="text-center"><button type="submit" class="btn btn-rounded" style="width: 250px">Submit</button></div>

          </form>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Building3D</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
      -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<!--  <script src="assets/vendor/php-email-form/validate.js"></script>-->

  <!-- Template Main JS files -->
  <script src="assets/js/main.js"></script>

</body>

</html>