<?php //使用array關鍵字在陣列中賦值
$p1 = array("Copier","Inkjet","Laser","Photo");
echo "p1 element: " . $p1[2] . "<br>";

$p2 = array('copier' => "Copier & Multipurpose",
			'inkjet' => "Inkjet Printer",
			'laser' => "Laser Printer",
			'copier' => "Photographic Paper");

echo "p2 element: " . $p2['inkjet'] . "<br>";

?>