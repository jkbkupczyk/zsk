<?php
    $text = <<<L
        zsk - Zespół
        Szkół
        Komunikacji<br>
    L;


    echo $text;
    echo nl2br($text);

    $name = "JaNuSz";

    //to lower and upper case
    echo "<br>To lower: ";
    echo strtolower($name), "<br>";

    echo "To upper: ";
    echo strtoupper($name);

    //only first letter
    $name2 = "<br><br>januSz KoWaLsKi<br>";
    echo ucfirst($name2);

    echo "<br><br>Uppercase words: ", ucwords("janusz");

    $name3 = <<<T
        janusz
    T;

    echo "<br><br>Heredoc uppercase: ", ucfirst($name3);

    // Lorem ipsum
    $lorem = <<<LOREM
    <br><br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
         Distinctio tempora molestiae assumenda adipisci eveniet non, ex veritatis,
         at similique quaerat a sit enim autem recusandae aliquid saepe ipsum reiciendis magnam.
    LOREM;

    $col = wordwrap($lorem, 40, "<hr>");
    echo $col;

    //clear buffer

    ob_clean();

    //del white spaces
    $nameb = "Łukasz";
    $name = "  Łukasz  ";

    echo "Dlugosc Łukasza: ", strlen($nameb), "<br>";
    echo "Dlugosc Łukasza z spacjami: ", strlen($nameb), "<br>";

    echo "Dlugosc Łukasza (z polskimi znakami): ", mb_strlen($nameb), "<br>";

    echo mb_strlen(ltrim($name));
    echo mb_strlen(rtrim($name));
    echo mb_strlen(trim($name));

    echo "<br><br>";
    
    $address = "Poznan, ul. Polna, tel 555-555-555";

    $search = strstr($address, "tel", true);
    echo $search, "<br>";

    $search = strstr($address, "tel", true);
    echo $search, "<br>";

    $search = stristr($address, "Tel", true);
    echo $search, "<br>";

    echo strstr("ZSK@gmail.com", "@");

    $imie = "Janusz";
    echo "<br>", substr($imie, 1); // anusz
    echo "<br>", substr($imie, 1, 3); // anu


    echo "<br><br>Domena: ", substr(substr("ZSK@gmail.com", '@'), 1);
    
    $replace = str_replace('%imie%', "Anna", "Masz na imie: %imie%");
    echo $replace;

    $login = "bączek";
    $cenzura = array('ą', 'ć', 'ę', 'ń', 'ó', 'ś', 'ż', 'ź');
    $replace = array('a', 'c', 'e', 'n', 'o', 's', 'z', 'z');

    $correct = str_replace($cenzura, $replace, $login);

    echo "<br>Login: ", $login, "<br>Poprawny login: ", $correct;

?>

