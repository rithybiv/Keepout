<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
if( !class_exists('MAMBOMAP_CFG_1_1') ) {
class MAMBOMAP_CFG_1_1 {
var $title = "Plan du site";
var $classname = "sitemap";
var $expand_category = "1";
var $expand_section = "1";
var $expand_pshop = "1";
var $show_menutitle = "1";
var $columns = "1";
var $menus = array (
  'mainmenu' => 
  array (
    'ordering' => 1,
    'show' => true,
  ),
  'usermenu' => 
  array (
    'ordering' => 2,
    'show' => true,
  ),
  'multimedia' => 
  array (
    'ordering' => 3,
    'show' => true,
  ),
  'topmenu' => 
  array (
    'ordering' => 4,
    'show' => true,
  ),
);
}}
?>
