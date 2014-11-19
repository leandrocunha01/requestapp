<?php

/**
 * @module		com_requestapp
 * @author-name Leandro Cunha
 * @copyright	Copyright (C) 2012 Leandro Cunha leandrocunha01@gmail.com
 * @license		GNU/GPL, see http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import joomla controller library
jimport('joomla.application.component.controller');
 
// Get an instance of the controller prefixed by Requestapp
$controller = JControllerLegacy::getInstance('Requestapp');
 
// Perform the Request task
$controller->execute(JRequest::getCmd('task'));
// Redirect if set by the controller
$controller->redirect();
