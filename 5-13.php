<?php
	//clone物件，可以避免發生5-12錯誤
	$object1 = new User();
	$object1->name = "Alice";
	$object2 = clone $object1; //clone物件
	$object2->name="Amy";
	echo "object1 name = " . $object1->name . "<br>";
	echo "object2 name = " . $object2->name . "<br>";
	//clone運算子，會建立一個新的類別實體，並從原本的實體複製屬性值到新的實體

	class User
	{
		public $name;
	}
?>