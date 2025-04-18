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
    <title>Team</title>
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
<section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Team members(Roles and Responsibilities)</h2>
          <!--<p>----</p> -->
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-10.jpg" alt="">
              <h4>Abdulla Alshamsi</h4>
              <span>Team Leader / Software Engineer</span>
              <p>
              The leader's responsibilities are to manage and assign tasks to the members, while also writing code for the software
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-20.jpg" alt="">
              <h4>Ali Alremeithi</h4>
              <span>Co-Leader</span>
              <p>
              The co-leader and programmer. His responsibilities are to help the leader with the management and develop the website.
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-35.jpg" alt="">
              <h4>Yahya Albarrawi</h4>
              <span>Designer</span>
              <p>
              The designer and documenter. He is responsible for any work that requires designing and working on documents.
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-40.jpg" alt="">
              <h4>Saif Alhammadi</h4>
              <span>Market Research</span>
              <p>
              The marketer. He is responsible for working on market research on any prices or competitors of our company.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

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