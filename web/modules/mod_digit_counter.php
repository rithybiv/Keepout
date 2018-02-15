<?php

/**
* @version $Id: mod_digit_counter.php, v1.0 19-jul-2005 by MicroCimod_digit_counter.php, v1.0 19-jul-2005 by MicroCi Exp $
* @package Mambo_4.5
* @copyright (C) 2000 - 2004 Miro International Pty Ltd
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* Mambo is Free Software
*/


defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

$content = "\n<!-- START module MOD_DIGIT_COUNTER by MicroCi -->\n";

// *** Geting params
$increase  = $params->get( 'increase' );
$disp_type = $params->get( 'disp_type' );
$posttext  = $params->get( 'posttext' );

$query = "SELECT sum(hits) AS count FROM #__stats_agents WHERE type='1'";
$database->setQuery( $query );
$hits = $database->loadResult();

if ($hits == NULL) {
	$n = $increase;
} else {
	$n = $hits + $increase;
}

$div = 100000;

while ($n > $div) {
	$div *= 10;
}

$content .= "<div align='center'>\n";

while ($div >= 1) {
	$digit = $n / $div % 10;
	$content .= "<img src='$mosConfig_live_site/modules/mod_digit_counter/" . $disp_type . $digit . ".gif' height=22 width=16>";
	$n -= $digit * $div;
	$div /= 10;
}

$content .= "<br>" . $posttext . "\n</div>\n";

$content .= "\n<!-- STOP module -->\n";

?>