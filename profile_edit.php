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
$comment_text   = $_REQUEST['comment_text'];
$user_id = $_REQUEST['user_id'];

$result = mysql_query("INSERT INTO comment(comment, user_id) VALUES('$comment_text', '$user_id')");

if (!$result) {
  exit('データを登録できませんでした。'.mysql_error());
}
?>