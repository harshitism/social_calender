<?php if(isset($arr))
{
		foreach($arr as $row)
		echo $row['first_name']." ".$row['middle_name']." ".$row['last_name']."<br>";
}?>