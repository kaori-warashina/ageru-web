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
<form class="form-register confirm" action="register_edit.php" method="post">
<div class="register-content">
<div class="login-register">
<input type="hidden" name="name" value="<?php echo $_POST['$mailaddress'];?>">
<input type="hidden" name="name" value="<?php echo $_POST['$password'];?>">
<input type="hidden" name="name" value="<?php echo $_POST['$user_name_first'];?>">
<input type="hidden" name="name" value="<?php echo $_POST['$user_name_family'];?>">
<input type="hidden" name="name" value="<?php echo $_POST['$user_nickname'];?>">
<input type="hidden" name="name" value="<?php echo $_POST['$user_profile'];?>">
<input type="hidden" name="name" value="<?php echo $_POST['$user_birthday'];?>">
<input type="hidden" name="name" value="<?php echo $_POST['$user_sex'];?>">
<input type="hidden" name="name" value="<?php echo $_POST['$user_area'];?>">
<input type="hidden" name="name" value="<?php echo $_POST['$city_num'];?>">
<input type="hidden" name="name" value="<?php echo $_POST['$address1'];?>">
<input type="hidden" name="name" value="<?php echo $_POST['$address2'];?>">
<input type="hidden" name="name" value="<?php echo $_POST['$address3'];?>">
<input type="hidden" name="name" value="<?php echo $_POST['$phone'];?>">
<input type="hidden" name="name" value="<?php echo $_POST['$birthday'];?>">
<input type="hidden" name="name" value="<?php echo $_POST['$body_type'];?>">
<input type="hidden" name="name" value="<?php echo $_POST['$body_size'];?>">
<input type="hidden" name="name" value="<?php echo $_POST['$liketast'];?>">
<input type="hidden" name="name" value="<?php echo $_POST['$disliketast'];?>">
<input type="hidden" name="name" value="<?php echo $_POST['$brand'];?>">
<input type="hidden" name="name" value="<?php echo $_POST['$height'];?>">
<input type="hidden" name="name" value="<?php echo $_POST['$weight'];?>">
<input type="hidden" name="name" value="<?php echo $_POST['$sizeSL'];?>">
<input type="hidden" name="name" value="<?php echo $_POST['$clothessize'];?>">
<input type="hidden" name="name" value="<?php echo $_POST['$shoesssize'];?>">

<table>
<tbody>
<tr>
    <th>
        <p>メールアドレス</p>
    </th>
    <td>
        <?php echo $_POST['mailaddress']; ?>
    </td>
</tr>
<tr>
    <th>
        <p>パスワード</p>
    </th>
    <td>
        <?php echo $_POST['password']; ?>
    </td>
</tr>
<tr>
    <th>
        <p>パスワード（再入力）</p>
    </th>
    <td>
        <?php echo $_POST['password']; ?>
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
            <?php echo $_POST['user_name_first']; ?>
        </td>
    </tr>
    <tr>
        <th>
            <p>氏名（フリガナ）</p>
        </th>
        <td>
            <?php echo $_POST['user_name_family']; ?>
        </td>
    </tr>
    <tr>
        <th>
            <p>ユーザーネーム</p>
        </th>
        <td>
            <?php echo $_POST['user_nickname']; ?>
        </td>
    </tr>
    <tr>
        <th>
            <p>郵便番号</p>
        </th>
        <td>
            <?php echo $_POST['city_num']; ?>
        </td>
    </tr>
    <tr>
        <th>
            <p>都道府県</p>
        </th>
        <td>
            <?php echo $_POST['user_area']; ?>
        </td>
    </tr>
    <tr>
        <th>
            <p>住所１（市区町村）</p>
        </th>
        <td>
            <?php echo $_POST['address1']; ?>
        </td>
    </tr>
    <tr>
        <th>
            <p>住所２（番地）</p>
        </th>
        <td>
           <?php echo $_POST['address2']; ?>
        </td>
    </tr>
    <tr>
        <th>
            <p>住所３（建物名）</p>
        </th>
        <td>
            <?php echo $_POST['address3']; ?>
        </td>
    </tr>
    <tr>
        <th>
            <p>お電話番号</p>
        </th>
        <td>
            <?php echo $_POST['phone']; ?>
        </td>
    </tr>
    <tr>
        <th>
            <p>性別</p>
        </th>
        <td>
            <?php echo $_POST['user_sex']; ?>
        </td>
    </tr>
    <tr>
        <th>
            <p>生年月日</p>
        </th>
        <td>
            <?php echo $_POST['birthday']; ?>
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
            <?php echo $_POST['user_profile']; ?>
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
            <?php echo $_POST['height']; ?> cm
        </td>
    </tr>
    <tr>
        <th>
            <p>体重</p>
        </th>
        <td>
            <?php echo $_POST['weight']; ?> kg
        </td>
    </tr>
    <tr>
        <th>
            <p>愛用ブランド</p>
        </th>
        <td>
            <?php echo $_POST['brand']; ?>
        </td>
    </tr>
    <tr>
        <th>
            <p>服のサイズ</p>
        </th>
        <td>
            <?php echo $_POST['sizeSL']; ?>
        </td>
    </tr>
    <tr>
        <th>
            <p>服の号数</p>
        </th>
        <td class="label-block">
            <?php echo $_POST['clothessize']; ?>
        </td>
    </tr>
    <tr>
        <th>
            <p>靴のサイズ</p>
        </th>
        <td>
            <?php echo $_POST['shoesssize']; ?> cm
        </td>
    </tr>
    <tr>
        <th>
            <p>好きなテイスト</p>
        </th>
        <td class="label-block">
            <?php echo $_POST['liketast']; ?>
        </td>
    </tr>
    <tr>
        <th>
            <p>苦手テイスト</p>
        </th>
        <td class="label-block">
            <?php echo $_POST['disliketast']; ?>
        </td>
    </tr>
    <tr>
        <th>
            <p>体型</p>
        </th>
        <td class="label-block">
            <?php echo $_POST['body_type']; ?>
        </td>
    </tr>
    <tr>
        <th>
            <p>自己紹介</p>
        </th>
        <td>
            <?php echo $_POST['height']; ?><br>
        </td>
    </tr>
</tbody>
</table>
</div> <!-- selfinformation -->
<div class="registration">
<?php
foreach (array_keys($_POST) as $key) {
    $_SESSION[$key] = $_POST['$key'];
}
?>
<button type="submit" name="submit">登録する</button>
</div>
</div> <!-- register-content -->
</form>
<p class="return-link"><a href="/register.php">登録画面に戻る</a></p>
</div> <!-- arrow-width -->
<?php include 'footer.php';?>
