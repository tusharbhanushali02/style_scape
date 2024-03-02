<?php

    session_start();

    include 'db.php';

    $email = $_SESSION['user_email'];

    if(isset($_POST['submit'])){

        $email_query = "SELECT * FROM user_prefs WHERE email='$email'";
        $result = mysqli_query($conn, $email_query);

        $q1 = $_POST['age'];
        $q2 = $_POST['gender'];
        $q3 = $_POST['q3'];
        $q4 = $_POST['q4'];
        $q5 = $_POST['q5'];
        $q6 = $_POST['q6'];
        $q7 = $_POST['q7'];
        $q8 = $_POST['q8'];
        $q9 = $_POST['q9'];
        $q10 = $_POST['q10'];

        if(mysqli_num_rows($result) > 0){
            $sql = "UPDATE `user_prefs` SET `What is your Age ?`='$q1',`Select your Gender`='$q2',`How do you dress for work ?`='$q3',`How about on the weekend ?`='$q4',`Would you like to receive more work or weekend attire ?`='$q5',`What size of tops do you wear ?`='$q6',`How do you like your shirts to fit ?`='$q7',`What is your pants size ?`='$q8',`How do you like your pants to fit ?`='$q9',`What is your shoe size ?`='$q10' WHERE `email` = '$email'";
        } else {
            $sql = "INSERT INTO `user_prefs` (`email`, `What is your Age ?`, `Select your Gender`, `How do you dress for work ?`, `How about on the weekend ?`, `Would you like to receive more work or weekend attire ?`, `What size of tops do you wear ?`, `How do you like your shirts to fit ?`, `What is your pants size ?`, `How do you like your pants to fit ?`, `What is your shoe size ?`)
            VALUES ('$email','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10')";
        }

        // execute the SQL statement
        if (mysqli_query($conn, $sql)) {
            header("Location: dashboard.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }


    } else {
        header("Location: index.html");
    }

?>