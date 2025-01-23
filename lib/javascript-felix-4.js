const gameInfo = [
    [
        "spyro_img_1.jpg",
        "spyro_img_2.png",
        "spyro_img_3.jpg",
        "spyro_img_4.jpg",
        "spyro_img_5.jpg"
    ],
    [
        "battlefront_img_1.jpeg",
        "battlefront_img_2.jpg",
        "battlefront_img_3.jpg",
        "battlefront_img_4.jpg",
        "battlefront_img_5.jpg",
    ],
    {
        spyro: {
            titel: 'spyro 1',
            maker: 'Sony',
            jaar: '1998',
            genre: 'Platform',
            pegi: 7,
            platform: 'playstation 1'
        },
        battlefront: {
            titel: 'Battlefront II',
            maker: 'DICE',
            jaar: '2017',
            genre: 'Shooter',
            pegi: 16,
            platform: 'PC, XBOX, PS'
        }
    }
];

const dev = false;

//doe de elements in een variabel
const starsDisplay = document.getElementById("starsDisplay");
const slideShowImg = document.getElementById("slideShowImg");
const felixReview4Main = document.getElementById("felixReview4Main");
const helpText = document.getElementById("helpText");
const reviewSection = document.getElementById("reviewSection");
const helpTextContainer = document.getElementById("helpTextContainer");
const resetButton = document.getElementById("resetButton");

//instellingen voor de sterren display
const activeStar = "⭐";
const idleStar = "☆";

//overige info
let helpTextActive = false;

const gameNumber = 1;
let leeftijd = undefined;

//verwijder de help text, die later weer toegevoegd kan worden
helpTextContainer.removeChild(helpText);

//varander de game gebaseerd op de game number
currentGameInfo = undefined;
switch(gameNumber){
    case 0:
        currentGameInfo = gameInfo[2].spyro;
        break;
    case 1:
        currentGameInfo = gameInfo[2].battlefront;
        break;
    default:
        currentGameInfo = "waarschijnlijk een fout lol";
        break;
}

//verwijder de reset knop als je geen dev ben (logisch)
if(!dev){
    resetButton.remove();
}

//zorgt ervoor dat je een scherm krijgt te zien als je te jong bent
const leeftijdWarning = document.getElementById("leeftijdWarning");
document.getElementById("felixReview4Main").removeChild(leeftijdWarning);


//leeftijd check :)
function askLeeftijd(){
    leeftijd = prompt("Wat is je leeftijd?");
    if(parseInt(leeftijd) < currentGameInfo.pegi){
        document.getElementById("felixReview4Main").innerHTML = "";
        setTimeout(function(){
            document.getElementById("felixReview4Main").style.height = "60vh";
            document.getElementById("felixReview4Main").appendChild(leeftijdWarning);

            //bereken overige jaren
            const wachtJaarSpan = document.getElementById("wachtJaarSpan");

            var overJaren = currentGameInfo.pegi - leeftijd;
            wachtJaarSpan.innerHTML = overJaren;
        }, 100);
        //dit is een beetje rommelig, maar het werkt!
    }else if(parseInt(leeftijd) > currentGameInfo.pegi){
        console.log("oud genoeg");
    }else{
        alert("Voer een leeftijd in");
        askLeeftijd();
    }
}

askLeeftijd();

//nog meer elementen als variabelen
const makerFelix4 = document.getElementById("makerFelix4");
const jaarFelix4 = document.getElementById("jaarFelix4");
const genreFelix4 = document.getElementById("genreFelix4");
const platformFelix4 = document.getElementById("platformFelix4");
const titelFelix4 = document.getElementById("titelFelix4");
const pegiDisplayFelix4 = document.getElementById("pegiDisplayFelix4");

//zet de tekst daadwerkelijk in de pagina (niet optimized lol)
switch(gameNumber){
    case 0:
        makerFelix4.innerHTML = "Maker: " + gameInfo[2].spyro.maker;
        jaarFelix4.innerHTML = "Jaar: " + gameInfo[2].spyro.jaar;
        genreFelix4.innerHTML = "Genre: " + gameInfo[2].spyro.genre;
        platformFelix4.innerHTML = "Platform: " + gameInfo[2].spyro.platform;
        titelFelix4.innerHTML = gameInfo[2].spyro.titel;
        pegiDisplayFelix4.src = 'img/pegi_7.png';
        
        break;
    case 1:
        makerFelix4.innerHTML = "Maker: " + gameInfo[2].battlefront.maker;
        jaarFelix4.innerHTML = "Jaar: " + gameInfo[2].battlefront.jaar;
        genreFelix4.innerHTML = "Genre: " + gameInfo[2].battlefront.genre;
        platformFelix4.innerHTML = "Platform: " + gameInfo[2].battlefront.platform;
        titelFelix4.innerHTML = gameInfo[2].battlefront.titel;
        pegiDisplayFelix4.src = 'img/pegi_16.png';

        break;
    default:
        titelFelix4.innerHTML = "Error ):"

        break;

}

//printen naar de console, dit is rommelig, ik weet het...
console.log("\n Game info:")
console.log(`-- Titel: ${currentGameInfo.titel}`);
console.log(`-- Jaar: ${currentGameInfo.jaar}`);
console.log(`-- Genre: ${currentGameInfo.genre}`);
console.log(`-- Pegi: pegi ${currentGameInfo.pegi}`);

//zet aantal sterren neer gebaseerd op ingedrukte radio knop
function changeStarsDisplay(stars){
    console.log(stars);

    const starArr = [];
    const idleStarCount = (5 - stars);
    for(i = 0; i < stars; i++){
        starArr.push(activeStar);
        starsDisplay.innerHTML = (starArr.join(""));
    }
    for(i = 0; i < idleStarCount; i++){
        starArr.push(idleStar);
        starsDisplay.innerHTML = (starArr.join(""));
    }
}
let currentSlide = 0;

//voer eerst de slideshow functie uit, zodat er al een afbeelding staat
slideShow();

setInterval(slideShow, 2000);

//niet met display: none, maar dit werkt alsnog (have mercy :pray:)
function slideShow(){

    if(currentSlide > 4){
        slideShowImg.src = gameInfo[gameNumber][currentSlide];
    }else{
        if(gameNumber == 1){
            slideShowImg.src = `../img/afbeeldingen4-2-felix/${gameInfo[gameNumber][currentSlide]}`;
        }else{
            slideShowImg.src = `../img/afbeeldingen4/${gameInfo[gameNumber][currentSlide]}`;
        }
    }
    currentSlide++;
    if(currentSlide > gameInfo[gameNumber].length - 1){
        currentSlide = 0;
    }
}

//als er op de vraag knop wordt gedrukt, laat de tekst zien
//als de tekst er al is, dan wordt het verwijderd
function expandHelp(){
    if(!helpTextActive){
        helpTextContainer.appendChild(helpText);
        helpTextActive = true;
    }else{
        helpTextContainer.removeChild(helpText);
        helpTextActive = false;
    }
}

// laat je eigen afbeeldingen toevoegen met een URL
function addImage(){
    var imageToAdd = prompt("Voer URL in:");
    //kijkt of het het goede bestand is
    if(imageToAdd.includes("https://") && (imageToAdd.includes(".jpg") || imageToAdd.includes(".png") || imageToAdd.includes(".jpeg"))){
        gameInfo[gameNumber].push(imageToAdd);
    }else{
        alert("onjuist voormaat, kopieer de link vanaf google, en zorg ervoor dat het een .jpg, .jpeg of .png is!!!");
    }
    
}

//weet om eerlijk te zijn niet wat dit doet lol
function noInputError(){
    alert("Voer eerst je aantal sterren in!!!");
}