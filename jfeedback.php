<?php
// feedback.php

// Initialize variables for feedback submission
$name = '';
$message = '';

// Check if the form was submitted using POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $name = htmlspecialchars(trim($_POST['name']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Display feedback
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Feedback Received</title>
        <link rel="stylesheet" href="jfeedback.css"> <!-- Link to your CSS -->

    </head>
    <body>
        <div class="container">
            <h1>Thank you for your feedback, ' . $name . '!</h1>
            <p>Your message: ' . $message . '</p>
            <a href="http://localhost/new_project_grp4/jonalyn.php#feedback"><button>Submit another feedback</button></a>
        </div>
    </body>
    </html>';
} else {
    // Handle GET request
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Feedback Page</title>
        <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS -->
    </head>
    <body>
        <div class="container">
            <h1>Welcome to the Feedback Page</h1>
            <p>Please submit your feedback using the form.</p>
        </div>

    </body>
    </html>';
}
?>