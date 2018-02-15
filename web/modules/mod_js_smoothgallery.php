<?php 
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
global $my, $Itemid;
$albumid = $params->get( 'albumid' );
$query= "SELECT * FROM `#__js_smoothgallery` WHERE published=1 AND catid = '$albumid' ORDER by ordering";
$query2= "SELECT * FROM  `#__js_smoothgallery_conf` LIMIT 1";
$database->setQuery ( $query2 );
$rows = $database->loadObjectList();
$row = $rows[0];
$database->setQuery( $query );
$title = $row->title;
$imagefolder = $row->imgfolder;
$imagetnfolder = $row->imgtnfolder;
$rows = $database->loadObjectList();
$delay = $params->get( 'delay', 7000 );
$fadeDuration = $params->get('fadeDuration', 700);
$embedLinks = $params->get('embedLinks', 1);
$showCarousel = $params->get('showCarousel', 0);
$showInfopane = $params->get('showInfopane', 1);
$showArrows = $params->get('showArrows', 1);
$timed = $params->get('timed', 1);
$width = $params->get( 'width', 726 ); 
$height = $params->get( 'height', 162 );
$linktarget = $params->get( 'linktarget', 0 );
$moothgallery= '<div class="content"><div id="myGallery" style="width:' . $width . 'px; height:' . $height . 'px; margin:0px auto;">';
if ($rows){
foreach ( $rows as $row ) {
        $id = $row->id;
        $title = $row->title;
        $desc  = $row->desc;
        $image = $row->image;
        $link = $row->link;
        $moothgallery.= "<div class=\"imageElement\">
<h3>$row->title</h3>
<p>$row->desc</p>
<a href=\"$link\" title=\"$row->title\" class=\"open\"></a>
<img src=\"$mosConfig_live_site/$imagefolder/$image\" class=\"full\" alt=\"$row->title\" />
<img src=\"$mosConfig_live_site/$imagetnfolder/tn_$image\" class=\"thumbnail\" alt=\"$row->title\" />
</div>";
	}
	}
$moothgallery.= "</div></div>";

echo '<script type="text/javascript">
    function startGallery() {
    var myGallery = new gallery($("myGallery"), {
    width: ' . $width . ',
    height: ' . $height . ',
    fadeDuration: ' . $fadeDuration . ',
    delay: ' . $delay . ',
    timed: ' . $timed . ',
    showArrows: ' . $showArrows . ',
    showCarousel: ' . $showCarousel . ',
    showInfopane: ' . $showInfopane . ',
    embedLinks: ' . $embedLinks . '
    });';
if ( $linktarget == 1 ) {
	echo
        'myGallery.currentLink.onclick = function() {
            window.open(this.href);
            return false;
        }.bind(myGallery.currentLink);'; }
?>
<?php echo
    '}
    window.onDomReady(startGallery);
</script>';
?>
<?php echo $moothgallery; ?>



