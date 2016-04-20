<?php

/*
 * @version		$Id: helper.php 1.0 2012-03-13 $
 * @package		Joomla
 * @copyright   Copyright (C) 2016 Luc
 * @license     GNU/GPL http://www.gnu.org/licenses/gpl-2.0.html
*/
 
// no direct access
defined('_JEXEC') or die('Restricted access');

class BPlayerHelper
{
	function getItems($params)
	{
		$itm                      = array();
		$itm["coverimage"]        = $params->get('coverimage');
		$itm["data"]              = BPlayerHelper::extractMusicData($params->get('musicdata'));
		$itm["width"]             = $params->get('width');
		$itm["height"]            = $params->get('height');
		$itm["counter"]           = $params->get('counter');
		$itm["autostart"]         = $params->get('autostart');
		$itm["autostart"]         = $params->get('autostart');
		$itm["playlistautostart"] = $params->get('playlistautostart');
		$itm["volumelevel"]       = $params->get('volumelevel');
		$itm["nextdock"]          = $params->get('nextdock');
		$itm["prevdock"]          = $params->get('prevdock');
		$itm["progressbar"]       = $params->get('progressbar');
		$itm["timerdock"]         = $params->get('timerdock');
		$itm["volumedock"]        = $params->get('volumedock');
		$itm["bgcolor"]           = $params->get('bgcolor');
		$itm["bordercolor"]       = $params->get('bordercolor');
		$itm["overlaycolor"]      = $params->get('overlaycolor');
		$itm["overlayalpha"]      = $params->get('overlayalpha');
		$itm["iconcolor"]         = $params->get('iconcolor');
		$itm["sliderbgcolor"]     = $params->get('sliderbgcolor');
		$itm["slidercolor"]       = $params->get('slidercolor');
		$itm["playlist"]          = $params->get('playlist');
		$itm["download"]          = $params->get('download');
		$itm["css"]               = $params->get('css');
	
		return $itm;
	}
	
	function extractMusicData($musicdata)
	{
		$arr    = array();		
		$titles = array();
		$items  = array();
		$count  = 0;
		
		if ($musicdata)
		{
			$data  = trim($musicdata);
			$data  = explode("\n", $musicdata);
			$count = count($data);
		}
		
		for ($i = 0; $i < $count; $i++)
		{
			$temparr  = explode(",", $data[$i]);
			$titles[] = trim($temparr[0]);
			$items[]  = trim($temparr[1]);
		}
		
		$arr[] = $titles;
		$arr[] = $items;
		
		return $arr;
	}
}