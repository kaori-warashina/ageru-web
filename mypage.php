<?php include 'header.php';?>
<div class="middle">
<div class="middle-guide arrow-width">
<ul>
<li><a href="index.php">ageruトップ</a></li>
<li><a href="userpage.php">マイページ</a></li>
<li><a href="profile.php">プロフィール編集</a></li>
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
$result = mysql_query("SELECT * FROM `user_master` WHERE `user_id`=".$_GET[user_id]);
if (!$result) {
	die('クエリーが失敗しました。'.mysql_error());
}
while ($row = mysql_fetch_assoc($result)) {
	print'<li><a href="#'.$row[user_id].'">'.$row[user_nickname].'</a></li>';
	?>
	</ul>
				</div>
				</div> <!-- middle -->

				<div class="container arrow-width clearfix">
				<aside class="sidebar">
				<div class="sider-top">
				<div class="user-image-name">
	<?php print' <img src="/user_media/'.$row['user_image'].'">'?>
				<p><a href="userpage.php?user_id=<?php print$row['user_id']?>"><?php print$row['user_nickname']?></a></p>
				</div>
				</div>
				<div class="sidebar-bottom mypage clearfix">
				<ul>
				<li><a href="#">お知らせ</a></li>
				<li><a href="logout.php">ログアウト</a></li>
				</ul>
				</div>
				</aside>

				<div class="mypagetop-content">
				<h2>マイページトップ</h2>
				<div class="page-content">
				<dl class="head-list">
				<dt>項目リスト</dt>
				<dd>
				<dl class="borrow">
				<dt>今借りているアイテムの数</dt>
				<dd>４アイテム</dd>
				</dl>
				<dl class="borrow">
				<dt>今借りれるアイテムの数</dt>
				<dd>１アイテム</dd>
				</dl>
				</dd>
				</dl>

				<div class="pending request-content">
				<h3>リクエスト申請中のアイテム</h3>
				<!-- clothes-information max5 -->
				<ul class="clearfix">
	<?php
	$result = mysql_query("SELECT * FROM `item` WHERE `item_request_flg`=1 AND `item_user`=".$_GET[user_id]);
	if (!$result) {
		die('クエリーが失敗しました。'.mysql_error());
	}
	while ($row = mysql_fetch_assoc($result)) {
		?>
		<li>
								<div class="clothes-information match-height clearfix">
								<div class="clothes-image">
		<?php print' <img src="/media/'.$row['item_image1'].'">'?>
								</div>
								<div class="clothes-guid">
								    <p data-count="12"><?php print$row['item_name']?></p>
								    <p><a href="#"><?php print$row['item_brand']?></a></p>
								    <button type="button" name="button" class="item-information">	<?php print' <a href="detail.php?item_id='.$row['item_id'].'">'?>商品詳細</a></button>
								    <button type="button" name="button" class="request"><img src="/image/img_heart.png" width="18" height="15">リクエスト中</button>
								</div>
								</div> <!-- clothes-information -->
								</li>
		<?php }?>
	</ul>
				</div> <!-- pending -->

				<div class="waiting request-content">
				<h3>リクエスト承認待ちのアイテム</h3>
	<?php
	$result = mysql_query("SELECT * FROM `item` INNER JOIN `user_master` ON `item`.`item_user`=`user_master`.`user_id` WHERE `item_request_flg`=2 AND `item_user`=".$_GET[user_id]);
	if (!$result) {
		die('クエリーが失敗しました。'.mysql_error());
	}
	while ($row = mysql_fetch_assoc($result)) {
		?>
		<ul class="clearfix">
								<li>
								<div class="clothes-information match-height clearfix">
								<div class="clothes-image">
		<?php print' <img src="/media/'.$row['item_image1'].'">'?>
								</div>
								<div class="clothes-guid">
								    <p data-count="12"><?php print$row['item_name']?></p></p>
								    <p><a href="#"><?php print$row['item_brand']?></a></p>
								    <div class="username-request">
		<?php echo '<img src="/user_media/'.$row['user_image'].'">'?>
								        <a href="#"><span><?php echo '<a href="userpage.php?user_id='.$row['user_id'].'">'.$row['user_nickname'].'</a>'?></span>さん</a>
								    </div> <!-- username-top -->
								    <button type="button" name="button" class="yes">はい</button>
								    <button type="button" name="button" class="no">いいえ</button>
								</div>
								</div> <!-- clothes-information -->
								</li>
		<?php }?>
	</ul>
				</div> <!-- waiting -->

				<div class="sending request-content">
				<h3>発送待ちの商品</h3>
				<ul class="clearfix">
	<?php
	$result = mysql_query("SELECT * FROM `item` INNER JOIN `user_master` ON `item`.`item_user`=`user_master`.`user_id` WHERE `item_request_flg`=3 AND `item_user`=".$_GET[user_id]);
	if (!$result) {
		die('クエリーが失敗しました。'.mysql_error());
	}
	while ($row = mysql_fetch_assoc($result)) {
		?>
		<li>
								<div class="clothes-information sending-information match-height clearfix">
								<div class="clothes-image">
		<?php print' <img src="/media/'.$row['item_image1'].'">'?>
								</div>
								<div class="clothes-guid">
								    <p data-count="12"><?php print$row['item_name']?></p>
								    <p><a href="#"><?php print$row['item_brand']?></a></p>
								    <div class="username-request">
		<?php echo '<img src="/user_media/'.$row['user_image'].'">'?>
								        <span><?php echo '<a href="userpage.php?user_id='.$row['user_id'].'">'.$row['user_nickname'].'</a>'?></span>さん
								    </div> <!-- username-top -->
								    <button type="button" name="button" class="check address">住所を確認</button>
								        <div class="address-box">
								            <p>〒000-0000<br>
								                XX県XX市XX町000-00<br>
								                名前<br>
								                電話番号
								            </p>
								        </div>
		<button type="button" name="button" class="item-information">発送完了</button>
								</div>
								</div> <!-- clothes-information -->
								</li>
		<?php }?>
	</ul>
				</div> <!-- sending -->

				<div class="trading request-content">
				<h3>過去の取引履歴</h3>
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
								<div class="clothes-image">
		<?php print' <img src="/media/'.$row['item_image1'].'">'?>
								</div>
								<div class="clothes-guid">
								    <p data-count="12"><?php print$row['item_name']?></p>
								    <p><a href="#"><?php print$row['item_brand']?></a></p>
								    <div class="username-request">
		<?php echo '<img src="/user_media/'.$row['user_image'].'">'?>
								        <span><?php echo '<a href="userpage.php?user_id='.$row['user_id'].'">'.$row['user_nickname'].'</a>'?></span>さん
								    </div> <!-- username-top -->
								    <button type="button" name="button" class="check">受け取り完了</button>
								</div>
								</div> <!-- clothes-information -->
								</li>
		<?php }?>
	</ul>
				</div> <!-- trading -->
				</div> <!-- page-content -->
				</div> <!-- mypagetop-content -->
				</div> <!-- container -->
	<?php }?>
<?php include 'footer.php';?>
