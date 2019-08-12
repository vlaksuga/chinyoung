<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends vlsg_Controller {
	public function __construct()
     {
         parent::__construct();
		 $this->load->model('m_test', 'm_test', TRUE);
		 $this->load->model('m_edit', 'm_edit', TRUE);

     }
	

	public function index()
	{
		$data["main8"]=$this->m_edit->l("main8");
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
		$menutitlemap["cotoo"] = "COTTO D'ESTE";


		$data["productname"] = $menutitlemap[$p];

		switch($p){
			case "COLOUR":
				$p="COLOURS";
			case "MARBLE":
			case "STONE":
			case "CONCRETE":
			case "TERRACOTTA":
			case "WOOD":
			
			
				$page = $this->procpage($listingcountinpage, $this->m_test->lbyeffectcnt($p),"page",10000);
				$data["list"] = $this->m_test->lbyeffect($p,$page["start"],$listingcountinpage);

			break;
			case "brick":

				$page = $this->procpage($listingcountinpage, $this->m_test->lbyeffectwithincnt(array("BRICK","DÉCOR")),"page",10000);
				$data["list"] = $this->m_test->lbyeffectwithin(array("BRICK","DÉCOR"),$page["start"],$listingcountinpage);
			break;
			case "kerlite":
				$page = $this->procpage($listingcountinpage, $this->m_test->lkelitebigslabcnt(),"page",10000);
				$data["list"] = $this->m_test->lkelitebigslab($page["start"],$listingcountinpage);
			break;
			case "outdoor":
				$page = $this->procpage($listingcountinpage, $this->m_test->loutdoorcnt(),"page",10000);
				$data["list"] = $this->m_test->loutdoor($page["start"],$listingcountinpage);
			break;

		}
	//	print_r($data);
		
		

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
		$data["tilelist"] = $this->m_test->tilelist($this->input->get("cid",true));

		$this->appendView("sections","p_product_detail",$data);
		$this->_setHeaderAndFooter();
		//$this->setMeta(array("OG_TITLE"=>"TITLE","OG_URL"=>"URL","OG_DESC"=>"DESC","OG_IMG"=>"img"));
		$this->printLayout("l_main",false);
	}

	public function projects()
	{
		$listingcountinpage=9;
		$cate = $this->input->get("cate",true);

		if($cate==""){
			$cate="indoor";
		}
		
		$page = $this->procpage($listingcountinpage, $this->m_test->projectlistcnt($cate),"page",10000);
		$data["list"] = $this->m_test->projectlist($cate,$page["start"],$listingcountinpage);
		$data["pageinfo"] = $page;
		$data["cate"] = $cate;

		$this->appendView("sections","p_projects",$data);
		$this->_setHeaderAndFooter();
		//$this->setMeta(array("OG_TITLE"=>"TITLE","OG_URL"=>"URL","OG_DESC"=>"DESC","OG_IMG"=>"img"));
		$this->printLayout("l_main",false);
	}
	public function project()
	{
		$data["project"] = $this->m_test->project($this->input->get("pid",true));
		$data["projectimglist"] = $this->m_test->projectimglist($this->input->get("pid",true));

		$this->appendView("sections","p_project_detail",$data);
		$this->_setHeaderAndFooter();
		//$this->setMeta(array("OG_TITLE"=>"TITLE","OG_URL"=>"URL","OG_DESC"=>"DESC","OG_IMG"=>"img"));
		$this->printLayout("l_main",false);
	}

	public function search()
	{
		$listingcountinpage = 9;
		$space=$this->input->get("space",true);
		$design=$this->input->get("design",true);
		$finish=$this->input->get("finish",true);
		$technology=$this->input->get("technology",true);
		$hint=$this->input->get("hint",true);

		$data["space"] = $space;
		$data["design"] = $design;
		$data["finish"] = $finish;
		$data["technology"] = $technology;
		$data["hint"] = $hint;


		$page = $this->procpage($listingcountinpage, $this->m_test->lcnt(),"page",10000);
		$data["list"] = $this->m_test->search($space,$design,$finish,$technology,$hint,$page["start"],$listingcountinpage);
		$data["page"] = $page;

		$this->appendView("sections","p_search",$data);
		$this->_setHeaderAndFooter();
		//$this->setMeta(array("OG_TITLE"=>"TITLE","OG_URL"=>"URL","OG_DESC"=>"DESC","OG_IMG"=>"img"));
		$this->printLayout("l_main",false);
	}

}
