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

$day = time();

$and = "";

if ($autor != "" && $main != ""){
    $and .= "(auteur LIKE '%" . $autor . "%') AND ";
}
else if ($autor != ""){
    $and .= "(auteur LIKE '%" . $autor . "%')";
}

if ($searchtype == "matchexact" && $main != ""){
    $and .= "(titre LIKE '%" . $main . "%' OR texte LIKE '%" . $main . "%')";
}
else if ($main != ""){
    $sep = "";
    $and .= "(";
	
    for($i = 0; $i < count($search); $i++){
        $and .= $sep . "(titre LIKE '%" . $search[$i] . "%' OR texte LIKE '%" . $search[$i] . "%')";
        if ($searchtype == "matchor") $sep = " OR ";
        else $sep = " AND ";
    }
	
    $and .= ")";
}

$req = "SELECT id, auteur, titre, date FROM " . NEWS_TABLE . " WHERE '" . $day . "' >= date AND " . $and . " ORDER BY id DESC";
$sql_news = mysql_query($req);

$nb_news = mysql_num_rows($sql_news);

if ($nb_news > 0){
    while (list($news_id, $news_auteur, $news_titre, $news_date) = mysql_fetch_array($sql_news)){
        $news_date = nkDate($news_date);
        $news_titre = nkHtmlEntities($news_titre);
        $tab['module'][] = $modname;
        $tab['title'][] = "<b>" . $news_titre . "</b> - " . _BY . "&nbsp;" . $news_auteur . "&nbsp;" . _THE . "&nbsp;" . $news_date;
        $tab['link'][] = "index.php?file=News&amp;op=index_comment&amp;news_id=" . $news_id;
    }
}
?>