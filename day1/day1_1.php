<?php
$puzzle_input =file("puzzle_input.txt", FILE_IGNORE_NEW_LINES);
for($i = 0; $i < count($puzzle_input); $i++) {
    for ($j = 0; $j < count($puzzle_input); $j++) {
        if($i + 1 + $j >= count($puzzle_input)) {
            break;
        } else {
            if ($puzzle_input[$i] + $puzzle_input[$i + 1 + $j] === 2020) {
                echo $puzzle_input[$i] . " and " . $puzzle_input[$i + 1 + $j] . " equal 2020" . PHP_EOL;
                echo($puzzle_input[$i] * $puzzle_input[$i + 1 + $j]);
            }
        }
    }
}