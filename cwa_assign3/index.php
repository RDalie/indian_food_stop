<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Meta information -->
        <meta charset="utf-8" />
        <meta name="description" content="Index" />
        <meta name="keywords" content="dinner, breakfast, lunch, Indian, food, meals"/>
        <meta name="author" content="Rabya Tayal" />

        <!-- Title -->
        <title>Index</title>

        <!-- Style Links -->
        <link rel="stylesheet" href="styles/style.css"/>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">

    </head>
    <body id="index">

    <!-- Include Menu -->
    <?php
        include_once 'menu.inc';
    ?>

        <header>
            <h1>The Indian Food Stop.</h1>
            <p class="btn-reviews">
                <a href="#miss-pussy">
                    Reviews
                </a>
            </p>

        </header>
        
        <section class="reviews" id="reviews">

            <!-- ATTENTION! REFERENCED FROM: https://unsplash.com/photos/nKC772R_qog -->
            <h2>What our customers are saying...</h2>
            <img id="pussy-img" src="images/Pussy.jpg" alt="Pussy"/>

            <p>
                "This is one of my favorite restaurants. I used to eat only fishes but after visiting the Indian Food Stop, I am in love with Indian food. Cheers to the restaurant staff! I love it here."
                
                <span id="miss-pussy">
                    - <a href="https://unsplash.com/photos/nKC772R_qog">1</a> Miss Pussy
                </span>
            </p>
        </section>

        <!-- Include Footer -->
        <?php
            include_once 'footer.inc';
        ?>
    </body>
</html>