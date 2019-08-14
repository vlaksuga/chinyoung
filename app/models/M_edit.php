<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_edit extends CI_Model{

	

	public function l($kind)
	{
		$sql="select c.*,t.effect,t.newflag,t.kerlite from (select collectionid,kerlite,GROUP_CONCAT(DISTINCT effect ORDER BY collectionid SEPARATOR ',') effect,sum(case when new=1 then 1 else 0 end) newflag  from tile where collectionid in (select collectionid from editorial  where kind = ?) group by collectionid) t,collection c where t.collectionid = c.collectionid  order by (case when kerlite =1 then 2 else 0 end + case when newflag>0 then 3 else 0 end + c.sortbonus) desc,collectionid desc ";
		$rs = $this->db->query($sql, array($kind));
        $rsa = $rs->result_array();
		$rs->free_result();

		return $rsa;
	}



	}
