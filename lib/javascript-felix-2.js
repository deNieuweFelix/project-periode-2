const games = [
    {
            titel: 'Balatro',
            sterren: 5,
            beschrijving:
`There are some games that keep you entertained for a weekend. Some keep you busy for an hour on a weeknight after failing to settle on what new Netflix documentary to watch next. But then, every so often, a game like Balatro turns up and takes hold of your entire life – to the point where you open up your wardrobe and the only four suits your eyes can make out are clubs, spades, diamonds, and hearts. This poker-influenced roguelike may appear straightforward at first, but take the risk of picking it up, and its ludicrously fun gameplay loop won’t let you put it down.
Never has the power of placing down a simple pair of kings garnered more delight than in Balatro, where it can suddenly conjure up an 82 x 146 multiplier as you watch the resulting equation satisfyingly solve itself in front of you. A deck-building roguelike quite like no other, it sacrifices the combat that has made so many in the genre such as Slay the Spire popular, and doesn’t even attempt a story that the likes of Hades told so well. Instead, Balatro relies solely on the power of playing cards to keep you engaged, and it does so with aplomb, gripping my attention tight with its relatively simple but effective toolset.`,
            jaar: 1234,
            multiplayer: 'Placeholder',
            platform: 'PC, Xbox, Playstation',
            genre: 'Roguelike',
            afbeelding: 'game7_cover.png',
            pegi: 'pegi_3.png',
            screenshots: [
                'balatro_screenshot_1.jpg',
                'balatro_screenshot_2.jpg',
                'balatro_screenshot_3.jpg'
            ]
    },
    {
            titel: 'Metal gear solid 2',
            sterren: 4,
            beschrijving:
`Metal Gear Solid, generally acclaimed as the best game on the PlayStation, was also criticized by many around the time of its release. Evidently, the game was too short. "It's three hours long," complained its detractors. Some critics described it as "the ultimate rental."
I thought this was pretty funny at the time, because it was quite clear that those who made these complaints had neatly missed at least half of the point. Those complaints will arise again, I'm sure, since it's become rather fashionable to decry most PS2 adventure games as lacking in length, and again, the point will be missed by some distance. Metal Gear Solid 2: Sons of Liberty is a synthesis of cinematics and game. It's not just a movie, to be watched once and put up on the shelf to gather dust. It's a game, a toy, and a brilliantly-designed one at that, one you can find ways to play with for hours and hours.`,
            jaar: 5678,
            multiplayer: 'Nee',
            platform: 'Playstation 1',
            genre: 'Adventure, Shooter',
            afbeelding: 'game8_cover.png',
            pegi: 'pegi_18.png',
            screenshots: [
                'mgs2_screenshot_1.jpg',
                'mgs2_screenshot_2.png',
                'mgs2_screenshot_3.jpg'
            ]
    }
];

let currentGame = 0;

const felixJSgameName = document.getElementById("felixJSgameName");
const felixJSgameStars = document.getElementById("felixJSgameStars");
const felixJSgameDesc = document.getElementById("felixJSgameDesc");
const felixJSgameImg = document.getElementById("felixJSgameImg");
const felix_js_releaseYear = document.getElementById("felix_js_releaseYear");
const felix_js_multiplayer = document.getElementById("felix_js_multiplayer");
const felix_js_platform = document.getElementById("felix_js_platform");
const felix_js_genre = document.getElementById("felix_js_genre");
const felix_js_pegi = document.getElementById("felix_js_pegi");
const selectedScreenshot = document.getElementById("selectedScreenshot");

const screenShot1 = document.getElementById("screenShot1");
const screenShot2 = document.getElementById("screenShot2");
const screenShot3 = document.getElementById("screenShot3");

//verander deze variabele naar false als je de console wilt behouden (:
const clearConsole = true;

function switchGame(terug){
    if(terug){
        if(currentGame == 0){
            currentGame++;
        }else{
            currentGame--;
        }
    }else{
        if(currentGame == 1){
            currentGame--;
        }else{
            currentGame++;
        }
    }
    let sterren = [];
    for(i = 0; i < games[currentGame].sterren; i++){
        sterren.push("⭐");
    }
    sterrenString = sterren.join("");
    changeDisplay(sterrenString);
    console.log(currentGame);
    
    //informatie over de game loggen in de CONSOLEEEEE
    if(clearConsole){console.clear();}

    console.log(`naam: ${games[currentGame].titel}`);
    console.log(`sterren: ${games[currentGame].sterren}`);
    console.log(`jaar: ${games[currentGame].jaar}`);
    console.log(`platform: ${games[currentGame].platform}`);
}

function changeDisplay(sterren){
    felixJSgameName.innerHTML = games[currentGame].titel;
    felixJSgameStars.innerHTML = sterren;
    felixJSgameDesc.innerHTML = games[currentGame].beschrijving;
    felixJSgameImg.src = `../img/${games[currentGame].afbeelding}`;
    felix_js_releaseYear.innerHTML = games[currentGame].jaar;
    felix_js_multiplayer.innerHTML = games[currentGame].multiplayer;
    felix_js_platform.innerHTML = games[currentGame].platform;
    felix_js_genre.innerHTML = games[currentGame].genre;
    felix_js_pegi.src = `../img/${games[currentGame].pegi}`;

    //verander de screenshots waar je op kan drukken........
    screenShot1.src = `../img/${games[currentGame].screenshots[0]}`;
    screenShot2.src = `../img/${games[currentGame].screenshots[1]}`;
    screenShot3.src = `../img/${games[currentGame].screenshots[2]}`;

    selectedScreenshot.src = `../img/${games[currentGame].screenshots[0]}`
}

function selectScreenshot(imgNumber){
    console.log("ik werk!");
    selectedScreenshot.src = `../img/${games[currentGame].screenshots[imgNumber]}`;
}

switchGame();
