<?php
// User age variable (can be easily changed)
$userAge = 16;

// Game selection variable (can be changed directly in code)
$selectedGameIndex = 1; // 0 for FIFA 23, change if you want other games

// Array met game-info
$games = [
    [
        'pegiRating' => 'img/pegi_16.png',
        'pegiAgeRating' => 16,
        'title' => 'FIFA 23',
        'description' => 'FIFA 23 biedt de ultieme voetbalervaring met realistische graphics en gameplay.',
        'releaseDate' => 'uitgebracht door EA Sports op 30 september 2022',
        'multiplayer' => 'Deze game ondersteunt multiplayer',
        'platforms' => 'Playstation, Windows, Xbox, macOS',
        'genre' => 'Sport, Simulatie',
        'rating' => 4, // Gemiddelde rating, kan worden aangepast
        'reviews' => [], // Array om reviews op te slaan
        'image' =>  ['img/fifa/fifa_extra_4.jpg', 'img/fifa/fifa_extra_3.jpg', 'img/fifa/fifa_extra_2.jpg', 'img/fifa/fifa_extra_1.jpg', 'img/fifa/fifa_extra.jpg'],
        'nextGameIndex' => 0
    ],
];


$currentGameIndex = isset($_GET['game']) ? (int) $_GET['game'] : $selectedGameIndex;


function canViewGame($userAge, $pegiRating) {
    return $userAge >= $pegiRating;
}


if (!canViewGame($userAge, $games[$currentGameIndex]['pegiAgeRating'])) {
    die("Sorry, je bent niet oud genoeg om deze game te bekijken. Minimale leeftijd is {$games[$currentGameIndex]['pegiAgeRating']} jaar.");
}

// Game selecteren
$game = $games[$currentGameIndex];

// Verwerken van het formulier als het is ingediend
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verzamel de formuliergegevens
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $description = isset($_POST['description']) ? htmlspecialchars($_POST['description']) : '';
    $rating = isset($_POST['rating']) ? (int) $_POST['rating'] : 0;

    // Voeg de review toe aan de lijst van reviews
    if ($name && $description && $rating > 0) {
        $game['reviews'][] = [
            'name' => $name,
            'description' => $description,
            'rating' => $rating
        ];

        // Gemiddelde rating berekenen
        $totalRating = 0;
        foreach ($game['reviews'] as $review) {
            $totalRating += $review['rating'];
        }
        $averageRating = $totalRating / count($game['reviews']);
        $game['rating'] = round($averageRating, 1); // Gemiddelde rating met één decimaal
    }
}

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
    <style>
        input, textarea {
            color: black;
            background-color: #f0f0f0;
        }
        
    </style>
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
        <article>
            <img src="<?= $game['pegiRating']; ?>" class="pegiRating">
        </article>

        <article class="reviewImage">
            <img id="slideshowImage" src="<?= $game['image']; ?>" width="400" height="220">
        </article>

        <article class="reviewText">
            <h1><?= $game['title']; ?></h1>
            <p><?= $game['description']; ?></p>
            <p><?= $game['releaseDate']; ?></p>
            <p><?= $game['multiplayer']; ?></p>
            <p>Platforms: <?= $game['platforms']; ?></p>
            <p>Genre: <?= $game['genre']; ?></p>

            <!-- Rating display -->
            <p>Gemiddelde Beoordeling: <?= str_repeat("⭐", $game['rating']); ?></p>

            <!-- Formulier voor het indienen van een review -->
            <h2>Plaats een review:</h2>
            <form method="post" action="">
                <label for="name">Naam:</label><br>
                <input type="text" id="name" name="name" required><br><br>

                <label for="description">Beschrijving:</label><br>
                <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

                <label for="rating">Geef een beoordeling (1-5):</label><br>
                <?php
                // Toon de radio buttons van 1 tot 5
                for ($i = 1; $i <= 5; $i++) {
                    echo "<input type='radio' id='star$i' name='rating' value='$i' required>";
                    echo "<label for='star$i'>⭐</label>";
                }
                ?>
                <br><br>
                <input type="submit" value="Plaats Review">
            </form>

            <!-- Weergeef de reviews -->
            <h3>Recensies:</h3>
            <?php if (!empty($game['reviews'])): ?>
                <ul>
                    <?php foreach ($game['reviews'] as $review): ?>
                        <li>
                            <strong><?= htmlspecialchars($review['name']); ?></strong> (Beoordeling: <?= str_repeat("⭐", $review['rating']); ?>)<br>
                            <?= nl2br(htmlspecialchars($review['description'])); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>Er zijn nog geen recensies voor deze game.</p>
            <?php endif; ?>
        </article>
        <script>
    const images = <?= json_encode($game['image']); ?>; // This will correctly parse the array into JavaScript
    
    let currentIndex = 0;

    function updateImage() {
        const imageElement = document.getElementById('slideshowImage');
        imageElement.src = images[currentIndex]; // Update the src to show the current image
    }

    function nextImage() {
        currentIndex = (currentIndex + 1) % images.length; // Loop back to the first image once the last image is reached
        updateImage();
    }

    // Initialize the first image correctly
    window.onload = function() {
        updateImage(); // Ensures the first image shows up right away
        setInterval(nextImage, 5000); // Change image every 5 seconds
    };
</script>

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
