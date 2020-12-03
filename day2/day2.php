<?php
$puzzle_input = file("puzzle_input.txt", FILE_IGNORE_NEW_LINES);
$validPasswords = 0;
    foreach ($puzzle_input as $item) {
        $limiter = substr($item, 0 , strpos($item, " "));
        $quantifiers = explode("-", $limiter);
        $quantifier1 = $quantifiers[0];
        $quantifier2 = $quantifiers[1];
        $searchCharacter = substr($item, strpos($item, " ") + 1, 1);
        $searchString = substr($item, strpos($item, ": ") + 2);
        if (substr_count($searchString, $searchCharacter) >= $quantifier1 && substr_count($searchString, $searchCharacter) <= $quantifier2) {
            $validPasswords += 1;
        }



    }
echo $validPasswords;