<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_test extends CI_Model{

	

	public function g($collectionid)
	{
		$sql="select *,(select GROUP_CONCAT(DISTINCT effect ORDER BY collectionid SEPARATOR ',')  from tile where collectionid = collection.collectionid) effect from collection where collectionid=?";
		$rs = $this->db->query($sql, array($collectionid));
        $rsa = $rs->result_array();
		$rs->free_result();

		return $rsa[0];
	}

	public function l($start,$cnt)
	{
		$sql="select *,(select GROUP_CONCAT(DISTINCT effect ORDER BY collectionid SEPARATOR ',')  from tile where collectionid = collection.collectionid) effect from collection limit ?,?";
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

	public function projectlist($cate,$start,$cnt)
	{
		$ooo="";
		switch($cate){
			case "indoor":
				$ooo = "and p.indoor = 1";
			break;
			case "outdoor":
				$ooo = "and p.outdoor = 1";
			break;
			case "redidential":
				$ooo = "and p.redidential = 1";
			break;
			case "commercial":
				$ooo = "and p.commercial = 1";
			break;
			case "public":
				$ooo = "and p.public = 1";
			break;
			case "furnishing":
				$ooo = "and p.furnishing = 1";
			break;
			case "etc":
				$ooo = "and p.etc = 1";
			break;
			
		}
		$sql="select * from project p,tile t where p.tileid = t.tileid $ooo limit ?,?";
		$rs = $this->db->query($sql, array($start,$cnt));
        $rsa = $rs->result_array();
		$rs->free_result();

		return $rsa;
	}

	public function projectlistcnt($cate)
	{
		$ooo="";
		switch($cate){
			case "indoor":
				$ooo = "and p.indoor = 1";
			break;
			case "outdoor":
				$ooo = "and p.outdoor = 1";
			break;
			case "residential":
				$ooo = "and p.residential = 1";
			break;
			case "commercial":
				$ooo = "and p.commercial = 1";
			break;
			case "public":
				$ooo = "and p.public = 1";
			break;
			case "furnishing":
				$ooo = "and p.furnishing = 1";
			break;
			case "etc":
				$ooo = "and p.etc = 1";
			break;
			
		}
		$sql="select count(*) cnt from project p,tile t where p.tileid = t.tileid $ooo";
		$rs = $this->db->query($sql);
        $rsa = $rs->result_array();
		$rs->free_result();

		return $rsa[0]["cnt"];
	}

}
