

            document.addEventListener('DOMContentLoaded', function() {
                const gameImage = document.getElementById('gameImage');
                const riviewText = document.querySelector('.riviewText');
                const changeButton = document.querySelector('.buttonGame img');

                revertGameInfo();
                let isOriginalVersion = true;
           
                function toggleGameInfo() {
                    if (isOriginalVersion) {
                        updateGameInfo();
                    } else {
                        revertGameInfo();
                    }
                    isOriginalVersion = !isOriginalVersion;
                }
           
                function updateGameInfo() {
                   
                    riviewText.innerHTML = `
                        <h1> The last of us </h1> <br>    
                        <p>The last of us is een krachtig, <br> post-apocalyptisch spel dat draait om sluipen, overleven en vechten.<br> Het staat bekend om zijn aangrijpende verhaal <br> en prachtig uitgewerkte wereld. Je wist dat waarschijnlijk al, <br> want het wordt algemeen gezien als een van de beste games ooit.</p>
                        <br><p>Uitgebracht door Sony Computer Entertainment in 2013</p>
                        <p>Deze game ondersteunt multiplayer</p>
                        <p>Platforms: Playstation</p>
                        <p>Genre: Action-adventure</p>
                        <p>⭐⭐⭐⭐</p>
                    `;
           
                   
                    gameImage.src = 'img/game12_cover.png';
           
                   
                    changeButton.src = 'img/game13_cover.jpg';
                }
           
                function revertGameInfo() {
                   
                    riviewText.innerHTML = `
                        <h1>Dying light 1 </h1>
                        <br>
                        <p>Harran, de stad van Dying Light, <br>mag dan vies en vol zombies zijn. <br> het is geen troosteloze woestenij. <br>Het is een levendige open-wereld vol avontuur, waar je gebouwen beklimt,<br> zombies op creatieve manieren uitschakelt en altijd iets nieuws ontdekt.<br> In het begin lijkt het alsof je alleen moet<br> vluchten voor de ondoden die je snel uitputten en je wapens breken. <br>Laat je niet misleiden.</p>
                        <br><p>Uitgebracht door Warner Bros. Interactive Entertainment in januari 2015</p>
                        <p>Deze game ondersteunt multiplayer</p>
                        <p>Platforms: Linux, Playstation, Windows, Xbox, macOS, Nitendo Switch</p>
                        <p>Genre: Survival Horror</p>
                        <p>⭐⭐⭐⭐⭐</p>
                    `;
           
                   
                    gameImage.src = 'img/game13_cover.jpg';
           
                   
                    changeButton.src = 'img/game12_cover.png';
                }
           
               
                changeButton.addEventListener('click', toggleGameInfo);
            });
            