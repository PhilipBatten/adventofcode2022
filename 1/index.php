<?php

$lines = file('input.txt', FILE_IGNORE_NEW_LINES);

$elves = [];

$pos = 1;
foreach ($lines as $calaries) {
    if ($calaries === '') {
        $pos++;
    }
    if (!array_key_exists($pos, $elves)) {
        $elves[$pos] = 0;
    }
    $elves[$pos] += (int)$calaries;
}

$max = max($elves);
$pos1 = array_keys($elves, max($elves))[0];
unset($elves[$pos1]);

$max2 = max($elves);
$pos2 = array_keys($elves, max($elves))[0];
unset($elves[$pos2]);

$max3 = max($elves);
$pos3 = array_keys($elves, max($elves))[0];

print_r($max+$max2+$max3);
exit;

