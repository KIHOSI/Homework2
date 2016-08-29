<?php //sqltest.php
require_once 'login.php';
$db_server = mysql_connect($db_hostname,$db_username,$db_password);

if(!$db_server){ die("Unable to connect to MySQL: " . mysql_error());}

mysql_select_db($db_database,$db_server) or die("Unable to select database: " . mysql_error());

//刪除資料
if(isset($_POST['delete']) && isset($_POST['year']))
{
	$year = get_post('year'); //get_post從瀏覽器抓取資料
	$query = "DELETE FROM classics WHERE year='$year'";
	if(!mysql_query($query,$db_server))
	{
		echo "DELETE failed : $query<br />";
		mysql_error() . "<br /><br />";
	}
}

//新增資料
if(isset($_POST['author']) &&
   isset($_POST['title']) &&
   isset($_POST['type']) && 
   isset($_POST['year']))
{
	$author = get_post('author');
	$title = get_post('title');
	$type = get_post('type');
	$year = get_post('year');

	$query = "INSERT INTO classics VALUES" . "('$author','title','type','year')";

	if(!mysql_query($query,$db_server))
	{
		echo "INSERT failed: $query<br />";
		mysql_error() . "<br /><br />";
	}
}

//表單
echo <<<_END
<form action="10-8.php" method="post"><pre>
	Author <input type="text" name="author" />
	Title <input type="text" name="title" />
	Type <input type="text" name="type" />
	Year <input type="text" name="year" />
	<input type="submit" name="ADD RECORD" />
</pre></form>	
_END;

$query = "SELECT * FROM classics";
$result = mysql_query($query);

if(!$result) {die("Database access failed: " . mysql_error());}
$rows = mysql_num_rows($result);

//改良
for($j = 0 ; $j < $rows ; ++$j)
{
	$row = mysql_fetch_row($result);
	echo <<<_END
	<pre> 
		Author $row[0]
		Title $row[1]
		Type $row[2]
		Year $row[3]
	</pre>
	<form action="10-8.php" method="post">
		<input type="hidden" name="delete" value="yes"	/>
		<input type="hidden" name="year" value="$row[3]" />
		<input type="submit" value="DELETE RECORD" />
	</form>
_END;
 //如果按下DELETE RECORD鍵，$year值也會被送出*/
}

mysql_close($db_server); //關閉連結

function get_post($var)
{
	return mysql_real_escape_string($_POST[$var]);
}

?>