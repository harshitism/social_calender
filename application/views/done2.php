<?php
if(isset($newarr))
 {echo "comments are :<br>"; 
 	$no = count($newarr);
	for($i=0;$i<$no;$i++)
		{
//prints user_id    comment    date_time
			echo "".$newarr[$i]['comment_id']."    ".$newarr[$i]['user_id']."    ".$newarr[$i]['comment']."    ".$newarr[$i]['time']."<br>";
		}

 }
 else
 echo "no comments";
?>