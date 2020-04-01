<div class="row">
	<div class="col-md-12">
	    <div class="panel panel-info">
	        <div class="panel-heading"> <?=ucwords($global->headline)?>
	            <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
	        </div>
	        <div class="panel-wrapper collapse in" aria-expanded="true">
	            <div class="panel-body">
					<form id="forminput" class="formaction" method="POST" action="javascript:void(0)" url="<?= base_url($global->url)?>"  enctype="multipart/form-data">
						<div class="row">
							<div class="col-sm-12">
								<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
								<div class="form-group">
									<label>Nomor Rumah</label>
									<input required type="text" name="warga_norumah" class="form-control" title="Harus di isi">
								</div>
								<div class="form-group">
									<label>Nama</label>
									<input required type="text" name="warga_nama" class="form-control" title="Harus di isi">
								</div>
								<div class="form-group">
									<label>Jenis Kelamin</label>
									<input required type="text" name="warga_nama" class="form-control" title="Harus di isi">
								</div>
								<div class="form-group">
									<label>Tanggal Lahir</label>
									<input required type="text" name="warga_tanggallahir" class="form-control datepicker" title="Harus di isi">
								</div>
								<div class="form-group">
									<label>Pendidikan</label>
									<select class="form-control select" name="warga_idpendidikan">
										<option>
											SD
										</option>
									</select>
								</div>
								<div class="form-group">
									<label>Nomor HP</label>
									<input required type="text" name="warga_nomorhp" class="form-control" title="Harus di isi">
								</div>
								<div class="form-group">
									<label>Alamat/Domisili</label>
									<textarea class="form-control" name="warga_domisili" rows="5"></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<button type="submit" value="submit" name="submit" class="btn btn-primary btn-block btn-flat">Simpan</button>
								</div>
							</div>
						</div>
					</form>
	            </div>
	        </div>
	    </div>

	</div>
</div>
<?php include 'action.php';?>
