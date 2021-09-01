<?php
    include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Image</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
      <!--NavBar-->

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" style="font-family: Montserrat;" href="index.php">Frames</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.htm">About</a>
                </li>

                <?php
                if (isset($_SESSION["useruid"])) {
                    echo '<li class="nav-item">
                    <a href="includes/logout.inc.php" ><button class="btn btn-outline-dark">Sign Out</button></a>
                </li>';
                } else {
                    echo '<li class="nav-item">
                    <a href="login.php" ><button class="btn btn-outline-dark">Login</button></a>
                </li>';
                }
                ?>
            </ul>
        </div>
    </nav>




    <?php
        $vname = $_GET['file'];

        echo '<div style = "margin:auto; width: 90%; text-align:center; padding:10px;" >
            <img style="border-radius: 25px ;" class="preview-img" src="images/' . $vname . '">
        </div>
        <div class="d-grid gap-2" style = "padding-left: 10%; padding-right:10%; padding-bottom: 5%;">
            <a class = "d-grid gap-2" href = "download.php?file='.$vname.'" download><button class="btn btn-success" type="button">Download</button></a>
            <a class = "d-grid gap-2" href =" index.php"><button class="btn btn-dark" type="button">Back</button></a>
        </div>';
?>


    
</body>
</html>