<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Deck Builder</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="main.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="center">
        <?php include('navbarView.php'); ?>
        <div class="profilePage">
            <div class="mainBody">
                <div class="row ">
                    <div class="emptyColumn"></div>
                    <div class="emptyColumn"></div>
                    <div class="emptyColumn"></div>
                </div>
            </div>


        </div><br><br>
        <form action="./index.php" method="post">
            <input type="hidden" name="action" value="insertDeck">
            <label style="color: red;"><?php controllerSecurity::xecho($fName) ?></label> <br>
            <button type="submit" class="registerButton">BUILD DECK</button><br><br>
        </form>

        <!--Displays cards available to add to your deck session array -->
        <label style="color: red;"><?php controllerSecurity::xecho($errorMessage) ?></label><br>
            <input type="hidden" name="action" value="addDeck">
            <h2>Cards<br><small>Click on cards to add them from your deck</small></h2><br>
            <div class="cardsRow">
                <?php
                    for ($i = 1; $i < 7; $i++) {
                    ?><div class="pazaakCard" draggable="true">
                    <img src="images/cards/plus<?php controllerSecurity::xecho($i) ?>.jpg" alt="Pazaak Minus <?php controllerSecurity::xecho($i) ?>" height="120px" width="90px" />
                </div>
                <?php } ?>

            </div>
            <div class="cardsRow">
                <?php
                    for ($i = -1; $i > -7; $i--) {
                    ?><div class="pazaakCard" draggable="true">
                    <img src="images/cards/minus<?php controllerSecurity::xecho($i) ?>.jpg" alt="Pazaak Minus <?php controllerSecurity::xecho($i) ?>" height="120px" width="90px"/>
                </div>
                <?php } ?>
            </div>
    </div>

    </div>
    </div> <br>
    </div>
    </div>

    <script src="js\main.js"></script>

</body>

</html>