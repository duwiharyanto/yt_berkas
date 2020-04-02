<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * Programer haryanto.duwi
	 * Email haryanto.duwi@gmail.com
	 * Github duwiharyanto.guthub.io
	 */

//include controller master
require './plugins/phpexcel/vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx as writer;

class Pendatang extends CI_Controller {
// class Registrasi extends Core {
	public function __construct(){
		parent::__construct();
		$this->load->model('Model','Crud');
		$this->load->library('Duwi');
		$this->load->helper('generatetombol');
		$this->duwi->listakses($this->session->userdata('user_level'));
		$this->duwi->cekadmin();
	}
	//VARIABEL
	private $master_tabel="pendatang"; //Mendefinisikan Nama Tabel
	private $id="pendatang_id";	//Menedefinisaikan Nama Id Tabel
	private $default_url="Warga/Pendatang/"; //Mendefinisikan url controller
	private $default_view="Warga/Pendatang/"; //Mendefinisiakn defaul view
	private $view="_template/_backend"; //Mendefinisikan Tamplate Root
	private $path='./upload/registrasi/';
	private $pathformatimport='./template/';

	private function global_set($data){
		//OVERWRITE UNTUK MULTI INDEX VIEW
		if(isset($data['overwriteview'])){
			$overwriteview=$data['overwriteview'];
			$menu_submenu=$data['menu_submenu'];
		}else{
			$overwriteview="views/Warga/Pendatang/index.php";
			$menu_submenu='pendatang';
		}
		$data=array(
			'menu'=>'warga',//Seting menu yang aktif
			'menu_submenu'=>$menu_submenu,
			'headline'=>$data['headline'], //Deskripsi Menu
			'url'=>$data['url'], //Deskripsi URL yang dilewatkan dari function
			'ikon'=>"fa fa-tasks",
			'view'=>$overwriteview,
			'detail'=>false,
			'cetak'=>false,
			'edit'=>true,
			'delete'=>true,
			'download'=>false,
			'add'=>true,
			'import'=>false,
			'qrcode'=>false,
		);
		return (object)$data; //MEMBUAT ARRAY DALAM BENTUK OBYEK
	}
	private function hapus_file($id){
		$query=array(
			'tabel'=>$this->master_tabel,
			'where'=>array(array($this->id=>$id)),
		);
		$file=$this->Crud->read($query)->row();
		unlink($this->path.$file->reg_foto);
	}
	public function index()
	{
		$global_set=array(
			'headline'=>'warga pendatang',
			'url'=>$this->default_url,
		);
		$global=$this->global_set($global_set);

		//CEK SUBMIT DATA
		if($this->input->post('pendatang_idwarga')){
			//PROSES SIMPAN
			$data=array(
				'pendatang_idwarga'=>$this->input->post('pendatang_idwarga'),
				'pendatang_alamatbaru'=>$this->input->post('pendatang_alamatbaru'),
				'pendatang_alamatlama'=>$this->input->post('pendatang_alamatlama'),
			);
			########################################################
			// $file='reg_foto';
			// if($_FILES[$file]['name']){
			// 	if($this->duwi->gambarupload($this->path,$file)){
			// 		$fileupload=$this->upload->data('file_name');
			// 		$data[$file]=$fileupload;
			// 	}else{
			// 		$dt['error']=$this->upload->display_errors();
			// 		return $this->output->set_output(json_encode($dt));
			// 		//exit();
			// 	}
			// }
			$query=array(
				'data'=>$this->security->xss_clean($data),
				'tabel'=>$this->master_tabel,
			);
			$insert=$this->Crud->insert($query);
			if($insert){
				$this->session->set_flashdata('success','simpan berhasil');
				$dt['success']='input data berhasil';
			}else{
				// $this->session->set_flashdata('error','simpan gagal');
				$dt['error']='input data error';
			}
			return $this->output->set_output(json_encode($dt));
		}else{
			$data=array(
				'global'=>$global,
				'menu'=>$this->duwi->menu_backend($this->session->userdata('user_level')),
			);
			$this->load->view($this->view,$data);
		}
	}
	public function tabel(){
		$global_set=array(
			'headline'=>'Data',
			'url'=>$this->default_url,
		);
		$nama='';
		$norumah='';
		//LOAD FUNCTION GLOBAL SET
		$global=$this->global_set($global_set);
		//PROSES TAMPIL DATA
		$query=array(
			'select'=>'a.*,b.pendidikan_nama,c.norumah_nomor,c.norumah_keterangan,d.pendatang_alamatbaru,d.pendatang_alamatlama,d.pendatang_id',
			'tabel'=>'wargakampung a',
			'join'=>[['tabel'=>'pendidikan b','ON'=>'b.pendidikan_id=a.warga_idpendidikan','jenis'=>"iNNER"],
			['tabel'=>'norumah c','ON'=>'c.norumah_id=a.warga_norumah','jenis'=>'INNER'],
			['tabel'=>'pendatang d','ON'=>'d.pendatang_idwarga=a.warga_id','jenis'=>'INNER']
			],
			'order'=>array('kolom'=>'a.warga_nama','orderby'=>'ASC'),
		);
		if($this->input->post('nama')) {
			$nama=$this->input->post('nama');
		}
		if($this->input->post('nomorumah')) {
			$norumah=$this->input->post('nomorumah');
		}		
		if($nama OR $norumah){
		 	$query['like']=[['warga_nama'=>$nama]];
			if($norumah){
				// $query['like']=[['warga_nama'=>$nama],['warga_nomorrumah'=>$norumah]];
				$query['where']=[['warga_nomorrumah'=>$norumah]];
			}	
		}
		$data=array(
			'global'=>$global,
			'data'=>$this->Crud->join($query)->result(),
		);

		$this->load->view($this->default_view.'tabel',$data);
	}
	public function edit(){
		$global_set=array(
			'headline'=>'edit data',
			'url'=>$this->default_url,
		);
		$global=$this->global_set($global_set);
		$id=$this->input->post('id');
		if($this->input->post('pendatang_idwarga')){
			//PROSES SIMPAN
			$data=array(
				'pendatang_idwarga'=>$this->input->post('pendatang_idwarga'),
				'pendatang_alamatbaru'=>$this->input->post('pendatang_alamatbaru'),
				'pendatang_alamatlama'=>$this->input->post('pendatang_alamatlama'),
			);
			####################################################
			// $file='user_foto';
			// if($_FILES[$file]['name']){
			// 	if($this->gambarupload($this->path,$file)){
			// 		if($id){
			// 			$this->hapus_file($id);
			// 		}
			// 		$fileupload=$this->upload->data('file_name');
			// 		$data[$file]=$fileupload;
			// 	}else{
			// 		$dt['error']=$this->upload->display_errors();
			// 		return $this->output->set_output(json_encode($dt));
			// 		//exit();
			// 	}
			// }
			$query=array(
				'data'=>$this->security->xss_clean($data),
				'tabel'=>$this->master_tabel,
				'where'=>array($this->id=>$id),
			);
			$update=$this->Crud->update($query);
			if($update){
				//$this->session->set_flashdata('success','update data berhasil');
				$dt['success']='Update data berhasil';
			}else{
				//$this->session->set_flashdata('error','update data gagal');
				$dt['error']='Update data gagal';
			}
			return $this->output->set_output(json_encode($dt));
		}else{
			$query=array(
				'tabel'=>$this->master_tabel,
				'where'=>array(array($this->id=>$id))
			);
			$warga=array(
				'tabel'=>'wargakampung',
			);			
			$data=array(
				'warga'=>$this->Crud->read($warga)->result(),
				'data'=>$this->Crud->read($query)->row(),
				'global'=>$global,
			);
			//$this->viewdata($data);
			$this->load->view($this->default_view.'edit',$data);
		}
	}
	public function add(){
		$global_set=array(
			'submenu'=>false,
			'headline'=>'tambah data',
			'url'=>$this->default_url, //AKAN DIREDIRECT KE INDEX
		);
		$global=$this->global_set($global_set);
		$q_warga=[
			'tabel'=>'wargakampung',
		];
		$data=array(
			'warga'=>$this->Crud->read($q_warga)->result(),
			'global'=>$global,
			);
		$this->load->view($this->default_view.'add',$data);
	}
	public function hapus(){
		$id=$this->input->post('id');
		#############################
		//$this->hapus_file($id);
		$query=array(
			'tabel'=>$this->master_tabel,
			'where'=>array($this->id=>$id),
		);
		$delete=$this->Crud->delete($query);
		if($delete){
			$dt['status']='success';
			$dt['msg']='hapus data berhasil';
		}else{
			$dt['status']='success';
			// $dt['msg']='input data error';
			$dt['msg']=$delete;
		}
		return $this->output->set_output(json_encode($dt));
	}
	public function downloadtemplate($file){
		$this->downloadfile($this->pathformatimport,$file);
	}
	public function cetak($nama=null,$norumah=null){
		$global_set=array(
			'headline'=>'Daftar Warga',
			'url'=>$this->default_url,
		);
		$global=$this->global_set($global_set);
		$query=array(
			'select'=>'a.*,b.pendidikan_nama,c.norumah_nomor,c.norumah_keterangan,d.pendatang_alamatbaru,d.pendatang_alamatlama,d.pendatang_id',
			'tabel'=>'wargakampung a',
			'join'=>[['tabel'=>'pendidikan b','ON'=>'b.pendidikan_id=a.warga_idpendidikan','jenis'=>"iNNER"],
			['tabel'=>'norumah c','ON'=>'c.norumah_id=a.warga_norumah','jenis'=>'INNER'],
			['tabel'=>'pendatang d','ON'=>'d.pendatang_idwarga=a.warga_id','jenis'=>'INNER']
			],
			'order'=>array('kolom'=>'a.warga_nama','orderby'=>'ASC'),
		);
		if((isset($nama)) AND (isset($norumah))){
		if($norumah!='0'){
		 	// print_r($norumah.$nama);
		 	// exit();
			$query['where']=[['warga_nomorrumah'=>$norumah]];		 	
		}		
		if($nama!='0'){
		 	$query['like']=[['warga_nama'=>$nama]];	
		}			
		}		
		$data=array(
			'global'=>$global,
			'data'=>$this->Crud->join($query)->result(),
			'deskripsi'=>'dicetak dari sistem tanggal '.date('d-m-Y'),
			'atributsistem'=>$this->duwi->atributsistem(),
		);
		$view=$this->load->view($this->default_view.'cetak',$data,true);
		$cetak=[
			'judul'=>$global_set['headline'],
			'view'=>$view,
			'kertas'=>'A4-l',
		];
		$this->duwi->prosescetak($cetak);
	}
	public function qrcode($id){
		$isi=site_url('public/registrasi/index/'.$id);
		$param=[
			'path'=>'./upload/qrcode/',
			'isi'=>$isi,
			'namafile'=>$id,
		];
		$url=$this->duwi->generateqrcode($param);
		echo "<h2 style='text-align:center'>Scan QRcode</h2>";
		echo "<img src='".$url."' width='300px' height='300px' style='display: block; margin-left: auto;margin-right:auto; margin-top:50px'></img>";
		echo "<p style='text-align:center;margin-top:20px'>".$isi."</p>";
	}
}
