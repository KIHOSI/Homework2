<?php //重新命名檔案
if(!rename('testfile2.txt','testfile2.new')) 
	echo "Could not rename file";
else echo "File successfully renamed to 'testfile2.new'";
?>