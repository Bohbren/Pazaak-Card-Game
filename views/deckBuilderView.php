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

        <div class="cardSelection">
            <div class="mainBody">
                <div class="board-layout">
                    <div id='boardlists' class="cardRow1"></div>
                </div>
                <div style="clear: both">
                    <form action="./index.php" method="post"><br>
                        <button type="submit" class="registerButton">BUILD DECK</button><br><br>
                    </form>
                </div>
            </div><br>

            <h2>Cards<br><small>Drag the cards up to the empty slots to add them from your deck</small></h2>
            <div class="row">
                <div class="cardsRow1"></div>
                <div class="cardsRow2"></div>
            </div>
        </div>
        <?php include('footerView.php'); ?>

    </div>
    </div> <br>
    </div>
    </div>

    <script src="js/deckBuilder.js"></script>

</body>

</html>