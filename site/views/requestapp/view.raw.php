<?php

/**
 * @module		com_requestapp
 * @author-name Leandro Cunha
 * @copyright	Copyright (C) 2012 Leandro Cunha leandrocunha01@gmail.com
 * @license		GNU/GPL, see http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt
 */


defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.view');

class RequestappViewRequestapp extends JViewLegacy
{
	function display($tpl = null) 
	{
		if (count($errors = $this->get('Errors'))) 
		{
			JError::raiseError(500, implode('<br />', $errors));
			return false;
		}
		parent::display($tpl);
	}
}
