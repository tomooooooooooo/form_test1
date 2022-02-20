<?php
/**
 * SessionとCookieの理解度チェック
 * 
 * index.phpに訪問するたびに訪問回数が
 * １ずつ増える処理を実装してみてください。
 * Session、Cookieの二つのパターンで実装してみましょう。
 * 
 * １回目
 * 訪問回数は 1 回目です。
 * 
 * ２回目
 * 訪問回数は 2 回目です。
 * 
 */

 
// Sessionを使った場合
session_start();
if(isset($__SESSION['VISIT_COUNT'])) {
  $_SESSION['VISIT_COUNT'] ++;
}else {
  $_SESSION['VISIT_COUNT']= 1;
}
?>
<h1>訪問回数は<?php echo $_SESSION['VISIT_COUNT']; ?> 回目です</h1>
 <!-- Cookieを使った場合k -->
 setcookie