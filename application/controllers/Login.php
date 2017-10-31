<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('security');
		$this->load->library('session');

		$this->load->model('Login_model');
	}


	public function index(){
		$sudah_login = $this->session->userdata('sudah_login');
	    $data['status'] = $this->session->userdata('status');
	    $data['email'] = $this->session->userdata('email');

		     if(empty($sudah_login))
		     {
		      $this->load->view('login');
		     }
		     else
		     {
		        $status = $this->session->userdata('status');
		        if($status == 'Aktif')
		        {
		          header('location:'.base_url().'Superadmin');
		        }
		        else if($status == 'Non Aktif'){
		          header('location:'.base_url().'Login');
		      }

		     }
	} 

	public function proses_login(){
		//Inisialisasi dengan element input yang ada di view form
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$enkripsi_pass = hash('md5', $password);

		$data_from_db = $this->Login_model->cek_user($email,$enkripsi_pass);// mengambil data dari fungsi cek_user
	    $hitung_datadb = count($data_from_db);

	    $this->form_validation->set_rules('email','Email','required|trim|xss_clean');// melakukan validasi form login
	    $this->form_validation->set_rules('password','Password','required|trim|xss_clean');

	    if ($this->form_validation->run()==FALSE) {// jika validasi terjadi kesalahan maka akan kembali ke halaman awal
	      $this->load->view('login');// ^ dengan menampilkan error
	      
	    }else {
	      if ($hitung_datadb>0) {
	        $session_data = array('id_user'					=>$data_from_db[0]->id_user,
	                               'fullname'				=>$data_from_db[0]->fullname,
	                               'email'					=>$data_from_db[0]->email,
	                               'jk'						=>$data_from_db[0]->jk,
	                               'status'					=>$data_from_db[0]->status,
	                               'sudah_login'=>TRUE);	// data yang di gunakan untuk session yang di ambil dari database di atas

	        $this->session->set_userdata($session_data);// set data-data session
	  
	      if($this->session->userdata('status')=='Aktif') {
					redirect(base_url('dashboard'));
			  }
	      }else {
	        $this->session->set_flashdata('notif','<font color ="red">Gagal! Email atau password salah</font>');
	       	redirect(base_url('Login'));
	      }
	    }

	}

	public function logout()
	{
    	$this->session->sess_destroy();// menghancurkan session
   		 redirect(base_url('Login'));// melakukan kembali ke fungsi home 
 	}


}

?>


