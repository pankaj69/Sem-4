<html>
<head>
	<title>Question 3</title>
</head>
<body>
<form method="post">
	<b>Enter the string value</b><input type="string" name="q">
		<input type="submit" value="submit">
</form>
</body>
</html>


<?php
$s=$_POST['q'];
echo str_replace(' ','',$s);
echo '<br>';
$substr='quick';
if(strpos($s,$substr)!=0)
{
	echo "Yes it contains some other string " .'<br>';
}

$strings=array('pankaj','ansh','Ansh');
foreach($strings as $k) {
	if(ctype_lower($k))
	{
		echo "All the letters written are in lowercase ".'<br>';
	}
	else
	{
		echo "Written text is not in lowercase " .'<br>';
	}
}

echo '<br>';
echo str_replace('the','That',$s);
?>