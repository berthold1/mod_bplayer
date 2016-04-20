<?php

/*
 * @version		$Id: mod_bplayer.php 1.0 2012-03-13 $
 * @package		Joomla
 * @copyright   Copyright (C) 2016 Luc
 * @license     GNU/GPL http://www.gnu.org/licenses/gpl-2.0.html
*/
 
// no direct access
defined('_JEXEC') or die('Restricted access');
 
// Include the syndicate functions only once
require_once(dirname(__FILE__).DS.'helper.php');
 
$items = BPlayerHelper::getItems($params);
require (JModuleHelper::getLayoutPath('mod_bplayer'));

?>