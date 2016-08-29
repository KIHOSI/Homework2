<?php //同時避免SQL與XSS注入攻擊的函式
function mysql_entities_fix_string($string){
	return htmlentities(myslq_fix_string($string)); 
	//htmlentities去掉所有HTML標記程式並以顯示出字元的格式取代
}

function mysql_fix_string($string){
	if(get_magic_quotes_gpc()) {$string = stripslahes($string);} //stripslahes將反斜線取消
	return mysql_real_escape_string($string); //移除所有使用者輸入字串的魔術引號
}

?>