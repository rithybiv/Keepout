<?php

	/**
	* @version $Id: joomlastats.php 59 2006-03-12 21:48:37Z caffeinecoder $
	* @package JoomlaStats
	* @copyright Copyright (C) 2004-2006 PJH Diender. All rights reserved.
	* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
	*/
	
	//ensure this file is being included by a parent file
	defined('_VALID_MOS') or die ('Direct Access to this location is not allowed.');

	require_once( $mainframe->getPath( 'front_html', 'com_joomlastats' ) );
		
	switch ( strtolower( $task ) )
	{
		default:
			noyetimplemented();
			break;
	}
	
	function noyetimplemented()
	{
		global $mainframe;
		
		// Dynamic Page Title
		$mainframe->SetPageTitle( "not yet implemented" );
		
		HTML_joomlastats::defaultmessage();
	}
	
?>