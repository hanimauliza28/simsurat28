<div class="module">
	<div class="module-head">
		<h3><?= $title_bar ?></h3>
	</div>
	<div class="module-body" style="margin-top:20px">
		
		<?= $this->session->flashdata('notif'); ?>				
		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped display" width="100%">
			<tr><th colspan="3" class="text-info h4">Detail Surat Keluar</th></tr>
			<tr>
				<th>Tanggal Surat</th>
				<td width="20px"> : </td>
				<td><?= tgl_indo2($data['tgl_surat']) ?></td>
			</tr>
			<tr>
				<th>Perihal</th>
				<td width="20px"> : </td>
				<td><?= $data['perihal'] ?></td>
			</tr>
			<tr>
				<th>Sifat</th>
				<td width="20px"> : </td>
				<td><?= $data['sifat'] ?></td>
			</tr>

			<tr>
				<th>Tanggal Entry</th>
				<td width="20px"> : </td>
				<td><?= $data['date_entry'] ?></td>
			</tr>
		</table>
		<hr>
		<br>
		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped display" width="100%">
			<tr><th colspan="3" class="text-info h4">Informasi Surat Masuk Terkait</th></tr>

			<?php
				if($datasm == 0){
					?>

					<tr>
						<th>Perihal</th>
						<td width="20px"> : </td>
						<td>Bukan Surat Balasan</td>
					</tr>
					<?php
				}else{
					?>
					<tr>
						<th>Tanggal Surat</th>
						<td width="20px"> : </td>
						<td><?= tgl_indo2($datasm['tgl_surat']) ?></td>
					</tr>
					<tr>
						<th>Tanggal Surat Diterima</th>
						<td width="20px"> : </td>
						<td><?= tgl_indo2($datasm['tgl_diterima']) ?></td>
					</tr>
					<tr>
						<th>Perihal</th>
						<td width="20px"> : </td>
						<td><?= $datasm['perihal'] ?></td>
					</tr>
					<tr>
						<th>Sifat</th>
						<td width="20px"> : </td>
						<td><?= $datasm['sifat'] ?></td>
					</tr>

					<tr>
						<th>Tanggal Entry</th>
						<td width="20px"> : </td>
						<td><?= $datasm['date_entry'] ?></td>
					</tr>
					<?php
				}
			?>
		</table>
		<br>
		<a href="<?= site_url('SuratKeluar') ?>" class="btn btn-sm btn-danger pull right">Kembali</a>
	</div>
</div><!--/.module-->
