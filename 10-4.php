<?php //查詢資料庫
require_once '10-2.php';
$query = "SELECT * FROM classics";
$result = mysql_query($query);

if(!$result) die ("Database access failed: " . mysql_error());

?>