<?php
session_start();
// echo $_SESSION['email'];
if (!isset($_SESSION['email'])) {
  header('Location: login.php');
  exit();
}
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
  <link href="assets/css/account.css" rel="stylesheet">

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
    <section id="personal">
      <div class="container" data-aos="fade-up">

        <div class="section-header" id="Building3D">
          <h3>Personal Account</h3>
        </div>


        <div class="row contact-info">
          <div class="col-md-12">
            <div class="row" style="margin-top: 0px">
              <div class="col-md-3">
                <h4>Personal Information</h4>
              </div>
              <div class="col-md-3 offset-md-6 text-end">
                <a href="./assets/php/user.php?logout" ><b>Logout</b></a>
              </div>
            </div>
            <?php
              include './assets/php/user.php';
              $data = get_user_information($_SESSION['email']);
              // $data = json_decode($_GET['data'], true);
              // $data = $data[0]; 
              // echo $data;
            ?>

            <div class="row justify-content-center">
              <div class="col-md-4">
                <strong>First Name:</strong> <?php echo $data['first_name']; ?>
              </div>
              <div class="col-md-3">
                <strong>Last Name:</strong> <?php echo $data['last_name']; ?>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-4">
                <strong>Organization:</strong> <?php echo $data['organization']; ?>
              </div>
              <div class="col-md-3">
                <strong>Supervisor:</strong> <?php echo $data['supervisor']; ?>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <strong>Email:</strong> <?php echo $data['email']; ?></td>
              </div>
            </div>
          </div>
        </div>

      <div class="row submit-result">
          <div class="col-md-12">
              <h4>Submit your Results</h4>
              <h5>Submission Policy</h5>
              <ol class="list-group list-group-numbered">
                  <li class="list-group-item">You will receive <span style="color: red; font-weight: bold">10 submission opportunities</span> each month during the CVPR 2024 Workshop.</li>
                  <li class="list-group-item">The submission system may not be used to train or fine-tune methods by evaluating multiple parameter or feature choices and reporting the best results obtained. Repeated submissions of similar method results are also prohibited.</li>
                  <li class="list-group-item">If a user wishes to report multiple results in ablation experiments for various versions of their algorithm (such as parameters or features), this must be done using the training data. Only the best-performing setting of the novel method may be submitted for evaluation to our submission system. Users are not permitted to register multiple times on the server using different email addresses.</li>
                  <li class="list-group-item">Every three months, we delete entries older than six months that are either anonymous or do not have a linked paper.</li>
              </ol>
          </div>
          <h5>Submission</h5>
          <div class="col-md-12" style="display: flex;">
              <div class="col-5">
              <form>
                  <label for="Entry-level">
                  <input type="radio" id="Entry-level" name="options" value="Entry-level"> Entry level dataset
                  </label>

                  <label for="Tallinn">
                  <input type="radio" id="Tallinn" name="options" value="Tallinn"> Tallinn City dataset
                  </label>
              </form>
              </div>


              <div id="popup-content" class="col-5 popup" style="flex: 1;">
                  <p id="popup-text"></p>
                  <input type="file" id="fileInput" style="display: none;" >
                  <button id="submit-button" type="submit" onclick="uploadFile()" class="btn btn-rounded">Submit</button>
                  <p id="file_name" style="display: none; margin-right: 10px"></p><progress id="uploadProgress" style="display: none;" value="0" max="100"></progress>
              </div>
          </div>
      </div>

        <div class="row contact-info">
          <div class="col-md-12">
            <h4>Your Submissions</h4>

          </div>
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
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src='assets/js/record.js'></script>
  <script src="assets/js/acount.js"></script>

  <!-- Template Main JS files -->
  <script src="assets/js/main.js"></script>

</body>

</html>