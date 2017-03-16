<!-- 使わない -->

<?php
session_start();
$user_id = $_SESSION[user_id];
include 'header.php';?>
<div class="middle">
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
$item_id = $_GET[item_id];
$comment_text   = $_REQUEST['comment_text'];
$user_id = $_SESSION[user_id];


$result = mysql_query("INSERT INTO comment(	`comment_item_id`, `user_id`, `comment_text`) VALUES('".$item_id."', '".$user_id."', '".$comment_text."')");

if (!$result) {
  exit('データを登録できませんでした。'.mysql_error());
}elseif ($result) {
	print(以下の内容をコメントしました。);
print($comment_text );
print($item_id);
print($user_id);
}

?>
</div> <!-- bottom-content -->
<?php include 'footer.php';?>