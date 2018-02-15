<?php
// Copyright (C) 2003 Chanh Ong
// All rights reserved.
// This source file is part of the COMBO - Comments on Articles
// custom Component By Chanh Ong - http://ongetc.com
// The "GNU General Public License" (GPL) is available at
// http://www.gnu.org/copyleft/gpl.html.
//
// MOS Intruder Alerts
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
class menuCombo {
	function CONFIG_MENU() {
		mosMenuBar::startTable();
		mosMenuBar::spacer();
		mosMenuBar::saveedit();
		mosMenuBar::cancel();
		mosMenuBar::spacer();
		mosMenuBar::endTable();
	}

	function BACKONLY_MENU() {
	mosMenuBar::startTable();
	mosMenuBar::back();
	mosMenuBar::endTable();
	}

		function DEFAULT_MENU() {
		mosMenuBar::startTable();
		mosMenuBar::publish();
		mosMenuBar::unpublish();
		mosMenuBar::deleteList();
		mosMenuBar::spacer();
		mosMenuBar::endTable();
	}
}?>