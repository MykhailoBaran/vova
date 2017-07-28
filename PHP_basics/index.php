<?php
//Перше завдання
$text1='Hello';
$text2=' World';
echo $text1 . $text2 . "\n";

// Друге завдання
$var = "hello";
echo "{$var[0]} $var[1] {$var[strlen($var) - 1]}\n";

// Третє завдання
function check($a)
{
    if ($a > 0 && $a < 5) {
        echo "Вірно\n";
    } else {
        echo "Невірно\n";
    }
}
check(-5);
check(0);
check(-3);
check(2);

// Четверте завдання
$min = random_int(0, 59);
echo $min;

if ($min >= 0 && $min < 15){
    echo "Перша";
} elseif ($min >= 15 && $min < 30){
    echo "Друга";
} elseif ($min >= 30 && $min < 45){
    echo "Третя";
} elseif ($min >= 45 && $min < 60){
    echo "Четверта";
}
echo "\n";

// П'яте завдання
$year = 2021;

if ($year % 4 === 0 && $year % 100 !== 0){
    echo "Рік високосний";
} else {
    echo "Рік не високосний";
}
echo "\n";

// Шосте завдання
$num = 385934;
checkSum($num);
echo "\n";

function checkSum($number){
    $first = floor($number / 1000);
    $second = $number % 1000;

    if (getSum($first) === getSum($second)){
        echo "Так";
    } else {
        echo "Ні";
    }
}
function getSum($numb){
    $sum = 0;
    while ($numb != 0){
        $sum += $numb % 10;
        $numb = floor($numb / 10);
    }
    return $sum;
}

// Бонусне завдання
compareSum("AD", "BC");
compareSum("AD","DD" );
compareSum("gf","FG" );
compareSum("zz1","");
compareSum("ZzZz", "ffPFF" );
compareSum("kl", "lz");
compareSum(null, "");

function compareSum($str1, $str2){
    $str1 = $str1 ? strtoupper($str1) : "";
    $str2 = $str2 ? strtoupper($str2) : "";

    if (getStrSum($str1) === getStrSum($str2)){
        echo "Equal\n";
    } else {
        echo "Not equal\n";
    }
}
function getStrSum(string $str) {
    for ($i = 0, $sum = 0; $i < strlen($str); $i++){
        $char = $str[$i];
        if (!($char >= "A" && $char <= "Z")){
            $sum = 0;
            break;
        }
        $sum += ord($char);
    }
    return $sum;
}
?>