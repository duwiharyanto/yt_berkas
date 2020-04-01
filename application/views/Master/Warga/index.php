<div class="row" >
	<div class="col-sm-12" id="konten">
	        <div class="white-box">
	           <div class="row">
	           		<div class="col-sm-2">
	           			<div class="form-group">
	           				<label>Nama</label>
	           				<input type="text" name="warga_nama" class="form-control">
	           			</div>
	           		</div>
	           		<div class="col-sm-2">
	           			<div class="form-group">
	           				<label>Nomor Rumah</label>
	           				<input type="text" name="warga_norumah" class="form-control">
	           			</div>
	           		</div>
	           		<div class="col-sm-1">
	           			<div class="form-group">
	           				<label>&nbsp</label>
	           				<button class="btn btn-block btn-primary" onclick="cari()" id="btncari" url="<?= base_url($global->url.'tabel')?>">Cari</button>
	           			</div>
	           		</div>
	           		<div class="col-sm-1">
	           			<div class="form-group">
	           				<label>&nbsp</label>
	           				<button class="btn btn-block btn-primary" onclick="cetak()" id="btncetak" url="<?= base_url($global->url.'cetak')?>">Print</button>
	           			</div>
	           		</div>
	           </div>
	        </div>
			<div id="view">
				<div class="text-center" id="ajaxloading" style="display: none"><i class="fa fa-spin fa-circle-o-notch" ></i> Loading data. Please wait...</div>
				<div id="tabel" url="<?= base_url($global->url.'tabel')?>">
					<div class="text-center"><i class="fa fa-spin fa-circle-o-notch"></i> Loading data. Please wait...</div>
				</div>
			</div>
		</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		var url=$('#tabel').attr('url');
		setTimeout(function () {
		$("#tabel").load(url);
		//alert(url);
		}, 200);
	})
	function cari(){
		var nama=$('[name=warga_nama]').val()
		var nomorumah=$('[name=warga_norumah]').val()
		var url=$('#btncari').attr('url')

		$.ajax({
			type:'POST',
			url:url,
			data:{nama:nama,nomorumah:nomorumah},
			success:function(data){
				$("#view").html(data);
			}
		})
		return false
	}
	function cetak(){
		var nama='0';
		var nomorumah='0';
		if($('[name=warga_nama]').val()){
			nama=$('[name=warga_nama]').val()
		}
		if($('[name=warga_norumah]').val()){
			nomorumah=$('[name=warga_norumah]').val()
		}
		var url=$('#btncetak').attr('url')
		var reurl=url+'/'+nama+'/'+nomorumah
		window.open(
          	reurl,'popUpWindow','height=700,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
	}
</script>
<?php include 'action.php';?>
