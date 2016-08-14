<?php
//靜態(static)方法，代表他在類別中被呼叫，而非物件。靜態方法不會存取任何物件屬性
User::pwd_string(); //使用冒號呼叫靜態方法(Class裡的)
class User
{
	static function pwd_string()
	{
		echo "Please enter your password.";
	}
}
?>