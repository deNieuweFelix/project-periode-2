document.addEventListener('DOMContentLoaded', function() {
    const gameImage = document.getElementById('gameImage');
    const riviewText = document.querySelector('.riviewText');
    const changeButton = document.querySelector('.buttonGame img');
    const pegiRating = document.querySelector('#felixJS_pegi');
    
    const games = [
        {
            title: 'Army of two',
            description: 'Salem en Rios, de hoofdpersonages van Army of Two, nemen je mee in een explosieve wereld vol actie en teamwork. Samen strijd je door hectische vuurgevechten, plan je strategische aanvallen en gebruik je coöperatieve tactieken om missies te volbrengen. In het begin voelt het alsof je alleen maar schiet en dekking zoekt, maar al snel ontdek je dat samenwerking de sleutel is tot succes. Of je nu vijanden afleidt of spectaculaire moves uitvoert, in deze wereld draait alles om vertrouwen en kameraadschap.',
            releaseDate: 'uitgebracht door Electronic Arts op 4 maart 2008',
            multiplayer: 'Deze game ondersteunt multiplayer',
            platforms: 'Playstation, Windows, Xbox, playstation portable',
            genre: 'Third-person shooting',
            rating: '⭐⭐⭐'
        },
        {
            title: 'super smash bros <br> ultimate ',
            description: 'De wereld van Super Smash Bros. Ultimate is een bruisende arena waar iconische personages uit talloze games samenkomen voor epische gevechten. Hier draait alles om precisie, snelheid en strategische keuzes terwijl je vecht op creatieve levels vol verrassingen. In het begin voelt het alsof je gewoon willekeurig knoppen indrukt, maar al snel leer je de unieke moves en tactieken van elke vechter kennen. Met een gigantische selectie personages en eindeloze manieren om te spelen, is dit niet zomaar een vechtspel het is een viering van gaming zelf.',
            releaseDate: 'Uitgebracht door Nitendo Games op 7 december 2018',
            multiplayer: 'Deze game ondersteunt multiplayer',
            platforms: 'Nitendo switch',
            genre: 'Fighting',
            rating: '⭐⭐⭐⭐⭐'
        }
    ];
    let currentGameIndex = 0;
    
    
    const gtaExtraImages = ['img/armyTwo/army_of_two_extra.jpg', 'img/armyTwo/army_of_two_extra_2.jpg', 'img/armyTwo/army_of_two_extra_3.jpg', 'img/armyTwo/army_of_two_extra_4.jpg', 'img/armyTwo/army_of_two_extra_5.jpg'];
    const superExtraImages = ['img/SuperSmash/Super_extra_1.jpg', 'img/SuperSmash/Super_extra_2.jpg', 'img/SuperSmash/Super_extra_3.jpg', 'img/SuperSmash/Super_extra_4.jpg', 'img/SuperSmash/Super_extra_5.jpg'];
    const pegiImages = ['img/pegi_18.png', 'img/pegi_12.png'];

    

    function toggleGameInfo() {
        console.log(`Switching to game ${games[currentGameIndex].title}`);
        
        switch(currentGameIndex) {
            case 0:
                updateGameInfo('img/game14_cover.jpg', 'img/game15_cover.jpg', pegiImages[0]);
                updateExtraImages(gtaExtraImages);
                break;
            case 1:
                updateGameInfo('img/game15_cover.jpg', 'img/game14_cover.jpg', pegiImages[1]);
                updateExtraImages(superExtraImages);
                break;
            default:
                console.error("Invalid game index");
        }

        currentGameIndex = (currentGameIndex + 1) % games.length;
    }

    function updateGameInfo(imageSrc1, imageSrc2, pegiSrc) {
        riviewText.innerHTML = `
            <h1>${games[currentGameIndex].title}</h1>
            <br>
            <p>${games[currentGameIndex].description}</p>
            <br><p>${games[currentGameIndex].releaseDate}</p>
            <p> ${games[currentGameIndex].multiplayer} </p>
            <p>Platforms: ${games[currentGameIndex].platforms}</p>
            <p>Genre: ${games[currentGameIndex].genre}</p>
            <p>${games[currentGameIndex].rating}</p>
        `;
        
        gameImage.src = imageSrc1;
        changeButton.src = imageSrc2;
        pegiRating.src = pegiSrc;
    }

    let currentExtraImagesIndex = 0;

    function updateExtraImages(images) {
        const extraImages = document.querySelectorAll('.extraImages img');
        
        for (let i = 0; i < extraImages.length; i++) {
            extraImages[i].src = images[(i + currentExtraImagesIndex) % images.length];
        }
        
        currentExtraImagesIndex = (currentExtraImagesIndex + 1) % images.length;
    }

    changeButton.addEventListener('click', toggleGameInfo);
    
    
});



