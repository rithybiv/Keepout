<?php
/**
* File: mod_jstatus.php,v 1.0 2004/12/12
* Mambo: Mambo_4.5.1
* Auther : Lumsum 
* License: http://www.gnu.org/copyleft/gpl.html GNU/GPL
*/

defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

$smsg = $params->def( 'smsg', $return );
if($smsg==''){$smsg='"'.$mosConfig_sitename.'"';}else{$smsg='"'.$smsg.'"';}

?>
<script language="JavaScript">
<!--

//set message:
msg = <?php  echo $smsg; ?>

timeID = 10;
stcnt = 16;
wmsg = new Array(33);
        wmsg[0]=msg;
        blnk = "                                                               ";
        for (i=1; i<32; i++)
        {
                b = blnk.substring(0,i);
                wmsg[i]="";
                for (j=0; j<msg.length; j++) wmsg[i]=wmsg[i]+msg.charAt(j)+b;
        }

function wiper()
{
        if (stcnt > -1) str = wmsg[stcnt]; else str = wmsg[0];
        if (stcnt-- < -40) stcnt=31;
        status = str;
        clearTimeout(timeID);
        timeID = setTimeout("wiper()",100);
}

wiper()
// -->
</script>
