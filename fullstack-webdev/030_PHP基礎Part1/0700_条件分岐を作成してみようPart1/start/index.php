<?php 



$score = 60;
$kesseki = 5;

if($score < 60 || $kesseki >= 5) {
  echo '落単';

}elseif($score > 60 )  {
echo '単位取得' ;
} else  {
  echo 'S';
}
//else(＄score >= 90)


