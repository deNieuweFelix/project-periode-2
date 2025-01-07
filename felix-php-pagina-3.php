<?php
// Game data in PHP
$games = [
    [
        'titel' => 'Undertale',
        'sterren' => 5,
        'beschrijving' => "As a lone human fallen into an underground world that serves as a prison for monsters, I had my journey laid out for me, as most RPG protagonists do. For my first playthrough I took a pacifist approach, being as kind and merciful as possible as I searched for a way back to the surface. But I made a mistake: I accidentally killed a monster in the beginning. So I restarted without saving, as I would in any other game when I needed a do-over. Except… things were different this time. Dialogue had changed to reflect that I’d seen her die. Then Flowey, Undertale’s chaotic evil, fourth wall-breaking flower, tore into me for having the gall to abuse the power of the save state.",
        'jaar' => 2015,
        'multiplayer' => 'alleen singleplayer',
        'platform' => 'Console, PC',
        'genre' => 'Roleplaying game',
        'afbeelding' => 'undertale_game_cover.jpg',
        'pegi' => 'pegi_3.png',
        'video' => '../vid/undertale_review_vid.mp4',
        'screenshots' => [
            'undertale_screenshot_1.jpg',
            'undertale_screenshot_2.png',
            'undertale_screenshot_3.png',
        ],
    ],
    [
        'titel' => 'Plants vs. Zombies',
        'sterren' => 4,
        'beschrijving' => "You would be forgiven for saying you've had your fill of tower defense games. The past couple years has seen a flood of these strategy clones filling casual portals like the iPhone and PC. But you know who might be able to bring you back: the people that brought you Peggle. PopCap, one of the best casual developers and publishers around, has delivered Plants vs. Zombies, its first tower defense game. While it uses the basic mechanics of all efforts in this genre, it boasts charm, personality, and gobs of gameplay variety. The result is another addictive experience that will appeal to all walks of gamers.",
        'jaar' => 2009,
        'multiplayer' => 'alleen singleplayer',
        'platform' => 'PC, Mac, Mobile',
        'genre' => 'Tower defense',
        'afbeelding' => 'pvz_cover.jpg',
        'pegi' => 'pegi_7.png',
        'video' => '../vid/pvz_review_vid.mp4',
        'screenshots' => [
            'pvz_screenshot_1.jpg',
            'pvz_screenshot_2.jpg',
            'pvz_screenshot_3.jpg',
        ],
    ],
];

// Start with the first game
$currentGame = $games[0];
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
    <link rel="stylesheet" href="style/index-style.css">
    <script src="lib/javascript-felix-3.js" defer></script>
</head>
<body>
<header>
    <a id="logo"><img src="img/logo.png" alt="logo"></a>
    <nav class="navigatie">
        <a href="index.php">Home</a>
        <a href="games_pagina.php">Games</a>
        <a href="merch_pagina.php">Merch</a>
        <a href="contact_pagina.php">Contact</a>
        <nav id="accountButtons">
            <a><img src="img/winkelwagen_icon.png" alt="Winkelwagen"></a>
            <a><img src="img/account_icon.png" alt="Account"></a>
        </nav>
    </nav>
</header>
<main class="reviewContent">
    <section id="media">
        <img id="felixJSgameImg" src="img/<?php echo $currentGame['afbeelding']; ?>" style="width: 20vw;" alt="Game afbeelding">
        <video id="reviewVideo" src="<?php echo $currentGame['video']; ?>" type="video/mp4" autoplay controls muted></video>
    </section>
    <article class="reviewContentHolder">
        <h1 id="felixJSgameName"><?php echo $currentGame['titel']; ?></h1>
        <h2 id="felixJSgameStars"><?php echo str_repeat('⭐', $currentGame['sterren']); ?></h2>
        <p id="felixJSgameDesc"><?php echo $currentGame['beschrijving']; ?></p>

        <article>
            <h2>Jaar uitgebracht: <span id="felix_js_releaseYear"><?php echo $currentGame['jaar']; ?></span></h2>
            <h2>Multiplayer: <span id="felix_js_multiplayer"><?php echo $currentGame['multiplayer']; ?></span></h2>
            <h2>Platform: <span id="felix_js_platform"><?php echo $currentGame['platform']; ?></span></h2>
            <h2>Genre: <span id="felix_js_genre"><?php echo $currentGame['genre']; ?></span></h2>
            <img id="felix_js_pegi" src="img/<?php echo $currentGame['pegi']; ?>" alt="PEGI rating">
        </article>
    </article>
    <article id="afbeeldingHolder">
        <h2>Screenshots:</h2>
        <img class="selectedScreenshot" id="selectedScreenshot" src="img/<?php echo $currentGame['screenshots'][0]; ?>" alt="Selected Screenshot">
        <div class="idleScreenshotHolder">
            <?php foreach ($currentGame['screenshots'] as $index => $screenshot): ?>
                <img class="idleScreenshot" id="screenShot<?php echo $index; ?>" onclick="selectScreenshot(<?php echo $index; ?>)" src="img/<?php echo $screenshot; ?>" alt="Screenshot <?php echo $index; ?>">
            <?php endforeach; ?>
        </div>
    </article>
    <section class="navigationButtons">
        <button onclick="switchGame(true)">Vorige game</button>
        <button onclick="switchGame()">Volgende game</button>
    </section>
    <section id="leeftijdWaarschuwing">
        <h1>Je bent niet oud genoeg om deze inhoud te bekijken!</h1>
        <button onclick="redirectToHome()">ga terug</button>
    </section>
</main>
<footer>
    <nav class="navigatie">
        <a><img id="bottomLogo" src="img/klein_logo.png" alt="Klein logo"></a>
        <a href="index.php">Home</a>
        <a href="games_pagina.php">Games</a>
        <a href="merch_pagina.php">Merch</a>
        <a href="contact_pagina.php">Contact</a>
        <nav id="socialMediaNav">
            <a><img src="img/instagram_button.png" alt="Instagram"></a>
            <a><img src="img/facebook_button.png" alt="Facebook"></a>
            <a><img src="img/twitter_button.png" alt="Twitter"></a>
        </nav>
    </nav>
</footer>
</body>
</html>
