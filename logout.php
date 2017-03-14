<?php
session_start() ;
$user_id = $_SESSION[user_id];
include 'header.php'; ?>
<div class="middle">
    <div class="middle-guide arrow-width">
        <ul>
            <li><a href="#">ageruトップ</a></li>
            <li>ログアウト</li>
        </ul>
    </div>
</div> <!-- middle -->
<div class="arrow-width">
    <p class="co-p">ログアウトしました。</p>
    <p class="return-link home"><a href="/">トップページへ</a></p>
</div> <!-- arrow-width -->
<?php
$_SESSION = array() ;
session_destroy() ;
include 'footer.php'; ?>