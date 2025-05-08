<?php

function show($stuff)
{
    echo '<pre>';
    printf($stuff);
    echo '</pre>';
}



function splitURL()
{
    $URL = $_GET['url'] ?? 'Home';
    $URL = explode("/", $URL);
    return $URL;
}

function loadController()
{
    $URL = splitURL();

    $filename = "./" . ucfirst($URL[0]) . ".php";
    if (file_exists($filename)) {
        require $filename;
    } else {
        $filename = "./_404.php";
        require $filename;
    }
}

loadController();
