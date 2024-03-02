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
    <title>StyleScape</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/root.css">
</head>
<body>

    <nav>
        <div class="bar">
            <div class="logo" id="logo"><img src="./Assets/stylescape_logo.png"></div>
            <ul class="links">
                <li class="link"><a href="#main">Home</a></li>
                <li class="link"><a href="#how">How it Works ?</a></li>
                <li class="link"><a href="#plans">Plans & Pricing</a></li>
            </ul>
            <a href="register.php" class="primary-btn">Register</a>
        </div>
    </nav>

    <section id="main">
        <div class="left-main">
            <h2>Unleash your style potential with expertly curated looks</h2>
            <span>Celebrate your style journey with handpicked fashion, delivered monthly to your door. Discover the perfect pieces that express your individuality.</span>
            <a href="register.php" class="primary-btn">Get Started</a>
        </div>
        <div class="right-main">
            <img src="./Assets/home.png" alt="" class="homeimg">
        </div>
    </section>

    <section id="how">
        <h2>How StyleScape Works</h2>
        <div class="infos">
            <div class="info">
                <div class="first-half one">LET US GET TO KNOW YOU</div>
                <div class="second-half">Take a brief style quiz so that your stylist can learn your style, fit and preferences to curate the right outfits for you.</div>
            </div>
            <div class="info">
                <div class="first-half two">STYLIST-CURATED OUTFITS</div>
                <div class="second-half">Get personalized looks curated by real expert stylists (no AI or algorithms here!) using apparel from today's leading menswear brands and save over 50% off retail prices.</div>
            </div>
            <div class="info">
                <div class="first-half three">RECEIVE & TRY ON</div>
                <div class="second-half">There are no styling fees or hidden charges - the entire box is yours to keep for the price of your plan. Keep what works, exchange anything that doesn't. Shipping & exchanges are free!</div>
            </div>
        </div>
        <a href="register.php" class="primary-btn">Get Started</a>
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
            </div>
        </div>
        <a href="register.php" class="primary-btn">Get Started</a>
    </section>

    <script src="./Scripts/main.js"></script>

</body>
</html>