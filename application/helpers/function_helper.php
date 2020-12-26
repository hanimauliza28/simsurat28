<?php

	function sifat(){
		$data[0]['sifat'] = 'BIASA';
		$data[1]['sifat'] = 'RAHASIA';
		$data[2]['sifat'] = 'SANGAT RAHASIA';
		$data[3]['sifat'] = 'SEGERA';

		return $data;
	}
	function tgltosql($tanggal){
		$pecahkan = explode('/', $tanggal);
		
		// variabel pecahkan 0 = bulan
		// variabel pecahkan 1 = tgl
		// variabel pecahkan 2 = tahun
	 
		return $pecahkan[2] . '-' . $pecahkan[0] . '-' . $pecahkan[1];
	}

	function sqltotgl($tanggal){
		$pecahkan = explode('-', $tanggal);
		
		// variabel pecahkan 0 = tahun
		// variabel pecahkan 1 = bulan
		// variabel pecahkan 2 = tanggal
	 
		return $pecahkan[1] . '/' . $pecahkan[2] . '/' . $pecahkan[0];
	}

	function tgl_indo1($tanggal){
		$bulan = array (
			1 => 'Jan',
			'Feb',
			'Mar',
			'Apr',
			'Mei',
			'Jun',
			'Jul',
			'Agu',
			'Sep',
			'Okt',
			'Nov',
			'Des'
		);
		$pecahkan = explode('-', $tanggal);
		
		// variabel pecahkan 0 = tahun
		// variabel pecahkan 1 = bulan
		// variabel pecahkan 2 = tanggal
	 
		return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
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
		$pecahkan = explode('-', $tanggal);
		
		// variabel pecahkan 0 = tahun
		// variabel pecahkan 1 = bulan
		// variabel pecahkan 2 = tanggal
	 
		return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
	}


	//RESPON UNTUK ALERT
	function responupdate($value){
		if($value=='true'){
			$tampil = '<div class="alert  alert-success" role="alert"> Data berhasil Diperbarui <button type="button" class="close" data-diskiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		}else{
			$tampil = '<div class="alert  alert-warning" role="alert"> Data Gagal Diperbarui<button type="button" class="close" data-diskiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		}
		return $tampil;
	}

	function responsave($value){
		if($value=='true'){
			$tampil = '<div class="alert  alert-success" role="alert"> Data berhasil Disimpan <button type="button" class="close" data-diskiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		}else{
			$tampil = '<div class="alert  alert-warning" role="alert"> Data Gagal Disimpan <button type="button" class="close" data-diskiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		}
		return $tampil;
	}
	function respondelete(){
		$tampil = '<div class="alert  alert-danger" role="alert"> Data Berhasil Dihapus <button type="button" class="close" data-diskiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		return $tampil;
	}

?>