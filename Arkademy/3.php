<?php
	function count_vowels ($string) {
		$vokal = 'aiueo';
		$hitung=0;
		for ($i=0; $i < strlen($string); $i++) { 
			for ($j=0; $j < strlen($vokal); $j++) { 
				if ($string[$i]==$vokal[$j]) {
					$hitung++;
				}
			}
		}
		echo 'Huruf vokal ada:'.$hitung;
	}
	count_vowels('programmers');
	echo PHP_EOL;
	count_vowels('hmm..');

?>