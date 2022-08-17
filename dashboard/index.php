<?php

require('../__includes/bootstrap.php');

if (!isset($_SESSION['user']))
    go('/connexion.php');
else 
	go('/dashboard/articles.php');

