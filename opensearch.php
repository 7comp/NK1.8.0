<?php
/**
 * @version     1.8
 * @link http://www.nuked-klan.org Clan Clan Management System for Gamers
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright 2001-2015 Nuked-Klan (Registred Trademark)
 */
header('Content-type: text/html; charset=iso-8859-1');
define ('INDEX_CHECK', 1);

include('globals.php');
include('conf.inc.php');
include('nuked.php');
include('Includes/constants.php');

$sitename = utf8_encode($nuked['name']);
$sitedesc = utf8_encode($nuked['slogan']);
$sitename = nkHtmlEntityDecode($nuked['name']);
$sitedesc = nkHtmlEntityDecode($nuked['slogan']);
$sitename = str_replace('&amp;', '&', $sitename);
$sitedesc = str_replace('&amp;', '&', $sitedesc);
$sitename = nkHtmlSpecialChars($sitename);
$sitedesc = nkHtmlSpecialChars($sitedesc);

echo '<?xml version="1.0" ?>
<OpenSearchDescription xmlns="http://a9.com/-/spec/opensearch/1.1/" xmlns:moz="http://www.mozilla.org/2006/browser/search/">
<ShortName>' . $sitename . '</ShortName>
<Description>' . $sitedesc . '</Description>
<Url type="text/html" method="get" template="' . $nuked['url'] . '/index.php?file=Search&amp;op=mod_search&amp;main={searchTerms}"/>
<Image width="16" height="16">' . $nuked['url'] . '/images/favicon.ico</Image>
<InputEncoding>ISO-8859-1</InputEncoding>
<moz:SearchForm></moz:SearchForm>
<Url type="application/opensearchdescription+xml" rel="self" template="http://mycroft.mozdev.org/updateos.php/id0/.xml"/>
<moz:UpdateUrl>http://mycroft.mozdev.org/updateos.php/id0/.xml</moz:UpdateUrl>
</OpenSearchDescription>';
?>