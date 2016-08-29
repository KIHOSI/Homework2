<?php 
//連結到MySQL伺服器
require_once 'login.php';
$db_server = mysql_connect($db_hostname,$db_username,$db_password);
if(!$db_server) die("Unable to connect to MySQL: " . mysql_error()); //連線失敗，傳送失敗訊息

//連線成功，選擇資料庫
mysql_select_db($db_database) or die("Unable to select databse: " . mysql_error());
?>