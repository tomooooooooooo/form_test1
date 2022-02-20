<?php

/*
$numbers = [1,2,3,4];
$numbers2 = [1,2,3,];

$sum = 0;
foreach($numbers as $num) {
    $sum = $sum +$num;

}
echo "合計 : {$sum}<br>";

$sum2 = 0;
foreach($numbers2 as $num2) {
    $sum2 = $sum2 +$num2;

}
echo "合計 : {$sum2}";
*/
//関数を使う

$numbers = [1,2,3,4];
$numbers2 = [1,2,3,];


function sum($numbers) {//引数
$sum = 0;
foreach($numbers as $num) {
    $sum = $sum +$num;

}
echo "合計 : {$sum}<br>";}


sum($numbers);
sum($numbers2);


