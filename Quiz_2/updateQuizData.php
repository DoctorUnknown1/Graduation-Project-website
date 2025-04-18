<?php
header('Content-Type: application/json');
session_start();

$response = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        
        $attempts = $_POST['attempts'];
        $score = $_POST['score'];

        $conn = new mysqli("localhost", "root", "", "Login_signup_db");

        if ($conn->connect_error) {
            $response['success'] = false;
            $response['error'] = 'Database connection error';
        } else {
            // Update the attempts and highest_score columns for the user
            $query = "UPDATE users SET attempts = $attempts, highest_score = GREATEST(highest_score, $score) WHERE username = '$username'";
            $result = $conn->query($query);

            if ($result) {
                $response['success'] = true;
            } else {
                $response['success'] = false;
                $response['error'] = 'Database update error: ' . $conn->error;
            }

            $conn->close();
        }
    } else {
        $response['success'] = false;
        $response['error'] = 'User not authenticated';
    }
} else {
    $response['success'] = false;
    $response['error'] = 'Method not allowed';
}

echo json_encode($response);
?>
