<?php
function bulan($tgl){
	$bulan =substr($tgl,5,2);
	Switch($bulan){
		case 1:$bulan="januari";
		Break;
		case 2:$bulan="februari";
		Break;
		case 3:$bulan="maret";
		Break;
		case 4:$bulan="april";
		Break;
		case 5:$bulan="mei";
		Break;
		case 6:$bulan="juni";
		Break;
		case 7:$bulan="juli";
		Break;
		case 8:$bulan="agustus";
		Break;
		case 9:$bulan="september";
		Break;
		case 10:$bulan="oktober";
		Break;
		case 11:$bulan="november";
		Break;
		case 12:$bulan="desember";
		Break;
	}
	return bulan
}
function tgl($tgl){
	$hari=substr($tgl,8,2);
	$tahun=substr($tgl,0,4);
	$nama_bulan=$this->bulan($tgl);
	$tgl_oke=$hari.''.
	$nama bulan.''.$tahun
	return $tgl_oke;
   }
}