<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends vlsg_Controller {
	public function __construct()
     {
         parent::__construct();
		 $this->load->model('m_test', 'm_test', TRUE);

     }
	

	public function index()
	{
		$data["a"]="This is";
		$data["b"]="vslg company";

		//$ttt = $this->m_test->t();
		$data["c"]=$ttt;

	
		$this->appendView("sections","p_main",$data);
		$this->_setHeaderAndFooter();
		//$this->setMeta(array("OG_TITLE"=>"TITLE","OG_URL"=>"URL","OG_DESC"=>"DESC","OG_IMG"=>"img"));
		$this->printLayout("l_main",false);
	}


	public function l()
	{
		$listingcountinpage = 9;
		$p = $this->input->get("p",true);

		$menutitlemap["kerlite"] = "KERLITE / BIG SLAB";
		$menutitlemap["marble"] = "MARBLE";
		$menutitlemap["stone"] = "STONE";
		$menutitlemap["concrete"] = "CONCRETE";
		$menutitlemap["terracotta"] = "TERRACOTTA";
		$menutitlemap["wood"] = "WOOD";
		$menutitlemap["brick"] = "BRICK / DÉCOR";
		$menutitlemap["colour"] = "COLOUR";
		$menutitlemap["outdoor"] = "OUTDOOR";


		$data["productname"] = $menutitlemap[$p];

		switch($p){
			case "kerlite":
				$page = $this->procpage($listingcountinpage, $this->m_test->lcnt(),"page",10000);
				$data["list"] = $this->m_test->l($page["start"],$listingcountinpage);
			break;
			case "marble":
			break;
			case "stone":
			break;
			case "concrete":
			break;
			case "terracotta":
			break;
			case "wood":
			break;
			case "brick":
			break;
			case "colour":
			break;
			case "outdoor":
			break;

		}

		
		

		$data["pageinfo"] = $page;

		$this->appendView("sections","p_products",$data);
		$this->_setHeaderAndFooter();
		//$this->setMeta(array("OG_TITLE"=>"TITLE","OG_URL"=>"URL","OG_DESC"=>"DESC","OG_IMG"=>"img"));

		


		$this->printLayout("l_main",false);
	}

	public function product()
	{
		$data["collection"] = $this->m_test->g($this->input->get("cid",true));
		$data["list"] = $this->m_test->tilelist($this->input->get("cid",true));
		$data["collectionimglist"] = $this->m_test->collectionimglist($this->input->get("cid",true));

		$this->appendView("sections","p_product_detail",$data);
		$this->_setHeaderAndFooter();
		//$this->setMeta(array("OG_TITLE"=>"TITLE","OG_URL"=>"URL","OG_DESC"=>"DESC","OG_IMG"=>"img"));
		$this->printLayout("l_main",false);
	}

	public function projects()
	{
	
	

		$data["projectname"] = $menutitlemap[$p];
		$data["projecttotalcount"] = "?";


		$data["list"] = [1,2,3,4,5,6,7,1,1,1,1];

		$this->appendView("sections","p_projects",$data);
		$this->_setHeaderAndFooter();
		//$this->setMeta(array("OG_TITLE"=>"TITLE","OG_URL"=>"URL","OG_DESC"=>"DESC","OG_IMG"=>"img"));
		$this->printLayout("l_main",false);
	}
	public function project()
	{
	
		$this->appendView("sections","p_project_detail");
		$this->_setHeaderAndFooter();
		//$this->setMeta(array("OG_TITLE"=>"TITLE","OG_URL"=>"URL","OG_DESC"=>"DESC","OG_IMG"=>"img"));
		$this->printLayout("l_main",false);
	}

	public function search()
	{
		$listingcountinpage = 9;
		$page = $this->procpage($listingcountinpage, $this->m_test->lcnt(),"page",10000);
		$data["list"] = $this->m_test->search($page["start"],$listingcountinpage);
		$data["page"] = $page;

		$this->appendView("sections","p_search",$data);
		$this->_setHeaderAndFooter();
		//$this->setMeta(array("OG_TITLE"=>"TITLE","OG_URL"=>"URL","OG_DESC"=>"DESC","OG_IMG"=>"img"));
		$this->printLayout("l_main",false);
	}

}
