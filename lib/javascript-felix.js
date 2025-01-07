const felixJSgameName = document.getElementById("felixJSgameName");
const felixJSgameStars = document.getElementById("felixJSgameStars");
const felixJSgameDesc = document.getElementById("felixJSgameDesc");
const felixJSgameImg = document.getElementById("felixJSgameImg");
const felix_js_releaseYear = document.getElementById("felix_js_releaseYear");
const felix_js_multiplayer = document.getElementById("felix_js_multiplayer");
const felix_js_platform = document.getElementById("felix_js_platform");
const felix_js_genre = document.getElementById("felix_js_genre");
const felix_js_pegi = document.getElementById("felix_js_pegi");

const pegiRatings = {
    3: 'img/pegi_3.png',
    7: 'img/pegi_7.png',
    12: 'img/pegi_12.png',
    16: 'img/pegi_16.png',
    18: 'img/pegi_18.png'
};


class game{
    constructor(naam, afbeelding, sterren, beschrijving, releaseYear, multiplayer, platform, genre, pegi) {
        this.naam = naam,
        this.afbeelding = afbeelding,
        this.sterren = sterren,
        this.beschrijving = beschrijving,
        this.releaseYear = releaseYear,
        this.multiplayer = multiplayer,
        this.platform = platform,
        this.genre = genre,
        this.pegi = pegi
    }
}

const felix_js_data = [
    new game("Roller coaster tycoon","game1_cover.png", 4, "The RollerCoaster Tycoon series holds a very special place in my heart. Not only was it my gateway game to the wonderful world of economic simulations (I'm serious) and the joy of strategy and planning they can bring, but it was also among the best of the genre for the simple fact that it had personality and involved something that I absolutely love. Roller coasters are a blast. They're fun to ride and they're fun to watch. It must be pretty nice for these real theme park owners to be able to sit back and watch people have fun in their park and empty their pockets while doing so. While the development team has changed from Chris Sawyer and co. to Frontier development, it's pretty obvious that the new team was pretty dedicated to keeping the feel and personality intact while wanting to move the series forward in a few areas. The new 3D engine allows for a lot of improvements including easier construction and being able to ride the coasters. New features like VIPs, an improved career mode, and sandbox mode also help make the game more than it was. The problem is that I've encountered a slew of bugs and the game ships out of the box with a couple of deficiencies that while they don't completely detract from my excitement and addiction, are impossible for me to completely overlook.",
        1999, false, 'PC', "Simulator, tycoon", 3
    ),
    new game("Super mario bros 3", "game2_cover.png", 3, "He'd eaten mushrooms to grow in size. He'd picked flowers to throw balls of flame. And just when you thought Mario's powers couldn't get any weirder, along came his tail – a raccoon's tail that made him fly. Wagging his ringed rear end must have worked, because Super Mario Bros. 3 flew off the shelves. Arriving in American stores for the first time in February 1990, Mario's third adventure was Nintendo's first Megaton release. It sold millions in its first year, and has gone on to become the best-selling non-bundled video game of all time. Now, as the superstar, Koopa-stomping plumber once again arrives on store shelves in an all-new adventure that's guaranteed to become a best-seller itself, should you spend the time and the 500 Wii Points required to add to the lifetime sales total of this past NES adventure? The answer, absolutely, is yes.",
        1988, true, "NES", "Platformer", 3
    )
];

let currentGame = 0;

function nextGame(prev){
    let pegiImage = undefined;

    let starsDisplay = [];
    if(prev == true){
        currentGame--;
    }else{
        currentGame++;
    }

    if(currentGame > (felix_js_data.length - 1)){
        currentGame = 0;
    }else if(currentGame < 0){
        currentGame = felix_js_data.length - 1;
        console.log(currentGame);
    }

    for(i = 0; i < felix_js_data[currentGame].sterren; i++){
        starsDisplay.push("⭐");
    }
    let multiplayer = "";

    switch(felix_js_data[currentGame].pegi){
        case 3:
            pegiImage = pegiRatings[3];
            break;
        case 7:
            pegiImage = pegiRatings[7];
            break;
        case 12:
            pegiImage = pegiRatings[12];
            break;
        case 16:
            pegiImage = pegiRatings[16];
            break;
        case 18:
            pegiImage = pegiRatings[18];
            break;
    }

    switch(currentGame){
        case 0:
            felixJSgameDesc.innerHTML = felix_js_data[0].beschrijving;
            felixJSgameImg.src = `img/${felix_js_data[0].afbeelding}`;
            felixJSgameName.innerHTML = felix_js_data[0].naam;

            felix_js_genre.innerHTML = felix_js_data[0].genre;
            felix_js_platform.innerHTML = felix_js_data[0].platform;
            felix_js_releaseYear.innerHTML = felix_js_data[0].releaseYear;
            
            switch(felix_js_data[0].multiplayer){
                case true:
                    multiplayer = "Ja";
                    break;
                case false:
                    multiplayer = "Nee";
                    break;
                default:
                    multiplayer = "Missende data!"
                    break;
            }

            felix_js_multiplayer.innerHTML = multiplayer;

            felix_js_pegi.src = pegiImage;
            break;
        case 1:
            felixJSgameDesc.innerHTML = felix_js_data[1].beschrijving;
            felixJSgameImg.src = `img/${felix_js_data[1].afbeelding}`;
            felixJSgameName.innerHTML = felix_js_data[1].naam;

            felix_js_genre.innerHTML = felix_js_data[1].genre;
            felix_js_platform.innerHTML = felix_js_data[1].platform;
            felix_js_releaseYear.innerHTML = felix_js_data[1].releaseYear;

            switch(felix_js_data[1].multiplayer){
                case true:
                    multiplayer = "Ja";
                    break;
                case false:
                    multiplayer = "Nee";
                    break;
                default:
                    multiplayer = "Missende data!"
                    break;
            }

            felix_js_multiplayer.innerHTML = multiplayer;

            felix_js_pegi.src = pegiImage;
            break;
        default:
            felixJSgameName.innerHTML = 'Data niet gevonden ):';

    }
    felixJSgameStars.innerHTML = starsDisplay.join("");
    console.log(`Naam: ${felix_js_data[currentGame].naam}`);
    console.log(`Genre: ${felix_js_data[currentGame].genre}`);
    console.log(`Platform: ${felix_js_data[currentGame].platform}`);
    console.log(`${felix_js_data[currentGame].sterren}/5 sterren`);
    console.log(`Pegi: ${felix_js_data[currentGame].pegi}`);
}

for(i = 0; i <= 2; i++){
    nextGame();
}