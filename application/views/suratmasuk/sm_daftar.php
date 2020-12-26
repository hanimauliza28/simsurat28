<div class="module">
	<div class="module-head">
		<h3><?= $title_bar ?></h3>
	</div>
	<div class="module-body">
		<div class="controls">
			<div class="pull-left">
				<a href="<?= site_url('SuratMasuk/form/0') ?>" class="btn btn-info"><i class="icon-plus"></i> Tambah</a>	
				<a href="<?= site_url('SuratMasuk/laporan') ?>" class="btn btn-primary"><i class="icon-print"></i> Cetak Laporan</a>	
			</div>
		</div>
	</div>
	<div class="module-body" style="margin-top:20px">
		
		<?= $this->session->flashdata('notif'); ?>				
		<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
			<thead>
				<tr>
					<th>No.</th>
					<th width="80px">Tgl Surat</th>
					<th width="80px">Tgl Diterima</th>
					<th>Perihal</th>
					<th>Sifat</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
					foreach($data as $data){
						?>						
						<tr>
							<td><?= $no ?></td>
							<td><?= $data['tgl_surat'] ?></td>
							<td><?= $data['tgl_diterima'] ?></td>	
							<td><?= $data['perihal'] ?></td>	
							<td><?= $data['sifat'] ?></td>		
							<td>
								<!-- ACTION -->
								<div class="btn-group" data-toggle="buttons-radio">
                                    <a href="<?= site_url('SuratMasuk/edit/'.$data['id_surat']) ?>" class="btn btn-info"><i class="icon-edit"></i></a>
                                    <a href="javascript:;" data-idsurat="<?= $data['id_surat'] ?>" class="btn btn-danger button-hapus" data-toggle="modal" data-target="#hapus-data"><i class="icon-trash"></i></a>
                                    <a  href="<?= site_url('SuratMasuk/detail/'.$data['id_surat']) ?>" class="btn btn-success"><i class="icon-search"></i></a>
                                </div>
							</td>	
						</tr>
						<?php
						$no++;
					}
				?>
			</tbody>
			<tfoot>
				<tr>
					<th>No.</th>
					<th>Tgl Surat</th>
					<th>Tgl Diterima</th>
					<th>Perihal</th>
					<th>Sifat</th>
					<th>Action</th>
				</tr>
			</tfoot>
		</table>
	</div>
</div><!--/.module-->


<!--- MODAL HAPUS/DELETE -->
<div id="hapus-data" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      
      <div class="modal-header">
      	Konfirmasi Hapus
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	    <form method="post" action="<?= site_url('SuratMasuk/delete_bf/') ?>">
	      <div class="modal-body">
	      		Apakah anda yakin akan menghapus data ini ?
	      		<input type="hidden" name="id_surat" id="id_surat">
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
	        <button type="submit" class="btn btn-danger">Hapus</button>
	      </div>
	  	</form>
    </div>
  </div>
</div>
