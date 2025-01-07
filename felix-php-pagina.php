<?php
session_start();


if (!isset($_SESSION['curGameCount'])) {
    $_SESSION['curGameCount'] = 0;
}

// Game content
$felix_mainContent = array(
    array(
        'game1' => 'Call of duty black ops',
        'game2' => 'Minecraft'
    ),
    array(
        'game1' => '⭐⭐⭐',
        'game2' => '⭐⭐⭐⭐'
    ),
    array(
        'game1' => "Black Ops is not just a linear game, but sometimes feels like it's on autopilot. Just one example is when you guide the takeoff of an SR-71 Blackbird. I tried to not pull back on the flight stick when the game told me to, just to see if there was any other alternative to taking off, but the Blackbird lifted off on its own.

The artificial intelligence of both your friendly soldiers and the enemies you face is pretty poor. Both friendly and enemy soldiers behave like fools for most of the campaign. I once watched a friendly shoot the back of an armored car that he was using for cover for a solid 20 seconds.

There are also a few design flaws and annoyances, not least of all was a game-ending bug in the first level that made me restart the entire mission. No one else in the office ran into that one, but everyone who'd played Black Ops has run into a major design issue at the Battle of Khe Sanh. The mission never tells you what to actually do and even misdirects you.",
        'game2' => "Minecraft stands out not only for the way it inspires me creatively, but also because of its unique aesthetic. Look, I know the visuals look dated and a bit silly, but few games have visuals so endearing and charming. I know I'm not the only one who feels that way either, or else Minecraft's graphics wouldn't be so iconic. Could you take a texture from Gears of War, Halo or Uncharted, put it on a shirt and have players identify it? I doubt it. The looks just work, giving the game a super unique appearance that's memorable, and brings up a bit of nostalgia in me for 8-bit era games."
    )
);

$felix_extraContent = array(
    array(
        'game1' => 2010,
        'game2' => 2009
    ),
    array(
        'game1' => true,
        'game2' => true
    ),
    array(
        'game1' => 'PC, PS3, Xbox360',
        'game2' => 'PC, console, mobile'
    ),
    array(
        'game1' => 'Shooter, action',
        'game2' => 'Sandbox, simulator'
    ),
    array(
        'game1' => 'img/game3_cover.png',
        'game2' => 'img/game4_cover.png'
    ),
    array(
        'game1' => 'img/pegi_18.png',
        'game2' => 'img/pegi_7.png'
    )
);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';
    $gameCount = count($felix_mainContent[0]);

    if ($action === 'next') {
        $_SESSION['curGameCount']++;
        if ($_SESSION['curGameCount'] >= $gameCount) {
            $_SESSION['curGameCount'] = 0; 
        }
    } elseif ($action === 'previous') {
        $_SESSION['curGameCount']--;
        if ($_SESSION['curGameCount'] < 0) {
            $_SESSION['curGameCount'] = $gameCount - 1;
        }
    }
}

$curGameCount = $_SESSION['curGameCount'];

$currentName = $felix_mainContent[0]['game1'];
$currentStars = $felix_mainContent[1]['game1'];
$currentDesc = $felix_mainContent[2]['game1'];
$currentRelease = $felix_extraContent[0]['game1'];
$currentPlatform = $felix_extraContent[2]['game1'];
$currentGenre = $felix_extraContent[3]['game1'];
$currentImg = $felix_extraContent[4]['game1'];
$currentMultiplayer = $felix_extraContent[1]['game1'];
$currentPegi = $felix_extraContent[5]['game1'];

if ($curGameCount == 1) {
    $currentName = $felix_mainContent[0]['game2'];
    $currentStars = $felix_mainContent[1]['game2'];
    $currentDesc = $felix_mainContent[2]['game2'];
    $currentRelease = $felix_extraContent[0]['game2'];
    $currentPlatform = $felix_extraContent[2]['game2'];
    $currentGenre = $felix_extraContent[3]['game2'];
    $currentImg = $felix_extraContent[4]['game2'];
    $currentPegi = $felix_extraContent[5]['game2'];
}

?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Game stars - games 3 / 4 </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Gamestars reviews - Home">
        <meta name="keywords" content="games, game, review, home, game reviews, reviews">
        <meta name="author" content="Felix Nieuwenhuijsen">
        <link rel="icon" href="" type="image/x-icon">
        <link rel="stylesheet" href="style/index-style.css">
    </head>
    <body>
        <header>
            <a id="logo"><img src="img/logo.png" alt="Logo"></a>
            <nav class="navigatie">
                <a href="index.html">Home</a>
                <a href="games_pagina.html">Games</a>
                <a href="merch-pagina.html">Merch</a>
                <a href="contact-pagina.html">Contact</a>
                <nav id="accountButtons">
                    <a><img src="img/winkelwagen_icon.png" alt="Cart"></a>
                    <a><img src="img/account_icon.png" alt="Account"></a>
                </nav>
            </nav>
        </header>

        <main style="padding-bottom: 12vh;">
            <img id="felixJSgameImg" src="<?php echo $currentImg; ?>" alt="Game Image">
            <article class="reviewContentHolder">
                <h1 id="felixJSgameName"><?php echo $currentName; ?></h1>
                <h2 id="felixJSgameStars"><?php echo $currentStars; ?></h2>
                <p id="felixJSgameDesc"><?php echo $currentDesc; ?></p>
                <article>
                    <h2>Jaar uitgebracht: <span id="felix_js_releaseYear"><?php echo $currentRelease ?></span></h2>
                    <h2>Multiplayer: <span id="felix_js_multiplayer"><?php if($currentMultiplayer == true){echo 'Ja';}else{echo 'nee';} ?></span></h2>
                    <h2>Platform: <span id="felix_js_platform"><?php echo $currentPlatform; ?></span></h2>
                    <h2>Genre: <span id="felix_js_genre"><?php echo $currentGenre; ?></span></h2>
                    <img id="felix_js_pegi" class="pegiRating" src="<?php echo $currentPegi; ?>">
                </article>
            </article>
            <form method="post" class="navigationButtons" id="php_button_holder_felix">
                <button type="submit" name="action" value="previous">Vorige game</button>
                <button type="submit" name="action" value="next">Volgende game</button>
            </form>
        </main>

        <footer>
            <nav class="navigatie">
                <a><img id="bottomLogo" src="img/klein_logo.png" alt="Bottom Logo"></a>
                <a href="index.html">Home</a>
                <a href="games_pagina.html">Games</a>
                <a href="merch-pagina.html">Merch</a>
                <a href="contact-pagina.html">Contact</a>
                <nav id="socialMediaNav">
                    <a><img src="img/instagram_button.png" alt="Instagram"></a>
                    <a><img src="img/facebook_button.png" alt="Facebook"></a>
                    <a><img src="img/twitter_button.png" alt="Twitter"></a>
                </nav>
            </nav>
        </footer>
    </body>
</html>
