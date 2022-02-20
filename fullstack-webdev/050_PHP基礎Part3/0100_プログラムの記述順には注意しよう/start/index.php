
<?php
/**function counter($step = 1) {
    global $num;
    $num += $step;
    echo $num;
    return $num;
}
function warikan($total, $ninzu){

  if($ninzu <= 0){
  return;
}

  $result = $total/$ninzu;
  echo "{$total}円を{$ninzu}で割ると一人{$result}";
　}


  warikan(2500,5);
  warikan(1200,0);
  warikan(3630,2); */
  function counter($step = 1) {
    global $num;
    $num += $step;
    echo $num;
    return $num;
  }
  counter(2);
  $num = 0;
  


  ?>