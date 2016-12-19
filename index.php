<?php include 'header.php';?>
<div class="top-bg-content">
        <div class="top-main arrow-width">
            <div class="catchcopy">
            <h2>ageru</h2>
            <h3>クローゼットもお財布も気にせず、着てみたい服を気軽にいくつでも。オシャレをもっと身近に、楽しく。</h3>
            </div>
        </div>
    </div> <!-- top-bg-content -->

    <div class="guidance arrow-width">
        <div class="useguid">
        <a href="guide.php">ご利用ガイド</a>
        </div>
    </div> <!-- guidance -->

    <div class="arrow-width">
        <div class="item">
        <h2><span>アイテム一覧</span></h2>
<ul class="clearfix">

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

$result = mysql_query('SELECT item_name, item_id, item_image1 FROM item LIMIT 0, 10');
if (!$result) {
	die('クエリーが失敗しました。'.mysql_error());
}
for ($i = 0; $i < 10; $i++) {
	while ($row = mysql_fetch_assoc($result)) {

		print'<li><a href="detail.php?item_id='.$row['item_id'].'"><img src="/media/'.$row['item_image1'].'"></a></li>';
	}
}

?>
</ul>
        </div>

        <!-- item -->

<div class="brand">
        <h2><span>ブランド一覧</span></h2>
<ul class="clearfix">
<?php

$db_selected = mysql_select_db('ageru_web', $link);
if (!$db_selected) {
	die('データベース選択失敗です。'.mysql_error());
}

mysql_set_charset('utf8');

$result = mysql_query('SELECT `item_brand` FROM `item` LIMIT 0, 6');
if (!$result) {
	die('クエリーが失敗しました。'.mysql_error());
}

while ($row = mysql_fetch_assoc($result)) {
	print'<li><a href="list.php?item_brand_id='.$row['item_brand'].'">'.$row['item_brand'].'</a></li>';
}
?>
</ul>
        </div> <!-- brand -->


        <div class="recommend">
        <h2><span>おすすめユーザ</span></h2>
<ul class="clearfix">
<?php

$db_selected = mysql_select_db('ageru_web', $link);
if (!$db_selected) {
	die('データベース選択失敗です。'.mysql_error());
}

mysql_set_charset('utf8');

$result = mysql_query('SELECT `user_id`,`user_nickname`, `user_image` FROM `user_master` LIMIT 0, 6');
if (!$result) {
	die('クエリーが失敗しました。'.mysql_error());
}

while ($row = mysql_fetch_assoc($result)) {
	print'<li>
            <div class="recommenduser clearfix">
            <div class="img-box"><img src="/user_media/'.$row['user_image'].'"　 height="240"></div>
            <div class="text-box"><a href="userpage.php?user_id='.$row['user_id'].' ">'.$row['user_nickname'].'</a></div>
            </div>
            </li>';
}

$close_flag = mysql_close($link);
if ($close_flag) {
}
?>
</ul>
    </div> <!-- recommend -->
</div> <!-- arrow-width -->

<?php include 'footer.php';?>