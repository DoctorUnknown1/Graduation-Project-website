<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page or handle accordingly
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="../../assets/css/style.css" rel="stylesheet">

    <!-- Favicons -->
    <link href="../../assets/img/favicon.png" rel="icon">
    <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    
    <script src="./ar_quiz.js" defer></script>
    <title>Test Your Knowledge</title>

    <script>
    var userData = { username: '<?php echo $_SESSION['username']; ?>', /* other user information */ };
    </script>

    <style>
        /* Custom styles for centering the h1 elements */
        #quiz-container {
            text-align: center;
        }

        .center-text {
            display: block;
            text-align: center;
        }
    </style>
</head>

<body>

<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">
        <!-- ATS and GP logo -->
        <img src="../../img/ATS_logo.png" alt="ATS logo" class="ATS-logo-image">
        <img src="../../img/GP_logo.png" alt="ABS logo" class="ABS-logo-image">
        <h1 class="logo me-auto"><a href="../ar_home1.php">Artificial Bin System</a></h1>

        <nav id="navbar" class="navbar">
            <ul>
            <li><a class="nav-link scrollto active" href="../ar_home1.php">الصفحة الرئيسية</a></li>
            <li><a class="nav-link scrollto" href="../ar_about_us2.php">معلومات عنا</a></li>
            <li><a class="nav-link scrollto" href="../ar_contact_us2.php">اتصل بنا</a></li>
            <li><a class="nav-link scrollto" href="../ar_team2.php">الفريق</a></li>
            <li><a class="nav-link scrollto" href="../ar_profile.php">حساب تعريفي</a></li>
            <li><a class="nav-link scrollto active" href="../../home1.php">English</a></li>
            <!--<li class="dropdown">
                    <a href="#"><span>Extra info</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown">
                            <a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
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
                </li>-->
                <li><a class="getstarted scrollto" href="../ar_quiz2/ar_QUIZFE.php">اختبر معلوماتك</a></li>
                <li><a class="nav-link scrollto" href="../../logout.php">تسجيل خروج</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header>
<section>
    <div id="quiz-container">
        <h1 id="quiz-title" class="center-text">اختبار</h1>
        <h1 id="welcome-text" class="center-text"> !<?php echo $username; ?> مرحبا </h1>

        <div id="message"></div>
        <div id="progress-bar-container">
            <div id="progress-bar"></div>
        </div>
        <div id="quiz"></div>
        <div id="timer">الوقت: <span id="time">60</span> ثانية</div>
        <button id="submit-btn" onclick="submitQuiz()">إرسال</button>
    </div>
</section>
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
