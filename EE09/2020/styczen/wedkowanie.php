<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Klub wędkowania</title>
    <link rel="stylesheet" href="styl2.css">
</head>

<body>

    <nav>
        <h2>Wędkuj z nami!</h2>
    </nav>

    <section>
        <div class="lewy">
            <img src="assets/ryba2.jpg" alt="Szczupak" width="500">
        </div>

        <div class="prawy">
            <h3>Ryby spokojnego żeru (białe)</h3>
            <?php
            // Skrpyt 1
            // SELECT r.id, r.nazwa, r.wystepowanie FROM Ryby r WHERE r.styl_zycia = 2
            $serwer = "localhost";
            $user = "root";
            $pass = "";
            $database = "wedkowanie2";

            $conn = mysqli_connect($serwer, $user, $pass, $database);

            $qry = "SELECT r.id, r.nazwa, r.wystepowanie FROM Ryby r WHERE r.styl_zycia = 2";

            $result = mysqli_query($conn, $qry);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<p>" . $row['id'] . ", " . $row['nazwa'] . ", występuje w: " . $row['wystepowanie'] . "</p>";
            }

            mysqli_close($conn);
            ?>

            <ol>
                <li><a href="https://wedkuje.pl" target="_blank">Odwiedź także</a></li>
                <li><a href="https://pzw.org.pl" target=_blank>Polski związek Wędkarski</a></li>
            </ol>
        </div>
    </section>

    <footer>Stronę wykonał <strong>Jakub Kupczyk</strong></footer>

</body>

</html>