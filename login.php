<?php

    session_start();

    if(isset($_SESSION['user_email'])){
        header("Location: dashboard.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - StyleScape</title>
    <link rel="stylesheet" href="./css/auth.css">
    <link rel="stylesheet" href="./css/root.css">
</head>
<body>

    <?php

        // Include the database connection file
        include "db.php";

        // Check if the login form was submitted
        if (isset($_POST['submit'])) {
            // Get form data
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            // Escape special characters in form data
            $email = mysqli_real_escape_string($conn, $email);
            $pass = mysqli_real_escape_string($conn, $pass);

            // Fetch user data from the database
            $sql = "SELECT * FROM users WHERE email='$email'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);

                // Verify password
                if (password_verify($pass, $row['pass'])) {
                    $_SESSION['user_email'] = $email;
                    
                    // Redirect to the dashboard or another page
                    header("Location: dashboard.php");
                    exit;
                } else {
                    // Password is incorrect
                    echo "<div class='error'>Incorrect Password</div>";
                }
            } else {
                // User does not exist
                echo "<div class='error'>User does not exist.</div>";
            }
        }
    ?>

    <div class="main">
        <div class="content">
            <h1>Login</h1>
            <form action="" method="post">
                <input type="email" name="email" id="email" placeholder="Email" required>
                <input type="password" name="pass" id="pass" placeholder="Password" required>
                <div class="btn">
                    <input type="submit" value="Submit" name="submit" class="submit">
                </div>
            </form>
            <div class="register"><span>Don't have an account ?<a href="register.php"> Register Now </a></span></div>
        </div>
    </div>

</body>
</html>