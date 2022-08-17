<?php

require('../__includes/bootstrap.php');

// page config
$title = "Categories";


if (!isset($_SESSION['user'])) {
   go('/connexion.php');
}

$res = Category::all();

if ($res->status_code != 200) {
    die("error status code");
}

$categories = $res->data;

$res = Type::all();

if ($res->status_code != 200) {
    die("error status code");
}

$types = $res->data;

if (count($_POST) > 0) {
    if (isset($_POST['action'])) unset($_POST['action']);
    Category::save($_POST);
    go($_SERVER['REQUEST_URI']);
}



require(BASE_DIR . '/__templates/dashboard/categories.php');
