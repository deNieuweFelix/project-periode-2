//krijgt de slides class, waar alle slides in staan
const slides = document.getElementsByClassName("slide");

//standaard hoeveelheid slides
const standardSlides = 4;

//zet eerst alles slides op display: none, om ze onzichtbaar te maken
for(const slide of slides){
    slide.style.display = 'none';
}

let curSlide = 0;
//functie om de huidige zichtbare slide te laten zien
function changeSlide(){
    console.log(curSlide);
    //maakt slide zichtbaar
    slides[curSlide].style.display = 'block';
    for(i = 0; i < slides.length; i++){
        if(i !== curSlide){
            //zet alle andere slides op display: none
            slides[i].style.display = "none";
        }
    }
    curSlide++;
    if(curSlide == slides.length){
        //zorgt ervoor dat de slides loopen
        curSlide = 0;
    }
}

//!!!!!!!!!!!
//verander deze var om de snelheid te veranderen
//voor gemak staat het in seconden
//in de console:
// slideSnelheid = snelheid in seconden
let slideSnelHeid = 8; //(s)

changeSlide();
setInterval(changeSlide, (slideSnelHeid * 1000));

//als er niet genoeg slides zijn (bepaald met de PHP), laat het een foutmelding zien, de hoeveelheid verborgen games
//kan vast beter, maar het werk (:
if(slides.length < standardSlides){
    alert(`${standardSlides - slides.length} reviews verborgen vanwege de PEGI-rating.`);
}

//als je dit leest, geef me alsjeblieft een 10 :pray: