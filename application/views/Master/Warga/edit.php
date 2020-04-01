<div class="row">
	<div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading"> <?=ucwords($global->headline)?>
                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a> <a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a> </div>
            </div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
                <div class="panel-body">
			  		<form id="forminput" method="POST" onsubmit="update()" action="javascript:void(0)" url="<?= base_url($global->url.'edit')?>" enctype="multipart/form-data">
						<div class="row">
							<div class="col-sm-12">
								<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
		  						<div class="form-group d-none">
			  						<label>id</label>
			  						<input required readonly type="text" name="id" class="hide form-control" title="Harus di isi" value="<?=$data->warga_id?>">
			  					</div>
								<div class="form-group">
									<label>Nomor Rumah</label>
									<select name="warga_norumah" class="form-control select">
										<?php foreach ($norumah as $val):?>
											<option value="<?=$val->norumah_id?>" <?=$data->warga_norumah==$val->norumah_id ? 'selected':''?>>
												<?=$val->norumah_nomor?>
											</option>
										<?php endforeach;?>
									</select>
								</div>
								<div class="form-group">
									<label>Nama</label>
									<input required type="text" name="warga_nama" class="form-control" title="Harus di isi" value="<?=$data->warga_nama?>">
								</div>
								<div class="form-group">
									<label>Jenis Kelamin</label>
									<div class="">
				      					<label style="padding-right: 20px">
				      						<input required name="warga_jeniskelamin" <?=$data->warga_jeniskelamin==1 ? 'checked':''?> value="1" type="radio" >
				      						Laki-Laki
				      					</label>
				      					<label style="padding-right: 20px">
				      						<input required name="warga_jeniskelamin" <?=$data->warga_jeniskelamin==0 ? 'checked':''?> value="0" type="radio">
				      						Perempuan
				      					</label>
				      				</div>
								</div>
								<div class="form-group">
									<label>Tanggal Lahir</label>
									<input required type="text" name="warga_tanggallahir" class="form-control datepicker" title="Harus di isi" value="<?=date('d-m-Y',strtotime($data->warga_tanggallahir))?>">
								</div>
								<div class="form-group">
									<label>Pendidikan</label>
									<select class="form-control select" name="warga_idpendidikan">
										<?php foreach ($pendidikan as $val):?>
											<option value="<?=$val->pendidikan_id?>" <?=$data->warga_idpendidikan==$val->pendidikan_id ? 'selected':''?>>
												<?=$val->pendidikan_nama?>
											</option>
										<?php endforeach;?>
									</select>
								</div>
								<div class="form-group">
									<label>Agama</label>
									<select name="warga_agama" class="form-control select">
										<option <?=$data->warga_agama=='Islam' ? 'selected':''?>>
											Islam
										</option>
										<option <?=$data->warga_agama=='Kristen' ? 'selected':''?>>
											Kristen
										</option>
										<option <?=$data->warga_agama=='Khatolik' ? 'selected':''?>>
											Khatolik
										</option>
										<option <?=$data->warga_agama=='Hindu' ? 'selected':''?>>
											Hindu
										</option>
										<option <?=$data->warga_agama=='Budha' ? 'selected':''?>>
											Budha
										</option>
									</select>
								</div>
								<div class="form-group">
									<label>Golongan Darah</label>
									<input required type="text" name="warga_golongandarah" class="form-control" title="Harus di isi" value="<?=$data->warga_golongandarah?>">
								</div>
								<div class="form-group">
									<label>Nomor HP</label>
									<input required type="text" name="warga_nohp" class="form-control" title="Harus di isi" value="<?=$data->warga_nohp?>">
								</div>
								<div class="form-group">
									<label>Alamat/Domisili</label>
									<textarea class="form-control" name="warga_domisili" rows="5"><?=$data->warga_domisili?></textarea>
								</div>
							</div>
						</div>
			  			<div class="row">
			  				<div class="col-sm-12">
			  					<div class="form-group">
			  						<button type="submit" value="submit" name="submit" class="btn btn-warning btn-block btn-flat btn-md">Update</button>
			  					</div>
			  				</div>
			  			</div>
			  		</form>
                </div>
            </div>
        </div>

	</div>
</div>
<?php include 'action.php'?>
