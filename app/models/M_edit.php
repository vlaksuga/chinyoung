<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_edit extends CI_Model{

	

	public function l($kind)
	{
		$sql="select c.* from editorial e,collection c where e.collectionid=c.collectionid and kind=?";
		$rs = $this->db->query($sql, array($kind));
        $rsa = $rs->result_array();
		$rs->free_result();

		return $rsa;
	}



	}
