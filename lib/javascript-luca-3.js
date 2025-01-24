document.addEventListener('DOMContentLoaded', function () {
    const gameImageContainer = document.getElementById('gameImageContainer');
    const riviewText = document.querySelector('.riviewText');
    const changeButton = document.querySelector('.buttonGame img');
    const pegiRating = document.querySelector('#felixJS_pegi');
    const extraImages = document.querySelectorAll('.extraImages img');

    const games = [
        {
            title: 'Army of Two',
            description: 'Salem en Rios, de hoofdpersonages van Army of Two, nemen je mee in een explosieve wereld vol actie en teamwork. Samen strijd je door hectische vuurgevechten, plan je strategische aanvallen en gebruik je coöperatieve tactieken om missies te volbrengen. In het begin voelt het alsof je alleen maar schiet en dekking zoekt, maar al snel ontdek je dat samenwerking de sleutel is tot succes. Of je nu vijanden afleidt of spectaculaire moves uitvoert, in deze wereld draait alles om vertrouwen en kameraadschap.',
            releaseDate: 'Uitgebracht door Electronic Arts op 4 maart 2008',
            multiplayer: 'Deze game ondersteunt multiplayer',
            platforms: 'Playstation, Windows, Xbox, Playstation Portable',
            genre: 'Third-person shooting',
            rating: '⭐⭐⭐',
            videoUrl: 'https://www.youtube.com/embed/7jQs_OYM7zs',
            pegiImage: 'img/pegi_18.png',
            pegiRating: 18, // pegi rating van game
            extraImages: [
                'img/armyTwo/army_of_two_extra.jpg',
                'img/armyTwo/army_of_two_extra_2.jpg',
                'img/armyTwo/army_of_two_extra_3.jpg',
                'img/armyTwo/army_of_two_extra_4.jpg',
                'img/armyTwo/army_of_two_extra_5.jpg'
            ]
        },
        {
            title: 'Super Smash Bros <br>Ultimate',
            description: 'De wereld van Super Smash Bros. Ultimate is een bruisende arena waar iconische personages uit talloze games samenkomen voor epische gevechten. Hier draait alles om precisie, snelheid en strategische keuzes terwijl je vecht op creatieve levels vol verrassingen. In het begin voelt het alsof je gewoon willekeurig knoppen indrukt, maar al snel leer je de unieke moves en tactieken van elke vechter kennen. Met een gigantische selectie personages en eindeloze manieren om te spelen, is dit niet zomaar een vechtspel het is een viering van gaming zelf.',
            releaseDate: 'Uitgebracht door Nintendo Games op 7 december 2018',
            multiplayer: 'Deze game ondersteunt multiplayer',
            platforms: 'Nintendo Switch',
            genre: 'Fighting',
            rating: '⭐⭐⭐⭐⭐',
            videoUrl: 'https://www.youtube.com/embed/cjdfqXIM-Ko',
            pegiImage: 'img/pegi_12.png',
            pegiRating: 12, // PEGI rating van game
            extraImages: [
                'img/SuperSmash/Super_extra_1.jpg',
                'img/SuperSmash/Super_extra_2.jpg',
                'img/SuperSmash/Super_extra_3.jpg',
                'img/SuperSmash/Super_extra_4.jpg',
                'img/SuperSmash/Super_extra_5.jpg'
            ]
        }
    ];

    let currentGameIndex = 0;

    function checkAgeAndLoadGame() {
        // vraag wat de naam is
        const age = prompt("Wat is je leeftijd?");

        if (age === null || isNaN(age) || age < 0) {
            alert("Ongeldige leeftijd! De pagina wordt niet geladen.");
            return; // stopt met website laden als de leeftijd niet hoog genoeg is
        }

        const currentGame = games[currentGameIndex];

        // checkt of de leeftijd gelijk of hoger is dan de pegi rating
        if (age >= currentGame.pegiRating) {
            // laad de game als de leeftijd hoog genoeg is
            toggleGameInfo();
        } else {
            // laat een bericht zien als de leeftijd te laag is
            alert(`Je bent te jong voor deze game! Je moet minimaal ${currentGame.pegiRating} jaar oud zijn.`);
            document.body.innerHTML = "<h2>Sorry, je bent te jong om deze pagina te bekijken.</h2>"; // Modify the body to display a message
        }
    }

    function toggleGameInfo() {
        const currentGame = games[currentGameIndex];

        // game verandering
        riviewText.innerHTML = `
            <h1>${currentGame.title}</h1>
            <br>
            <p>${currentGame.description}</p>
            <br><p>${currentGame.releaseDate}</p>
            <p>${currentGame.multiplayer}</p>
            <p>Platforms: ${currentGame.platforms}</p>
            <p>Genre: ${currentGame.genre}</p>
            <p>${currentGame.rating}</p>
        `;

        // youtube video
        gameImageContainer.innerHTML = `
            <iframe width="560" height="315" src="${currentGame.videoUrl}" 
                frameborder="0" allowfullscreen>
            </iframe>
        `;

        // pegi rating verandering
        pegiRating.src = currentGame.pegiImage;

        // verandering van extra images
        updateExtraImages(currentGame.extraImages);

        currentGameIndex = (currentGameIndex + 1) % games.length;
    }

    function updateExtraImages(images) {
        extraImages.forEach((img, index) => {
            img.src = images[index];
        });
    }

    changeButton.addEventListener('click', checkAgeAndLoadGame);
    // checked de leeftijd als je van game switched
    checkAgeAndLoadGame();  
});
