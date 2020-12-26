<?php


function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('/', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[1] . ' ' . $bulan[ (int)$pecahkan[0] ] . ' ' . $pecahkan[2];
}
function tgl_indo2($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('/', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}

function tglsql($tanggal){
	$pecahkan = explode('/', $tanggal);
	
	// variabel pecahkan 0 = bulan
	// variabel pecahkan 1 = tgl
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . '-' . $pecahkan[0] . '-' . $pecahkan[1];
}
function respon($pesan, $jenis){
	$tampil = '<div class="alert  alert-'.$jenis.'" role="alert"> '.$pesan.' <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
	return $tampil;
}

function rpltgl($tgl){
	$tampil = str_replace("%2F","/",$tgl);
	return $tampil;
}

function rupiah($angka){
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
 
}