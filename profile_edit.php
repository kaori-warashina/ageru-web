<?php
session_start();
$user_id = $_SESSION[user_id];
include 'header.php';?>
<div class="middle">
<?php
if (is_uploaded_file($_FILES["user_image"]["tmp_name"])) {
if (move_uploaded_file($_FILES["user_image"]["tmp_name"], "user_media/" . $_FILES["user_image"]["name"])) {
chmod("user_media/" . $_FILES["user_image"]["name"], 0644);
} else {
echo "ファイルをアップロードできません。";
}
} else {
echo "ファイルが選択されていません。";
}

$user_image=$_FILES["user_image"]["name"];

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
$user_id = $_SESSION['user_id'];
$user_area   = $_REQUEST['user_area'];
$user_birthday   = $_REQUEST['user_birthday'];
$user_image   = $_FILES["user_image"]["name"];
$user_profile   = $_REQUEST['user_profile'];
$user_url   = $_REQUEST['user_url'];

$result = mysql_query("UPDATE `ageru_web`.`user_master` SET `user_area` = '$user_area', `user_birthday` = '$user_birthday', `user_image` = '$user_image', `user_profile` = '$user_profile', `user_url` = '$user_url' WHERE `user_master`.`user_id` = $user_id;");
$row = mysql_fetch_assoc($result);
if (!$result) {
  exit('データを登録できませんでした。'.mysql_error());
}
?>

</div> <!-- comment-content -->
    <p class="co-p">更新が完了しました。</p>
    <p class="return-link home"><a href="/mypage.php">マイページへ</a></p><br><br>
</div> <!-- bottom-content -->
<?php include 'footer.php';?>