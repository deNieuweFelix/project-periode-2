document.addEventListener('DOMContentLoaded', function() {
    const gameImage = document.getElementById('gameImage');
    const riviewText = document.querySelector('.riviewText');
    const changeButton = document.querySelector('.buttonGame img');
    
    
    const games = [
        {
            title: 'GTA 5',
            description: 'Los Santos, de wereld van GTA 5, is meer dan een simpele stad. Het is een bruisende metropool vol leven, waar criminaliteit en humor samenkomen. Hier race je door straten, plan je gedurfde overvallen en ontmoet je unieke personages die je avontuur onvergetelijk maken. In het begin voelt het alsof je gewoon een crimineel bent in een grote stad, maar al snel ontdek je dat Los Santos een speeltuin is voor chaos en creativiteit. Laat je niet beperken door de regels.',
            releaseDate: 'uitgebracht door Rockstar Games op 17 september 2013',
            multiplayer: 'Deze game ondersteunt multiplayer',
            platforms: 'Playstation, Windows, Xbox',
            genre: 'Action-adventure, openwereldspel',
            rating: '⭐⭐⭐⭐⭐'
        },
        {
            title: 'Minecraft Story Mode',
            description: 'Beacontown, de wereld van Minecraft: Story Mode, is veel meer dan een verzameling blokken. Het is een plek waar vriendschap en avontuur samenkomen, en waar je keuzes echt impact hebben. Hier volg je Jesse en vrienden terwijl ze epische gevaren trotseren, mysterieuze artefacten ontdekken en een verhaal schrijven dat volledig van jou afhangt. In het begin lijkt het alsof je slechts een eenvoudige held bent, maar al snel merk je dat jouw beslissingen het verschil maken. Laat je meevoeren in een wereld vol humor, spanning en creatieve vrijheid.',
            releaseDate: 'Uitgebracht door Telltale Games op 13 oktober 2015',
            multiplayer: 'Deze game ondersteunt geen multiplayer',
            platforms: 'Android, iOS, MacOS, Windows, PlayStation 3, PlayStation 4, Netflix, Switch, Wii U, Xbox 360, Xbox One',
            genre: 'Avonturenspel, computerrollenspel',
            rating: '⭐⭐⭐'
        }
    ];
    let currentGameIndex = 0;

    
    const gtaExtraImages = ['img/gta_screenshot_1.jpg', 'img/gta_screenshot_2.jpg', 'img/gta_screenshot_3.jpg'];
    const minecraftExtraImages = ['img/minecraft_story_screenshot_1.jpg', 'img/minecraft_story_screenshot_2.jpg', 'img/minecraft_story_screenshot_3.jpg'];

    let currentExtraImagesIndex = 0;

    function toggleGameInfo() {
        console.log(`Switching to game ${games[currentGameIndex].title}`);
        
        switch(currentGameIndex) {
            case 0:
                updateGameInfo('img/game5_cover.png', 'img/game9_cover.png');
                updateExtraImages(gtaExtraImages);
                break;
            case 1:
                updateGameInfo('img/game9_cover.png', 'img/game5_cover.png');
                updateExtraImages(minecraftExtraImages);
                break;
            default:
                console.error("Invalid game index");
        }

        currentGameIndex = (currentGameIndex + 1) % games.length;
    }

    function updateGameInfo(imageSrc1, imageSrc2) {
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
    }

    function updateExtraImages(images) {
        const extraImages = document.querySelectorAll('.extraImages img');
        
        for (let i = 0; i < extraImages.length; i++) {
            extraImages[i].src = images[(i + currentExtraImagesIndex) % images.length];
        }
        
        currentExtraImagesIndex = (currentExtraImagesIndex + 1) % images.length;
    }

    changeButton.addEventListener('click', toggleGameInfo);
});
