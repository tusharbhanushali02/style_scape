<?php

    session_start();

    if(!(isset($_SESSION['user_email'])) && (isset($_GET['plan']))){
        header("Location: register.php");
    }

    include 'db.php';

    $email = $_SESSION['user_email'];
    $plan_name = $_GET['plan'];
    $currentDate = new DateTime();
    $currentDate = $currentDate->format('d-m-Y');
    $price = $_GET['price'];
    $days = '30';   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buying Plan</title>
    <link rel="stylesheet" href="./css/root.css">
</head>
<style>

.search-box {
    border: 1px solid var(--secondary-color);
    border-radius: 8px;
    display: block;
    font-weight: 500;
    font-size: 16px;
    color: var(--secondary-color);
    position: relative;
    padding: 8px 10px 8px 16px;
    white-space: nowrap;
    overflow: hidden;
    text-transform: capitalize;
    width: 100%;
    height: 45px;
    border: 1px solid #333;
    outline: none;
    box-shadow: var(--box-shadow);
}

.search-box::placeholder {
    color: var(--secondary-color);
    opacity: 0.6;
}

body{
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

#main{
    display: flex;
    justify-content: center;
    align-items: start;
    padding: 4rem;
    border: 1px solid #333;
    flex-direction: column;
    gap: 1.2rem;
}

.buy{
    color: #fff;
    background: #D29C19;
    padding: 0.8rem 2rem;
    border-radius: 4px;
    border: 1px solid #D29C19;
    transition: all 0.2s linear;
    font-weight: 600;
}

.buy:hover{
    color: #D29C19;
    background: transparent;
}

</style>
<body>
    
    <section id="main">
        <h2>Plan Details</h2>
        <p>User Email : <?php echo $email; ?></p>
        <p>Plan Name : <?php echo $plan_name; ?></p>
        <p>Payment Date : <?php echo $currentDate; ?></p>
        <p>Plan Price: <?php echo $price; ?></p>
        <div class="dropdown">
            <input type="text" id="searchMonths" name="days" class="search-box" placeholder="Select Months" list="monthOptions">
            <datalist id="monthOptions">
                <option value="30">1 Month</option>
                <option value="90">3 Month</option>
                <option value="180">6 Month</option>
                <option value="360">12 Month</option>
            </datalist>
        </div>
        <form action="" method="post" onsubmit="setDays()">
            <input type="hidden" id="days" name="days" value="">
            <input type="submit" name="submit" value="Buy" class="buy">
        </form>
    </section>

    <?php
    
        if (isset($_POST['submit'])) {

            $days = $_POST['days'];

            include 'db.php';

            $sql = "INSERT INTO `sub_histroy`(`email`, `payment_date`, `plan`, `days`, `status`)
            VALUES ('$email','$currentDate','$plan_name','$days','Active')";

            // execute the SQL statement
            if (mysqli_query($conn, $sql)) {
                header("Location: dashboard.php");
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

        } 
    
    ?>

    <script>
        function setDays() {
            document.getElementById('days').value = document.getElementById('searchMonths').value;
        }
    </script>

</body>
</html>