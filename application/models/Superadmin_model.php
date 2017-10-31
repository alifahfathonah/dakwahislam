<?php 
defined('BASEPATH') or exit('no direct script allowed');

class Superadmin_model extends CI_model{


	public function get_listuser(){
		$this->db->from('user');
		$query=$this->db->get();
		return $query->result();
	}

	


	public function input_data_user($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_data_user($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data_user($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	function hapus_data_user($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function insertdata($tabel, $data){
		return $this->db->insert($tabel,$data);
	}

	function updatedata($tabel,$data,$where){
		return $this->db->update($tabel,$data,$where);
	}

	function get_insert($data,$table){
       return $this->db->insert($data,$table);
    }

  


}

?>