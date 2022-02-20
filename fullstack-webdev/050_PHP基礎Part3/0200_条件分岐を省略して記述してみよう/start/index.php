<?php
//条件分岐を省略記述

$arry = [
    'key' => 10,
];
/*
if(isset($arry['key'])) {
  $arry['key'] *=10;
  echo $arry['key'];
}else {
  $arry['key'] = 1 ;

}
*/
//三項演算子
$arry['key}'] = isset($arry['key']) ? $arry['key'] * 10 : 1;
  echo $arry['key'];



