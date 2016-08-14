<?php //覆蓋一個方法並且使用parent運算子
$object = new Son();
$object->test();
$object->test2();

class Dad
{
	function test()
	{
		echo "[Class Dad] I am your Father<br>";
	}
}

class Son extends Dad
{
	function test() //覆蓋父類別的test方法
	{
		echo "[Class Son] I am Luke<br>";
	}

	function test2()
	{
		parent::test(); //用parent運算子存取父類別test方法
	}
}

?>