<?php
defined( '_VALID_MOS' ) or die( 'Restricted access' );
global $mosConfig_absolute_path, $mosConfig_live_site;
$folder 	= 'modules/js_flashrotator/jpg';
$width 			= $params->get( 'width' );
$bgcolor 		= $params->get( 'bgcolor' );
$height 		= $params->get( 'height' );
$rotatetime 	= $params->get( 'rotatetime' );
$shownavigation = $params->get( 'shownavigation' );
$transition 	= $params->get( 'transition' );
$randomplay 	= $params->get( 'randomplay' );
$image1 		= $params->get( 'image1' );
$image2 		= $params->get( 'image2' );
$image3 		= $params->get( 'image3' );
$image4 		= $params->get( 'image4' );
$image5 		= $params->get( 'image5' );
$link1 			= $params->get( 'link1' );
$link2 			= $params->get( 'link2' );
$link3 			= $params->get( 'link3' );
$link4 			= $params->get( 'link4' );
$link5 			= $params->get( 'link5' );
$transparent 	= $params->get( 'transparent' );
$xmlout = "<?xml version=\"1.0\"?>";
$xmlout.= "<jpgrotator>";
$xmlout.= "<parameters>";
$xmlout.= "<rotatetime>$rotatetime</rotatetime>";
$xmlout.= "<randomplay>$randomplay</randomplay>";
$xmlout.= "<shownavigation>$shownavigation</shownavigation>";
$xmlout.= "<transition>$transition</transition>";
$xmlout.= "<link>$link</link>";
$xmlout.= "</parameters>";
$xmlout.= "<photos>";
$xmlout.= "<photo path =\"$folder/$image1\" link =\"$link1\"/>";
$xmlout.= "<photo path =\"$folder/$image2\" link =\"$link2\"/>";
$xmlout.= "<photo path =\"$folder/$image3\" link =\"$link3\"/>";
$xmlout.= "<photo path =\"$folder/$image4\" link =\"$link4\"/>";
$xmlout.= "<photo path =\"$folder/$image5\" link =\"$link5\"/>";
$xmlout.= "</photos>";
$xmlout.= "</jpgrotator>";
$xml=fopen('modules/js_flashrotator/js_flashrotator.xml','w');
fwrite($xml,$xmlout);
fclose($xml);
?>
<script type="text/javascript" src="<?php echo $mosConfig_live_site;?>/modules/js_flashrotator/flashobject.js"></script>
<div id="flashcontent">
OOPS. Your Flash player is missing or outdated.<a href="http://www.macromedia.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">Click here</a> to update your player so you can see this content.
</div>
	<script type="text/javascript">
		// <![CDATA[
		var fo = new FlashObject("./modules/js_flashrotator/flashrotator.swf", "Flashrotator", "<?php echo $width; ?>", "<?php echo $height; ?>", "7", "<?php echo $bgcolor; ?>");
		fo.addParam("wmode", "<?php echo $transparent; ?>");
		fo.write("flashcontent");
		// ]]>
</script>

