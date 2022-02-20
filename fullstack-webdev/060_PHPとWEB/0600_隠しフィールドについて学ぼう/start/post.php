<?php 
//var_dump($_POST);
 
 
 $num = $_POST['num'];
 $num = $_POST['price'];
 $num = $_POST['discount'];
 $sum = $num * $price;
 $sum -= $sum * $price / 100;
 echo '合計:', round($sum) , '  円';

 
 ?>