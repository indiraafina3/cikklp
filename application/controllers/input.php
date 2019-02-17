<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Read
 *
 * @package     Controllers
 * @subpackage  null
 * @category    Controllers
 * @author      Guilherme Gatti
 * @link        null
 */
/**
 * 
 */

class Input extends CI_Controller {

	/**
	 * Construct of CI_Controller
	 *
	 * @param  null  Do not have a param
	 * @return null  Do not have a return
	 */
	public function __construct()
	{
	
		/**
		 * Instead the construct of CI_Controller
		 */
		parent::__construct();

	}

	/**
	 * Index of the read page
	 *
	 * @param  null  Do not have a param
	 * @return null  Do not have a return
	 */
	public function index()
	{

		/**
		 * Save in a variable the third segment of the url
		 *
		 * @var string $segment  Select the third segment of the url
		 */


		/**
		 * Read the user in the table using the index_model
		 *
		 * @var array $query  Read a specific user
		 */

		
		/**
		 * Save the query result in a new variable
		 *
		 * @var array $data  Create a key and save all the results
		 */
		

		/**
		 * Load all the views and send the data variable
		 */
		$this->load->view('inputmhs');
	}
	public function do_insert()
	{
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$prodi = $_POST['prodi'];
		$data_insert = array('nim' => $nim, 'nama' => $nama, 'prodi' => $prodi );
		$res = $this->mymodel->insertData('mhs',$data_insert);
		if($res>=1){
			redirect('Lihat/index');
		}else{
			echo "data gagal masuk";
		}
	}

	public function edit_data($nim)
	{
		 $mhs = $this->mymodel->ambil_where("where nim = '$nim'");
		 $data = array('nim' => $mhs[0]['NIM'] , 'nama' => $mhs[0]['Nama'], 'prodi' => $mhs[0]['Prodi'], );
		 $res = $this->load->view('edtmhs', $data );
		 
	}

	public function do_update()
	{
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$prodi = $_POST['prodi'];
		$data_update = array('nama' => $nama, 'prodi' => $prodi );
		$where = array ('nim' => $nim);
		$res = $this->mymodel->updateData('mhs',$data_update,$where);
		if($res>=1){
			redirect('Lihat/index');
		}else{
			echo "data gagal masuk";
		}
	}

	public function do_delete($nim)
	{
		$where = array('nim' => $nim );
		$res = $this->mymodel->deleteData('mhs', $where);
		if ($res>=1) {
			redirect('Lihat/index');
		}else{
			echo "data gagal masuk";
		}
	}

	public function do_insert_kklp()
	{
		$id = $_POST['id'];
		$instansi = $_POST['instansi'];
		$penempatan = $_POST['penempatan'];
		$alamat = $_POST['alamat'];
		$tele = $_POST['tele'];
		$pimpinan = $_POST['pimpinan'];
		$materi = $_POST['materi'];
		$judul_kasus = $_POST['judul_kasus'];
		$nama1 = $_POST['nama1'];
		$nama2 = $_POST['nama2'];
		$nama3 = $_POST['nama3'];
		$data_insert = array('instansi' => $instansi, 'penempatan' => $penempatan, 'alamat' => $alamat, 'tele' => $tele, 'pimpinan' => $pimpinan, 'materi' => $materi, 'judul_kasus' => $judul_kasus, 'nama1' => $nama1, 'nama2' => $nama2, 'nama3' => $nama3, 'id' => $id );
		$res = $this->mymodel->insertkklp('kklp',$data_insert);
		if($res>=1){
			redirect('Lihatkklp/index');
		}else{
			echo "data gagal masuk";
		}
	}

	public function lihat_data_kklp($id)
	{
		 $mhs = $this->mymodel->ambil_kklp("where id = '$id'");
		 $data = array('id' => $mhs[0]['id'] ,'instansi' => $mhs[0]['instansi'], 'penempatan' => $mhs[0]['penempatan'], 'alamat' => $mhs[0]['alamat'], 'tele' => $mhs[0]['tele'], 'pimpinan' => $mhs[0]['pimpinan'], 'materi' => $mhs[0]['materi'], 'judul_kasus' => $mhs[0]['judul_kasus'], 'nama1' => $mhs[0]['nama1'], 'nama2' => $mhs[0]['nama2'], 'nama3' => $mhs[0]['nama3'], );
		 $res = $this->load->view('lhtkklp', $data );
	}	

	public function edit_data_kklp($id)
	{
		 $mhs = $this->mymodel->ambil_kklp("where id = '$id'");
		 $data = array('id' => $mhs[0]['id'] ,'instansi' => $mhs[0]['instansi'], 'status' => $mhs[0]['status'], 'penempatan' => $mhs[0]['penempatan'], 'alamat' => $mhs[0]['alamat'], 'tele' => $mhs[0]['tele'], 'pimpinan' => $mhs[0]['pimpinan'], 'materi' => $mhs[0]['materi'], 'judul_kasus' => $mhs[0]['judul_kasus'], 'nama1' => $mhs[0]['nama1'], 'nama2' => $mhs[0]['nama2'], 'nama3' => $mhs[0]['nama3'], );
		 $res = $this->load->view('edtkklp', $data );
	}

	public function do_update_kklp()
	{
		$id = $_POST['id'];
		$instansi = $_POST['instansi'];
		$penempatan = $_POST['penempatan'];
		$alamat = $_POST['alamat'];
		$tele = $_POST['tele'];
		$pimpinan = $_POST['pimpinan'];
		$materi = $_POST['materi'];
		$judul_kasus = $_POST['judul_kasus'];
		$nama1 = $_POST['nama1'];
		$nama2 = $_POST['nama2'];
		$nama3 = $_POST['nama3'];
		$status = $_POST['status'];
		$data_update_kklp = array('instansi' => $instansi, 'status' => $status, 'penempatan' => $penempatan, 'alamat' => $alamat, 'tele' => $tele, 'pimpinan' => $pimpinan, 'materi' => $materi, 'judul_kasus' => $judul_kasus, 'nama1' => $nama1, 'nama2' => $nama2, 'nama3' => $nama3, 'id' => $id );
		$where = array ('id' => $id);
		$res = $this->mymodel->updatekklp('kklp', $data_update_kklp, $where);
		if($res>=1){
			redirect('Lihatkklp/index');
		}else{
			echo "data gagal masuk";
		}
	}

	public function do_delete_kklp($id)
	{
		$where = array('id' => $id );
		$res = $this->mymodel->deletekklp('kklp', $where);
		if ($res>=1) {
			redirect('Lihatkklp/index');
		}else{
			echo "data gagal masuk";
		}
	}

	public function simpan_sp()
	{
		$date = $_POST['date'];
		$nosurat = $_POST['nosurat'];
		$instansi = $_POST['instansi'];
		$ketuaprodi = $_POST['ketuaprodi'];
		$nip = $_POST['nip'];
		$nama1 = $_POST['nama1'];
		$nama2 = $_POST['nama2'];
		$nama3 = $_POST['nama3'];
		$data = array('ketuaprodi' => $ketuaprodi, 'nip' => $nip, 'date' => $date, 'nosurat' => $nosurat, 'instansi' => $instansi, 'nama1' => $nama1, 'nama2' => $nama2, 'nama3' => $nama3 );
		$res = $this->mymodel->insert_sp('suratpengantar',$data);
		if($res>=1){
					$this->load->view('suratpengantar1',$data);
		}else{
			echo "data gagal masuk";
		}
	}

	public function cetak_lp()
	{
		$this->load->view('lembarpenilaian');
	}

	public function edt_sp($id)
	{
		 $mhs = $this->mymodel->ambil_kklp("where id = '$id'");
		 $data = array('id' => $mhs[0]['id'] ,'instansi' => $mhs[0]['instansi'], 'penempatan' => $mhs[0]['penempatan'], 'alamat' => $mhs[0]['alamat'], 'tele' => $mhs[0]['tele'], 'pimpinan' => $mhs[0]['pimpinan'], 'materi' => $mhs[0]['materi'], 'judul_kasus' => $mhs[0]['judul_kasus'], 'nama1' => $mhs[0]['nama1'], 'nama2' => $mhs[0]['nama2'], 'nama3' => $mhs[0]['nama3'], );
		 $res = $this->load->view('suratpengantar', $data );
	}

	public function cetak_sp($id)
	{
		 $mhs = $this->mymodel->Get_sp("where id = '$id'");
		 $data = array('id' => $mhs[0]['id'] ,'instansi' => $mhs[0]['instansi'], 'nosurat' => $mhs[0]['nosurat'], 'date' => $mhs[0]['date'], 'ketuaprodi' => $mhs[0]['ketuaprodi'], 'nip' => $mhs[0]['nip'], 'nama1' => $mhs[0]['nama1'], 'nama2' => $mhs[0]['nama2'], 'nama3' => $mhs[0]['nama3'], );
		 $res = $this->load->view('suratpengantar1', $data );
	}

	public function do_delete_sp($id)
	{
		$where = array('id' => $id );
		$res = $this->mymodel->delete_sp('suratpengantar', $where);
		if ($res>=1) {
			redirect('Suratpeng/index');
		}else{
			echo "data gagal masuk";
		}
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function login_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		if ($this->form_validation->run()) {
			//true
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			//model function
			$this->load->model('mymodel');
			if ($this->mymodel->can_login($username, $password)) {
				$session_data = array(
					'username' => $username);
				$this->session->set_userdata($session_data);
				$this->load->view('index');

			}
			else
			{
				$this->session->set_flashdata('error', 'Invalid Username and Password');
				$this->load->view('login');
			}
		}else{
			//false
			$this->login();
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		redirect(base_url(). 'input/login');
	}

//		if ($this->session->userdata('username') != '') {

}
