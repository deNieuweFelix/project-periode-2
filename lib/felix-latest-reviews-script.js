const slides = document.getElementsByClassName("slide");
const standardSlides = 4;

for(const slide of slides){
    slide.style.display = 'none';
}

let curSlide = 0;
function changeSlide(){
    console.log(curSlide);
    slides[curSlide].style.display = 'block';
    for(i = 0; i < slides.length; i++){
        if(i !== curSlide){
            slides[i].style.display = "none";
        }
    }
    curSlide++;
    if(curSlide == slides.length){
        curSlide = 0;
    }
}
changeSlide();
setInterval(changeSlide, 5000);

if(slides.length < standardSlides){
    alert(`${standardSlides - slides.length} reviews verborgen vanwege de PEGI-rating.`);
}