<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="color-scheme" content="light">
        <title>Dice - Game</title>
        <link rel="icon" href="images/Dice-2.png">
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
        <?php ini_set('display_errors', 'off'); ?>
    </head>
    <body>
        <main>
            <div class='Button' onclick="New()">
                <img src="images/plus-circle.svg">
                <p>NEW GAME</p>
            </div>
            <div class='Gamediv'>
                <?php
                require_once 'Player.php';
                $Player1 = new Player(1);
                $Player1->load();
                ?>
                <div class='DiceDiv'>
                    <img id='Dice' src="images/Dice-1.png">
                    <div class='Button' onclick="Roll()">
                        <img src="images/arrow-repeat.svg">
                        <p>ROLL DICE</p>
                    </div>
                    <div class='Button' onclick="Hold()">
                        <img src="images/box-arrow-in-down.svg">
                        <p>HOLD</p>
                    </div>
                </div>
                <?php
                require_once 'Player.php';
                $Player2 = new Player(2);
                $Player2->load();
                ?>
            </div>
        </main>
    </body>
</html>