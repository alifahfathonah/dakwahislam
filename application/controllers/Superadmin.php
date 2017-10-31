<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Superadmin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Superadmin_model');
		$this->load->library('session');
		$this->load->model('Video_model');
		date_default_timezone_set('Asia/Jakarta');

		

	}


//KELOLA VIDEO
/*============================================================================================================*/
	 public function read_video(){
    	$sudah_login = $this->session->userdata('sudah_login');
	    $data['role'] = $this->session->userdata('role');
	    $data['jk'] = $this->session->userdata('jk');
	    $data['email'] = $this->session->userdata('email');
	     $data['query'] = $this->Video_model->get_allvideo();
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));
	    $data['page'] = 'Data Video';
		$data['info'] = ' Anda dapat menambah,mengedit dan menghapus video';
		$data['judul'] = ' Dakwah Islam | Data Video';
		$logo = $this->db->query('select * from setting_web where id_setting = "9"')->result_array();
		$data['logo'] = $logo;
		$logofav = $this->db->query('select * from setting_web where id_setting = "10"')->result_array();
		$data['logofav'] = $logofav;

	    if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
	      redirect(base_url('Login'));
	    } else { 
			$this->load->view('superadmin/header',$data);
			$this->load->view('superadmin/read_video');
			$this->load->view('superadmin/footer');
		}

    }


    public function insert_video(){
		$sudah_login = $this->session->userdata('sudah_login');
	    $data['role'] = $this->session->userdata('role');
	    $data['jk'] = $this->session->userdata('jk');
	    $data['email'] = $this->session->userdata('email');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));
		//$data['user'] = $this->Superadmin_model->get_listuser();
		$data['kategori'] = $this->Video_model->getkategori();
		$this->load->helper('url');
		$data['page'] = 'Insert Data Video';
		$data['info'] = ' Menambah data video';
		$data['judul'] = ' Cahaya Makmur | Insert Data Video';
		$logo = $this->db->query('select * from setting_web where id_setting = "9"')->result_array();
		$data['logo'] = $logo;
		$logofav = $this->db->query('select * from setting_web where id_setting = "10"')->result_array();
		$data['logofav'] = $logofav;

		/*$data2 = array(
			//'title' 	=> 'Insert Produk',
			'kode' 		=> '',
			'stat' 		=> 'new',
			'nama'		=> '',
			'picture' 	=> '',
			'deskripsi' => '',
			'status'	=> '',
			'produk'	=> ''
		); */

	    if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
	      redirect(base_url('Login'));
	    } else { 
	    	$this->load->view('superadmin/header',$data);
			$this->load->view('superadmin/insert_video');
			$this->load->view('superadmin/footer');
		}

	}

	public function proses_insert_video(){
		$this->load->library('upload');

		$date 	= date('Y-m-d H:i:s');
        $nmfile = "file_".time(); //nama file + fungsi time
        $config['upload_path'] = './assets/uploads/'; //Folder untuk menyimpan hasil upload
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

         if($_FILES['filefoto']['name'])
        {
            if ($this->upload->do_upload('filefoto'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  'image' =>$gbr['file_name'],
                  'judul' =>$this->input->post('judul'),
                  'link_video' =>$this->input->post('link_video'),
                  'status' =>$this->input->post('status'),
                  'kategori' =>$this->input->post('kategori'),
                  'datetime'=>$date

                  
                );

                $this->Video_model->get_insert($data); //akses model untuk menyimpan ke database
               // $this->helper_log("add", "Menambahkan data video");
                
                
              }
                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata('pesan', '<div role="alert" class="alert alert-success alert-dismissible">
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><span class="icon mdi mdi-check"></span><strong>Bagus!</strong> Anda Berhasil Menambahkan Data Video</div>');
                redirect('Superadmin/read_video'); //jika berhasil maka akan ditampilkan view upload
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata('pesan','<div role="alert" class="alert alert-danger alert-dismissible">
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><span class="icon mdi mdi-check"></span><strong>Oops!</strong> Anda Gagal Menambahkan Data Video</div>');
                redirect('Superadmin/read_video'); //jika gagal maka akan ditampilkan form upload
            }
        }

         public function edit_video(){
 
        $sudah_login = $this->session->userdata('sudah_login');
	    $data['role'] = $this->session->userdata('role');
	    $data['jk'] = $this->session->userdata('jk');
	    $data['email'] = $this->session->userdata('email');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));
		$data['page'] = 'Edit Data Video';
		$data['info'] = ' Mengedit data video';
		$data['kategori'] = $this->Video_model->getkategori();
		$data['judul'] = ' Cahaya Makmur | Edit Data Video';
		$logo = $this->db->query('select * from setting_web where id_setting = "9"')->result_array();
		$data['logo'] = $logo;
		$logofav = $this->db->query('select * from setting_web where id_setting = "10"')->result_array();
		$data['logofav'] = $logofav;

		$idgbr=$this->input->get('idgbr'); //mengambil variabel get idgbr dari url
       	$where=array('id_video'=>$idgbr); //array where query untuk menampilkan gambar per id
       	$data['row'] = $this->Video_model->get_byimage($where);   //query dari model ambil per id

	    if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
	      redirect(base_url('Login'));
	    } else { 
	    	$this->load->view('superadmin/header',$data);
			$this->load->view('superadmin/edit_video');
			$this->load->view('superadmin/footer');
	    }
	}

	//untuk menangani proses upload gambar yang di edit
   public function proses_edit_video(){
 
       $this->load->library('upload');// library dapat di load di fungsi , di autoload atau di construc nya tinggal pilih salah satunya
       $date 			= date('Y-m-d H:i:s');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $path   = './assets/uploads/'; //path folder
       $path2   = './assets/hasil_resize/';
       $config['upload_path'] = $path; //variabel path untuk config upload
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '2048'; //maksimum besar file 2M
       $config['file_name'] = $nmfile; //nama yang terupload nantinya
 
       $this->upload->initialize($config);
 
       $idgbr      = $this->input->post('kode'); /* variabel id gambar */
       $filelama   = $this->input->post('filelama'); /* variabel file gambar lama */
 
       if($_FILES['filefoto']['name'])
       {
           if ($this->upload->do_upload('filefoto'))
           {
               $gbr = $this->upload->data();
               $data = array(
                 'image' =>$gbr['file_name'],
                 'judul' =>$this->input->post('judul'),
                  'link_video' =>$this->input->post('link_video'),
                  'status' =>$this->input->post('status'),
                  'kategori' =>$this->input->post('kategori'),
                  'datetime'=>$date
 
               );
 
               @unlink($path.$filelama);//menghapus gambar lama, variabel dibawa dari form
               @unlink($path2.$filelama);//menghapus gambar lama, variabel dibawa dari form
 
               $where =array('id_video'=>$idgbr); //array where query sebagai identitas pada saat query dijalankan
               $this->Video_model->get_update($data,$where); //akses model untuk menyimpan ke database
               //$this->helper_log("edit", "Mengedit data video");
 
               $this->session->set_flashdata('pesan', '<div role="alert" class="alert alert-success alert-dismissible">
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><span class="icon mdi mdi-check"></span><strong>Bagus!</strong> Anda Berhasil Mengedit Data Video </div>'); //pesan yang muncul jika berhasil diupload pada session flashdata
               redirect('Superadmin/read_video'); //jika berhasil maka akan ditampilkan view vupload
 
           }else{  /* jika upload gambar gagal maka akan menjalankan skrip ini */
               $er_upload=$this->upload->display_errors(); /* untuk melihat error uploadnya apa */
               //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
               $this->session->set_flashdata('pesan','<div role="alert" class="alert alert-danger alert-dismissible">
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><span class="icon mdi mdi-check"></span><strong>Oops!</strong> Anda Gagal Mengedit Data Video </div>');
               redirect('Superadmin/read_video'); //jika gagal maka akan ditampilkan form upload
           }
       }else{ /* jika file foto tidak ada maka query yg dijalankan adalah skrip ini  */
 
           $data = array(
               'judul' =>$this->input->post('judul'),
                  'link_video' =>$this->input->post('link_video'),
                  'status' =>$this->input->post('status'),
                  'kategori' =>$this->input->post('kategori'),
                  'datetime'=>$date
           );
 
           $where =array('id_video'=>$idgbr); //array where query sebagai identitas pada saat query dijalankan
           $this->Video_model->get_update($data,$where); //akses model untuk menyimpan ke database
          // $this->helper_log("edit", "Mengedit data video");
 
           $this->session->set_flashdata('pesan', '<div role="alert" class="alert alert-success alert-dismissible">
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><span class="icon mdi mdi-check"></span><strong>Bagus!</strong> Anda Berhasil Mengedit Data Video | Gambar tidak ada !!</div>');
           redirect('Superadmin/read_video'); /* jika berhasil maka akan kembali ke home upload */
       }
   }

   public function hapus_video($kode = 0){
   		$this->db->where('id_video',$kode);
		$query 	= $this->db->get('video');
		$row	= $query->row();

		unlink("./assets/uploads/$row->image");

		$hasil	= $this->Video_model->deldata('video',array('id_video' => $kode));
		//$this->helper_log("hapus", "Menghapus data video");
		redirect('Superadmin/read_video');
  
   }

    //END KELOLA VIDEO
/*============================================================================================================*/



// KELOLA KATEGORI CRUD
	/*============================================================================================================*/

	public function read_kategori(){

		$sudah_login = $this->session->userdata('sudah_login');
	    $data['role'] = $this->session->userdata('role');
	    $data['jk'] = $this->session->userdata('jk');
	    $data['email'] = $this->session->userdata('email');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));
		$data['kategori'] = $this->Video_model->get_list();
		$data['page'] = 'Data Kategori';
		$data['info'] = ' Anda dapat menambah,mengedit dan menghapus data kategori';
		$data['judul'] = ' Dakwah Islam | Data Kategori';
		$logo = $this->db->query('select * from setting_web where id_setting = "9"')->result_array();
		$data['logo'] = $logo;
		$logofav = $this->db->query('select * from setting_web where id_setting = "10"')->result_array();
		$data['logofav'] = $logofav;

	    if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
	      redirect(base_url('Login'));
	    } else { 
			$this->load->view('superadmin/header',$data);
			$this->load->view('superadmin/read_kategori');
			$this->load->view('superadmin/footer');
		}
	}

	public function insert_kategori(){

		$sudah_login = $this->session->userdata('sudah_login');
	    $data['role'] = $this->session->userdata('role');
	    $data['jk'] = $this->session->userdata('jk');
	    $data['email'] = $this->session->userdata('email');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));
		$data['page'] = 'Insert Data Kategori';
		$data['info'] = ' Menambah data kategori';
		$data['judul'] = ' Dakwah Islam | Insert Data Kategori';
		$logo = $this->db->query('select * from setting_web where id_setting = "9"')->result_array();
		$data['logo'] = $logo;
		$logofav = $this->db->query('select * from setting_web where id_setting = "10"')->result_array();
		$data['logofav'] = $logofav;

	    if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
	      redirect(base_url('Login'));
	    } else { 
	    	$this->load->view('superadmin/header',$data);
			$this->load->view('superadmin/insert_kategori');
			$this->load->view('superadmin/footer');
		}

	}

	public function proses_insert_kategori(){
		date_default_timezone_set('Asia/Jakarta');
		$nama = $this->input->post('nama');
		$status = $this->input->post('status');
		$date = date('Y-m-d H:i:s');
		

		$data = array(
			'nama'=>$nama,
			'datetime'=>$date,
			'status'=>$status
		);
		$this->Video_model->input_data($data,'kategori');
		//$this->helper_log("add", "Menambahkan data kategori");
		$this->session->set_flashdata('insert','<div role="alert" class="alert alert-success alert-dismissible">
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><span class="icon mdi mdi-check"></span><strong>Bagus!</strong> Anda Berhasil Menambahkan Data Kategori</div>');
		redirect('Superadmin/read_kategori');
	}

	public function edit_kategori($id){

		$sudah_login = $this->session->userdata('sudah_login');
	    $data['role'] = $this->session->userdata('role');
	    $data['jk'] = $this->session->userdata('jk');
	    $data['email'] = $this->session->userdata('email');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));
	    $where = array('id_kategori' => $id);
		$data['kategori'] = $this->Video_model->edit_data($where,'kategori')->result();
		$data['page'] = 'Data Kategori';
		$data['info'] = ' Menambah data kategori';
		$data['judul'] = ' Cahaya Makmur | Edit Data Kategori';
		$logo = $this->db->query('select * from setting_web where id_setting = "9"')->result_array();
		$data['logo'] = $logo;
		$logofav = $this->db->query('select * from setting_web where id_setting = "10"')->result_array();
		$data['logofav'] = $logofav;

	    if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
	      redirect(base_url('Login'));
	    } else { 
	    	$this->load->view('superadmin/header',$data);
			$this->load->view('superadmin/edit_kategori');
			$this->load->view('superadmin/footer');
		}


	}

	public function proses_edit_kategori(){

		date_default_timezone_set('Asia/Jakarta');
		$nama = $this->input->post('nama');
		$status = $this->input->post('status');
		$date = date('Y-m-d H:i:s');
		$id = $this->input->post('id_kategori');



		$data = array(
			'nama'=>$nama,
			'datetime'=>$date,
			'status'=>$status
		);

		$where = array(
			'id_kategori' => $id
		);
		$this->Video_model->update_data($where,$data,'kategori');
		//$this->helper_log("edit", "Mengedit data kategori");
		$this->session->set_flashdata('edit','<div role="alert" class="alert alert-success alert-dismissible">
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><span class="icon mdi mdi-check"></span><strong>Bagus!</strong> Anda Berhasil Mengedit Data Kategori</div>');
		redirect('Superadmin/read_kategori');
	}



public function hapus_kategori($id){
		$where = array('id_kategori' => $id);
		$this->Video_model->hapus_data($where,'kategori');
		//$this->helper_log("hapus", "Menghapus data kategori");
		$this->session->set_flashdata('hapus','<div role="alert" class="alert alert-success alert-dismissible">
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><span class="icon mdi mdi-check"></span><strong>Bagus!</strong> Anda Berhasil Menghapus Data Kategori</div>');
		redirect('Superadmin/read_kategori');
	}


	// END KELOLA KATEGORI CRUD
	/*============================================================================================================*/





	

	public function index()
	{
		$sudah_login = $this->session->userdata('sudah_login');
	    $data['role'] = $this->session->userdata('role');
	    $data['jk'] = $this->session->userdata('jk');
	    $data['email'] = $this->session->userdata('email');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));
	    $data['page'] = 'Dashboard';
		$data['info'] = ' Selamat datang di halaman dashboard';
		$data['judul'] = ' Dakwah Islam | Dashboard';
		$logo = $this->db->query('select * from setting_web where id_setting = "9"')->result_array();
		$data['logo'] = $logo;

		$logofav = $this->db->query('select * from setting_web where id_setting = "10"')->result_array();
		$data['logofav'] = $logofav;


		$video = $this->db->query('select * from video order by id_video desc limit 5')->result_array();
		$data['video'] = $video;

		$setting_web = $this->db->query('select * from setting_web order by id_setting limit 3')->result_array();
		$data['setting_web'] = $setting_web;


		$jumlahvideo = $this->db->query('select * from video')->num_rows();
		$data['jumlahvideo'] = $jumlahvideo;
		$jumlahpengaturan = $this->db->query('select * from setting_web')->num_rows();
		$data['jumlahpengaturan'] = $jumlahpengaturan;

		$jumlahkategori = $this->db->query('select * from kategori')->num_rows();
		$data['jumlahkategori'] = $jumlahkategori;
		$jumlahuser = $this->db->query('select * from user')->num_rows();
		$data['jumlahuser'] = $jumlahuser;

		



		if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
	      redirect(base_url('Login'));
	    }else { 
			$this->load->view('superadmin/header',$data);
			$this->load->view('superadmin/dashboard_admin');
			$this->load->view('superadmin/footer');
		}
	}

	//KELOLA USER CRUD
	/*============================================================================================================*/

	public function read_user(){

		$sudah_login = $this->session->userdata('sudah_login');
	    $data['role'] = $this->session->userdata('role');
	    $data['jk'] = $this->session->userdata('jk');
	    $data['email'] = $this->session->userdata('email');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));
		$data['user'] = $this->Superadmin_model->get_listuser();
		$data['page'] = 'Data User';
		$data['info'] = ' Anda dapat menambah,mengedit dan menghapus data user';
		$data['judul'] = ' Dakwah Islam | Data User';
		$logo = $this->db->query('select * from setting_web where id_setting = "9"')->result_array();
		$data['logo'] = $logo;
		$logofav = $this->db->query('select * from setting_web where id_setting = "10"')->result_array();
		$data['logofav'] = $logofav;

		
	    if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
	      redirect(base_url('Login'));
	    } else { 
			$this->load->view('superadmin/header',$data);
			$this->load->view('superadmin/read_user');
			$this->load->view('superadmin/footer');
		}
	}

	public function insert_user(){

		$sudah_login = $this->session->userdata('sudah_login');
	    $data['role'] = $this->session->userdata('role');
	    $data['jk'] = $this->session->userdata('jk');
	    $data['email'] = $this->session->userdata('email');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));
		$data['user'] = $this->Superadmin_model->get_listuser();
		$data['page'] = 'Insert Data User';
		$data['info'] = ' Menambah data user';
		$data['judul'] = ' Cahaya Makmur | Insert Data User';
		$logo = $this->db->query('select * from setting_web where id_setting = "9"')->result_array();
		$data['logo'] = $logo;
		$logofav = $this->db->query('select * from setting_web where id_setting = "10"')->result_array();
		$data['logofav'] = $logofav;

	    if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
	      redirect(base_url('Login'));
	    } else { 
	    	$this->load->view('superadmin/header',$data);
			$this->load->view('superadmin/insert_user');
			$this->load->view('superadmin/footer');
		}

	}

	public function proses_insert_user(){
		$fullname = $this->input->post('fullname');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$jk = $this->input->post('jk');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$status = $this->input->post('status');

		$data = array(
			'fullname'=>$fullname,
			'email'=>$email,
			'password'=>md5($password),
			'jk'=>$jk,
			'alamat'=>$alamat,
			'no_hp'=>$no_hp,
			'status'=>$status,
		);
		$this->Superadmin_model->input_data_user($data,'user');
		//$this->helper_log("add", "Menambahkan data user");
		$this->session->set_flashdata('insert','<div role="alert" class="alert alert-success alert-dismissible">
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><span class="icon mdi mdi-check"></span><strong>Bagus!</strong> Anda Berhasil Menambahkan Data User</div>');
		redirect('user');
	}

	public function edit_user($id){

		$sudah_login = $this->session->userdata('sudah_login');
	    $data['role'] = $this->session->userdata('role');
	    $data['jk'] = $this->session->userdata('jk');
	    $data['email'] = $this->session->userdata('email');
	    $data['fullname'] = strtoupper($this->session->userdata('fullname'));
	    $where = array('id_user' => $id);
		$data['user'] = $this->Superadmin_model->edit_data_user($where,'user')->result();
		$data['page'] = 'Edit Data User';
		$data['info'] = ' Mengedit data user';
		$data['judul'] = ' Cahaya Makmur | Edit Data User';
		$logo = $this->db->query('select * from setting_web where id_setting = "9"')->result_array();
		$data['logo'] = $logo;
		$logofav = $this->db->query('select * from setting_web where id_setting = "10"')->result_array();
		$data['logofav'] = $logofav;

	    if (!$sudah_login) { // jika $sudah_login == false atau belum login maka akan kembali ke redirect yang di tuju
	      redirect(base_url('Login'));
	    } else { 
	    	$this->load->view('superadmin/header',$data);
			$this->load->view('superadmin/edit_user');
			$this->load->view('superadmin/footer');
		}


	}

	public function proses_edit_user(){

		$fullname = $this->input->post('fullname');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$jk = $this->input->post('jk');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$status = $this->input->post('status');
		$id = $this->input->post('id_user');

		$data = array(
			'fullname'=>$fullname,
			'email'=>$email,
			'password'=>md5($password),
			'jk'=>$jk,
			'alamat'=>$alamat,
			'no_hp'=>$no_hp,
			'status'=>$status,
		);

		$where = array(
			'id_user' => $id
		);
		$this->Superadmin_model->update_data_user($where,$data,'user');
		//$this->helper_log("edit", "Mengedit data user");
		$this->session->set_flashdata('edit','<div role="alert" class="alert alert-success alert-dismissible">
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><span class="icon mdi mdi-check"></span><strong>Bagus!</strong> Anda Berhasil Mengedit Data User</div>');
		redirect('user');
	}


	public function hapus_user($id){
		$where = array('id_user' => $id);
		$this->Superadmin_model->hapus_data_user($where,'user');
		//$this->helper_log("hapus", "Menghapus data user");
		$this->session->set_flashdata('hapus','<div role="alert" class="alert alert-success alert-dismissible">
                    <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button><span class="icon mdi mdi-check"></span><strong>Bagus!</strong> Anda Berhasil Menghapus Data User</div>');
		redirect('user');
	}

	//END KELOLA USER CRUD
	/*============================================================================================================*/

	
}

