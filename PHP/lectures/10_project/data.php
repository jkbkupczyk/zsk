<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Ilość elementów</title>
</head>

<body>
    <h4>Ilość elementów</h4>
    <?php
    if (isset($_POST['button'])) {
        echo "<h4>Lista</h4>";
        echo "<ul>";
        for ($i = 1; $i < count($_POST); $i++) {
            echo "<li>" . $_POST["element$i"] . "</li>";
        }
        echo "</ul>";
    } else if (!empty($_POST['count'])) {
        echo "<h4>Ilość elementów</h4>";
    ?>
        <form method="post">
            <?php
            for ($i = 1; $i <= $_POST['count']; $i++) {
                echo "<input type=\"text\" name=\"element$i\" placeholder=\"element $i\"><br><br>";
            }
            ?>
            <input type="submit" value="Wyświetl listę" name="button">
        </form>
    <?php
    } else {
        header('location: ./');
    }



    ?>


</body>

</html>