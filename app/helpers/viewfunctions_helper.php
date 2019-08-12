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

function getSizeStr($item){
	echo htmlspecialchars($item["sizes"]);
}

function getThicknessStr($item){
//	$item["sizes"];
	echo htmlspecialchars($str);
}
function getTechStr($item){
	if($item["kerlite"]=="1") $ret .="<span>KERLITE</span>";
	if($item["bigslab"]=="1") $ret .="<span>BIGSLAB</span>";
	if($item["antislip"]=="1") $ret .="<span>ANTISLIP</span>";
	if($item["antibacterial"]=="1") $ret .="<span>ANTI-BACTERIAL</span>";

	echo ($ret);
}

function getProjectTypeStr($item){
	if($item["residential"]=="1") $ret .="<span>RESIDENTIAL</span><span>,</span>";
	if($item["commercial"]=="1") $ret .="<span>COMMERCIAL</span><span>,</span>";
	if($item["public"]=="1") $ret .="<span>PUBLIC</span><span>,</span>";
	if($item["furnishing"]=="1") $ret .="<span>FURNISHING</span><span>,</span>";
	if($item["etc"]=="1") $ret .="<span>ANTI-ETC</span><span>,</span>";
	if(strlen($ret)>13){ $ret = substr($ret,0,strlen($ret)-14);}
	echo ($ret);
}

function getProjectSpaceStr($item){
	if($item["indoor"]=="1") $ret .="<span>INDOOR</span><span>,</span>";
	if($item["outdoor"]=="1") $ret .="<span>OUTDOOR</span><span>,</span>";
	
	if(strlen($ret)>13){ $ret = substr($ret,0,strlen($ret)-14);}
	echo ($ret);
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