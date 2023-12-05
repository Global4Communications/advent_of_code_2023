<?php

$calibrationDocument = file_get_contents("day_1a_calibration_input.txt");
$calibrationDocument = trim($calibrationDocument);

$lines = explode("\n", $calibrationDocument);

$sum = 0;

foreach ($lines as $line) {
    $firstDigit = null;
    $lastDigit = null;

    for ($i = 0; $i < strlen($line); $i++) {
        $char = $line[$i];

        if (is_numeric($char)) {
            if ($firstDigit === null) {
                $firstDigit = (int)$char;
            }
            $lastDigit = (int)$char;
        }
    }

    $calibrationValue = $firstDigit * 10 + $lastDigit;
    $sum += $calibrationValue;
}

echo $sum;