<?php

function randomString($len, $upperCase = false){

    $case = $upperCase ? 64 : 97;
    $result = "";
    for ($iter = 0; $iter <= $len; $iter++){
        $result .= chr(random_int($case, $case + 25));
    }
    return $result;
}