//data voor de games
const games = [
    {
            titel: 'undertale',
            sterren: 5,
            beschrijving:`As a lone human fallen into an underground world that serves as a prison for monsters, I had my journey laid out for me, as most RPG protagonists do. For my first playthrough I took a pacifist approach, being as kind and merciful as possible as I searched for a way back to the surface. But I made a mistake: I accidentally killed a monster in the beginning. So I restarted without saving, as I would in any other game when I needed a do-over. Except… things were different this time. Dialogue had changed to reflect that I’d seen her die. Then Flowey, Undertale’s chaotic evil, fourth wall-breaking flower, tore into me for having the gall to abuse the power of the save state.`,
            jaar: 2015,
            multiplayer: 'alleen singleplayer',
            platform: 'Console, PC',
            genre: 'Roleplaying game',
            afbeelding: 'undertale_game_cover.jpg',
            pegi: 'pegi_3.png',
            video: '../vid/undertale_review_vid.mp4',
            screenshots: [
                'undertale_screenshot_1.jpg',
                'undertale_screenshot_2.png',
                'undertale_screenshot_3.png'
            ]
    },
    {
            titel: 'Plants vs. zombies',
            sterren: 4,
            beschrijving:
`You would be forgiven for saying you've had your fill of tower defense games. The past couple years has seen a flood of these strategy clones filling casual portals like the iPhone and PC. But you know who might be able to bring you back: the people that brought you Peggle. PopCap, one of the best casual developers and publishers around, has delivered Plants vs. Zombies, its first tower defense game. While it uses the basic mechanics of all efforts in this genre, it boasts charm, personality, and gobs of gameplay variety. The result is another addictive experience that will appeal to all walks of gamers.
`,
            jaar: 2009,
            multiplayer: 'alleen singleplayer',
            platform: 'PC, Mac, Mobile',
            genre: 'Tower defense',
            afbeelding: 'pvz_cover.jpg',
            pegi: 'pegi_7.png',
            video: '../vid/pvz_review_vid.mp4',
            screenshots: [
                'pvz_screenshot_1.jpg',
                'pvz_screenshot_2.jpg',
                'pvz_screenshot_3.jpg'
            ]
    }
];

//currentgame
let currentGame = 0;

//zet de elementen in een constante variabel
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
const reviewVideo = document.getElementById("reviewVideo");

//weer de screenshots
const screenShot1 = document.getElementById("screenShot1");
const screenShot2 = document.getElementById("screenShot2");
const screenShot3 = document.getElementById("screenShot3");

//krijgt de leeftijdswaarschuwing
const leeftijdWaarschuwing = document.getElementById("leeftijdWaarschuwing");

//verander deze variabele naar false als je de console wilt behouden (:
const clearConsole = true;

const dev = false;

leeftijdWaarschuwing.remove();

let leeftijd = undefined;

//vraagt om de leeftijd als deze er nog niet is
while(leeftijd == undefined){
    leeftijd = parseInt(prompt("voer uw leeftijd in:"));
}

//weer een functie om de games te veranderen
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

//laat de data op de pagina zien
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

    selectedScreenshot.src = `../img/${games[currentGame].screenshots[0]}`;

    reviewVideo.src = games[currentGame].video;
}

function selectScreenshot(imgNumber){
    console.log("ik werk!");
    selectedScreenshot.src = `../img/${games[currentGame].screenshots[imgNumber]}`;
}

switchGame();

//checkt de leeftijd en append de leeftijdswaarschuwing als het niet goed is
if(leeftijd  !== undefined && leeftijd < 18 && typeof leeftijd == "number"){
    if(dev == false){
        document.body.innerHTML = "";
        setTimeout(() => {
            document.body.appendChild(leeftijdWaarschuwing);
            if(typeof leeftijd !== "number"){
                leeftijdWaarschuwing.children[0].innerHTML = "geen getal ingevoerd"
            }
        }, 150);
    }
}

//brengt je terug naar de homepagina, en sluit daarna deze pagina
function redirectToHome(){
    window.open("../index.html");
    if(dev == false){
        document.body.innerHTML = "terugsturen...";
        setTimeout(() => {
            window.close();
        }, 500);
    }
}
