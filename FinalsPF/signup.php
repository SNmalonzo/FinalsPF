<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database configuration
    include_once("db_config.php");

    // Get user input
    $email = $_POST["email"];
    $name = $_POST["name"];
    $number = $_POST["number"];
    $password = $_POST["password"];

    // Hash the password (for security)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data into the database
    $sql = "INSERT INTO users (email, name, number, password) VALUES ('$email', '$name', '$number', '$hashed_password')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Registration successful
        header("Location: course.php");
        exit();
    } else {
        // Registration failed
        echo "Error: " . mysqli_error($conn);
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
    <title>Signup</title>
    <link rel="stylesheet" href="styleform.css">
</head>
<body>

<div class="container">

    <header>
        <a href="#" class="logo">Tutor<span>Sync</span></a>
    </header>

    <section class="signup-form">
        <h2>Create an Account</h2>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
            <div class="inputBox">
                <input type="text" name="email" required>
                <label>Email</label>
            </div>
            <div class="inputBox">
                <input type="text" name="name" required>
                <label>Name</label>
            </div>
            <div class="inputBox">
                <input type="text" name="number" required>
                <label>Number</label>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <!-- Add more input fields for additional user information -->
            <div class="inputBox">
                <input type="submit" value="Sign Up">
            </div>
        </form>
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </section>

</div>

</body>
</html>