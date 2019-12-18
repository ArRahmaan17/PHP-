<?php
	//komen adalah penjelasan program (silahkan ditulis jika kalian butuh)

	$nilai = 50;
	// jika value dari variabel 0 - 50 maka nilai variabel indek adalah E
	if (($nilai >= 0) && ($nilai <=50)) {
		$indek = "E";
	// jika value dari variabel 50 - 60 maka nilai variabel indek adalah D
	}elseif (($nilai >=50) && ($nilai <=60 )) {
		$indek = "D";
	// jika value dari variabel 60 - 75 maka nilai variabel indek adalah C
	}elseif (($nilai >=60) && ($nilai <=75 )) {
		$indek = "C";
	// jika value dari variabel 75 - 85 maka nilai variabel indek adalah B
	}elseif(($nilai >=75) && ($nilai <=85 )) {
		$indek = "B";
	// jika value dari variabel 85 - 100 maka nilai variabel indek adalah A
	}elseif(($nilai >=85) && ($nilai <=100 )) {
		$indek = "A";
	}else{
		$indek = "Nilai Diluar jangkauan";
	}
	echo "Nilai Anda : $nilai, Dikonversikan menjadi $indek";
?>