<?php
session_start();
?>
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
  <link href="assets/css/login.css" rel="stylesheet">

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
              <li><a class="nav-link scrollto" href="./3dlabelme.php">3DLabelMe</a></li>
              <li><a class="nav-link scrollto " href="./benchmark.php">Benchmark</a></li>
              <li><a class="nav-link scrollto " href="./team.php">Team</a></li>
              <li><a class="nav-link scrollto active" href="account.php">Account</a></li>

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
          <h3>Building3D Terms of use</h3>
        </div>

        <div class="row contact-info">
          <div class="col-md-12">
            <h4>Download and Use Policy</h4>
            <ol class="list-group list-group-numbered">
              <li class="list-group-item">Purpose: The purpose of this Building3D dataset is to facilitate <span style="color: red">academic research and education</span>, as well as possible <span style="color:red;">non-commercial applications</span>.</li>
              <li class="list-group-item">Copyright protected: This dataset is protected by copyright. Any unauthorized copying, distribution, or modification is illegal.</li>
              <li class="list-group-item">Non-commercial use: The use of this dataset is permitted for non-commercial purposes only. Commercial use is prohibited without prior written permission.</li>
              <li class="list-group-item">Upon registration, you will be granted the privilege to download the data.</li>
            </ol>
          </div>
          <div class="col-md-12">
            <h4>Submission Policy</h4>
            <ol class="list-group list-group-numbered">
              <li class="list-group-item">The submission system may not be used to train or tune methods by evaluating multiple parameter or feature choices and reporting the best results obtained. Repeated submissions of similar method results are also prohibited.</li>
              <li class="list-group-item">If a user wishes to report multiple results in ablation experiments for various versions of their algorithm (such as parameters or features), this must be done using the training data. Only the best-performing setting of the novel method may be submitted for evaluation to our submission system.Users are not permitted to register multiple times on the server using different email addresses.</li>
              <li class="list-group-item">Every three months, we delete entries older than six months that are either anonymous or do not have a linked paper.</li>
            </ol>
          </div>
        </div>

        <div class="form row">
          <form action="./assets/php/user.php" method="POST" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-5 mx-auto">
                <label for="email" class="form-label">Email*</label>
                <input type="email" name="email" class="form-control rounded" id="email" placeholder="your_email@email.com" required>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-5 mx-auto">
                <label for="password" class="form-label">Password*</label>
                <input type="password" class="form-control rounded" name="password" id="password" placeholder="password" required>
              </div>
            </div>
            <div class="col-md-5 mx-auto form-check d-flex align-items-center">
              <input type="checkbox" class="form-check-input custom-checkbox rounded" id="agree" required>
              <label class="form-check-label" for="agree">I accept the <a href="#">Building3D Terms of use</a></label>
          </div>
          <input type="hidden" name="action" value="login">
            <!-- <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div> -->
            <div class="text-center"><button type="submit" class="btn btn-rounded">Login</button></div>
            <div class="col-md-5 mx-auto register">
              <a href="verify.php" class="text-decoration-none">Forgot Password?</a>
              <p class="mb-0">Don't have an account? <a href="register.php" class="text-decoration-none">Sign Up</a></p>
            </div>
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
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->

  <!-- Template Main JS files -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<?php
    if (isset($_GET['message'])) {
      $message = $_GET['message'];
      if ($message == "unsuccessful"){
        echo "<script>alert('Password and Confirm Password do not match!');</script>";
      }
  }
?>