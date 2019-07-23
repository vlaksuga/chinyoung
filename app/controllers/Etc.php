<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Etc extends vlsg_Controller {
	public function __construct()
     {
         parent::__construct();
		// $this->load->model('m_test', 'm_test', TRUE);

     }


	public function about()
	{
	
		$this->appendView("sections","p_about");
		$this->_setHeaderAndFooter();
		//$this->setMeta(array("OG_TITLE"=>"TITLE","OG_URL"=>"URL","OG_DESC"=>"DESC","OG_IMG"=>"img"));
		$this->printLayout("l_main",false);
	}

	public function contact()
	{
	
		$this->appendView("sections","p_contact");
		$this->_setHeaderAndFooter();
		//$this->setMeta(array("OG_TITLE"=>"TITLE","OG_URL"=>"URL","OG_DESC"=>"DESC","OG_IMG"=>"img"));
		$this->printLayout("l_main",false);
	}




}
