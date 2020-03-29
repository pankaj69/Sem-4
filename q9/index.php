<?php
$db=mysqli_connect('localhost','root','Pankaj123@');
mysqli_select_db($db,'marksheet');
$query="SELECT * FROM marks";
$result=mysqli_query($db,$query);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Question 9</title>
</head>
<body>
<table align="center" border="1px" style="width: 600px; line-height: 40px ">
	<tr><th colspan="5">
		<h2><b><i>Marksheet</h2></i></b>
		</th></tr>
		<tr>
			<th>Name</th>
			<th>Roll No</th>
			<th>English</th>
			<th>Science</th>
			<th>Maths</th>
		</tr>
		<?php
		while ($rows=mysqli_fetch_assoc($result)) {
		?>
			<tr>
				<td><?php echo $rows['Name'] ?></td>
				<td><?php echo $rows['RollNo'] ?></td>
				<td><?php echo $rows['English'] ?></td>
				<td><?php echo $rows['Science'] ?></td>
				<td><?php echo $rows['Maths'] ?></td>
			</tr>
		<?php
		}
		?>
</table>
</body>
</html>