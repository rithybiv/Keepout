<?php
// Copyright (C) 2003 Chanh Ong
// All rights reserved.
// This source file is part of the COMBO - Comments on Articles
// custom Component By Chanh Ong - http://ongetc.com
//
// The "GNU General Public License" (GPL) is available at
// http://www.gnu.org/copyleft/gpl.html.
//
// MOS Intruder Alerts
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

require_once( $mainframe->getPath( 'toolbar_html' ) );
if ($act) {
		switch ( $act ) {

			case "edit":
				menuCombo::EDIT_MENU();
				break;

			case "cancel";
				 menuCombo::DEFAULT_MENU();
				break;

			case "config";
				 menuCombo::CONFIG_MENU();
				 break;

			case "instructions";

			 break;

			default:
				 menuCombo::DEFAULT_MENU();
				break;
		}
	}


if ($task) {
		switch ( $task ) {
			case "showinstructions";
			 menuCombo::BACKONLY_MENU();
			 break;
				case "showconfig":
				menuCombo::CONFIG_MENU();
				break;
		}
	}


if (!$task && !$act) {
		 menuCombo::DEFAULT_MENU();
		 }

?>