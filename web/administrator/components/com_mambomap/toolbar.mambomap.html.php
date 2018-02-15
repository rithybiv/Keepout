<?php

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

class TOOLBAR_mambomap {
	/**
	* Draws the menu for Mambo Map
	*/
	function _DEFAULT() {
		mosMenuBar::startTable();
		mosMenuBar::save();
		mosMenuBar::spacer();
		mosMenuBar::cancel( );
		mosMenuBar::endTable();
	}

}
?>