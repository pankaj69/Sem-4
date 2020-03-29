<?php
$color=array('white','green','red');
foreach($color as $colors)
{
	echo("$colors,");
}
sort($color);
echo '<ul>';
foreach($color as $colors)
{
	echo "<li> $colors <br>";
}
?>