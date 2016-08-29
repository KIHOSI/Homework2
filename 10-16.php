<?php //將資料加入cats並回報它的ID
require_once 'login.php';
$db_server = mysql_connect($db_hostname,$db_username,$db_password);
if(!$db_server) die("Unable to connect to MySQL: " . mysql_error());
mysql_select_db($db_database) or die("Unable to select database: " . mysql_error());

//增加資料
$query = "INSERT INTO cats VALUES(NULL,'Lynx','Stumpy',5)";

$result = mysql_query($query);
echo "The Insert ID was :" , mysql_insert_id();
if (!$result) die("Database access failed: " . mysql_error());
?>