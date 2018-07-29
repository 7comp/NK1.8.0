<?php
/**
 * @version     1.8
 * @link http://www.nuked-klan.org Clan Clan Management System for Gamers
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright 2001-2015 Nuked-Klan (Registred Trademark)
 */
defined('INDEX_CHECK') or die ('You can\'t run this file alone.');

// Activer l'upload pour les suggestions ( on | off )
$upload_dl = 'on';

// Activer l'upload pour les images ( on | off )
$upload_img = 'on';

// Repertoire de destination pour les suggestions de downloads
$rep_dl = 'upload/Suggest/';

// Repertoire de destination pour les downloads validés
$rep_dl_ok = 'upload/Download/';

// Repertoire de destination pour les suggestions de captures de  downloads
$rep_dl_screen = 'upload/Suggest/';

// Repertoire de destination pour les captures de  downloads validées
$rep_dl_screen_ok = 'upload/Download/screen/';

// Repertoire de destination pour les images
$rep_img = 'upload/Suggest/';

// Repertoire de destination pour les images validées
$rep_img_ok = 'upload/Download/';

// Repertoire de destination pour les suggestions de thèmes
$rep_theme = 'upload/Suggest/';

// Activer le filtre des fichiers uploadés ( on | off )
$file_filter = 'on';

// Liste des extentions autorisé
$file_filtre = array('zip', 'rar', '7z', 'gz', 'mpg', 'mpeg', 'avi', 'wmv', 'mov', 'wav', 'mp3', 'jpg', 'jpeg', 'bmp', 'gif', 'png', 'doc', 'xls', 'ptt', 'rtf', 'txt', 'docx', 'xlsx', 'pptx', 'odt', 'ods', 'odp');
?>