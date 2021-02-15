<?php

$tab = array(20, 1, 5, 75, 5, -120, 100);

function t($tab)
{
    foreach($tab as $val){
        echo "$val ";
    }
    echo "<br>";
}

t($tab);

sort($tab);
t($tab);

rsort($tab);
t($tab);

$names = array('Katarzyna', 'anna', 'zbigniew', 'Mateusz', 'TEST');
t($names);

sort($names);
t($names);

function replaceToLowerCase(&$tab)
{
    foreach($tab as $key => $val){
        $replace = strtolower($val);
        $tab[$key] = $replace;
        echo "$replace ";
    }
}

sort($names);
t($names);

replaceToLowerCase($names);
echo "<br>";
sort($names);
t($names);

$tabAssoc = array(
    'name' => 'Jakub',
    'surname' => 'Kupczyk',
    'age' => 20,
    'nick' => 'KuKaa'
);

t($tabAssoc);

asort($tabAssoc);
t($tabAssoc);

arsort($tabAssoc);
t($tabAssoc);

ksort($tabAssoc);
t($tabAssoc);

krsort($tabAssoc);
t($tabAssoc);



