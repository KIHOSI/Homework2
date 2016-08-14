<?php
	$object = new User; //物件$object
	print_r($object); 

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