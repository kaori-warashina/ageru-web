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
    $link = mysql_connect("localhost", "root", "m4cRavuMaCaf", "ageru_web");
    if (!$link) {
    die('接続失敗です。'.mysql_error());
    }
    $db_selected = mysql_select_db('ageru_web', $link);
    if (!$db_selected) {
    die('データベース選択失敗です。'.mysql_error());
    }

        $mailaddress= $_REQUEST['mailaddress'];
        $password= $_REQUEST['password'];
        $user_name_first= $_REQUEST['user_name_first'];
        $user_name_family= $_REQUEST['user_name_family'];
        $user_nickname= $_REQUEST['user_nickname'];
        $user_image= $_REQUEST['user_image'];
        $user_profile= $_REQUEST['user_profile'];
        $user_url= $_REQUEST['user_url'];
        $user_birthday= $_REQUEST['user_birthday'];
        $user_sex= $_REQUEST['user_sex'];
        $user_area= $_REQUEST['user_area'];
        $city_num= $_REQUEST['city_num'];
        $address1= $_REQUEST['address1'];
        $address2= $_REQUEST['address2'];
        $address3= $_REQUEST['address3'];
        $phone= $_REQUEST['phone'];
        $body_type= $_REQUEST['body_type'];
        $body_size= $_REQUEST['body_size'];
        $liketast= $_REQUEST['liketast'];
        $disliketast= $_REQUEST['disliketast'];
        $brand= $_REQUEST['brand'];
        $height= $_REQUEST['height'];
        $weight= $_REQUEST['weight'];
        $clothessize= $_REQUEST['clothessize'];
        $shoesssize= $_REQUEST['shoesssize'];

    mysql_set_charset('utf8');
          $result = mysql_query("INSERT INTO `user_master` (`user_id`, `mailaddress`, `password`, `user_name_first`, `user_name_family`, `user_nickname`, `city_num`, `user_area`, `address1`, `address2`, `address3`, `phone`, `user_sex`, `user_birthday`, `user_image`, `user_profile`, `user_url`, `height`, `weight`, `brand`, `body_size`, `clothessize`, `shoesssize`, `liketast`, `disliketast`, `body_type`) VALUES (NULL, '$mailaddress', '$password', '$user_name_first', '$user_name_family', '$user_nickname', '$city_num', '$user_area', '$address1', '$address2', '$address3', '$phone', '$user_sex', '$user_birthday', '$user_image', '$user_profile', '$user_url', '$height', '$weight', '$brand', '$body_size', '$clothessize', '$shoesssize', '$liketast', '$disliketast', '$body_type');");

    if (!$result) {
      exit('データを登録できませんでした。<p class="return-link"><a href="/register.php">登録画面に戻る</a></p><br><br>'.mysql_error());
    }
	$row = mysql_fetch_assoc($result);
?>
<?php echo$result?>
    <p class="co-p">登録が完了しました。</p>
    <p class="return-link home"><a href="/login.php">ログインへ</a></p>

</div> <!-- arrow-width -->
<?php include 'footer.php'; ?>
