<?php

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

/* HTML class for all Mambo Map administration output */
class HTML_mambomap {
	/* Show the configuration options and menu ordering */
	function show ( $menus, $pageNav ) {
		global $mambomap_cfg, $mosConfig_live_site, $option;
		?>
		<script language="javascript" type="text/javascript">
		function menu_listItemTask( id, task, option ) {
			var f = document.adminForm;
			cb = eval( 'f.' + id );
			if (cb) {
				cb.checked = true;
				submitbutton(task);
			}
			return false;
		}
		</script>

		<form action="index2.php" method="post" name="adminForm">
		<table class="adminheading">
		<tr>
			<th class="menus">
			Mambo Map Configuration
			</th>
		</tr>
		</table>
		Set Display Options:<br />
		<table class="adminlist" style="table-layout:auto">
		<tr><td style="white-space:nowrap;width=1%">Title: </td><td style="width:49%"><input type="text" name="title" value="<?=@$mambomap_cfg->title;?>"/></td>
		    <td style="white-space:nowrap;width=1%">CSS Classname: </td><td style="width:49%"><input type="text" name="classname" value="<?=@$mambomap_cfg->classname;?>"/></td></tr>
		<tr><td style="white-space:nowrap">Expand Content Categories: </td><td><input type="checkbox" name="expand_category" value="1" <?=@$mambomap_cfg->expand_category ? 'checked ':'';?>/></td>
		    <td style="white-space:nowrap">Expand Content Sections: </td><td><input type="checkbox" name="expand_section" value="1" <?=@$mambomap_cfg->expand_section ? 'checked ':'';?>/></td></tr>
		<tr><td style="white-space:nowrap">Expand PhpShop Categories: </td><td colspan="3"><input type="checkbox" name="expand_pshop" value="1" <?=@$mambomap_cfg->expand_pshop ? 'checked ':'';?>/></td></tr>
		<tr><td style="white-space:nowrap">Show Menu Titles: </td><td><input type="checkbox" name="show_menutitle" value="1" <?=@$mambomap_cfg->show_menutitle ? 'checked ':'';?>/></td>
			<td style="white-space:nowrap">Number of Columns: </td><td><input type="text" name="columns" value="<?=@$mambomap_cfg->columns;?>"/></td></tr>
		</table>
		Set Menu Display Order:<br />
		<table class="adminlist">
		<tr>
			<th width="20">#</th>
			<th width="1"><input type="checkbox" name="toggle" value="" onClick="checkAll(<?php echo count( $menus ); ?>);" /></th>
			<th width="1">Show</th>
			<th width="1">Reorder</th>
			<th width="1">Order</th>
			<th class="title" nowrap="nowrap">Menu Name</th>
		</tr>
		<?php
		$k = 0;
		$i = 0;
		$start = 0;
		if ($pageNav->limitstart)
			$start = $pageNav->limitstart;
		$count = count($menus)-$start;
		if ($pageNav->limit)
			if ($count > $pageNav->limit)
				$count = $pageNav->limit;
		for ($i=0, $n=count( $menus ); $i < $n; ++$i) {
			$menu = $menus[$i];
			$checked = mosCommonHTML::CheckedOutProcessing( $menu, $i );
			if ( $menu->show ) {
				$img = 'tick.png';
				$alt = 'Show';
				$title = 'Click to disable';
			} else {
				$img = "publish_x.png";
				$alt = "Don't show";
				$title = 'Click to enable';
			}
			?>
			<tr class="<?php echo "row". $k; ?>">
				<td align="center" width="30px">
					<?php echo $pageNav->rowNumber( $i ); ?>
				</td>
				<td>
					<?php echo $checked; ?>
				</td>
				<td align="center">
					<a href="javascript: void(0);" onClick="return listItemTask('cb<?php echo $i;?>','<?php echo $menu->show ? "unpublish" : "publish";?>')">
					<img src="images/<?php echo $img;?>" width="12" height="12" border="0" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>"/>
					</a>
				</td>
				<td align="center">
					<?php echo $pageNav->orderUpIcon( $i, true ); ?>
					<?php echo $pageNav->orderDownIcon( $i, $n, true ); ?>
				</td>
				<td align="center">
					<input type="text" name="order[<?php echo $menu->id; ?>]" size="5" value="<?php echo $menu->ordering; ?>" class="text_area" style="text-align:center" />
				</td>
				<td>
					<?php echo $menu->type; ?>
				</td>
			</tr>
			<?php
			$k = 1 - $k;
		}
		?>
		</table>
		<?php echo $pageNav->getListFooter(); ?>

		<input type="hidden" name="option" value="com_mambomap" />
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>
		<?php
	}
}
?>