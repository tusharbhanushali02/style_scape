<?php

    session_start();

    if(!(isset($_SESSION['user_email']))){
        header("Location: register.php");
    }

    include 'db.php';
    include 'daysleft.php';

    // Get user's email from session
    $user_email = $_SESSION['user_email'];

    // Check if user's email exists in the authorized users table
    $sql = "SELECT * FROM user_prefs WHERE email='$user_email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) <= 0) {
        header("Location: quiz.php");
    }

    // Check if user has subscribed or not
    $sub = "SELECT * FROM sub_histroy WHERE email='$user_email' ORDER BY id DESC LIMIT 1";
    $subresult = mysqli_query($conn, $sub);

    if (mysqli_num_rows($subresult) > 0) {

        $latestSubscription = mysqli_fetch_assoc($subresult);

        $paymentDate = strtotime($latestSubscription['payment_date']);
        $subscriptionDays = $latestSubscription['days'];
        $plan = $latestSubscription['plan'];
        $daysLeft = getDaysLeft($paymentDate, $subscriptionDays);

    }
    else{

        $daysLeft = -1;
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="./css/root.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/dashboard.css">
</head>
<body>

    <nav>
        <div class="bar">
            <div class="logo" id="logo"><img src="./Assets/stylescape_logo.png"></div>
            <a href="logout.php" class="primary-btn">Logout</a>
        </div>
    </nav>

    <section id="dashboard">

        <?php
    
            if($daysLeft <= 0){
                echo "<div class='error'>User has no Active Plan</div>";
            }
            else {

                // Get User Details
                $user_query = "SELECT * FROM users WHERE email='$user_email' LIMIT 1";
                $userresult = mysqli_query($conn, $user_query);

                if (mysqli_num_rows($userresult) > 0) {

                    $user = mysqli_fetch_assoc($userresult);
                    $fullname = $user['fullname'];

                }            

        ?>

        <div id="active">
            
            <div class="welcome">
                <div class="lh">
                    <h2>Welcome back <?php echo $fullname; ?></h2>
                </div>
                <div class="rh">
                    <img src="./Assets/dashboard.png" alt="dashboard">
                </div>
            </div>

            <div class="plan-status">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Days Left</h4>
                        <p class="card-text"><?php echo $daysLeft; ?> Days Left</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Plan Details</h4>
                        <p class="card-text"><?php echo $plan; ?></p>
                    </div>
                </div>
            </div>            

        </div>

        <?php } ?>

    </section>
    
    <section id="plans">
        <h2 class="title">PLANS & PRICING</h2>
        <div class="plans-info">
            <div class="plan">
                <h4>SHARP</h4>
                <h2>₹ 6,400</h2>
                <h3>PER PACKAGE</h3>
                <p>Includes a personally-curated
                    assortment of 3+ pieces
                    consisting of tops, bottoms,
                    footwear*, and accessories
                    from in-demand brands.</p>
                <a href="buyplan.php?plan=sharp&price=6400" class="buy">Buy Plan</a>
            </div>
            <div class="plan">
                <h4>LUXE</h4>
                <h2>₹ 8,800</h2>
                <h3>PER PACKAGE</h3>
                <p>Includes personally-curated
                    outfits of 5+ pieces consisting
                    of tops, bottoms, footwear*,
                    and accessories from
                    leading menswear brands.</p>
                <a href="buyplan.php?plan=luxe&price=8800" class="buy">Buy Plan</a>
            </div>
            <div class="plan">
                <h4>REGAL</h4>
                <h2>₹ 14,400</h2>
                <h3>PER PACKAGE</h3>
                <p>Includes personally-curated
                    outfits with 7+ items consisting of
                    premium footwear, tops,
                    bottoms & accessories from
                    top menswear brands.</p>
                <a href="buyplan.php?plan=regal&price=14000" class="buy">Buy Plan</a>
            </div>
        </div>
    </section>

    <script src="./Scripts/main.js"></script>

</body>
</html>
