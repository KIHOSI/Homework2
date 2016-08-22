<?php //upload.php
echo <<<_END
<html><head><title>PHP Form Upload</title></head><body>
<form method='post' action='7-15.php' enctype='multipart/form-data'>
Select File: <input type='file' name='filename' size='10'>
<input type='submit' value='Upload'>
_END;

if($_FILES) //檢查是否有上傳檔案
{
	$name = $_FILES['filename']['name']; //檔案名
	move_uploaded_file($_FILES['filename']['tmp_name'], $name); 
	//從暫存空間到目前資料夾建立檔案，檔名為$name
	echo "Uploaded image '$name'<br><img src='$name'>";
}

echo "</body></html>";
?>