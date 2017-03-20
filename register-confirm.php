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
<p class="co-p">以下の内容で登録します。よろしいですか？</p>
<form class="form-register confirm" action="" method="post">
<div class="register-content">
<div class="login-register">

<table>
<tbody>
<tr>
    <th>
        <p>メールアドレス</p>
    </th>
    <td>
        <?php print($_REQUEST['mailaddress']);?>
        <input type="hidden" name="mailaddress" value="<?php echo $_POST['$mailaddress'];?>">
    </td>
</tr>
<tr>
    <th>
        <p>パスワード</p>
    </th>
    <td>
        <?php print($_REQUEST['password']);?>
        <input type="hidden" name="password" value="<?php echo $_POST['$password'];?>">
    </td>
</tr>
<tr>
    <th>
        <p>パスワード（再入力）</p>
    </th>
    <td>
        <?php print($_REQUEST['password']);?>
    </td>
</tr>
</tbody>
</table>
</div>
</div>

<div class="register-content">
<div class="necessity">
<table>
<tbody>
    <tr>
        <th>
            <p>氏名</p>
        </th>
        <td>
            <?php print($_REQUEST['user_name_first']);?>
            <input type="hidden" name="user_name_first" value="<?php echo $_POST['$user_name_first'];?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>氏名（フリガナ）</p>
        </th>
        <td>
            <?php print($_REQUEST['user_name_family']);?>
            <input type="hidden" name="user_name_family" value="<?php echo $_POST['$user_name_family'];?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>ユーザーネーム</p>
        </th>
        <td>
            <?php print($_REQUEST['user_nickname']);?>
            <input type="hidden" name="user_nickname" value="<?php echo $_POST['$user_nickname'];?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>郵便番号</p>
        </th>
        <td>
            <?php print($_REQUEST['city_num']);?>
            <input type="hidden" name="city_num" value="<?php echo $_POST['$city_num'];?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>都道府県</p>
        </th>
        <td>
            <?php print($_REQUEST['user_area']);?>
            <input type="hidden" name="user_area" value="<?php echo $_POST['$user_area'];?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>住所１（市区町村）</p>
        </th>
        <td>
            <?php print($_REQUEST['address1']);?>
            <input type="hidden" name="address1" value="<?php echo $_POST['$address1'];?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>住所２（番地）</p>
        </th>
        <td>
           <?php print($_REQUEST['address2']);?>
           <input type="hidden" name="address2" value="<?php echo $_POST['$address2'];?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>住所３（建物名）</p>
        </th>
        <td>
            <?php print($_REQUEST['address3']);?>
            <input type="hidden" name="address3" value="<?php echo $_POST['$address3'];?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>お電話番号</p>
        </th>
        <td>
            <?php print($_REQUEST['phone']);?>
            <input type="hidden" name="phone" value="<?php echo $_POST['$phone'];?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>性別</p>
        </th>
        <td>
            <?php print($_REQUEST['user_sex']);?>
            <input type="hidden" name="user_sex" value="<?php echo $_POST['$user_sex'];?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>生年月日</p>
        </th>
        <td>
            <?php print($_REQUEST['birthday']);?>
            <input type="hidden" name="birthday" value="<?php echo $_POST['$user_birthday'];?>">

        </td>
    </tr>
    <tr>
        <th>
            <p>プロフィール画像</p>
        </th>
        <td>
            <img src="/image/img_profile.png">
            <input type="hidden" name="img_profile" value="<?php echo $_POST['$img_profile'];?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>自己紹介</p>
            <?php print($_REQUEST['user_profile']);?>
            <input type="hidden" name="user_profile" value="<?php echo $_POST['$user_profile'];?>">
        </th>
        <td>

        </td>
    </tr>
</tbody>
</table>
</div> <!-- necessity -->
</div> <!-- register-content -->

<div class="register-content">
<div class="selfinformation">
<table>
<tbody>
    <tr>
        <th>
            <p>身長</p>
        </th>
        <td>
            <?php print($_REQUEST['height']);?> cm
            <input type="hidden" name="height" value="<?php echo $_POST['$height'];?>">

        </td>
    </tr>
    <tr>
        <th>
            <p>体重</p>
        </th>
        <td>
            <?php print($_REQUEST['weight']);?> kg
            <input type="hidden" name="name" value="<?php echo $_POST['$weight'];?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>愛用ブランド</p>
        </th>
        <td>
            <?php print($_REQUEST['brand']);?>
            <input type="hidden" name="brand" value="<?php echo $_POST['$brand'];?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>服のサイズ</p>
        </th>
        <td>
            <?php print($_REQUEST['body_size']);
            $body_size_num = intval($_REQUEST['body_size']);
            ?>
            <input type="hidden" name="body_size" value="<?php echo $_POST['$body_size'];?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>服の号数</p>
        </th>
        <td class="label-block">
            <?php print($_REQUEST['clothessize']);?>
            <input type="hidden" name="clothessize" value="<?php echo $_POST['$clothessize'];?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>靴のサイズ</p>
        </th>
        <td>
            <?php print($_REQUEST['shoesssize']);?> cm
            <input type="hidden" name="name" value="<?php echo $_POST['$shoesssize'];?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>好きなテイスト</p>
        </th>
        <td class="label-block">
            <?php print($_REQUEST['liketast']);?>
            <input type="hidden" name="liketast" value="<?php echo $_POST['$liketast'];?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>苦手テイスト</p>
        </th>
        <td class="label-block">
            <?php print($_REQUEST['disliketast']);?>
            <input type="hidden" name="disliketast" value="<?php echo $_POST['$disliketast'];?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>体型</p>
        </th>
        <td class="label-block">
            <?php print($_REQUEST['body_type']);
            $body_type_num = intval($_REQUEST['body_type']);
            ?>
            <input type="hidden" name="body_type" value="<?php echo $_POST['$body_type'];?>">
        </td>
    </tr>

</tbody>
</table>
</div> <!-- selfinformation -->
<div class="registration">
<button type="submit" name="registerbutton" >
登録する</button>
</div>
</div> <!-- register-content -->
<?php
    if (isset($_POST["registerbutton"])) {
        $link = mysql_connect("localhost", "root", "m4cRavuMaCaf", "ageru_web");
        if (!$link) {
        die('接続失敗です。'.mysql_error());
        }
        $db_selected = mysql_select_db('ageru_web', $link);
        if (!$db_selected) {
        die('データベース選択失敗です。'.mysql_error());
        }
        mysql_set_charset('utf8');
        $result = mysql_query("INSERT INTO `ageru_web`.`user_master` (`user_id`, `mailaddress`, `password`, `user_name_first`, `user_name_family`, `user_nickname`, `user_image`, `user_profile`, `user_url`, `user_birthday`, `user_sex`, `user_area`, `city_num`, `address1`, `address2`, `address3`, `phone`, `body_type`, `body_size`, `liketast`, `disliketast`, `brand`, `height`, `weight`, `clothessize`, `shoesssize`, `rent_item1`, `rent_item2`, `rent_item3`, `rent_item4`, `rent_item5`) VALUES (NULL, '".$_REQUEST['mailaddress']."', '".$_REQUEST['password']."', '".$_REQUEST['user_name_first']."', '".$_REQUEST['user_name_family']."', '".$_REQUEST['user_nickname']."', '".$_REQUEST['user_image']."', '".$_REQUEST['user_profile']."', '".$_REQUEST['user_url']."', '".$_REQUEST['user_birthday']."', '".$_REQUEST['user_sex']."', '".$_REQUEST['user_area']."', '".$_REQUEST['city_num']."', '".$_REQUEST['address1']."', '".$_REQUEST['address2']."', '".$_REQUEST['address3']."', '".$_REQUEST['phone']."','.$body_type_num.', '.$body_size_num.', '".$_REQUEST['liketast']."', '".$_REQUEST['disliketast']."', '".$_REQUEST['brand']."', '".$_REQUEST['height']."', '".$_REQUEST['weight']."', '".$_REQUEST['clothessize']."', '".$_REQUEST['shoesssize']."', NULL, NULL, NULL, NULL, NULL)");
        if (!$result) {
          exit('データを登録できませんでした。<p class="return-link"><a href="/register.php">登録画面に戻る</a></p><br><br>'.mysql_error());
        }elseif ($result) {
        header("Location: ./register-complete.php" );
        }
    }
?>
</form>

<p class="return-link"><a href="/register.php">登録画面に戻る</a></p>
</div> <!-- arrow-width -->
<?php include 'footer.php';?>