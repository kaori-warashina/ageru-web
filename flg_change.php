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
$item_id = $_REQUEST['item_id'];
$flg_change_button   = $_REQUEST['flg_change_button'];
$user_id = $_REQUEST['user_id'];

$result = mysql_query("UPDATE item SET (item_request_flg, user_id) VALUES('$flg_change_button', '$user_id') WHERE item_id ='$item_id'");

if (!$result) {
  exit('データを登録できませんでした。'.mysql_error());
}
?>