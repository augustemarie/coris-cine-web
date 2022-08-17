<?php

require('../__includes/bootstrap.php');

// page config
$title = "Utilisateurs";


if (!isset($_SESSION['user'])) {
    go('/connexion.php');
}

$res = User::all();

if ($res->status_code != 200) {
    die("error status code");
}

$users = $res->data;


require(BASE_DIR . '/__templates/dashboard/utilisateurs.php');
