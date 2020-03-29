<html>
<head>
	<title>Question 1</title>
</head>
<body>
<form method="post">
	<b>Enter the string value</b><input type="string" name="q">
		<input type="submit" value="submit">
</form>
</body>
</html>


<?php
$str=$_POST['q'];
$len=strlen($str)-1;
for($i=0;$i<$len/2;$i++,$len--)
{
	$temp=$str[$i];
	$str[$i]=$str[$len];
	$str[$len]=$temp;
}
echo "Reverse of the string is " .$str.'<br>';
echo strrev($str);
?>