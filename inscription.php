<?php

require('__includes/bootstrap.php');

try {

    // page config
    $title = "Inscription";

    if (count($_POST) > 0) {
        // check firstName
        if (!isset($_POST['firstName']) || trim($_POST['firstName']) == '') {
            die('username cannot be empty');
        }
        // check lastName
        if (!isset($_POST['lastName']) || trim($_POST['lastName']) == '') {
            die('password cannot be empty');
        }
        // check email
        if (!isset($_POST['email']) || trim($_POST['email']) == '') {
            die('username cannot be empty');
        }
        // check phoneNumber
        if (!isset($_POST['phoneNumber']) || trim($_POST['phoneNumber']) == '') {
            die('password cannot be empty');
        }
        // check password
        if (!isset($_POST['password']) || trim($_POST['password']) == '') {
            die('password cannot be empty');
        }

        $firstName = sanitize($_POST['firstName']);
        $lastName = sanitize($_POST['lastName']);
        $email = sanitize($_POST['email']);
        $role = 'USERS';
        $phoneNumber = sanitize($_POST['phoneNumber']);
        $password = sanitize($_POST['password']);

        $data = [
            'firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email,
            'role' => $role,
            'phoneNumber' => $phoneNumber,
            'password' => $password
        ];

        $save = User::save($data);

        if ($save->status_code != 201) {
            dd($save);
            die('register failed');
        }

        go('/connexion.php');
    }

} catch (Exception $e) {

    die($e->getMessage());

}

require(BASE_DIR . '/__templates/public/inscription.php');
