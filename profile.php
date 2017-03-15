<?php
session_start();
$user_id = $_SESSION[user_id];
include 'header.php'; ?>
<div class="middle">
<?php
$result = mysql_query("SELECT * FROM `user_master` WHERE `user_id`=".$user_id);
if (!$result) {
die('クエリーが失敗しました。'.mysql_error());
}
?>

    <div class="middle-guide arrow-width">
        <ul>
            <li><a href="index.php">ageruトップ</a></li>
            <li><a href="mypage.php">マイページ</a></li>
            <li><a href="#">プロフィール編集</a></li>
        </ul>
    </div>
</div> <!-- middle -->

<div class="container arrow-width clearfix">
    <aside class="sidebar">
        <div class="sider-top">
            <div class="user-image-name">
                <img src="/image/img_dummy04.png">
                <p>userName</p>
            </div>
        </div>
        <div class="sidebar-bottom profile clearfix">
            <ul>
                <li><a href="#">お知らせ</a></li>
                <li><a href="#">ログアウト</a></li>
            </ul>
        </div>
    </aside>

    <div class="myprofile-content">
        <h2>プロフィール</h2>
        <div class="page-content">
            <form class="form-profile" action="register-confirm.php" method="post">
                <table>
                    <tbody>
                        <tr>
                            <th>
                                <label>ユーザ名</label>
                            </th>
                            <td>
                                <?php echo $row['user_id']?>
                                <br>
                                <span class="notchange-username">ユーザ名は変更できません。</span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label>プロフィール写真</label>
                            </th>
                            <td>
                               <?php echo '<img src="/user_media/'.$row['user_image'].'">'?>
                                <br>
                                <label for="file_photo" class="file-photo">ファイルを選択
                                    <input type="file" id="file_photo" style="display:none;">
                                </label>
                                <span>選択されていません</span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label>自己紹介</label>
                            </th>
                            <td>
                                <textarea name="message" class="selfintroduction-profile" ><?php echo $row['message']?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label>外部サイトURL</label>
                            </th>
                            <td>
                                <input type="text" name="user_url" placeholder="ブログ、ホームページなどのURL" class="outside-url" value="<?php echo $row['message']?>">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label>生年月日</label>
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
                                <span class="birthday-profile">年</span>
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
                                <span class="birthday-profile">月</span>
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
                                <span class="birthday-profile">日</span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label>性別</label>
                            </th>
                            <td>
                                <select class="sex-profile" name="user_sex">
                                    <option value="option" selected="selected">----</option>
                                    <option value="option">男性</option>
                                    <option value="option">女性</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label>住んでるエリア</label>
                            </th>
                            <td>
                                <select class="area-profile" name="user_area">
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
                    </tbody>
                </table>
                <div class="change-profile">
                    <button type="button" type="submit" name="button">変更する</button>
                </div>
            </form>
        </div> <!-- page-content -->
    </div> <!-- mypagetop-content -->
</div> <!-- container -->
<?php include 'footer.php'; ?>
