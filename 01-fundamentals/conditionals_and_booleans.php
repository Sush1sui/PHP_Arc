<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional and Booleans</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <?php
    $name = 'Sush1sui';
    $showName = true;

    if ($showName) {
        $message = "You are awesome {$name}";
    } else {
        $message = "You are awesome";
    }

    ?>
    <h1><?= $message ?> </h1>
</body>

</html>