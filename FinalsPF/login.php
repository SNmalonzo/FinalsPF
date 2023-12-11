<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database configuration
    include_once("db_config.php");

    // Get user input
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Fetch user data from the database
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row["password"];

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            // Login successful
            header("Location: course.php");
            exit();
        } else {
            // Invalid password
            echo "Invalid password";
        }
    } else {
        // User not found
        echo "User not found";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>

<div class="container">

    <header>
        <a href="#" class="logo">Tutor<span>Sync</span></a>
    </header>

    <section class="login-form">
        <h2>Login to Your Account</h2>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
            <div class="inputBox">
                <input type="text" name="email" required>
                <label>Email</label>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <div class="inputBox">
                <input type="submit" value="Login">
            </div>
        </form>
        <p>Don't have an account? <a href="signup.php">Sign Up here</a></p>
    </section>

</div>

</body>
</html>