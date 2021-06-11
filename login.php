<?php
include_once 'header.php';
?>

<section class="signup-form">
<h2>log In</h2>
<div class="signup-form-form">
<form action="includes/login.inc.php" method="post">
<input type="text" name="uid" placeholder="Username">
<input type="password" name="pwd" placeholder="Password">
<button type="submit" name="submit">Log In</button>
</form>
</div>
<?php

echo '<a href="signup.php">Sign Up</a>';
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill is all fields</p>";
    }
else if ($_GET["error"] == "wronglogin") {
    echo "<p>Incorrect login info!</p>";
}

}
?>
</section>
</body>
</html>