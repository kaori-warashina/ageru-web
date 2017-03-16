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
$mailaddress = $_REQUEST['mailaddress'];
$password   = $_REQUEST['password'];

$result = mysql_query("SELECT * FROM `user_master` WHERE `mailaddress` = $mailaddress AND `password` = $password");

if (!$result) {
die('ログインに失敗しました。'.mysql_error());
}elseif ($result) {
	session_start() ;
	$_SESSION['user_id'] = $row[user_id];
	header( "Location: ./index.php" ) ;
}
?>

</div> <!-- bottom-content -->
<?php include 'footer.php';?>