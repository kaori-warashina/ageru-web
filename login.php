<?php include 'header.php';?>

<div class="middle">
    <div class="middle-guide arrow-width">
        <ul>
            <li><a href="index.php">ageruトップ</a></li>
            <li><a href="register.php">会員登録</a></li>
        </ul>
    </div>
</div> <!-- middle -->

    <div class="arrow-width">
        <div class="login-page">
            <h2>ageruにログインする</h2>
            <form class="login" action="login_page.php" method="post">
                <p>メールアドレス</p><input type="text" name="mailaddress" placeholder="メールアドレス">
                <p>パスワード</p><input type="password" name="password" placeholder="パスワード">
                <button type="submit" name="submit">ログイン</button>
            </form>
        </div>
    </div>
<?php
    if (isset($_POST["submit"])) {
        $link = mysql_connect("localhost", "root", "m4cRavuMaCaf", "ageru_web");
        if (!$link) {
        die('接続失敗です。'.mysql_error());
        }
        $db_selected = mysql_select_db('ageru_web', $link);
        if (!$db_selected) {
        die('データベース選択失敗です。'.mysql_error());
        }

        mysql_set_charset('utf8');
        $mailaddress = $_REQUEST['mailaddress'];
        $password   = $_REQUEST['password'];

        $result = mysql_query("SELECT * FROM `user_master` WHERE `mailaddress` ='".$mailaddress."' `password` ='". $password."'");
        if (!$result) {
        die('ログインに失敗しました。'.mysql_error());
        }elseif ($result) {
        session_start() ;
        $_SESSION['user_id'] = $row[user_id];
        header( "Location: ./index.php" ) ;
    }
?>
<?php include 'footer.php';?>
