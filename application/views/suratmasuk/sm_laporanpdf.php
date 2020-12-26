<!DOCTYPE html>
<html>
<head>
	<title><?= $title_bar ?></title>
	<style type="text/css">
		.judul{
			text-align: center;
			margin-bottom: 10px;
		}


	</style>
</head>
<body>
	<h2 class="judul"><?= $title_bar ?></h2>

	<table class="table" border="1" cellspacing="0" cellpadding="5px" width="100%">
		<tr>
			<th max-width="100px">No.</th>
			<th>Tanggal Diterima</th>
			<th>Tanggal Surat</th>
			<th>Perihal</th>
			<th>Sifat</th>
			<th>Tanggal Entry</th>
		</tr>
		<?php
			$no = 1;
			foreach($data as $data){
				?>
					<tr>
						<td style="text-align: center"><?= $no ?></td>						
						<td><?= tgl_indo2($data['tgl_diterima']) ?></td>
						<td><?= tgl_indo2($data['tgl_surat']) ?></td>
						<td><?= $data['perihal'] ?></td>
						<td><?= $data['sifat'] ?></td>
						<td><?= $data['date_entry'] ?></td>
					</tr>
				<?php
				$no = $no+1;
			}
		?>	

		<tr>
			<th>No.</th>
			<th>Tanggal Diterima</th>
			<th>Tanggal Surat</th>
			<th>Perihal</th>
			<th>Sifat</th>
			<th>Tanggal Entry</th>
		</tr>
	</table>
</body>
</html>