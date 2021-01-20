<?php
    // PHP version
    echo "Wersja: ".PHP_VERSION, '<br>';

    // interpolation
    // echo phpinfo();

    $power = 2**10;
    echo $power, '<br>';

    echo 'a', 'b'; // a then... bb
    echo 'a'.'b'; // a and b => print ab

    // operatory bitowe
    // and &, or |, or ^, not ~, <<, >>
    $x = 0b1010;
    echo '<br>',$x,'<br>';

    $x = $x << 2; // 101000(2)

    $x = 1;
    $y = '1';

    if($x == $y){
        echo "$x jest równe $y";
    }
    else {
        echo "$x nie jest równe $y";
    }

    echo '<br><br>';

    if($x === $y){
        echo "$x jest równe $y";
    }
    else {
        echo "$x nie jest równe $y";
    }

    // Typeof
    echo "<br><hr>";
    echo gettype($x);

    // Spaceship operator
    echo $x <=> $y;

    $x = 1;

    $x++;
    print $x;

    ++$x;
    print $x;

    echo "<br>";


    // bool, int, float, string, array, object, unset
    $test1 = '123abc';
    $test2 = 1;
    $test3 = 200.1231231321;

    echo (int)$test1, "<br>";

    echo (bool)$test2, "<br>";

    echo (int)$test3, "<br>";


    // max int val
    echo "<br>", PHP_INT_SIZE;


    $x = 1;
    // is_int(), is_float(), is_null().....
    echo is_null($x);

    // operator generowania błędów
    $w;
    echo @gettype($w);
?>
