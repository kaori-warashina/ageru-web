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
<form class="form-register confirm" action="register-complete.php" method="post">
<div class="register-content">
<div class="login-register">

<table>
<tbody>
<tr>
    <th>
        <p>メールアドレス</p>
    </th>
    <td>
        <?php
        $mailaddress = $_REQUEST[mailaddress];
         print($_REQUEST[mailaddress]);?>
        <input type="hidden" name="mailaddress" value="<?php echo $mailaddress;?>">
    </td>
</tr>
<tr>
    <th>
        <p>パスワード</p>
    </th>
    <td>
        <?php
        $password = $_REQUEST[password];
         print($_REQUEST[password]);?>
        <input type="hidden" name="password" value="<?php echo $password;?>">
    </td>
</tr>
<tr>
    <th>
        <p>パスワード（再入力）</p>
    </th>
    <td>
        <?php print($_REQUEST[password]);?>
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
            <?php
            $user_name_first=$_REQUEST[user_name_first];
            print($_REQUEST[user_name_first]);?>
            <input type="hidden" name="user_name_first" value="<?php echo $user_name_first;?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>氏名（フリガナ）</p>
        </th>
        <td>
            <?php
            $user_name_family=$_REQUEST[user_name_family];
             print($_REQUEST[user_name_family]);?>
            <input type="hidden" name="user_name_family" value="<?php echo $user_name_family;?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>ユーザーネーム</p>
        </th>
        <td>
            <?php
            $user_nickname=$_REQUEST[user_nickname];
             print($_REQUEST[user_nickname]);?>
            <input type="hidden" name="user_nickname" value="<?php echo $user_nickname;?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>郵便番号</p>
        </th>
        <td>
            <?php 
            $str= intval($_REQUEST[city_num_1].$_REQUEST[city_num_2]);
            print($str);?>
            <input type="hidden" name="city_num" value="<?php echo $str;?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>都道府県</p>
        </th>
        <td>
            <?php
            $user_area= $_REQUEST[user_area];
             print($_REQUEST[user_area]);?>
            <input type="hidden" name="user_area" value="<?php echo $user_area;?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>住所１（市区町村）</p>
        </th>
        <td>
            <?php
            $address1= $_REQUEST[address1];
             print($_REQUEST[address1]);?>
            <input type="hidden" name="address1" value="<?php echo $address1;?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>住所２（番地）</p>
        </th>
        <td>
           <?php 
           $address2=$_REQUEST[address2];
             print($_REQUEST[address2]);?>
           <input type="hidden" name="address2" value="<?php echo $address2;?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>住所３（建物名）</p>
        </th>
        <td>
            <?php
            $address3=$_REQUEST[address3];
             print($_REQUEST[address3]);?>
            <input type="hidden" name="address3" value="<?php echo $address3;?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>お電話番号</p>
        </th>
        <td>
            <?php
            $phone=intval(_REQUEST[phone]);
             print($_REQUEST[phone]);?>
            <input type="hidden" name="phone" value="<?php echo $phone;?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>性別</p>
        </th>
        <td>
            <?php
            $user_sex=intval($_REQUEST[user_sex]);
             print($_REQUEST[user_sex]);?>
            <input type="hidden" name="user_sex" value="<?php echo $user_sex;?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>生年月日</p>
        </th>
        <td>
            <?php 
            $str=intval($_REQUEST[birthday_y].$_REQUEST[birthday_m].$_REQUEST[birthday_d]);
            print($str);?>
            <input type="hidden" name="birthday" value="<?php echo $str;?>">

        </td>
    </tr>
    <tr>
        <th>
            <p>プロフィール画像</p>
        </th>
        <td>
            <img src="/image/img_profile.png">
            <input type="hidden" name="user_image" value="0">
        </td>
    </tr>
    <tr>
        <th>
            <p>自己紹介</p>

        </th>
        <td>
        <?php
            $user_profile=$_REQUEST[user_profile];
             print($_REQUEST[user_profile]);?>
            <input type="hidden" name="user_profile" value="<?php echo $user_profile;?>">
        </td>
    </tr>
    <tr>
    <th>
        <p>ユーザーURL</p>
    </th>
    <td>
        <?php
        $user_url=$_REQUEST[user_url];
         print($_REQUEST[user_url]);?>
        <input type="hidden" name="user_url" value="<?php echo $user_url;?>">
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
            <?php
            $height=intval($_REQUEST[height]);
             print($_REQUEST[height]);?> cm
            <input type="hidden" name="height" value="<?php echo $height;?>">

        </td>
    </tr>
    <tr>
        <th>
            <p>体重</p>
        </th>
        <td>
            <?php
            $weight=intval($_REQUEST[weight]);
             print($_REQUEST[weight]);?> kg
            <input type="hidden" name="name" value="<?php echo $weight;?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>愛用ブランド</p>
        </th>
        <td>
            <?php
            $brand= $_REQUEST[brand];
             print($_REQUEST[brand]);?>
            <input type="hidden" name="brand" value="<?php echo $brand;?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>服のサイズ</p>
        </th>
        <td>
            <?php $body_size_num = intval($_REQUEST[body_size]);
            $str = $_REQUEST[body_size];
            $search = array('1','2','3','4','5','6');
            $replace = array('SS','S','M','L','XL','other');
            print str_replace($search,$replace,$str);
            ?>
            <input type="hidden" name="body_size" value="<?php echo $body_size_num;?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>服の号数</p>
        </th>
        <td class="label-block">
            <?php
            $clothessize = $_REQUEST[clothessize];
             print($_REQUEST[clothessize]);?>
            <input type="hidden" name="clothessize" value="<?php echo $clothessize;?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>靴のサイズ</p>
        </th>
        <td>
            <?php
            $shoesssize=intval($_REQUEST[shoesssize]);
             print($_REQUEST[shoesssize]);?> cm
            <input type="hidden" name="name" value="<?php echo $shoesssize;?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>好きなテイスト</p>
        </th>
        <td class="label-block">
        <?php 
        $str = $_REQUEST[liketast];
        $search = array('1','2','3','4','5','6','7','8');
        $replace = array('フェミニン','カジュアル','ガーリー','モード','コンサバ','ユニセックス','ロック','その他');
        print str_replace($search,$replace,$str);
        ?>
        <input type="hidden" name="liketast" value="<?php echo $str;?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>苦手テイスト</p>
        </th>
        <td class="label-block">
        <?php $str = $_REQUEST[disliketast];
        $search = array('1','2','3','4','5','6','7','8');
        $replace = array('フェミニン','カジュアル','ガーリー','モード','コンサバ','ユニセックス','ロック','その他');
        print str_replace($search,$replace,$str);
        ?>
            <input type="hidden" name="disliketast" value="<?php echo $str;?>">
        </td>
    </tr>
    <tr>
        <th>
            <p>体型</p>
        </th>
        <td class="label-block">
            <?php $body_type_num = intval($_REQUEST[body_type]);
            $str = $_REQUEST[body_type];
            $search = array('1','2','3','4');
            $replace = array('やせ型','標準','ぽっちゃり','その他');
            print str_replace($search,$replace,$str);
            ?>
            <input type="hidden" name="body_type" value="<?php echo $body_type_num;?>">
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
</form>

<p class="return-link"><a href="/register.php">登録画面に戻る</a></p>
</div> <!-- arrow-width -->
<?php include 'footer.php';?>