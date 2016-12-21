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

$str1 = str_replace("'", '', $_GET[first_category]);
$str2 = str_replace("'", '', $_GET[second_category]);
$str3 = str_replace("'", '', $_GET[third_category]);
$str4 = str_replace("'", '', $_GET[item_brand]);
if (isset($_GET[first_category])) {
	print'<li>'.$str1.'</li>';
}
if (isset($_GET[second_category])) {
	print'<li>'.$str2.'</li>';
}
if (isset($_GET[third_category])) {
	print'<li>'.$str3.'</li>';
}
if (isset($_GET[item_brand])) {
	print'<li>'.$str4.'</li>';
}
?>
</ul>
</div>
</div> <!-- middle -->

<div class="list-content arrow-width">
<h2><span><?php print$str1;
print$str2;
print$str3;
print$str4
?>一覧</span></h2>
<ul class="clearfix">
<?php

$db_selected = mysql_select_db('ageru_web', $link);
if (!$db_selected) {
	die('データベース選択失敗です。'.mysql_error());
}

mysql_set_charset('utf8');

if (isset($_GET[first_category])) {
	$result = mysql_query("SELECT * FROM `item` WHERE `first_category_id`=".$_GET[first_category]);
}
if (isset($_GET[second_category])) {
	$result = mysql_query("SELECT * FROM `item` WHERE `second_category_id`=".$_GET[second_category]);
}
if (isset($_GET[third_category])) {
	$result = mysql_query("SELECT * FROM `item` WHERE `third_category_id`=".$_GET[third_category]);
}
if (isset($_GET[item_brand])) {
	$result = mysql_query("SELECT * FROM `item` WHERE `item_brand`=".$_GET[item_brand]);
}

if (!$result) {
	die('クエリーが失敗しました。'.mysql_error());
}
while ($row = mysql_fetch_assoc($result)) {
	?>
			<li><?php print' <a href="detail.php?item_id='.$row['item_id'].'">'.' <img src="/media/'.$row['item_image1'].'">'?>
	</a></li>
	<?php }?>
</ul>
</div> <!-- middle-content -->
<?php include 'footer.php';?>
