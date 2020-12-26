<div class="module">
	<div class="module-head">
		<h3><?= $title_bar ?></h3>
	</div>
	<div class="module-body">
			<form class="form-horizontal row-fluid" method="post" action="<?= site_url('SuratKeluar/sk_laporanpdf') ?>" target="_blank">

				<div class="control-group">
					<label class="control-label" for="basicinput">Dari</label>
					<div class="controls">
						<input type="text" id="tgl_atas" name="tgl_atas" value="<?= date('m/d/Y') ?>" placeholder="Tanggal Surat" class="span8">
						<br><small>Format : Bulan/Tanggal/Tahun</small>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="basicinput">Sampai</label>
					<div class="controls">
						<input type="text" id="tgl_bawah" name="tgl_bawah" value="<?= date('m/d/Y') ?>" placeholder="Tanggal Surat" class="span8">
						<br><small>Format : Bulan/Tanggal/Tahun</small>
					</div>
				</div>
				<div class="control-group" style="padding-top: 2px; margin-top: 2px">
					<div class="badge badge-info controls">Laporan akan dicetak berdasarkan tanggal surat.</div>
				</div>

				<div class="control-group">
					<div class="controls">
						<button type="submit" class="btn btn-primary">Cetak</button>						
						<a href="<?= site_url('SuratKeluar') ?>" class="btn btn-sm btn-danger pull right">Kembali</a>
					</div>
				</div>
			</form>
	</div>
</div>