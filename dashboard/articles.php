<?php

require('../__includes/bootstrap.php');

// page config
$title = "Articles";


if (!isset($_SESSION['user'])) {
    go('/connexion.php');
}

$res = Post::all();

if ($res->status_code != 200) {
    die("error status code");
}

$articles = $res->data;

$res = Category::all();

if ($res->status_code != 200) {
    die("error status code");
}

$categories = $res->data;


if (count($_POST) > 0) {
    if (isset($_POST['action'])) unset($_POST['action']);
    $_POST['user_id'] = $_SESSION['user'];
    Post::save($_POST);
    go($_SERVER['REQUEST_URI']);
}



require(BASE_DIR . '/__templates/dashboard/articles.php');
