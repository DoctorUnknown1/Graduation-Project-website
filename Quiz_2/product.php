<?php

// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page or handle accordingly
    header("Location:login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product</title>
    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="../assets/css/style.css" rel="stylesheet">

    <style>
        .main-content {
            text-align: center;
            font-size: 1.5rem;
            margin: 50px 0;
        }

        .main-content a {
            display: inline-block;
            margin-top: 20px;
            font-size: 2rem;
            color: #6ec083;
            text-decoration: none;
            transition: color 0.3s;
        }

        .main-content a:hover {
            color: #5ca672;
        }
    </style>
</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <!-- ATS and GP logo -->
      <img src="../img/ATS_logo.png" alt="ATS logo" class="ATS-logo-image">
      <img src="../img/GP_logo.png" alt="ABS logo" class="ABS-logo-image">

      <h1 class="logo me-auto"><a href="../home1.php">Artificial Bin System</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="../home1.php">Home</a></li>
          <li><a class="nav-link scrollto" href="../About_us2.php">About Us</a></li>
          <li><a class="nav-link scrollto" href="../Contact_us2.php">Contact Us</a></li>
          <li><a class="nav-link scrollto" href="../team2.php">Team</a></li>
          <li><a class="nav-link scrollto" href="../profile.php">Profile</a></li>
          <li><a class="nav-link scrollto active" href="../Arabic/ar_home1.php">عربي</a></li>
          <li><a class="getstarted scrollto" href="../Quiz_2/QUIZFE.php">Test your knowledge</a></li>
          <li><a class="nav-link scrollto" href="../logout.php">logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <section class="main-content">
    <main>
        <a href="../Downloads/software.rar" download>Click here to download!</a>
    </main>
  </section>

  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 content-item">
            <span>Step 1</span>
            <!--<h4>Lorem Ipsum</h4> -->
            <p>Click on "Click here to download!"</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <span>Step 2</span>
            <!--<h4>Repellat Nihil</h4> -->
            <p>Right click on it, and extract it.</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <span>Step 3</span>
            <!--<h4> Ad ad velit qui</h4> -->
            <p>Click on the "software" file.</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <span>Step 4</span>
            <!--<h4>Repellendus molestiae</h4>-->
            <p>Click on Maincode.exe and enjoy!</p>
          </div>

          <!--<div class="col-lg-4 col-md-6 content-item">
            <span>Step 5</span>
               <h4>Sapiente Magnam</h4>
            <p>Vitae dolorem in deleniti ipsum omnis tempore voluptatem. Qui possimus est repellendus est quibusdam</p>
          </div> -->

          <!--<div class="col-lg-4 col-md-6 content-item">
            <span>Step 6</span>
                <h4>Facilis Impedit</h4> 
            <p>Quis eum numquam veniam ea voluptatibus voluptas. Excepturi aut nostrum repudiandae voluptatibus corporis sequi</p>
          </div>-->

        </div>

      </div>
  </section><!-- End Why Us Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Artificial Bin System</h3>
      <p>A Greener, Cleaner, Tomorrow</p>
      <div class="copyright">
        &copy; Copyright <strong><span>Artificial Bin System</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/Artificial Bin System-free-one-page-bootstrap-template/ -->
      </div>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="../assets/js/main.js"></script>
</body>
</html>
