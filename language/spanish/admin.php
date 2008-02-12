<?php
//Traducci�n por debianus. Reporte de errores y sugerencias: http://es.impresscms.org
/**
$Id: admin.php,v 1.4 2007/09/19 17:53:35 felix Exp $
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

define("_AM_SPARTNER_ABOUT", "Acerca");
define("_AM_SPARTNER_ACTION", "Acci�n");
define("_AM_SPARTNER_ACTIVATE_PARTNER", "Activar patrocinador");
define("_AM_SPARTNER_ACTIVE", _CO_SPARTNER_ACTIVE);
define("_AM_SPARTNER_ACTIVE_EDIT_SUCCESS", "El patrocinador ha sido editado con �xito.");
define("_AM_SPARTNER_ACTIVE_EDITING", "Editar un patrocinador activo");
define("_AM_SPARTNER_ACTIVE_EDITING_INFO", "Puede editar este patrocinador activo. Las modificaciones tendr�n efecto inmediatamente en su perfil.");
define("_AM_SPARTNER_ACTIVE_EXP", "<b>Patrocinadores activos</b> : Actuales patrocinadores activos de este sitio.");
define("_AM_SPARTNER_ACTIVE_PARTNERS", "Patrocinadores activos");
define("_AM_SPARTNER_ACTIVE_PARTNERS_DSC", "
�sta es una lista de los patrocinadores activos que son mostrados a los usuarios. Puedes editar o eliminar cada patrocinador haciendo clic en el bot�n relacionado en la columna <b>Acci�n</b>.");
define("_AM_SPARTNER_ALL", "Todos");
define("_AM_SPARTNER_ALL_EXP", "<b>Lista completa</b> : Todos los patrocinadores inclu�dos en este m�dulo, cualquiera que sea su estado.");
define("_AM_SPARTNER_ALLITEMS", "Todos los patrocinadores del m�dulo");
define("_AM_SPARTNER_ALLITEMSMSG", "Seleccione un estado para ver todos los patrocinadores inclu�dos en el estado seleccionado. Tambi�n puede seleccionar la clase de orden en el que los patrocinadores son mostrados.");
define("_AM_SPARTNER_APPROVE", "Aprobar");
define("_AM_SPARTNER_APPROVING", "Aprobando");
define("_AM_SPARTNER_ASC", "Ascending");
define("_AM_SPARTNER_AVAILABLE", "<span style='font-weight: bold; color: green;'>Disponible</span>");
define("_AM_SPARTNER_NOTWRITABLE", "<span style='font-weight: bold; color: red;'>No escribible</span>");
define("_AM_SPARTNER_BLOCKS", "Bloques y grupos");
define("_AM_SPARTNER_BLOCKSANDGROUPS", "Bloques y grupos");
define("_AM_SPARTNER_BLOCKSTXT", "Este m�dulo tiene los siguientes bloques; los puede configurar aqu� o en el sistema de m�dulos.");
define("_AM_SPARTNER_BY", "Por");
define("_AM_SPARTNER_CANCEL", _CO_SPARTNER_CANCEL);
define("_AM_SPARTNER_CLEAR", _CO_SPARTNER_CLEAR);
define("_AM_SPARTNER_CREATE", _CO_SPARTNER_CREATE);
define("_AM_SPARTNER_CREATETHEDIR", "Crear la carpeta");
define("_AM_SPARTNER_SETMPERM", "Fijar los permisos de la carpeta");
define("_AM_SPARTNER_DB_CHECKTABLES", "Analizar las tablas");
define("_AM_SPARTNER_DB_CURRENTVER", "Versi�n actual: <span class='currentVer'>%s</span>");
define("_AM_SPARTNER_DB_DBVER", "Versi�n de la base de datos %s");
define("_AM_SPARTNER_DB_MSG_ADD_DATA", "Datos a�adidos en la tabla %s");
define("_AM_SPARTNER_DB_MSG_ADD_DATA_ERR", "Error a�adiendo datos en la tabla %s");
define("_AM_SPARTNER_DB_MSG_CHGFIELD", "Cambiando campos %s en la tabla %s");
define("_AM_SPARTNER_DB_MSG_CHGFIELD_ERR", "Error cambiando campo %s en la tabla %s");
define("_AM_SPARTNER_DB_MSG_CREATE_TABLE", "Tabla %s creada");
define("_AM_SPARTNER_DB_MSG_CREATE_TABLE_ERR", "Error creando la tabla %s");
define("_AM_SPARTNER_DB_MSG_NEWFIELD", "Campo a�adido exitosamente %s");
define("_AM_SPARTNER_DB_MSG_NEWFIELD_ERR", "Error a�adiendo campo %s");
define("_AM_SPARTNER_DB_NEEDUPDATE", "Su base de datos est� anticuada. Por favor, actualize las tablas de su base de datos");
define("_AM_SPARTNER_DB_NEEDUPDATE_WARNING", "ADVERTENCIA : SmartFactory recomienda encarecidamente que haga una copia de seguridad de todas las tablas del m�dulo antes de iniciar este script de actualizaci�n.");
define("_AM_SPARTNER_DB_NOUPDATE", "Su base de datos est� actualizada. No es necesario que actualice.");
define("_AM_SPARTNER_DB_UPDATE_DB", "Actualizando la base de datos");
define("_AM_SPARTNER_DB_UPDATE_ERR", "Errores actualizando a la version %s");
define("_AM_SPARTNER_DB_UPDATE_NOW", "Actualizar ahora");
define("_AM_SPARTNER_DB_UPDATE_OK", "Versi�n actualizada con �xito %s");
define("_AM_SPARTNER_DB_UPDATE_TO", "Actualizando a la versi�n %s");
define("_AM_SPARTNER_DELETEFILE","Eliminar archivo");
define("_AM_SPARTNER_DELETE", "Eliminar");
define("_AM_SPARTNER_DELETEPARTNER", _CO_SPARTNER_DELETEPARTNER);
define("_AM_SPARTNER_DELETETHISP", "�Est� seguro de eliminar a este patrocinador?");
define("_AM_SPARTNER_DELETETHISFILE","�Est� seguro de querer eliminar este archivo?");
define("_AM_SPARTNER_DESC", "Descendiendo");
define("_AM_SPARTNER_DESCRIPTION", _CO_SPARTNER_DESCRIPTION);
define("_AM_SPARTNER_DESCRIPTION_DSC", _CO_SPARTNER_DESCRIPTION_DSC);
define("_AM_SPARTNER_DIRCREATED", "Carpeta creada con �xito ");
define("_AM_SPARTNER_DIRNOTCREATED", "La carpeta no ha podido ser creada");
define("_AM_SPARTNER_EDITFILE","Editar archivo");
define("_AM_SPARTNER_EDITING","Editando");
define("_AM_SPARTNER_EDITPARTNER", _CO_SPARTNER_EDITPARTNER);
define("_AM_SPARTNER_FILE", "Archivos");
define("_AM_SPARTNER_FILE_ADD", "A�adiendo un archivo");
define("_AM_SPARTNER_FILE_ADDING", "A�adiendo un nuevo archivo");
define("_AM_SPARTNER_FILE_ADDING_DSC", "Por favor, rellene el siguiente formulario para a�adir un nuevo archivo a este patrocinador.");
define("_AM_SPARTNER_FILE_DELETE_ERROR","Hubo un error al eliminar este archivo..");
define("_AM_SPARTNER_FILE_DESCRIPTION", "Descripci�n");
define("_AM_SPARTNER_FILE_DESCRIPTION_DSC", "Descripci�n del archivo que se va a subir.");
define("_AM_SPARTNER_FILE_EDITING", "Editando un archivo");
define("_AM_SPARTNER_FILE_EDITING_DSC", "Puede editar este archivo. Las modificaciones estar�n visibles para los usuarios inmediatamente.");
define("_AM_SPARTNER_FILE_EDITING_ERROR", "Hubo un error al actualizar el archivo.");
define("_AM_SPARTNER_FILE_EDITING_SUCCESS", "El archivo fue modificado con �xito.");
define("_AM_SPARTNER_FILE_INFORMATIONS", "Informaci�n del archivo");
define("_AM_SPARTNER_FILE_NAME", "Nombre");
define("_AM_SPARTNER_FILE_NAME_DSC", "Nombre que ser� usado para identificar el archivo.");
define("_AM_SPARTNER_FILE_STATUS", "�Archivo visible?");
define("_AM_SPARTNER_FILE_STATUS_DSC", "Si selecciona 'No', el archivo no ser� visible para los usuarios.");
define("_AM_SPARTNER_FILE_TO_UPLOAD", "Archivo a subir :");
define("_AM_SPARTNER_FILE_UPLOAD_ANOTHER", "Subir de nuevo");
define("_AM_SPARTNER_FILEISDELETED","El archivo ha sido eliminado con �xito") ;
define("_AM_SPARTNER_FILENAME", "Nombre del archivo");
define("_AM_SPARTNER_FILES_LINKED", "Archivos enlazados con este patrocinador");
define("_AM_SPARTNER_GOMOD", "Ir al modulo");
define("_AM_SPARTNER_GROUPS", "Grupos");
define("_AM_SPARTNER_GROUPSINFO", "Configurar el m�dulo y los permisos de los bloques para cada m�dulO");
define("_AM_SPARTNER_HELP", "Ayuda");
define("_AM_SPARTNER_HITS", _CO_SPARTNER_HITS);
define("_AM_SPARTNER_ID", "Patrocinador (es) id");
define("_AM_SPARTNER_IMPORT", "Importar");
define("_AM_SPARTNER_IMPORT_ALL_PARTNERS", "Todos los patrocinadores");
define("_AM_SPARTNER_IMPORT_AUTOAPPROVE", "Autoaprobar");
define("_AM_SPARTNER_IMPORT_BACK", "Volver a la p�gina de importaci�n");
define("_AM_SPARTNER_IMPORT_ERROR", "Ocurri� un error mientras se importaba el patrocinador.");
define("_AM_SPARTNER_IMPORT_FILE_NOT_FOUND", "No se ha encontrado el archivo a importar <b>%s</b>");
define("_AM_SPARTNER_IMPORT_FROM", "Importando desde %s");
define("_AM_SPARTNER_IMPORT_INFO", "Puede importar patrocinadores directamente en SmartPartner. Simplemente seleccione el m�dulo desde el que le gustar�a importar los patrocinadores y haga clic en el bot�n de 'Importar'.");
define("_AM_SPARTNER_IMPORT_MODULE_FOUND", "%s m�dulo fue encontrado. Hay %s patrocinadores que pueden ser importados.");
define("_AM_SPARTNER_IMPORT_NO_MODULE", "Como XoopsPartners no est� instalado en este sitio, no hay patrocinadores a importar.");
define("_AM_SPARTNER_IMPORT_PARTNER_ERROR", "Ocurri� un error en el proceso de importaci�n '%s'.");
define("_AM_SPARTNER_IMPORT_RESULT", "Este es el resultado de la importaci�n.");
define("_AM_SPARTNER_IMPORT_SETTINGS", "Preferencias de la importaci�n");
define("_AM_SPARTNER_IMPORT_SUCCESS", "Los patrocinadores fueron importados con �xito en este m�dulo.");
define("_AM_SPARTNER_IMPORT_TITLE", "Importar patrocinadores");
define("_AM_SPARTNER_IMPORT_XOOPSPARTNERS_110", "Patrocinadores de XoopsPartners 1.1");
define("_AM_SPARTNER_IMPORTED_PARTNER", "Importar patrocinador : <em>%s</em>");
define("_AM_SPARTNER_IMPORTED_PARTNERS", "Patrocinadores importados : <em>%s</em>");
define("_AM_SPARTNER_IMPORT_SELECTION", "Selecci�n para importar");
define("_AM_SPARTNER_IMPORT_SELECT_FILE", "Patrocinadores");
define("_AM_SPARTNER_IMPORT_SELECT_FILE_DSC", "Elegir el m�dulo desde el cual importar los patrocinadores.");
define("_AM_SPARTNER_INACTIVATE_PARTNER", "Desactivar patrocinador");
define("_AM_SPARTNER_INACTIVE", _CO_SPARTNER_INACTIVE);
define("_AM_SPARTNER_INACTIVE_EDITING", "Editando un patrocinador inactivo");
define("_AM_SPARTNER_INACTIVE_EDITING_INFO", "Puede editar este patrocinador inactivo. Las modificaciones ser�n salvadas para este patrocinador. Sin embargo, si desea mostrar este patrocinador a los usuarios, necesitar� establecer el campo de <b>Estado</b> a 'Activo'.");
define("_AM_SPARTNER_INACTIVE_EXP", "<b>Inactive patrocinadors</b> : Activar patrocinadores que por alguna raz�n est�n inactivos. Un patrocinador inactivo no es mostrado a los usuarios.");
define("_AM_SPARTNER_INACTIVE_FIELD", "Inactivo");
define("_AM_SPARTNER_INACTIVE_PARTNERS", "Patrocinadores inactivos");
define("_AM_SPARTNER_INDEX", "�ndice");
define("_AM_SPARTNER_INTRO", _CO_SPARTNER_INTRO);
define("_AM_SPARTNER_INVENTORY", _CO_SPARTNER_INVENTORY);
define("_AM_SPARTNER_LOGO", _CO_SPARTNER_LOGO);
define("_AM_SPARTNER_LOGO_DSC", _CO_SPARTNER_LOGO_DSC);
define("_AM_SPARTNER_LOGO_UPLOAD", _CO_SPARTNER_LOGO_UPLOAD);
define("_AM_SPARTNER_LOGO_UPLOAD_DSC", _CO_SPARTNER_LOGO_UPLOAD_DSC);
define("_AM_SPARTNER_MODADMIN", "Administraci�n :");
define("_AM_SPARTNER_MODIFY", _CO_SPARTNER_MODIFY);
define("_AM_SPARTNER_NAME", _CO_SPARTNER_NAME);
define("_AM_SPARTNER_NO", "No");
define("_AM_SPARTNER_NOPARTNERS", _CO_SPARTNER_NOPARTNERS);
define("_AM_SPARTNER_NOTAVAILABLE", "<span style='font-weight: bold; color: red;'>Not available</span>");
define("_AM_SPARTNER_OPTS", "Preferencias");
define("_AM_SPARTNER_OPTIONS", "Opciones");
define("_AM_SPARTNER_PARTNER", _CO_SPARTNER_PARTNER);
define("_AM_SPARTNER_PARTNER_APPROVE", "Aprobar este patrocinador");
define("_AM_SPARTNER_PARTNER_CREATE", _CO_SPARTNER_PARTNER_CREATE);
define("_AM_SPARTNER_PARTNER_CREATED", _CO_SPARTNER_PARTNER_CREATED);
define("_AM_SPARTNER_PARTNER_CREATING", _CO_SPARTNER_PARTNER_CREATING);
define("_AM_SPARTNER_PARTNER_CREATING_DSC", _CO_SPARTNER_PARTNER_CREATING_DSC);
define("_AM_SPARTNER_PARTNER_DELETE", _CO_SPARTNER_PARTNER_DELETE);
define("_AM_SPARTNER_PARTNER_DELETE_ERROR", "Ocurri� un error eliminando este patrocinador.");
define("_AM_SPARTNER_PARTNER_DELETE_SUCCESS", "El patrocinador ha sido eliminado con �xito.");
define("_AM_SPARTNER_PARTNER_EDIT", _CO_SPARTNER_PARTNER_EDIT);
define("_AM_SPARTNER_PARTNER_INFORMATIONS", _CO_SPARTNER_PARTNER_INFORMATIONS);
define("_AM_SPARTNER_PARTNER_NOT_CREATED", _CO_SPARTNER_PARTNER_NOT_CREATED);
define("_AM_SPARTNER_PARTNER_NOT_SELECTED", "No has seleccionado un patrocinador v�lido.");
define("_AM_SPARTNER_PARTNER_NOT_UPDATED", _CO_SPARTNER_PARTNER_NOT_UPDATED);
define("_AM_SPARTNER_PARTNERS", _CO_SPARTNER_PARTNERS);
define("_AM_SPARTNER_PATH", "Ruta");
define("_AM_SPARTNER_PATH_ITEM", "Subir items");
define("_AM_SPARTNER_PATH_IMAGES", "Logo de los patrocinadores");
define("_AM_SPARTNER_PATHCONFIGURATION", "Ruta de la configuraci�n del m�dulo");
define("_AM_SPARTNER_POSITION", "Posici�n");
define("_AM_SPARTNER_REJECTED", _CO_SPARTNER_REJECTED);
define("_AM_SPARTNER_REJECTED_EXP", "<b>Patrocinadores rechazados</b> : Patrocinadores solicitantes que han sido rechazados; en tal caso no son mostrados a los usuarios.");
define("_AM_SPARTNER_REJECTED_PARTNERS", "Rechazar a los patrocinadores");
define("_AM_SPARTNER_REJECTED_EDITING", "Editando un patrocinador rechazado");
define("_AM_SPARTNER_REJECTED_EDITING_INFO", "Puede editar este patrocinador rechazado. Las modificaciones ser�n salvadas para este patrocinador. Sin embargo, si desea mostrar al mismo a los usuarios necesitar� establecer el campo <b>Estado</b> como 'Activo'.");
define("_AM_SPARTNER_SELECT_SORT", "Selecionar el orden para mostrar :");
define("_AM_SPARTNER_SELECT_STATUS", "Selecciona un estado");
define('_AM_SB_SETMPERM','Establecer los permisos');
define("_AM_SPARTNER_NOFILE", "Este patrocinador no tiene ning�n archivo relacionado.");
define("_AM_SPARTNER_PATH_FILES", "Archivos relacionados");
define("_AM_SPARTNER_SHOWING", "Mostrando");
define("_AM_SPARTNER_SMARTPARTNER_IMPORT_SETTINGS", "Preferencias de la importaci�n de SmartPartner");
define("_AM_SPARTNER_SMARTPARTNER_IMPORT_SETTINGS_VALUE", "No hay preferencias para la importaci�n. Por favor, haz clic en el bot�n de importar para comenzar el proceso.");
define("_AM_SPARTNER_STATUS", _CO_SPARTNER_STATUS);
define("_AM_SPARTNER_STATUS_DSC", "Seleccionar el estado del patrocinador. Los patrocinadores inactivos no son mostrados en la secci�n p�blica de la web.");
define("_AM_SPARTNER_SUMMARY", _CO_SPARTNER_SUMMARY);
define("_AM_SPARTNER_SUMMARY_REQ", _CO_SPARTNER_SUMMARY_REQ);
define("_AM_SPARTNER_SUMMARY_DSC", _CO_SPARTNER_SUMMARY_DSC);
define("_AM_SPARTNER_SUBMITTED", _CO_SPARTNER_SUBMITTED);
define("_AM_SPARTNER_SUBMITTED_APPROVE_SUCCESS", "El patrocinador solicitante ha sido aprobado.");
define("_AM_SPARTNER_SUBMITTED_EXP", "<b>Patrocinadores solicitantes</b> : Potenciales patrocinadores que han solicitado ser reconocidos como tales en este sitio.");
define("_AM_SPARTNER_SUBMITTED_INFO", "Este patrocinador ha solicitado ser inclu�do en tu sitio web. Puede editar su informaci�n como guste; puedes tambi�n hacer las modificaciones que desee. Una vez aprobada la solicitud ser� mostrado el patrocinador a los visitantes de la web.");
define("_AM_SPARTNER_SUBMITTED_PARTNERS", "Patrocinadores solicitantes");
define("_AM_SPARTNER_SUBMITTED_TITLE", "Patrocinador solicitante");
define("_AM_SPARTNER_TITLE", "Nombre del patrocinador");
define("_AM_SPARTNER_TITLE_REQ", _CO_SPARTNER_TITLE_REQ);
define("_AM_SPARTNER_TOTAL_SUBMITTED", "Solicitud : ");
define("_AM_SPARTNER_TOTAL_ACTIVE", "Activos : ");
define("_AM_SPARTNER_TOTAL_REJECTED", "Rechazados : ");
define("_AM_SPARTNER_TOTAL_INACTIVE", "Inactivos : ");
define("_AM_SPARTNER_UPDATE_MODULE", "Actualizar el m�dulo");
define("_AM_SPARTNER_URL", _CO_SPARTNER_URL);
define("_AM_SPARTNER_URL_DSC", _CO_SPARTNER_URL_DSC);
define("_AM_SPARTNER_WEIGHT", _CO_SPARTNER_WEIGHT);
define("_AM_SPARTNER_WEIGHT_DSC", _CO_SPARTNER_WEIGHT_DSC);
define("_AM_SPARTNER_YES", "S�");

//Redirect messages
define("_AM_SPARTNER_NOTSET_ACTIVE_SUCCESS", "El patrocinador ha sido creado.");
define("_AM_SPARTNER_NOTSET_INACTIVE_SUCCESS", "El patrocinador ha sido creado y desactivado.");
define("_AM_SPARTNER_SUBMITTED_ACTIVE_SUCCESS", "El patrocinador solicitante ha sido aprobado");
define("_AM_SPARTNER_SUBMITTED_INACTIVE_SUCCESS", "El patrocinador solicitante ha sido deactivado.");
define("_AM_SPARTNER_SUBMITTED_REJECTED_SUCCESS", "El patrocinador solicitante ha sido rechazado.");
define("_AM_SPARTNER_ACTIVE_ACTIVE_SUCCESS", "El patrocinador ha sido actualizado.");
define("_AM_SPARTNER_ACTIVE_INACTIVE_SUCCESS", "El patrocinador ha sido desactivado.");
define("_AM_SPARTNER_INACTIVE_ACTIVE_SUCCESS", "El patrocinador inactivo ha sido activado.");
define("_AM_SPARTNER_INACTIVE_INACTIVE_SUCCESS", "El patrocinador inactivo ha sido actualizado.");
define("_AM_SPARTNER_REJECTED_ACTIVE_SUCCESS", "El patrocinador rechazado ha sido activado");
define("_AM_SPARTNER_REJECTED_INACTIVE_SUCCESS", "El patrocinador rechazado ha sido desactivado.");
define("_AM_SPARTNER_REJECTED_REJECTED_SUCCESS", "El patrocinador rechazado ha sido actualizado.");


define("_AM_SPARTNER_CATEGORY_EDIT", "Editar categor�a");
define("_AM_SPARTNER_CATEGORY_DELETE", "Eliminar categor�a");
define("_AM_SPARTNER_CATEGORIES", "Categor�as");
define("_AM_SPARTNER_CATEGORIES_DSC", "Aqu� hay una lista de todas las categor�as creadas en el m�dulo.");
define("_AM_SPARTNER_CATEGORIES_TITLE", "Categor�as creadas");
define("_AM_SPARTNER_CATEGORY", "Categor�a");
define("_AM_SPARTNER_CATEGORY_CREATE", "Crear una categor�a");
define("_AM_SPARTNER_CATEGORY_CREATE_INFO", "Rellene el siguiente formulario para crear una nueva  categor�a. La nueva categor�a creada ser� autom�ticamente mostrada a los usuarios.");
define("_AM_SPARTNER_CATEGORY_EDIT_INFO", "Puede editar esta categor�a. Las modificaciones tendr�n efecto inmediato para los usuarios.");
define("_AM_SPARTNER_CATEGORY_REQ", "Categor�a*");
define("_AM_SPARTNER_CATEGORY_SAVE_ERROR", "Ocurri� un error mientras se salvaba la categor�a. Aqu� una lista de los error(es) :");
define("_AM_SPARTNER_CATHEADER", "Gesti�n de las categor�as");
define("_AM_SPARTNER_CATID","ID");
define("_AM_SPARTNER_CATEGORY_DSC", "Descripci�n de las categor�a");
define("_AM_SPARTNER_CATEGORY_DELETED", "La categor�a %s ha sido eliminada");
define("_AM_SPARTNER_CATEGORY_MODIFIED", "La categor�a fue modificada con �xito.");
define("_AM_SPARTNER_CATEGORY_WEIGHT", "Orden de la categor�a");
define("_AM_SPARTNER_CATEGORY_IMAGE", "Imagen de la categor�a");
define("_AM_SPARTNER_CATEGORY_IMAGE_DSC", "Imagen representativa de la categor�a");
define("_AM_SPARTNER_CATEGORY_IMAGE_UPLOAD", "Subir imagen");
define("_AM_SPARTNER_CATEGORY_IMAGE_UPLOAD_DSC", "Selecciona una imagen en su ordenador. Ser� subida al sitio y fijada como imagen de la categor�a.");
define("_AM_SPARTNER_CATEGORY_CREATING", "Creando nueva");
define("_AM_SPARTNER_CATEGORY_PARENT", "Categor�a ra�z");
define("_AM_SPARTNER_CATEGORY_PARENT_DSC", "Selecciona una categor�a base para crear esta sub-categor�a.");
define("_AM_SPARTNER_CATEGORY_SUBCATS_CREATE","Crear subcategor�as");
define("_AM_SPARTNER_CATEGORY_SUBCATS_CREATE_DSC","Complete la caja de texto con los nombres de las subcategor�as a crear.<br>D�jelo en blanco para no crearlas. Para crear m�s, indique todas las que quiera a�adir y despu�s haz clic en 'A�adir'");
define("_AM_SPARTNER_ADD_OPT","A�adir %s  m�s sub-categor�as");
define("_AM_SPARTNER_ADD_OPT_SUBMIT","A�adir");
define("_AM_SPARTNER_CATEGORY_CREATED", "La nueva categor�a ha sido creada y salvada la informaci�n");
define("_AM_SPARTNER_CATEGORY_SUBCAT_SAVE_ERROR","Ocurri� un error mientras se salvaba la categor�a. Aqu� hay una lista de los error(es):");
define("_AM_SPARTNER_CATEGORY_DELETE_CONFIRM", "Por favor, tenga en cuenta que eliminando una categor�a todas las subcategor�as y los art�culos de la misma ser�n eliminados tambi�n, as� como cualquier comentario que haya sido puesto relativo a sus art�culos. �Est� seguro que desea eliminar esta categor�a?.");
define("_AM_SPARTNER_CATEGORY_DELETE_ERROR", "Ocurri� un error mientras se eliminaba esta categor�a.");
define("_AM_SPARTNER_CATEGORY_NONE", "No hay categor�as en el m�dulo.");

//added with categories
define("_AM_SPARTNER_FILEUPLOAD_ERROR", "Ocurri� un error al subir el archivo.");
define("_AM_SPARTNER_FILEUPLOAD_SUCCESS", "El archivo fue subido con �xito.");
define("_AM_SPARTNER_PATH_CATEGORY_IMAGES", "Im�genes de las categor�a");
define("_AM_SPARTNER_CATEGORY_BELONG", "Categor�a");
define("_AM_SPARTNER_BELONG_CATEGORY_DSC", "Una o m�s categor�as a las cuales pertenece este patrocinador");

define("_AM_SPARTNER_SUBCAT_CAT", "Subcategor�as");
define("_AM_SPARTNER_SUBCAT_CAT_DSC", "Lista de las subcategor�as de esta categor�a");
define("_AM_SPARTNER_CATCOLNAME", "Nombre");
define("_AM_SPARTNER_UPLOAD", "Subir");
define("_AM_SPARTNER_UPLOAD_FILE", "Subir un archivo");
define("_AM_SPARTNER_UPLOAD_FILE_NEW", "Subir un nuevo archivo");
define("_AM_SPARTNER_UPLOADED_DATE", "Subido");
define("_AM_SPARTNER_SUBDESCRIPT", "Descripci�n");
define("_AM_SPARTNER_NOSUBCAT", "No hay subcategor�as creadas");

//added with permissions and smartobjection
define("_AM_SPARTNER_OFFERS", "Ofertas");
define("_AM_SPARTNER_CREATINGNEW", "Creando");
define("_AM_SPARTNER_OFFER_CREATE", "Crear una oferta");
define("_AM_SPARTNER_OFFER_CREATE_INFO", "Rellene este formulario para crear una oferta.");
define("_AM_SPARTNER_OFFERS_DSC", "Lista de ofertas.");
define("_AM_SPARTNER_OFFER_EDIT", "Edita una oferta");
define("_AM_SPARTNER_OFFER_EDIT_INFO", "");
define("_AM_SPARTNER_SHOW_SUMMARY", "Mostrar resumen en la p�gina del patrocinador");
define("_AM_SPARTNER_SHOW_SUMMARY_DSC", "Nota: si algunos usuarios tienen permisos de vista parcial, deber�a fijar esto en 'si'. De otra manera la p�gina con los detalles del patrocinador mostrada en la vista parcial no tendr� otra informaci�n que el logo y el nombre..");
define("_SMARTPARTNER_MESSAGE_FILE_ERROR", "Error: no fue posible almacenar el archivo subido por las siguientes razones:<br />%s");
define("_SMARTPARTNER_MESSAGE_WRONG_MIMETYPE", "Error: el tipo de archivo no est� permitido. Por favor, int�ntelo otra vez.");
?>