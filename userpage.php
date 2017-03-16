<?php
session_start();
$user_id = $_SESSION[user_id];
 include 'header.php';?>
<div class="middle">
<div class="middle-guide arrow-width">
<ul>
<li><a href="#">ageruトップ</a></li>
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
$result = mysql_query("SELECT * FROM `user_master` INNER JOIN `item_size` ON `user_master`.`body_size`=`item_size`.`item_size_id` WHERE `user_id`=".$_GET[user_id]);
if (!$result) {
die('クエリーが失敗しました。'.mysql_error());
}
while ($row = mysql_fetch_assoc($result)) {
print'<li><a href="#'.$row[user_id].'">'.$row[user_nickname].'</a></li>';
?></ul>
</div>
</div>

<div class="bg-content">
<div class="bottom arrow-width clearfix">
<div class="user-clothes-image">
<?php print' <img src="/user_media/'.$row['user_image'].'">'?>
</div>
<div class="userpage-information">
<table>
<tbody>
<tr>
<th>身長</th>
<td><?php print$row['body_type']?></td>
</tr>
<tr>
<th>愛用ブランド</th>
<td><?php print$row['brand']?></td>
</tr>
<tr>
<th>服のサイズ</th>
<td><?php print$row['item_size_name']?></td>
</tr>
<tr>
<th>服の号数</th>
<td><?php print$row['item_size_name']?></td>
</tr>
<tr>
<th>靴のサイズ</th>
<td><?php print$row['item_size_name']?></td>
</tr>
<tr>
<th>好きなテイスト</th>
<td><?php print$row['liketast']?></td>
</tr>
<tr>
<th>苦手なテイスト</th>
<td><?php print$row['disliketast']?></td>
</tr>
<tr>
<th>自己紹介</th>
<td><?php print$row['message']?></td>
</tr>
</tbody>
</table>
</div>
</div>
<?php }?>
</div>

<div class="having-item arrow-width">
<h2><span>持っているアイテム</span></h2>
<ul class="clearfix">
<?php
$result = mysql_query("SELECT * FROM `item` WHERE `item_request_flg`=0 AND `item_user`=".$_GET[user_id]);
if (!$result) {
die('クエリーが失敗しました。'.mysql_error());
}
while ($row = mysql_fetch_assoc($result)) {
?>
<li>
<div class="clothes-information match-height clearfix">
<div class="user-clothes-image">
<?php print' <img src="/media/'.$row['item_image1'].'">'?>
</div>
<div class="clothes-guid user-clothes-guid">
<p data-count="16"><?php print$row['item_name']?></p>
<p><a href="#"><?php print$row['item_brand']?></a></p>
<div class="user-bottom-information">
<table>
    <tbody>
        <tr>
            <th>カテゴリ</th>
            <td><a href="#"><?php print$row['first_category']?></a></td>
        </tr>
        <tr>
            <th>サイズ</th>
            <td><?php print$row['size_id']?></td>
        </tr>
        <tr>
            <th>購入価格</th>
            <td><?php print$row['price']?></td>
        </tr>
        <tr>
            <th>素材</th>
            <td><?php print$row['material']?></td>
        </tr>
        <tr>
            <th>商品状態</th>
            <td data-count="12"><?php print$row['condition_id']?></td>
        </tr>
    </tbody>
</table>
</div>
<button type="button" name="button" class="item-information-user">
<?php print' <a href="detail.php?item_id='.$row['item_id'].'">'?>商品詳細</a>
</button>
<script type="text/javascript">
<!--
var txt1 = "リクエスト中";

function ChangeTxt(txt) {
document.getElementById("txt").innerHTML=txt;
}
-->
</script>
<form action="flg_change.php" method="post">
<input type="hidden" name="item_id" value="<?php print($row['item_id']) ?>">
<input type="hidden" name="userid" value="<?php print($user_id) ?>">
<button type="button" action="flg_change.php" method="post" name="flg_change_button" value="1" class="request-userpage"><div id="txt"><img src="/image/ageru_like.png" width="18" height="15">リクエスト</div></button>
</form>
</div>
</div> <!-- clothes-information -->
</li>
<?php }?>
</ul>
</div>

<div class="wore arrow-width">
<h2><span>過去に着たアイテム</span></h2>
<ul class="clearfix">
<?php
$result = mysql_query("SELECT * FROM `item` WHERE `item_request_flg`=4 AND `item_user`=".$_GET[user_id]);
if (!$result) {
die('クエリーが失敗しました。'.mysql_error());
}
while ($row = mysql_fetch_assoc($result)) {
?>
<li>
<div class="clothes-information match-height clearfix">
<div class="user-clothes-image">
<?php print' <img src="/media/'.$row['item_image1'].'">'?>
</div>
<div class="clothes-guid user-clothes-guid">
<p data-count="16"><?php print$row['item_name']?></p>
<p><a href="#"><?php print$row['item_brand']?></a></p>
<div class="user-bottom-information">
<table>
    <tbody>
        <tr>
            <th>カテゴリ</th>
            <td><a href="#"><?php print$row['first_category']?></a></td>
        </tr>
        <tr>
            <th>サイズ</th>
            <td><?php print$row['size_id']?></td>
        </tr>
        <tr>
            <th>購入価格</th>
            <td><?php print$row['price']?></td>
        </tr>
        <tr>
            <th>素材</th>
            <td><?php print$row['material']?></td>
        </tr>
        <tr>
            <th>商品状態</th>
            <td data-count="12"><?php print$row['condition_id']?></td>
        </tr>
    </tbody>
</table>
</div>
<button type="button" name="button" class="item-information-long"><?php print' <a href="detail.php?item_id='.$row['item_id'].'">'?>商品詳細</a></button>
</div>
</div> <!-- clothes-information -->
</li>
<?php }?>
</ul>
</div>

<?php include 'footer.php';?>
