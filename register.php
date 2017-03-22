<?php
session_start();
include 'header.php';?>
<div class="middle">
<div class="middle-guide arrow-width">
<ul>
<li><a href="index.php">ageruトップ</a></li>
<li>会員登録</li>
</ul>
</div>
</div> <!-- middle -->

<div class="arrow-width">
<div class="register-content">
<div class="login-register">
<form class="form-register" action="register-confirm.php" method="post" enctype="multipart/form-data" >
<div class="form-register">
<table>
<tbody>
<tr>

    <th>
        <p>メールアドレス</p>
    </th>
    <td>
        <input type="text" name="mailaddress" class="text">
    </td>
</tr>
<tr>
    <th>
        <p>パスワード</p>
    </th>
    <td>
        <input type="text" name="password" class="text">
    </td>
</tr>
<tr>
    <th>
        <p>パスワード<br>（再入力）</p>
    </th>
    <td>
        <input type="text" name="password" class="text">
    </td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<div class="form-register">
<div class="register-content">
<div class="necessity">
<table>
<tbody>
<tr>
    <th>
        <p>氏名</p>
    </th>
    <td>
        <input type="text" name="user_name_family" class="text">
    </td>
</tr>
<tr>
    <th>
        <p>氏名（フリガナ）</p>
    </th>
    <td>
        <input type="text" name="user_name_first" class="text">
    </td>
</tr>
<tr>
    <th>
        <p>ユーザーネーム</p>
    </th>
    <td>
        <input type="text" name="user_nickname" class="text">
    </td>
</tr>
<tr>
    <th>
        <p>郵便番号</p>
    </th>
    <td>
        <input type="text" name="city_num_1" maxlength='3' class="text-short">
        <span>-</span>
        <input type="text" name="city_num_2" maxlength='4' class="text-middium">
    </td>
</tr>
<tr>
    <th>
        <p>都道府県</p>
    </th>
    <td>
        <select class="text-middium" name="user_area">
            <option value="option" selected="selected">----</option>
            <option value="北海道">北海道</option>
            <option value="青森県">青森県</option>
            <option value="岩手県">岩手県</option>
            <option value="宮城県">宮城県</option>
            <option value="秋田県">秋田県</option>
            <option value="山形県">山形県</option>
            <option value="福島県">福島県</option>
            <option value="茨城県">茨城県</option>
            <option value="栃木県">栃木県</option>
            <option value="群馬県">群馬県</option>
            <option value="埼玉県">埼玉県</option>
            <option value="千葉県">千葉県</option>
            <option value="東京都">東京都</option>
            <option value="神奈川県">神奈川県</option>
            <option value="新潟県">新潟県</option>
            <option value="富山県">富山県</option>
            <option value="石川県">石川県</option>
            <option value="福井県">福井県</option>
            <option value="山梨県">山梨県</option>
            <option value="長野県">長野県</option>
            <option value="岐阜県">岐阜県</option>
            <option value="静岡県">静岡県</option>
            <option value="愛知県">愛知県</option>
            <option value="三重県">三重県</option>
            <option value="滋賀県">滋賀県</option>
            <option value="京都">京都</option>
            <option value="大阪府">大阪府</option>
            <option value="兵庫県">兵庫県</option>
            <option value="奈良県">奈良県</option>
            <option value="和歌山県">和歌山県</option>
            <option value="鳥取県">鳥取県</option>
            <option value="島根県">島根県</option>
            <option value="岡山県">岡山県</option>
            <option value="広島県">広島県</option>
            <option value="山口県">山口県</option>
            <option value="徳島県">徳島県</option>
            <option value="香川県">香川県</option>
            <option value="愛媛県">愛媛県</option>
            <option value="高知県">高知県</option>
            <option value="福岡県">福岡県</option>
            <option value="佐賀県">佐賀県</option>
            <option value="長崎県">長崎県</option>
            <option value="熊本県">熊本県</option>
            <option value="大分県">大分県</option>
            <option value="宮崎県">宮崎県</option>
            <option value="鹿児島県">鹿児島県</option>
            <option value="沖縄県">沖縄県</option>
        </select>
    </td>
</tr>
<tr>
    <th>
        <p>住所１（市区町村）</p>
    </th>
    <td>
        <input type="text" name="address1" class="text">
    </td>
</tr>
<tr>
    <th>
        <p>住所２（番地）</p>
    </th>
    <td>
        <input type="text" name="address2" class="text">
    </td>
</tr>
<tr>
    <th>
        <p>住所３（建物名）</p>
    </th>
    <td>
        <input type="text" name="address3" class="text">
    </td>
</tr>
<tr>
    <th>
        <p>お電話番号</p>
    </th>
    <td>
        <input type="text" name="phone" class="text">
    </td>
</tr>
<tr>
    <th>
        <p>性別</p>
    </th>
    <td>
        <label><input type="radio" name="user_sex" value="0"> 男性</label>
        <label><input type="radio" name="user_sex" value="1"> 女性</label>
    </td>
</tr>
<tr>
    <th>
        <p>生年月日</p>
    </th>
    <td>
        <select class="year" name="birthday_y">
            <option value="option" selected="selected">----</option>
            <option value="1980">1980</option>
            <option value="1981">1981</option>
            <option value="1982">1982</option>
            <option value="1983">1983</option>
            <option value="1984">1984</option>
            <option value="1985">1985</option>
            <option value="1986">1986</option>
            <option value="1987">1987</option>
            <option value="1988">1988</option>
            <option value="1989">1989</option>
            <option value="1990">1990</option>
            <option value="1991">1991</option>
            <option value="1992">1992</option>
            <option value="1993">1993</option>
            <option value="1994">1994</option>
            <option value="1995">1995</option>
            <option value="1996">1996</option>
            <option value="1997">1997</option>
            <option value="1998">1998</option>
            <option value="1999">1999</option>
            <option value="2000">2000</option>
        </select>
        <span class="birthday">年</span>
        <select class="month" name="birthday_m">
            <option value="option" selected="selected">--</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
        <span class="birthday">月</span>
        <select class="day" name="birthday_d">
            <option value="option" selected="selected">--</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
        </select>
        <span class="birthday">日</span>
    </td>
</tr>
<tr>
    <th>
        <p>プロフィール画像</p>
    </th>
    <td>
        <img src="/image/img_profile.png">
        <br>
        <span><input type="file" name="user_image" size="30" id="file_photo"/><br /></span>
    </td>
</tr>

<tr>
    <th>
        <p>ユーザーURL</p>
    </th>
    <td>
        <input type="text" name="user_url" class="text">
    </td>
</tr>
<!-- <tr>
    <th>
        <p>その他</p>
    </th>
    <td>
        <textarea name="name" class="message"></textarea>
    </td>
</tr> -->
</tbody>
</table>
</div> <!-- necessity -->
</div> <!-- register-content -->
</div>
<div class="register-content">
<div class="selfinformation">
<div class="form-register">
<table>
<tbody>
<tr>
    <th>
        <p>身長</p>
    </th>
    <td>
        <input type="text" name="height" class="text-middium"> cm
    </td>
</tr>
<tr>
    <th>
        <p>体重</p>
    </th>
    <td>
        <input type="text" name="weight" class="text-middium"> kg
    </td>
</tr>
<tr>
    <th>
        <p>愛用ブランド</p>
    </th>
    <td>
        <label><input type="checkbox" name="brand" value="moussy"> moussy</label>
        <label><input type="checkbox" name="brand" value="moussy"> moussy</label>
        <label><input type="checkbox" name="brand" value="moussy"> moussy</label>
    </td>
</tr>
<tr>
    <th>
        <p>服のサイズ</p>
    </th>
    <td>
        <label><input type="radio" name="body_size" value="1"> SS</label>
        <label><input type="radio" name="body_size" value="2"> S</label>
        <label><input type="radio" name="body_size" value="3"> M</label>
        <label><input type="radio" name="body_size" value="4"> L</label>
        <label><input type="radio" name="body_size" value="5"> XL</label>
        <label><input type="radio" name="body_size" value="6"> other</label>
    </td>
</tr>
<tr>
    <th>
        <p>服の号数</p>
    </th>
    <td class="label-block">
        <label><input type="radio" name="clothessize" value="3号"> 3号</label>
        <label><input type="radio" name="clothessize" value="5号"> 5号</label>
        <label><input type="radio" name="clothessize" value="7号"> 7号</label>
        <label><input type="radio" name="clothessize" value="9号"> 9号</label>
        <label><input type="radio" name="clothessize" value="11号"> 11号</label>
        <label><input type="radio" name="clothessize" value="13号"> 13号</label>
        <label><input type="radio" name="clothessize" value="その他"> その他</label>
    </td>
</tr>
<tr>
    <th>
        <p>靴のサイズ</p>
    </th>
    <td>
        <input type="text" name="shoesssize" class="text-middium"> cm
    </td>
</tr>
<tr>
    <th>
        <p>好きなテイスト</p>
    </th>
    <td class="label-block">
        <label><input type="checkbox" name="liketast" value="1"> フェミニン</label>
        <label><input type="checkbox" name="liketast" value="2"> カジュアル</label>
        <label><input type="checkbox" name="liketast" value="3"> ガーリー</label>
        <label><input type="checkbox" name="liketast" value="4"> モード</label>
        <label><input type="checkbox" name="liketast" value="5"> コンサバ</label>
        <label><input type="checkbox" name="liketast" value="6"> ユニセックス</label>
        <label><input type="checkbox" name="liketast" value="7"> ロック</label>
        <label><input type="checkbox" name="liketast" value="8"> その他</label>
    </td>
</tr>
<tr>
    <th>
        <p>苦手テイスト</p>
    </th>
    <td class="label-block">
        <label><input type="checkbox" name="disliketast" value="1"> フェミニン</label>
        <label><input type="checkbox" name="disliketast" value="2"> カジュアル</label>
        <label><input type="checkbox" name="disliketast" value="3"> ガーリー</label>
        <label><input type="checkbox" name="disliketast" value="4"> モード</label>
        <label><input type="checkbox" name="disliketast" value="5"> コンサバ</label>
        <label><input type="checkbox" name="disliketast" value="6"> ユニセックス</label>
        <label><input type="checkbox" name="disliketast" value="7"> ロック</label>
        <label><input type="checkbox" name="disliketast" value="8"> その他</label>
    </td>
</tr>
<tr>
    <th>
        <p>体型</p>
    </th>
    <td class="label-block">
        <label><input type="radio" name="body_type" value="1"> やせ型</label>
        <label><input type="radio" name="body_type" value="2"> 標準</label>
        <label><input type="radio" name="body_type" value="3"> ぽっちゃり</label>
        <label><input type="radio" name="body_type" value="4"> その他</label>
    </td>
</tr>
<tr>
    <th>
        <p>自己紹介</p>
    </th>
    <td>
        <textarea name="user_profile" class="message"></textarea>
    </td>
</tr>
</tbody>
</table>
</div>
</div> <!-- selfinformation -->
<div class="registration">
<button type="submit" name="button">登録する</button>
</form>

</div>
</div> <!-- register-content -->
</div> <!-- arrow-width -->
<?php include 'footer.php';?>