<?php
# Read single line
echo "<b>Read single line</b>";
echo "<br/>";
$file = fopen("text_file/test.txt","r");
echo fgets($file); // Read line without character limit
echo "<br/>";
echo fgets($file,2); // Read line with character limit
fclose($file);


echo "<br/>";
echo "<b>Read multiple line</b>";
echo "<br/>";
# Read line by line
$file2 = fopen("text_file/test.txt","r");
while(!feof($file2))
  {
  echo fgets($file2). "<br />";
  }

fclose($file2);
?>