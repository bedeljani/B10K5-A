<?php
	function replace ($string, $search, $replace){
		for ($i=0; $i < strlen($string); $i++) { 
			if($string[$i]==$search){
				$string[$i]=$replace;
			}
		}
		echo $string;
	}
	replace ("purwakarta",'a','o');
	
?>