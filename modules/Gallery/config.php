<?php
/**
 * @version     1.8
 * @link http://www.nuked-klan.org Clan Clan Management System for Gamers
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright 2001-2015 Nuked-Klan (Registred Trademark)
 */
if (!defined("INDEX_CHECK"))
{
	die ("<div style=\"text-align: center;\">You cannot open this page directly</div>");
}


// Image miniature par defaut dans les sous-catégories (tableau)
$img_none = "modules/Gallery/images/nk.gif";

// largeur en pixel de la miniature dans les sous-catégories (tableau)
$img_cat = 50;


// largeur en pixel de l'image dans la description
$img_width = 400;


// largeur en pixel de la miniature dans les catégories avec 1 ou 2 images par ligne
$img_screen1 = 150;


// largeur en pixel de la miniature dans les catégories avec 3 images par ligne
$img_screen2 = 120;


// largeur en pixel de la miniature dans les catégories avec 4 ou plus images par ligne
$img_screen3 = 90;

// Fonction de redimentionement des images (on, off, local)
$image_resize = "on";

// Repertoire d'upload des images
$rep_img = "upload/Gallery/";

// Création automatique de miniature GD (on, off)
$image_gd = "on";

// Repertoire d'upload des miniatures (GD)
$rep_img_gd = "upload/Gallery/";

?>