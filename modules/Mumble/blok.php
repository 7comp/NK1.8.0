<link rel="stylesheet" href="modules/Mumble/mumbleChannelViewer.css" type="text/css" />
<?php
/**
 * @version     1.8
 * @link http://www.nuked-klan.org Clan Clan Management System for Gamers
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright 2001-2015 Nuked-Klan (Registred Trademark)
 */
if (!defined("INDEX_CHECK")) exit('You can\'t run this file alone.');

global $nuked, $language, $user;
translate("modules/Search/lang/" . $language . ".lang.php");
?>
<div id="mumbleViewer" class="mumbleViewerIconsDefault mumbleViewerColorBlack">
		<?php
			require_once( 'mumbleChannelViewer.php' );
			$sql=mysql_query("SELECT mumble_jsonurl FROM " . $nuked['prefix'] . "_mumble");
			list($dataUrl) = mysql_fetch_array($sql);
			echo MumbleChannelViewer::render( $dataUrl, 'json' );
		?>
	</div>
