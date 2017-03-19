<?php include 'header.php';?>
<div class="middle">
<div class="arrow-width">
<?php
session_start();

$link = mysql_connect("localhost", "root", "m4cRavuMaCaf", "ageru_web");
if (!$link) {
die('接続失敗です。'.mysql_error());
}
$db_selected = mysql_select_db('ageru_web', $link);
if (!$db_selected) {
die('    <p class="co-p">ログインしてください</p>
    <p class="return-link home"><a href="login.php">ログインへ</a></p><br><br>'.mysql_error());
}

mysql_set_charset('utf8');
$item_id = $_REQUEST['item_id'];
$flg_change_button   = $_REQUEST['flg_change_button'];
$user_id = $_SESSION[user_id];

$result = mysql_query("UPDATE item SET `item_request_flg`=$flg_change_button,`item_request_user`=$user_id  WHERE item_id =$item_id");
if (!$result) {
  exit('
    <p class="co-p">ログインしてください</p>
    <p class="return-link home"><a href="login.php">ログインへ</a></p><br><br>
  	');
}
$row = mysql_fetch_assoc($result);

header("Location: ./mypage.php" );
?>

</div> <!-- arrow-width -->
</div> <!-- bottom-content -->
<?php include 'footer.php';?>