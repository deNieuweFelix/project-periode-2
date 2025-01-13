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

const starsDisplay = document.getElementById("starsDisplay");
const slideShowImg = document.getElementById("slideShowImg");
const felixReview4Main = document.getElementById("felixReview4Main");
const helpText = document.getElementById("helpText");
const reviewSection = document.getElementById("reviewSection");
const helpTextContainer = document.getElementById("helpTextContainer");
const resetButton = document.getElementById("resetButton");

const activeStar = "⭐";
const idleStar = "☆";

let helpTextActive = false;

const gameNumber = 0;

helpTextContainer.removeChild(helpText);

if(!dev){
    resetButton.remove();
}

const makerFelix4 = document.getElementById("makerFelix4");
const jaarFelix4 = document.getElementById("jaarFelix4");
const genreFelix4 = document.getElementById("genreFelix4");
const platformFelix4 = document.getElementById("platformFelix4");
const titelFelix4 = document.getElementById("titelFelix4");

switch(gameNumber){
    case 0:
        makerFelix4.innerHTML = "Maker: " + gameInfo[2].spyro.maker;
        jaarFelix4.innerHTML = "Jaar: " + gameInfo[2].spyro.jaar;
        genreFelix4.innerHTML = "Genre: " + gameInfo[2].spyro.genre;
        platformFelix4.innerHTML = "Platform: " + gameInfo[2].spyro.platform;
        titelFelix4.innerHTML = gameInfo[2].spyro.titel;
        
        break;
    case 1:
        makerFelix4.innerHTML = "Maker: " + gameInfo[2].battlefront.maker;
        jaarFelix4.innerHTML = "Jaar: " + gameInfo[2].battlefront.jaar;
        genreFelix4.innerHTML = "Genre: " + gameInfo[2].battlefront.genre;
        platformFelix4.innerHTML = "Platform: " + gameInfo[2].battlefront.platform;
        titelFelix4.innerHTML = gameInfo[2].battlefront.titel;

        break;


}


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

slideShow();

setInterval(slideShow, 2000);

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

function expandHelp(){
    if(!helpTextActive){
        helpTextContainer.appendChild(helpText);
        helpTextActive = true;
    }else{
        helpTextContainer.removeChild(helpText);
        helpTextActive = false;
    }
}

function addImage(){
    var imageToAdd = prompt("Voer URL in:");
    if(imageToAdd.includes("https://") && (imageToAdd.includes(".jpg") || imageToAdd.includes(".png") || imageToAdd.includes(".jpeg"))){
        gameInfo[gameNumber].push(imageToAdd);
    }else{
        alert("onjuist voormaat, kopieer de link vanaf google, en zorg ervoor dat het een .jpg, .jpeg of .png is!!!");
    }
    
}

function noInputError(){
    alert("Voer eerst je aantal sterren in!!!");
}