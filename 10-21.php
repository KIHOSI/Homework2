<?php //使用佔位符避免SQL INJECTION，確保資料每一個項目會直接插入資料庫中，無法被編譯SQL指令
require_once 'login.php';
$db_server = mysql_connect($db_hostname,$db_username,$db_password);
if(!$db_server) die("Unable to connect to MySQL: " . mysql_error());
mysql_select_db($db_database) or die("Unable to select database: " . mysql_error());

//準備一個statement陳述式，用來在classics資料表中插入資料
$query = 'PREPARE statement FROM "INSERT INTO classics VALUES(?,?,?,?)"';
//mysql_query($query);
$result = mysql_query($query);
if (!$result) die("1.Database access failed: " . mysql_error());

//將四行要插入的資料指派給MYSQL變數
$query = 'SET @author = "Emily Bronte",' .
		 '@title = "Wuthering Heights",' .
		 '@category = "Classic Fiction",' .
		 '@year = "1847"';
//mysql_query($query);
$result = mysql_query($query);
if (!$result) die("2.Database access failed: " . mysql_error());

//執行預先定義的陳述式，將這些變數當成參數傳遞出去
$query = 'EXECUTE statement USING @author,@title,@category,@year';
//mysql_query($query);
$result = mysql_query($query);
if (!$result) die("3.Database access failed: " . mysql_error());

$query = 'DEALLOCATE PREPARE statement';
//mysql_query($query);
$result = mysql_query($query);
if (!$result) die("4.Database access failed: " . mysql_error());

?>