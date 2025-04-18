<?php
include('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize user inputs
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Fetch hashed password from the database
    $sql = "SELECT id, username, email, password FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        // Verify hashed password
        if (password_verify($password, $hashed_password)) {
            // Start session
            session_start();

            // Regenerate the session ID after successful login
            session_regenerate_id(true);

            // Store user information in session variables
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];

            // Redirect to home page (change 'home1.php' to your actual home page)
            header("Location: home1.php");
            exit();
        } else {
            echo '<script>document.addEventListener("DOMContentLoaded", function() {
                var errorMessage = document.querySelector(".error-message");
                errorMessage.textContent = "Incorrect password";
                errorMessage.style.display = "block";
            });</script>';
        }
    } else {
        echo '<script>document.addEventListener("DOMContentLoaded", function() {
            var errorMessage = document.querySelector(".error-message");
            errorMessage.textContent = "User not found";
            errorMessage.style.display = "block";
        });</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>
  <link rel="stylesheet" href="login_and_signup.css"> <!-- Link to your style sheet -->

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
  <meta content="" name="description">
  <meta content="" name="keywords">

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



  <!-- =======================================================
  * Template Name: Artificial Bin System
  * Template URL: https://bootstrapmade.com/Artificial Bin System-free-one-page-bootstrap-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
<!--  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@example.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section> -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <!-- ATS and GP logo -->
      <img src="./img/ATS_logo.png" alt="ATS logo" class="ATS-logo-image"> 
      <img src="./img/GP_logo.png" alt="ABS logo" class="ABS-logo-image"> 

      <h1 class="logo me-auto"><a href="index.php">Artificial Bin System</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="About_us.php">About Us</a></li>
          <li><a class="nav-link scrollto" href="Contact_us.php">Contact Us</a></li>
          <li><a class="nav-link scrollto" href="team.php">Team</a></li>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

    <div class="container">
        <table align = center width =50%> <tr><td>
        <h2>Login</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter Email" required><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter Password" required><br>
            <a href="signup.php">Don't have an account? Click Here!</a><br><br>
            <input type="submit" value="Login">
       </form>
<div class="error-message"></div>

        <div class="error-message"></div>
</td></tr>
        </table>
    </div>
</section>
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
