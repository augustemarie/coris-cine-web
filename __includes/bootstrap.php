<?php

define('BASE_DIR', __DIR__ . './..');

session_start();

# call all required files
require(BASE_DIR . '/__includes/functions.php');

# call all models
require(BASE_DIR . '/__includes/api/Client.php');
require(BASE_DIR . '/__includes/api/User.php');
require(BASE_DIR . '/__includes/api/Type.php');
require(BASE_DIR . '/__includes/api/Category.php');
require(BASE_DIR . '/__includes/api/Post.php');


