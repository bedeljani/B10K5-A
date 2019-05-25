<?php
	function betweenDays($tgl_awal, $tgl_akhir){
		$awal=strtotime($tgl_awal);
		$akhir=strtotime($tgl_akhir);
		$diff = $akhir - $awal;
		$hari = ($diff/(60*60*24));		//menghitung jarak hari
		echo "'".$tgl_awal."', ";
		for ($i=1; $i < $hari; $i++) { 
			echo "'".date('Y-m-d', strtotime('+'.$i.' days', $awal))."', ";
		};
		echo "'".$tgl_akhir."'";
	}
	betweenDays('2016-02-27','2016-03-02');

	?>