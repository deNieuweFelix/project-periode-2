<?php 
    session_start();
    if(!isset($_SESSION["amountReviews"])){
        $_SESSION["amountReviews"] = 21;
    }
    if(!isset($_SESSION["currentReview"])){
        $_SESSION["currentReview"] = 4;
    }

    if (isset($_GET["submit"])) {
        if($_GET["starRadio"] == "reset"){
            session_unset();
        }
        $starValue = isset($_GET["starRadio"]) && is_numeric($_GET["starRadio"]) ? (int)$_GET["starRadio"] : 0;
    
        if ($starValue >= 1 && $starValue <= 5) {
            $totalStars = $_SESSION["amountReviews"] * $_SESSION["currentReview"];
            $totalStars += $starValue;
            $_SESSION["amountReviews"]++;
            $_SESSION["currentReview"] = $totalStars / $_SESSION["amountReviews"];
        }
        header("Location: felix-review-4.php");
        exit;
    }
    ?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Game stars - games 1 / 2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Gamestars reviews - Home">
        <meta name="keywords" content="games, game, review, home, game reviews, reviews">
        <meta name="author" content="Felix Nieuwenhuijsen">
        <link rel="icon" href="" type="image/x-icon">
        <link rel="stylesheet" href="style/index-style.css">
        <script src="lib/javascript-felix-4.js" defer></script>
    </head>
    <body>
        <!-- javascript pagiba -->
        <header>
            <a id="logo"><img src="img/logo.png"></a>
            <nav class="navigatie">
                <a href="index.html">Home</a>
                <a href="games_pagina.html">Games</a>
                <a href="merch-pagina.html">Merch</a>
                <a href="contact-pagina.html">Contact</a>
                <nav id="accountButtons">
                    <a><img src="img/winkelwagen_icon.png"></a>
                    <a><img src="img/account_icon.png"></a>
                </nav>
            </nav>

        </header>
        <?php
            // if (isset($_GET["submit"])) {
            //     $starValue = isset($_GET["starRadio"]) && is_numeric($_GET["starRadio"]) ? (int)$_GET["starRadio"] : 0;
            
            //     if ($starValue >= 1 && $starValue <= 5) {
            //         $totalStars = $_SESSION["amountReviews"] * $_SESSION["currentReview"];
            //         $totalStars += $starValue;
            //         $_SESSION["amountReviews"]++;
            
            //         $_SESSION["currentReview"] = $newStars = $totalStars / $_SESSION["amountReviews"];
            //         $_SESSION["currentReview"] = $newStars;
            
            //         echo number_format($newStars, 2);

            //         $curStarsToDisplay = round($newStars);
            //     } else {
            //         echo "Invalid star value.";
            //     }

            //     header("Location: felix-review-4.php");
            //     exit;
            // }
            
            ?>
        <main class="reviewContent" id="felixReview4Main">
            <section id="reviewSection">
            <a onclick="expandHelp()" id="helpTextButton" title="open informatie">⍰</a>
            <section id="helpTextContainer">
                <article id="helpText">
                    <p>Klik op een knop om sterren te geven (1 - 5)</p>
                    <p>Voeg eventueel een Beschrijving toe</p>
                    <p>Om te posten, druk je op de [>] knop</p>
                </article>
            </section>
            <form id="felixJS4Form" method="GET" action="felix-review-4.php">
                <h1>Spyro 1</h1>
                <label for="1">1</label>
                <input id="1" name="starRadio" type="radio" value="1" onclick="changeStarsDisplay(1)">
                <label for="2">2</label>
                <input id="2" name="starRadio" type="radio" value="2" onclick="changeStarsDisplay(2)">
                <label for="3">3</label>
                <input id="3" name="starRadio" type="radio" value="3" onclick="changeStarsDisplay(3)">
                <label for="4">4</label>
                <input id="4" name="starRadio" type="radio" value="4" onclick="changeStarsDisplay(4)">
                <label for="5">5</label>
                <input id="5" name="starRadio" type="radio" value="5" onclick="changeStarsDisplay(5)">
                <textarea id="reviewDescription" maxlength="200" name="reviewDescription"></textarea>
                <input type="submit" value=">" name="submit" id="reviewSubmit">
                <input type="radio" value="reset" name="starRadio" id="resetButton">
            </form>
            <section id="totalStarsDisplay">
                <h1 id="starsDisplay">☆☆☆☆☆</h1>
            </section>
            <section id="reviewStats">
                <p>Huide beoordeling: <?php echo number_format($_SESSION["currentReview"], 2) ?>⭐</p>
                <p>Huidige reviews: <?php echo $_SESSION["amountReviews"] ?>👥</p>
            </section>
            </section>
            <section id="gameInfoHolder">
                <img id="slideShowImg">
            </section>
        </main>
        <footer>
            <nav class="navigatie">
                <a><img id="bottomLogo" src="img/klein_logo.png"></a>
                <a href="index.html">Home</a>
                <a href="games_pagina.html">Games</a>
                <a href="merch-pagina.html">Merch</a>
                <a href="contact-pagina.html">Contact</a>
                <nav id="socialMediaNav">
                    <a><img src="img/instagram_button.png"></a>
                    <a><img src="img/facebook_button.png"></a>
                    <a><img src="img/twitter_button.png"></a>
                </nav>
            </nav>
        </footer>
    </body>
</html>