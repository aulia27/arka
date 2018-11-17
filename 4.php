<?php 
function hari($a,$b)
	{
		$var1 = strtotime($a);
		$var2 = strtotime($b);
		for ($i=$var1; $i<=$var2; $i+=86400) 
		{  
    		echo date("Y-m-d", $i).', ';  
		} 
 	}
 hari('2018-11-01','2018-11-05')
 ?>