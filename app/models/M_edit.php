<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_edit extends CI_Model{

	

	public function l($kind)
	{
		$sql="select c.*,t.effect,t.newflag from (select collectionid,GROUP_CONCAT(DISTINCT effect ORDER BY collectionid SEPARATOR ',') effect,sum(case when new=1 then 1 else 0 end) newflag  from tile where collectionid in (select collectionid from editorial  where kind = ?) group by collectionid) t,collection c where t.collectionid = c.collectionid";
		$rs = $this->db->query($sql, array($kind));
        $rsa = $rs->result_array();
		$rs->free_result();

		return $rsa;
	}



	}
