<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if(!function_exists('drawView')){
	function drawView($view, $vars=array(),$type="mini", $output = true){
		$CI = &get_instance();
		$vars["type"]=$type;
		return $CI->load->view($view, $vars, $output);
	}


}

function getTitle($item){
	$prefix = "";
	if($item["viewtype"]=="photo"){
		$prefix = "[PHOTO]";
	}
	
	return $prefix.htmlspecialchars($item["title"]);
}

function p($str){
	echo htmlspecialchars($str);
}

function cleanstr($str){
	echo remove_invisible_characters($str);
}

if(!function_exists('getNewsUrl')){
	function getNewsUrl($item){
		if($item["viewtype"]=="notice"){
			if($_GET["c"]=="Mobile"){
				return "./?c=m&m=noticeview&&nid==".$item["articleid"];
			}
			return "./?m=noticeview&nid==".$item["articleid"];
		}


		if($_GET["c"]=="Mobile"){
			return "./?c=m&m=v&idx=".$item["articleid"];
		}
		return "./?m=v&idx=".$item["articleid"];
	}
}

if(!function_exists('getImgUrl')){
	function getImgUrl($item){
		if($_GET["c"]=="Mobile"){
			if($item["img"]=="defaultimg"){
				return "img/default-img.jpg";
			}
			return $item["img"];
		}
		if($item["img"]=="defaultimg"){
			return "img/default-img.jpg";
		}
		return $item["img"];
	}
}


	date_default_timezone_set('Japan/Tokyo');
	function formatDate($datestr){
		return date("Y年m月d日", strtotime($datestr)+32400);

	}

	function formatDateTime($datestr){
		return date("Y年m月d日 H:i:s", strtotime($datestr)+32400);

	}




?>