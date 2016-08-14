<?php
	//複製物件
	$object1 = new User();
	$object1->name = "Alice";
	$object2 = $object1;
	$object2->name="Amy";
	echo "object1 name = " . $object1->name . "<br>";
	echo "object2 name = " . $object2->name . "<br>";
	//會導致兩個都是印出"Amy"，因為兩個物件都是指向同一個類別

	class User
	{
		public $name;
	}
?>