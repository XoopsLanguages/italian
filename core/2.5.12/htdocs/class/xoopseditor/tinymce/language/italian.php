<?php
/**
 *  TinyMCE adapter for XOOPS
 *
 * @copyright    (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          core
 * @subpackage       xoopseditor
 * @since            2.3.0
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 */
/*
 * Assocated with editor_registry.php
 */
// Nome dell'editor
define('_XOOPS_EDITOR_TINYMCE', 'TinyMCE');
// Il valore deve essere lo stesso di /tinymce/jscripts/langs/your_language_code, ad esempio, "en" per l'inglese, "fr" per il francese
// Per i dettagli, consulta http://tinymce.moxiecode.com/download_i18n.php
define('_XOOPS_EDITOR_TINYMCE_LANGUAGE', 'it');
// LISTA DEI CARATTERI, FORMATO: "Nome=valore1,valore2;Nome=valore"
define('_XOOPS_EDITOR_TINYMCE_FONTS', 'Arial=arial,helvetica,sans-serif;Courier New=courier new,courier,monospace;Georgia=georgia,times new roman,times,serif;Tahoma=tahoma,arial,helvetica,sans-serif;Times New Roman=times new roman,times,serif;Verdana=verdana,arial,helvetica,sans-serif;Impact=impact;WingDings=wingdings');
define('_FAILGETIMG', 'Impossibile ottenere l\'immagine %s');
