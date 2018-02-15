<?php 

#############################################
# Based on script http://forum.topflood.com #
#############################################
# @author Félix Dr. Dimitric
# Email : felix@eliopro.com
# Date : 20.12.2007
# URL : http://eliopro.com
# Description : Snow for Joomla! 1.0.x

#Interdit l'acces direct au code source
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );  

$stopsnow = $params->get( 'stopsnow' ) ;

if  ($stopsnow == 'OFF' )
{ 
echo "".('<script language="javascript" src="http://images.topflood.com/neige-perso.php"></script>')."";
}
else
{
echo "".('<script language="javascript" src="http://images.topflood.com/neige-perso.php"></script><INPUT TYPE=submit VALUE="Snow" onclick="javascript:hidesnow();">')."";
}

?>