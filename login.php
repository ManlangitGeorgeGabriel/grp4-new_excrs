<?php
require_once "database.php";
$cookie_name = "user";
$cookie_value = "jabby";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/", "", true, true); // Secure and HttpOnly

session_start(); // Start session at the beginning

// Check if the user is already logged in
if (isset($_SESSION["user"]) && $_SESSION["user"] === "yes") {
    header("Location: index1.php");
    exit();
}

// Filter and sanitize inputs
function sanitizeInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if (isset($_POST["login"])) {
    $email = sanitizeInput($_POST["email"]);
    $password = sanitizeInput($_POST["password"]);

    // Prepare the SQL statement
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        if (password_verify($password, $user["password"])) {
            // Regenerate session ID to prevent session fixation
            session_regenerate_id(true);
            $_SESSION["user"] = "yes";
            setcookie("email", $email, time() + (86400 * 2), "/", "", true, true); // Secure and HttpOnly

            header("Location: index1.php");
            exit();
        } else {
            echo "<div class='alert alert-danger'>Password does not match</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Email does not match</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="form.css">
</head>
<body>

    <div class="container1">
        <h1>Log In</h1>
    </div>

    <div class="container">
        <form action="login.php" method="post">
            <div class="form-group">
                <input type="email" placeholder="Enter Email:" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="password" placeholder="Enter Password:" name="password" class="form-control" required>
            </div>
            <div class="form-btn">
                <input type="submit" value="Login" name="login" class="btn btn-primary">
            </div>
        </form>
        <div><p>Not registered yet? <a href="registrationform.php">Register Here</a></p></div>
    </div>
</body>
</html>
