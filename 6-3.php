<?php //用for迴圈印出
$paper[] = "Copier"; //自動放入陣列
$paper[] = "Inkjet";
$paper[] = "Laser";
$paper[] = "Photo";

for($j = 0;$j < 4;$j++)
{
	echo "$j : $paper[$j]<br>"; //雙引號裡，可直接打變數
}
?>