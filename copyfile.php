<?php //複製testfile.txt為testfile2.txt
copy('testfile.txt','testfile2.txt') or die("Could not copy file");
echo "File successfully copied to 'testfile2.txt'";
?>