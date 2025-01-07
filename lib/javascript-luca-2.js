document.addEventListener('DOMContentLoaded', function() {
    const gameImage = document.getElementById('gameImage');
    const riviewText = document.querySelector('.riviewText');
    const changeButton = document.querySelector('.buttonGame img');
    

    const games = [
        {
            title: 'Dying Light 1 ',
            description: 'Harran, de stad van Dying Light, mag dan vies en vol zombies zijn. Het is geen troosteloze woestenij. Het is een levendige open-wereld vol avontuur, waar je gebouwen beklimt,<br>zombies op creatieve manieren uitschakelt en altijd iets nieuws ontdekt.<br> In het begin lijkt het alsof je alleen moet<br> vluchten voor de ondoden die je snel uitputten en je wapens breken. <br>Laat je niet misleiden.',
            releaseDate: 'Uitgebracht door Warner Bros. Interactive Entertainment in januari 2015',
            platforms: 'Linux, Playstation, Windows, Xbox, macOS, Nitendo Switch',
            genre: 'Survival Horror',
            rating: '⭐⭐⭐⭐⭐'
        },
        {
            title: 'The Last of Us',
            description: 'The last of us is een krachtig, post-apocalyptisch spel dat draait om sluipen, overleven en vechten.<br>Het staat bekend om zijn aangrijpende verhaal en prachtig uitgewerkte wereld. Je wist dat waarschijnlijk al, want het wordt algemeen gezien als een van de beste games ooit.',
            releaseDate: 'Uitgebracht door Sony Computer Entertainment in 2013',
            platforms: 'Playstation',
            genre: 'Action-adventure',
            rating: '⭐⭐⭐⭐'
        }
    ];

    let currentGameIndex = 0;

    function toggleGameInfo() {
        console.log(`Switching to game ${games[currentGameIndex].title}`);
        
        switch(currentGameIndex) {
            case 0:
                updateGameInfo('../img/game13_cover.jpg', '../img/game12_cover.png');
                break;
            case 1:
                updateGameInfo('../img/game12_cover.png', '../img/game13_cover.jpg');
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
            <p>Deze game ondersteunt multiplayer</p>
            <p>Platforms: ${games[currentGameIndex].platforms}</p>
            <p>Genre: ${games[currentGameIndex].genre}</p>
            <p>${games[currentGameIndex].rating}</p>
        `;
        
        gameImage.src = imageSrc1;
        changeButton.src = imageSrc2;
    }

    changeButton.addEventListener('click', toggleGameInfo);
}); 