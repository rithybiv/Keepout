<?php
/**
* @version $Id: pageNavigation.php,v 1.1 2005/07/22 01:57:13 eddieajau Exp $
* @package Mambo
* @copyright (C) 2000 - 2005 Miro International Pty Ltd
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Mambo is Free Software
*/

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

/**
* Page navigation support class
* @package Mambo
*/
class mosPageNav {
	/** @var int The record number to start dislpaying from */
	var $limitstart = null;
	/** @var int Number of rows to display per page */
	var $limit = null;
	/** @var int Total number of rows */
	var $total = null;

	function mosPageNav( $total, $limitstart, $limit ) {
		$this->total = intval( $total );
		$this->limitstart = max( intval($limitstart), 0 );
		$this->limit = max( intval($limit), 0 );
	}
	/**
	* Returns the html limit # input box
	* @param string The basic link to include in the href
	* @return string
	*/
	function getLimitBox ( $link ) {
		$limits = array();
		for ($i=5; $i <= 30; $i+=5) {
			$limits[] = mosHTML::makeOption( "$i" );
		}
		$limits[] = mosHTML::makeOption( "50" );

		// build the html select list
		$link = sefRelToAbs($link.'&amp;limit=\' + this.options[selectedIndex].value + \'&amp;limitstart='.$this->limitstart);
		return mosHTML::selectList( $limits, 'limit',
		'class="inputbox" size="1" onchange="document.location.href=\''.$link.'\';"',
		'value', 'text', $this->limit );
	}
	/**
	* Writes the html limit # input box
	* @param string The basic link to include in the href
	*/
	function writeLimitBox ( $link ) {
		echo mosPageNav::getLimitBox( $link );
	}
	/**
	* Writes the html for the pages counter, eg, Results 1-10 of x
	*/
	function writePagesCounter() {
		$txt = '';
		$from_result = $this->limitstart+1;
		if ($this->limitstart + $this->limit < $this->total) {
			$to_result = $this->limitstart + $this->limit;
		} else {
			$to_result = $this->total;
		}
		if ($this->total > 0) {
			$txt .= _PN_RESULTS." $from_result - $to_result "._PN_OF." $this->total";
		}
		return $txt;
	}

	/**
	* Writes the html for the leafs counter, eg, Page 1 of x
	*/
	function writeLeafsCounter() {
		$txt = '';
		$page = $this->limitstart+1;
		if ($this->total > 0) {
			$txt .= _PN_PAGE." $page "._PN_OF." $this->total";
		}
		return $txt;
	}

	/**
	* Writes the html links for pages, eg, previous, next, 1 2 3 ... x
	* @param string The basic link to include in the href
	*/
	function writePagesLinks( $link ) {

		// clean link - could be better filtered in rewrite
		// stops XSS
		require_once( $GLOBALS['mosConfig_absolute_path'] . '/includes/phpInputFilter/class.inputfilter.php');
		$iFilter = new InputFilter( null, null, 1, 1 );
		$link = trim( $iFilter->process( $link ) );
		$link = preg_replace("/(task.*?)&/i", "", $link);

		$txt = '';

		$displayed_pages = 10;
		$total_pages = ceil( $this->total / $this->limit );
		$this_page = ceil( ($this->limitstart+1) / $this->limit );
		$start_loop = (floor(($this_page-1)/$displayed_pages))*$displayed_pages+1;
		if ($start_loop + $displayed_pages - 1 < $total_pages) {
			$stop_loop = $start_loop + $displayed_pages - 1;
		} else {
			$stop_loop = $total_pages;
		}

		$link .= '&amp;limit='. $this->limit;

		if ($this_page > 1) {
			$page = ($this_page - 2) * $this->limit;
			$txt .= '<a href="'. sefRelToAbs( "$link&amp;limitstart=0" ) .'" class="pagenav" title="first page">&lt;&lt; '. _PN_START .'</a> ';
			$txt .= '<a href="'. sefRelToAbs( "$link&amp;limitstart=$page" ) .'" class="pagenav" title="previous page">&lt; '. _PN_PREVIOUS .'</a> ';
		} else {
			$txt .= '<span class="pagenav">&lt;&lt; '. _PN_START .'</span> ';
			$txt .= '<span class="pagenav">&lt; '. _PN_PREVIOUS .'</span> ';
		}

		for ($i=$start_loop; $i <= $stop_loop; $i++) {
			$page = ($i - 1) * $this->limit;
			if ($i == $this_page) {
				$txt .= '<span class="pagenav">'. $i .'</span> ';
			} else {
				$txt .= '<a href="'. sefRelToAbs( $link .'&amp;limitstart='. $page ) .'" class="pagenav"><strong>'. $i .'</strong></a> ';
			}
		}

		if ($this_page < $total_pages) {
			$page = $this_page * $this->limit;
			$end_page = ($total_pages-1) * $this->limit;
			$txt .= '<a href="'. sefRelToAbs( $link .'&amp;limitstart='. $page ) .' " class="pagenav" title="next page">'. _PN_NEXT .' &gt;</a> ';
			$txt .= '<a href="'. sefRelToAbs( $link .'&amp;limitstart='. $end_page ) .' " class="pagenav" title="end page">'. _PN_END .' &gt;&gt;</a>';
		} else {
			$txt .= '<span class="pagenav">'. _PN_NEXT .' &gt;</span> ';
			$txt .= '<span class="pagenav">'. _PN_END .' &gt;&gt;</span>';
		}
		return $txt;
	}
}
?>