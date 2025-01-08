const gameInfo = [
    [
        "spyro_img_1.jpg",
        "spyro_img_2.png",
        "spyro_img_3.jpg",
        "spyro_img_4.jpg",
        "spyro_img_5.jpg"
    ]
];

const starsDisplay = document.getElementById("starsDisplay");
const slideShowImg = document.getElementById("slideShowImg");

const activeStar = "⭐";
const idleStar = "☆";

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

    slideShowImg.src = `../img/afbeeldingen4/${gameInfo[0][currentSlide]}`;
    currentSlide++;
    if(currentSlide > gameInfo[0].length - 1){
        currentSlide = 0;
    }
}