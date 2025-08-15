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
  <link href="assets/css/reconstruction.css" rel="stylesheet">

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
              <li><a class="nav-link scrollto active" href="./reconstruction.php">Reconstruction</a></li>
              <li><a class="nav-link scrollto" href="./3dlabelme.php">3DLabelMe</a></li>
              <li><a class="nav-link scrollto" href="./benchmark.php">Benchmark</a></li>
              <li><a class="nav-link scrollto " href="./team.php">Team</a></li>
              <li><a class="nav-link scrollto " href="account.php">Account</a></li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->



  <main id="main">

 <!-- ======= Introduction ======= -->
    <section id="introduction">
      <div class="container">

        <header class="section-header">
          <h3>Introduction</h3>
            <p><b>Building3D</b>  consists of building point clouds, roof point clouds, mesh models and wireframe models. The largest city Tallinn includes about <b>37,000 labelled building objects</b>. In addition, we also provide excutable programs to calculate <b>3D mesh IoU</b> and <b>Root Mean Square Error (RMSE)</b>.</p>
        </header>

      </div>
    </section>
<!-- End Introduction Section -->

<!-- ======= dataset dowload ======= -->
    <section id="download">
      <div class="container">

        <header class="section-header">
          <h3>Dataset Download</h3>
            <p>Please enjoy this demo dataset we have provided. Click <a href="./assets/php/download.php?demo">here</a> to download.</p>
        </header>

          <div class="row">
            <div class="col-md-12">
              <ul>
                <li>Entry-level Dataset &nbsp; <span>Roof Point Clouds & Wireframe  &nbsp;[<a href="./assets/php/download.php?entry">6,000 buildings / 260M</a>]</span></li>
                <li>Tallinn City: <span>Building Point Clouds [<a href="./assets/php/download.php?pointclouds">47,000 buildings / 5.6G</a>]</span> 
                <span>Roof Point Clouds & Wireframe [<a href="./assets/php/download.php?Tallinn">36,000 buildings / 1.7G</a>]</span>
                <span>Mesh (NOT recommend) [<a href="./assets/php/download.php?mesh">47,000 buildings / 107M</a>]</span></li>
                <li>Other Cities: Coming soon</li>
                
                <!-- <li>Haapsalu City: <span>Building Point Clouds&nbsp; [Coming]</span> <span>Roof Point Clouds [Coming]</span> <span>Mesh models [Coming]</span> <span>Wireframe models[Coming]</span></li>
                <li>Harku City: <span>Building Point Clouds&nbsp; [Coming]</span> <span>Roof Point Clouds [Coming]</span> <span>Mesh models [Coming]</span> <span>Wireframe models[Coming]</span></li>
                <li>Keila City: <span>Building Point Clouds&nbsp; [Coming]</span> <span>Roof Point Clouds [Coming]</span> <span>Mesh models [Coming]</span> <span>Wireframe models[Coming]</span></li>
                <li>Kohtla City: <span>Building Point Clouds&nbsp; [Coming]</span> <span>Roof Point Clouds [Coming]</span> <span>Mesh models [Coming]</span> <span>Wireframe models[Coming]</span></li>
                <li>Loksa City: <span>Building Point Clouds&nbsp; [Coming]</span> <span>Roof Point Clouds [Coming]</span> <span>Mesh models [Coming]</span> <span>Wireframe models[Coming]</span></li>
                <li>Marrdu City: <span>Building Point Clouds&nbsp; [Coming]</span> <span>Roof Point Clouds [Coming]</span> <span>Mesh models [Coming]</span> <span>Wireframe models[Coming]</span></li>
                <li>Narva City: <span>Building Point Clouds&nbsp; [Coming]</span> <span>Roof Point Clouds [Coming]</span> <span>Mesh models [Coming]</span> <span>Wireframe models[Coming]</span></li>
                <li>Narva Joesu City: <span>Building Point Clouds&nbsp; [Coming]</span> <span>Roof Point Clouds [Coming]</span> <span>Mesh models [Coming]</span> <span>Wireframe models[Coming]</span></li>
                <li>Paide City: <span>Building Point Clouds&nbsp; [Coming]</span> <span>Roof Point Clouds [Coming]</span> <span>Mesh models [Coming]</span> <span>Wireframe models[Coming]</span></li>
                <li>Siilamae City: <span>Building Point Clouds&nbsp; [Coming]</span> <span>Roof Point Clouds [Coming]</span> <span>Mesh models [Coming]</span> <span>Wireframe models[Coming]</span></li>
                <li>Parnu Linn City: <span>Building Point Clouds&nbsp; [Coming]</span> <span>Roof Point Clouds [Coming]</span> <span>Mesh models [Coming]</span> <span>Wireframe models[Coming]</span></li>
                <li>Rakvere City: <span>Building Point Clouds&nbsp; [Coming]</span> <span>Roof Point Clouds [Coming]</span> <span>Mesh models [Coming]</span> <span>Wireframe models[Coming]</span></li>
                <li>Saue City: <span>Building Point Clouds&nbsp; [Coming]</span> <span>Roof Point Clouds [Coming]</span> <span>Mesh models [Coming]</span> <span>Wireframe models[Coming]</span></li>
                <li>TarTu City: <span>Building Point Clouds&nbsp; [Coming]</span> <span>Roof Point Clouds [Coming]</span> <span>Mesh models [Coming]</span> <span>Wireframe models[Coming]</span></li>
                 -->
              </ul>
            </div>
          </div>

      </div>
    </section>
<!-- End download Section -->

<!-- ======= data type ======= -->
    <section id="data">
      <div class="container">

        <header class="section-header">
          <h3>Data Type</h3>
        </header>

          <div class="row data-cols">

          <div class="col-md-3" >
            <div class="data-col">
              <div class="img">
                <img src="assets/img/building3d.gif" alt="" class="img-fluid">
              </div>
              <h2 class="title">Building Point Clouds</h2>
              <p>
                Each building point clouds are stored in XYZ format including XYZ coordinates, RGB colour, near-infrared information, intensity and reflectance.
              </p>
            </div>
          </div>

          <div class="col-md-3">
            <div class="data-col">
              <div class="img">
                <img src="assets/img/roof3D.gif" alt="" class="img-fluid">
              </div>
              <h2 class="title">Roof Point Clouds</h2>
              <p>
                For 3D roof reconstruction, it doesn't involve facade point clouds. Thus, the roof point clouds only retain all the points representing roof structure.
              </p>
            </div>
          </div>

          <div class="col-md-3">
            <div class="data-col">
              <div class="img">
                <img src="assets/img/mesh.gif" alt="" class="img-fluid">
              </div>
              <h2 class="title">Mesh</h2>
              <p>
                Building mesh models are created from aerial LiDAR point clouds and building footprints by using the Terrasolid software, and then modified by hand.
              </p>
            </div>
          </div>

          <div class="col-md-3">
            <div class="data-col">
              <div class="img">
                <img src="assets/img/wireframe.gif" alt="" class="img-fluid">
              </div>
              <h2 class="title">Wireframe</h2>
              <p>
                Wireframe models are a very simple 3D representation. It consists of vertexes and edges.
              </p>
              <p></p>
            </div>
          </div>

        </div>
      </div>
    </section>
<!-- End data type Section -->

<!-- ======= roof type Section ======= -->
    <section id="roof">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3>Roof Type</h3>
          <p>Building3D dataset has over 60 roof types. About ten frequently encountered roof types are shown below.</p>
        </div>

        <div class="row roof-cols d-flex justify-content-center">

          <div class="col-md-2" data-aos="fade-up" data-aos-delay="100">
            <div class="roof-col">
              <div class="img">
                <img src="assets/img/Hexagonal_Gaze.png" alt="" class="img-fluid">
              </div>
              <h4 class="title">Hexagonal Gazebo</h4>
            </div>
          </div>

          <div class="col-md-2" data-aos="fade-up" data-aos-delay="200">
            <div class="roof-col">
              <div class="img">
                <img src="assets/img/Hip_roof.png" alt="" class="img-fluid">
              </div>
              <h4 class="title">Hip Roof</h4>
            </div>
          </div>

          <div class="col-md-2" data-aos="fade-up" data-aos-delay="300">
            <div class="roof-col">
              <div class="img">
                <img src="assets/img/M_shaped.png" alt="" class="img-fluid">
              </div>
              <h4 class="title">M Shaped</h4>
            </div>
          </div>

          <div class="col-md-2" data-aos="fade-up" data-aos-delay="400">
            <div class="roof-col">
              <div class="img">
                <img src="assets/img/Butterfly.png" alt="" class="img-fluid">
              </div>
              <h4 class="title">Butterfly</h4>
            </div>
          </div>

          <div class="col-md-2" data-aos="fade-up" data-aos-delay="500">
            <div class="roof-col">
              <div class="img">
                <img src="assets/img/flat.png" alt="" class="img-fluid">
              </div>
              <h4 class="title">Flat</h4>
            </div>
          </div>

          <div class="col-md-2" data-aos="fade-up" data-aos-delay="600">
            <div class="roof-col">
              <div class="img">
                <img src="assets/img/Cross_Gable.png" alt="" class="img-fluid">
              </div>
              <h4 class="title">Cross Gable</h4>
            </div>
          </div>

          <div class="col-md-2" data-aos="fade-up" data-aos-delay="700">
            <div class="roof-col">
              <div class="img">
                <img src="assets/img/Cross_Hipped.png" alt="" class="img-fluid">
              </div>
              <h4 class="title">Cross Hipped</h4>
            </div>
          </div>

          <div class="col-md-2" data-aos="fade-up" data-aos-delay="800">
            <div class="roof-col">
              <div class="img">
                <img src="assets/img/Intersecting_hip.png" alt="" class="img-fluid">
              </div>
              <h4 class="title">Intersecting Hip</h4>
            </div>
          </div>

          <div class="col-md-2" data-aos="fade-up" data-aos-delay="900">
            <div class="roof-col">
              <div class="img">
                <img src="assets/img/Skillion_and_Lean_to.png" alt="" class="img-fluid">
              </div>
              <h4 class="title">Skillion and Lean to</h4>
            </div>
          </div>

          <div class="col-md-2" data-aos="fade-up" data-aos-delay="1000">
            <div class="roof-col">
              <div class="img">
                <img src="assets/img/Flat2.png" alt="" class="img-fluid">
              </div>
              <h4 class="title">Flat</h4>
            </div>
          </div>

          <div class="col-md-2" data-aos="fade-up" data-aos-delay="1100">
            <div class="roof-col">
              <div class="img">
                <img src="assets/img/Dutch_roof.png" alt="" class="img-fluid">
              </div>
              <h4 class="title">Dutch Roof</h4>
            </div>
          </div>

          <div class="col-md-2" data-aos="fade-up" data-aos-delay="1200">
            <div class="roof-col">
              <div class="img">
                <img src="assets/img/Gable.png" alt="" class="img-fluid">
              </div>
              <h4 class="title">Gable Roof</h4>
            </div>
          </div>

        </div>
      </div>
  </section>
<!-- End roof Section -->

<!-- ======= Data Preview ======= -->
    <section id="Preview">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Data Preview</h3>
          <p>The video shows the type of data in a certain area of the display.</p>
           <div class="ratio ratio-16x9">
                <iframe class="embed-responsive-item" src="./assets/video/Tallin_youtube.mp4" allowfullscreen></iframe>
          </div>
          </header>

      </div>
    </section>
<!-- End Data Preview Section -->


<!-- ======= Evaluation Metrics ======= -->
    <section id="evaluation">
      <div class="container">

        <header class="section-header">
          <h3>Evaluation Metrics</h3>
        </header>
        <div class="row evaluation-cols d-flex justify-content-center">
          <div class="col-md-10" data-aos="fade-up" data-aos-delay="100">
            <div class="evaluation-col">
              <div class="img">
                <img src="assets/img/iou-2.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
        <p><b>Average corner offset (ACO)</b> is the average offsets between predicted corners and ground-truth corners. The smaller offsets indicate better quality of generated models.</p>
        <p><b>Corner precision (CP), edge precision (EP), corner recall (CR), and edge recall (ER)</b> are calculated through confusion matrix to evaluate the accuracy of corner and edge classification. larger CP and EP values indicate more precise classification of corners and edges, while larger CR and ER values indicate lower rates of missing detection.</p>
        <p><b>3D Mesh IoU</b> is a metric for evaluation of the fit between generated mesh models and ground truth mesh models. We develop a numerical solution to use mesh models for 3D IoU to represent fitting errors. </p>
        <p><b>Root mean square (RMS) distance</b> is a metric for evaluation of the fit between input roof point clouds and generated mesh models.</p>
      </div>
    </section>
<!-- End Evaluation Metrics Section -->

 <!-- ======= support material section ======= -->
    <section id="support">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Support Material</h3>
            <div class="row">
              <div class="col-md-2">
                <div class="image-container">
                  <a href="#"><img src="./assets/support_material/1.png" class="img-fluid"></a>
                </div>
              </div>
              <div class="col-md-2">
                <div class="image-container">
                  <a href="#"><img src="./assets/support_material/2.png" class="img-fluid"></a>
                </div>
              </div>
              <div class="col-md-2">
                <div class="image-container">
                  <a href="#"><img src="./assets/support_material/3.png" class="img-fluid"></a>
                </div>
              </div>
              <div class="col-md-2">
                <div class="image-container">
                  <a href="#"><img src="./assets/support_material/4.png" class="img-fluid"></a>
                </div>
              </div>
              <div class="col-md-2">
                <div class="image-container">
                  <a href="#"><img src="./assets/support_material/5.png" class="img-fluid"></a>
                </div>
              </div>
              <div class="col-md-2">
                <div class="image-container">
                  <a href="#"><img src="./assets/support_material/6.png" class="img-fluid"></a>
                </div>
              </div>
            </div>

          <div class="row">
              <div class="col-md-2">
                <div class="image-container">
                  <a href="#"><img src="./assets/support_material/7.png" class="img-fluid"></a>
                </div>
              </div>
              <div class="col-md-2">
                <div class="image-container">
                  <a href="#"><img src="./assets/support_material/8.png" class="img-fluid"></a>
                </div>
              </div>
              <div class="col-md-2">
                <div class="image-container">
                  <a href="#"><img src="./assets/support_material/9.png" class="img-fluid"></a>
                </div>
              </div>
              <div class="col-md-2">
                <div class="image-container">
                  <a href="#"><img src="./assets/support_material/10.png" class="img-fluid"></a>
                </div>
              </div>
              <div class="col-md-2">
                <div class="image-container">
                  <a href="#"><img src="./assets/support_material/11.png" class="img-fluid"></a>
                </div>
              </div>
              <div class="col-md-2">
                <div class="image-container">
                  <a href="#"><img src="./assets/support_material/12.png" class="img-fluid"></a>
                </div>
              </div>
          </div>

          <div class="row">
            <div class="col-md-2">
                <div class="image-container">
                  <a href="#"><img src="./assets/support_material/13.png" class="img-fluid"></a>
              </div>
            </div>
            <div class="col-md-2">
                <div class="image-container">
                  <a href="#"><img src="./assets/support_material/14.png" class="img-fluid"></a>
              </div>
            </div>
          </div>

          </header>
      </div>
    </section>
<!-- End support Section -->

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
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src='assets/js/record.js'></script>

  <!-- Template Main JS files -->
  <script src="assets/js/main.js"></script>

</body>

</html>