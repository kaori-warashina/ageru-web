<?php include 'header.php';?>
<div class="middle">
<div class="arrow-width">
<p class="co-p">
<?php

  if (is_uploaded_file($_FILES["upfile"]["tmp_name"])) {
    if (move_uploaded_file($_FILES["upfile"]["tmp_name"], "files/" . $_FILES["upfile"]["name"])) {
      chmod("files/" . $_FILES["upfile"]["name"], 0644);
      echo $_FILES["upfile"]["name"] . "をアップロードしました。";
    } else {
      echo "ファイルをアップロードできません。";
    }
  } else {
    echo "ファイルが選択されていません。";
  }
     
?>

<?php
        $link = mysql_connect("localhost", "root", "m4cRavuMaCaf", "ageru_web");
        if (!$link) {
        die('接続失敗です。'.mysql_error());
         }
        $db_selected = mysql_select_db('ageru_web', $link);
        if (!$db_selected) {
        die('データベース選択失敗です。'.mysql_error());
        }
        mysql_set_charset('utf8');
        $item_id = $_REQUEST['item_id'];
        $item_image = $_FILES["upfile"]["name"];
        $result = mysql_query("INSERT INTO item_image(`item_id`, `upfilename`) VALUES ('$item_id', '$item_image')");
        if (!$result) {
          exit('データを登録できませんでした。'.mysql_error());
        }
?></p>
    <p class="return-link home"><a href="/detail.php?item_id=<?php echo $item_id; ?>">アイテムページへ</a></p><br><br>
</div> <!-- arrow-width -->
</div> <!-- bottom-content -->
<?php include 'footer.php';?>


