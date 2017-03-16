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
<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // フォームから送信されたデータを各変数に格納
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
    }

 if (isset($_POST["submit"])) {
    $result = mysql_query("
    INSERT INTO `ageru_web`.`user_master` 
    (`mailaddress`, `password`, `user_name_first`, `user_name_family`, `user_nickname`, `user_image`, `user_profile`, `user_url`, `user_birthday`, `user_sex`, `user_area`, `city_num`, `address1`, `address2`, `address3`, `phone`, `birthday`, `body_type`, `body_size`, `liketast`, `disliketast`, `brand`, `height`, `weight`, `sizeSL`, `clothessize`, `shoesssize`)
    VALUES 
    (".$mailaddress."', '".$password."', '".$user_birthday."', '".$user_name_first."', '".$user_name_family."', '".$user_nickname."', '".$user_image."', '".$user_profile."', '".$user_birthday."', '".$user_sex."', '".$user_area."', '".$city_num."', '".$address1."', '".$address2."', '".$address3."', '".$phone."', '".$birthday."', '".$body_type."', '".$body_size."', '".$liketast."', '".$disliketast."', '".$brand."', '".$height."', '".$weight."', '".$sizeSL."', '".$clothessize."')");
     }
    header("Location: ./register-comnlete.php");
    exit;
?>

<table>
<tbody>
<tr>
    <th>
        <p>メールアドレス</p>
    </th>
    <td>
        <?php print($mailaddress)?>
    </td>
</tr>
<tr>
    <th>
        <p>パスワード</p>
    </th>
    <td>
        <?php print($password)?>
    </td>
</tr>
<tr>
    <th>
        <p>パスワード（再入力）</p>
    </th>
    <td>
        <?php print($password)?>
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
            <?php print($user_name_first)?>
        </td>
    </tr>
    <tr>
        <th>
            <p>氏名（フリガナ）</p>
        </th>
        <td>
            <?php print($user_name_family)?>
        </td>
    </tr>
    <tr>
        <th>
            <p>ユーザーネーム</p>
        </th>
        <td>
            <?php print($user_nickname)?>
        </td>
    </tr>
    <tr>
        <th>
            <p>郵便番号</p>
        </th>
        <td>
            <?php print($city_num)?>
        </td>
    </tr>
    <tr>
        <th>
            <p>都道府県</p>
        </th>
        <td>
            <?php print($user_area)?>
        </td>
    </tr>
    <tr>
        <th>
            <p>住所１（市区町村）</p>
        </th>
        <td>
            <?php print($address1)?>
        </td>
    </tr>
    <tr>
        <th>
            <p>住所２（番地）</p>
        </th>
        <td>
           <?php print($address2)?>
        </td>
    </tr>
    <tr>
        <th>
            <p>住所３（建物名）</p>
        </th>
        <td>
            <?php print($address3)?>
        </td>
    </tr>
    <tr>
        <th>
            <p>お電話番号</p>
        </th>
        <td>
            <?php print($phone)?>
        </td>
    </tr>
    <tr>
        <th>
            <p>性別</p>
        </th>
        <td>
            <?php print($user_sex)?>
        </td>
    </tr>
    <tr>
        <th>
            <p>生年月日</p>
        </th>
        <td>
            <?php print($birthday)?>
        </td>
    </tr>
    <tr>
        <th>
            <p>プロフィール画像</p>
        </th>
        <td>
            <img src="/image/img_profile.png">
        </td>
    </tr>
    <tr>
        <th>
            <p>その他</p>
            <?php print($user_profile)?>
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
            <?php print($height)?> cm
        </td>
    </tr>
    <tr>
        <th>
            <p>体重</p>
        </th>
        <td>
            <?php print($weight)?> kg
        </td>
    </tr>
    <tr>
        <th>
            <p>愛用ブランド</p>
        </th>
        <td>
            <?php print($brand)?>
        </td>
    </tr>
    <tr>
        <th>
            <p>服のサイズ</p>
        </th>
        <td>
            <?php print($sizeSL)?>
        </td>
    </tr>
    <tr>
        <th>
            <p>服の号数</p>
        </th>
        <td class="label-block">
            <?php print($clothessize)?>
        </td>
    </tr>
    <tr>
        <th>
            <p>靴のサイズ</p>
        </th>
        <td>
            <?php print($shoesssize)?> cm
        </td>
    </tr>
    <tr>
        <th>
            <p>好きなテイスト</p>
        </th>
        <td class="label-block">
            <?php print($liketast)?>
        </td>
    </tr>
    <tr>
        <th>
            <p>苦手テイスト</p>
        </th>
        <td class="label-block">
            <?php print($disliketast)?>
        </td>
    </tr>
    <tr>
        <th>
            <p>体型</p>
        </th>
        <td class="label-block">
            <?php print($body_type)?>
        </td>
    </tr>
    <tr>
        <th>
            <p>自己紹介</p>
        </th>
        <td>
            <?php print($height)?><br>
        </td>
    </tr>
</tbody>
</table>
</div> <!-- selfinformation -->
<div class="registration">
<?php
foreach (array_keys($_POST) as $key) {
    $_SESSION[$key] = $_POST[$key];
}
?>
<button type="submit" name="submit">登録する</button>
</div>
</div> <!-- register-content -->
</form>
<p class="return-link"><a href="/register.php">登録画面に戻る</a></p>
</div> <!-- arrow-width -->
<?php include 'footer.php';?>
