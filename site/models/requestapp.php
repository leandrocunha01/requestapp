<?php

/**
 * @module		com_requestapp
 * @author-name Leandro Cunha
 * @copyright	Copyright (C) 2012 Leandro Cunha leandrocunha01@gmail.com
 * @license		GNU/GPL, see http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt
 */


defined('_JEXEC') or die('Restricted access');
 
jimport('joomla.application.component.modelitem');
 
class RequestappModelRequestapp extends JModelItem
{	// store
	function store( $preconfig )
	{
		$client	=	'site';		// site or site_edit
		
		jimport( 'cck.base.form.form' );
		include_once JPATH_SITE.'/components/com_requestapp/includes/store_inc.php';
		//include dirname(__FILE__).'/includes/store_inc.php';
		
		return $config;
	}
}
