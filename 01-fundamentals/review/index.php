<?php

$business = [
    'name' => 'Laracasts',
    'cost' => 15,
    'categories' => [
        'Testing',
        'PHP',
        'JavaScript'
    ]
];

if ($business['cost'] > 99) {
    echo 'Not interested';
}

foreach ($business['categories'] as $category) {
    echo $category;
}

function register($user)
{
    // Create the user record in the db
    // Log them in
    // Send a welcome email
    // redirect to their new dashboard
}

require('index.view.php');
