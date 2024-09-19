<?php

require('./functions.php');

$baseURL = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
$header = 'Contact';

require('./views/contact.view.php');
