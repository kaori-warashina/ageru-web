<?php include 'header.php';?>
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
            <form class="form-register" action="" method="post">
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
            </form>
        </div>
    </div>

    <div class="register-content">
        <div class="necessity">
            <form class="form-register" action="" method="post">
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
                                <input type="text" name="city_num" maxlength='3' class="text-short">
                                <span>-</span>
                                <input type="text" name="city_num" maxlength='4' class="text-middium">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <p>都道府県</p>
                            </th>
                            <td>
                                <select class="text-middium" name="user_area">
                                    <option value="option" selected="selected">----</option>
                                    <option value="option">北海道</option>
                                    <option value="option">青森県</option>
                                    <option value="option">岩手県</option>
                                    <option value="option">宮城県</option>
                                    <option value="option">秋田県</option>
                                    <option value="option">山形県</option>
                                    <option value="option">福島県</option>
                                    <option value="option">茨城県</option>
                                    <option value="option">栃木県</option>
                                    <option value="option">群馬県</option>
                                    <option value="option">埼玉県</option>
                                    <option value="option">千葉県</option>
                                    <option value="option">東京都</option>
                                    <option value="option">神奈川県</option>
                                    <option value="option">新潟県</option>
                                    <option value="option">富山県</option>
                                    <option value="option">石川県</option>
                                    <option value="option">福井県</option>
                                    <option value="option">山梨県</option>
                                    <option value="option">長野県</option>
                                    <option value="option">岐阜県</option>
                                    <option value="option">静岡県</option>
                                    <option value="option">愛知県</option>
                                    <option value="option">三重県</option>
                                    <option value="option">滋賀県</option>
                                    <option value="option">京都</option>
                                    <option value="option">大阪府</option>
                                    <option value="option">兵庫県</option>
                                    <option value="option">奈良県</option>
                                    <option value="option">和歌山県</option>
                                    <option value="option">鳥取県</option>
                                    <option value="option">島根県</option>
                                    <option value="option">岡山県</option>
                                    <option value="option">広島県</option>
                                    <option value="option">山口県</option>
                                    <option value="option">徳島県</option>
                                    <option value="option">香川県</option>
                                    <option value="option">愛媛県</option>
                                    <option value="option">高知県</option>
                                    <option value="option">福岡県</option>
                                    <option value="option">佐賀県</option>
                                    <option value="option">長崎県</option>
                                    <option value="option">熊本県</option>
                                    <option value="option">大分県</option>
                                    <option value="option">宮崎県</option>
                                    <option value="option">鹿児島県</option>
                                    <option value="option">沖縄県</option>
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
                                <label><input type="radio" name="user_sex"> 男性</label>
                                <label><input type="radio" name="user_sex"> 女性</label>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <p>生年月日</p>
                            </th>
                            <td>
                                <select class="year" name="birthday">
                                    <option value="option" selected="selected">----</option>
                                    <option value="option">1980</option>
                                    <option value="option">1981</option>
                                    <option value="option">1982</option>
                                    <option value="option">1983</option>
                                    <option value="option">1984</option>
                                    <option value="option">1985</option>
                                    <option value="option">1986</option>
                                    <option value="option">1987</option>
                                    <option value="option">1988</option>
                                    <option value="option">1989</option>
                                    <option value="option">1990</option>
                                    <option value="option">1991</option>
                                    <option value="option">1992</option>
                                    <option value="option">1993</option>
                                    <option value="option">1994</option>
                                    <option value="option">1995</option>
                                    <option value="option">1996</option>
                                    <option value="option">1997</option>
                                    <option value="option">1998</option>
                                    <option value="option">1999</option>
                                    <option value="option">2000</option>
                                </select>
                                <span class="birthday">年</span>
                                <select class="month" name="birthday">
                                    <option value="option" selected="selected">--</option>
                                    <option value="option">1</option>
                                    <option value="option">2</option>
                                    <option value="option">3</option>
                                    <option value="option">4</option>
                                    <option value="option">5</option>
                                    <option value="option">6</option>
                                    <option value="option">7</option>
                                    <option value="option">8</option>
                                    <option value="option">9</option>
                                    <option value="option">10</option>
                                    <option value="option">11</option>
                                    <option value="option">12</option>
                                </select>
                                <span class="birthday">月</span>
                                <select class="day" name="birthday">
                                    <option value="option" selected="selected">--</option>
                                    <option value="option">1</option>
                                    <option value="option">2</option>
                                    <option value="option">3</option>
                                    <option value="option">4</option>
                                    <option value="option">5</option>
                                    <option value="option">6</option>
                                    <option value="option">7</option>
                                    <option value="option">8</option>
                                    <option value="option">9</option>
                                    <option value="option">10</option>
                                    <option value="option">11</option>
                                    <option value="option">12</option>
                                    <option value="option">13</option>
                                    <option value="option">14</option>
                                    <option value="option">15</option>
                                    <option value="option">16</option>
                                    <option value="option">17</option>
                                    <option value="option">18</option>
                                    <option value="option">19</option>
                                    <option value="option">20</option>
                                    <option value="option">21</option>
                                    <option value="option">22</option>
                                    <option value="option">23</option>
                                    <option value="option">24</option>
                                    <option value="option">25</option>
                                    <option value="option">26</option>
                                    <option value="option">27</option>
                                    <option value="option">28</option>
                                    <option value="option">29</option>
                                    <option value="option">30</option>
                                    <option value="option">31</option>
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
                                <label for="file_photo" class="file-photo">ファイルを選択
                                    <input type="file" id="file_photo" style="display:none;">
                                </label>
                                <span>選択されていません</span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <p>その他</p>
                            </th>
                            <td>
                                <textarea name="name" class="message"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div> <!-- necessity -->
    </div> <!-- register-content -->

    <div class="register-content">
        <div class="selfinformation">
            <form class="form-register" action="" method="post">
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
                                <label><input type="checkbox" name="brand"> moussy</label>
                                <label><input type="checkbox" name="brand"> moussy</label>
                                <label><input type="checkbox" name="brand"> moussy</label>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <p>服のサイズ</p>
                            </th>
                            <td>
                                <label><input type="radio" name="sizeSL"> SS</label>
                                <label><input type="radio" name="sizeSL"> S</label>
                                <label><input type="radio" name="sizeSL"> M</label>
                                <label><input type="radio" name="sizeSL"> L</label>
                                <label><input type="radio" name="sizeSL"> XL</label>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <p>服の号数</p>
                            </th>
                            <td class="label-block">
                                <label><input type="radio" name="clothessize"> 3号</label>
                                <label><input type="radio" name="clothessize"> 5号</label>
                                <label><input type="radio" name="clothessize"> 7号</label>
                                <label><input type="radio" name="clothessize"> 9号</label>
                                <label><input type="radio" name="clothessize"> 11号</label>
                                <label><input type="radio" name="clothessize"> 13号</label>
                                <label><input type="radio" name="clothessize"> その他</label>
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
                                <label><input type="checkbox" name="liketast"> フェミニン</label>
                                <label><input type="checkbox" name="liketast"> カジュアル</label>
                                <label><input type="checkbox" name="liketast"> ガーリー</label>
                                <label><input type="checkbox" name="liketast"> モード</label>
                                <label><input type="checkbox" name="liketast"> コンサバ</label>
                                <label><input type="checkbox" name="liketast"> ユニセックス</label>
                                <label><input type="checkbox" name="liketast"> ロック</label>
                                <label><input type="checkbox" name="liketast"> その他</label>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <p>苦手テイスト</p>
                            </th>
                            <td class="label-block">
                                <label><input type="checkbox" name="disliketast"> フェミニン</label>
                                <label><input type="checkbox" name="disliketast"> カジュアル</label>
                                <label><input type="checkbox" name="disliketast"> ガーリー</label>
                                <label><input type="checkbox" name="disliketast"> モード</label>
                                <label><input type="checkbox" name="disliketast"> コンサバ</label>
                                <label><input type="checkbox" name="disliketast"> ユニセックス</label>
                                <label><input type="checkbox" name="disliketast"> ロック</label>
                                <label><input type="checkbox" name="disliketast"> その他</label>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <p>体型</p>
                            </th>
                            <td class="label-block">
                                <label><input type="radio" name="body_type"> やせ型</label>
                                <label><input type="radio" name="body_type"> 標準</label>
                                <label><input type="radio" name="body_type"> ぽっちゃり</label>
                                <label><input type="radio" name="body_type"> その他</label>
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
            </form>
        </div> <!-- selfinformation -->
        <div class="registration">
            <button type="submit" name="button">
            <a href="register-confirm.php">
            登録する</a></button>
        </div>
    </div> <!-- register-content -->
</div> <!-- arrow-width -->
<?php include 'footer.php';?>
