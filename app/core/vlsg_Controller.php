<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vlsg_Controller extends CI_Controller {
	var $layout = array();
	public function __construct()
	{
			parent::__construct();
			switch (ENVIRONMENT)
			{
				case 'development':
					$this->output->enable_profiler(TRUE);
				break;

				case 'testing':
					$this->output->enable_profiler(TRUE);
				break;

			}

	}

	 function appendString($id, $text) {
        if (array_key_exists($id, $this->layout)) {
            $this->layout[$id] .=$text;
        } else {
            $this->layout = array_merge($this->layout, array($id => $text));
        }
    }

    function appendView($id, $viewname, $model="", $modelname="model") {

        if ($modelname !== FALSE && $model != "") {
            $map = array($modelname => &$model);
        } else {
            $map = &$model;
        }
        $this->appendString($id, $this->load->view($viewname, $map, TRUE));
    }



	function appendAdDiv($loc,$html,$did="",$dclass="",$dstyle="margin-top:5px;text-align:center;"){
		 $this->appendView($loc, "tile/div",array("divid"=>$did,"divclass"=>$dclass,"divstyle"=>$dstyle,"innerhtml"=>$html));
	}


	function _setHeaderAndFooter(){
		
	}
	function setMeta($data){
		define("OG_TITLE",addslashes($data["OG_TITLE"]));
		define("OG_URL",addslashes($data["OG_URL"]));
		define("OG_DESC",addslashes($data["OG_DESC"]));
		define("OG_IMG",addslashes($data["OG_IMG"]));

	}

    function printLayout($layoutname,$hf = true) {
		if($hf){
			$this->_setHeaderAndFooter();
		}
        $this->load->view($layoutname, $this->layout);
    }

    function mappingMV($viewname, $modelObj, $modelMethod, $modelArgs) {
        $model['model'] = call_user_func_array(array($modelObj, $modelMethod), $modelArgs);

        return $this->load->view($viewname, $model, TRUE);
    }

	function procpage($cntperpage, $cnt, $pageString="page", $viewpagecnt = 10) {

        $ret = array();

        $modpage = $cnt % $cntperpage;
        $totalpagecnt = ($cnt - $modpage) / $cntperpage;

        if($modpage>0){
            $totalpagecnt ++;
        }

        $page=1;

        if (isset($_GET[$pageString])) {
            $page = $_GET[$pageString];
        }

        if ($page > $totalpagecnt) {
            $page = $totalpagecnt;
        }

        if ($page < 1) {
            $page = 1;
        }

        $endflag = 0;
        if ($page % $viewpagecnt == 0)
            $endflag = 1;

        $curviewpagestart = ((floor($page / $viewpagecnt) - $endflag) * $viewpagecnt) + 1;

        $curviewpageend = $curviewpagestart + $viewpagecnt;
        if ($curviewpageend > $totalpagecnt) {
            $curviewpageend = $totalpagecnt ;
        }

        $pageurl = $_SERVER["PHP_SELF"] . "?";

        foreach (array_keys($_GET) as $key) {
            if ($key == $pageString)
                continue;
            $pageurl .="&" . $key . "=" . $this->input->get($key, true);
        }

        $ret["pageurl"] = $pageurl;
        $ret["curviewpagestart"] = $curviewpagestart;
        $ret["curviewpageend"] = $curviewpageend;
        $ret["page"] = $page + 0;
        $ret["totalpagecnt"] = $totalpagecnt;
        $ret["itemcnt"] = $cnt;

        return $ret;
    }

}
