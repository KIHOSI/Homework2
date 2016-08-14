<?php
	$object = new User; //物件$object
	print_r($object); echo "<br>";

	$object->name      = "Joe"; //指定物件屬性
	$object->password  = "mypass"; //指定物件屬性

	print_r($object); echo "<br>";

	$object->save_user(); //使用物件方法

	Class User //類別User
	{
		public $name,$password; //屬性$name,$passwrod

		function save_user()
		{
			echo "Save User code goes here.";
		}
	}
	//類別 > 物件 > 屬性
?>