<?php
/*
Plugin Name: Personal Favicon
Version: 2.8.a
Description: Replace Piwigo fivicon by the favicon in local directory
Plugin URI: http://piwigo.org/ext/extension_view.php?eid=462
Author: ddtddt
Author URI: http://temmii.com/piwigo/
*/

// +-----------------------------------------------------------------------+
// | Personal Favicon by plugin for Piwigo                                 |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2010-2016 ddtddt               http://temmii.com/piwigo/ |
// +-----------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify  |
// | it under the terms of the GNU General Public License as published by  |
// | the Free Software Foundation                                          |
// |                                                                       |
// | This program is distributed in the hope that it will be useful, but   |
// | WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU      |
// | General Public License for more details.                              |
// |                                                                       |
// | You should have received a copy of the GNU General Public License     |
// | along with this program; if not, write to the Free Software           |
// | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, |
// | USA.                                                                  |
// +-----------------------------------------------------------------------+
define('PFI_DIR' , basename(dirname(__FILE__)));
define('PFI_PATH' , PHPWG_PLUGINS_PATH . PFI_DIR . '/');
define('PFI_ADMIN',get_root_url().'admin.php?page=plugin-'.PFI_DIR);

add_event_handler('loading_lang', 'PersoFavicon_loading_lang');	  
function PersoFavicon_loading_lang(){
  load_language('plugin.lang', PFI_PATH);
}

//Ajout du menu admin
add_event_handler('get_admin_plugin_menu_links', 'PersoFavicon_admin_menu');
function PersoFavicon_admin_menu($menu){
  $menu[] = array(
    'NAME' => l10n('PersoFavicon'),
    'URL' => PFI_ADMIN,
  );
  return $menu;
}


// Remplace le code dans le header
add_event_handler('loc_begin_page_header', 'Change_Favicon', 55 );
function Change_Favicon(){
	global $template;
	$template->set_prefilter('header', 'Favicon');
}

function Favicon($content, &$smarty){
  $search = '#<link rel="shortcut icon".*?favicon.ico">#';
  global $conf;
  $favicon_name = & $conf['PersoFavicon'];

  if (!empty($favicon_name)){
    $replacement = '<link rel="shortcut icon" type="image/x-icon" href="'.PHPWG_ROOT_PATH.PWG_LOCAL_DIR.$favicon_name.'.ico">';
  }else{
    $replacement = '<link rel="shortcut icon" type="image/x-icon" href="'.PHPWG_ROOT_PATH.PWG_LOCAL_DIR.'favicon.ico">';
  }
  return preg_replace($search, $replacement, $content);
}
 
?>