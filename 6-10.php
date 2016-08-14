<?php //多維關聯式陣列
$products = array(
	'paper' => array(
		'copier' => "Copier & Multipurpose",
		'inkjet' => "Inkjet Printer",
		'laser' => "Laser Printer",
		'copier' => "Photographic Paper"),
	'pens' => array(
		'ball' => "Ball Point",
		'hilite' => "Highlighters",
		'marker' => "Markers"),
	'misc' => array(
		'tape' => "Sticky Type",
		'glue' => "Adhesives",
		'clips' => "Paperclips")
	);

echo "<pre>";
foreach ($products as $section => $items) {
	foreach ($items as $key => $value) {
		echo "$section:\t$key\t($value)<br>";
	}
}
echo "</pre>";

?>