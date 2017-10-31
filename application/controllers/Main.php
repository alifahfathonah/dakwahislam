<?php 
defined('BASEPATH') or exit('No script direct allowed');

class Main extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('text');
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('Video_model');
	}

	public function index(){
		//$data['sql'] = $this->Video_model->allvideo();
		$semua_video = $this->db->query('select * from video')->result_array();
		$data = array(
			'semua_video' => $semua_video,
			'title'		  => 'Dakwah Islam'
		); 
		$this->load->view('header',$data);
		$this->load->view('index');
		$this->load->view('footer');

	}

	
}

?>