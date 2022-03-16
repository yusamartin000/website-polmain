<?php 
 
class M_gambar extends CI_Model{
	function gambar_prestasi(){
		return $this->db->query("SELECT * FROM `prestasi` ORDER BY id DESC LIMIT 20");
	}
	function gambar_bem(){
		return $this->db->query("SELECT * FROM `bem` ORDER BY id");
	}
}