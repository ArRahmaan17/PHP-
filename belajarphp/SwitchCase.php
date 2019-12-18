<?php 
	$angka = 1;
	// pengecekan angka di ($angka)
	switch ($angka) {
		// jika value dari $angka 0 maka tercipta $terbilang dengan value "NOL"
		case 0:$terbilang = "NOL";break;
		// jika value dari $angka 1 maka tercipta $terbilang dengan value "SATU"
		case 1:$terbilang = "SATU";break;
		// jika value dari $angka 2 maka tercipta $terbilang dengan value "DUA"
		case 2:$terbilang = "DUA";break;
		// jika value dari $angka 3 maka tercipta $terbilang dengan value "TIGA"
		case 3:$terbilang = "TIGA";break;
		// jika value dari $angka 4 maka tercipta $terbilang dengan value "EMPAT"
		case 4:$terbilang = "EMPAT";break;
		// jika value dari $angka 5 maka tercipta $terbilang dengan value "LIMA"
		case 5:$terbilang = "LIMA";break;
		// jika value dari $angka 6 maka tercipta $terbilang dengan value "ENAM"
		case 6:$terbilang = "ENAM";break;
		// jika value dari $angka 7 maka tercipta $terbilang dengan value "TUJUH"
		case 7:$terbilang = "TUJUH";break;
		// jika value dari $angka 8 maka tercipta $terbilang dengan value "DELAPAN"
		case 8:$terbilang = "DELAPAN";break;
		// jika value dari $angka 9 maka tercipta $terbilang dengan value "SEMBILAN"
		case 9:$terbilang = "SEMBILAN";break;
		// jika value dari $angka melebihi 9 maka tercipta $terbilang dengan value "NILAI DILUAR JANGKAUAN"
		default:$terbilang = "Nilai diluar jangkauan";
	}

	printf("Bentuk terbilang dari angka '%d' adalah '%s'",$angka,$terbilang);
?>