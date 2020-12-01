<?php
$puzzle_input =file("puzzle_input.txt", FILE_IGNORE_NEW_LINES);
for($i = 0; $i < count($puzzle_input); $i++) {
    for ($j = 0; $j < count($puzzle_input); $j++) {
        if($i + 1 + $j >= count($puzzle_input)) {
            continue;
        } else {
            for($k = 0; $k < count($puzzle_input); $k++) {
                if ($i + 1 + $j + $k >= count($puzzle_input)) {
                    continue;
                } else {
                    if ($puzzle_input[$i] + $puzzle_input[$i + 1 + $j] + $puzzle_input[$i + 1 + $j + $k] === 2020) {
                        echo $puzzle_input[$i] . ", " . $puzzle_input[$i + 1 + $j] . " and " . $puzzle_input[$i + 1 + $j + $k] . " equal 2020\n";
                        echo($puzzle_input[$i] * $puzzle_input[$i + 1 + $j] * $puzzle_input[$i + 1 + $k + $j]);
                    }
                }
            }
        }
    }
}