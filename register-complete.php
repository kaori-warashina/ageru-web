<?php include 'header.php'; ?>
<div class="middle">
    <div class="middle-guide arrow-width">
        <ul>
            <li><a href="#">ageruトップ</a></li>
            <li><a href="/register.php">会員登録</a></li>
            <li>登録完了</li>
        </ul>
    </div>
</div> <!-- middle -->
<div class="arrow-width">

<?php
session_start();
$user_id = $_SESSION[user_id];

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
	(".$mailaddress."', '".$password."', '".$user_birthday."', '".$user_name_first."', '".$user_name_family."', '".$user_nickname."', '".$user_image."', '".$user_profile."', '".$user_birthday."', '".$user_sex."', '".$user_area."', '".$city_num."', '".$address1."', '".$address2."', '".$address3."', '".$phone."', '".$birthday."', '".$body_type."', '".$body_size."', '".$liketast."', '".$disliketast."', '".$brand."', '".$height."', '".$weight."', '".$sizeSL."', '".$clothessize."')");

if (!$result) {
  exit('データを登録できませんでした。'.mysql_error());
}elseif ($result) {
	print('
    <p class="co-p">登録が完了しました。</p>
    <p class="return-link home"><a href="/mypage.php">マイページへ</a></p>'
    );
}

?>

</div> <!-- arrow-width -->
<?php include 'footer.php'; ?>