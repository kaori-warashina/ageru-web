<?php
$link = mysql_connect("localhost", "root", "m4cRavuMaCaf", "ageru_web");
if (!$link) {
die('接続失敗です。'.mysql_error());
}
$db_selected = mysql_select_db('ageru_web', $link);
if (!$db_selected) {
die('データベース選択失敗です。'.mysql_error());
}

mysql_set_charset('utf8');
$mailaddress = $_REQUEST['mailaddress'];
$password   = $_REQUEST['password'];

$result = mysql_query("SELECT * FROM `user_master` WHERE `mailaddress` =".$mailaddress." `password` =". $password);

if (!$result) {
  exit('データを登録できませんでした。'.mysql_error());
}
?>