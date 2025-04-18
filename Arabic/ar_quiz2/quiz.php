<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page or handle accordingly
    header("Location: login.php");
    exit();
}


// Function to connect to the MySQL database
function connectToDatabase() {
    $host = "localhost"; // Replace with your database host
    $username = "root"; // Replace with your database username
    $password = ""; // Replace with your database password
    $database = "Login_signup_db"; // Replace with your database name

    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

// Function to get user data from the database
function getUserData($username) {
    $conn = connectToDatabase();

    $username = $conn->real_escape_string($username); // Sanitize input

    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        $userData = $result->fetch_assoc();
        $conn->close();
        return $userData;
    } else {
        $conn->close();
        return null;
    }
}

// Function to update user's attempts and highest score in the database
function updateQuizData($username, $attempts, $score) {
    $conn = connectToDatabase();

    $username = $conn->real_escape_string($username);
    $attempts = $conn->real_escape_string($attempts);
    $score = $conn->real_escape_string($score);

    $query = "UPDATE users SET attempts = $attempts, highest_score = $score WHERE username = '$username'";
    $result = $conn->query($query);

    if (!$result) {
        echo "Update failed: " . $conn->error;
    } else {
        echo "Update successful!";
    }

    $conn->close();

    return $result;
}




// Check if the user is logged in
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $userData = getUserData($username);

    if ($userData) {
        echo "Welcome, " . $userData['username'] . "!";

        // Include the HTML content for the quiz here

        echo '<div id="quiz-container">
                  <h1>Welcome, ' . $userData['username'] . '!</h1>
                  <div id="quiz"></div>
                  <div id="timer">Time: <span id="time">120</span> seconds</div>
                  <div id="message"></div>
                  <button id="submit-btn">Submit</button>
              </div>';

        // Include the JavaScript content for the quiz here

        echo '<script>
                  // Ensure userData is defined before the ar_quiz.js script is loaded
                  var userData = ' . json_encode($userData) . ';
              </script>
              <script src="./ar_quiz.js" defer></script>';
    } else {
        echo "User data not found. Please log in.";
        // Redirect to the login page or handle accordingly
    }
} else {
    echo "User not logged in. Please log in.";
    // Redirect to the login page or handle accordingly
}
?>
