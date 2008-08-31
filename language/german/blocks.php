<?php

/**
* $Id: blocks.php 329 2007-12-23 15:43:30Z malanciault $
* Module: SmartPartner
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/
// including the common language file
$fileName = XOOPS_ROOT_PATH . '/modules/smartpartner/language/' . $GLOBALS['xoopsConfig']['language'] . '/common.php';
if (file_exists($fileName)) {
	include_once $fileName;
} else {
	include_once XOOPS_ROOT_PATH . '/modules/smartpartner/language/german/common.php';
}
define('_MB_SPARTNER_PARTNERS_PSPACE', 'Möchten Sie Leerzeichen zwischen den Partnern?');
define('_MB_SPARTNER_BRAND', 'Sollen die Partner wilkürlich im Block angezeigt werden?');
define('_MB_SPARTNER_BLIMIT', 'Limitiere Block auf xx Einträge: (0 = kein Limit)');
define('_MB_SPARTNER_BSHOW', 'Im Bock zeige:');
define('_MB_SPARTNER_BORDER', 'Ordne im Block nach:');
define('_MB_SPARTNER_ID', 'ID');
define('_MB_SPARTNER_HITS', 'Treffer');
define('_MB_SPARTNER_TITLE', 'Titel');
define('_MB_SPARTNER_WEIGHT', 'Gewichtung');
define('_MB_SPARTNER_ASC', 'Aufsteigend');
define('_MB_SPARTNER_DESC', 'Abfallend');
define('_MB_SPARTNER_IMAGES', 'Bilder');
define('_MB_SPARTNER_TEXT', 'Text Links');
define('_MB_SPARTNER_BOTH', 'Beide');
define('_MB_SPARTNER_FADE', 'Bilder Ein-/Ausblenden');
define('_MB_SPARTNER_SEE_ALL', "Zeige 'Alle Partner anzeigen...'");
define('_MB_SPARTNER_LANG_SEE_ALL', "Alle Partner anzeigen...");
define('_MB_SMARTPARTNER_CATEGORY', "Category");
define('_MB_SPARTNER_BWIDTH', 'Block width');
define('_MB_SPARTNER_BHEIGHT', 'Block height');
define('_MB_SPARTNER_BSPEED', 'Speed (1 to 10; ten = fast)');
define('_MB_SPARTNER_BSPACE', 'Space beetween each slide');
define('_MB_SPARTNER_BBG', 'Background color (without #)');
define('_MB_SPARTNER_SORT', 'Sort by');
define('_MB_SPARTNER_ORDER', 'Order by');
define('_MB_SPARTNER_SHOW_SUBS', 'Display subcats');
define('_MB_SPARTNER_YES', 'Yes');
define('_MB_SPARTNER_NO', 'No');
define('_MB_SPARTNER_LANG_SEE_ALL_OFFERS', "See all offers...");
define('_MB_SPARTNER_SHOW_CURR_SUBS', 'Display subcats of current category');
?>