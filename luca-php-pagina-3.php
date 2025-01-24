<?php
// User age variable (can be easily changed)
$userAge = 18;

// Game selection variable (can be changed directly in code)
$selectedGameIndex = 0; // 0 for Witcher 3, 1 for Elden Ring

// Array met game-info
$games = [
    [
        'pegiRating' => 'img/pegi_18.png',
        'pegiAgeRating' => 18,
        'title' => 'Cyberpunk <br> 2077',
        'description' => '<br>Cyberpunk 2077 biedt een duistere, futuristische wereld vol geweld, intriges en keuzes. Het verhaal volgt V, een huurling op zoek naar de sleutel tot onsterfelijkheid. De stad Night City is prachtig en gevaarlijk, vol leven, maar ook vol criminaliteit. Met diepgaande RPG-elementen en intensieve gevechten is het een must voor fans van open werelden en sci-fi.',
        'releaseDate' => '<br>uitgebracht door CD projekt op 10 December 2020',
        'multiplayer' => 'Deze game ondersteunt geen multiplayer',
        'platforms' => 'Playstation, Windows, Xbox, macOs',
        'genre' => 'Action role-playing',
        'rating' => '⭐⭐⭐',
        'buttonImage' => 'img/cyber_cover.jpg',
        'image' => 'https://www.youtube.com/embed/8X2kIfS6fb8',
        'extraImages' => ['img/cyber_extra.jpg', 'img/cyber_extra_2.jpg', 'img/cyber_extra_3.jpg'],
        'nextGameIndex' => 1
    ],
    [   
        'pegiRating' => 'img/pegi_16.png',
        'pegiAgeRating' => 16,
        'title' => 'Spider-Man: <br> Miles Morales',
        'description' => '<br>Spider-Man: Miles Morales is een fantastische superheldenervaring, met vlotte actie en een emotioneel verhaal. Je speelt als Miles, de jonge Spider-Man, die New York City moet beschermen. De gevechten zijn spannend en de grafische details zijn verbluffend. Het is een geweldige toevoeging voor fans van het Spider-Man-universum.',
        'releaseDate' => '<br>Uitgebracht door Sony Interactive Entertainment op 12 November 2020',
        'multiplayer' => 'Deze game ondersteunt geen multiplayer',
        'platforms' => 'Windows, PlayStation',
        'genre' => 'Action-adventure',
        'rating' => '⭐⭐⭐⭐⭐',
        'buttonImage' => 'img/spider_cover.jpg',
        'image' => 'https://www.youtube.com/embed/oZXyrAfuHOo',
        'extraImages' => ['img/spider_extra.jpg', 'img/spider_extra_2.jpg', 'img/spider_extra_3.jpg'],
        'nextGameIndex' => 0
    ]
];

// Check if game is selected via URL (overrides $selectedGameIndex)
$currentGameIndex = isset($_GET['game']) ? (int) $_GET['game'] : $selectedGameIndex;

// Check age verification
function canViewGame($userAge, $pegiRating) {
    return $userAge >= $pegiRating;
}

// Check if user can view the game
if (!canViewGame($userAge, $games[$currentGameIndex]['pegiAgeRating'])) {
    die("Sorry, je bent niet oud genoeg om deze game te bekijken. Minimale leeftijd is {$games[$currentGameIndex]['pegiAgeRating']} jaar.");
}

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
                <iframe width="550" height="330" src="<?= $game['image']; ?>" frameborder="0" allowfullscreen></iframe>
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
                        <img src="<?= $games[$game['nextGameIndex']]['buttonImage']; ?>" class="lastImg">
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