<div class="module">
	<div class="module-head">
		<h3><?= $title_bar ?></h3>
	</div>
	<div class="module-body" style="margin-top:20px">
		
		<?= $this->session->flashdata('notif'); ?>				
		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped display" width="100%">
			<tr>
				<th>Tanggal Surat</th>
				<td width="20px"> : </td>
				<td><?= tgl_indo2($data['tgl_surat']) ?></td>
			</tr>
			<tr>
				<th>Tanggal Surat Diterima</th>
				<td width="20px"> : </td>
				<td><?= tgl_indo2($data['tgl_diterima']) ?></td>
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
		<br>
		<a href="<?= site_url('SuratMasuk') ?>" class="btn btn-sm btn-danger pull right">Kembali</a>
	</div>
</div><!--/.module-->
