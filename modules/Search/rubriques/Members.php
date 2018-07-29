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

if ($autor != ""){
    $and = "(pseudo LIKE '%" . $autor . "%')";
}
else if ($searchtype == "matchexact"){
    $and = "(pseudo LIKE '%" . $main . "%')";
}
else{
    $sep = "";
    $and = "(";
	
    for($i = 0; $i < count($search); $i++){
        $and .= $sep . "(pseudo LIKE '%" . $search[$i] . "%')";
        if ($searchtype == "matchor") $sep = " OR ";
        else $sep = " AND ";
    }
	
    $and .= ")";
}

$req = "SELECT pseudo, date FROM " . USER_TABLE . " WHERE " . $and. " AND niveau > 0 ORDER BY pseudo";
$sql_mb = mysql_query($req);

$nb_mb = mysql_num_rows($sql_mb);

if ($nb_mb > 0){
    while (list($pseudo, $mb_date) = mysql_fetch_array($sql_mb)){
        $mb_date = nkDate($mb_date);
        $tab['module'][] = $modname;
        $tab['title'][] = "<b>" . $pseudo . "</b> - " . _MEMBERREG . "&nbsp;" . $mb_date;
        $tab['link'][] = "index.php?file=Members&amp;op=detail&amp;autor=" . urlencode($pseudo);
    }
}
?>