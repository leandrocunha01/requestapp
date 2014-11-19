<?php

/**
 * @module		com_requestapp
 * @author-name Leandro Cunha
 * @copyright	Copyright (C) 2012 Leandro Cunha leandrocunha01@gmail.com
 * @license		GNU/GPL, see http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt
 */


// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla controller library
jimport('joomla.application.component.controller');
 

class RequestappController extends JControllerLegacy
{
	// task::save
	public function save(){
		//JSession::checkToken() or jexit( JText::_( 'JINVALID_TOKEN' ) ); desabilita caso for usar fora do joomla.
		$app		=	JFactory::getApplication();
		$model		=	$this->getModel('requestapp');
		$preconfig	=	$app->input->post->get( 'config', array(), 'array' );
		$task		=	$this->getTask();
		
		$config		=	$model->store( $preconfig );
		$id			=	$config['pk'];
		$itemId		=	$preconfig['itemId'];
		$view = $this->getView('requestapp','raw');
		//print_r( get_class_methods($app)); 
		if($id==0){
			print_r($app->getMessageQueue());
		}else{
			$view->pk = $id;
		}
		$view->display();
		
	}
}
