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
    $and .= "(auteur LIKE '%" . $autor . "%') AND ";
}
else if ($autor != ""){
    $and .= "(auteur LIKE '%" . $autor . "%')";
}

if ($searchtype == "matchexact" && $main != ""){
    $and .= "(M.titre LIKE '%" . $main . "%' OR M.txt LIKE '%" . $main . "%')";
}
else if ($main != ""){
    $sep = "";
    $and .= "(";
	
    for($i = 0; $i < count($search); $i++){
        $and .= $sep . "(M.titre LIKE '%" . $search[$i] . "%' OR M.txt LIKE '%" . $search[$i] . "%')";
        if ($searchtype == "matchor") $sep = " OR ";
        else $sep = " AND ";
    }
	
    $and .= ")";
}

$req = "SELECT M.id, M.thread_id, M.titre, M.forum_id, M.date, M.auteur FROM " . FORUM_MESSAGES_TABLE . " AS M, " . FORUM_TABLE . " AS F, " . FORUM_CAT_TABLE . " AS FC WHERE F.id=M.forum_id AND F.cat=FC.id AND FC.niveau <= '" . $visiteur . "' AND F.level <= '" . $visiteur . "' AND " . $and . " ORDER BY M.id DESC";
$sql_forum = mysql_query($req);

$nb_mess = mysql_num_rows($sql_forum);

if ($nb_mess > 0){
    while (list($mid, $tid, $subject, $fid, $mess_date, $author) = mysql_fetch_array($sql_forum)){
        $mess_date = nkDate($mess_date);
        $subject = nkHtmlEntities($subject);
        $subject = nk_CSS($subject);

        $sql_page = mysql_query("SELECT id FROM " . FORUM_MESSAGES_TABLE . " WHERE thread_id = '" . $tid . "'");
        $nb_rep = mysql_num_rows($sql_page);
        if ($nb_rep > $nuked['mess_forum_page']){
            $topicpages = $nb_rep / $nuked['mess_forum_page'];
            $topicpages = ceil($topicpages);
            $link_post = "index.php?file=Forum&amp;page=viewtopic&amp;forum_id=" . $fid . "&amp;thread_id=" . $tid . "&amp;p=" . $topicpages . "&amp;highlight=" . urlencode($string). "#" . $mid;
        }
        else{
            $link_post = "index.php?file=Forum&amp;page=viewtopic&amp;forum_id=" . $fid . "&amp;thread_id=" . $tid . "&amp;highlight=" . urlencode($string). "#" . $mid;
        }

        $tab['module'][] = $modname;
        $tab['title'][] = "<b>" . $subject . "</b> - " . _BY . "&nbsp;" . $author . "&nbsp;" . _THE . "&nbsp;" . $mess_date;
        $tab['link'][] = $link_post;
    }
}
?>