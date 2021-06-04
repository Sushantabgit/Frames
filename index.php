<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frames</title>
    <!--Bootstrap-Include-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <!--Google-Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!--Css-->
    <link rel="stylesheet" href="css/styles.css">


</head>

<body>
    <!--NavBar-->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" style="font-family: Montserrat;" href="index.htm">Frames</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.htm">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.htm">About</a>
                </li>
                <li class="nav-item">
                    <button id="upload" class="btn btn-outline-dark">Login</button>
                </li>
            </ul>
        </div>
    </nav>

    <!--Heading-->

    <div id="heading">
        <h1>The best place to show your Photographic skills.</h1>
    </div>
    <!--content-->

    <div class="row preview-sec">
        <div class="col-lg-3 col-md-6 img-hold">
            <a href="">
                <div class="img-thumbnail preview-img">
                </div>
                <p>Title</p>
            </a>

        </div>

        <div class="col-lg-3 col-md-6 img-hold">
            <a href="">
                <div class="img-thumbnail preview-img">
                </div>
                <p>Title</p>
            </a>

        </div>

        <div class="col-lg-3 col-md-6 img-hold">
            <a href="">
                <div class="img-thumbnail preview-img">
                </div>
                <p>Title</p>
            </a>

        </div>

        <div class="col-lg-3 col-md-6 img-hold">
            <a href="">
                <div class="img-thumbnail preview-img">
                </div>
                <p>Title</p>
            </a>

        </div>

    </div>

    <!--Upload-->

    <div class="upload">
        <form action="includes/upload.inc.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="filename" placeholder="filename">

            <input type="text" name="title" placeholder="imgtitle">

            <input type="file" name="file">
            <button type="submit" name="submit">upload</button>

        </form>

    </div>

    <!--Javacript-->
    <script src="css/script.js"></script>

</body>

</html>