<?php

require 'functions.php';
// require 'Router.php';

// connect to MySQL database
$dsn = "mysql:host=localhost;port=3306;dbname=demo;charset=utf8mb4";
$pdo = new PDO($dsn, 'root');

$statement = $pdo->prepare('select * from posts');
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}
