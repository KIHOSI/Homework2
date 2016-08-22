<?php //更新檔案
$fh = fopen("testfile.txt","r+") or die("Failed to open file"); //以讀取與寫入的方式開啟檔案
$test = fgets($fh); //存取testfile.txt的第一行
fseek($fh,0,SEEK_END); //將檔案指標移到檔尾
fwrite($fh,$test) or die("Could not write to file"); //將所存取第一行存到該檔案最尾
fclose($fh);
echo "File 'testfile.txt' successfully updated";
?>