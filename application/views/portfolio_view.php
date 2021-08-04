<h1>Exampes From Our Projects</h1>
<p>
<table>
All projects in the following table are fictional, so don't even try to follow the links provided.
<tr><td>Year</td><td>Project</td><td>Descriptions</td></tr>
<?php

	foreach($data as $row)
	{
		echo '<tr><td>'.$row['Year'].'</td><td>'.$row['Site'].'</td><td>'.$row['Description'].'</td></tr>';
	}
	
?>
</table>
</p>
