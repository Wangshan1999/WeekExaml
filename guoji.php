<?php 
echo "<table border='1px' width='500px';bordercolor='black'>";
for ($i=1; $i <=10 ; $i++) { 
	echo "<tr>";
	for ($j=1; $j <=10 ; $j++) { 
		if (($i+$j)%2) {
			echo "<td bgcolor='black' width='50px' height='50px'>";
		}
		else
		{
			echo "<td> </td>";
		}
	}
	echo "</tr>";
}


 ?>