<?php include 'header.php';?>
<div class="middle">
<div class="middle-guide arrow-width">
<ul>
<li><a href="#">ageruトップ</a></li>
<li><a href="/register.php">会員登録</a></li>
<li>登録内容確認</li>
</ul>
</div>
</div> <!-- middle -->

<div class="arrow-width">

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
        $result = mysql_query("INSERT INTO `ageru_web`.`user_master` (`user_id`, `mailaddress`, `password`, `user_name_first`, `user_name_family`, `user_nickname`, `user_image`, `user_profile`, `user_url`, `user_birthday`, `user_sex`, `user_area`, `city_num`, `address1`, `address2`, `address3`, `phone`, `birthday`, `body_type`, `body_size`, `liketast`, `disliketast`, `brand`, `height`, `weight`, `clothessize`, `shoesssize`, `rent_item1`, `rent_item2`, `rent_item3`, `rent_item4`, `rent_item5`) VALUES (NULL,$_REQUEST['mailaddress'], $_REQUEST['password'], $_REQUEST['user_birthday'], $_REQUEST['user_name_first'], $_REQUEST['user_name_family'], $_REQUEST['user_nickname'], $_REQUEST['user_image'], $_REQUEST['user_profile'], $_REQUEST['user_birthday'], $_REQUEST['user_sex'], $_REQUEST['user_area'],$_REQUEST['city_num'], $_REQUEST['address1'], $_REQUEST['address2'], $_REQUEST['address3'], $_REQUEST['phone'], $_REQUEST['birthday'], $_REQUEST['body_type'], $_REQUEST['body_size'], $_REQUEST['liketast'], $_REQUEST['disliketast'], $_REQUEST['brand'], $_REQUEST['height'], $_REQUEST['weight'], $_REQUEST['clothessize'], NULL, NULL, NULL, NULL)");
        if (!$result) {
          exit('データを登録できませんでした。'.mysql_error());
        }
       print($_REQUEST['mailaddress']);
?>
</div> <!-- selfinformation -->
<div class="registration">
<button type="submit" action=""  name="registerbutton" value="1">
<a href="login.php">ログインする</a></button>
</div>
</div> <!-- register-content -->
</div> <!-- arrow-width -->
<?php include 'footer.php';?>