<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jakub Kupczyk</title>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid black;
            text-align: center;
            padding: 1rem;
        }
    </style>
</head>

<body>

    <div>
        <h2>Zadanie 1, ćw. 1</h2>
        <?php
        require './queries.php';
        zadanie1();
        ?>
    </div>

    <div>
        <h2>Zadanie 1, ćw. 2</h2>
        <table>
            <?php
            zadanie2();
            ?>
        </table>
    </div>

    <div>
        <h2>Zadanie 1, ćw. 3</h2>
        <?php
        zadanie3();
        ?>
    </div>

</body>

</html>