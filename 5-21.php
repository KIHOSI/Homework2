<?php
//於類別中定義常數
Translate::lookup(); //用雙冒號::來呼叫類別

class Translate
{
	const ENGLISH = 0; //定義常數，大寫
	const SPANISH = 1;
	const FRENCH  = 2;
	const GERMAN  = 3;

	static function lookup()
	{
		echo self::SPANISH; //使用self關鍵字以及雙冒號::來對他參考
	}
}
?>