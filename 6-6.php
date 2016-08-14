<?php //以foreach...as顯示數值陣列
$paper = array("Copier","Inkjet","Laser","Photo");
$j = 0;

foreach($paper as $item)
{
	echo "$j: $item<br>";
	++$j;
}
?>