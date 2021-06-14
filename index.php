<?php
include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frames</title>
    
    <!--Css-->

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
                <li>
                    <a class="nav-link" href="mailto:sushantkumarab@gmail.com">Contact</a>
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

    <!--Heading-->

    <div id="heading">
        <h1>The best place to show your Photographic skills.</h1>
    </div>

    <!--Upload-->

    <?php

    if (isset($_SESSION['useruid'])) {
        echo '<div class="upload">
    <form action="includes/upload.inc.php" method="POST" enctype="multipart/form-data">
        <input class="form-control" type="text" name="uname" placeholder="User Name" required>

        <input class="form-control" type="text" name="title" placeholder="Title of Image" required>

        <input class="form-control" type="file" name="file" required><br>
        <button class="btn btn-success" type="submit" name="submit">Upload</button>

    </form>

</div>';
    }

    ?>

    <!--content-->

    <div class="row preview-sec">
        <?php
        include_once 'includes/dbh.php';

        $sql = "SELECT * FROM gallery ORDER BY idGallery DESC";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo 'SQL STATEMENT FAILED!';
        } else {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="col-lg-4 col-md-6 img-hold">
            <a href= images/' . $row["imgFullNameGallery"] . '>
                <img class="preview-img" src="images/' . $row["imgFullNameGallery"] . '" alt="' . $row["titleGallery"] . '">
                <p>' . $row["titleGallery"] . '</p>
            </a>

        </div>';
            }
        }

        ?>
    </div>

</body>

</html>