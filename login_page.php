<?php
session_start();

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

$result = mysql_query("SELECT * FROM user_master WHERE mailaddress = '$mailaddress' AND password = '$password'");
if (!$result) {die('ログインに失敗しました。'.mysql_error());}

$row = mysql_fetch_assoc($result);
$_SESSION['user_id'] = $row['user_id'];

?>

<div class="arrow-width">
<?php if(empty($row['user_id'])){ ?>
    <p class="co-p">ログイン出来ませんでした</p>
    <p class="return-link home"><a href="login.php">ログインへ</a></p><br><br>
<?php }elseif (!empty($row['user_id'])) {?>
    <p class="co-p">ログインが完了しました。</p>
    <p class="return-link home"><a href="/mypage.php">マイページへ</a></p><br><br>
<?php } ?>
</div> <!-- arrow-width -->
</div> <!-- bottom-content -->
<?php include 'footer.php';?>