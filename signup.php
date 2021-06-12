<?php
include_once 'header.php';
?>

<link rel="stylesheet" href="css/login.css">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" style="font-family: Montserrat;" href="index.php">Home</a>
</nav>

<section class="signup-form">
    <h2>Sign Up</h2>
    <div class="signup-form-form">
        <form class="form form-control" action="includes/signup.inc.php" method="post">
            <input class="form-control" type="text" name="name" placeholder="Full Name">
            <input class="form-control" type="text" name="email" placeholder="Email">
            <input class="form-control" type="text" name="uid" placeholder="Username">
            <input class="form-control" type="password" name="pwd" placeholder="Password">
            <input class="form-control" type="password" name="pwdrepeat" placeholder="Repeat Password"><br>
            <button class="btn btn-dark" type="submit" name="submit">Sign Up</button>
        </form>
    </div>
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill is all fields</p>";
        } else if ($_GET["error"] == "invaliduid") {
            echo "<p>Choose a proper username!</p>";
        } else if ($_GET["error"] == "invalidemail") {
            echo "<p>Choose a proper email!</p>";
        } else if ($_GET["error"] == "passworddontmatch") {
            echo "<p>Password doesn't match!</p>";
        } else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, try again!</p>";
        } else if ($_GET["error"] == "usernametaken") {
            echo "<p>Username already taken!</p>";
        } else if ($_GET["error"] == "none") {
            echo "<p>You have signed up!</p>";
            header("location: login.php");
        }
    }
    ?>
</section>

</div>
</body>

</html>