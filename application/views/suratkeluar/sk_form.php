<div class="module">
	<div class="module-head">
		<h3><?= $title_bar ?></h3>
	</div>
	<div class="module-body">
			<form class="form-horizontal row-fluid" method="post" action="<?= isset($data['id_surat']) ? site_url('SuratKeluar/update/') : site_url('SuratKeluar/save') ?>">
				<div class="control-group">
					<input type="hidden" name="id_surat" value="<?= isset($data['id_surat']) ? $data['id_surat'] : '0' ?>">
					<label class="control-label" for="basicinput">Tanggal Surat</label>
					<div class="controls">
						<input type="text" id="tgl_surat" name="tgl_surat" placeholder="Tanggal Surat" class="span8" value="<?= isset($data['tgl_surat']) ? sqltotgl($data['tgl_surat']) : date('m/d/Y') ?>">
						<br><small>Format : Bulan/Tanggal/Tahun</small>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="basicinput">Perihal</label>
					<div class="controls">
						<textarea class="span8" name="perihal" rows="2"><?= isset($data['perihal']) ? $data['perihal'] : '' ?></textarea>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="basicinput">Sifat</label>
					<div class="controls">
						<select tabindex="1" name="sifat" data-placeholder="Sifat" class="span8">
							<?php
								$sifat = sifat();
								foreach($sifat as $sifat){
									if(isset($data['sifat']) && $data['sifat']==$sifat['sifat']){
										?>
										<option value="<?= $sifat['sifat'] ?>" selected><?= $sifat['sifat'] ?></option>
										<?php
									}else{
										?>
										<option value="<?= $sifat['sifat'] ?>"><?= $sifat['sifat'] ?></option>
										<?php
									}
									
								}
							?>
						</select>
					</div>
				</div>

				<div class="control-group">
					<label class="control-label" for="basicinput">Surat Masuk</label>
					<div class="controls">
						<select tabindex="1" name="id_surat_id" data-placeholder="Sifat" class="span8 js-example-basic-single">
							<option value="0">Bukan Surat Balasan</option>
							<?php
								foreach($sm as $sm){
									if(isset($data['id_surat_id']) && $data['id_surat_id']==$sm['id_surat']){
										?>
										<option value="<?= $sm['id_surat'] ?>" selected><?= $sm['perihal'] ?></option>
										<?php
									}else{
										?>
										<option value="<?= $sm['id_surat'] ?>"><?= $sm['perihal'] ?></option>
										<?php
									}
									
								}
							?>
						</select>
					</div>
				</div>



				<div class="control-group">
					<div class="controls">
						<?php
							if(isset($data['id_surat'])){
								?>
								<button type="submit" class="btn btn-warning">Perbarui</button>
								<?php
							}else{
								?>
								<button type="submit" class="btn btn-info">Simpan</button>
								<?php
							}
						?>
						
					<a href="<?= site_url('SuratKeluar') ?>" class="btn btn-sm btn-danger pull right">Kembali</a>
					</div>
				</div>
			</form>
	</div>
</div>