<?php 
require_once "config.php";
if(session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codfish 2000</title>

    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/game.css">
    <link rel="stylesheet" href="../css/play.css">

    <link rel="stylesheet" media="only screen and (max-width: 999px), only screen and (max-height: 724px)" href="../css/mobile.css">
    <link rel="stylesheet" media="only screen and (min-width: 1000px) and (min-height: 725px)" href="../css/desktop.css">

    <link rel="icon" href="../media/logo.webp">
</head>

<body>

    <div class="main container-column">

        <div class="logo-container">
            <img class="bubbles" src="../media/bubbles.gif" alt="Bubbles animation">
            <img class="logo" src="../media/logo.webp" alt="Codfish 2000 logo">
            <h3 class="logo-text">CODFISH 2000</h3>
        </div>
    
        <div class="game container-row">
    
            <div class="evaluation-bar">
                <div class="evaluation-bar-black"></div>
                <div class="evaluation-bar-white"></div>
            </div>
    
            <div class="chessboard">
    
                <div class="container-column popup-container">

                    <div class="container-column popup settings">
                        <span class="engine-level">Engine level: Advanced</span>
                        <input class="slider" type="range" value="3" min="1" max="5" step="1">
                        <span class="opening-book">Opening book: Default (999kb)</span>
                        <span class="maximum-depth">Maximum depth: 4</span>
                        <button class="button play-button">Play</button>
                    </div>

                    <div class="container-column popup game-result">
                        <span class="game-result-text">White wins!</span>
                        <a class="button play-again" href="play.php">Play again</a>
                    </div>

                    <div class="container-column popup download-opening-book">
                        <span class="download-opening-book-text">Downloading opening book...</span>
                    </div>

                </div>
                
                <div class="anti-click-overlay"></div>
    
                <div class="white-promotion-popup">
                    <div class="promotion-piece wQ"></div>
                    <div class="promotion-piece wN"></div>
                    <div class="promotion-piece wR"></div>
                    <div class="promotion-piece wB"></div>
                </div>
    
                <div class="black-promotion-popup">
                    <div class="promotion-piece bB"></div>
                    <div class="promotion-piece bR"></div>
                    <div class="promotion-piece bN"></div>
                    <div class="promotion-piece bQ"></div>
                </div>
            
                <svg viewBox="0 0 100 100" class="coordinates">
                    <text x="0.75" y="3.5" class="coordinate-bright">8</text>
                    <text x="0.75" y="15.75" class="coordinate-dark">7</text>
                    <text x="0.75" y="28.25" class="coordinate-bright">6</text>
                    <text x="0.75" y="40.75" class="coordinate-dark">5</text>
                    <text x="0.75" y="53.25" class="coordinate-bright">4</text>
                    <text x="0.75" y="65.75" class="coordinate-dark">3</text>
                    <text x="0.75" y="78.25" class="coordinate-bright">2</text>
                    <text x="0.75" y="90.75" class="coordinate-dark">1</text>
                    <text x="10" y="99" class="coordinate-dark">a</text>
                    <text x="22.5" y="99" class="coordinate-bright">b</text>
                    <text x="35" y="99" class="coordinate-dark">c</text>
                    <text x="47.5" y="99" class="coordinate-bright">d</text>
                    <text x="60" y="99" class="coordinate-dark">e</text>
                    <text x="72.5" y="99" class="coordinate-bright">f</text>
                    <text x="85" y="99" class="coordinate-dark">g</text>
                    <text x="97.5" y="99" class="coordinate-bright">h</text>
                </svg>
    
            </div>
    
        </div>
    
        <div class="container-row">
            <a class="button navigation-button" href="../index.php">Home page</a>
            <?php  
            if (isset($_SESSION[Config\loggedUsername])) {
                echo "
                    <button class=\"button navigation-button save-position-button\" disabled>Save position</button>
                ";
            }
            ?>
        </div>

    </div>

    <script src="../js/_debug.js"></script>

    <script src="../js/remove_annoying_events.js"></script>
    <script src="../js/game.js"></script>
    <script src="../js/move_generation.js"></script>
    <script src="../js/engine.js"></script>
    <script src="../js/gui.js"></script>
    <script src="../js/play.js"></script>

</body>
</html>
