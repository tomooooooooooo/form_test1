<?php
//名前空間
//namespace lib;

/**if(!defined('TAX_RATE')) {
    define('TAX_RATE', 0.1);
}

const TAX_RATE = 0.1;
    
function with_tax($base_price, $tax_rate = TAX_RATE) {
    $sum_price = $base_price + ($base_price * $tax_rate);
    $sum_price = round($sum_price);
    return $sum_price;
}
$price = with_tax(1000, 0.08);
echo $price;
*/
require_once 'lib.php';

$price = \lib\with_tax(1000, 0.08);
//echo $price;
echo \lib\TAX_RATE;