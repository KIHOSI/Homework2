<?php //為了確保所有初始程式碼皆會被執行，子類別呼叫父類別建構式
$object = new Tiger();
echo "Tigers have...<br>";
echo "Fur: " . $object->fur . "<br>";
echo "Stripes: " . $object->stripes;
class Wildcat
{
	public $fur;

	function __construct()
	{
		$this->fur = "TRUE";
	}
}

class Tiger extends Wildcat
{
	public $stripes;

	function __construct()
	{
		parent::__construct(); //先呼叫父建構子
		$this->stripes = "TRUE";
	}
}
?>