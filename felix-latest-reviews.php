<?php
//zet alle games in een array (associative en normaal)
$games = [
    [
        'titel' => 'Battlefront 2',
        'genre' => 'Shooter',
        'pegi' => 16,
        'beschrijving' => 'Een epische Star Wars-beleving met adembenemende gevechten.',
        'reviews' => [
            [
                'naam' => 'Pieter de Vries',
                'tekst' => 'Fantastische game, erg genoten!',
                'sterren' => 5
            ],
            [
                'naam' => 'Angela Merkel',
                'tekst' => 'Leuke game, maar soms wat repetitief.',
                'sterren' => 3
            ],
            [
                'naam' => 'Freddie Mercury',
                'tekst' => 'De actie is echt fenomenaal!',
                'sterren' => 4
            ]
        ],
        'link' => 'https://www.youtube.com/watch?v=_q51LZ2HpbE',
        'platform' => 'PC, PS, Xbox',
        'maker' => 'DICE',
        'embed' => '<iframe class="embedSlideFelixLatest" src="https://www.youtube.com/embed/_q51LZ2HpbE" title="Star Wars Battlefront II: Official Gameplay Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>'
    ],
    [
        'titel' => 'Metal Gear Solid 2',
        'genre' => 'Action Adventure',
        'pegi' => 18,
        'beschrijving' => 'Een meeslepende stealth-ervaring met een diepgaand verhaal.',
        'reviews' => [
            [
                'naam' => 'Jan Jansen',
                'tekst' => 'Dit is een meesterwerk!',
                'sterren' => 5
            ],
            [
                'naam' => 'Theresa May',
                'tekst' => 'Een beetje lastig te volgen, maar wel goed.',
                'sterren' => 3
            ],
            [
                'naam' => 'David Bowie',
                'tekst' => 'Ik voelde me een echte spion!',
                'sterren' => 4
            ]
        ],
        'link' => 'https://www.youtube.com/watch?v=cq6L1HV5gz4',
        'platform' => 'PC, PS, Xbox',
        'maker' => 'Konami',
        'embed' => '<iframe class="embedSlideFelixLatest" src="https://www.youtube.com/embed/cq6L1HV5gz4" title="Metal Gear Solid 2 Sons of Liberty - E3 2000 Trailer - PS2" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>'
    ],
    [
        'titel' => 'GTA 5',
        'genre' => 'Action Adventure',
        'pegi' => 18,
        'beschrijving' => 'Een gigantische open wereld vol mogelijkheden en chaos.',
        'reviews' => [
            [
                'naam' => 'Lisa de Boer',
                'tekst' => 'Het is gewoon legendarisch!',
                'sterren' => 5
            ],
            [
                'naam' => 'Jan Bert',
                'tekst' => 'Soms een beetje over de top, maar leuk.',
                'sterren' => 4
            ],
            [
                'naam' => 'Prince',
                'tekst' => 'Een unieke ervaring, echt geweldig!',
                'sterren' => 5
            ]
        ],
        'link' => 'https://www.youtube.com/watch?v=QkkoHAzjnUs',
        'platform' => 'PC, PS, Xbox',
        'maker' => 'Rockstar Games',
        'embed' => '<iframe class="embedSlideFelixLatest" src="https://www.youtube.com/embed/QkkoHAzjnUs" title="Grand Theft Auto V Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>'
    ],
    [
        'titel' => 'Balatro',
        'genre' => 'Card Battler',
        'pegi' => 12,
        'beschrijving' => 'Een innovatieve kaartgame met unieke mechanieken.',
        'reviews' => [
            [
                'naam' => 'Emma Bakker',
                'tekst' => 'Geweldig vernieuwend!',
                'sterren' => 5
            ],
            [
                'naam' => 'Jeff Bezos',
                'tekst' => 'Leuke gameplay, maar weinig uitdaging.',
                'sterren' => 3
            ],
            [
                'naam' => 'Adele',
                'tekst' => 'Ik kan niet stoppen met spelen!',
                'sterren' => 4
            ]
        ],
        'link' => 'https://www.youtube.com/watch?v=VUyP21iQ_-g',
        'platform' => 'PC',
        'maker' => 'Indie Studio',
        'embed' => '<iframe class="embedSlideFelixLatest" src="https://www.youtube.com/embed/VUyP21iQ_-g" title="Balatro - Official Launch Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>'
    ]
];
$loop = true;
$currentGame = 0;

// leeftijd (wordt misschien later nog veranderd zodat het een input is)
$leeftijd = 20;

?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Gamestars - Laatste reviews</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Gamestars reviews - Home">
        <meta name="keywords" content="games, game, review, game reviews, reviews">
        <meta name="author" content="Felix Nieuwenhuijsen">
        <link rel="icon" href="" type="image/x-icon">
        <link rel="stylesheet" href="style/index-style.css">
        <script src="lib/felix-latest-reviews-script.js" defer></script>
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
        <main class="reviewContent" id="latestReviewsFelixMain">
            <!-- <section id="notReviewSection">
                <h1>Nieuwste reviews:</h1>
            </section> -->
            
            <section id="slideHolder">
                <?php
                //zet alle games neer die voldoen aan de leeftijds eisen
                foreach ($games as $game => $gameValue) {
                    // Echo de slides
                    if ($games[$game]['pegi'] <= $leeftijd) {
                        echo "
                        <div class='slide' id='slide{$game}'>
                            <h1>{$games[$game]['titel']}</h1>
                            <h2>{$games[$game]['genre']}</h2>
                            <img class='reviewPegi' src='img/pegi_{$games[$game]['pegi']}.png'>
                            <div class='reviewSlide'>";
                        
                        foreach ($games[$game]['reviews'] as $review) {
                            $sterrenArr = [];
                            for ($i = 0; $i < $review['sterren']; $i++) {
                                $sterrenArr[] = '⭐';
                            }
                            $noStars = 5 - $review['sterren'];
                            for ($i = 0; $i < $noStars; $i++) {
                                $sterrenArr[] = '☆';
                            }
                            $stars = implode("", $sterrenArr);
                
                            echo "
                                <div class='reviewInfo'>
                                    <p>- <b>{$review['naam']}</b></p>
                                    <p class='reviewTekst'>{$review['tekst']}</p>
                                    <p class='sterrenP'>{$stars}</p>
                                </div>";
                        }
                        
                        echo "
                            </div>
                            <a href='{$games[$game]['link']}' target='_blank'><h4 class='extraInfo'><b>Trailer</b> (opent in nieuw tabblad)</h4></a>
                            <h4 class='extraInfo'><b>Platform(s):</b> {$games[$game]['platform']}</h4>
                            <h4 class='extraInfo'><b>Maker:</b> {$games[$game]['maker']}</h4>
                            {$games[$game]['embed']}
                        </div>";
                    }
                }
                ?>
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

<!-- !!!!!!!!!!!!!!!!!!!!!! -->
<!-- IK HOOP DAT DEZE PAGINA GENOEG IS, MAAR DE CSS WERKTE NIET MEE, DUS HET IS REDELIJK MINIMAAL... -->
<!-- VERGEEF ME )): -->