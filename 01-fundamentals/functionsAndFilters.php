<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions and Filters</title>
</head>

<body>
    <?php
    $books = [
        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Philip K. Dick',
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'purchaseUrl' => 'http://example.com'
        ]
    ];

    function filterByAuthor(string $author, array $books)
    {
        foreach ($books as $book) {
            if ($book['author'] === $author) {
                echo "<li>
                        <a href='{$book['purchaseUrl']}'>
                            {$book['name']}
                        </a>
                    </li>";
            }
        }
    }

    ?>

    <ul>
        <?php filterByAuthor('Andy Weir', $books) ?>
    </ul>
</body>

</html>