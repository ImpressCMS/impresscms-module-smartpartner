<?php

/**
* $Id: admin.php,v 1.7 2006/05/24 13:09:51 malanciault Exp $
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
	include_once XOOPS_ROOT_PATH . '/modules/smartpartner/language/german/common.php';
}

define("_AM_SPARTNER_ABOUT", "&Uuml;ber");
define("_AM_SPARTNER_ACTION", "Aktion");
define("_AM_SPARTNER_ACTIVATE_PARTNER", "Partner aktivieren");
define("_AM_SPARTNER_ACTIVE", _CO_SPARTNER_ACTIVE);
define("_AM_SPARTNER_ACTIVE_EDIT_SUCCESS", "Der Partner wurde erfolgreich editiert.");
define("_AM_SPARTNER_ACTIVE_EDITING", "Editieren eines aktiven Partners");
define("_AM_SPARTNER_ACTIVE_EDITING_INFO", "Sie k&ouml;nnen diesen aktiven Partner editieren. Modifikationen sind dem Benutzter sofort zug&auml;nglich.");
define("_AM_SPARTNER_ACTIVE_EXP", "<b>Aktive Partner</b> : Eigentlich aktiven Partner dieser Site.");
define("_AM_SPARTNER_ACTIVE_PARTNERS", "Aktive Partner");
define("_AM_SPARTNER_ACTIVE_PARTNERS_DSC", "Dies ist eine Liste aller aktiven Partner, welche dem Benutzer sichtbar sind. Sie k&ouml;nnen mittels Klickens auf eines Symbole in der <b>Aktions</b> Spalte ausw&auml;hlen, ob Sie einen der eingegebenen Partner l&ouml;schen oder editieren m&ouml;chten.");
define("_AM_SPARTNER_ALL", "Alle");
define("_AM_SPARTNER_ALL_EXP", "<b>Jeglicher Status</b> : Alle eingetragenen Partner, jeden Statuses.");
define("_AM_SPARTNER_ALLITEMS", "Alle eingetragenen Partner");
define("_AM_SPARTNER_ALLITEMSMSG", "W&auml;hlen Sie einen Status aus, um die Partner mit jenem Status augelistet zu bekommen. Sie haben auch die M&ouml;glichkeit, das Sortierverhalten zu bestimmen.");
define("_AM_SPARTNER_APPROVE", "Zustimmen");
define("_AM_SPARTNER_APPROVING", "Am zustimmen");
define("_AM_SPARTNER_ASC", "Aufsteigend");
define("_AM_SPARTNER_AVAILABLE", "<span style='font-weight: bold; color: green;'>Verf&uuml;gbar</span>");
define("_AM_SPARTNER_NOTWRITABLE", "<span style='font-weight: bold; color: red;'>Nicht beschreibbar</span>");
define("_AM_SPARTNER_BLOCKS", "Bl&ouml;cke und Gruppen");
define("_AM_SPARTNER_BLOCKSANDGROUPS", "Bl&ouml;cke und Gruppen");
define("_AM_SPARTNER_BLOCKSTXT", "Dieses Modul stellt Ihnen die folgenden Bl&ouml;cke zur verf&uuml;gung, welche Sie entweder hier, oder aber im System Modul einstellen k&ouml;nnen.");
define("_AM_SPARTNER_BY", "Von");
define("_AM_SPARTNER_CANCEL", _CO_SPARTNER_CANCEL);
define("_AM_SPARTNER_CLEAR", _CO_SPARTNER_CLEAR);
define("_AM_SPARTNER_CREATE", _CO_SPARTNER_CREATE);
define("_AM_SPARTNER_CREATETHEDIR", "Verzeichnis erstellen");
define("_AM_SPARTNER_SETMPERM", "Bitte Verzeichnisrechte setzen");
define("_AM_SPARTNER_DB_CHECKTABLES", "Check tables");
define("_AM_SPARTNER_DB_CURRENTVER", "Current version: <span class='currentVer'>%s</span>");
define("_AM_SPARTNER_DB_DBVER", "Database Version %s");
define("_AM_SPARTNER_DB_MSG_ADD_DATA", "Daten in die Tabelle geschrieben %s");
define("_AM_SPARTNER_DB_MSG_ADD_DATA_ERR", "Error adding data in table %s");
define("_AM_SPARTNER_DB_MSG_CHGFIELD", "Changing field %s in table %s");
define("_AM_SPARTNER_DB_MSG_CHGFIELD_ERR", "Error changing field %s in table %s");
define("_AM_SPARTNER_DB_MSG_CREATE_TABLE", "Table %s created");
define("_AM_SPARTNER_DB_MSG_CREATE_TABLE_ERR", "Error creating table %s");
define("_AM_SPARTNER_DB_MSG_NEWFIELD", "Successfully added field %s");
define("_AM_SPARTNER_DB_MSG_NEWFIELD_ERR", "Error adding field %s");
define("_AM_SPARTNER_DB_NEEDUPDATE", "Your database is out-of-date. Please upgrade your database tables!");
define("_AM_SPARTNER_DB_NEEDUPDATE_WARNING", "WARNING : The SmartFactory strongly recommends you to backup all SmartPartner tables before running this upgrade script.");
define("_AM_SPARTNER_DB_NOUPDATE", "Your database is up-to-date. No updates are necessary.");
define("_AM_SPARTNER_DB_UPDATE_DB", "Updating Database");
define("_AM_SPARTNER_DB_UPDATE_ERR", "Errors updating to version %s");
define("_AM_SPARTNER_DB_UPDATE_NOW", "Update Now!");
define("_AM_SPARTNER_DB_UPDATE_OK", "Successfully updated to version %s");
define("_AM_SPARTNER_DB_UPDATE_TO", "Updating to version %s");
define("_AM_SPARTNER_DELETE", "L&ouml;schen");
define("_AM_SPARTNER_DELETEPARTNER", _CO_SPARTNER_DELETEPARTNER);
define("_AM_SPARTNER_DELETEFILE","Delete file");
define("_AM_SPARTNER_DELETETHISP", "Wollen Sie wirklich diesen Partner l&ouml;schen?");
define("_AM_SPARTNER_DELETETHISFILE","Are you sure you want to delete this file?");
define("_AM_SPARTNER_DESC", "Abfallend");
define("_AM_SPARTNER_DESCRIPTION", _CO_SPARTNER_DESCRIPTION);
define("_AM_SPARTNER_DESCRIPTION_DSC", _CO_SPARTNER_DESCRIPTION_DSC);
define("_AM_SPARTNER_DIRCREATED", "Verzeichnis erfolgreich erstellt ");
define("_AM_SPARTNER_DIRNOTCREATED", "Das Verzeichnis konnte nicht erstellt werden ");
define("_AM_SPARTNER_EDITING", "Editieren");
define("_AM_SPARTNER_EDITPARTNER", _CO_SPARTNER_EDITPARTNER);
define("_AM_SPARTNER_FILE", "Files");
define("_AM_SPARTNER_FILE_ADD", "Adding a file");
define("_AM_SPARTNER_FILE_ADDING", "Adding a new file");
define("_AM_SPARTNER_FILE_ADDING_DSC", "Please fill the following form in order to add a new file to this partner.");
define("_AM_SPARTNER_FILE_DELETE_ERROR","An error occured while deleting the file.");
define("_AM_SPARTNER_FILE_DESCRIPTION", "Description");
define("_AM_SPARTNER_FILE_DESCRIPTION_DSC", "Description of the file to be uploaded.");
define("_AM_SPARTNER_FILE_EDITING", "Editing a file");
define("_AM_SPARTNER_FILE_EDITING_DSC", "You can edit this file. Modifications will immediatly take effect in the user side.");
define("_AM_SPARTNER_FILE_EDITING_ERROR", "An error occured while updating the file.");
define("_AM_SPARTNER_FILE_EDITING_SUCCESS", "The file was successfully modified.");
define("_AM_SPARTNER_FILE_INFORMATIONS", "File's informations");
define("_AM_SPARTNER_FILE_NAME", "Name");
define("_AM_SPARTNER_FILE_NAME_DSC", "Name that will be used to identify the file.");
define("_AM_SPARTNER_FILE_STATUS", "File visible ?");
define("_AM_SPARTNER_FILE_STATUS_DSC", "if you select no, the file will not be visible from the user side.");
define("_AM_SPARTNER_FILE_TO_UPLOAD", "File to upload :");
define("_AM_SPARTNER_FILE_UPLOAD_ANOTHER", "Upload again");
define("_AM_SPARTNER_FILEISDELETED","The file has been succesfully deleted") ;
define("_AM_SPARTNER_FILENAME", "File name");
define("_AM_SPARTNER_FILES_LINKED", "Files linked to this partner");

define("_AM_SPARTNER_GOMOD", "Zum Modul");
define("_AM_SPARTNER_GROUPS", "Gruppen");
define("_AM_SPARTNER_GROUPSINFO", "Konfigurieren Sie die Zugangsberechtigungen dieses Modules, f&uuml;r die jeweiligen Gruppen");
define("_AM_SPARTNER_HELP", "Hilfe");
define("_AM_SPARTNER_HITS", _CO_SPARTNER_HITS);
define("_AM_SPARTNER_ID", "Partner ID");
define("_AM_SPARTNER_IMPORT", "Importieren");
define("_AM_SPARTNER_IMPORT_ALL_PARTNERS", "Alle Partner");
define("_AM_SPARTNER_IMPORT_AUTOAPPROVE", "Automatische best&auml;tigung");
define("_AM_SPARTNER_IMPORT_BACK", "Zur&uuml;ck zur Import Seite");
define("_AM_SPARTNER_IMPORT_ERROR", "Ein Fehler trat w&auml;hrend des Importierens der Partner auf.");
define("_AM_SPARTNER_IMPORT_FILE_NOT_FOUND", "Importierte Datei wurde nicht unter <b>%s</b> gefunden");
define("_AM_SPARTNER_IMPORT_FROM", "Importiert von %s");
define("_AM_SPARTNER_IMPORT_INFO", "Sie k&ouml;nnen Partner aus anderen Modulen direkt in das SmartPartner Modul importieren. W&auml;hlen Sie einfach das Modul von dem Sie importieren m&ouml;chten aus, und klicken Sie auf <b>Importieren</b>.");
define("_AM_SPARTNER_IMPORT_MODULE_FOUND", "Das %s Modul wurde gefunden. Es befinden sich darin %s Partner, welche importiert werden k&ouml;nnen.");
define("_AM_SPARTNER_IMPORT_NO_MODULE", "Da XoopsPartners auf dieser Site nicht installiert ist, k&ouml;nnen keine Partner importiert werden.");
define("_AM_SPARTNER_IMPORT_PARTNER_ERROR", "Ein Fehler trat werden des Importierens von '%s' auf.");
define("_AM_SPARTNER_IMPORT_RESULT", "Hier ist das Result des Importes.");
define("_AM_SPARTNER_IMPORT_SETTINGS", "Import Einstellungen");
define("_AM_SPARTNER_IMPORT_SUCCESS", "Die Partner wurden erfolgreich importiert.");
define("_AM_SPARTNER_IMPORT_TITLE", "Partner Importieren");
define("_AM_SPARTNER_IMPORT_XOOPSPARTNERS_110", "Partner von XoopsPartners 1.1");
define("_AM_SPARTNER_IMPORTED_PARTNER", "Importierter Partner : <em>%s</em>");
define("_AM_SPARTNER_IMPORTED_PARTNERS", "Importierte Partner : <em>%s</em>");
define("_AM_SPARTNER_IMPORT_SELECTION", "Import Selektion");
define("_AM_SPARTNER_IMPORT_SELECT_FILE", "Partner");
define("_AM_SPARTNER_IMPORT_SELECT_FILE_DSC", "W&auml;hlen Sie das Modul aus, von welchem Sie importieren m&ouml;chten.");
define("_AM_SPARTNER_INACTIVATE_PARTNER", "Partner Deaktivieren");
define("_AM_SPARTNER_INACTIVE", _CO_SPARTNER_INACTIVE);
define("_AM_SPARTNER_INACTIVE_EDITING", "Einen inaktiven Partner editieren");
define("_AM_SPARTNER_INACTIVE_EDITING_INFO", "Sie k&ouml;nnen einen inaktiven Partner editieren. Ver&auml;nderungen werden abgespeichert. Beachten Sie jedoch, das Sie 'Nein' f&uuml;r das <b>Inaktive</b> Feld gew&auml;t haben.");
define("_AM_SPARTNER_INACTIVE_EXP", "<b>Inaktive Partner</b> : Aktive Partner die aus irgend einem Grund inaktive wurden. Inaktive Partner werden dem Benutzer nicht dargestellt.");
define("_AM_SPARTNER_INACTIVE_FIELD", "Inaktive");
define("_AM_SPARTNER_INACTIVE_PARTNERS", "Inaktive Partner");
define("_AM_SPARTNER_INDEX", "Index");
define("_AM_SPARTNER_INTRO", _CO_SPARTNER_INTRO);
define("_AM_SPARTNER_INVENTORY", _CO_SPARTNER_INVENTORY);
define("_AM_SPARTNER_LOGO", _CO_SPARTNER_LOGO);
define("_AM_SPARTNER_LOGO_DSC", _CO_SPARTNER_LOGO_DSC);
define("_AM_SPARTNER_LOGO_UPLOAD", _CO_SPARTNER_LOGO_UPLOAD);
define("_AM_SPARTNER_LOGO_UPLOAD_DSC", _CO_SPARTNER_LOGO_UPLOAD_DSC);
define("_AM_SPARTNER_MODADMIN", "Admin :");
define("_AM_SPARTNER_MODIFY", _CO_SPARTNER_MODIFY);
define("_AM_SPARTNER_NAME", _CO_SPARTNER_NAME);
define("_AM_SPARTNER_NO", "Nein");
define("_AM_SPARTNER_NOPARTNERS", _CO_SPARTNER_NOPARTNERS);
define("_AM_SPARTNER_NOTAVAILABLE", "<span style='font-weight: bold; color: red;'>Nicht Verf&uuml;gbar</span>");
define("_AM_SPARTNER_OPTS", "Einstellungen");
define("_AM_SPARTNER_OPTIONS", "Optionen");
define("_AM_SPARTNER_PARTNER", _CO_SPARTNER_PARTNER);
define("_AM_SPARTNER_PARTNER_APPROVE", "Diesen Partner Best&auml;tigen");
define("_AM_SPARTNER_PARTNER_CREATE", _CO_SPARTNER_PARTNER_CREATE);
define("_AM_SPARTNER_PARTNER_CREATED", _CO_SPARTNER_PARTNER_CREATED);
define("_AM_SPARTNER_PARTNER_CREATING", _CO_SPARTNER_PARTNER_CREATING);
define("_AM_SPARTNER_PARTNER_CREATING_DSC", _CO_SPARTNER_PARTNER_CREATING_DSC);
define("_AM_SPARTNER_PARTNER_DELETE", _CO_SPARTNER_PARTNER_DELETE);
define("_AM_SPARTNER_PARTNER_DELETE_ERROR", "Ein Fehler trat w&auml;hrend des Partnerl&ouml;schens auf.");
define("_AM_SPARTNER_PARTNER_DELETE_SUCCESS", "Der Partner wurde erfolgreich gel&ouml;scht.");
define("_AM_SPARTNER_PARTNER_EDIT", _CO_SPARTNER_PARTNER_EDIT);
define("_AM_SPARTNER_PARTNER_INFORMATIONS", _CO_SPARTNER_PARTNER_INFORMATIONS);
define("_AM_SPARTNER_PARTNER_NOT_CREATED", _CO_SPARTNER_PARTNER_NOT_CREATED);
define("_AM_SPARTNER_PARTNER_NOT_SELECTED", "Sie haben keinen g&uuml;ltigen Partner ausgew&auml;hlt.");
define("_AM_SPARTNER_PARTNER_NOT_UPDATED", _CO_SPARTNER_PARTNER_NOT_UPDATED);
define("_AM_SPARTNER_PARTNERS", _CO_SPARTNER_PARTNERS);
define("_AM_SPARTNER_PATH", "Pfad");
define("_AM_SPARTNER_PATH_ITEM", "Logo hochladen");
define("_AM_SPARTNER_PATH_IMAGES", "Partner Logo");
define("_AM_SPARTNER_PATHCONFIGURATION", "Modul Verzeichnis Konfiguration");
define("_AM_SPARTNER_POSITION", "Position");
define("_AM_SPARTNER_REJECTED", _CO_SPARTNER_REJECTED);
define("_AM_SPARTNER_REJECTED_EXP", "<b>Abgelehnte Partner</b> : Eingereichte Partner, welche abgelehnt wurden. Abgelehnte Partner sind Benutzern nicht ersichtlich.");
define("_AM_SPARTNER_REJECTED_PARTNERS", "Abgelehnte Partner");
define("_AM_SPARTNER_REJECTED_EDITING", "Abgelehnten Partner bearbeiten");
define("_AM_SPARTNER_REJECTED_EDITING_INFO", "Sie k&ouml;nnen diesen abgelehnten Partner bearbeiten. Die &Auml;nderungen f&uuml;r diesen Partner werden gespeichert. Wenn Sie jedoch den Partner im User-Bereich anzeigen m&ouml;chten m&uuml;ssen Sie das <b>Status</b> Feld auf 'Aktiv' setzen.");
define("_AM_SPARTNER_SELECT_SORT", "W&auml;len Sie eine Reihenfolge aus :");
define("_AM_SPARTNER_SELECT_STATUS", "W&auml;hlen Sie einen Status aus");
define('_AM_SB_SETMPERM','Berechtigungen setzen');
define("_AM_SPARTNER_NOFILE", "This partner does not have any attached files.");
define("_AM_SPARTNER_PATH_FILES", "Attached files");
define("_AM_SPARTNER_SHOWING", "Zeigt");
define("_AM_SPARTNER_SMARTPARTNER_IMPORT_SETTINGS", "SmartPartner Import Einstellungen");
define("_AM_SPARTNER_SMARTPARTNER_IMPORT_SETTINGS_VALUE", "Import Einstellungen sind nicht vorhanden. Bitte klicken Sie den Import Knopf, um das Importieren zu starten.");
define("_AM_SPARTNER_STATUS", _CO_SPARTNER_STATUS);
define("_AM_SPARTNER_STATUS_DSC", "W&auml;hlen Sie den Status des Partners. Inaktive Partner werden im &ouml;ffentlichen Bereich nicht angezeigt.");
define("_AM_SPARTNER_SUMMARY", _CO_SPARTNER_SUMMARY);
define("_AM_SPARTNER_SUMMARY_REQ", _CO_SPARTNER_SUMMARY_REQ);
define("_AM_SPARTNER_SUMMARY_DSC", _CO_SPARTNER_SUMMARY_DSC);
define("_AM_SPARTNER_SUBMITTED", _CO_SPARTNER_SUBMITTED);
define("_AM_SPARTNER_SUBMITTED_APPROVE_SUCCESS", "Der eingereichte Partner wurder Best&auml;tigt.");
define("_AM_SPARTNER_SUBMITTED_EXP", "<b>Eingereichte Partner</b> : Potentzielle Partner, die um eine Partnerschaft mit dieser Site ein Gesuch einreichten.");
define("_AM_SPARTNER_SUBMITTED_INFO", "Dieser Partner hat um Partnerschaft gebeten. Sie k&ouml;nnen die Eingaben nach belieben editieren. Sie k&ouml;nnen ver&auml;ndern was Sie wollen. Sobald die Best&auml;tigung erfolgt, wird dieser Partner ihren Benutzern ersichtlich.");
define("_AM_SPARTNER_SUBMITTED_PARTNERS", "Eingereichte Partner");
define("_AM_SPARTNER_SUBMITTED_TITLE", "Eingereichte Partner");
define("_AM_SPARTNER_TITLE", "Partner Name");
define("_AM_SPARTNER_TITLE_REQ", _CO_SPARTNER_TITLE_REQ);
define("_AM_SPARTNER_TOTAL_SUBMITTED", "Eingereicht : ");
define("_AM_SPARTNER_TOTAL_ACTIVE", "Aktive : ");
define("_AM_SPARTNER_TOTAL_REJECTED", "Abgelehnte : ");
define("_AM_SPARTNER_TOTAL_INACTIVE", "Inaktive : ");
define("_AM_SPARTNER_UPDATE_MODULE", "Modul updaten");
define("_AM_SPARTNER_URL", _CO_SPARTNER_URL);
define("_AM_SPARTNER_URL_DSC", _CO_SPARTNER_URL_DSC);
define("_AM_SPARTNER_WEIGHT", _CO_SPARTNER_WEIGHT);
define("_AM_SPARTNER_WEIGHT_DSC", _CO_SPARTNER_WEIGHT_DSC);
define("_AM_SPARTNER_YES", "Ja");


//Redirect messages
define("_AM_SPARTNER_NOTSET_ACTIVE_SUCCESS", "Der Partner wurde angelegt.");
define("_AM_SPARTNER_NOTSET_INACTIVE_SUCCESS", "Der Partner wurde angelegt und deaktiviert.");
define("_AM_SPARTNER_SUBMITTED_ACTIVE_SUCCESS", "Der &uuml;bertragene Partner wurde best&auml;tigt !");
define("_AM_SPARTNER_SUBMITTED_INACTIVE_SUCCESS", "Der &uuml;bertragene Partner wurde deaktiviert.");
define("_AM_SPARTNER_SUBMITTED_REJECTED_SUCCESS", "Der &uuml;bertragene Partner wurde abgelehnt.");
define("_AM_SPARTNER_ACTIVE_ACTIVE_SUCCESS", "Der Partner wurde aktualisiert.");
define("_AM_SPARTNER_ACTIVE_INACTIVE_SUCCESS", "Der Partner wurde deaktiviert.");
define("_AM_SPARTNER_INACTIVE_ACTIVE_SUCCESS", "Der inaktive Partner wurde aktiviert.");
define("_AM_SPARTNER_INACTIVE_INACTIVE_SUCCESS", "Der inaktive Partner wurde aktualisiert.");
define("_AM_SPARTNER_REJECTED_ACTIVE_SUCCESS", "Der abgelehnte Partner wurde aktiviert !");
define("_AM_SPARTNER_REJECTED_INACTIVE_SUCCESS", "Der abgelehnte Partner wurde deaktiviert.");
define("_AM_SPARTNER_REJECTED_REJECTED_SUCCESS", "Der abgelehnte Partner wurde aktualisiert.");


define("_AM_SPARTNER_CATEGORY_EDIT", "Kategorie bearbeiten");
define("_AM_SPARTNER_CATEGORY_DELETE", "Kategorie l&ouml;schen");
define("_AM_SPARTNER_CATEGORIES", "Kategorien");
define("_AM_SPARTNER_CATEGORIES_DSC", "Hier ist eine Liste von allen erstellten Kategorien des Moduls.");
define("_AM_SPARTNER_CATEGORIES_TITLE", "Erstellte Kategorien");
define("_AM_SPARTNER_CATEGORY", "Kategorie");
define("_AM_SPARTNER_CATEGORY_CREATE", "Kategorie erstellen");
define("_AM_SPARTNER_CATEGORY_CREATE_INFO", "F&uuml;lle die folgenden Felder der Reihe nach aus um eine neue Kategorie anzulegen. Diese wird automatisch auf der Userseite angezeigt.");
define("_AM_SPARTNER_CATEGORY_EDIT_INFO", "Hier kann die Kategorie bearbeitet werden. &Auml;nderungen werden sofort auf den Userseiten &uuml;bernommen.");
define("_AM_SPARTNER_CATEGORY_REQ", "Kategorie*");
define("_AM_SPARTNER_CATEGORY_SAVE_ERROR", "An error occured while saving the category. Here is a list of error(s) :");
define("_AM_SPARTNER_CATHEADER", "Kategorie Management");
define("_AM_SPARTNER_CATID","ID");
define("_AM_SPARTNER_CATEGORY_DSC", "Kategoriebeschreibung");
define("_AM_SPARTNER_CATEGORY_DELETED", "Kategorie %s wurde gel&ouml;scht");
define("_AM_SPARTNER_CATEGORY_MODIFIED", "Die Kategorie wurde erfolgreich bearbeitet.");
define("_AM_SPARTNER_CATEGORY_WEIGHT", "Kategoriebreite");
define("_AM_SPARTNER_CATEGORY_IMAGE", "Kategoriebild");
define("_AM_SPARTNER_CATEGORY_IMAGE_DSC", "Bild repr&auml;sentiert die Kategorie");
define("_AM_SPARTNER_CATEGORY_IMAGE_UPLOAD", "Bilderupload");
define("_AM_SPARTNER_CATEGORY_IMAGE_UPLOAD_DSC", "W&auml;hle ein Bild von deinem Computer. Dieses Bild wird hochgeladen und als Kategoriebild verwendet.");
define("_AM_SPARTNER_CATEGORY_CREATING", "Neue erstellen");
define("_AM_SPARTNER_CATEGORY_PARENT", "Standardkategorie");
define("_AM_SPARTNER_CATEGORY_PARENT_DSC", "W&auml;hle einen Standard f&uuml;r diese Unterkategorie.");
define("_AM_SPARTNER_CATEGORY_SUBCATS_CREATE","Unterkategorie erstellen");
define("_AM_SPARTNER_CATEGORY_SUBCATS_CREATE_DSC","Bitte den Namen der Unterkategorie zum Erstellen angeben.<br>Leer lassen, wenn keine erstellt wird. Sollen mehr erstellt werden, dann eingeben wie viele und 'Hinzuf&uuml;gen' klicken");
define("_AM_SPARTNER_ADD_OPT","%s Unterkategorien mehr hinzuf&uuml;gen");
define("_AM_SPARTNER_ADD_OPT_SUBMIT","Hinzuf&uuml;gen");
define("_AM_SPARTNER_CATEGORY_CREATED", "Neue Kategorie wurde erstellt und gespeichert!");
define("_AM_SPARTNER_CATEGORY_SUBCAT_SAVE_ERROR","An error occured while saving the category. Here is a list of error(s):");
define("_AM_SPARTNER_CATEGORY_DELETE_CONFIRM", "Please note that by deleting a category, all the sub-categories and the articles of this category will be deleted as well, along with any comments that may have been posted related to ces articles. Are you sure you wish to delete this category ?");
define("_AM_SPARTNER_CATEGORY_DELETE_ERROR", "An error occured while deleting this category.");
define("_AM_SPARTNER_CATEGORY_NONE", "There is no category in the module.");

//added with categories
define("_AM_SPARTNER_FILEUPLOAD_ERROR", "An error occured while uploading the file.");
define("_AM_SPARTNER_FILEUPLOAD_SUCCESS", "The file was successfully uploaded.");
define("_AM_SPARTNER_PATH_CATEGORY_IMAGES", "Kategoriebilder");
define("_AM_SPARTNER_CATEGORY_BELONG", "Kategorie");
define("_AM_SPARTNER_BELONG_CATEGORY_DSC", "Kategorie, die der Partner geh&ouml;rt");

define("_AM_SPARTNER_SUBCAT_CAT", "Unterkategorien");
define("_AM_SPARTNER_SUBCAT_CAT_DSC", "Liste der Unterkategorien dieser Kategorie");
define("_AM_SPARTNER_CATCOLNAME", "Name");
define("_AM_SPARTNER_UPLOAD", "Upload");
define("_AM_SPARTNER_UPLOAD_FILE", "Upload a file");
define("_AM_SPARTNER_UPLOAD_FILE_NEW", "Upload a new file");
define("_AM_SPARTNER_UPLOADED_DATE", "Uploaded");
define("_AM_SPARTNER_SUBDESCRIPT", "Beschreibung");
define("_AM_SPARTNER_NOSUBCAT", "Keine Unterkategorie erstellt");

//added with permissions and smartobjection

define("_AM_SPARTNER_OFFERS", "Offers");
define("_AM_SPARTNER_CREATINGNEW", "Creating");
define("_AM_SPARTNER_OFFER_CREATE", "Create an offer");
define("_AM_SPARTNER_OFFER_CREATE_INFO", "Fill this form in order to create an offer.");
define("_AM_SPARTNER_OFFERS_DSC", "Here is the list of offers.");
define("_AM_SPARTNER_OFFER_EDIT", "Edit an offer");
define("_AM_SPARTNER_OFFER_EDIT_INFO", "");
define("_AM_SPARTNER_SHOW_SUMMARY", "Show summary on partner page");
define("_AM_SPARTNER_SHOW_SUMMARY_DSC", "Note: if any users have partial view permissions, you should set this to 'yes.' Otherwise a partner detail page displayed in partial view mode will have no info at all other than the logo and name.");
define("_SMARTPARTNER_MESSAGE_FILE_ERROR", "Error: Unable to store uploaded file for the following reasons:<br />%s");
define("_SMARTPARTNER_MESSAGE_WRONG_MIMETYPE", "Error: filetype is not allowed. Please re-submit.");

?>