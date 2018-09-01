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
$lang['This section is reserved for the webmaster'] = 'Cette section est réservée au webmaster';

//tab add
$lang['pfi_h2'] = 'Plugin Perso Favicon';
$lang['pfi_ajout'] = 'Ajouter une icône';
$lang['pfi_actu'] = 'Une icône est actuellement présente dans votre répertoire local : ';
$lang['pfi_actu2'] = 'ATTENTION, elle sera remplacée par la nouvelle que vous allez transférer.';
$lang['pfi_validdef'] = 'Confirmez-vous votre choix ? Si elle existe, la favicon actuelle sera écrasée';
$lang['pfi_select'] = 'Sélectionner votre fichier icône (.ico, max 5Ko)';
$lang['pfi_envoie'] = 'Transférer dans le répertoire local';
$lang['pfi_erreur_ext'] = 'Vous devez transférer un fichier de type .ico';
$lang['pfi_erreur_taille'] = 'Vous devez transférer un fichier de 5Ko maximum';
$lang['pfi_erreur_exist'] = 'Le fichier a été remplacé';
$lang['pfi_erreur_nom'] = 'Nom de fichier non valide';
$lang['pfi_erreur_vide'] = 'Le fichier est introuvable';
$lang['pfi_ok'] = 'Le fichier a bien été transféré';
$lang['pfi_erreur_mouve'] = 'Impossible de copier le fichier dans le répertoire "local"';
$lang['PersoFavicon'] = 'Favicon personel';

//tab help
$lang['help'] = 'Aide';
$lang['pfi_aide1T'] = 'Formulaire d\'ajout';
$lang['pfi_aide1'] = 'Vous pouvez ajouter une favicon via le formulaire d\'ajout. Le fichier prendra automatiquement le nom "favicon.ico". Le fichier remplacera celui pouvant être déjà présente dans le répertoire local.<br><br>Taille maximum du fichier 5ko.<br><br>Suivant le navigateur utilisé, il peut y avoir un délai de mise à jour. Pour un effet immédiat, purgez le cache du navigateur et redémarrez le.';
$lang['pfi_aide2T'] = '$conf[\'PersoFavicon\']';
$lang['pfi_aide2'] = 'Si vous charger par FTP une icône qui a un autre nom que "favicon.ico", vous pouvez ajouter dans votre fichier de configuration local :<br><pre>$conf[\'PersoFavicon\'] = \'votre nom de fichier\';</pre>';

?>