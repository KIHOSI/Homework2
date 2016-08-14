<?php
	function longdate($timestamp)
	{
		return date("1 F jS Y",$timestamp);
	}
	echo longdate(time())."<br>"; //回傳現在的日期
	echo longdate(time() - 17*24*60*60); //回傳17天前的日期
?>