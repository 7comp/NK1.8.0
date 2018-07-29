<?php
/**
 * @version     1.8
 * @link http://www.nuked-klan.org Clan Clan Management System for Gamers
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright 2001-2015 Nuked-Klan (Registred Trademark)
 */
defined('INDEX_CHECK') or die;


global $bgcolor1, $bgcolor2, $bgcolor3;
// Definition des 3 couleurs, par defaut ceux de nuked-klan, vous pouvez les remplacer par un code couleur.
// Exemple : $color1 = "#FFFFFF";

// $color1 = $bgcolor1;
// $color2 = $bgcolor2;
// $color3 = $bgcolor3;

// Définition du background de la 1er cellule par defaut un bgcolor3, vous pouvez le remplacer par un background utilisant une image.
// Exemple : $background = "style=\"background-image:url(images/img.gif);\"";
//$background = 'style="background: ' . $bgcolor3 . '"';
// Définition du background des catégories de forums par defaut un bgcolor2, vous pouvez le remplacer par un background utilisant une image.
// Exemple : $background_cat = "style=\"background-image:url(images/img2.gif);\"";
//$background_cat = 'style="background: ' . $bgcolor2 . '"';

// Fonction de redimentionement des avatars (on, off, local)
$avatar_resize = 'on';

// Fonction de redimentionement des images dans la signature (on, off)
//$signature_resize = 'on';

// Largeur maximal de l'avatar
$avatar_width = 150;
//Les images redimentionnée automatiquement sont cliquables (TRUE, FALSE)
//$imgClic = TRUE;

//Forcer l'affichage des messages d'édition des posts (on,off)
//$force_edit_message = 'off';
?>