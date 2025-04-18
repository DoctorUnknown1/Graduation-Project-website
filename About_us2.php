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
    <title>About us</title>
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">
        <!-- ATS and GP logo -->
        <img src="img/ATS_logo.png" alt="ATS logo" class="ATS-logo-image">
        <img src="img/GP_logo.png" alt="ABS logo" class="ABS-logo-image">
        <h1 class="logo me-auto"><a href="index.php">Artificial Bin System</a></h1>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="home1.php">Home</a></li>
                <li><a class="nav-link scrollto" href="About_us2.php">About Us</a></li>
                <li><a class="nav-link scrollto" href="Contact_us2.php">Contact Us</a></li>
                <li><a class="nav-link scrollto" href="profile.php">Profile</a></li>
                <li><a class="nav-link scrollto" href="team2.php">Team</a></li>
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
                <li><a class="getstarted scrollto" href="Quiz_2/QUIZFE.php">Test Your Knowlegde</a></li>
                <li><a class="nav-link scrollto" href="logout.php">logout</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header>

<!-- ======= About Us Section ======= -->
<section id="about" class="about">
    <div class="container">
        <div class="section-title">
            <h2>About Us</h2>
            <!--<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate.
                Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>-->
        </div>
        <div class="row">
            <div class="col-lg-6 order-1 order-lg-2">
                <img src="img/About_us_img.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                <h3>The Problem We Are Trying To Solve</h3>
                <p class="fst-italic">
                Existing solutions are expensive with limited features and functionality.
                </p>
                <ul>
                    <li><i class="bi bi-check-circled"></i>This innovative project will have positive impact on the UAE process because it will meet Abu Dhabi vision 2030 and ensures sustainability</li>
                    <li><i class="bi bi-check-circled"></i>Our Creative Solution have unique features such as AI and Bilingual to support the UAE community.</li>
                    <li><i class="bi bi-check-circled"></i>Join Us : We invite you to be a part of this movement. Let's work together to make the UAE environment a safe and clean society.</li>
                </ul>
                <p>
                  Our Vision: The "Artificial Bin System" aspires to reshape the UAE's waste management landscape. It envisions a future where waste is sorted logically, and the environment is protected.
                </p>
            </div>
        </div>
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
</body>
</html>


