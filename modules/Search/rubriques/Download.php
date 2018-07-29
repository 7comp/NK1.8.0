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

$visiteur = !$user ? 0 : $user[1];

$and = "";

if ($autor != "" && $main != ""){
    $and .= "(autor LIKE '%" . $autor . "%') AND ";
}
else if ($autor != ""){
    $and .= "(autor LIKE '%" . $autor . "%')";
}

if ($searchtype == "matchexact" && $main != ""){
    $and .= "(titre LIKE '%" . $main . "%' OR description LIKE '%" . $main . "%')";
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

$req = "SELECT id, titre, date FROM " . DOWNLOAD_TABLE . " WHERE level <= '" . $visiteur . "' AND " . $and . " ORDER BY id DESC";
$sql_dl = mysql_query($req);

$nb_dl = mysql_num_rows($sql_dl);

if ($nb_dl > 0){
    while (list($dl_id, $dl_titre, $dl_date) = mysql_fetch_array($sql_dl)){
        $dl_titre = nkHtmlEntities($dl_titre);
        $dl_date = nkDate($dl_date);
        $tab['module'][] = $modname;
        $tab['title'][] = "<b>" . $dl_titre . "</b> ";
        $tab['link'][] = "index.php?file=Download&amp;op=description&amp;dl_id=" . $dl_id;
    }
}
?>
