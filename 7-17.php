<?php //執行系統指令
$cmd = "dir"; //windows
//$cmd = "if"; //Linux,Unix & Mac
exec(escapeshellcmd($cmd),$output,$status); //escapeshellcmd淨化指令
//$output為讓系統存放指令輸出的資料的陣列
//$status存放呼叫後函式回傳的狀態的變數

if($status) echo "Exec command failed.";
else{
	echo "<pre>";
	foreach ($output as $line) {
		echo "$line\n";
	}
}
?>