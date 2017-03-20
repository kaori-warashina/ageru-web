<?php 
session_start();
$user_id = $_SESSION[user_id];
include 'header.php';?>
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
?>
</ul>

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
                    <td><a href="#"><?php echo $row['first_category_id']?></a></td>
                </tr>
                <tr>
                    <th>サイズ</th>
                    <td><?php echo $row['size_id']?></td>
                </tr>
                <tr>
                    <th>購入価格</th>
                    <td><?php echo $row['price']?></td>
                </tr>
                <tr>
                    <th>素材</th>
                    <td><?php echo $row['material']?></td>
                </tr>
                <tr>
                    <th>商品状態</th>
                    <td><?php echo $row['condition_id']?></td>
                </tr>
            </tbody>
        </table>
    </div>
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
                <input type="hidden" name="userid" value="<?php $user_id ?>">
            <div class="right-bottom"><!-- <a href="javascript:void(0)" onclick="ChangeTxt(txt1); return false;"> -->
                <button type="submit" name="flg_change_button" value="1" ><div id="txt"><img src="/image/ageru_like.png" width="25" height="20">この商品をリクエストする</div></button></a>
            </div>
            </form>
        </div>
    </div>

    <div class="middle-content arrow-width">
        <h2><span>着用画像一覧</span></h2>
        <ul class="clearfix">

<?php echo '<li><a href="#"><img src="/media/'.$row['item_image1'].'"></a></li>';
if (isset($row['item_image2'])) {
print'<li><a href="#"><img src="/media/'.$row['item_image2'].'"></a></li>';
}
if (isset($row['item_image3'])) {
print'<li><a href="#"><img src="/media/'.$row['item_image3'].'"></a></li>';
}
?>
<li><form action="upload.php" method="post" enctype="multipart/form-data">
  <button type="button" name="img_add_button"><img src="/image/img_add.png"></button></li>
  </form>
        </ul>
    </div>

<?php }?>
<div class="bottom-content">
<h2><span>コメント一覧</span></h2>
<?php
$result = mysql_query("SELECT * FROM `comment` INNER JOIN `user_master` ON `comment`.`user_id`=`user_master`.`user_id` WHERE `comment_item_id`=".$_GET[item_id]);
if (!$result) {
die('クエリーが失敗しました。'.mysql_error());
}
while ($row = mysql_fetch_assoc($result)) {
?>
<div class="comment-content">
    <div class="top-comment clearfix">
        <div class="left">
        <?php echo '<a href="userpage.php?user_id='.$row['user_id'].'"><img src="/user_media/'.$row['user_image'].'"></a>'?>
        </div>
        <div class="right">
        <?php echo '<li><a href="userpage.php?user_id='.$row['user_id'].'">'.$row['user_nickname'].'</a></li>'?>
            <p><?php echo $row['comment_text']?></p>
        </div>
    </div> <!-- top-comment -->
</div>
<?php }?>

<div class="comment-write">
<p>コメントを投稿する</p>
<form class="form-block" action="" method="post">
<textarea name="comment_text" rows="" cols=""></textarea>
</div>
<div class="comment-sent">
<button type="submit" name="comment" ">投稿する</button>
<!-- <?php echo $_SERVER['QUERY_STRING'];?> -->
<?php
    if (isset($_POST["comment"])) {
        $link = mysql_connect("localhost", "root", "m4cRavuMaCaf", "ageru_web");
        if (!$link) {
        die('接続失敗です。'.mysql_error());
        }
        $db_selected = mysql_select_db('ageru_web', $link);
        if (!$db_selected) {
        die('データベース選択失敗です。'.mysql_error());
        }
        mysql_set_charset('utf8');
        $sql = "INSERT INTO `ageru_web`.`user_master` (`user_id`, `mailaddress`, `password`, `user_name_first`, `user_name_family`, `user_nickname`, `user_image`, `user_profile`, `user_url`, `user_birthday`, `user_sex`, `user_area`, `city_num`, `address1`, `address2`, `address3`, `phone`, `birthday`, `body_type`, `body_size`, `liketast`, `disliketast`, `brand`, `height`, `weight`, `sizeSL`, `clothessize`, `shoesssize`, `rent_item1`, `rent_item2`, `rent_item3`, `rent_item4`, `rent_item5`) VALUES (NULL,$_REQUEST['mailaddress'], $_REQUEST['password'], $_REQUEST['user_birthday'], $_REQUEST['user_name_first'], $_REQUEST['user_name_family'], $_REQUEST['user_nickname'], $_REQUEST['user_image'], $_REQUEST['user_profile'], $_REQUEST['user_birthday'], $_REQUEST['user_sex'], $_REQUEST['user_area'],$_REQUEST['city_num'], $_REQUEST['address1'], $_REQUEST['address2'], $_REQUEST['address3'], $_REQUEST['phone'], $_REQUEST['birthday'], $_REQUEST['body_type'], $_REQUEST['body_size'], $_REQUEST['liketast'], $_REQUEST['disliketast'], $_REQUEST['brand'], $_REQUEST['height'], $_REQUEST['weight'], $_REQUEST['sizeSL'], $_REQUEST['clothessize'], NULL, NULL, NULL, NULL)";

        $result = mysql_query($sql);
        $row = mysql_fetch_assoc($result);
        if (!$result) {
          exit('データを登録できませんでした。'.mysql_error());
        }elseif ($result) {
        header("Location: " . $_SERVER['PHP_SELF']);
        }
    }
?>
</form>
</div>
</div> <!-- comment-content -->
</div> <!-- bottom-content -->

<?php include 'footer.php';?>