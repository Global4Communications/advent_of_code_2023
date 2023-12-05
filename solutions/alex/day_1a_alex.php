<?php

$input = file_get_contents('./day_1a.txt');
$input = trim($input);
$lines = explode(PHP_EOL, $input);

$result = 0;

foreach ($lines as $line) {
    $lineChars = str_split(trim($line));
    $numericChars = array_filter($lineChars, 'is_numeric');

    $firstChar = reset($numericChars);
    $lastChar = end($numericChars);

    $calibrationValue = $firstChar . $lastChar;
    $result += (int)$calibrationValue;
}

var_dump($result);
