<?php
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
if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

global $template, $conf, $user, $page;
include_once(PHPWG_ROOT_PATH .'admin/include/tabsheet.class.php');
$my_base_url = get_admin_plugin_menu_link(__FILE__);

// +-----------------------------------------------------------------------+
// | Check Access and exit when user status is not ok                      |
// +-----------------------------------------------------------------------+
check_status(ACCESS_ADMINISTRATOR);

//-------------------------------------------------------- sections definitions

	  if (!is_webmaster())
  {
    array_push($page['errors'], l10n('This section is reserved for the webmaster'));
  }
  else
  {
// Gest Tab
if (!isset($_GET['tab']))
    $page['tab'] = 'pfi';
else
    $page['tab'] = $_GET['tab'];
$tabsheet = new tabsheet();
  $tabsheet->add('pfi',l10n('pfi_ajout'),PFI_ADMIN.'-pfi');
  $tabsheet->add('help',l10n('help'),PFI_ADMIN.'-help');
$tabsheet->select($page['tab']);
$tabsheet->assign();

switch ($page['tab'])
{
// Onglet gestion de onglet ajout icône
  case 'pfi':
$blockdesc = 'pfi';
$template->assign(
	$blockdesc,
	array(
	  'meta'=>l10n('pfi_name'),
	  ));

$filename = PHPWG_ROOT_PATH.PWG_LOCAL_DIR .'favicon.ico';
if (file_exists($filename)) {$template->assign('ICO',$filename);}

if (isset($_POST['submitpfi']))
{

$content_dir = PHPWG_ROOT_PATH.PWG_LOCAL_DIR;	
$tmp_file = $_FILES['pfi']['tmp_name'];

if ($_FILES['pfi']['error'] !== UPLOAD_ERR_OK){
  include_once(PHPWG_ROOT_PATH .'admin/include/functions_upload.inc.php');
  $error_message = file_upload_error_message($_FILES['pfi']['error']);
  array_push( $page['errors'], $error_message);
  break;
}

if( !is_uploaded_file($tmp_file) ){
  array_push( $page['errors'], l10n('pfi_erreur_vide') );
  break;
}

$type_file = strrchr($_FILES['pfi']['name'], '.');
if( !strstr($type_file, 'ico')){
  array_push( $page['errors'], l10n('pfi_erreur_ext'));
  break;
}
	
$taille_maxi = 5120;
$taille = filesize($_FILES['pfi']['tmp_name']);
if($taille>$taille_maxi){
  array_push($page['errors'], l10n('pfi_erreur_taille'));
  break;
}	

$filename = PHPWG_ROOT_PATH.PWG_LOCAL_DIR .'favicon.ico';
if (file_exists($filename)){
  array_push($page['infos'], l10n('pfi_erreur_exist'));
}

$name_file = $_FILES['pfi']['name'];
if( preg_match('#[\x00-\x1F\x7F-\x9F/\\\\]#', $name_file) ){
  array_push( $page['infos'], l10n('pfi_erreur_nom') );
  break;
}
else if(
!move_uploaded_file($tmp_file, $content_dir . 'favicon.ico') )
{
array_push( $page['errors'], l10n('pfi_erreur_mouve') );
break;
}
  array_push( $page['infos'], l10n('pfi_ok') );
}
  break;

  case 'help':
  $blockdesc = 'help';
$template->assign(
	$blockdesc,
	array(
	  'meta'=>l10n('pfi_name'),
	  ));
  
	break;
	
} 
$template->set_filenames(array('plugin_admin_content' => dirname(__FILE__) . '/admin.tpl')); 
$template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');
}
?>