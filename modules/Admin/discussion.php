<?php
/**
 * @version     1.8
 * @link http://www.nuked-klan.org Clan Management System for Gamers
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright 2001-2015 Nuked-Klan (Registred Trademark)
 */
defined('INDEX_CHECK') or die ('You can\'t run this file alone.');

global $user, $nuked, $language;
translate("modules/Admin/lang/" . $language . ".lang.php");

$visiteur = $user ? $user[1] : 0;

if ($visiteur  >= 2)
{
    function main()
    {
        global $user, $nuked;
		$date = time();
		if ($_REQUEST['texte'] != '')
		{
			$_REQUEST['texte'] = utf8_decode($_REQUEST['texte']);
			$_REQUEST['texte'] = nkHtmlEntities($_REQUEST['texte']);
			$texte = mysql_real_escape_string(stripslashes($_REQUEST['texte']));
			$upd = mysql_query("INSERT INTO ".$nuked['prefix']."_discussion  (`date` , `pseudo` , `texte`)  VALUES ('".$date."', '".$user[0]."', '".$texte."')");
		}
    }
    switch ($_REQUEST['op'])
    {
        case "main":
        main();
        break;
        default:
        main();
        break;
    }

}
else if ($visiteur > 1)
{
    admintop();
    echo "<br /><br /><div style=\"text-align: center;\">" . _NOENTRANCE . "<br /><br /><a href=\"javascript:history.back()\"><b>" . _BACK . "</b></a></div><br /><br />";
    adminfoot();
}
else
{
    admintop();
    echo "<br /><br /><div style=\"text-align: center;\">" . _ZONEADMIN . "<br /><br /><a href=\"javascript:history.back()\"><b>" . _BACK . "</b></a></div><br /><br />";
    adminfoot();
}
?>
