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


	public function lbyeffect($effect,$start,$cnt)
	{
		$sql="select c.* from collection c,(select collectionid from tile where effect = ? group by collectionid) t  where c.collectionid = t.collectionid limit ?,?";
		$rs = $this->db->query($sql, array($effect,$start,$cnt));
        $rsa = $rs->result_array();
		$rs->free_result();

		return $rsa;
	}

	public function lbyeffectcnt($effect)
	{
		$sql="select count(*) cnt from collection c,(select collectionid from tile where effect = ? group by collectionid) t  where c.collectionid = t.collectionid";
		$rs = $this->db->query($sql, array($effect));
        $rsa = $rs->result_array();
		$rs->free_result();

		return $rsa[0]["cnt"];
	}

	public function lkelitebigslab($start,$cnt)
	{
		$sql="select c.* from collection c,(select collectionid from tile where ( kerlite = 1 or bigslab = 1) group by collectionid) t where c.collectionid = t.collectionid   limit ?,?";
		$rs = $this->db->query($sql, array($start,$cnt));
        $rsa = $rs->result_array();
		$rs->free_result();

		return $rsa;
	}

	public function lkelitebigslabcnt()
	{
		$sql="select count(*) cnt from collection c,(select collectionid from tile where ( kerlite = 1 or bigslab = 1) group by collectionid) t  where c.collectionid = t.collectionid";
		$rs = $this->db->query($sql);
        $rsa = $rs->result_array();
		$rs->free_result();

		return $rsa[0]["cnt"];
	}

	public function loutdoor($start,$cnt)
	{
		$sql="select c.* from collection c,(select collectionid from tile where tile.outdoor = 1 group by collectionid) t where c.collectionid = t.collectionid  limit ?,?";
		$rs = $this->db->query($sql, array($start,$cnt));
        $rsa = $rs->result_array();
		$rs->free_result();

		return $rsa;
	}

	public function loutdoorcnt()
	{
		$sql="select count(*) cnt from collection c,(select collectionid from tile  where outdoor = 1 group by collectionid) t where c.collectionid = t.collectionid ";
		$rs = $this->db->query($sql);
        $rsa = $rs->result_array();
		$rs->free_result();

		return $rsa[0]["cnt"];
	}

	
	
	public function lbyeffectwithin($effect,$start,$cnt)
	{
		$iiii = array();
		for($i=0;$i<count($effect);$i++){
			$iiii[] = "?";		
		}
		$in = implode(', ', $iiii);
		$effect[] = $start;
		$effect[] = $cnt;
		$sql="select c.* from collection c,(select collectionid from tile where  effect in ($in) group by collectionid) t  where c.collectionid = t.collectionid  limit ?,?";
		$rs = $this->db->query($sql, $effect);
        $rsa = $rs->result_array();
		$rs->free_result();

		return $rsa;
	}

	public function lbyeffectwithincnt($effect)
	{
		$iiii = array();
		for($i=0;$i<count($effect);$i++){
			$iiii[] = "?";		
		}
		$in = implode(', ', $iiii);
		$sql="select count(*) cnt from collection c,(select collectionid from tile where  effect in ($in) group by collectionid) t  where c.collectionid = t.collectionid  ";
		$rs = $this->db->query($sql, $effect);
        $rsa = $rs->result_array();
		$rs->free_result();

		return $rsa[0]["cnt"];
	}



	public function lbybrand($brand,$start,$cnt)
	{
		$sql="select c.* from collection c where c.brand=?  limit ?,?";
		$rs = $this->db->query($sql, array($brand,$start,$cnt));
        $rsa = $rs->result_array();
		$rs->free_result();

		return $rsa;
	}

	public function lbybrandcnt($brand)
	{
		$sql="select count(*) cnt from collection c where c.brand=?";
		$rs = $this->db->query($sql,array($brand));
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


	public function project($projectid)
	{
		$sql="select *,(select productname from tile where tileid = project.tileid) productname,(select collectionid from tile where tileid = project.tileid) collectionid from project where projectid = ?";
		$rs = $this->db->query($sql, array($projectid));
        $rsa = $rs->result_array();
		$rs->free_result();

		return $rsa[0];
	}

	public function projectimglist($projectid)
	{
		$sql="select * from projectimg where projectid = ? ";
		$rs = $this->db->query($sql, array($projectid));
        $rsa = $rs->result_array();
		$rs->free_result();

		return $rsa;
	}

	public function search($space,$design,$finish,$technology,$hint)
	{
		$r = array();
		if($space == "indoor") $where .= " and indoor = 1 ";
		if($space == "outdoor") $where .= " and outdoor = 1 ";
		if($design!=null) {$where .= " and effect = ? "; $r[]=$design;}
		if($finish!=null) {$where .= " and (finish = ? or finish2 = ?) "; $r[]=$finish;$r[]=$finish;}
		if($technology == "kerlite") $where .= " and kerlite = 1 ";
		if($technology == "antislip") $where .= " and antislip = 1 ";
		if($technology == "antibacterial") $where .= " and antibacterial = 1 ";
		if($technology == "bigslab") $where .= " and bigslab = 1 ";
		if($technology == "porcelain") $where .= " and material = 'PORCELAIN' ";
		if($technology == "ceramic") $where .= " and material = 'CERAMIC' ";
		
		if($hint!=null) {$collectionwhere .= " and searchhint like concat(?,'%') "; $r[]=$hint;}
		$sql="select * from collection c,(select collectionid from tile where 1=1 ".$where." group by collectionid) t where c.collectionid = t.collectionid ".$collectionwhere;
		$rs = $this->db->query($sql, $r);
        $rsa = $rs->result_array();
		$rs->free_result();

		return $rsa;
	}
	
}
