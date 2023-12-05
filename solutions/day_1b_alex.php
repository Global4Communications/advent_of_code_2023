<?php

$input = file_get_contents('../inputs/day_1_alex.txt');
$input = trim($input);
$lines = explode(PHP_EOL, $input);

$replacements = [
    'one' => 'o1e',
    'two' => 't2',
    'three' => 't3e',
    'four' => '4',
    'five' => 'f5e',
    'six' => 's6',
    'seven' => '7n',
    'eight' => 'e8t',
    'nine' => 'n9e'
];

$result = 0;

foreach ($lines as $line) {
    $line = str_replace(array_keys($replacements), array_values($replacements), $line);
    $lineChars = str_split(trim($line));
    $numericChars = array_filter($lineChars, 'is_numeric');

    $firstChar = reset($numericChars);
    $lastChar = end($numericChars);

    $calibrationValue = $firstChar . $lastChar;
    $result += (int)$calibrationValue;
}

var_dump($result);
