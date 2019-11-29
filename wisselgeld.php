<?php

$input = $argv[1];
$a = array(50, 20, 10, 5, 2, 1, 0.5, 0.2, 0.1, 0.05, 0.02, 0.01);

foreach ($a as $value) {
    if ($input >= 1) {
        $b = floor($input / $value);
        $input = $input - ($value * $b);
        echo $b . " x " . $value . " Euro" . "\n";
    } elseif ($input >= 0.01)  {
        $b = floor($input / $value);
        $input = $input - ($value * $b);
        echo $b . " x " . $value . " Cent" . "\n";
    }
}