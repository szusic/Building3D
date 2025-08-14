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

  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

  <!-- Template Main CSS files -->
  <link href="assets/css/benchmark.css" rel="stylesheet">

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
              <li><a class="nav-link scrollto" href="./3dlabelme.php">3DLabelMe</a></li>
              <li><a class="nav-link scrollto active" href="./benchmark.php">Benchmark</a></li>
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

<!-- ======= benchmark ======= -->
    <section id="benchmark">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Building3D Roof Reconstruction Task</h3>
          <p class="text-justify">In this evaluation, we utilize precision and recall to assess the performance of each method. To ensure fairness, the evaluation environment remains consistent for every method. Among them, ACO refers to the average corner offset, CP and EP represent the corner and edge precision, CR and ER represent the corner and edge recall, and C-F1 and E-F1 represent the corner and edge F1 scores.</p>
        </header>

        <?php
          $conn = include './assets/php/connect.php';
          $sql = "select * from reconstruction_results where is_published=True and level=1 ORDER BY e_f1 DESC";
          $result = $conn->query($sql);
          $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
          $conn->close();
          echo "<script>";
          echo "var jsTallinnData = " . json_encode($data) . ";";
          echo "</script>";
        ?>

        <div class="row about-cols d-flex justify-content-center">
          <div class="col-md-12">
            <h3>Tallinn City Benchmark</h3>
            <table id="Tallinn" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <td></td>
                  <th>ID</th>
                  <th>Methods</th>
                  <th>ACO</th>
                  <th>CP</th>
                  <th>CR</th>
                  <th>C-F1</th>
                  <th>EP</th>
                  <th>ER</th>
                  <th>E-F1</th>
                </tr>
              </thead>
              <tbody>
              <?php
                      foreach (array_keys($data) as $index) {
                        echo "<tr>";
                        echo "<td><img src='assets/img/arrow.png' class='arrow'></td>";
                        echo "<td>"; echo $index+1; echo "</td>";
                        echo "<td>"; echo $data[$index]['method']; echo "</td>";
                        echo "<td>"; echo $data[$index]['aco']; echo "</td>";
                        echo "<td>"; echo $data[$index]['cp']; echo "</td>";
                        echo "<td>"; echo $data[$index]['cr']; echo "</td>";
                        echo "<td>"; echo $data[$index]['c_f1']; echo "</td>";
                        echo "<td>"; echo $data[$index]['ep']; echo "</td>";
                        echo "<td>"; echo $data[$index]['er']; echo "</td>";
                        echo "<td>"; echo $data[$index]['e_f1']; echo "</td>";
                      }
              ?>
                <!-- Add more rows as needed -->
              </tbody>
            </table>
          </div>

          <?php
            $conn = include './assets/php/connect.php';
            $sql = "select * from reconstruction_results where is_published=True and level=0 ORDER BY e_f1 DESC";
            $result = $conn->query($sql);
            $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $conn->close();
            echo "<script>";
            echo "var jsEntryData = " . json_encode($data) . ";";
            echo "</script>";
          ?>
          <div class="col-md-12 entry-benchmark">
            <h3>Entry-level Benchmark</h3>
            <table id="Entry" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <td></td>
                  <th>ID</th>
                  <th>Methods</th>
                  <th>ACO</th>
                  <th>CP</th>
                  <th>CR</th>
                  <th>C-F1</th>
                  <th>EP</th>
                  <th>ER</th>
                  <th>E-F1</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                      foreach (array_keys($data) as $index) {
                        echo "<tr>";
                        echo "<td><img src='assets/img/arrow.png' class='arrow'></td>";
                        echo "<td>"; echo $index+1; echo "</td>";
                        echo "<td>"; echo $data[$index]['method']; echo "</td>";
                        echo "<td>"; echo $data[$index]['aco']; echo "</td>";
                        echo "<td>"; echo $data[$index]['cp']; echo "</td>";
                        echo "<td>"; echo $data[$index]['cr']; echo "</td>";
                        echo "<td>"; echo $data[$index]['c_f1']; echo "</td>";
                        echo "<td>"; echo $data[$index]['ep']; echo "</td>";
                        echo "<td>"; echo $data[$index]['er']; echo "</td>";
                        echo "<td>"; echo $data[$index]['e_f1']; echo "</td>";
                      }
                  ?>
                <!-- Add more rows as needed -->
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </section>
<!-- End Abstract Section -->


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

  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
  <script src='assets/js/record.js'></script>

  <!-- Template Main JS files -->
  <script src="assets/js/main.js"></script>
  <script>
    $(document).ready(function() {
  var Tallinn_table = $('#Tallinn').DataTable({
    rowGroup: {
      dataSrc: 0
    }
  });
  $('#Tallinn tbody').on('click', 'tr', function() {
    var row = Tallinn_table.row($(this));
    var arrow = row.node().querySelector('.arrow');

    var details = row.data()[1];
    if (row.child.isShown()) {
      row.child.hide();
      $(arrow).removeClass('arrow-down');
    } else {
      row.child(Tallinn_formatChildRow(details)).show();
      $(arrow).addClass('arrow-down');
    }
  });
  function Tallinn_formatChildRow(details) {
    return '<tr class="details"><td class="td-first">' +
            '<ul className="list-group">' +
            '<li className="list-group-item">Team:</li>' +
            '<li className="list-group-item">Authors:</li>' +
            '<li className="list-group-item">Email:</li>' +
            '<li className="list-group-item">Paper Url:</li>' +
            '<li className="list-group-item">Project Url:</li>' +
            '<li className="list-group-item">Abstract:</li> </ul>'
            + '</td><td>'+
            '<ul className="list-group">' +
            '<li className="list-group-item">'+ jsTallinnData[details-1]['teams'] +'</li>' +
            '<li className="list-group-item">'+ jsTallinnData[details-1]['authors'] +'</li>' +
            '<li className="list-group-item">null</li>' +
            '<li className="list-group-item">'+ jsTallinnData[details-1]['paper_url'] +'</li>' +
            '<li className="list-group-item">'+ jsTallinnData[details-1]['project_url'] +'</li>' +
            '<li className="list-group-item">'+ jsTallinnData[details-1]['abstract'] +'</li> </ul>' +
            '</td></tr>';
  }

  var Entry_table = $('#Entry').DataTable({
    rowGroup: {
      dataSrc: 0
    }
  });
  $('#Entry tbody').on('click', 'tr', function() {
    var row = Entry_table.row($(this));
    var arrow = row.node().querySelector('.arrow');

    var details = row.data()[1];

    if (row.child.isShown()) {
      row.child.hide();
      $(arrow).removeClass('arrow-down');
    } else {
      row.child(Entry_formatChildRow(details)).show();
      $(arrow).addClass('arrow-down');
    }
  });
  function Entry_formatChildRow(details) {
    return '<tr class="details"><td class="td-first">' +
            '<ul className="list-group">' +
            '<li className="list-group-item">Team:</li>' +
            '<li className="list-group-item">Authors:</li>' +
            '<li className="list-group-item">Email:</li>' +
            '<li className="list-group-item">Paper Url:</li>' +
            '<li className="list-group-item">Project Url:</li>' +
            '<li className="list-group-item">Abstract:</li> </ul>'
            + '</td><td>'+
            '<ul className="list-group">' +
            '<li className="list-group-item">'+ jsEntryData[details-1]['teams'] +'</li>' +
            '<li className="list-group-item">'+ jsEntryData[details-1]['authors'] +'</li>' +
            '<li className="list-group-item">null</li>' +
            '<li className="list-group-item">'+ jsEntryData[details-1]['paper_url'] +'</li>' +
            '<li className="list-group-item">'+ jsEntryData[details-1]['project_url'] +'</li>' +
            '<li className="list-group-item">'+ jsEntryData[details-1]['abstract'] +'</li> </ul>' +
            '</td></tr>';
  }
});
  </script>
</body>

</html>