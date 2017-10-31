<?php 

class Video_model extends CI_model{
	var $tabel = 'video';

	function __construct() {
        parent::__construct();
    }
     
    //fungsi untuk menampilkan semua data dari tabel database
    function get_all() {
        $this->db->from($this->tabel);
       // $this->db->join('kategori','video.kategori = kategori.id_kategori');
        $query = $this->db->get();
 
        //cek apakah ada data
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

	 //fungsi insert ke database
    function get_insert($data){
       $this->db->insert($this->tabel, $data);
       return TRUE;
    }

    //fungsi update ke database
     function get_update($data,$where){
       $this->db->where($where);
       $this->db->update($this->tabel, $data);
       return TRUE;
    }
 
  //fungsi delete ke database
  function get_delete($where){
       $this->db->where($where);
       $this->db->delete($this->tabel);
       return TRUE;
    }

    function hapus_data_produk($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

    //fungsi untuk menampilkan data per satuan dari tabel database
    function get_byimage($where) {
        $this->db->from($this->tabel);
        $this->db->where($where);
        $query = $this->db->get();
 
        //cek apakah ada data
        if ($query->num_rows() == 1) {
            return $query->row();
        }
}

function deldata($tabel,$where){
		return $this->db->delete($tabel,$where);
	}


  //========================================= KATEGORI METHOD ===========================================================
  public function get_list(){
    $this->db->from('kategori');
    $query=$this->db->get();
    return $query->result();
  }

  public function input_data($data,$table){
    $this->db->insert($table,$data);
  }

  function edit_data($where,$table){   
    return $this->db->get_where($table,$where);
  }

  function update_data($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  } 

  function hapus_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }

  public function get_allvideo() {
      $this->db->select('video.*,kategori.id_kategori,kategori.nama');
      $this->db->from('video');
      $this->db->join('kategori','kategori.id_kategori = video.kategori');
      $this->db->where('video.status = "Publish"');
      $sql = $this->db->get()->result();
      return $sql;
    }


  //========================================= KATEGORI METHOD ===========================================================




 //========================================= FRONT METHOD ===============================================================
  public function allvideo() {
      $this->db->select('*');
      $this->db->from('video');
      $this->db->where('video.status = "Publish"');
      $sql = $this->db->get()->result();
      return $sql;
    }

     public function getkategori() {
      $this->db->select('*');
      $this->db->from('kategori');
      $this->db->where('status = "Publish"');
      $sql = $this->db->get()->result();
      return $sql;
    }

}