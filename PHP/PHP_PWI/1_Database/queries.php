<?php

require_once './Database.php';

define('S', '<strong>');
define('SClose', '</strong>');

function zadanie1()
{
    $conn = connect();

    $qry = "SELECT p.ID_PRAC, p.NAZWISKO, p.ID_SZEFA, p2.NAZWISKO FROM pracownicy p, pracownicy p2 WHERE p.ID_SZEFA = p2.ID_PRAC";
    $result = mysqli_query($conn, $qry);

    echo "<ol>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>" . 'id_prac: ' . S . $row['ID_PRAC'] . SClose . ', nazwisko: ' . S . $row['NAZWISKO'] . SClose . ', id_szefa: ' . S . $row['ID_SZEFA'] . SClose . ", nazwisko: " . S .  $row['NAZWISKO'] . SClose . "</li>";
    }
    echo "</ol>";

    mysqli_close($conn);
}

function zadanie2()
{
    $conn = connect();

    $qry = "SELECT p.ID_PRAC, p.NAZWISKO, COALESCE (p.PLACA_POD, 0) + COALESCE (p.PLACA_DOD, 0) as PLACA, p.ZATRUDNIONY FROM pracownicy p";
    $result = mysqli_query($conn, $qry);

    echo <<< TABLE_HEADER
        <tr>
            <th>identyfikator</th>
            <th>nazwisko</th>
            <th>płaca</th>
            <th>zatrudniony</th>
        </tr>
    TABLE_HEADER;

    while ($row = mysqli_fetch_assoc($result)) {
        echo <<< TABLE_CONTENT
            <tr>
                <td>{$row["ID_PRAC"]}</td>
                <td>{$row["NAZWISKO"]}</td>
                <td>{$row["PLACA"]}</td>
                <td>{$row["ZATRUDNIONY"]}</td>
            </tr>
        TABLE_CONTENT;
    }

    mysqli_close($conn);
}

function zadanie3()
{
    $host_name = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($host_name, $username, $password);

    // Create DB query

    $qryCreateDB = "CREATE DATABASE studia DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
    mysqli_query($conn, $qryCreateDB);

    // Create Table query
    mysqli_select_db($conn, 'studia');

    $qryCreateTable =
        " CREATE TABLE studenci (
            id_s INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            imie VARCHAR(45) NOT NULL,
            nazwisko VARCHAR(65) NOT NULL,
            ulica VARCHAR(100) NOT NULL,
            rok_urodzenia DATE
        )";

    mysqli_query($conn, $qryCreateTable);

    // Create reacord query

    $qryCreateRecord =
        "INSERT INTO studenci (imie, nazwisko, ulica, rok_urodzenia) VALUES 
            ('Jakub', 'Kupczyk', 'Północna', 2001-06-01),
            ('Anna', 'Nowak', 'Testowa', 1999-01-01)
        ";

    mysqli_query($conn, $qryCreateRecord);

    // SELECT query

    $qry = "SELECT * FROM studenci";

    $result = mysqli_query($conn, $qry);

    echo "<ul>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>" . $row['imie'] . ' ' .  $row['nazwisko'] . ' ' .  $row['ulica'] . ' ' .  $row['rok_urodzenia'] . "</li>";
    }
    echo "</ul>";

    mysqli_close($conn);
}
