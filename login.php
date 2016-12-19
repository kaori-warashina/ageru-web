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
            <form class="login" action="index.html" method="post">
                <p>メールアドレス</p><input type="text" name="name" placeholder="メールアドレス">
                <p>パスワード</p><input type="password" name="name" placeholder="パスワード">
                <button type="button" name="button"><a href="index.php?user_id=4"> ログイン</a></button>
            </form>
        </div>
    </div>

<?php include 'footer.php';?>
