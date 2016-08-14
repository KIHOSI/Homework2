<?php
	//$this代表現在物件，用來存取該物件屬性
	$object = new User();
	$object->password = "secret";
	echo $object->get_password();
	class User
	{
		public $name,$password;
		function get_password()
		{
			return $this->password;
		}
	}
?>