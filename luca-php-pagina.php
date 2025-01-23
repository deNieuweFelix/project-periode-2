<?php

$games = [
    'old' => [
        'image' => 'game6_cover.png',
        'pegi_rating' => 'pegi_7.png',
        'title' => 'Little big planet 3',
        'description' => "De game zet de traditie voort van de serie waarin spelers puzzels oplossen, platformen en creatieve levels bouwen. Je speelt als Sackboy, maar deze keer worden er nieuwe personages geïntroduceerd: Oddsock, Toggle en Swoop, elk met unieke vaardigheden zoals snelheid, kracht en vliegen. Deze vaardigheden maken het mogelijk om complexe puzzels op te lossen en zorgen voor meer variatie in de gameplay.",
        'release_date' => "uitgebracht door Sony Computer Entertainment in november 2014",
        'platforms' => "Playstation",
        'genre' => "Puzzle-platform, sandbox",
        'rating' => "⭐⭐⭐⭐⭐"
    ],
    'new' => [
        'image' => 'game10_cover.png',
        'pegi_rating' => 'pegi_18.png',
        'title' => 'Battlefield 4',
        'description' => "Battlefield 4 speelt zich af in een moderne oorlogssetting en biedt zowel een singleplayercampagne als uitgebreide multiplayermodi. De game staat bekend om zijn grootschalige gevechten, voertuigen zoals tanks en helikopters, en het gebruik van destructieve omgevingen via de \"Levolution\"-feature, waarbij gebouwen en landschappen in realtime instorten.",
        'release_date' => "Uitgebracht door Electronic Arts in oktober-november 2013",
        'platforms' => "Playstation 3, Playstation 4, Windows, Xbox 360, Xbox one",
        'genre' => "First-person shooter",
        'rating' => "⭐⭐⭐⭐"
    ]
];


$current_game = isset($_GET['game']) ? $_GET['game'] : 'old';


$image_path = $games[$current_game]['image'];
$pegi_rating = $games[$current_game]['pegi_rating'];
$game_title = $games[$current_game]['title'];
$description = $games[$current_game]['description'];
$release_date = $games[$current_game]['release_date'];
$platforms = $games[$current_game]['platforms'];
$genre = $games[$current_game]['genre'];
$rating = $games[$current_game]['rating'];


?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game stars - games 7 / 8</title>
    <meta name="description" content="Gamestars reviews - Home">
    <meta name="keywords" content="games, game, review, home, game reviews, reviews, little big planet, battlefield">
    <meta name="author" content="Luca de valk">
    <link rel="icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header>
        <a id="logo"><img src="img/logo.png"></a>
        <nav class="navigatie">
            <a href="index.php?game=old">Home</a>
            <a href="games_pagina.html">Games</a>
            <a href="merch-pagina.html">Merch</a>
            <a href="contact-pagina.html">Contact</a>
            <nav id="accountButtons">
                <a><img src="img/winkelwagen_icon.png"></a>
                <a><img src="img/account_icon.png"></a>
            </nav>
        </nav>
    </header>
    <main>
        <section class="reviewContent">
            <article class="riviewImage">
                <img id="gameImage" src="img/<?php echo $image_path; ?>">
            </article>

            <article>
                <img src="img/<?php echo $pegi_rating; ?>" class="pegiRating">
            </article>

            <article class="riviewText">
                <h1 id="gameTitle"><?php echo $game_title; ?></h1>
                <br>
                <p><?php echo $description; ?></p>
                <br>
                <p><?php echo $release_date; ?></p>
                <p>Deze game ondersteunt multiplayer</p>
                <p><?php echo $platforms; ?></p>
                <p><?php echo $genre; ?></p>
                <p><?php echo $rating; ?></p>
            </article>

            <article class="gameButton">
                <h4>Andere games: </h4>
                <form action="luca-php-pagina.php" method="get">
                    <input type="hidden" name="game" value="<?php echo $current_game === 'old' ? 'new' : 'old'; ?>">
                    <button type="submit">Toggle Content</button>
                </form>
            </article>
        </section>
    </main>
    <footer>
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
