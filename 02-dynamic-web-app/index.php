<?php

require 'functions.php';
require 'Database.php';
// require 'Router.php';

$db = new Database();
$posts = $db->query('select * from posts')->fetchAll(PDO::FETCH_ASSOC);


dd($posts);

// foreach ($posts as $post) {
//     echo "<li>" . $post['title'] . "</li>";
// }
