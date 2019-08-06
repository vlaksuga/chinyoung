<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_test extends CI_Model{

	

	public function g($collectionid)
	{
		$sql="select * from collection where collectionid=?";
		$rs = $this->db->query($sql, array($collectionid));
        $rsa = $rs->result_array();
		$rs->free_result();

		return $rsa[0];
	}

	public function l($start,$cnt)
	{
		$sql="select * from collection limit ?,?";
		$rs = $this->db->query($sql, array($start,$cnt));
        $rsa = $rs->result_array();
		$rs->free_result();

		return $rsa;
	}

	public function lcnt()
	{
		$sql="select count(*) cnt from collection";
		$rs = $this->db->query($sql, array(1));
        $rsa = $rs->result_array();
		$rs->free_result();

		return $rsa[0]["cnt"];
	}


	public function collectionimglist($collectionid)
	{
		$sql="select * from collectionimg where collectionid = ? ";
		$rs = $this->db->query($sql, array($collectionid));
        $rsa = $rs->result_array();
		$rs->free_result();

		return $rsa;
	}

	public function tilelist($collectionid)
	{
		$sql="select * from tile where collectionid = ? ";
		$rs = $this->db->query($sql, array($collectionid));
        $rsa = $rs->result_array();
		$rs->free_result();

		return $rsa;
	}

	public function search()
	{
		$sql="select t.productname,t.effect,indoor,outdoor,material,finish,finish2,sizes,cename,thumb,searchhint,kerlite,antislip,antibacterial,bigslab from tile t,collection c where t.collectionid = c.collectionid;
		";
		$rs = $this->db->query($sql, array(1));
        $rsa = $rs->result_array();
		$rs->free_result();

		return $rsa;
	}


	}
