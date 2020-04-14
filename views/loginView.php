<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link href="main.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>     

        <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="center">
            <?php include('links.php'); ?>
            <main>
                <div class="webPageMain">
                    <form action="index.php" method="post">
                        <input type="hidden" name="action" value="loginPlayer">
                        <h1>LOG IN</h1>
                        <hr>

                        <div>
                            <label style="text-align: left">Username:</label><br>
                            <input type="text" name="uName" value="<?php controllerSecurity::xecho($userName) ?>"><br>
                            <label style="color: red"><?php controllerSecurity::xecho($error) ?></label><br>
                        </div>

                        <label>Password:</label><br>
                        <input type="password" name="password" value="<?php controllerSecurity::xecho($password) ?>"><br>
                        <label style="color: red;"><?php controllerSecurity::xecho($pWord) ?></label><br>
                        <hr>
                        <button type="submit" class="registerButton">LOG IN</button>
                </div>
                </form>
            </main>                
            <footer>

            </footer>
        </div>

    </body>
</html>
