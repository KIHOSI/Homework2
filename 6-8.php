<?php //以each與list印出關聯式陣列
$paper = array('copier' => "Copier & Multipurpose",
			   'inkjet' => "Inkjet Printer",
			   'laser' => "Laser Printer",
			   'copier' => "Photographic Paper");

while(list($item,$description) = each($paper)) //持續到each函式傳回FALSE值為止
{
	echo "$item : $description<br>";
}
?>