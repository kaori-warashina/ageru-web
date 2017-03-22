<?php include 'header.php';?>
<div class="middle">
<div class="arrow-width">
<?php
$errmsg = ""; // エラーメッセージ
define("FOLDER_UPLOAD" ,"./media/") ; // 保存先のフォルダ名(任意のフォルダ名にする)  
if (isset($_FILES["upfile"])){
    // エラーの確認
    switch ($_FILES["upfile"]["error"]) {
      case UPLOAD_ERR_OK: // OK
          break;
      case UPLOAD_ERR_NO_FILE:   
          $errmsg = '<span style="font-weight:bold;color:red;">ファイルが選択されていません。</span><br />';
          break;
      case UPLOAD_ERR_INI_SIZE:  
      case UPLOAD_ERR_FORM_SIZE: 
          $errmsg .= '<span style="font-weight:bold;color:red;">「'. $_FILES["upfile"]["name"] . '」のファイルサイズが最大値を超えています。</span><br />';
          break;
      default:
          $errmsg .= '<span style="font-weight:bold;color:red;">「'. $_FILES["upfile"]["name"] . '」：エラーが発生しました。</span><br />';
          break;
    }                     
    
    if ($_FILES["upfile"]["error"] === UPLOAD_ERR_OK){
        // 同名ファイルの確認   
        if (file_exists(FOLDER_UPLOAD .$_FILES["upfile"]["name"])){            
           $errmsg .= '<span style="font-weight:bold;color:red;">「' .$_FILES["upfile"]["name"] . '」は既に存在します。</span><br />';  
        }           
    }               
    // テンポラリからファイルの移動 
    if ($errmsg  == ""){
        $filename  = FOLDER_UPLOAD . $_FILES["upfile"]["name"];
        if (move_uploaded_file($_FILES['upfile']['tmp_name'],$filename)){
           // パーミッションの変更
           chmod($filename,0644);  
        }else{
            $errmsg .= '<span style="font-weight:bold;color:red;">ファイルのアップロードに失敗しました。</span><br />';        
        }  
    } 
    // メッセージの表示
    if ($errmsg  == ""){
        $errmsg .= '<span style="font-weight:bold;">・「' . $_FILES["upfile"]["name"] . '」をアップロードしました。</span><br />'; 
    }
    // DB更新
      $link = mysql_connect("localhost", "root", "m4cRavuMaCaf", "ageru_web");
    if (!$link) {
      die('接続失敗です。'.mysql_error());
      }
      $db_selected = mysql_select_db('ageru_web', $link);
      if (!$db_selected) {
      die('データベース選択失敗です。'.mysql_error());
      }
      mysql_set_charset('utf8');
      $item_id = $_REQUEST[item_id];
      $result = mysql_query("INSERT INTO item_image( `img_id`, `item_id`, `upfilename`) VALUES (Null, '$item_id', '$_FILES["upfile"]["name"]');");
      if (!$result) {
        exit('データを登録できませんでした。'.mysql_error());
      }
     }      
?>
    <p class="co-p"><?php echo $errmsg; ?></p>
    <p class="return-link home"><a href="/mypage.php">マイページへ</a></p><br><br>
</div> <!-- arrow-width -->
</div> <!-- bottom-content -->
<?php include 'footer.php';?>