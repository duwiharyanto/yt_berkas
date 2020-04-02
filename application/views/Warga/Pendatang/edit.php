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
			  						<input required readonly type="text" name="id" class="hide form-control" title="Harus di isi" value="<?=$data->pendatang_id?>">
			  					</div>
								<div class="form-group">
									<label>Pasien</label>
									<select class="form-control select" name="pendatang_idwarga">
										<?php foreach($warga AS $val):?>
											<option value="<?=$val->warga_id?>" <?=$data->pendatang_idwarga==$val->warga_id ? 'selected':''?>><?= ucwords($val->warga_nama)?></option>
										<?php endforeach;?>
									</select>
								</div>
								<div class="form-group">
									<label>Alamat Baru</label>
									<textarea required type="text" name="pendatang_alamatbaru" class="form-control" title="Harus di isi" rows="5"><?=$data->pendatang_alamatbaru?></textarea>
								</div>		
								<div class="form-group">
									<label>Alamat Lama</label>
									<textarea required type="text" name="pendatang_alamatlama" class="form-control" title="Harus di isi" rows="5"><?=$data->pendatang_alamatlama?></textarea>
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
