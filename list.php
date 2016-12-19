<?php include 'header.php';?>
<div class="middle">
    <div class="middle-guide arrow-width">
        <ul>
            <li><a href="index.php">ageruトップ</a></li>
<?php
$link = mysql_connect("localhost", "root", "m4cRavuMaCaf", "ageru_web");
if (!$link) {
	die('接続失敗です。'.mysql_error());
}
print'<li>'.$_GET[select_word].'</li>';
print'<li>'.$_GET[select_word].'</li>';
print'<li>'.$_GET[select_word].'</li>'
?>
        </ul>
    </div>
</div> <!-- middle -->

<div class="list-content arrow-width">
    <h2><span><?php print$_GET[select_word];
print$_GET[select_word];
print$_GET[select_word]?>一覧</span></h2>
    <ul class="clearfix">
<?php

$db_selected = mysql_select_db('ageru_web', $link);
if (!$db_selected) {
	die('データベース選択失敗です。'.mysql_error());
}

mysql_set_charset('utf8');

$result = mysql_query("SELECT * FROM item WHERE `first_category` =".$_GET[select_word]);
if (!$result) {
	die('クエリーが失敗しました。'.mysql_error());
}

while ($row = mysql_fetch_assoc($result)) {
	for ($i = 0; $i < 10; $i++) {
		print'<li><a href="detail.php?item_id='.$row['item_id'].'"><img src="/media/'.$row['item_image1 '].'"></a></li>';
	}
}

$close_flag = mysql_close($link);
if ($close_flag) {
}

?>
</ul>
</div> <!-- middle-content -->
<?php include 'footer.php';?>
