<?php
//靜態屬性只能用靜態方法存取
$temp = new Test();
echo "Test A:" . Test::$static_property  . "<br>"; //成功，類別用雙冒號存取
echo "Test B:" . $temp->get_sp()         . "<br>"; //用方法存取
echo "Test C:" . $temp->$static_property . "<br>"; //失敗，物件不能直接存取靜態屬性
class Test
{
	static $static_property = "I'm static"; //靜態屬性
	function get_sp()
	{
		return self::$static_property; //可以透過關鍵字self存取靜態屬性
	}
}
?>