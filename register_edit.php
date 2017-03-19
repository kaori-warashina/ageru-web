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
$mailaddress = $_POST['mailaddress'];
$password   = $_POST['password'];
$user_name_first = $_POST['user_name_first'];
$user_name_family = $_POST['user_name_family'];
$user_nickname = $_POST['user_nickname'];
$user_profile = $_POST['user_profile']
$user_birthday = $_POST['user_birthday'];
$user_sex = $_POST['user_sex'];
$user_area   = $_POST['user_area'];
$city_num = $_POST['city_num'];
$address1   = $_POST['address1'];
$address2 = $_POST['address2'];
$address3   = $_POST['address3'];
$phone = $_POST['phone'];
$birthday   = $_POST['birthday'];
$body_type = $_POST['body_type'];
$body_size   = $_POST['body_size'];
$liketast = $_POST['liketast'];
$disliketast   = $_POST['disliketast'];
$brand = $_POST['brand'];
$height   = $_POST['height'];
$weight   = $_POST['weight'];
$sizeSL = $_POST['sizeSL'];
$clothessize   = $_POST['clothessize'];
$shoesssize = $_POST['shoesssize'];



$result = mysql_query("
	INSERT INTO `ageru_web`.`user_master` 
	(`mailaddress`, `password`, `user_name_first`, `user_name_family`, `user_nickname`, `user_image`, `user_profile`, `user_url`, `user_birthday`, `user_sex`, `user_area`, `city_num`, `address1`, `address2`, `address3`, `phone`, `birthday`, `body_type`, `body_size`, `liketast`, `disliketast`, `brand`, `height`, `weight`, `sizeSL`, `clothessize`, `shoesssize`)
	VALUES 
	($_POST['mailaddress'],$_POST['password'],$_POST['user_birthday'],$_POST['user_name_first'],$_POST['user_name_family'],$_POST['user_nickname'],$_POST['user_image'],$_POST['user_profile'],$_POST['user_birthday'],$_POST['user_sex'],$_POST['user_area'],$_POST['city_num'],$_POST['address1'],$_POST['address2'],$_POST['address3'],$_POST['phone'],$_POST['birthday'],$_POST['body_type'],$_POST['body_size'],$_POST['liketast'],$_POST['disliketast'],$_POST['brand'],$_POST['height'],$_POST['weight'],$_POST['sizeSL'],$_POST['clothessize'])");

if (!$result) {
die('ログインにが失敗しました。'.mysql_error());
}
while ($row = mysql_fetch_assoc($result)) {
print'<li><a href="#'.$row[user_id].'">'.$row[user_nickname].'</a></li>';
?>