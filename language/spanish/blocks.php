<?php
//Traducción por debianus. Reporte de errores y sugerencias: http://es.impresscms.org
/**
* $Id: blocks.php,v 1.2 2007/09/18 14:01:04 marcan Exp $
* Module: SmartPartner
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/
// including the common language file
$fileName = XOOPS_ROOT_PATH . '/modules/smartpartner/language/' . $GLOBALS['xoopsConfig']['language'] . '/common.php';
if (file_exists($fileName)) {
	include_once $fileName;
} else {
	include_once XOOPS_ROOT_PATH . '/modules/smartpartner/language/english/common.php';
}
define('_MB_SPARTNER_PARTNERS_PSPACE', '¿Poner espacio entre los patrocinadores?');
define('_MB_SPARTNER_BRAND', '¿Colocar aleatoriamente a los patrocinadores en los bloques?');
define('_MB_SPARTNER_BLIMIT', 'Limitar los bloques a xx entradas: (0 = sin límite)');
define('_MB_SPARTNER_BSHOW', 'En los bloques mostrar:');
define('_MB_SPARTNER_BORDER', 'Ordenar el contenido del bloque por:');
define('_MB_SPARTNER_ID', 'ID');
define('_MB_SPARTNER_HITS', 'Clics');
define('_MB_SPARTNER_TITLE', 'Título');
define('_MB_SPARTNER_WEIGHT', 'Peso');
define('_MB_SPARTNER_ASC', 'Ascendiente');
define('_MB_SPARTNER_DESC', 'Descendiente');
define('_MB_SPARTNER_IMAGES', 'Imágenes');
define('_MB_SPARTNER_TEXT', 'Enlaces de texto');
define('_MB_SPARTNER_BOTH', 'Ambos');
define('_MB_SPARTNER_FADE', 'Imágen con efecto fade');
define('_MB_SPARTNER_SEE_ALL', "Mostrar 'Ver todos los patrocinadores...'");
define('_MB_SPARTNER_LANG_SEE_ALL', "Ver todos los patrocinadores...");
define('_MB_SMARTPARTNER_CATEGORY', "Categoría");
define('_MB_SPARTNER_BWIDTH', 'Altura del bloque');
define('_MB_SPARTNER_BHEIGHT', 'Ancho del bloque');
define('_MB_SPARTNER_BSPEED', 'Velocidad (1 a 10; 10 = rápido)');
define('_MB_SPARTNER_BSPACE', 'Espacio entre cada diapositiva');
define('_MB_SPARTNER_BBG', 'Color de fondo (sin #)');
define('_MB_SPARTNER_SORT', 'Mostrar por');
define('_MB_SPARTNER_ORDER', 'Ordenar por');
define('_MB_SPARTNER_SHOW_SUBS', 'Mostrar subcategorías');
define('_MB_SPARTNER_YES', 'Si');
define('_MB_SPARTNER_NO', 'No');
define('_MB_SPARTNER_LANG_SEE_ALL_OFFERS', "Ver todas las ofertas...");
define('_MB_SPARTNER_SHOW_CURR_SUBS', 'Mostrar subcategorías de la categoría actual');
?>
?>