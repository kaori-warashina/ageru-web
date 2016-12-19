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
$db_selected = mysql_select_db('ageru_web', $link);
if (!$db_selected) {
	die('データベース選択失敗です。'.mysql_error());
}
mysql_set_charset('utf8');
$result = mysql_query("SELECT * FROM `item` WHERE `item_id`=".$_GET[item_id]);
if (!$result) {
	die('クエリーが失敗しました。'.mysql_error());
}
while ($row = mysql_fetch_assoc($result)) {
	echo '<li><a href="#'.$row['item_name'].'">'.$row['item_name'].'</a></li>';

	?></ul>

												    </div>
												</div>
	<div class="alert alert-success">
	    <div class="arrow-width">
	        <p>画像を投稿しました。</p>
	        <div class="close"></div>
	    </div>
	</div>
												<div class="bg-content">
												    <div class="bottom arrow-width clearfix">
												        <div class="left-bottom">
	<?php echo ' <img src="/media/'.$row['item_image1'].'">'?>
												        </div>
												        <div class="bottom-information">
												            <p><a href="#"><?php echo $row['item_name']?></p>
												            <p><a href="#"><a href="#"><?php echo $row['item_brand']?></a></p>
												            <table>
												                <tbody>
												                    <tr>
												                        <th>カテゴリ</th>
												                        <td><a href="#"><?php echo $row['first_category']?></a></td>
												                    </tr>
												                    <tr>
												                        <th>サイズ</th>
												                        <td><?php echo $row['item_size']?></td>
												                    </tr>
												                    <tr>
												                        <th>購入価格</th>
												                        <td><?php echo $row['price']?></td>
												                    </tr>
												                    <tr>
												                        <th>素材</th>
												                        <td><?php echo $row['item_material']?></td>
												                    </tr>
												                    <tr>
												                        <th>商品状態</th>
												                        <td><?php echo $row['item_condition']?></td>
												                    </tr>
												                </tbody>
												            </table>
												        </div>
												        <div class="right-bottom">
												            <button type="button" name="button"><img src="/image/ageru_like.png" width="25" height="20">この商品をリクエストする</button>
												        </div>
												    </div>
												</div>

											<div class="middle-content arrow-width">
											    <h2><span>着用画像一覧</span></h2>
											    <ul class="clearfix">
											        <li><a href="#"><?php echo ' <img src="/media/'.$row['item_image1'].'">'?></a></li>
											        <li><button type="button" name="button"><img src="/image/img_add.png"></button></li>
											    </ul>
											</div>

	<?php }?>
<div class="bottom-content">
    <h2><span>コメント一覧</span></h2>
<?php
$result = mysql_query("SELECT * FROM `comment` WHERE `comment_item_id`=".$_GET[item_id]);
if (!$result) {
	die('クエリーが失敗しました。'.mysql_error());
	?>
									    <div class="comment-content">
									        <div class="top-comment clearfix">
									            <div class="left">
									                <a href="#"><?php echo ' <img src="/user_media/'.$row['user_image'].'">'?></a>
									            </div>
									            <div class="right">
									                <a href="#"><?php echo '<li><a href="#'.$row['comment_user'].'">'.$row['comment_user'].'</a></li>'?></a>
									                <p><?php echo $row['comment_text']?></p>
									            </div>
									        </div> <!-- top-comment -->

									        <form class="form-block" action="index.html" method="post">
									            <div class="comment-write">
									                <p>コメントを投稿する</p>
									                <textarea name="name" rows="" cols=""></textarea>
									            </div>
									            <div class="comment-sent">
									                <button type="button" name="button">投稿する</button>
									            </div>
									        </form>
									    </div> <!-- comment-content -->
	<?php }?>
</div> <!-- bottom-content -->
<?php include 'footer.php';?>
