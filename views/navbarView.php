<nav class="navbar navbar-inverse" style="  border-radius: 0px!important;">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <?php
            if ($_SESSION['player'] === "") {
                ?>
                <li><a href="index.php?action=homeView" class="menuButtons">HOME</a></li>
                <li><a href="index.php?action=playersView" class="menuButtons">VIEW PLAYERS</a></li>
                <li><a href="index.php?action=deckBuilderView" class="menuButtons">DECK BUILDER</a></li>         
            <?php } else { ?>
                <li><a href="index.php?action=homeView" class="menuButtons">HOME</a></li>
                <li><a href="index.php?action=playersView" class="menuButtons">VIEW PLAYERS</a></li>
                <li><a href="index.php?action=deckBuilderView" class="menuButtons">DECK BUILDER</a></li>         
            <?php }
            ?>
        </ul>
        <div class="topnav-centered">
            <a href="index.php?action=homeView" class="active"><img src="images/logo.png" width="143" height="63" alt="Pazaak Online Logo" class="headerImage"/>
            </a>
        </div>
        <a href="index.php?action=homeView" style="margin: 0; float: none;"></a>

        <ul class="nav navbar-nav navbar-right">
            <?php
            //If the player is logged in it will display their name to go to their profile, if not logged in it
            //displays an option to register or login.
            if ($_SESSION['player'] === "") {
                ?>
                <li><a href="index.php?action=registerView" class="menuButtons">REGISTER</a></li>
                <li><a href="index.php?action=loginView" class="menuButtons">LOGIN</a></li>
            <?php } else { ?>
                <li><a href="index.php?action=profileView" class="menuButtons"><?php echo controllerSecurity::xecho(strtoupper($_SESSION['player']->getUserName())); ?></a></li>
                <li><a href="index.php?action=logout" class="menuButtons">LOGOUT</a></li>
                <?php }
                ?>
        </ul>
    </div>
</nav>
