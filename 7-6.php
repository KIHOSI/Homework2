<?php //以fread讀取檔案，可取出多行文字或一部分行數
$fh = fopen("testfile.txt",'r') or die("File does not exist or you lack permission to open it");
//開啟檔案
$text = fread($fh,3); //取出該檔案的三個字元
fclose($fh); //關閉檔案
echo $text; 
?>