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
  <link href="assets/css/3dlabelme.css" rel="stylesheet">

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
          <h1 class="logo"><a href="index.php">Building3D</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto" href="./index.php">Home</a></li>
              <li><a class="nav-link scrollto" href="./reconstruction.php">Reconstruction</a></li>
              <li><a class="nav-link scrollto active" href="./3dlabelme.php">3DLabelMe</a></li>
              <li><a class="nav-link scrollto " href="./benchmark.php">Benchmark</a></li>
              <li><a class="nav-link scrollto " href="./team.php">Team</a></li>
              <li><a class="nav-link scrollto" href="account.php">Account</a></li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->



  <main id="main">

    <!-- ======= 3D labelme Section ======= -->
    <section id="label">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h3>3D LabelMe</h3>
          <p>The Building3D dataset is completely annotated and labeled with the wireframe model using the <b>3D LabelMe</b> software, which is developed using <b>PyQt5</b> and utilizes <b>PyOpenGL</b> for rendering the point cloud and drawing line segments. </p>
        </header>
        <div class="row">
          <p>The 3D LabelMe software currently supports the following features</p>
              <div class="col-md-6 mx-auto">
                <ul class="list-group list-group-numbered">
                  <li class="list-group-item" data-number="1">
                    Rendering of Point Cloud data
                  </li>
                  <li class="list-group-item" data-number="2">
                    Modifying wireframe models
                    <ul>
                      <li>Adding vertices</li>
                      <li>Adding line segments</li>
                      <li>Connecting vertices</li>
                      <li>Merging vertices</li>
                      <li>Selecting multiple lines</li>
                      <li>Cutting line</li>
                      <li>Undo&Redo, Copy&Paste</li>
                    </ul>
                  </li>
                  <li class="list-group-item" data-number="3">
                    Zooming and panning of the point cloud data for ease of labeling
                  </li>
                  <li class="list-group-item" data-number="4">
                    Support for multiple file formats, including .ply, .xyz, .pcd, .txt, .bin and .obj
                  </li>
                  <li class="list-group-item" data-number="5">
                    Saving and loading of labeled data
                  </li>
                  <li class="list-group-item" data-number="6">
                    User-friendly interface for efficient annotation of point clouds
                  </li>
                </ul>
              </div>
              <div class="col-md-5 d-flex align-items-center justify-content-center">
                <div class="image-container">
                  <a href="#Preview"><img src="./assets/img/3DLabel.png" class="img-fluid"></a>
                  <p>3D LabelMe</p>
                </div>
              </div>
        </div>
      </div>
    </section>
    <!-- End 3D label Section -->

    <!-- ======= Preview ======= -->
    <section id="Preview">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Preview</h3>
           <div class="ratio ratio-16x9">
                <iframe class="embed-responsive-item" src="./assets/video/3DLabelMe.mp4" allowfullscreen></iframe>
          </div>
          </header>

      </div>
    </section>
<!-- End Preview Section -->

<!-- ======= To do ======= -->
    <section id="todo">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>To Do List</h3>
        </header>
        <div class="row">
          <div class="col-md-6">
            <ul class="list-group">
              <li class="list-group-item">
                <div class="d-flex align-items-center">
                  <span class="checkmark-box checked">
                    <span class="checkmark"></span>
                  </span>
                  <span class="task-name">3D wireframe annotation.</span>
                </div>
              </li>
              <!-- <li class="list-group-item">
                <div class="d-flex align-items-center">
                  <span class="checkmark-box">
                    <span class="checkmark"></span>
                  </span>
                  <span class="task-name">Web version of 3D LableMe -- In process</span>
                </div>
              </li> -->
              <li class="list-group-item">
                <div class="d-flex align-items-center">
                  <span class="checkmark-box">
                    <span class="checkmark"></span>
                  </span>
                  <span class="task-name">3D point cloud lane marking annotation.</span>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex align-items-center">
                  <span class="checkmark-box">
                    <span class="checkmark"></span>
                  </span>
                  <span class="task-name">3D bounding box annotation.</span>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex align-items-center">
                  <span class="checkmark-box">
                    <span class="checkmark"></span>
                  </span>
                  <span class="task-name">3D semantic segmentation.</span>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
<!-- End To do Section -->


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