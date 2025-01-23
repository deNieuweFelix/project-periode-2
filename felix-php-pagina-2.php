<?php
$games = [
    [
        "titel" => "Balatro",
        "sterren" => 5,
        "beschrijving" => "There are some games that keep you entertained for a weekend. Some keep you busy for an hour on a weeknight after failing to settle on what new Netflix documentary to watch next. But then, every so often, a game like Balatro turns up and takes hold of your entire life – to the point where you open up your wardrobe and the only four suits your eyes can make out are clubs, spades, diamonds, and hearts. This poker-influenced roguelike may appear straightforward at first, but take the risk of picking it up, and its ludicrously fun gameplay loop won’t let you put it down. Never has the power of placing down a simple pair of kings garnered more delight than in Balatro, where it can suddenly conjure up an 82 x 146 multiplier as you watch the resulting equation satisfyingly solve itself in front of you. A deck-building roguelike quite like no other, it sacrifices the combat that has made so many in the genre such as Slay the Spire popular, and doesn’t even attempt a story that the likes of Hades told so well. Instead, Balatro relies solely on the power of playing cards to keep you engaged, and it does so with aplomb, gripping my attention tight with its relatively simple but effective toolset.",
        "jaar" => 1234,
        "multiplayer" => "Placeholder",
        "platform" => "PC, Xbox, Playstation",
        "genre" => "Roguelike",
        "afbeelding" => "game7_cover.png",
        "pegi" => "pegi_3.png",
        "screenshots" => [
            "balatro_screenshot_1.jpg",
            "balatro_screenshot_2.jpg",
            "balatro_screenshot_3.jpg",
        ]
    ],
    [
        "titel" => "Metal Gear Solid 2",
        "sterren" => 4,
        "beschrijving" =>"Metal Gear Solid, generally acclaimed as the best game on the PlayStation, was also criticized by many around the time of its release. Evidently, the game was too short. It's three hours long, complained its detractors. Some critics described it as the ultimate rental. I thought this was pretty funny at the time, because it was quite clear that those who made these complaints had neatly missed at least half of the point. Those complaints will arise again, I'm sure, since it's become rather fashionable to decry most PS2 adventure games as lacking in length, and again, the point will be missed by some distance. Metal Gear Solid 2: Sons of Liberty is a synthesis of cinematics and game. It's not just a movie, to be watched once and put up on the shelf to gather dust. It's a game, a toy, and a brilliantly-designed one at that, one you can find ways to play with for hours and hours.",
        "jaar" => 5678,
        "multiplayer" => "Nee",
        "platform" => "Playstation 1",
        "genre" => "Adventure, Shooter",
        "afbeelding" => "game8_cover.png",
        "pegi" => "pegi_18.png",
        "screenshots" => [
            "mgs2_screenshot_1.jpg",
            "mgs2_screenshot_2.png",
            "mgs2_screenshot_3.jpg",
        ]
    ]
];

$currentGame = 1;
$game = $games[$currentGame];

function renderStars($count) {
    return str_repeat("⭐", $count);
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
    <meta name="keywords" content="games, game, review, game reviews, reviews">
    <link rel="stylesheet"href="style/index-style.css" type="text/css">
    <meta name="author" content="Felix Nieuwenhuijsen">
    <link rel="icon" href="" type="image/x-icon">
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
<main class="reviewContent">
    <img id="felixJSgameImg" src="img/<?= $game['afbeelding'] ?>" style="width: 20vw;">
    <article class="reviewContentHolder">
        <h1 id="felixJSgameName"> <?= $game['titel'] ?> </h1>
        <h2 id="felixJSgameStars"> <?= renderStars($game['sterren']) ?> </h2>
        <p id="felixJSgameDesc"> <?= $game['beschrijving'] ?> </p>

        <article>
            <h2>Jaar uitgebracht: <span id="felix_js_releaseYear"> <?= $game['jaar'] ?> </span></h2>
            <h2>Multiplayer: <span id="felix_js_multiplayer"> <?= $game['multiplayer'] ?> </span></h2>
            <h2>Platform: <span id="felix_js_platform"> <?= $game['platform'] ?> </span></h2>
            <h2>Genre: <span id="felix_js_genre"> <?= $game['genre'] ?> </span></h2>
            <img id="felix_js_pegi" src="img/<?= $game['pegi'] ?>">
        </article>
    </article>
    <article id="afbeeldingHolder">
        <h2>Screenshots:</h2>
        <img class="selectedScreenshot" id="selectedScreenshot" src="img/<?= $game['screenshots'][0] ?>">
        <div class="idleScreenshotHolder">
            <?php foreach ($game['screenshots'] as $index => $screenshot): ?>
                <img class="idleScreenshot" id="screenShot<?= $index + 1 ?>" onclick="document.getElementById('selectedScreenshot').src='img/<?= $screenshot ?>'" src="img/<?= $screenshot ?>">
            <?php endforeach; ?>
        </div>
    </article>
    <section class="navigationButtons">
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
