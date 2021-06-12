<?php
include_once 'header.php';
?>

<link rel="stylesheet" href="css/login.css">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" style="font-family: Montserrat;" href="index.php">Home</a>
</nav>

<div class="signup-form">

    <div class="signup-form-form">
        <form class="form form-control" action="includes/login.inc.php" method="post">
        <h2>Log In</h2>
            <input class="form-control" type="text" name="uid" placeholder="UserName"><br>
            <input class="form-control" type="password" name="pwd" placeholder="Password"><br>
            <button class="btn btn-success " type="submit" name="submit">Log In</button><br>
            <h3>or</h3>
            <a class="btn btn-dark" href="signup.php">Sign Up</a>
        </form>
    </div>
    <?php

    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill is all fields</p>";
        } else if ($_GET["error"] == "wronglogin") {
            echo '<p>Incorrect login info!</p>';
        }
    }
    ?>
</div>
</body>

</html>