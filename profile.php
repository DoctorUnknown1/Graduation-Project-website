<?php
session_start();
include('db_connection.php');

if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if the user is not logged in
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Fetch user data from the database based on user ID
$sql = "SELECT username, email FROM users WHERE id = '$user_id'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $username = $row['username'];
    $email = $row['email'];
} else {
    // User not found or error occurred, handle accordingly
    $username = "N/A";
    $email = "N/A";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">

    <style>
        .profile-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }

        .profile-group {
            display: flex;
            justify-content: center;
            margin: 10px 0;
        }

        .profile-group label {
            margin-right: 10px;
            width: 100px;
            text-align: center;
        }

        .profile-group p {
            margin-left: 10px;
            width: 200px;
            text-align: left;
        }

        .profile-title {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
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

  <div class="profile-container">
      <h2 class="profile-title">User Profile</h2>
      <div class="profile-group">
          <label for="username">Username:</label>
          <p id="username"><?php echo $username; ?></p>
      </div>
      <div class="profile-group">
          <label for="email">Email:</label>
          <p id="email"><?php echo $email; ?></p>
      </div>
  </div>

  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Call To Action</h3>
            <p>Are you ready to save the environment and embrace a sustainable future with Artificial Bin System? We're not just offering innovative solutions; we're inviting you to be a part of a global movement towards environmental stewardship and lasting change. We're inviting you to be a part of a Greener, Cleaner, Tomorrow</p>          
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
           <!-- <a class="cta-btn align-middle" href="#">Call To Action</a> -->
          </div>
        </div>
      </div>
  </section><!-- End Cta Section -->

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
