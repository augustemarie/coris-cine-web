<?php

require('__includes/bootstrap.php');

// page config
$title = "Accueil";


$res = Type::all();

if ($res->status_code != 200) {
    die("error status code");
}

$types = $res->data;

$res = Category::all();

if ($res->status_code != 200) {
    die("error status code");
}

$categories = $res->data;

$res = Post::all();

if ($res->status_code != 200) {
    die("error status code");
}

$articles = $res->data;


require(BASE_DIR . '/__templates/public/index.php');
