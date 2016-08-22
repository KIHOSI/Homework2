<?php //更新檔案時使用檔案鎖定
$fh = fopen("testfile.txt","r+") or die("Failed to open file"); //以讀取與寫入的方式開啟檔案
$test = fgets($fh); //存取testfile.txt的第一行

if(flock($fh,LOCK_EX)){ //檔案鎖定
	fseek($fh,0,SEEK_END); //將檔案指標移到檔尾
	fwrite($fh,$test) or die("Could not write to file"); //將所存取第一行存到該檔案最尾	
	flock($fh,LOCK_UN); //檔案解鎖
}

fclose($fh);
echo "File 'testfile.txt' successfully updated";
?>