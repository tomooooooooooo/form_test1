<?php  
$char = 'aAabd1_sscc';
if(preg_match("/\wAa/",$char,$result)) {
  echo '検索成功';
  print_r($result);
  //print_rとは
}else {'検索失敗';
}
?>