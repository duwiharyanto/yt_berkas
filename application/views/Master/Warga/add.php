<div class="row">
	<div class="col-md-12">
	    <div class="panel panel-success">
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
									<select name="warga_norumah" class="form-control select">
										<?php foreach ($norumah as $val):?>
											<option value="<?=$val->norumah_id?>">
												<?=$val->norumah_nomor?>
											</option>
										<?php endforeach;?>
									</select>
								</div>
								<div class="form-group">
									<label>Nama</label>
									<input required type="text" name="warga_nama" class="form-control" title="Harus di isi">
								</div>
								<div class="form-group">
									<label>Nomor ktp</label>
									<input type="text" name="warga_noktp" class="form-control" title="Harus di isi">
								</div>
								<div class="form-group">
									<label>Jenis Kelamin</label>
									<div class="">
				      					<label style="padding-right: 20px">
				      						<input required name="warga_jeniskelamin" value="1" type="radio" >
				      						Laki-Laki
				      					</label>
				      					<label style="padding-right: 20px">
				      						<input required name="warga_jeniskelamin" value="" type="radio">
				      						Perempuan
				      					</label>
				      				</div>
								</div>
								<div class="form-group">
									<label>Tanggal Lahir</label>
									<input required type="text" name="warga_tanggallahir" class="form-control datepicker" title="Harus di isi">
								</div>
								<div class="form-group">
									<label>Pendidikan</label>
									<select class="form-control select" name="warga_idpendidikan">
										<?php foreach ($pendidikan as $val):?>
											<option value="<?=$val->pendidikan_id?>">
												<?=$val->pendidikan_nama?>
											</option>
										<?php endforeach;?>
									</select>
								</div>
								<div class="form-group">
									<label>Agama</label>
									<select name="warga_agama" class="form-control select">
										<option>
											Islam
										</option>
										<option>
											Kristen
										</option>
										<option>
											Khatolik
										</option>
										<option>
											Hindu
										</option>
										<option>
											Budha
										</option>
									</select>
								</div>
								<div class="form-group">
									<label>Golongan Darah</label>
									<input required type="text" name="warga_golongandarah" class="form-control" title="Harus di isi">
								</div>
								<div class="form-group">
									<label>Nomor HP</label>
									<input required type="text" name="warga_nohp" class="form-control" title="Harus di isi">
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
