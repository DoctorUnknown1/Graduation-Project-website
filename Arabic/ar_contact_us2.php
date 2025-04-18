<?php session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page or handle accordingly
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">
        <!-- ATS and GP logo -->
        <img src="../img/ATS_logo.png" alt="ATS logo" class="ATS-logo-image">
        <img src="../img/GP_logo.png" alt="ABS logo" class="ABS-logo-image">
        <h1 class="logo me-auto"><a href="../Arabic/ar_home1.php">Artificial Bin System</a></h1>

        <nav id="navbar" class="navbar">
            <ul>
            <li><a class="nav-link scrollto active" href="ar_home1.php">الصفحة الرئيسية</a></li>
            <li><a class="nav-link scrollto" href="../Arabic/ar_about_us2.php">معلومات عنا</a></li>
            <li><a class="nav-link scrollto" href="../Arabic/ar_contact_us2.php">اتصل بنا</a></li>
            <li><a class="nav-link scrollto" href="../Arabic/ar_team2.php">الفريق</a></li>
            <li><a class="nav-link scrollto" href="../Arabic/ar_profile.php">حساب تعريفي</a></li>
            <li><a class="nav-link scrollto active" href="../home1.php">English</a></li>
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
                <li><a class="getstarted scrollto" href="../Quiz_2/QUIZFE.php">اختبر معلوماتك</a></li>
                <li><a class="nav-link scrollto" href="logout.php">تسجيل خروج</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>اتصال</h2>
         <!-- <p>Magnam dolores couidem hic quas.</p> -->
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>موقع:</h4>
                <p>Z23, Near Secondary Technical School, Mohammed Bin Zayed City - Abu Dhabi</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>بريد إلكتروني:</h4>
                <p>497320@aths.ac.ae or 178085@aths.ac.ae</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>اتصل:</h4>
                <p>+971 55 564 2394</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2404.9456653419174!2d54.56143243329523!3d24.3159105286297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e38f75bc89753%3A0x211b2859fa373e64!2sAbu%20Dhabi%20Professional%20Education%20and%20Training%20Institute!5e0!3m2!1sen!2sae!4v1714654355715!5m2!1sen!2sae" width="470" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">اسمك</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">بريدك الالكتروني</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">موضوع</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">رسالة</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">تحميل</div>
                <div class="error-message"></div>
                <div class="sent-message">تم ارسال رسالتك. شكرًا لك!</div>
              </div>
              <div class="text-center"><button type="submit">أرسل رسالة</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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
</body>
</html>
