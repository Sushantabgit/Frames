<?php
    $filename = $_GET['file'];
    $path = 'images/' . $filename;
    header("Content-type: image/jpeg");
    header("Content-Dispositon: attachment; filename = $filename");
    readfile($path);
?>