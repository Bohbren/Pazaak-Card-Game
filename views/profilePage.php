<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Profile Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link href="main.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>     
        <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:700&display=swap" rel="stylesheet">
    </head>        

    <body>
        <div class="center" >
            <?php include('navbarView.php'); ?>
            <div class="profilePage" style="height: 100%;" >
                <div class="row" >
                    <h1>Edit your profile</h1>
                    <h2 style="color: white;"><?php controllerSecurity::xecho($userName) ?></h2><br>
                    <div class="column">
                        <form action="./index.php" method="post">
                            <input type="hidden" name="action" value="changeFName">
                            <label>First Name:</label><br>
                            <input type="text" name="fName" value="<?php controllerSecurity::xecho($firstName) ?>" style="color: black; font-size: 20px">
                            <label style="color: red;"><?php controllerSecurity::xecho($fName) ?></label> <br>
                            <button type="submit" class="registerButton">CHANGE FIRST NAME</button><br><br>
                        </form>
                        <form action="./index.php" method="post">
                            <input type="hidden" name="action" value="changeLName">
                            <label>Last Name:</label><br>
                            <input type="text" name="lName" value="<?php controllerSecurity::xecho($lastName) ?>" style="color: black; font-size: 20px">
                            <label style="color: red;"><?php controllerSecurity::xecho($lName) ?></label><br>
                            <button type="submit" class="registerButton">CHANGE LAST NAME</button><br><br>
                        </form>
                        <form action="./index.php" method="post">
                            <input type="hidden" name="action" value="changeEmail">
                            <label>Email:</label><br>
                            <input type="text" name="email" value="<?php controllerSecurity::xecho($email) ?>" style="color: black; font-size: 20px">
                            <label style="color: red;"><?php controllerSecurity::xecho($emailCheck) ?></label><br>
                            <button type="submit" class="registerButton">CHANGE EMAIL</button><br><br>
                        </form>
                        <form action="./index.php" method="post">
                            <input type="hidden" name="action" value="changePassword">
                            <label>Password:</label><br>
                            <input type="password" name="password" value="<?php controllerSecurity::xecho($password) ?>" style="color: black; font-size: 20px">
                            <label style="color: red;"><?php controllerSecurity::xecho($pWord) ?></label> <br>
                            <button type="submit" class="registerButton">CHANGE PASSWORD</button><br>
                        </form>
                    </div>
                    <div class="column">
                        <img src="<?php controllerSecurity::xecho($image) ?>" alt="Profile Pic" width="100" height="100" align="center">
                        <br><br>
                        <form id="upload_form"
                              action="." method="POST"
                              enctype="multipart/form-data">
                            <input type="hidden" name="action" value="upload">
                            <input type="file" name="file1">
                            <button type="submit" class="registerButton" style="height: 50px; width: 100px; ">UPLOAD</button><br>
                            <label style="color: red;"><?php controllerSecurity::xecho($errorMessage) ?></label><br>
                        </form><br><br>
                        <h2>Your Decks</h2>
                        <?php
                        //Displays all of your created decks that are saved under your PlayerID
                        foreach ($decks as $key => $decksArray) :
                            ?><h3>Deck <?php controllerSecurity::xecho($key + 1) ?></h3>
                            <div style="height: 95px; width: 390px; width: 100%;">
                                <div>
                                    <?php
                                    $deck = new Deck($decksArray['mainDeck'], $decksArray['cards'], $decksArray['playerID']);
                                    $deckHolder = array();
                                    $deckHolder = explode(",", $deck->getCards());
                                    foreach ($deckHolder as $key => $deckHolders):
                                        if ($deckHolder[$key] <= 6 && $deckHolder[$key] >= 1) {
                                            ?><div class="cards"><img src="images/cards/plus<?php controllerSecurity::xecho($deckHolder[$key]) ?>.jpg" 
                                                                    alt="Pazaak Plus <?php controllerSecurity::xecho($key) ?>" height="80px" width="55px"/></div>
                                                <?php
                                            }
                                            if ($deckHolder[$key] <= -1 && $deckHolder[$key] >= -6) {
                                                ?><div class="cards"><img src="images/cards/minus<?php controllerSecurity::xecho($deckHolder[$key]) ?>.jpg" 
                                                                    alt="Pazaak Minus <?php controllerSecurity::xecho($key) ?>" height="80px" width="55px"/></div>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                        endforeach;
                                        ?>
                                </div> 
                            </div>
                        <?php endforeach; ?>
                    </div>                    
                </div><br>
                <h2>DELETE DECKS</h2>
                <form action="./index.php" method="post">
                    <input type="submit" value="DELETE" style="color: red;">
                    <select name="deckDelete" style="width: 150px;">
                        <?php foreach ($decks as $key => $decksArray) : ?>
                        <option value="test" style="color: black;"><?php controllerSecurity::xecho($deckHolder[$key]) ?></option>
                        <?php endforeach; ?>
                    </select>
                </form>
            </div>
    </body>
</html>