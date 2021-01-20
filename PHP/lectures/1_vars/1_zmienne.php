<!DOCTYPE html>
<html>
    <head>
        <title>Zmienne</title>
    </head>

    <body>
        <?php

        $name = "Anna";
        $surname = "Nowak";

        //typy danych
        //boolean

        print "Imię: $name"."<BR>Nazwisko: $surname";


        $bool = false;
        echo $bool; //nie wyświetla

        //type integer
        $bin = 0b1011; // BINARY:11
        $dec = 11; // DECIMAL: 11
        $oct = 011; // OCT: 9
        $hex = 0x11; // HEX: 17

        print "<BR>";

        //Składnia heredoc
        $name = "Janusz";

        $text = <<<LABEL
        <BR>
        heredoc
        <hr>
        LABEL;

        print $text;

        echo <<<L
                Name: $name
                <BR>
                Surname: $surname
                <BR>
            L;

        //składnia nowdoc
        echo <<<'L'
            <hr>
            nowdoc<br>
            Imię: $name
            <br>
            L;

            $city = "Poznań";
            print "Nazwa zmiennej: \$city, wartość: $city";
        ?>
    </body>
</html>