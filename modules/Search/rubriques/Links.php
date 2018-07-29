<?php
/**
 * @version     1.8
 * @link http://www.nuked-klan.org Clan Clan Management System for Gamers
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright 2001-2015 Nuked-Klan (Registred Trademark)
 */
if (!defined("INDEX_CHECK")){
	exit('You can\'t run this file alone.');
}

global $nuked, $user;

$and = "";

if ($autor != "" && $main != ""){
    $and .= "(webmaster LIKE '%" . $autor . "%') AND ";
}
else if ($autor != ""){
    $and .= "(webmaster LIKE '%" . $autor . "%')";
}

if ($searchtype == "matchexact" && $main != ""){
    $and .= "(titre LIKE '%" . $main. "%' OR description LIKE '%" . $main . "%')";
}
else if ($main != ""){
    $sep = "";
    $and .= "(";
	
    for($i = 0; $i < count($search); $i++){
        $and .= $sep . "(titre LIKE '%" . $search[$i] . "%' OR description LIKE '%" . $search[$i] . "%')";
        if ($searchtype == "matchor") $sep = " OR ";
        else $sep = " AND ";
    }
	
    $and .= ")";
}

$req = "SELECT id, titre, date FROM " . LINKS_TABLE . " WHERE " . $and . " ORDER BY id DESC";
$sql_lk = mysql_query($req);

$nb_lk = mysql_num_rows($sql_lk);

if ($nb_lk > 0){
    while (list($link_id, $link_titre, $lk_date) = mysql_fetch_array($sql_lk)){
        $link_titre = nkHtmlEntities($link_titre);
        $lk_date = nkDate($lk_date);
        $tab['module'][] = $modname;
        $tab['title'][] = "<b>" . $link_titre . "</b> - " . _ADDED . "&nbsp;" . $lk_date;
        $tab['link'][] = "index.php?file=Links&amp;op=description&amp;link_id=" . $link_id;
    }
}
?>