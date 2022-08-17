<?php

require('../__includes/bootstrap.php');


$_SESSION['user'] = null;
unset($_SESSION['user']);

go('index.php');


