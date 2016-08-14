<?php //繼承
$object = new Subscriber();
$object->name = "Fred";
$object->password = "pword";
$object->phone = "012 345 6789";
$object->email = "email@gmail.com";
$object->display();
class User
{
	public $name,$password;

	function save_user()
	{
		echo "Save User code goes here.";
	}
}

class Subscriber extends User //子類別Subscriber繼承User類別
{
	public $phone,$email;

	function display()
	{
		echo "Name: " . $this->name     . "<br>";
		echo "Pass: " . $this->password . "<br>";
		echo "Phone: " . $this->phone   . "<br>";
		echo "Email: " . $this->email   . "<br>";
	}
}
?>