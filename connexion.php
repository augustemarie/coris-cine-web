<?php

require('__includes/bootstrap.php');

try {

    // page config
    $title = "Connexion";

    if (count($_POST) > 0) {
        // check username
        if (!isset($_POST['username']) || trim($_POST['username']) == '') {
            die('username cannot be empty');
        }
        // check username
        if (!isset($_POST['password']) || trim($_POST['password']) == '') {
            die('password cannot be empty');
        }

        $username = sanitize($_POST['username']);
        $password = sanitize($_POST['password']);

        $auth = User::auth($username, $password);

        if ($auth->status_code != 200) {
            dd($auth);
            die('login failed');
        }

        if (!property_exists($auth->data, 'id')) {
            die('cannot auth this user');
        }

        // check token validity

        $_SESSION['user'] = $auth->data->id;

        if ($auth->data->role == 'ADMIN')
            go('/dashboard/articles.php');
        else
            go('/index.php');
    }

} catch (Exception $e) {

    die($e->getMessage());

}

require(BASE_DIR . '/__templates/public/connexion.php');
