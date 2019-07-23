<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends vlsg_Controller {
	public function __construct()
     {
         parent::__construct();
		// $this->load->model('m_test', 'm_test', TRUE);

     }
	function _setHeaderAndFooter(){
		$this->appendView("header","tile/header");
		$this->appendView("footer","tile/footer");
	}


	public function index()
	{
		$data["a"]="This is";
		$data["b"]="vslg company";

		//$ttt = $this->m_test->t();
		$data["c"]=$ttt;

		$this->appendString("content","<div>엄마</div>");
		//$this->appendView("content","c_main",$data);
		$this->_setHeaderAndFooter();
		//$this->setMeta(array("OG_TITLE"=>"TITLE","OG_URL"=>"URL","OG_DESC"=>"DESC","OG_IMG"=>"img"));
		$this->printLayout("l_main",false);
	}




}
