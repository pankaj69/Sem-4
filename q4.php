<html>
<head>
	<title>Question 4</title>
</head>
<body>
<form method="post">
	<b>Enter the birth date</b><input type="date" name="bday">
		<input type="submit" value="calculate">
</form>


<?php

$date1=date_create($_POST['bday']);
$date2=date_create(date('Y-m-d'));
$diff=date_diff($date1,$date2);
echo $diff->days;
?>
</body>
</html>
