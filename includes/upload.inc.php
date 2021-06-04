<?php

if (isset($_POST['submit'])) {

    $newfilename = $_POST['filename'];

    if (empty($_POST['filename'])) {
        $newfilename = 'gallery';
    } else {

        $newfilename = strtolower(str_replace(" ", "-", $newfilename));
    }

    $imgtitle = $_POST['title'];
    $file = $_FILES['file'];

    $filename = $file["name"];
    $filetype = $file["type"];
    $filetempname = $file["tmp_name"];
    $fileerror = $file["error"];
    $filesize = $file["size"];

    $fileext = explode(".", $filename);
    $fileactualext = strtolower(end($fileext));


    $allowed = array("jpg", "jpeg", "png");

    if (in_array($fileactualext, $allowed)) {
        if ($fileerror === 0) {
            if ($filesize < 2000000) {
                $imgfullname = $newfilename . "." . uniqid("", true) . "." . $fileactualext;
                $filedestination = "../images/" . $imgfullname;

                include_once "dbh.php";

                if (empty($imgtitle) || empty($file)) {
                    header("Location: ../index.php?upload=empty");
                    exit();
                } else {
                    $sql = "SELECT * FROM gallery;";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        echo "SQL statement Filed!!";
                    } else {
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        $rowcount = mysqli_num_rows($result);
                        $setimgorder = $rowcount + 1;

                        $sql = "INSERT INTO gallery (titleGallery, imgFullNameGallery, orderGallery) VALUES (?, ?, ?);";
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            echo "SQL statement Filed!!";
                        } else {
                            mysqli_stmt_bind_param($stmt, "sss", $imgtitle, $imgfullname, $setimgorder);
                            mysqli_stmt_execute($stmt);

                            move_uploaded_file($filetempname, $filedestination);

                            header("Location: ../index.php?upload=success");
                        }
                    }
                }
            } 
            else 
            {
                echo "File size too big!!";
            }
        } 
        else 
        {
            echo "Error Occured!!";
        }
    } 
    else 
    {
        echo "Only image file types are allowed.";
        exit();
    }
}
