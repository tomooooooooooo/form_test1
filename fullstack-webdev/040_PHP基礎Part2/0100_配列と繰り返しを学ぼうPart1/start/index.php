<?php 
$arry = ['taro', 'hanako', 'jiro'];
$arry[1] = 'sachiko';
$arry[] = 'saburo';

for($i = 0; $i < 4; $i++) {
  echo '<div>' , $arry[$i], '</div>';
}
foreach($arry as $v) {
  echo '<div>' , $v, '</div>';
}
?>

