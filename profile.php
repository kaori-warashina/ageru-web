<?php include 'header.php'; ?>
<div class="middle">
    <div class="middle-guide arrow-width">
        <ul>
            <li><a href="#">ageruトップ</a></li>
            <li><a href="#">マイページ</a></li>
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
            <form class="form-profile" action="" method="post">
                <table>
                    <tbody>
                        <tr>
                            <th>
                                <label>ユーザ名</label>
                            </th>
                            <td>
                                UserName
                                <br>
                                <span class="notchange-username">ユーザ名は変更できません。</span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label>プロフィール写真</label>
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
                                <label>自己紹介</label>
                            </th>
                            <td>
                                <textarea name="user_profile" class="selfintroduction-profile" ></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label>外部サイトURL</label>
                            </th>
                            <td>
                                <input type="text" name="user_url" placeholder="ブログ、ホームページなどのURL" class="outside-url">
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
                                    <option value="option">福岡</option>
                                    <option value="option">佐賀</option>
                                    <option value="option">長崎</option>
                                    <option value="option">大分</option>
                                    <option value="option">熊本</option>
                                    <option value="option">宮崎</option>
                                    <option value="option">鹿児島</option>
                                    <option value="option">沖縄</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="change-profile">
                    <button type="button" name="button">変更する</button>
                </div>
            </form>
        </div> <!-- page-content -->
    </div> <!-- mypagetop-content -->
</div> <!-- container -->
<?php include 'footer.php'; ?>
