<?php

/**
 * @Project NUKEVIET 3.x
 * @Author VINADES (contact@vinades.vn)
 * @Copyright (C) 2012 VINADES. All rights reserved
 * @Createdate Apr 20, 2010 10:47:41 AM
 */

if( ! defined( 'NV_IS_MOD_RSS' ) ) die( 'Stop!!!' );

$rssarray = array();
//$rssarray[] = array( 'catid' => 0, 'parentid' => 0, 'title' => '', 'link' =>  '');

$sql = "SELECT `id` AS `catid`, `parentid`, `title`, `alias` FROM `" . NV_PREFIXLANG . "_" . $mod_name . "_categories` ORDER BY `weight` ASC";
$list = nv_db_cache( $sql, '', $mod_name );
foreach( $list as $value )
{
	$value['link'] = NV_BASE_SITEURL . "index.php?" . NV_LANG_VARIABLE . "=" . NV_LANG_DATA . "&amp;" . NV_NAME_VARIABLE . "=" . $mod_name . "&amp;" . NV_OP_VARIABLE . "=rss/" . $value['alias'];
	$rssarray[] = $value;
}

?>