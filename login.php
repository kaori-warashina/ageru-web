<?php
session_start();
$user_id = $_SESSION[user_id];
include 'header.php';?>

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
                <button type="submit" name="button">ログイン</button>
            </form>
        </div>
    </div>

<?php include 'footer.php';?>
