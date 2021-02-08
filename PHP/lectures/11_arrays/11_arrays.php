<?php

$colors = array('czerwony', 'zelony', 'niebieski', 'czarny');

echo 'Rozmiar tablicy: ' . count($colors), '<br>';

for ($i = 0; $i < count($colors); $i++) {
    echo 'Kolor ' . $i . ' ', $colors[$i], '<br>';
}

$data = array(
    'name' => 'Paweł',
    'surname' => 'Nowak',
    'age' => 20
);

$userData =  <<<LAB
    Imię: $data[name] <br>
    Nazwisko: {$data["surname"]} <br>
LAB;

echo $userData;

echo "<br><br>";

// foreach ($data as $key => $value) {
//     echo "key=" . $key . ", value=" . $value;
//     echo "<br><br>";
// }

$students = array(
    array('krystyna', 'nowak', 30, 'poznan'),
    array('Anna'),
    array('anna', 'Kowalska', 55),
);

for ($i = 0; $i < count($students); $i++) {
    for ($j = 0; $j < count($students[$i]); $j++) {
        echo $students[$i][$j], '<br>';
    }
    echo '<br>';
}
