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
							<div class="col-sm-6">
								<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
		  						<div class="form-group d-none">
			  						<label>id</label>
			  						<input required readonly type="text" name="id" class="hide form-control" title="Harus di isi" value="<?=$data->warga_id?>">
			  					</div>
								<div class="form-group">
									<label>Nomor Rumah</label>
									<input required type="text" name="warga_nomorrumah" class="form-control" title="Harus di isi"  value="<?=$data->warga_nomorrumah?>">
								</div>
								<div class="form-group">
									<label>Status Tempat Tinggal</label>
				      				<div class="">
				      					<label style="padding-right: 20px">
				      						<input <?= strtolower($data->warga_statustempattinggal)=='pribadi' ? 'checked':''?> required name="warga_statustempattinggal" value="Pribadi" type="radio" >
				      						Pribadi
				      					</label>
				      					<label style="padding-right: 20px">
				      						<input <?= strtolower($data->warga_statustempattinggal)=='kontrak' ? 'checked':''?> required name="warga_statustempattinggal" value="Kontrak" type="radio">
				      						Kontrak
				      					</label>
				      					<label style="padding-right: 20px">
				      						<input <?= strtolower($data->warga_statustempattinggal)=='sewa' ? 'checked':''?> required name="warga_statustempattinggal" value="Sewa" type="radio">
				      						Sewa
				      					</label>
				      				</div>
								</div>
								<div class="form-group">
									<label>Status KTP</label>
				      				<div class="">
				      					<label style="padding-right: 20px">
				      						<input required name="warga_statusktp" <?= $data->warga_statusktp=='modalan_RT.03' ? 'checked':''?> value="modalan_RT.03" type="radio" >
				      						Modalan RT.03
				      					</label>
				      					<label style="padding-right: 20px">
				      						<input <?=$data->warga_statusktp=='luar_wilayah_modalan_RT.03' ? 'checked':''?> required name="warga_statusktp" value="luar_wilayah_modalan_RT.03" type="radio">
				      						Luar Wilayah Modalan RT.03
				      					</label>
				      				</div>
								</div>
								<div class="form-group">
									<label>Domisili</label>
				      				<div class="">
				      					<label style="padding-right: 20px">
				      						<input <?=$data->warga_domisili=='modalan_RT.03' ? 'checked':''?> required name="warga_domisili" value="modalan_RT.03" type="radio" >
				      						Modalan RT.03
				      					</label>
				      					<label style="padding-right: 20px">
				      						<input <?=$data->warga_domisili=='luar_wilayah_modalan_RT.03' ? 'checked':''?> required name="warga_domisili" value="luar_wilayah_modalan_RT.03" type="radio">
				      						Luar Wilayah Modalan RT.03
				      					</label>
				      				</div>
								</div>
								<div class="form-group">
									<label>Jaminan Kesehatan</label>
				      				<div class="">
				      					<label style="padding-right: 20px">
				      						<input <?=$data->warga_jaminankesehatan=='tidak_ada' ? 'checked':''?> required name="warga_jaminankesehatan" value="tidak_ada" type="radio" >
				      						Tidak Ada
				      					</label>
				      					<label style="padding-right: 20px">
				      						<input <?=$data->warga_jaminankesehatan=='BPJS_kesehatan' ? 'checked':''?> required name="warga_jaminankesehatan" value="BPJS_kesehatan" type="radio">
				      						BPJS Kesehatan (bukan ketenagakerjaan)
				      					</label>
				      					<label style="padding-right: 20px">
				      						<input <?=$data->warga_jaminankesehatan=='jamkesda' ? 'checked':''?> required name="warga_jaminankesehatan" value="jamkesda" type="radio">
				      						JAMKESDA
				      					</label>
				      					<label style="padding-right: 20px">
				      						<input <?=$data->warga_jaminankesehatan=='jamkesnas' ? 'checked':''?> required name="warga_jaminankesehatan" value="jamkesnas" type="radio">
				      						JAMKESNAS
				      					</label>
				      				</div>
								</div>
								<div class="form-group">
									<label>Nomor Jaminan Kesehatan</label>
									<input  type="text" name="warga_nomorjaminankesehatan" class="form-control" title="Harus di isi" value="<?= $data->warga_nomorjaminankesehatan?>">
								</div>
								<div class="form-group">
									<label>Memiliki SKTM * <br><small class="text-danger">Surat Keterangan Tidak Mampu</small></label>
				      				<div class="">
				      					<label style="padding-right: 20px">
				      						<input <?=$data->warga_sktm=='tidak' ? 'checked':''?> required name="warga_sktm" value="tidak" type="radio" >
				      						Tidak Ada
				      					</label>
				      					<label style="padding-right: 20px">
				      						<input <?=$data->warga_sktm=='ya' ? 'checked':''?> required name="warga_sktm" value="ya" type="radio">
				      						Ya
				      					</label>
				      				</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Nomor KK</label>
									<input required type="text" name="warga_nomorkk" class="form-control" title="Harus di isi" value="<?=$data->warga_nomorkk?>">
								</div>
								<div class="form-group">
									<label>Nomor KTP</label>
									<input required type="text" name="warga_nomorktp" class="form-control" title="Harus di isi" value="<?=$data->warga_nomorktp?>">
								</div>
								<div class="form-group">
									<label>Nama Lengkap <br><small class="text-danger">Sesuai dengan KTP</small></label>
									<input required type="text" name="warga_nama" class="form-control" title="Harus di isi" value="<?=$data->warga_nama?>">
								</div>
								<div class="form-group">
									<label>Hubungan dengan Keluarga *</label>
									<select class="form-control select" name="warga_hubungankeluarga">
										<option <?=$data->warga_hubungankeluarga=='Kepala Keluarga' ? 'selected':''?> value="Kepala Keluarga">Kepala Keluarga</option>
										<option <?=$data->warga_hubungankeluarga=='Suami' ? 'selected':''?> value="Suami">Suami</option>
										<option <?=$data->warga_hubungankeluarga=='Istri' ? 'selected':''?> value="Istri">Istri</option>
										<option <?=$data->warga_hubungankeluarga=='Anak' ? 'selected':''?> value="Anak">Anak</option>
										<option <?=$data->warga_hubungankeluarga=='Menantu' ? 'selected':''?> value="Menantu">Menantu</option>
										<option <?=$data->warga_hubungankeluarga=='Orang Tua' ? 'selected':''?> value="Orang Tua">Orang Tua</option>
										<option <?=$data->warga_hubungankeluarga=='Mertua' ? 'selected':''?> value="Mertua">Mertua</option>
										<option <?=$data->warga_hubungankeluarga=='Cucu' ? 'selected':''?> value="Cucu">Cucu</option>
									</select>
								</div>
								<div class="form-group">
									<label>Alamat * <br><small class="text-danger">Isi sesuai Domisili</small></label>
									<textarea class="form-control" required name="warga_alamatktp2" rows="8"><?=$data->warga_alamatktp ?></textarea>
								</div>
								<div class="form-group">
									<label>Jenis Kelamin</label>
									<div class="">
										<label style="padding-right: 20px">
											<input <?=$data->warga_jeniskelamin=='Laki-laki' ? 'checked':''?> required name="warga_jeniskelamin" value="Laki-Laki" type="radio" >
											Laki-Laki
										</label>
										<label style="padding-right: 20px">
											<input <?=$data->warga_jeniskelamin=='Perempuan' ? 'checked':''?> required name="warga_jeniskelamin" value="Perempuan" type="radio" >
											Perempuan
										</label>
									</div>
								</div>
								<div class="form-group">
									<label>Tempat Lahir</label>
									<textarea class="form-control" required name="warga_tempatlahir" rows="3"><?=$data->warga_tempatlahir?></textarea>
								</div>
								<div class="form-group">
									<label>Tanggal Lahir</label>
									<input required name="warga_tanggallahir" class="form-control datepicker" type="text" value="<?=date('d-m-Y',strtotime($data->warga_tanggallahir))?>"></input>
								</div>
								<div class="form-group">
									<label>Nomor HP</label>
									<input required name="warga_nomorhp" class="form-control " type="text" value="<?=$data->warga_nomorhp?>"></input>
								</div>
								<div class="form-group">
									<label>Status Nomor</label>
									<input type="text" name="warga_statusnomor" value="<?=$data->warga_statusnomor?>" class="form-control">
									<p class="tex-muted">Contoh : Aktif Whatsap, Aktif Telepon</p>
								</div>
								<div class="form-group">
									<label>Email</label>
									<input  name="warga_email" class="form-control " type="text" value="<?=$data->warga_email?>"></input>
								</div>
								<div class="form-group">
									<label>Agama</label>
									<select class="form-control select" name="warga_agama">
										<option <?= $data->warga_agama=='Islam' ? 'selected':'' ?> value="Islam">Islam</option>
										<option <?= $data->warga_agama=='Kristen' ? 'selected':'' ?> value="Kristen">Kristen</option>
										<option <?= $data->warga_agama=='Khatolik' ? 'selected':'' ?> value="Khatolik">Khatolik</option>
										<option <?= $data->warga_agama=='Hindu' ? 'selected':'' ?> value="Hindu">Hindu</option>
										<option <?= $data->warga_agama=='Budha' ? 'selected':'' ?> value="Budha">Budha</option>
										<option <?= $data->warga_agama=='Lainnya' ? 'selected':'' ?> value="Lainnya">Lainnya</option>
									</select>
								</div>
								<div class="form-group">
									<label>Golongan Darah</label>
									<select class="form-control select" name="warga_golongandarah">
										<option <?= $data->warga_golongandarah=='A' ? 'selected':'' ?> value="A">A</option>
										<option <?= $data->warga_golongandarah=='B' ? 'selected':'' ?> value="B">B</option>
										<option <?= $data->warga_golongandarah=='O' ? 'selected':'' ?> value="O">O</option>
										<option <?= $data->warga_golongandarah=='AB' ? 'selected':'' ?> value="AB">AB</option>
										<option <?= $data->warga_golongandarah=='Lainnya' ? 'selected':'' ?> value="Lainnya">Lainnya</option>
									</select>
								</div>
								<div class="form-group">
									<label>Hobi</label>
									<input required name="warga_hobi" class="form-control " type="text" value="<?=$data->warga_hobi?>"></input>
								</div>
								<div class="form-group">
									<label>Status Perkawinan</label>
									<select class="form-control select" name="warga_statusperkawainan">
										<option <?= $data->warga_statusperkawainan=='Belum Menikah' ? 'selected':'' ?> value="Belum Menikah<">Belum Menikah</option>
										<option <?= $data->warga_statusperkawainan=='Menikah' ? 'selected':'' ?> value="Menikah">Menikah</option>
										<option <?= $data->warga_statusperkawainan=='Cerai Hidup' ? 'selected':'' ?> value="Cerai Hidup">Cerai Hidup</option>
										<option <?= $data->warga_statusperkawainan=='Cerai Mati' ? 'selected':'' ?> value="Cerai Mati">Cerai Mati</option>
									</select>
								</div>
								<div class="form-group">
									<label>Pendidikan Terakhir</label>
									<select class="form-control select" name="warga_pendidikanterakhir">
										<option <?= $data->warga_pendidikanterakhir=='tidak/ Belum Sekolah' ? 'selected':'' ?> value="tidak/ Belum Sekolah<">Tidak / Belum Sekolah</option>
										<option <?= $data->warga_pendidikanterakhir=='SD' ? 'selected':'' ?> value="SD">SD</option>
										<option <?= $data->warga_pendidikanterakhir=='SMP' ? 'selected':'' ?> value="SMP">SMP</option>
										<option <?= $data->warga_pendidikanterakhir=='SMA' ? 'selected':'' ?> value="SMA">SMA</option>
										<option <?= $data->warga_pendidikanterakhir=='SMK' ? 'selected':'' ?> value="SMK">SMK</option>
										<option <?= $data->warga_pendidikanterakhir=='D1/D2' ? 'selected':'' ?> value="D1/D2">D1/D2</option>
										<option <?= $data->warga_pendidikanterakhir=='D3/Sarjana muda/Akademi' ? 'selected':'' ?> value="D3/Sarjana muda/Akademi">D3/Sarjana muda/Akademi</option>
										<option <?= $data->warga_pendidikanterakhir=='D4/S1' ? 'selected':'' ?> value="D4/S1">D4/S1</option>
										<option <?= $data->warga_pendidikanterakhir=='S2' ? 'selected':'' ?> value="S2">S2</option>
										<option <?= $data->warga_pendidikanterakhir=='S3' ? 'selected':'' ?> value="S3">S3</option>
									</select>
								</div>
								<div class="form-group">
									<label>Pekerjaan</label>
									<select class="form-control select" name="warga_pekerjaan">
										<option <?= $data->warga_pekerjaan=='Belum Bekerja' ? 'selected':'' ?> value="Belum Bekerja<">Belum Bekerja</option>
										<option <?= $data->warga_pekerjaan=='Buruh Harian Lepas' ? 'selected':'' ?> value="Buruh Harian Lepas">Buruh Harian Lepas</option>
										<option <?= $data->warga_pekerjaan=='Pelajar/Mahasiswa' ? 'selected':'' ?> value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
										<option <?= $data->warga_pekerjaan=='Pegawai Swasta' ? 'selected':'' ?> value="Pegawai Swasta">Pegawai Swasta</option>
										<option <?= $data->warga_pekerjaan=='Pegawai Negeri' ? 'selected':'' ?> value="Pegawai Negeri">Pegawai Negeri</option>
										<option <?= $data->warga_pekerjaan=='Wirausaha' ? 'selected':'' ?> value="Wirausaha">Wirausaha</option>
									</select>
									<label>Lainnya</label>
									<!-- <input type="text" name="warga_pekerjaanlainnya" class="form-control" value="<?=$data->warga_pekerjaanlainnya?>"> -->
								</div>
								<div class="form-group">
									<label>Tempat Bekerja<br><small>Alamat/Lokasi/Nama Usaha</small></label>
									<textarea class="form-control" rows="4" name="warga_alamatbekerja"><?=$data->warga_alamatbekerja?></textarea>
								</div>
								<div class="form-group">
									<label>Memiliki NPWP</label>
									<div class="">
										<label style="padding-right: 20px">
											<input <?=$data->warga_npwp=='ya' ? 'checked':''?> required name="warga_npwp" value="ya" type="radio" >
											Ya
										</label>
										<label style="padding-right: 20px">
											<input <?=$data->warga_npwp=='tidak' ? 'checked':''?> required name="warga_npwp" value="tidak" type="radio" >
											Tidak
										</label>
									</div>
								</div>
								<div class="form-group">
									<label>Nomor NPWP</label>
									<input type="text" name="warga_nonpwp" class="form-control" value="<?=$data->warga_nonpwp?>">
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
