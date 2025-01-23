<?php
// Check of de game-index in de URL staat (bijv. via een formulier met GET of POST)
$currentGameIndex = isset($_GET['game']) ? (int) $_GET['game'] : 0;

// Array met game-info
$games = [
    [
        'pegiRating' => 'img/pegi_18.png',
        'title' => 'The witcher 3:<br> Wild Hunt',
        'description' => '<br>The Witcher 3 is een epische RPG met een meeslepend verhaal, levendige wereld en sterke personages. De keuzes beïnvloeden de wereld, en het gevechtssysteem is uitdagend. Prachtige graphics en sfeervolle muziek maken het compleet. Een absolute must-play voor liefhebbers van avontuur en diepe verhalen!',
        'releaseDate' => '<br>uitgebracht door CD projekt RED Games op 19 mei 2015',
        'multiplayer' => 'Deze game ondersteunt geen multiplayer',
        'platforms' => 'Playstation, Windows, Xbox, nitendo switch',
        'genre' => 'RPG, hack and slash',
        'rating' => '⭐⭐⭐',
        'image' => 'img/theWitcher3/witcher_cover.jpg',
        'extraImages' => ['img/theWitcher3/witcher_extra.jpg', 'img/theWitcher3/witcher_extra_2.jpg', 'img/theWitcher3/witcher_extra_3.jpg'],
        'nextGameIndex' => 1
    ],
    [   
        'pegiRating' => 'img/pegi_16.png',
        'title' => 'Elden ring',
        'description' => '<br>Elden Ring biedt een gigantische, mysterieuze wereld vol gevaren en geheimen. Het uitdagende vechtsysteem en de epische baasgevechten zorgen voor spanning. De prachtige omgevingen en duistere lore maken het meeslepend. Met strategische gameplay en eindeloze ontdekking is dit een meesterwerk voor RPG-liefhebbers. Een avontuur om nooit te vergeten!',
        'releaseDate' => '<br>Uitgebracht door Bandai Namco Entertainment op 25 februari 2022',
        'multiplayer' => 'Deze game ondersteunt multiplayer',
        'platforms' => 'Windows, PlayStation, Xbox',
        'genre' => 'Action role-playing',
        'rating' => '⭐⭐⭐⭐⭐',
        'image' => 'img/elden_cover.jpg',
        'extraImages' => ['img/eldenRing/elden_ring_extra.jpg', 'img/eldenRing/elden_ring_extra_2.jpg', 'img/eldenRing/elden_ring_extra_3.jpg'],
        'nextGameIndex' => 0
    ]
];

// Game selecteren
$game = $games[$currentGameIndex];
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Game stars - Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Gamestars reviews - Home">
    <meta name="keywords" content="games, game, review, home, game reviews, reviews">
    <meta name="author" content="Felix Nieuwenhuijsen">
    <link rel="icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
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

    <main>
        <section class="reviewContent">
            <article class="riviewImage">
                <img id="gameImage" src="<?= $game['image']; ?>">
            </article>

            <article class="extraImages">
                <?php foreach ($game['extraImages'] as $image): ?>
                    <img src="<?= $image; ?>" width="150px">
                <?php endforeach; ?>
            </article>

            <article>
                <img src="<?= $game['pegiRating']; ?>" class="pegiRating">
            </article>

            <article class="riviewText">
                <h1><?= $game['title']; ?></h1>
                <p><?= $game['description']; ?></p>
                <p><?= $game['releaseDate']; ?></p>
                <p><?= $game['multiplayer']; ?></p>
                <p>Platforms: <?= $game['platforms']; ?></p>
                <p>Genre: <?= $game['genre']; ?></p>
                <p><?= $game['rating']; ?></p>
            </article>

            <article class="gameButton">
                <h4>Vergelijkbare game:</h4>
                <form method="GET">
                    <input type="hidden" name="game" value="<?= $game['nextGameIndex']; ?>">
                    <button type="submit">
                        <img src="<?= $games[$game['nextGameIndex']]['image']; ?>" class="lastImg">
                    </button>
                </form>
            </article>
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
