<?php 
 
class M_pdf extends CI_Model{
	// function download_pdf($keys){
	// 	return $this->db->get_where('pdf',array('pdf.keys'=>'$keys'));
	// }
	public function download_pdf($keys){
      return $query = $this->db->get_where('pdf',array('keys' => $keys))->row();
   }
}