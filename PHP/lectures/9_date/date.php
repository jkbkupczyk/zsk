<?php

    date_default_timezone_set('UTC');

    //date obj
    echo date('Y-m-d'), "<br>"; // 16.11.2020
    echo date('j M Y'), "<br>"; // 16 nov 2020
    
    echo date('G:i:s'), "<br>"; // 10:05:12
    echo date('H:I:S'), "<br>"; // 10:05:12
    echo date('H:i:sa'), "<br>"; // 10:06:00am
    echo date('Y-m-d G:i:s'), "<br>"; // 2020-11-16 10:07:10
    
    echo date("w"), "<br>"; // 1 - monday, 0 - sunday

    //GetDate - get assoc array,
    $date = getdate();
    // print_r($date);
    
    $day = $date['mday'];
    echo $day, "<br>";

    echo "<br><hr><br>";

    $date = getdate();

    $day = $date['mday'];
    $wday = $date['wday'];
    $month = $date['month'];
    $year = $date['year'];

    $monthEn = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $monthPl = array('Styczeń', 'Luty', 'Marzec', 'Kwiecień', 'Maj', 'Czerwiec', 'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień');

    $dayNum = array(0, 1, 2, 3, 4, 5, 6);
    $dayText = array('Niedziela', 'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota');

    $wday = str_replace($dayNum, $dayText, $wday);
    $month = str_replace($monthEn, $monthPl, $month);

    echo "$day $month $year | $wday";