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
    <title>Register - StyleScape</title>
    <link rel="stylesheet" href="./css/auth.css">
    <link rel="stylesheet" href="./css/root.css">
</head>
<body>

    <?php

        // include the database connection file
        include "db.php";

        // check if the form was submitted
        if(isset($_POST['submit'])){

            // get form data
            $fname = $_POST['fname'];
            $email = $_POST['email'];
            $add = $_POST['add'];
            $phone = $_POST['phone'];
            $pass = $_POST['pass'];
            $cpass = $_POST['cpass'];

            if(strlen($phone) == 10){

                // check if the passwords match
                if($pass == $cpass){

                    // escape special characters in form data
                    $fname = mysqli_real_escape_string($conn, $fname);
                    $email = mysqli_real_escape_string($conn, $email);
                    $pass = mysqli_real_escape_string($conn, $pass);
                    $add = mysqli_real_escape_string($conn, $add);

                    // hash the password
                    $pass = password_hash($pass, PASSWORD_DEFAULT);

                    // check if the email already exists in the database
                    $email_query = "SELECT * FROM users WHERE email='$email'";
                    $result = mysqli_query($conn, $email_query);

                    // if the email exists, display a warning message
                    if (mysqli_num_rows($result) > 0) {
                        echo "<div class='error'>This email is already registered.</div>";
                    } else {
                        // insert form data into the database
                        $sql = "INSERT INTO users (fullname, email, shipping_address, phone_no, pass) 
                        VALUES ('$fname', '$email', '$add', '$phone', '$pass')";

                        // execute the SQL statement
                        if (mysqli_query($conn, $sql)) {
                            $_SESSION['user_email'] = $email;
                            // Redirect to the dashboard or another page
                            header("Location: dashboard.php");
                            exit;
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                    }

                } else {
                    echo "<div class='error'>Passwords do not match</div>";
                }
            }
            else{
                echo "<div class='error'>Phone number is incorrect</div>";
            }

        }

    ?>

    <div class="main">
        <div class="content">
            <h1>Register</h1>
            <form action="" method="post">
                <input type="text" name="fname" id="fname" placeholder="Full Name" required>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <input type="text" name="add" id="add" placeholder="Address" required>
                <input type="text" name="phone" id="phone" placeholder="Phone Number" required>
                <input type="password" name="pass" id="pass" placeholder="Password" required>
                <input type="password" name="cpass" id="cpass" placeholder="Confirm Password" required>
                <div class="btn">
                    <input type="submit" value="Submit" name="submit" class="submit">
                </div>
            </form>
            <div class="login"><span>Already have an account ?<a href="login.php"> Login Now </a></span></div>
        </div>
    </div>

</body>
</html>