<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="utf-8">
    <title>Organizer</title>

    <link rel="stylesheet" href="styl6.css">
</head>

<body>
    <?php
    $serwer = "localhost";
    $user = "root";
    $pass = "";
    $database = "egzamin6";

    $conn = mysqli_connect($serwer, $user, $pass, $database);

    $qry1 = "SELECT dataZadania, miesiac, wpis FROM zadania WHERE miesiac LIKE 'sierpien'";
    $qry2 = "SELECT miesiac, rok FROM zadania WHERE dataZadania = '2020-08-01'";
    $qry3 = "SELECT DISTINCT wpis FROM zadania WHERE wpis LIKE '%o'";
    $qry4 = "UPDATE zadania SET wpis = 'Wycieczka: Karkonosze' WHERE dataZadania = '2020-08-27'";
    ?>

    <nav>
        <div class="pierwszy">
            <h2>MÓJ ORGANIZER</h2>
        </div>
        <div class="drugi">
            <form method="POST" action="organizer.php">
                <label for="inp">Wpis wydarzenia</label>
                <input type="text" id="inp" name="inputWpis">
                <button>ZAPISZ</button>
            </form>
        </div>
        <div class="trzeci">
            <img src="logo2.png" alt="Mój organizer">
        </div>
    </nav>

    <main>
        <?php
        // Skrypt od danych z formularza
        $wpis = "'" . $_POST['inputWpis'] . "'";
        $query = "UPDATE zadania SET wpis = " . $wpis . " WHERE dataZadania = '2020-08-27'";
        mysqli_query($conn, $query);

        // Skrypt 1
        $result = mysqli_query($conn, $qry1);

        echo "<section>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div>" . "<p>" . $row['dataZadania'] . ", " . $row['miesiac'] . "</p>" .  "<br>" . $row['wpis'] . "</div>";
        }
        echo "</section>";

        ?>
    </main>

    <footer>
        <?php
        // Skrypt 2
        $res = mysqli_query($conn, $qry2);
        $data = mysqli_fetch_assoc($res);

        echo "<h1>" . $data['miesiac'] . ", " . $data['rok'] . "</h1>";

        mysqli_close($conn);
        ?>
        <p>Stronę wykonał <strong>Jakub Kupczyk</strong></p>
    </footer>

</body>

</html>