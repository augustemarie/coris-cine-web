<?php

require('__includes/bootstrap.php');

// page config
$title = "Articles";


$res = Post::get($_GET['id']);

if ($res->status_code != 200) {
    die("error status code");
}

$article = $res->data;


require(BASE_DIR . '/__templates/public/acticle.php');
