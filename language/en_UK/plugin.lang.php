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

$lang['This section is reserved for the webmaster'] = 'This section is reserved for the webmaster';

//tab add
$lang['pfi_h2'] = 'Perso Favicon Plugin';
$lang['pfi_ajout'] = 'Add an icon';
$lang['pfi_actu'] = 'Current favicon (found in your local directory): ';
$lang['pfi_actu2'] = 'WARNING: any new favicon will overwrite it.';
$lang['pfi_validdef'] = 'Do you confirm upload? If a favicon file already exists, the new one will overwrite it.';
$lang['pfi_select'] = 'Select your icon file (.ico, max 5KB)';
$lang['pfi_envoie'] = 'Upload to the local directory';
$lang['pfi_erreur_ext'] = 'You must upload a file type .ico';
$lang['pfi_erreur_taille'] = 'Maximum file size is 5KB';
$lang['pfi_erreur_exist'] = 'The file has been replaced';
$lang['pfi_erreur_nom'] = 'Invalid filename';
$lang['pfi_erreur_vide'] = 'File not found';
$lang['pfi_ok'] = 'The file has been uploaded';
$lang['pfi_erreur_mouve'] = 'Unable to copy file in the "local" directory';
$lang['PersoFavicon'] = 'PersoFavicon';

//tab help
$lang['help'] = 'Help';
$lang['pfi_aide1T'] = 'Add form';
$lang['pfi_aide1'] = 'The file you add with the upload form will automatically be renamed "favicon.ico" and overwrite any existing favicon in the local directory.<br><br>Maximum file size is 5kB.<br><br>Depending on your web browser, you may need to clear the cache and restart to view the new favicon.';
$lang['pfi_aide2T'] = '$conf[\'PersoFavicon\']';
$lang['pfi_aide2'] = 'If you upload a favicon via FTP with a name different from "favicon.ico", you can add in your local configuration file<br><pre>$conf[\'PersoFavicon\'] = \'your filename\';</pre>';

?>