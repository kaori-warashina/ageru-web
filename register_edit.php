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
$mailaddress = $_REQUEST['mailaddress'];
$password   = $_REQUEST['password'];
$user_name_first = $_REQUEST['user_name_first'];
$user_name_family = $_REQUEST['user_name_family'];
$user_nickname = $_REQUEST['user_nickname'];
$user_profile = $_REQUEST['user_profile']
$user_birthday = $_REQUEST['user_birthday'];
$user_sex = $_REQUEST['user_sex'];
$user_area   = $_REQUEST['user_area'];
$city_num = $_REQUEST['city_num'];
$address1   = $_REQUEST['address1'];
$address2 = $_REQUEST['address2'];
$address3   = $_REQUEST['address3'];
$phone = $_REQUEST['phone'];
$birthday   = $_REQUEST['birthday'];
$body_type = $_REQUEST['body_type'];
$body_size   = $_REQUEST['body_size'];
$liketast = $_REQUEST['liketast'];
$disliketast   = $_REQUEST['disliketast'];
$brand = $_REQUEST['brand'];
$height   = $_REQUEST['height'];
$weight   = $_REQUEST['weight'];
$sizeSL = $_REQUEST['sizeSL'];
$clothessize   = $_REQUEST['clothessize'];
$shoesssize = $_REQUEST['shoesssize'];



$result = mysql_query(
	INSERT INTO `ageru_web`.`user_master` 
	(`user_id`,`mailaddress`, `password`, `user_name_first`, `user_name_family`, `user_nickname`, `user_image`, `user_profile`, `user_url`, `user_birthday`, `user_sex`, `user_area`, `city_num`, `address1`, `address2`, `address3`, `phone`, `birthday`, `body_type`, `body_size`, `liketast`, `disliketast`, `brand`, `height`, `weight`, `sizeSL`, `clothessize`, `shoesssize`)
	VALUES 
	(NULL, '$mailaddress', '$password', '$user_birthday', '$user_name_first', '$user_name_family', '$user_nickname', '$user_image', '$user_profile', '$user_birthday', '$user_sex', '$user_area', '$city_num', '$address1', '$address2', '$address3', '$phone', '$birthday', '$body_type', '$body_size', '$liketast', '$disliketast', '$brand', '$height', '$weight', '$sizeSL', '$clothessize'););

if (!$result) {
die('ログインにが失敗しました。'.mysql_error());
}
while ($row = mysql_fetch_assoc($result)) {
print'<li><a href="#'.$row[user_id].'">'.$row[user_nickname].'</a></li>';
?>