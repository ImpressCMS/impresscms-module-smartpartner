<?php
//Traducción por debianus. Reporte de errores y sugerencias: http://es.impresscms.org
/**
* $Id: main.php,v 1.2 2007/09/18 14:01:04 marcan Exp $
* Module: SmartPartner
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/
if (!defined("XOOPS_ROOT_PATH")) {  
 	die("XOOPS root path not defined");
}

/**
 * This does not belong here. However, since some admin.php constants are refereing to constants
 * defined in common.php, and since admin.php is automatically include when including mainfile.php
 * we need to include the common language file here.
 * 
 * For next release : remove all reference to common constants in other language files.
 */
// including the common language file
$fileName = XOOPS_ROOT_PATH . '/modules/smartpartner/language/' . $GLOBALS['xoopsConfig']['language'] . '/common.php';
if (file_exists($fileName)) {
	include_once $fileName;
} else {
	include_once XOOPS_ROOT_PATH . '/modules/smartpartner/language/english/common.php';
}

define("_MD_SPARTNER_ADMIN_PAGE", ":: Sección de administración ::");
define("_MD_SPARTNER_NOPARTNERSELECTED", "No ha seleccionado una categoría valida.");
define("_MD_SPARTNER_NOTIFY", "Notificar la aprobación");
define("_MD_SPARTNER_READMORE", "Leer más...");
define("_MD_SPARTNER_SUBMIT_ERROR", "Ocurrió un error mientras se remitía la categoría.");
define("_MD_SPARTNER_SUBMIT_SUCCESS", "La categoría fue exitosamente remitida.");
define("_MD_SPARTNER_DETAIL_CAT", "Ver todas las categorías de esta categoría");
define("_MD_SPARTNER_EDIT", "Editar");
define("_MD_SPARTNER_DELETE", "Eliminar");
define("_MD_SPARTNER_JOIN", "Llegar a ser un patrocinador");
define("_MD_SPARTNER_PARTNERS", "Patrocinadores");
define("_MD_SPARTNER_PARTNERSTITLE", "Las categorías de ");
define("_MD_SPARTNER_PARTNER", "Patrocinador");
define("_MD_SPARTNER_DESCRIPTION", "Descripción");
define("_MD_SPARTNER_HITS", "Clics");
define("_MD_SPARTNER_NOPART", "Actualmente no hay categorías para mostrar.");
//file join.php
define("_MD_SPARTNER_IMAGE", "Logo");
define("_MD_SPARTNER_TITLE", "Nombre");
define("_MD_SPARTNER_URL", "Sitio Web:");
define("_MD_SPARTNER_SEND", "Enviar la petición");
define("_MD_SPARTNER_ERROR1", "No ha rellenado el formulario correctamente. Por favor, inténtelo otra vez.");
define("_MD_SPARTNER_ERROR2", "<center>El tamaño de la imagen es más grande que 110x50. <a href='javascript:history.back(1)'>Prueba con otra imagen</a></center>");
define("_MD_SPARTNER_ERROR3", "<center>El archivo de imagen no existe. <a href='javascript:history.back(1)'>Prueba con otra imagen</a></center>");
define("_MD_SPARTNER_GOBACK", "<a href='javascript:history.back(1)'>Volver</a>");
define("_MD_SPARTNER_NEWPARTNER", "%s patrocinadores han solicitado su ingreso");
define("_MD_SPARTNER_SENDMAIL", "Enviar email al administrador.<br /><a href='index.php'>Volver al índice</a>");
define("_MD_SPARTNER_CATEGORY_EMPTY", "Esta categoría está vacía.");

// Hack by marcan : More information on the SmartPartner module
define("_MD_SPARTNER_INTRO_TEXT", "Aquí hay una lista de nuestros Patrocinadores preferidos. Puede acceder a su sitio web haciendo clic en su logo");
define("_MD_SPARTNER_INTRO_JOIN", "¿Le gustaría llegar a ser un Patrocinador de %s? Rellene el siguiente formulario y contactaremos con Usted tan pronto como nos sea posible.");
define("_MD_SPARTNER_TITLE_DSC", "Nombre de su organización");
define("_MD_SPARTNER_IMAGE_DSC", "Dirección de su logo");
define("_MD_SPARTNER_URL_DSC", "Su sitio web");
define("_MD_SPARTNER_DESCRIPTION_DSC", "Descripción de Su organización");
define("_MD_SPARTNER_BACKTOINDEX", "Volver al índice de categorías");
define("_MD_SPARTNER_OFFER_INTRO", "Lista de ofertas");

?>