<?php

require('./functions.php');

$baseURL = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);

$header = 'Homepage';


require('./views/index.view.php');
