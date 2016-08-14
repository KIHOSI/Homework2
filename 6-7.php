<?php //以foreach...as印出關聯式陣列
$paper = array('copier' => "Copier & Multipurpose",
			'inkjet' => "Inkjet Printer",
			'laser' => "Laser Printer",
			'copier' => "Photographic Paper");

foreach ($paper as $item => $description) {
	echo "$item : $description<br>";
}
?>