<?php

$fruits = array("cytryna", "pomarancz", "banan", "melon");

sort($fruits);

foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}
