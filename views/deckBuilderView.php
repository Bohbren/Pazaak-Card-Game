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

            </div><br><br>
            <form action="./index.php" method="post">
                <button type="submit" class="registerButton">BUILD DECK</button><br><br>
            </form>

            <h2>Cards<br><small>Drag the cards up to the empty slots to add them from your deck</small></h2>
            <div class="row">
                <div class="cardsRow1"></div>
                <br><br><br><br><br><br>
                <div class="cardsRow2"></div>
            </div>
        </div>

    </div>

    </div>
    </div> <br>
    </div>
    </div>

    <script src="js\main.js"></script>

</body>

</html>