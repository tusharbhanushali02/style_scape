<?php

    session_start();

    if(!(isset($_SESSION['user_email']))){
        header("Location: register.php");
    }

    include 'db.php';

    // Get user's email from session
    $user_email = $_SESSION['user_email'];

    // Check if user's email exists in the authorized users table
    $sql = "SELECT * FROM user_prefs WHERE email='$user_email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) <= 0) {
        header("Location: quiz.php");
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