<?php

$var = 8;
for ($a = 0; $a < $var; $a++) {
	for ($b = 0; $b <= $a; $b++) {
		echo "<center>";
	}
	if ($a==0){
		for ($c=1; $c < $var*2; $c++) { 
			echo "*&nbsp;";
			if($c == ($var*2)-1){
				echo "<br>";
			}
		}
	}else{
		echo "*&nbsp;";
		for ($d = 3; $d < ($var - $a)*2; $d++) { 
			echo "&nbsp;&nbsp;&nbsp;";
		}
		if ($a==$var-1){
			echo "<br>";
		}else{
			echo "*&nbsp;<br>";
		}
	}	
}