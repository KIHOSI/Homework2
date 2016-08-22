<?php //以fgets讀取檔案
$fh = fopen("testfile.txt",'r') or die("File does not exist or you lack permission to open it");
//開啟檔案
$line = fgets($fh); //抓取該檔案第一行文字
fclose($fh); //關閉檔案
echo $line; 
?>