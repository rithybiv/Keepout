<?php

	/**
	* @version $Id: joomlastats.html.php 138 2006-06-29 22:27:37Z RoBo $
	* @package JoomlaStats
	* @copyright Copyright (C) 2004-2006 PJH Diender. All rights reserved.
	* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
	*/
	
	//ensure this file is being included by a parent file
	defined('_VALID_MOS') or die ('Direct Access to this location is not allowed.');
	
	/**
	* class for writing the HTML
	*/
	class HTML_joomlastats {
		/**
		* default message 
		*/
		function defaultmessage() 
		{
			echo "<BR>Note pour le webmaster:<BR>";
			echo "<BR>Le Composant statistique n'est pas disponible actuellement.<BR><BR>";
			echo "S.V.P. Utilisez un ou plusieurs modules pour afficher les statistiques en frontend.<BR>";	
		}
		
	}
?>