<?php
$fh = fopen("testfile.txt","w") or die("Failed to create file"); 
//開啟testfile.txt並進行寫入，如果檔案不存在，則會建立一個新檔
//否則以die函式結束程式並傳回錯誤訊息
$text = <<<_END
Line1
Line2
Line3

_END;
fwrite($fh,$text) or die("Could not write to file"); //如果$fh傳回是TRUE，則寫入$text
fclose($fh); //關閉檔案
echo "File 'testfile.txt' written successfully"; //如果上述都成功，顯示訊息
?>