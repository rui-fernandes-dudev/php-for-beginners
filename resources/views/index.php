<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Arrays</title>
        <style>
            body{
                display: grid;
                place-items: center;
                height: 100vh;
                margin: 0;
                font-family: sans-serif;
            }
        </style>
    </head>
    <body>
        <h1>Recommended Books</h1>

        <?php
            $books = [
                "Do Androids Dream of Electric Sheep",
                "The Langoliers",
                "Hail Mary"
            ];
        ?>

        <ul>
            <?php foreach ($books as $book) : ?>
                <li><?= $book ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
