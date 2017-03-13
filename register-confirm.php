<?php include 'header.php';?>
<?php include 'register_edit.php';?>
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
        <?php print($_POST['mailaddress'])?>
    </td>
</tr>
<tr>
    <th>
        <p>パスワード</p>
    </th>
    <td>
        <?php print($_POST['password'])?>
    </td>
</tr>
<tr>
    <th>
        <p>パスワード（再入力）</p>
    </th>
    <td>
        <?php print($_POST['password'])?>
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
            <?php print($_POST['user_name_first'])?>
        </td>
    </tr>
    <tr>
        <th>
            <p>氏名（フリガナ）</p>
        </th>
        <td>
            <?php print($_POST['user_name_family'])?>
        </td>
    </tr>
    <tr>
        <th>
            <p>ユーザーネーム</p>
        </th>
        <td>
            <?php print($_POST['user_nickname'])?>
        </td>
    </tr>
    <tr>
        <th>
            <p>郵便番号</p>
        </th>
        <td>
            <?php print($_POST['city_num'])?>
        </td>
    </tr>
    <tr>
        <th>
            <p>都道府県</p>
        </th>
        <td>
            <?php print($_POST['user_area'])?>
        </td>
    </tr>
    <tr>
        <th>
            <p>住所１（市区町村）</p>
        </th>
        <td>
            <?php print($_POST['address1'])?>
        </td>
    </tr>
    <tr>
        <th>
            <p>住所２（番地）</p>
        </th>
        <td>
           <?php print($_POST['address2'])?>
        </td>
    </tr>
    <tr>
        <th>
            <p>住所３（建物名）</p>
        </th>
        <td>
            <?php print($_POST['address3'])?>
        </td>
    </tr>
    <tr>
        <th>
            <p>お電話番号</p>
        </th>
        <td>
            <?php print($_POST['phone'])?>
        </td>
    </tr>
    <tr>
        <th>
            <p>性別</p>
        </th>
        <td>
            <?php print($_POST['user_sex'])?>
        </td>
    </tr>
    <tr>
        <th>
            <p>生年月日</p>
        </th>
        <td>
            <?php print($_POST['birthday'])?>
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
            <?php print($_POST['user_profile'])?>
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
            <?php print($_POST['height'])?> cm
        </td>
    </tr>
    <tr>
        <th>
            <p>体重</p>
        </th>
        <td>
            <?php print($_POST['weight'])?> kg
        </td>
    </tr>
    <tr>
        <th>
            <p>愛用ブランド</p>
        </th>
        <td>
            <?php print($_POST['brand'])?>
        </td>
    </tr>
    <tr>
        <th>
            <p>服のサイズ</p>
        </th>
        <td>
            <?php print($_POST['sizeSL'])?>
        </td>
    </tr>
    <tr>
        <th>
            <p>服の号数</p>
        </th>
        <td class="label-block">
            <?php print($_POST['clothessize'])?>
        </td>
    </tr>
    <tr>
        <th>
            <p>靴のサイズ</p>
        </th>
        <td>
            <?php print($_POST['shoesssize'])?> cm
        </td>
    </tr>
    <tr>
        <th>
            <p>好きなテイスト</p>
        </th>
        <td class="label-block">
            <?php print($_POST['liketast'])?>
        </td>
    </tr>
    <tr>
        <th>
            <p>苦手テイスト</p>
        </th>
        <td class="label-block">
            <?php print($_POST['disliketast'])?>
        </td>
    </tr>
    <tr>
        <th>
            <p>体型</p>
        </th>
        <td class="label-block">
            <?php print($_POST['body_type'])?>
        </td>
    </tr>
    <tr>
        <th>
            <p>自己紹介</p>
        </th>
        <td>
            <?php print($_POST['height'])?><br>
        </td>
    </tr>
</tbody>
</table>
</div> <!-- selfinformation -->
<div class="registration">
<button type="submit" action="register-complete.php"  name="button">
<a href="register-complete.php">登録する</a></button>
</div>
</div> <!-- register-content -->
</form>
<p class="return-link"><a href="/register.php">登録画面に戻る</a></p>
</div> <!-- arrow-width -->
<?php include 'footer.php';?>
