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
            <?php include('navbarView.php'); ?>
            <div class="webPageMain">

                <h1>REGISTER</h1>
                <form action="index.php" method="post">
                    <hr>

                    <input type="hidden" name="action" value="createUser">

                    <label>First Name:</label><br>
                    <input type="text" name="fName" value="<?php controllerSecurity::xecho($firstName) ?>"><br>
                    <p style="color: red"><?php controllerSecurity::xecho($fName) ?></p> 


                    <label>Last Name:</label><br>
                    <input type="text" name="lName" value="<?php controllerSecurity::xecho($lastName) ?>"><br>
                    <p style="color: red"><?php controllerSecurity::xecho($lName) ?></p>

                    <label>Username:</label><br>
                    <input type="text" name="uName" value="<?php controllerSecurity::xecho($userName) ?>"><br>
                    <p style="color: red"><?php controllerSecurity::xecho($uName) ?></p>

                    <label>Email:</label><br>
                    <input type="text" name="email" value="<?php controllerSecurity::xecho($email) ?>"><br>
                    <p style="color: red"><?php controllerSecurity::xecho($emailCheck) ?></p>

                    <label>Password:</label><br>
                    <input type="password" name="password" value="<?php controllerSecurity::xecho($password) ?>"><br>
                    <p style="color: red"><?php controllerSecurity::xecho($pWord) ?></p> 

                    <hr>
                    <button type="submit" class="registerButton">REGISTER</button><br>
                </form><br>
                <p>Have an account? <a href="index.php?action=loginPage">Login Here</a></p>
            </div>     
            <footer>

            </footer>
        </div>

    </body>
</html>
