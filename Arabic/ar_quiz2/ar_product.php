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
    <link href="../../assets/img/favicon.png" rel="icon">
    <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="../../assets/css/style.css" rel="stylesheet">

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
      <img src="../../img/ATS_logo.png" alt="ATS logo" class="ATS-logo-image">
      <img src="../../img/GP_logo.png" alt="ABS logo" class="ABS-logo-image">

      <h1 class="logo me-auto"><a href="../Arabic/ar_home1.php">Artificial Bin System</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="../ar_home1.php">الصفحة الرئيسية</a></li>
          <li><a class="nav-link scrollto" href="../ar_about_us2.php">معلومات عنا</a></li>
          <li><a class="nav-link scrollto" href="../ar_contact_us2.php">اتصل بنا</a></li>
          <li><a class="nav-link scrollto" href="../ar_team2.php">الفريق</a></li>
          <li><a class="nav-link scrollto" href="../ar_profile.php">حساب تعريفي</a></li>
          <li><a class="nav-link scrollto active" href="../../home1.php">English</a></li>
          <!--<li class="dropdown"><a href="#"><span>Extra info</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="getstarted scrollto" href="../Quiz_2/QUIZFE.php">اختبر معلوماتك</a></li>
          <li><a class="nav-link scrollto" href="../logout.php">تسجيل خروج</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </header>

  <section class="main-content">
    <main>
        <a href="../../Downloads/software.rar" download>إضغط هنا للتحميل</a>
    </main>
  </section>

  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 content-item">
            <span>الخطوة 1</span>
            <!--<h4>Lorem Ipsum</h4> -->
            <p>اضغط على (اضغط هنا للتحميل)</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <span>الخطوة 2</span>
            <!--<h4>Repellat Nihil</h4> -->
            <p>انقر بزر الماوس الأيمن عليه، واستخرجه</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <span>الخطوه 3</span>
            <!--<h4> Ad ad velit qui</h4> -->
            <p>انقر على ملف (البرنامج)</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <span>الخطوة 4</span>
            <!--<h4>Repellendus molestiae</h4>-->
            <p>واستمتع Maincode.exe انقر على</p>
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
<script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../../assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="../../assets/js/main.js"></script>
</body>
</html>
