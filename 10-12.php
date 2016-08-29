<?php //增加資料至cats資料表
require_once 'login.php';
$db_server = mysql_connect($db_hostname,$db_username,$db_password);
if(!$db_server) die("Unable to connect to MySQL: " . mysql_error());
mysql_select_db($db_database) or die("Unable to select database: " . mysql_error());

//增加資料
$query = "INSERT INTO cats VALUES(NULL,'Lion','Leo',4)"; 
$query = "INSERT INTO cats VALUES(NULL,'Cougar','Growler',2)"; 
$query = "INSERT INTO cats VALUES(NULL,'Cheetah','Charlie',3)"; 
//因為id是AUTO_INCREMENT，MYSQL會依照順序找出下一個可使用的號碼來決定要指派的值。
//所以，傳入NULL值會忽略

$result = mysql_query($query);
if (!$result) die("Database access failed: " . mysql_error());
?>